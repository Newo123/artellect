<?php

$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_patient_title'];
$repeater = $block['case_blocks_layout_patient_repeater'];
?>

<section class="em-check" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-check__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <?php if ($repeater): ?>
      <div class="em-check__cards">
        <?php foreach ($repeater as $index => $item): ?>
          <div class="em-check__card">
            <div class="em-check__card-title">
              <span class="gradient-text"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
              <?= $item['case_blocks_layout_patient_repeater_title']; ?>
            </div>
            <div class="em-check__card-text">
              <?= $item['case_blocks_layout_patient_repeater_text']; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>