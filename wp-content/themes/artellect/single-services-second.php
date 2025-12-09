<?php

/**
 * Template Name: Шаблон записи Услуга 2
 * Template Post Type: services
 */

$title = get_field('service_2_title', $post->ID);
$motivations = get_field('service_2_motivations', $post->ID);
$image = get_field('service_2_image', $post->ID);
$motivation_text = get_field('service_2_motivation_text', $post->ID);
$advantages_title = get_field('service_2_advantages_title', $post->iD);
$advantages = get_field('service_2_advantages', $post->ID);

$second_title = get_field('service_2_second_title', $post->ID);
$second_subtitle = get_field('service_2_second_subtitle', $post->ID);
$second_list = get_field('service_2_second_list', $post->ID);
$second_text = get_field('service_2_second_text', $post->ID);
get_header();
?>

<main>
  <section class="ads-hero">
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
            <div class="ads-hero__benefit"><?= $item['service_2_motivations_item']; ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="ads-hero__cards">
        <div class="ads-hero__card border-gradient">
          <div class="ads-hero__card-head">
            <?php if ($motivation_text): ?>
              <p><?= $motivation_text; ?></p>
            <?php endif; ?>
            <button type="button" class="button-gradient open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php"><span>Запустить
                генератор продаж</span></button>
          </div>
          <div class="ads-hero__card-main">
            <div class="ads-hero__card-image">
              <img src="<?= $image; ?>" width="336" height="271" alt="hand image">
            </div>
          </div>
        </div>
        <div class="ads-hero__card border-gradient">
          <?php if ($advantages_title): ?>
            <div class="ads-hero__card-head">
              <p><?= $advantages_title; ?></p>
            </div>
          <?php endif; ?>
          <?php if (!empty($advantages)): ?>
            <div class="ads-hero__card-main">
              <div class="ads-hero__list">
                <?php foreach ($advantages as $item): ?>
                  <div class="ads-hero__list-item">
                    <div class="ads-hero__list-name">
                      <img src="<?= get_template_directory_uri(); ?>/img/icons/circle-check.svg" width="24" height="24" alt="check icon">
                      <?= $item['service_2_advantages_subtitle']; ?>
                    </div>
                    <?= $item['service_2_advantages_text']; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php if ($second_title): ?>
    <section class="ads-purpose">
      <div class="ads-purpose__body container">
        <h2 class="ads-purpose__title section-title">
          <span><img src="<?= get_template_directory_uri(); ?>/img/context-ads/ttl.gif" width="100" height="100" alt="gif" loading="lazy"></span>
          <?= $second_title; ?>
        </h2>
        <?php if ($second_subtitle): ?>
          <div class="ads-purpose__subtitle">
            <?= $second_subtitle; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($second_list)): ?>
          <div class="ads-purpose__items border-rainbow">
            <?php foreach ($second_list as $item): ?>
              <div class="ads-purpose__item border-gradient"><?= $item['service_2_second_list_item']; ?></div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="ads-purpose__descr"><?= $second_text; ?></div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $third_title = get_field('service_3_title', $post->ID);
  $third_subtitle = get_field('service_3_subtitle', $post->ID);
  $third_image = get_field('service_3_image', $post->ID);
  $third_list = get_field('service_3_list', $post->ID);
  if ($third_title):
  ?>
    <section class="ads-explanation">
      <div class="ads-explanation__body container">
        <div class="ads-explanation__cards">
          <div class="ads-explanation__card border-gradient">
            <h2 class="ads-explanation__title section-title"><?= $third_title; ?></h2>
            <?php if ($third_subtitle): ?>
              <div class="ads-explanation__descr"><?= $third_subtitle; ?></div>
            <?php endif; ?>
            <?php if ($third_image): ?>
              <div class="ads-explanation__bg">
                <img src="<?= $third_image; ?>" width="426" height="400" alt="img">
              </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($third_list)): ?>
            <?php foreach ($third_list as $item): ?>
              <div class="ads-explanation__card">
                <?php if ($item['service_3_list_image']): ?>
                  <div class="ads-explanation__gif">
                    <img src="<?= $item['service_3_list_image']; ?>" width="407" height="305" alt="gif" loading="lazy">
                  </div>
                <?php else: ?>
                  <?php if ($item['service_3_list_title']): ?>
                    <div class="ads-explanation__example"><?= $item['service_3_list_title']; ?></div>
                  <?php endif; ?>
                  <?php if ($item['service_3_list_text']): ?>
                    <div class="ads-explanation__text"><?= $item['service_3_list_text']; ?></div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>



  <?php

  $motivations_title = get_field('service_2_motivations_title', $post->ID);
  $motivations_subtitle = get_field('service_2_motivations_subtitle', $post->ID);
  $motivations_list = get_field('service_2_motivations_list', $post->ID);

  if ($motivations_title):
  ?>
    <section class="ads-benefits">
      <div class="ads-benefits__body container">
        <h2 class="ads-benefits__title section-title"><?= $motivations_title; ?></h2>
        <?php if ($motivations_subtitle): ?>
          <div class="ads-benefits__subtitle"><?= $motivations_subtitle; ?></div>
        <?php endif; ?>
        <?php if (!empty($motivations_list)): ?>
          <div class="ads-benefits__slider swiper full-width">
            <div class="swiper-wrapper">
              <?php foreach ($motivations_list as $item): ?>
                <div class="ads-benefits__card swiper-slide">
                  <div class="ads-benefits__inner border-gradient">
                    <div class="ads-benefits__card-front">
                      <div class="ads-benefits__card-gif">
                        <img src="<?= $item['service_2_motivations_list_image']; ?>" width="274" height="180" alt="gif" loading="lazy">
                      </div>
                      <div class="ads-benefits__card-name"><?= $item['service_2_motivations_list_title']; ?></div>
                    </div>
                    <?php if ($item['service_2_motivations_list_text']): ?>
                      <div class="ads-benefits__card-back">
                        <?= $item['service_2_motivations_list_text']; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="ads-benefits__slider-att">Нажимте на карточку для подробной информации</div>
        <div class="ads-benefits__slider-panel slider-panel">
          <div class="ads-benefits__slider-navigation slider-navigation">
            <button class="ads-benefits__slider-prev slider-prev border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-left"></use>
              </svg>
            </button>
            <button class="ads-benefits__slider-next slider-next border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <section class="ads-calculator art-calculator">
    <div class="ads-calculator__body container">
      <div class="ads-calculator__head">
        <h2 class="ads-calculator__title section-title">Рассчитайте вашу прибыль <br>
          от инвестиций в маркетинг</h2>
        <div class="ads-calculator__descr">
          Финансовая эффективность – для нас главный критерий. Рассчитаем экономическую модель рекламы на
          старте, установим kpi и просчитаем план эффективности по месяцам.
          Примерную unit-экономику проекта вы можете рассчитать самостоятельно прямо сейчас:
        </div>
      </div>
      <div class="ads-calculator__tabs">
        <div class="ads-calculator__tab border-gradient border-rainbow active " data-calc-tab="1">По нагрузке на
          отдел продаж
        </div>
        <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="2">По желаемому бюджету
        </div>
        <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="3">По желаемой выручке
        </div>
      </div>

      <div class="ads-calculator__block active" data-calc-block="1">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area no-valid">
              <div class="ads-calculator__label gradient-text">Сколько лидов (обращений) сможете обработать?
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем лидов, который вы сможете обработать в течение
                    месяца</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите кол-во">
              </div>
              <div class="ads-calculator__error-text">Неверное значение</div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                    маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
                ФОТ</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Выручка в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
                параметров</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>

      <div class="ads-calculator__block " data-calc-block="2">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Вложения в маркетинг:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем бюджета, который вы можете потратить на
                    маркетинг, включая ФОТ</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите кол-во">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                    маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают
                    товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во лидов/месяц: <span>—</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во заявок для обеспечения оптимиальной загрузки
                бюджета</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>—</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Нужно будет обработать клиентов при заданных параметрах</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Выручка в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
                параметров</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>

      <div class="ads-calculator__block " data-calc-block="3">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Выручка в месяц:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем выручки (оборот), которую вы хотели бы получать
                    (минимально 100 000 р.)</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите кол-во">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Планируемая доля расходов на маркетинг от
                выручки (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите ориентировочный процент от выручки, который вы готовы
                    потратить на маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают
                    товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="number" class="ads-calculator__input" inputmode="numeric"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
                ФОТ</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во лидов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во заявок для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>
    </div>
  </section>

  <?php
  $view_title = get_field('service_2_view_title', $post->ID);
  $view_list = get_field('service_2_view_list', $post->ID);

  if ($view_title):
  ?>

    <section class="ads-types">
      <div class="ads-types__body container">
        <h2 class="ads-types__title section-title"><?= $view_title; ?></h2>
        <?php if (!empty($view_list)): ?>
          <div class="ads-types__items">
            <?php foreach ($view_list as $index => $item): ?>
              <div class="ads-types__item">
                <div class="ads-types__num gradient-text">
                  <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                </div>
                <div class="ads-types__name"><?= $item['service_2_view_list_title']; ?></div>
                <div class="ads-types__descr"><?= $item['service_2_view_list_text']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="ads-types__att">
          <p class="border-rainbow">В рамках нашей услуги настройки мы настраиваем все форматы рекламы</p>
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
                У вас уже есть контекст и он не работает?
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


  <div class="dark-wrapper">
    <?php
    $efficiency_title = get_field('service_2_efficiency_title', $post->ID);
    $efficiency_list = get_field('service_2_efficiency_list', $post->ID);
    $efficiency_text = get_field('service_2_efficiency_text', $post->ID);
    if ($efficiency_title):
    ?>
      <section class="ads-efficiency">
        <div class="ads-efficiency__body container">
          <h2 class="ads-efficiency__title section-title"><?= $efficiency_title; ?></h2>
          <?php if (!empty($efficiency_list)): ?>
            <div class="ads-efficiency__slider swiper full-width">
              <img src="<?= get_template_directory_uri(); ?>/img/context-ads/mario.gif" class="mario__person" width="100" height="100" alt="mario"
                loading="lazy">
              <div class="swiper-wrapper">
                <div class="mario">
                  <img src="<?= get_template_directory_uri(); ?>/img/context-ads/mario-coin.gif" class="mario__coin" width="22" height="22" alt="coin"
                    loading="lazy">
                  <img src="<?= get_template_directory_uri(); ?>/img/context-ads/mario-coin.gif" class="mario__coin" width="22" height="22" alt="coin"
                    loading="lazy">
                  <img src="<?= get_template_directory_uri(); ?>/img/context-ads/mario-coin.gif" class="mario__coin" width="22" height="22" alt="coin"
                    loading="lazy">
                  <img src="<?= get_template_directory_uri(); ?>/img/context-ads/mario-coin.gif" class="mario__coin" width="22" height="22" alt="coin"
                    loading="lazy">
                </div>
                <?php foreach ($efficiency_list as $item): ?>
                  <div class="ads-efficiency__slide swiper-slide">
                    <div class="ads-efficiency__road"></div>
                    <div class="ads-efficiency__card border-gradient">
                      <div class="ads-efficiency__card-name"><?= $item['service_2_efficiency_list_title']; ?></div>
                      <div class="ads-efficiency__card-text"><?= $item['service_2_efficiency_list_text']; ?></div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="ads-efficiency__panel slider-panel">
            <div class="ads-efficiency__navigation slider-navigation">
              <button class="ads-efficiency__slider-prev slider-prev border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button class="ads-efficiency__slider-next slider-next border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
          <?php if ($efficiency_text): ?>
            <div class="ads-efficiency__description"><?= $efficiency_text; ?></div>
          <?php endif; ?>
          <div class="ads-efficiency__att">Доверяйте свой бизнес профессионалам!</div>
        </div>
      </section>
    <?php endif; ?>

    <section class="ads-screen">
      <div class="ads-screen__body">
        <div class="ads-screen__content">
          <div class="ads-screen__pc">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/context-ads/pc.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/context-ads/pc.png" width="1411" height="983" alt="pc">
            </picture>
          </div>
          <div class="ads-screen__info">
            <div class="ads-screen__logo">
              <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" class="ads-screen__logo-icon" width="41" height="42"
                alt="logo"><br>
              <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" class="ads-screen__logo-text" width="385" height="67" alt="logo">
            </div>
            <h2 class="ads-screen__title">Разрабатываем лендинг или сайт под ваш продукт
              Настроим сквозную аналитику, коллтрекинг и CRM</h2>
            <div class="ads-screen__subtitle">Вам не придется выяснять, что такое конверсионный сайт и UX
              дизайн,
              забивать голову коллтрекингами, UTM-метками. Просто
              доверьте это нам.</div>
            <div class="ads-screen__descr">Вам нужно увидеть цифры и выводы, чтобы сделать бизнес лучше
              и прибыльнее. Именно это мы и сделаем для вас.</div>
            <div class="ads-screen__button">
              <a href="<?= get_permalink(get_page_by_path('about')); ?>" class="button-decore">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $stages_title = get_field('service_2_stages_title', $post->ID);
    $stages_items = get_field('service_2_stages_items', $post->ID);

    if (!empty($stages_items)):
    ?>
      <section class="ads-stages">
        <div class="ads-stages__body container">
          <h2 class="ads-stages__title section-title"><?= $stages_title; ?></h2>
          <div class="ads-stages__content">
            <div class="ads-stages__slider swiper">
              <div class="swiper-wrapper">
                <?php foreach ($stages_items as $index => $item): ?>
                  <div class="ads-stages__slide swiper-slide border-gradient">
                    <div class="ads-stages__icon" data-swiper-parallax="-200"
                      data-swiper-parallax-duration="800">
                      <img src="<?= $item['service_2_stages_items_image']; ?>" width="165" height="150" alt="icon">
                    </div>
                    <div class="ads-stages__info">
                      <div class="ads-stages__name" data-swiper-parallax="-200"
                        data-swiper-parallax-duration="1000"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>. <?= $item['service_2_stages_items_title']; ?></div>
                      <?php if ($item['service_2_stages_items_text']): ?>
                        <div class="ads-stages__text" data-swiper-parallax="-200"
                          data-swiper-parallax-duration="1200"><?= $item['service_2_stages_items_text']; ?></div>
                      <?php endif; ?>
                    </div>
                    <div class="ads-stages__slide-bg">
                      <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/img/context-ads/lines-pattern.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/context-ads/lines-pattern.png" width="521" height="292" alt="bg">
                      </picture>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="ads-stages__panel">
              <div class="ads-stages__buttons">
                <button class="ads-stages__slider-prev slider-prev border-gradient">
                  <svg>
                    <use xlink:href="#icon-arrow-left"></use>
                  </svg>
                </button>
                <button class="ads-stages__slider-next slider-next border-gradient">
                  <svg>
                    <use xlink:href="#icon-arrow-right"></use>
                  </svg>
                </button>
              </div>
              <div class="ads-stages__fraction"></div>
            </div>
            <div class="ads-stages__content-bg">
              <?php foreach ($stages_items as $index => $item): ?>
                <img src="<?= $item['service_2_stages_items_image']; ?>" width="491" height="446" alt="icon">
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

  </div>

  <?php

  $preview_title = get_field('service_2_preview_title', $post->ID);
  $preview_items = get_field('service_2_preview_items', $post->ID);
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
                    <?= $item['service_2_preview_items_title']; ?>
                  </div>
                  <div class="ads-preview__value" data-id="<?= $index + 1; ?>">
                    <span class="ads-preview__num"><?= $index + 1; ?></span>
                    <img src="<?= $item['service_2_preview_items_image']; ?>" width="861" height="419" alt="скрин" loading="lazy">
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
  $management_title = get_field('service_2_management_title', $post->ID);
  $management_text = get_field('service_2_management_text', $post->ID);
  $management_subtitle = get_field('service_2_management_subtitle', $post->ID);
  $management_items = get_field('service_2_management_items', $post->ID);

  if (!empty($management_items)):
  ?>
    <section class="ads-managing">
      <div class="ads-managing__body container">
        <h2 class="ads-managing__title section-title"><?= $management_title; ?></h2>
        <?php if ($management_text): ?>
          <div class="ads-managing__subtitle"><?= $management_text; ?></div>
        <?php endif ?>
        <?php if ($management_subtitle): ?>
          <div class="ads-managing__descr"><?= $management_subtitle; ?></div>
        <?php endif ?>
        <div class="ads-managing__grid">
          <?php foreach ($management_items as $index => $item): ?>
            <div class="ads-managing__cell">
              <div class="ads-managing__cell-num gradient-text">01</div>
              <div class="ads-managing__cell-text"><?= $item['service_2_management_items_title']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="ads-managing__important">
          <div class="ads-managing__important-title">И самое важное!</div>
          <div class="ads-managing__important-subtitle">Мы смотрим шире стандартных идей, шаблонов и правил!
            Мы проводим регулярные “мозговые штурмы” и тестируем новые гипотезы для повышения вашего дохода.</div>
          <div class="ads-managing__important-image">
            <img src="<?= get_template_directory_uri(); ?>/img/context-ads/imp.gif" width="216" height="143" alt="gif" loading="lazy">
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $seo_title = get_field('service_2_seo_title', $post->ID);
  $seo_content = get_field('service_2_seo_content', $post->ID);

  if ($seo_title):
  ?>

    <section class="ads-seotext">
      <div class="ads-seotext__body container">
        <h2 class="ads-seotext__title section-title"><?= $seo_title; ?></h2>
        <?php if ($seo_content): ?>
          <div class="ads-seotext__text"><?= $seo_content; ?></div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $team = get_field('service_2_team', $post->ID);
  if (!empty($team)):
  ?>
    <section class="ads-team">
      <div class="ads-team__body container">
        <h2 class="ads-team__title section-title">Команда, которая будет работать над вашим проектом:</h2>
        <div class="ads-team__cards">
          <?php foreach ($team as $item): ?>
            <div class="ads-team__card border-gradient">
              <div class="ads-team__card-image">
                <img src="<?= get_field('employee_art', $item['service_2_team_person']->ID); ?>" width="586" height="338" alt="art image">
              </div>
              <div class="ads-team__card-icon">
                <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="24" height="24" alt="icon">
              </div>
              <div class="ads-team__card-name"><?= get_field('employee_job', $item['service_2_team_person']->ID); ?></div>
              <div class="ads-team__card-text">
                <p class="ads-team__card-subtitle"><?= get_field('employee_job', $item['service_2_team_person']->ID); ?></p>
                <p class="ads-team__card-descr"><?= $item['service_2_team_text']; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/tg-banner'); ?>

  <?php
  $faq_title = get_field('service_2_faq_title', $post->ID);
  $faq_items = get_field('service_2_faq_items', $post->ID);

  if (!empty($faq_items)):
  ?>
    <section class="art-faq">
      <div class="art-faq__body container">
        <h2 class="art-faq__title section-title"><?= $faq_title; ?></h2>
        <div class="art-faq__items">
          <?php foreach ($faq_items as $item): ?>
            <div class="art-faq__item">
              <div class="art-faq__question"><?= $item['service_2_faq_items_title']; ?></div>
              <div class="art-faq__answer"><?= $item['service_2_faq_items_text']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>


  <?php
  $cases_raw = get_field('service_2_cases_items', $post->ID);

  if (!empty($cases_raw) && is_array($cases_raw)) {
    $flattened_cases = array();

    foreach ($cases_raw as $item) {
      if (isset($item['service_2_cases_items_case'])) {
        $flattened_cases[] = $item['service_2_cases_items_case'];
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
