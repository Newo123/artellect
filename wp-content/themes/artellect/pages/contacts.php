<?php

/**
 * Template Name: Шаблон страницы Контакты
 */

$phone = get_field('site_phone', 'options');
$email = get_field('site_email', 'options');
$worktime = get_field('site_worktime', 'options');
$info = get_field('site_info', 'options');
get_header();

?>

<main>
  <section class="art-contacts">
    <div class="art-contacts__body container">
      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('services')): ?>
          <a href="<?= get_post_type_archive_link('services'); ?>" class="breadcrumbs__link">Контакты</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <span class="breadcrumbs__current">Контакты</span>
        <?php endif; ?>
      </div>
      <div class="art-contacts__name page-name">Digital-агентство Artellect</div>
      <h1 class="art-contacts__title main-title">Контактная информация</h1>
      <div class="art-contacts__email">
        <video src="files/monkey.mp4" muted playsinline autoplay loop></video>
        <a href="<?= $email['url']; ?>">
          <?= $email['title']; ?>
          <svg>
            <use xlink:href="#icon-arrow-right"></use>
          </svg>
        </a>
      </div>
      <div class="art-contacts__items">
        <div class="art-contacts__item">
          <div class="art-contacts__item-icon border-gradient">
            <svg>
              <use xlink:href="#icon-phone"></use>
            </svg>
          </div>
          <div class="art-contacts__item-text">
            <p>Телефон</p>
            <a href="<?= $phone['url']; ?>"><?= $phone['title']; ?></a>
          </div>
        </div>
        <div class="art-contacts__item">
          <div class="art-contacts__item-icon border-gradient">
            <svg>
              <use xlink:href="#icon-clock"></use>
            </svg>
          </div>
          <div class="art-contacts__item-text">
            <p>Время работы</p>
            <p><?= $worktime; ?></p>
          </div>
        </div>
      </div>
      <?php if (!empty($info)): ?>
        <div class="art-contacts__legal">
          <div class="art-contacts__legal-title">Реквизиты</div>
          <?php foreach ($info as $item): ?>
            <p><?= $item['site_info_item']; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="section-form">
    <div class="section-form__body container">
      <div class="atropos my-atropos2">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <div class="atropos-inner request-card">
              <div class="request-card__title" data-atropos-offset="4">
                Заполните форму
              </div>
              <div class="request-card__subtitle">
                Закажите наш аудит<br>
                Мы досконально проанализируем ваши рекламные кампании и дадим рекомендации
              </div>
              <form class="request-card__form"
                method="POST"
                data-send="<?= get_template_directory_uri(); ?>/callback/callback.php?template=callback"
                data-hash="<?= get_template_directory_uri(); ?>/callback/get_hash.php">
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
                  <p class="policy-agree">Нажимая на кнопку я даю свое информированное согласие на <a
                      href="">обработку
                      персональных данных</a>
                  </p>
                  <button type="submit" class="button-decore" data-atropos-offset="10">Отправить</button>
                </div>
              </form>
              <div class="request-card__bg">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/card-bg-light.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/card-bg-light.png" width="1126" height="524" alt="card bg">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>


<?php
get_footer();
