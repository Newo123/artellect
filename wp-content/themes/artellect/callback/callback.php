<?php

session_start();

require __DIR__ . '/../../../../wp-load.php';
// https://artellect.bitrix24.ru/rest/9/hsvi5hs0u9bf9su8/crm.lead.add.json

/**
 * 1. Функция отправки на почту
 * 
 * @param array $data Данные формы
 * @param array $config Конфигурация SMTP
 * @param string $template Имя шаблона письма
 * @return array Результат отправки
 */
function sendMail($data, $config, $template = 'callback')
{
  try {
    // Извлекаем данные для шаблона
    extract($data);
    $link_page = $_SERVER['HTTP_REFERER'] ?? '';

    // Генерируем тело письма из шаблона
    ob_start();
    $template_path = 'mail-tpl/' . $template . ".tpl";
    if (file_exists($template_path)) {
      require($template_path);
    } else {
      // Шаблон по умолчанию
      require('mail-tpl/callback.tpl');
    }
    $body = ob_get_clean();

    // Подключаем PHPMailer
    require_once('phpmailer/class.phpmailer.php');

    // Настраиваем отправку
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPDebug = $config['debug'];
    $mail->SMTPAuth = $config['auth'];
    $mail->Port = $config['smtp_port'];
    $mail->SMTPSecure = $config['secure'];
    $mail->CharSet = 'UTF-8';
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->Subject = 'Форма обратной связи с сайта';

    // Настраиваем отправителя и получателя
    $mail->SetFrom($config['smtp_username'], $config['site_name'] ?? 'Сайт');
    $mail->AddAddress($config['email_alert']);

    // Добавляем копии если есть
    if (!empty($config['email_copy'])) {
      $copies = is_array($config['email_copy']) ? $config['email_copy'] : [$config['email_copy']];
      foreach ($copies as $copy_email) {
        $mail->AddCC($copy_email);
      }
    }

    // Устанавливаем тело письма
    $mail->MsgHTML($body);

    // Отправляем
    $is_sent = $mail->Send();

    return [
      'success' => $is_sent === true,
      'message' => $is_sent ? 'Письмо отправлено' : 'Ошибка отправки письма',
      'error' => $is_sent ? null : $mail->ErrorInfo
    ];
  } catch (Exception $e) {
    return [
      'success' => false,
      'message' => 'Ошибка PHPMailer',
      'error' => $e->getMessage()
    ];
  }
}



/**
 * 2. Функция отправки в Bitrix24
 * 
 * @param array $data Данные формы
 * @param array $config Конфигурация Bitrix24
 * @param string $template Тип формы (для заголовка)
 * @return array Результат отправки
 */
function sendToBitrix24($data, $config, $template = 'callback')
{
  try {
    // Проверяем наличие вебхука
    if (empty($config['webhook_url'])) {
      return [
        'success' => false,
        'message' => 'Bitrix24 не настроен',
        'error' => 'Отсутствует webhook_url',
      ];
    }

    // Извлекаем нужные поля
    $name = $data['name'] ?? '';
    $phone = $data['phone'] ?? '';
    $email = $data['email'] ?? '';
    $message = $data['message'] ?? '';
    $page_url = $data['page_url'] ?? $_SERVER['HTTP_REFERER'] ?? '';
    $job = $data['job'] ?? '';
    $scope = $data['scope'] ?? '';
    $message = $data['message'] ?? '';

    // Форматируем телефон
    $phone_clean = preg_replace('/[^0-9]/', '', $phone);

    // Создаем заголовок лида
    $lead_title = 'Заявка с сайта';
    if (!empty($name)) {
      $lead_title .= ' от ' . $name;
    }
    $lead_title .= ' (' . date('d.m.Y H:i') . ')';

    // Подготавливаем комментарии
    $comments = "Данные из формы:\n\n";
    foreach ($data as $key => $value) {
      if (!empty($value) && !in_array($key, ['hash', 'action'])) {
        $field_name = str_replace(['_', '-'], ' ', $key);
        $comments .= ucfirst($field_name) . ": " . $value . "\n";
      }
    }
    $comments .= "\nСтраница: " . $page_url . "\n";
    $comments .= "Время: " . date('d.m.Y H:i:s');

    // Формируем данные для Bitrix24
    $lead_data = [
      'fields' => [
        'TITLE' => $lead_title,
        'NAME' => $name,
        'PHONE' => [['VALUE' => $phone_clean, 'VALUE_TYPE' => 'MOBILE']],
        'UF_CRM_1764344658' => $page_url,
        'SOURCE_ID' => $config['source_id'] ?? 'WEB',
        'SOURCE_DESCRIPTION' => 'Форма: ' . $template,
        'COMMENTS' => $comments,
        'ASSIGNED_BY_ID' => $config['assigned_user_id'] ?? 1,
        'UF_CRM_1676659423907' => $scope,
        'POST' => $job,
        'UF_CRM_1678995888084' => $message
      ]
    ];

    // Добавляем email если есть
    if (!empty($email)) {
      $lead_data['fields']['EMAIL'] = [['VALUE' => $email, 'VALUE_TYPE' => 'WORK']];
    }

    // Добавляем UTM метки если есть
    $utm_fields = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
    foreach ($utm_fields as $utm_field) {
      if (!empty($data[$utm_field])) {
        $lead_data['fields'][strtoupper($utm_field)] = $data[$utm_field];
      }
    }

    // Отправляем запрос
    $ch = curl_init($config['webhook_url']);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => http_build_query($lead_data),
      CURLOPT_TIMEOUT => 10,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => false,
    ]);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close($ch);

    // Проверяем ответ
    if ($http_code === 200) {
      $response_data = @json_decode($response, true);
      $is_success = isset($response_data['result']);

      return [
        'success' => $is_success,
        'message' => $is_success ? 'Заявка успешно отправлена' : 'Возникла ошибка',
        'lead_id' => $response_data['result'] ?? null,
        'response' => $response_data
      ];
    }

    return [
      'success' => false,
      'message' => 'Ошибка HTTP при отправке в Bitrix24',
      'error' => 'HTTP код: ' . $http_code . ($curl_error ? ' | ' . $curl_error : ''),
      'http_code' => $http_code
    ];
  } catch (Exception $e) {
    return [
      'success' => false,
      'message' => 'Ошибка отправки в Bitrix24',
      'error' => $e->getMessage()
    ];
  }
}


/**
 * 3. Главная функция - точка входа
 * 
 * @return array Результат обработки формы
 */
function main()
{
  // Проверка безопасности
  if (empty($_POST['hash']) || hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . date('Y-M')) !== $_POST['hash']) {
    return [
      'success' => false,
      'message' => 'Ошибка безопасности',
      'type' => 'security_error'
    ];
  }


  // Подготавливаем данные из формы
  $form_data = [];
  foreach ($_POST as $key => $value) {
    if ($key !== 'hash') {
      $form_data[$key] = is_string($value) ? trim($value) : $value;
    }
  }

  // Добавляем метаданные
  $form_data['page_url'] = $_SERVER['HTTP_REFERER'] ?? '';
  $form_data['ip_address'] = $_SERVER['REMOTE_ADDR'] ?? '';
  $form_data['user_agent'] = $_SERVER['HTTP_USER_AGENT'] ?? '';
  $form_data['timestamp'] = date('Y-m-d H:i:s');


  $base_config = [
    'site_name' => get_bloginfo('name') ?: 'Сайт',
    'debug' => 1,
    'auth' => true,
    'secure' => 'ssl'
  ];

  // Конфигурация для почты
  $mail_config = array_merge($base_config, [
    'smtp_host' => '',
    'smtp_port' => 465,
    'smtp_username' => 'noreply@artellect-agency.ru',
    'smtp_password' => '',
    'email_alert' => '',
    'email_copy' => []
  ]);

  // Конфигурация для Bitrix24
  $bitrix_config = array_merge($base_config, [
    'webhook_url' => '',
    'assigned_user_id' => 1,
    'source_id' => 'WEB'
  ]);

  if (function_exists('get_field')) {
    $mail_settings = get_field('site_emails_to', 'options');

    if ($mail_settings) {
      $mail_config['smtp_host'] = $mail_settings['smtp_host'] ?? $mail_config['smtp_host'];
      $mail_config['smtp_port'] = $mail_settings['smtp_port'] ?? $mail_config['smtp_port'];
      $mail_config['smtp_username'] = $mail_settings['smtp_username'] ?? $mail_config['smtp_username'];
      $mail_config['smtp_password'] = $mail_settings['smtp_password'] ?? $mail_config['smtp_password'];
      $mail_config['email_alert'] = $mail_settings['email_alert'] ?? $mail_config['smtp_password'];
    }

    // Настройки Bitrix24
    $bitrix_settings = get_field('site_bitrix24_settings', 'options');
    if ($bitrix_settings) {
      $bitrix_config['webhook_url'] = $bitrix_settings['site_bitrix24_webhook_url'] ?? '';
      $bitrix_config['assigned_user_id'] = $bitrix_settings['site_bitrix24_assigned_user_id'] ?? $bitrix_config['assigned_user_id'];
      $bitrix_config['source_id'] = $bitrix_settings['site_bitrix24_source_id'] ?? $bitrix_config['source_id'];
    }
  }

  // Получаем тип шаблона
  $template = $_GET['template'] ?? 'callback';

  // Отправляем на почту
  $mail_result = sendMail($form_data, $mail_config, $template);

  // Отправляем в Bitrix24
  $bitrix_result = sendToBitrix24($form_data, $bitrix_config, $template);


  // Формируем итоговый ответ
  $response = [
    'success' => $mail_result['success'] || $bitrix_result['success'],
    'mail' => $mail_result,
    'bitrix24' => $bitrix_result,
    'timestamp' => $form_data['timestamp'],
    'data' => $form_data
  ];



  // Определяем статус сообщения
  if ($mail_result['success'] && $bitrix_result['success']) {
    $response['message'] = 'Заявка успешно отправлена!';
    $response['type'] = 'full_success';
  } elseif ($mail_result['success']) {
    $response['message'] = 'Заявка успешно отправлена!';
    $response['type'] = 'mail_only';
  } elseif ($bitrix_result['success']) {
    $response['message'] = 'Заявка успешно отправлена!';
    $response['type'] = 'bitrix_only';
  } else {
    $response['message'] = 'Ошибка отправки заявки';
    $response['type'] = 'error';
  }

  return $response;
}


// Выполняем и возвращаем результат
header('Content-Type: application/json; charset=utf-8');
echo json_encode(main(), JSON_UNESCAPED_UNICODE);
