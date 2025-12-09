<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_marketing_title'];
$repeater = $block['case_blocks_layout_marketing_repeater'];

?>

<section class="em-realization" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-realization__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <?php if (!empty($repeater)): ?>
      <div class="em-realization__cards">
        <?php foreach ($repeater as $item): ?>
          <div class="em-realization__card border-gradient">
            <?php if ($item['case_blocks_layout_marketing_repeater_image']): ?>
              <div class="em-realization__card-image">
                <img src="<?= $item['case_blocks_layout_marketing_repeater_image']; ?>" width="550" height="397" alt="image">
              </div>
            <?php endif; ?>
            <?php foreach ($item['case_blocks_layout_marketing_repeater_blocks'] as $el): ?>
              <div class="em-realization__card-info">
                <div class="em-realization__card-name"><?= $el['case_blocks_layout_marketing_repeater_blocks_title']; ?></div>
                <div class="em-realization__card-text"><?= $el['case_blocks_layout_marketing_repeater_blocks_text']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  </div>
</section>