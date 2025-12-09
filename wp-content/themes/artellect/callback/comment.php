<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

// Запускаем буферизацию для JSON ответов
ob_start();

// Устанавливаем заголовок JSON
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Обработка добавления комментария
  handle_post_comment();
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Обработка получения комментариев
  handle_get_comments();
} else {
  http_response_code(405); // Method Not Allowed
  echo json_encode([
    'success' => false,
    'error' => 'Метод не разрешен. Используйте GET или POST запрос.',
    'error_code' => 'method_not_allowed'
  ]);
  exit;
}

// Функция для обработки POST запроса (добавление комментария)
function handle_post_comment()
{

  $name = sanitize_text_field($_POST['name'] ?? '');
  $comment_text = sanitize_textarea_field($_POST['comment'] ?? '');
  $post_id = intval($_POST['post_id'] ?? 0);

  // Валидация обязательных полей
  $errors = [];

  if (empty($name)) {
    $errors['name'] = 'Введите ваше имя';
  }

  if (empty($comment_text)) {
    $errors['comment'] = 'Введите текст комментария';
  }

  if ($post_id <= 0) {
    $errors['post'] = 'Не указан пост для комментария';
  }

  // Если есть ошибки валидации - возвращаем их
  if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
      'success' => false,
      'errors' => $errors,
      'error_code' => 'validation_error'
    ]);
    exit;
  }

  // Проверяем существование поста и его тип
  $post = get_post($post_id);

  if (!$post) {
    http_response_code(404);
    echo json_encode([
      'success' => false,
      'error' => 'Запись не найдена',
      'error_code' => 'post_not_found'
    ]);
    exit;
  }

  if ($post->post_type !== 'blog') {
    http_response_code(400);
    echo json_encode([
      'success' => false,
      'error' => 'Неверный тип записи',
      'error_code' => 'invalid_post_type'
    ]);
    exit;
  }

  // Проверяем, открыты ли комментарии для этого поста
  if ($post->comment_status !== 'open') {
    http_response_code(403);
    echo json_encode([
      'success' => false,
      'error' => 'Комментарии закрыты для этой записи',
      'error_code' => 'comments_closed'
    ]);
    exit;
  }

  // Создаем массив данных для комментария
  $commentdata = array(
    'comment_post_ID' => $post_id,
    'comment_author' => $name,
    'comment_content' => $comment_text,
    'comment_type' => '',
    'comment_parent' => 0,
    'user_id' => 0,
    'comment_author_IP' => $_SERVER['REMOTE_ADDR'],
    'comment_agent' => $_SERVER['HTTP_USER_AGENT'] ?? '',
    'comment_date' => current_time('mysql'),
    'comment_author_email' => '',
    'comment_author_url' => '',
    'comment_approved' => 0,
  );

  // Вставляем комментарий в базу данных
  $comment_id = wp_insert_comment(wp_slash($commentdata));

  if (is_wp_error($comment_id)) {
    http_response_code(500);
    echo json_encode([
      'success' => false,
      'error' => 'Ошибка при сохранении комментария: ' . $comment_id,
      'error_code' => 'database_error'
    ]);
    exit;
  }

  if ($comment_id) {
    // Добавляем мета-данные
    add_comment_meta($comment_id, 'blog_comment', 'true');
    add_comment_meta($comment_id, 'comment_status', 'pending');

    // Отправляем уведомление администратору
    try {
      send_comment_notification($comment_id, $post_id);
    } catch (Exception $e) {
      error_log('Ошибка отправки уведомления о комментарии: ' . $e->getMessage());
    }

    http_response_code(201);
    echo json_encode([
      'success' => true,
      'message' => 'Комментарий успешно отправлен на модерацию!',
      'comment_id' => $comment_id,
      'data' => [
        'author' => $name,
        'comment' => $comment_text,
        'timestamp' => current_time('mysql'),
        'status' => 'pending'
      ]
    ]);
    exit;
  } else {
    http_response_code(500);
    echo json_encode([
      'success' => false,
      'error' => 'Не удалось сохранить комментарий',
      'error_code' => 'save_error'
    ]);
    exit;
  }
}

// Функция для обработки GET запроса (получение комментариев)
function handle_get_comments()
{
  // Получаем параметры из GET запроса
  $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
  $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
  $per_page = isset($_GET['per_page']) ? intval($_GET['per_page']) : 6;

  // Валидация параметров
  if ($post_id <= 0) {
    http_response_code(400);
    echo json_encode([
      'success' => false,
      'error' => 'Не указан ID записи',
      'error_code' => 'missing_post_id'
    ]);
    exit;
  }

  if ($offset < 0) {
    $offset = 0;
  }

  if ($per_page <= 0 || $per_page > 20) {
    $per_page = 6;
  }

  // Проверяем существование поста
  $post = get_post($post_id);
  if (!$post) {
    http_response_code(404);
    echo json_encode([
      'success' => false,
      'error' => 'Запись не найдена',
      'error_code' => 'post_not_found'
    ]);
    exit;
  }

  // Получаем общее количество комментариев
  $total_comments = get_comments_number($post_id);

  // Получаем комментарии с пагинацией
  $comments = get_comments(array(
    'post_id' => $post_id,
    'status' => 'approve',
    'order' => 'DESC',
    'orderby' => 'comment_date',
    'number' => $per_page,
    'offset' => $offset
  ));

  // Генерируем HTML для комментариев
  $html = '';
  $count = 0;

  foreach ($comments as $comment) {
    $html .= generate_comment_html($comment);
    $count++;
  }

  // Формируем ответ
  $response = [
    'success' => true,
    'data' => [
      'html' => $html,
      'count' => $count,
      'total' => $total_comments,
      'offset' => $offset + $count,
      'has_more' => ($offset + $count) < $total_comments,
      'remaining' => max(0, $total_comments - ($offset + $count))
    ]
  ];

  echo json_encode($response);
  exit;
}

// Функция для генерации HTML комментария
function generate_comment_html($comment)
{
  $date = get_simple_date($comment->comment_date);

  $html = '<div class="art-article__review border-gradient">';
  $html .= '<div class="art-article__review-info">';
  $html .= '<div class="art-article__review-author">' . esc_html($comment->comment_author) . '</div>';
  $html .= '<div class="art-article__review-date">' . $date . '</div>';
  $html .= '</div>';
  $html .= '<div class="art-article__review-text">';
  $html .= wpautop(esc_html($comment->comment_content));
  $html .= '</div>';
  $html .= '</div>';

  return $html;
}

// Функция отправки уведомления
function send_comment_notification($comment_id, $post_id)
{
  $admin_email = get_option('admin_email');
  $post_title = get_the_title($post_id);
  $post_url = get_permalink($post_id);
  $comment = get_comment($comment_id);

  $subject = 'Новый комментарий на модерацию: ' . $post_title;

  $message = "<html><body>";
  $message .= "<h2>Новый комментарий на модерацию</h2>";
  $message .= "<p><strong>Запись:</strong> " . esc_html($post_title) . "</p>";
  $message .= "<p><strong>Ссылка:</strong> <a href='" . esc_url($post_url) . "'>" . esc_url($post_url) . "</a></p>";
  $message .= "<p><strong>Автор:</strong> " . esc_html($comment->comment_author) . "</p>";
  $message .= "<p><strong>IP адрес:</strong> " . esc_html($comment->comment_author_IP) . "</p>";
  $message .= "<p><strong>Дата:</strong> " . date('d.m.Y H:i', strtotime($comment->comment_date)) . "</p>";
  $message .= "<p><strong>Текст комментария:</strong></p>";
  $message .= "<div style='background:#f5f5f5; padding:15px; border-left:4px solid #0073aa; margin:10px 0;'>";
  $message .= nl2br(esc_html($comment->comment_content));
  $message .= "</div>";
  $message .= "<p>Для модерации перейдите в <a href='" . admin_url('edit-comments.php?comment_status=moderated') . "'>админ-панель WordPress</a>.</p>";
  $message .= "</body></html>";

  $headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: ' . get_bloginfo('name') . ' <' . $admin_email . '>'
  );

  return wp_mail('sverep529@mail.ru', $subject, $message, $headers);
}

// Очищаем буфер
ob_end_flush();
