<?php

$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_failure_title'];
$text = $block['case_blocks_layout_failure_text'];
$subtitle = $block['case_blocks_layout_failure_subtitle'];
$repeater = $block['case_blocks_layout_failure_repeater'];
$text_2 = $block['case_blocks_layout_failure_text_2'];
?>

<section class="em-failure" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-failure__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <?php if ($text): ?>
      <div class="em-subtitle">
        <?= $text; ?>
      </div>
    <?php endif; ?>
    <?php if ($subtitle): ?>
      <div class="em-stage__name em-name"><span>-</span><?= $subtitle; ?></div>
    <?php endif; ?>
    <?php if (!empty($repeater)): ?>
      <div class="em-stage__cards">
        <?php foreach ($repeater as $index => $item): ?>
          <div class="em-stage__card border-gradient">
            <div class="em-stage__card-val gradient-text"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
            <div class="em-stage__card-text">
              <?= $item['case_blocks_layout_failure_repeater_text']; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <?php if ($text_2): ?>
      <div class="em-subtitle">
        <?= $text_2; ?>
      </div>
    <?php endif; ?>
  </div>

</section>