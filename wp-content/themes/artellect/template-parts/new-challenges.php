<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_new-challenges_title'];
$repeater = $block['case_blocks_layout_new-challenges_repeater'];
?>

<section class="em-challenges" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-challenges__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span> <?= $title; ?>
    </h2>

    <?php if ($repeater): ?>
      <div class="em-challenges__cards">
        <?php $index = 0; ?>
        <?php foreach ($repeater as $item): ?>
          <?php if ($item['case_blocks_layout_new-challenges_repeater_video']): ?>
            <div class="em-challenges__card border-gradient">
              <div class="em-challenges__slogan">
                <div class="em-challenges__slogan-icon">
                  <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="80" height="80" alt="Artellect logo">
                </div>
                <div class="em-challenges__slogan-text">
                  <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="278" height="48" alt="Artellect logo">
                  <p>бизнес-драйвер вашего успеха</p>
                </div>
              </div>
              <div class="em-challenges__card-image">
                <img src="<?= $item['case_blocks_layout_new-challenges_repeater_video']; ?>" width="880" height="880" alt="gif" loading="lazy">
              </div>
            </div>
          <?php else: ?>
            <?php $index = $index + 1; ?>
            <div class="em-challenges__card border-gradient">
              <div class="em-check__card-title">
                <span class="gradient-text"><?= str_pad($index, 2, '0', STR_PAD_LEFT); ?></span>
                <?= $item['case_blocks_layout_new-challenges_repeater_title']; ?>
              </div>
              <div class="em-challenges__card-text em-hero__text">
                <?= $item['case_blocks_layout_new-challenges_repeater_content']; ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    <?php endif ?>
  </div>
</section>