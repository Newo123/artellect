<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

// Запускаем буферизацию для JSON ответов
ob_start();

// Устанавливаем заголовок JSON
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $expire = time() + (30 * 24 * 60 * 60);
  $domain = parse_url(get_site_url(), PHP_URL_HOST);
  $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

  // Устанавливаем cookie через setcookie и header для надежности
  $cookie_set = setcookie('cookie_accepted', 'true', [
    'expires' => $expire,
    'path' => '/',
    'domain' => $domain,
    'secure' => $secure,
    'httponly' => false, // Чтобы JS мог прочитать
    'samesite' => 'Lax'
  ]);

  // Также устанавливаем в $_COOKIE для текущего запроса
  $_COOKIE['cookie_accepted'] = 'true';

  if ($cookie_set) {
    wp_send_json_success(['message' => 'Cookies успешно установлены']);
  } else {
    wp_send_json_error(['message' => 'Ошибка при установки cookies']);
  }
} else {
  http_response_code(405); // Method Not Allowed
  echo json_encode([
    'success' => false,
    'error' => 'Метод не разрешен. Используйте GET или POST запрос.',
    'error_code' => 'method_not_allowed'
  ]);
  exit;
}






// Очищаем буфер
ob_end_flush();
