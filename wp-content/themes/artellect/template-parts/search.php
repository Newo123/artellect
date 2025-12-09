<?php

$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_search_title'];
$repeater = $block['case_blocks_layout_search_repeater'];
$video = $block['case_blocks_layout_search_video'];
$video_text = $block['case_blocks_layout_search_video_text'];
?>

<section class="em-lead" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-lead__body container em-padding">
    <h2 class="em-title">
      <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
    </h2>
    <div class="em-lead__content">
      <?php if (!empty($repeater)): ?>
        <div class="em-lead__info">
          <?php foreach ($repeater as $index => $item): ?>
            <div class="em-lead__row">
              <div class="em-lead__name gradient-text"><?= $index + 1 ?>. <?= $item['case_blocks_layout_search_repeater_title']; ?></div>
              <div class="em-lead__text">
                <?= $item['case_blocks_layout_search_repeater_text']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if ($video): ?>
        <div class="em-lead__video">
          <video src="<?= $video; ?>" autoplay muted playsinline loop preload="none"></video>
          <div class="em-lead__video-label">
            <?= $video_text; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>