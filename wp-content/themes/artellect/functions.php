<?php

/**
 * artellect functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artellect
 */

if (! defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

function allow_svg_upload($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  $mimes['ico'] = 'image/x-icon';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// Исправление MIME типа для SVG
function fix_svg_mime_type($data, $file, $filename, $mimes)
{
  $filetype = wp_check_filetype($filename, $mimes);
  if ($filetype['ext'] === 'svg' && $filetype['type'] === 'text/plain') {
    $data['ext'] = 'svg';
    $data['type'] = 'image/svg+xml';
  }
  return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function artellect_setup()
{
  /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on artellect, use a find and replace
		* to change 'artellect' to the name of your theme in all the template files.
		*/
  load_theme_textdomain('artellect', get_template_directory() . '/languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
  add_theme_support('title-tag');

  /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
  add_theme_support('post-thumbnails');

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'header_menu' => esc_html__('Меню шапки', 'artellect'),
      'footer_menu' => esc_html__('Меню подвала', 'artellect'),
    )
  );

  /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'artellect_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support('customize-selective-refresh-widgets');

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );
}
add_action('after_setup_theme', 'artellect_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function artellect_content_width()
{
  $GLOBALS['content_width'] = apply_filters('artellect_content_width', 640);
}
add_action('after_setup_theme', 'artellect_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function artellect_widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'artellect'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'artellect'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'artellect_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function artellect_scripts()
{
  wp_enqueue_style('artellect-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_enqueue_style('artellect-atropos-style', 'https://cdn.jsdelivr.net/npm/atropos@2.0.2/atropos.min.css', array(), _S_VERSION);
  wp_enqueue_style('artellect-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), _S_VERSION);
  wp_enqueue_style('artellect-fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), _S_VERSION);
  wp_enqueue_style('artellect-toastify-style', 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css', array(), _S_VERSION);
  wp_enqueue_style('artellect-main-old-style', get_template_directory_uri() . '/css/styles.css', array(), _S_VERSION);
  wp_enqueue_style('artellect-main-style', get_template_directory_uri() . '/css/style.min.css', array(), _S_VERSION);
  wp_style_add_data('artellect-style', 'rtl', 'replace');

  wp_enqueue_script('artellect-atropos-js', 'https://cdn.jsdelivr.net/npm/atropos@2.0.2/atropos.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-toastify-js', 'https://cdn.jsdelivr.net/npm/toastify-js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-navigation-js', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-customizer-js', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-app-js', get_template_directory_uri() . '/js/app.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-form-js', get_template_directory_uri() . '/js/form.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-popup-js', get_template_directory_uri() . '/js/popup.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-server-js', get_template_directory_uri() . '/js/calculator.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-server-js', get_template_directory_uri() . '/js/server.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-comment-js', get_template_directory_uri() . '/js/comment.js', array(), _S_VERSION, true);
  wp_enqueue_script('artellect-cookie-banner-js', get_template_directory_uri() . '/js/cookie-banner.js', array(), _S_VERSION, true);


  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'artellect_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}



// Регистрируем AJAX обработчики
add_action('wp_ajax_load_more_cases', 'load_more_cases_handler');
add_action('wp_ajax_nopriv_load_more_cases', 'load_more_cases_handler');

// Локализация скрипта
add_action('wp_enqueue_scripts', 'cases_ajax_scripts');
function cases_ajax_scripts()
{
  wp_localize_script('jquery', 'casesAjax', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('load_more_cases_nonce')
  ));
}

// Обработчик AJAX запроса
function load_more_cases_handler()
{
  // Проверяем nonce для безопасности
  if (!wp_verify_nonce($_POST['nonce'], 'load_more_cases_nonce')) {
    wp_die('Security check failed');
  }

  $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
  $posts_per_page = 6; // То же количество, что и на первой странице

  // Получаем параметры фильтра
  $selected_directions = isset($_POST['directions']) ? (array)$_POST['directions'] : [];
  $selected_industries = isset($_POST['industries']) ? (array)$_POST['industries'] : [];

  // Формируем аргументы для WP_Query
  $args = array(
    'post_type' => 'cases',
    'posts_per_page' => $posts_per_page,
    'post_status' => 'publish',
    'paged' => $page,
  );

  // Добавляем фильтрацию по таксономиям
  $tax_query = array('relation' => 'AND');

  if (!empty($selected_directions)) {
    $tax_query[] = array(
      'taxonomy' => 'direction',
      'field' => 'slug',
      'terms' => $selected_directions,
      'operator' => 'IN'
    );
  }

  if (!empty($selected_industries)) {
    $tax_query[] = array(
      'taxonomy' => 'industries',
      'field' => 'slug',
      'terms' => $selected_industries,
      'operator' => 'IN'
    );
  }

  if (count($tax_query) > 1) {
    $args['tax_query'] = $tax_query;
  }

  $cases_query = new WP_Query($args);

  ob_start();

  if ($cases_query->have_posts()) {
    while ($cases_query->have_posts()) {
      $cases_query->the_post();
?>
      <div class="case-preview border-gradient">
        <span class="case-preview__tag art-tag">Artellect-Кейсы</span>
        <div class="case-preview__icon">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="icon">
        </div>
        <div class="case-preview__image">
          <?php
          $image = get_field('case_anons_image');
          ?>
          <img src="<?= $image; ?>" width="440" height="551" alt="<?= get_the_title(); ?>">
        </div>
        <div class="case-preview__info border-gradient">
          <div class="case-preview__details">
            <?php
            $params = get_field('case_anons_results');
            if (!empty($params)) {
              foreach ($params as $param) {
            ?>
                <div class="case-preview__details-item">
                  <?= $param['case_anons_results_title']; ?> <span><?= $param['case_anons_results_value']; ?></span>
                </div>
            <?php }
            } ?>
          </div>
          <h3 class="case-preview__title"><?= get_field('case_anons_title'); ?></h3>
          <div class="case-preview__footer">
            <div class="case-preview__logo">
              <?php
              $client_logo = get_field('case_anons_logo');
              if ($client_logo): ?>
                <img src="<?= $client_logo; ?>" width="77" height="17" alt="client logo">
              <?php endif; ?>
            </div>
            <div class="case-preview__button">
              <a href="<?= get_permalink(); ?>" class="button-gradient"><span>Смотреть</span></a>
            </div>
          </div>
        </div>
      </div>
<?php
    }
    wp_reset_postdata();
  }

  $html = ob_get_clean();

  // Проверяем, есть ли еще посты
  $has_more = ($cases_query->found_posts > $page * $posts_per_page);

  wp_send_json_success(array(
    'html' => $html,
    'has_more' => $has_more,
    'found_posts' => $cases_query->found_posts
  ));
}




function custom_blog_rewrite_rules()
{
  // Устанавливаем базовый slug для типа поста blog
  add_rewrite_rule(
    '^blog/page/([0-9]+)/?$',
    'index.php?post_type=blog&paged=$matches[1]',
    'top'
  );

  // ВАЖНО: Сначала исключения, потом общие правила

  // ИСКЛЮЧЕНИЕ: /blog/category/all-posts/ - показываем все посты
  add_rewrite_rule(
    '^blog/category/all-posts/?$',
    'index.php?post_type=blog&show_all_posts=1',
    'top'
  );

  // ИСКЛЮЧЕНИЕ: /blog/category/all-posts/page/номер/
  add_rewrite_rule(
    '^blog/category/all-posts/page/([0-9]+)/?$',
    'index.php?post_type=blog&show_all_posts=1&paged=$matches[1]',
    'top'
  );

  // ИСКЛЮЧЕНИЕ: /blog/category/all-posts/tag/тег/
  add_rewrite_rule(
    '^blog/category/all-posts/tag/([^/]+(?:/[^/]+)*)/?$',
    'index.php?post_type=blog&show_all_posts=1&post_tag=$matches[1]',
    'top'
  );

  // КОМБИНИРОВАННЫЕ ПРАВИЛА (категории + теги) - 8 вариантов
  // 1. /blog/category/кат1/кат2/tag/тег1/тег2/
  add_rewrite_rule(
    '^blog/category/(?!all-posts/)([^/]+(?:/[^/]+)*)/tag/([^/]+(?:/[^/]+)*)/?$',
    'index.php?post_type=blog&categories=$matches[1]&post_tag=$matches[2]',
    'top'
  );

  // ПРАВИЛА ТОЛЬКО ДЛЯ КАТЕГОРИЙ
  // /blog/category/кат1/кат2/ (но не all-posts)
  add_rewrite_rule(
    '^blog/category/(?!all-posts/?$)([^/]+(?:/[^/]+)*)/?$',
    'index.php?post_type=blog&categories=$matches[1]',
    'top'
  );

  // ПРАВИЛА ТОЛЬКО ДЛЯ ТЕГОВ
  // 7. /blog/tag/тег1/тег2/
  add_rewrite_rule(
    '^blog/tag/([^/]+(?:/[^/]+)*)/?$',
    'index.php?post_type=blog&post_tag=$matches[1]',
    'top'
  );

  // Правило для архива блога
  add_rewrite_rule(
    '^blog/?$',
    'index.php?post_type=blog',
    'top'
  );
}
add_action('init', 'custom_blog_rewrite_rules');

// Добавляем кастомные переменные запроса
function add_custom_query_vars($vars)
{
  $vars[] = 'categories';
  $vars[] = 'post_tag';
  $vars[] = 'show_all_posts'; // Добавляем флаг для all-posts
  return $vars;
}
add_filter('query_vars', 'add_custom_query_vars');

// ОБРАБОТКА МНОЖЕСТВЕННЫХ КАТЕГОРИЙ И ТЕГОВ
function handle_multiple_taxonomies($query)
{
  // Только для главного запроса на фронтенде
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  // Проверяем, что это запрос для типа поста blog
  $post_type = $query->get('post_type');
  if ($post_type !== 'blog') {
    return;
  }

  // Проверяем флаг show_all_posts - если он есть, не применяем фильтры по категориям
  $show_all_posts = $query->get('show_all_posts');

  if ($show_all_posts) {
    // Для /blog/category/all-posts/ - не применяем фильтр по категориям
    // Но можем применять фильтр по тегам если он есть
    $tags = $query->get('post_tag');
    $tax_query = array();

    // Обрабатываем теги (если есть в URL)
    if ($tags) {
      $tag_slugs = explode('/', $tags);
      $tag_slugs = array_map('trim', $tag_slugs);
      $tag_slugs = array_filter($tag_slugs);

      if (!empty($tag_slugs)) {
        $tax_query[] = array(
          'taxonomy' => 'post_tag',
          'field'    => 'slug',
          'terms'    => $tag_slugs,
          'operator' => 'AND'
        );
      }
    }

    // Применяем tax_query если есть теги
    if (!empty($tax_query)) {
      $query->set('tax_query', $tax_query);
    }

    return; // Выходим, не применяем фильтры по категориям
  }

  // Получаем параметры из URL (стандартная обработка)
  $categories = $query->get('categories');
  $tags = $query->get('post_tag');

  $tax_query = array();

  // Обрабатываем категории (если есть в URL)
  if ($categories && $categories !== 'all-posts') { // Добавляем проверку
    $cat_slugs = explode('/', $categories);
    $cat_slugs = array_map('trim', $cat_slugs);
    $cat_slugs = array_filter($cat_slugs);

    if (!empty($cat_slugs)) {
      $tax_query[] = array(
        'taxonomy' => 'categories', // ваша кастомная таксономия
        'field'    => 'slug',
        'terms'    => $cat_slugs,
        'operator' => 'AND' // Все категории должны совпадать
      );
    }
  }

  // Обрабатываем теги (если есть в URL)
  if ($tags) {
    $tag_slugs = explode('/', $tags);
    $tag_slugs = array_map('trim', $tag_slugs);
    $tag_slugs = array_filter($tag_slugs);

    if (!empty($tag_slugs)) {
      $tax_query[] = array(
        'taxonomy' => 'post_tag',
        'field'    => 'slug',
        'terms'    => $tag_slugs,
        'operator' => 'AND'
      );
    }
  }

  // Если есть и категории и теги, добавляем relation
  if (count($tax_query) > 1) {
    $tax_query['relation'] = 'AND';
  }

  // Применяем tax_query если есть фильтры
  if (!empty($tax_query)) {
    $query->set('tax_query', $tax_query);
  }
}
add_action('pre_get_posts', 'handle_multiple_taxonomies');

// Функция для модификации ссылки "Все записи"
function modify_all_posts_link($url, $term, $taxonomy)
{
  // Для таксономии categories добавляем ссылку на all-posts
  if ($taxonomy === 'categories') {
    // Можно создать специальную ссылку для "всех записей"
    // Например, если slug категории равен 'all-posts'
    if ($term->slug === 'all-posts') {
      return home_url('/blog/category/all-posts/');
    }
    return home_url('/blog/category/' . $term->slug . '/');
  }

  // Для тегов
  if ($taxonomy === 'post_tag') {
    return home_url('/blog/tag/' . $term->slug . '/');
  }

  return $url;
}
add_filter('term_link', 'modify_all_posts_link', 10, 3);

// Функция для создания ссылки "Все записи"
function get_all_posts_blog_link()
{
  return home_url('/blog/category/all-posts/');
}

// Функция для проверки, является ли текущая страница "Все записи"
function is_blog_all_posts_page()
{
  if (is_post_type_archive('blog')) {
    $current_url = $_SERVER['REQUEST_URI'];
    return strpos($current_url, '/blog/category/all-posts/') !== false;
  }
  return false;
}

// Функция для получения текущих фильтров с учетом all-posts
function get_current_blog_filters_with_all_posts()
{
  $filters = array(
    'categories' => array(),
    'tags' => array(),
    'is_all_posts' => false
  );

  $current_url = $_SERVER['REQUEST_URI'];

  // Проверяем, это ли страница "Все записи"
  if (strpos($current_url, '/blog/category/all-posts/') !== false) {
    $filters['is_all_posts'] = true;

    // Парсим теги если они есть
    if (preg_match('#/blog/category/all-posts/tag/([^/]+(?:/[^/]+)*)/?#', $current_url, $matches)) {
      if (isset($matches[1])) {
        $filters['tags'] = explode('/', $matches[1]);
      }
    }
  } else {
    // Стандартная обработка
    if (preg_match('#/blog/category/([^/]+(?:/[^/]+)*)(?:/tag/([^/]+(?:/[^/]+)*))?/?$#', $current_url, $matches)) {
      if (isset($matches[1])) {
        $filters['categories'] = explode('/', $matches[1]);
      }
      if (isset($matches[2])) {
        $filters['tags'] = explode('/', $matches[2]);
      }
    } elseif (preg_match('#/blog/tag/([^/]+(?:/[^/]+)*)/?$#', $current_url, $matches)) {
      if (isset($matches[1])) {
        $filters['tags'] = explode('/', $matches[1]);
      }
    }
  }

  return $filters;
}

// СБРОС REWRITE RULES ПРИ АКТИВАЦИИ
function flush_blog_rewrite_rules()
{
  custom_blog_rewrite_rules();
  flush_rewrite_rules();
}

// Если добавляете как плагин
register_activation_hook(__FILE__, 'flush_blog_rewrite_rules');

// Или для темы, добавьте в functions.php и сбросьте вручную:
add_action('after_switch_theme', 'flush_blog_rewrite_rules');



function get_post_views_number($post_id = null)
{
  // Если ID поста не указан, берем текущий
  if (!$post_id) {
    $post_id = get_the_ID();
  }

  // Проверяем, что это нужный тип записи (blog)
  if (get_post_type($post_id) !== 'blog') {
    return 0;
  }

  // Получаем мета-поле с количеством просмотров
  $count = get_post_meta($post_id, 'post_views_count', true);

  // Если поле пустое, возвращаем 0
  if ($count === '' || $count === false) {
    return 0;
  }

  // Преобразуем в число
  return intval($count);
}


function display_post_views_with_text($post_id = null)
{
  if (!$post_id) {
    $post_id = get_the_ID();
  }

  $views = get_post_views_number($post_id);

  // Определяем правильное окончание
  $last_digit = $views % 10;
  $last_two_digits = $views % 100;

  if ($last_digit == 1 && $last_two_digits != 11) {
    $text = 'просмотр';
  } elseif (in_array($last_digit, [2, 3, 4]) && !in_array($last_two_digits, [12, 13, 14])) {
    $text = 'просмотра';
  } else {
    $text = 'просмотров';
  }

  return $views . ' ' . $text;
}
function track_view_by_ip()
{
  if (!is_singular('blog')) {
    return;
  }

  $post_id = get_the_ID();
  $user_ip = $_SERVER['REMOTE_ADDR'];

  // Создаем уникальный ключ на основе IP и ID поста
  $view_key = 'view_ip_' . md5($post_id . $user_ip);

  // Проверяем, был ли просмотр с этого IP за последние 24 часа
  if (false === get_transient($view_key)) {
    // Увеличиваем счетчик
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);

    if (empty($count)) {
      $count = 1;
      add_post_meta($post_id, $count_key, $count);
    } else {
      $count++;
      update_post_meta($post_id, $count_key, $count);
    }

    // Сохраняем transient на 24 часа
    set_transient($view_key, 'viewed', 24 * HOUR_IN_SECONDS);

    // Также устанавливаем cookie для надежности
    setcookie('viewed_post_' . $post_id, '1', time() + (24 * 3600), COOKIEPATH, COOKIE_DOMAIN);
  }
}
add_action('template_redirect', 'track_view_by_ip', 20);


function get_simple_date($date_string)
{
  // Преобразуем строку в timestamp
  $date_timestamp = strtotime($date_string);

  // Если не удалось распарсить дату
  if ($date_timestamp === false) {
    return date('d.m.Y, H:i', time());
  }

  // Текущая дата
  $today = date('Y-m-d');
  $yesterday = date('Y-m-d', strtotime('-1 day'));

  // Дата комментария
  $comment_date = date('Y-m-d', $date_timestamp);

  // Проверяем
  if ($comment_date == $today) {
    return 'Сегодня, ' . date('H:i', $date_timestamp);
  } elseif ($comment_date == $yesterday) {
    return 'Вчера, ' . date('H:i', $date_timestamp);
  } else {
    return date('d.m.Y, H:i', $date_timestamp);
  }
}


function is_cookie_accepted()
{
  return isset($_COOKIE['cookie_accepted']) && $_COOKIE['cookie_accepted'] === 'true';
}
