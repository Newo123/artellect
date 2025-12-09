<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_solutions_title'];
$repeater = $block['case_blocks_layout_solutions_repeater'];
?>

<section class="em-callcenter" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-callcenter__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <?php if (!empty($repeater)): ?>
      <div class="em-callcenter__card border-gradient">
        <div class="em-callcenter__slider swiper">
          <div class="em-callcenter__slide-wrapper swiper-wrapper">
            <?php foreach ($repeater as $item): ?>
              <div class="em-callcenter__slide swiper-slide">
                <div class="em-callcenter__slide-ot">
                  <?= $item['case_blocks_layout_solutions_repeater_text']; ?>
                </div>
                <?php if ($item['case_blocks_layout_solutions_repeater_image']): ?>
                  <div class="em-callcenter__image">
                    <a data-fancybox="callcenter-gallery" class="em-analysis__slide-image"
                      href="<?= $item['case_blocks_layout_solutions_repeater_image']; ?>">
                      <img src="<?= $item['case_blocks_layout_solutions_repeater_image']; ?>" width="777" height="368" alt="image">
                    </a>
                    <div class="em-callcenter__fullscreen fullscreen-icon">
                      <img src="<?= get_template_directory_uri(); ?>/img/icons/fullscreen.svg" width="24" height="24" alt="fullscreen">
                    </div>
                  </div>
                <?php endif; ?>

              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="em-callcenter__slider-panel slider-panel">
          <div class="em-callcenter__slider-pagination slider-pagination"></div>
          <div class="em-callcenter__slider-navigation slider-navigation">
            <button class="em-callcenter__slider-prev slider-prev border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-left"></use>
              </svg>
            </button>
            <button class="em-callcenter__slider-next slider-next border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </button>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>