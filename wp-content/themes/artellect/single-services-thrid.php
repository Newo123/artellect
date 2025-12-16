<?php

/**
 * Template Name: Шаблон записи Услуга 3
 * Template Post Type: services
 */

get_header();
?>
<main>
  <?php

  $title = get_field('service_3_title', $post->ID);
  $motivations = get_field('service_3_motivations', $post->ID);
  $image = get_field('service_3_image', $post->ID);
  $motivation_text = get_field('service_3_motivation_text', $post->ID);
  ?>
  <section class="ads-hero ya-hero">
    <div class="ads-hero__body container">
      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('services')): ?>
          <a href="<?= get_post_type_archive_link('services'); ?>" class="breadcrumbs__link">Услуги</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <span class="breadcrumbs__current">Услуги</span>
        <?php endif; ?>
      </div>
      <div class="ads-hero__name page-name">Digital-агентство Artellect</div>
      <h1 class="ads-hero__title main-title"><?= $title; ?></h1>
      <?php if (!empty($motivations)): ?>
        <div class="ads-hero__benefits">
          <?php foreach ($motivations as $item): ?>
            <div class="ads-hero__benefit"><?= $item['service_3_motivations_item']; ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="ads-hero__cards">
        <div class="ads-hero__card border-gradient">
          <div class="ads-hero__card-head">
            <?php if ($motivation_text): ?>
              <p><?= $motivation_text; ?></p>
            <?php endif; ?>
          </div>
          <div class="ads-hero__card-main">
            <div class="ads-hero__card-image">
              <img src="<?= $image; ?>" width="758" height="488" alt="screen image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  $why_title = get_field('service_3_why_title', $post->ID);
  $why_image = get_field('service_3_why_image', $post->ID);
  $why_list = get_field('service_3_why_list', $post->ID);
  $why_subtitle = get_field('service_3_why_subtitle', $post->ID);
  $why_subtitle_text = get_field('service_3_why_subtitle_text', $post->ID);
  $why_items = get_field('service_3_why_items', $post->ID);


  if ($why_title):
  ?>
    <section class="ya-benefit">
      <div class="ya-benefit__body container">
        <div class="ya-benefit__card border-gradient">
          <h2 class="ya-benefit__title section-title"><?= $why_title; ?></h2>
          <div class="ya-benefit__descr">
            <?php if ($why_image): ?>
              <img src="<?= $why_image; ?>" width="356" height="49" alt="<?= the_title(); ?>">
            <?php endif; ?>
            <?php if (!empty($why_list)): ?>
              <div class="ya-benefit__row">
                <?php foreach ($why_list as $item): ?>
                  <div class="ya-benefit__col"><?= $item['service_3_why_list_text']; ?></div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="ya-benefit__card border-gradient">
          <div>
            <?php if ($why_subtitle): ?>
              <div class="ya-benefit__subtitle"><?= $why_subtitle; ?></div>
            <?php endif; ?>
            <?php if ($why_subtitle_text): ?>
              <p><?= $why_subtitle_text; ?></p>
            <?php endif; ?>
          </div>
          <?php if (!empty($why_items)): ?>
            <div class="ya-benefit__slider swiper">
              <div class="swiper-wrapper">
                <?php foreach ($why_items as $index => $item): ?>
                  <div class="ya-benefit__slide swiper-slide">
                    <div class="ya-benefit__num gradient-text"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                    <div class="ya-benefit__text"><?= $item['service_3_why_items_item']; ?></div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="ya-benefit__panel">
            <div class="ya-benefit__navigation">
              <button class="ya-benefit__slider-prev slider-prev border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button class="ya-benefit__slider-next slider-next border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <section class="section-form">
    <div class="section-form__body container">
      <div class="atropos my-atropos2">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <div class="atropos-inner request-card">
              <div class="request-card__title" data-atropos-offset="4">
                <span class="rainbow-text">Бесплатная диагностика</span>
                вашего маркетинга
              </div>
              <div class="request-card__subtitle">
                Закажите наш аудит <br>
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

  <?php
  $advantages_title = get_field('service_3_advantages_title', $post->ID);
  $advantages_text = get_field('service_3_advantages_text', $post->ID);
  $advantages_certification_text = get_field('service_3_advantages_certification_text', $post->ID);
  $advantages_certification_image = get_field('service_3_advantages_certification_image', $post->ID);
  $advantages_items = get_field('service_3_advantages_items', $post->ID);
  if ($advantages_title):
  ?>
    <section class="ya-advantages">
      <div class="ya-advantages__body container">
        <div class="ya-advantages__head">
          <div class="ya-advantages__info">
            <h2 class="ya-advantages__title section-title"><?= $advantages_title; ?></h2>
            <?php if ($advantages_text): ?>
              <div class="ya-advantages__subtitle"><?= $advantages_text; ?></div>
            <?php endif; ?>
          </div>
          <?php if ($advantages_certification_text): ?>
            <h3 class="ya-advantages__slogan border-gradient">
              <p><?= $advantages_certification_text; ?></p>
              <img src="<?= $advantages_certification_image; ?>" width="119" height="118" alt="<?= $advantages_certification_text; ?>">
            </h3>
          <?php endif; ?>
        </div>
        <?php if (!empty($advantages_items)): ?>
          <div class="ya-advantages__items">
            <?php foreach ($advantages_items as $item): ?>
              <div class="ya-advantages__item">
                <div class="ya-advantages__icon">
                  <img src="<?= $item['service_3_advantages_items_image']; ?>" width="180" height="180" alt="<?= $item['service_3_advantages_items_title']; ?>">
                </div>
                <div class="ya-advantages__details border-gradient">
                  <div class="ya-advantages__name"><?= $item['service_3_advantages_items_title']; ?></div>
                  <div class="ya-advantages__descr"><?= $item['service_3_advantages_items_text']; ?></div>
                  <div class="ya-advantages__button">
                    <button type="button" class="button-gradient open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php"><span>Заказать аудит</span></button>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>


  <?php

  $stages_title = get_field('service_3_stages_title', $post->ID);
  $stages_list = get_field('service_3_stages_list', $post->ID);
  $stages_subtitle = get_field('service_3_stages_subtitle', $post->ID);
  $stages_description = get_field('service_3_stages_description', $post->ID);
  $stages_logos = get_field('service_3_stages_logos', $post->ID);
  if ($stages_title):
  ?>

    <section class="ya-stages">
      <div class="ya-stages__body container">
        <h2 class="ya-stages__title section-title"><?= $stages_title; ?></h2>
        <div class="ya-stages__content">
          <?php if (!empty($stages_list)): ?>
            <div class="ya-stages__main">
              <div class="ya-stages__blocks">
                <div class="ya-stages__blocks-wrapper">
                  <?php foreach ($stages_list as $index => $item): ?>
                    <div class="ya-stages__block">
                      <div class="ya-stages__key border-rainbow border-gradient" data-id="<?= $index + 1; ?>">
                        <div class="ya-stages__key-num gradient-text"><span><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span></div>
                        <div class="ya-stages__text">
                          <span>этап</span>
                          <?= $item['service_3_stages_list_title']; ?>
                        </div>
                        <div class="ya-stages__icon">
                          <svg>
                            <use xlink:href="#icon-chevron"></use>
                          </svg>
                        </div>
                      </div>
                      <div class="ya-stages__value" data-id="<?= $index + 1; ?>">
                        <div class="ya-stages__value-title"><?= $item['service_3_stages_list_title']; ?></div>
                        <div class="ya-stages__value-text"><?= $item['service_3_stages_list_text']; ?></div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="ya-stages__values border-gradient"></div>
            </div>
          <?php endif; ?>
          <?php if ($stages_subtitle): ?>
            <div class="ya-stages__banner border-gradient">
              <div class="ya-stages__banner-title"><?= $stages_subtitle; ?></div>
              <?php if ($stages_description): ?>
                <div class="ya-stages__banner-text"><?= $stages_description; ?></div>
              <?php endif; ?>

              <div class="ya-stages__banner-image">
                <img src="<?= get_template_directory_uri(); ?>/img/ya-direct/dd.gif" width="758" height="442" alt="gif" loading="lazy">
              </div>
              <?php if (!empty($stages_logos)): ?>
                <div class="ya-stages__logos">
                  <?php foreach ($stages_logos as $item): ?>
                    <div class="ya-stages__logo">
                      <img src="<?= $item['service_3_stages_logos_image']['url']; ?>" alt="logo">
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <?php
  $preview_title = get_field('service_3_preview_title', $post->ID);
  $preview_items = get_field('service_3_preview_items', $post->ID);
  if (!empty($preview_items)):
  ?>
    <section class="ads-preview">
      <div class="ads-preview__body container">
        <h2 class="ads-preview__title section-title"><?= $preview_title; ?></h2>
        <div class="ads-preview__content">
          <div class="ads-preview__blocks border-gradient">
            <div class="ads-preview__blocks-wrapper">
              <?php foreach ($preview_items as $index => $item): ?>
                <div class="ads-preview__block">
                  <div class="ads-preview__key border-gradient" data-id="<?= $index + 1; ?>">
                    <span class="ads-preview__num"><?= $index + 1; ?></span>
                    <?= $item['service_3_preview_items_title']; ?>
                  </div>
                  <div class="ads-preview__value" data-id="<?= $index + 1; ?>">
                    <span class="ads-preview__num"><?= $index + 1; ?></span>
                    <img src="<?= $item['service_3_preview_items_image']; ?>" width="861" height="419" alt="скрин" loading="lazy">
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="ads-preview__screenshots border-gradient"></div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $question_title = get_field('service_3_question_title', $post->ID);
  $question_response = get_field('service_3_question_response', $post->ID);
  if (!empty($question_response)):
  ?>
    <section class="ya-question">
      <div class="ya-question__body container">
        <h2 class="ya-question__title section-title"><?= $question_title; ?></h2>
        <div class="ya-question__text">
          <?php foreach ($question_response as $item): ?>
            <div class="ya-question__col"><?= $item['service_3_question_response_content']; ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $price_title = get_field('service_3_price_title', $post->ID);
  $price_description = get_field('service_3_price_description', $post->ID);
  $price_subtitle = get_field('service_3_price_subtitle', $post->ID);
  $price_list = get_field('service_3_price_list', $post->ID);
  $price_text = get_field('service_3_price_text', $post->ID);
  if ($price_title):
  ?>
    <section class="ya-price">
      <div class="ya-price__body container">
        <h2 class="ya-price__title section-title"><?= $price_title; ?></h2>
        <?php if ($price_description): ?>
          <div class="ya-price__subtitle"><?= $price_description; ?></div>
        <?php endif; ?>
        <?php if ($price_subtitle): ?>
          <div class="ya-price__text">
            <?= $price_subtitle; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($price_list)): ?>
          <div class="ya-price__cards">
            <?php foreach ($price_list as $index => $item): ?>
              <div class="ya-price__card border-gradient">
                <div class="ya-price__card-num gradient-text"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                <div class="ya-price__card-text"><?= $item['service_3_price_list_text']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="ya-price__button">
          <button type="button" class="button-gradient open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php"><span>Узнать стоимость</span></button>
        </div>
        <?php if ($price_text): ?>
          <div class="ya-price__description"><?= $price_text; ?></div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>


  <?php
  $team = get_field('service_3_team', $post->ID);

  $valid_person_count = 0;
  $total_team_count = 0;

  if (!empty($team) && is_array($team)) {
    $total_team_count = count($team);

    foreach ($team as $item) {
      if (!empty($item['service_3_team_person'])) {
        $valid_person_count++;
      }
    }
  }

  if ($total_team_count > 0 && $valid_person_count == $total_team_count):
  ?>
    <section class="ads-team">
      <div class="ads-team__body container">
        <h2 class="ads-team__title section-title">Команда, которая будет работать над вашим проектом:</h2>
        <div class="ads-team__cards">
          <?php foreach ($team as $item):
            // Здесь дополнительная проверка не нужна, так как мы уже убедились, что все валидны
            $person_id = $item['service_3_team_person']->ID ?? $item['service_3_team_person']; // Получаем ID
          ?>
            <div class="ads-team__card border-gradient">
              <div class="ads-team__card-image">
                <img src="<?= get_field('employee_art', $person_id); ?>" width="586" height="338" alt="art image">
              </div>
              <div class="ads-team__card-icon">
                <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="24" height="24" alt="icon">
              </div>
              <div class="ads-team__card-name"><?= get_field('employee_job', $person_id); ?></div>
              <div class="ads-team__card-text">
                <p class="ads-team__card-subtitle"><?= get_field('employee_job', $person_id); ?></p>
                <p class="ads-team__card-descr"><?= $item['service_3_team_text']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/tg-banner'); ?>

  <?php
  $faq_title = get_field('service_3_faq_title', $post->ID);
  $faq_items = get_field('service_3_faq_items', $post->ID);

  if (!empty($faq_items)):
  ?>
    <section class="art-faq">
      <div class="art-faq__body container">
        <h2 class="art-faq__title section-title"><?= $faq_title; ?></h2>
        <div class="art-faq__items">
          <?php foreach ($faq_items as $item): ?>
            <div class="art-faq__item">
              <div class="art-faq__question"><?= $item['service_3_faq_items_title']; ?></div>
              <div class="art-faq__answer"><?= $item['service_3_faq_items_text']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $cases_raw = get_field('service_3_cases_items', $post->ID);

  if (!empty($cases_raw) && is_array($cases_raw)) {
    $flattened_cases = array();

    foreach ($cases_raw as $item) {
      if (isset($item['service_3_cases_items_case'])) {
        $flattened_cases[] = $item['service_3_cases_items_case'];
      }
    }

    if (!empty($flattened_cases)) {
      get_template_part('template-parts/slider-cases', null, array(
        'cases' => $flattened_cases,
      ));
    }
  }
  ?>
  <?php get_template_part('template-parts/reviews'); ?>
</main>

<?php
get_footer();
