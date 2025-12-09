<?php

if (!empty($args['cases'])):
?>
  <section class="art-cases">
    <div class="art-cases__body container">
      <h2 class="art-cases__title section-title">Кейсы — истории успеха</h2>
      <div class="art-cases__slider swiper full-width">
        <div class="art-cases__slider-wrapper swiper-wrapper">


          <?php foreach ($args['cases'] as $item): ?>
            <div class="art-cases__slide case-preview swiper-slide border-gradient">
              <?php
              $categories = wp_get_post_terms($item->ID, 'direction', array('fields' => 'all'));
              if (!empty($categories) && !is_wp_error($categories)): ?>
                <span class="case-preview__tag art-tag"><?= $categories[0]->name; ?></span>
              <?php endif; ?>
              <div class="case-preview__icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="icon">
              </div>
              <div class="case-preview__image">
                <?php
                $image = get_field('case_anons_image', $item->ID);
                ?>
                <img src="<?= $image; ?>" width="440" height="551" alt="<?= get_the_title(); ?>">
              </div>
              <div class="case-preview__info border-gradient">
                <div class="case-preview__details">
                  <?php
                  $params = get_field('case_anons_results', $item->ID);
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
                    $client_logo = get_field('case_anons_logo', $item->ID);
                    if ($client_logo): ?>
                      <img src="<?= $client_logo; ?>" width="77" height="17" alt="client logo">
                    <?php endif; ?>
                  </div>
                  <div class="case-preview__button">
                    <a href="<?= get_permalink($item->ID); ?>" class="button-gradient"><span>Смотреть</span></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="art-cases__slider-panel">
        <div class="art-cases__slider-pagination slider-pagination"></div>
        <div class="art-cases__slider-navigation">
          <button class="art-cases__slider-prev slider-prev border-gradient">
            <svg>
              <use xlink:href="#icon-arrow-left"></use>
            </svg>
          </button>
          <button class="art-cases__slider-next slider-next border-gradient">
            <svg>
              <use xlink:href="#icon-arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
      <div class="art-cases__more">
        <a href="<?= get_post_type_archive_link('cases'); ?>" class="button-gradient"><span>Смотреть все кейсы</span></a>
      </div>
    </div>
  </section>
<?php endif; ?>