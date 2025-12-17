<?php
require get_template_directory() . '/inc/get-menu.php';
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artellect
 */

$menu_items = get_menu('header_menu');

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#000000">
  <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
  <script type='application/ld+json'>
    {
      "@context": "https://www.schema.org",
      "@type": "LocalBusiness",
      "name": "Artellect",
      "url": "https://artellect-agency.ru/",
      "logo": "https://artellect-agency.ru/images/logo_a.png",
      "description": "Маркетинговое digital (диджитал) агентство в Москве. Цифровой интернет-маркетинг полного цикла для вашего бизнеса. Реклама, SEO, SMM, креативный performance b2b. Заказать на сайте и по телефону.",
      "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 10:00-19:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+7 495 021-25-33"
      }
    }
  </script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL76J8Z"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <noscript>
    <div><img src="https://mc.yandex.ru/watch/94140999" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>


  <header class="header">
    <div class="header__body container">
      <div class="header__logo">
        <a href="<?= get_home_url(); ?>" class="header__logo-link" aria-label="На главную">
          <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" class="header__logo-icon" width="52" height="52" alt="Artellect icon">
        </a>
        <div class="header__logo-text">
          <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" class="header__logo-name" width="102" height="19" alt="Artellect logo">
          <p>бизнес-драйвер вашего успеха</p>
        </div>
      </div>
      <div class="header__contacts">
        <div class="header__phone">
          <a href="<?= get_field('site_phone', 'options')['url']; ?>" class="header__phone-link">
            <svg>
              <use xlink:href="#icon-phone"></use>
            </svg>
            <?= get_field('site_phone', 'options')['title']; ?>
          </a>

          <?php
          // Устанавливаем московское время
          date_default_timezone_set('Europe/Moscow');

          $currentHour = date("H");
          $currentDay = date("w"); // 0 - воскресенье, 1 - понедельник, ..., 6 - суббота
          $openTime = 10;
          $closeTime = 19;

          // Проверяем, рабочий ли день (пн-пт)
          $isWorkingDay = ($currentDay >= 1 && $currentDay <= 5); // 1-5 = пн-пт

          // Проверяем, открыто ли сейчас
          $isOpenNow = false;
          if ($isWorkingDay && $currentHour >= $openTime && $currentHour < $closeTime) {
            $isOpenNow = true;
          }

          // Формируем сообщение для нерабочего времени
          if (!$isOpenNow) {
            // Если сегодня выходной (суббота или воскресенье)
            if ($currentDay == 6 || $currentDay == 0) { // 6 = суббота, 0 = воскресенье
              $message = "На подзарядке, вернемся в пн 10.00 по Мск";
            } else {
              // Если рабочий день, но не рабочее время (до 10:00 или после 19:00)
              $message = "На подзарядке, вернемся в 10.00 по Мск";
            }
          }

          // Выводим результат
          if ($isOpenNow) {
            echo '
<div class="header__phone-time"><span class="-green"></span>вJOBываем пн-пт с 10.00 до 19.00</div>';
          } else {
            echo '
<div class="header__phone-time"><span class="-red"></span>' . $message . '</div>';
          }
          ?>
        </div>
        <div class="header__telegram">
          <div class="header__telegram-line"></div>
          <a href="<?= get_field('site_tg', 'options')['url']; ?>" target="_blank" class="header__telegram-link" aria-label="Telegram">
            <svg>
              <use xlink:href="#icon-telegram"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="header__menu menu">
        <button type="button" class="menu__icon open-popup" data-popup="menuPopup">
          <div class="menu__icon-line"></div>
          <div class="menu__icon-line"></div>
          <div class="menu__icon-line"></div>
        </button>
        <div class="menu__telegram">
          <div class="menu__telegram-line"></div>
          <a href="<?= get_field('site_tg', 'options')['url']; ?>" target="_blank" class="menu__telegram-link" aria-label="Telegram">
            <svg>
              <use xlink:href="#icon-telegram"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>
  <div class="menu-popup popup" id="menuPopup">
    <div class="menu-popup__body popup__body">
      <div class="request-card">
        <div class="menu-popup__logo">
          <img src="<?= get_template_directory_uri(); ?>/img/logo-brand.svg" width="166" height="52" alt="logo">
        </div>
        <div class="menu-popup__main">
          <div class="menu-popup__contacts">
            <a href="<?= get_field('site_phone', 'options')['url']; ?>" class="menu-popup__contact">
              <svg>
                <use xlink:href="#icon-phone"></use>
              </svg>
              <?= get_field('site_phone', 'options')['title']; ?>
            </a>
            <a href="<?= get_field('site_email', 'options')['url']; ?>" class="menu-popup__contact">
              <svg>
                <use xlink:href="#icon-mail"></use>
              </svg>
              <?= get_field('site_email', 'options')['title']; ?>
            </a>
            <span class="menu-popup__contact">
              <svg>
                <use xlink:href="#icon-clock"></use>
              </svg>
              время работы <?= get_field('site_worktime', 'options'); ?>
            </span>
          </div>


          <?php if ($menu_items): ?>
            <nav class="menu-popup__nav">
              <ul>
                <?php foreach ($menu_items as $index => $item): ?>
                  <li><a href="<?= $item->url; ?>"><?= $item->title; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </nav>

          <?php endif; ?>

        </div>
        <div class="menu-popup__write">
          <a href="<?= get_field('site_email_general', 'options')['url']; ?>">Написать генеральному директору</a>
        </div>

        <div class="request-card__bg">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/card-bg-dark.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/card-bg-dark.png" width="1126"
              height="524" alt="card bg">
          </picture>
        </div>
      </div>

    </div>
    <div class="menu-popup__close popup__close">
      <svg>
        <use xlink:href="#icon-close"></use>
      </svg>
    </div>
  </div>