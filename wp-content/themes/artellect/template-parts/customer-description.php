<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_customer-description_title'];
$text = $block['case_blocks_layout_customer-description_text'];
$subtitle = $block['case_blocks_layout_customer-description_subtitle'];
$repeater = $block['case_blocks_layout_customer-description_repeater'];
$content = $block['case_blocks_layout_customer-description_content'];
$tasks_title = $block['case_blocks_layout_customer-description_tasks_title'];
$tasks_content = $block['case_blocks_layout_customer-description_tasks_content'];
$after_content = $block['case_blocks_layout_customer-description_after_content'];
?>

<div class="em-hero__cards" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-hero__card border-gradient">
    <?php if ($title): ?>
      <div class="em-hero__card-title">
        <span class="em-num"><?= $block_number; ?></span>
        <?= $title; ?>
      </div>
    <?php endif; ?>
    <?php if ($text): ?>
      <div class="em-hero__card-subtitle">
        <?= $text; ?>
      </div>
    <?php endif; ?>
    <div class="em-hero__sources">
      <?php if ($subtitle): ?>
        <h3><?= $subtitle; ?></h3>
      <?php endif; ?>

      <?php if (!empty($repeater)): ?>
        <?php foreach ($repeater as $index => $item):
          $num = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
        ?>
          <div class="em-hero__source border-gradient">
            <span class="em-hero__source-num gradient-text"><?= $num; ?></span>
            <?= $item['case_blocks_layout_customer-description_repeater_text']; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="em-hero__text">
      <?= $content; ?>
    </div>
  </div>
  <div class="em-hero__card border-gradient">
    <?php if ($tasks_title): ?>
      <div class="em-hero__card-title"><?= $tasks_title; ?></div>
    <?php endif; ?>
    <?php if ($tasks_content): ?>
      <div class="em-hero__text">
        <?= $tasks_content; ?>
      </div>
    <?php endif; ?>
  </div>
  <?php if ($after_content): ?>
    <div class="em-hero__card border-gradient">
      <div class="em-hero__text">
        <?= $after_content; ?>
      </div>
    </div>
  <?php endif; ?>

</div>