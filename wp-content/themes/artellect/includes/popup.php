<?php
define('SHORTINIT', true);

$theme_dir = dirname(__DIR__);
$theme_dir_name = basename($theme_dir);

$site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

$custom_theme_uri = $site_url . '/wp-content/themes/' . $theme_dir_name;

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

$title = $_GET['title'] ?? 'Заполните заявку';
$subtitle = $_GET['subtitle'] ?? 'для подробного аудита';
?>

<div class="discount-popup popup">
  <div class="discount-popup__body popup__body">
    <div class="atropos my-atropos2">
      <div class="atropos-scale">
        <div class="atropos-rotate">
          <div class="atropos-inner request-card">
            <div class="request-card__title" data-atropos-offset="4">
              <span class="gradient-text"><?= $title; ?></span> <?= $subtitle; ?>
            </div>
            <div class="request-card__subtitle">
              Закажите наш аудит<br>
              Мы досконально проанализируем ваши рекламные кампании и дадим рекомендации
            </div>
            <form class="request-card__form"
              method="POST"
              data-send="<?= $custom_theme_uri; ?>/callback/callback.php?template=callback"
              data-hash="<?= $custom_theme_uri; ?>/callback/get_hash.php">
              <div class="request-card__form-row">
                <div class="form-area border-rainbow" data-atropos-offset="4">
                  <input type="text" class="form-area__input" placeholder="Введите ваше имя" name="name" required>
                </div>
                <div class="form-area border-rainbow" data-atropos-offset="4">
                  <input type="text" inputmode="tel" class="form-area__input tel-mask" name="phone" required
                    placeholder="+7 (495) *** - ** - **">
                </div>
              </div>
              <div class="request-card__form-row">
                <p class="policy-agree">Нажимая на кнопку я даю свое информированное согласие на <a href="/privacy">обработку
                    персональных данных</a>
                </p>
                <button type="submit" class="button-decore" data-atropos-offset="10">Заказать аудит</button>
              </div>
            </form>
            <div class="request-card__bg">
              <picture>
                <source srcset="<?= $custom_theme_uri; ?>/img/card-bg-dark.webp" type="image/webp"><img src="<?= $custom_theme_uri; ?>/img/card-bg-dark.png" width="1126"
                  height="524" alt="card bg">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>