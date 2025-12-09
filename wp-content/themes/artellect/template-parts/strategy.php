<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_strategy_title'];
$repeater = $block['case_blocks_layout_strategy_repeater'];
$images = $block['case_blocks_layout_strategy_images'];
?>


<section class="em-strategy" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-strategy__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <div class="em-analysis__content">
      <?php if (!empty($repeater)): ?>
        <div class="em-analysis__info border-gradient">
          <?php foreach ($repeater as $item): ?>
            <div class="em-analysis__info-item">
              <?= $item['case_blocks_layout_strategy_repeater_content']; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($images)): ?>
        <div class="em-analysis__preview">
          <div class="em-analysis__slider swiper  border-gradient">
            <div class="swiper-wrapper">
              <?php foreach ($images as $item): ?>
                <div class="em-analysis__slide swiper-slide">
                  <a data-fancybox="strategy-gallery" class="em-analysis__slide-image"
                    href="<?= $item['case_blocks_layout_strategy_images_item']; ?>">
                    <img src="<?= $item['case_blocks_layout_strategy_images_item']; ?>" width="392" height="486" alt="image">
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="em-analysis__slide-fullscreen border-gradient">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/fullscreen.svg" width="24" height="24" alt="fullscreen">
            </div>
          </div>
          <div class="em-analysis__slider-panel slider-panel">
            <div class="em-analysis__slider-pagination slider-pagination"></div>
            <div class="em-analysis__slider-navigation slider-navigation">
              <button class="em-analysis__slider-prev slider-prev border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button class="em-analysis__slider-next slider-next border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>