<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'artellect');

/** Имя пользователя базы данных */
define('DB_USER', 'artellect');

/** Пароль к базе данных */
define('DB_PASSWORD', 'R!ware50@');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K%U%.|jEJ%8[I2qX)ewr[/)FK{hUW-QW:7ZKzBQ5q!e[wz*anJ^EpCAKea s^wFE');
define('SECURE_AUTH_KEY',  'E$mFgb2  ?BX2S)8E^l@_7y#)mpU&x@)e,J{9}_eCRK>*(|lE[2N.CH_2Xx}2qLJ');
define('LOGGED_IN_KEY',    '``:::nzn,luRaczAaM5^q[qs^i@!JBfV_9P#sbM+{LqVQ{&19DG[~rGv)IscJ/Y(');
define('NONCE_KEY',        '&=Pyv#|Ae<mLTufQ<L]OZ^&k+R+J2OL%zF+hnm,VbHh[<0yj]_d8#>|#h!:Xz.EC');
define('AUTH_SALT',        'z1F7UOy(eVdJGfzeGd;h>lk:SQGI)f_GuEy5=ys!zx![_E7jKZ^}<`TiYDFgqyb=');
define('SECURE_AUTH_SALT', 'Z9Z3PqE<1T=HDq{8{za0>XAB*e}4xCe7P,0.e:pAbZh!Vc(;YErd;v-P[Gz{J[z|');
define('LOGGED_IN_SALT',   '@xEI{Rx?dUYLse NQ^@Rc(=uTgg/uiB=zQohvv2DaD_JD}<fe<8>Q7IJd7Fd+n`(');
define('NONCE_SALT',       'lXn3ZAe^m`@DM<R7 F{3k)~#MJ8*>D$9!,|0U7:jS+1_>0tK!$zY=7vV^2vAUI g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (! defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
