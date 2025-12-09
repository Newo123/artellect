<?php

$title = get_field('case_marketing_title');
$content = get_field('case_marketing_content');
$blocks = get_field('case_marketing_blocks');
?>


<section class="em-expenses">
  <div class="em-expenses__body container em-padding">
    <h2 class="em-title"><?= $title; ?></h2>
    <?php if ($content): ?>
      <div class="em-expenses__descr">
        <?= $content; ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($blocks)): ?>
      <div class="em-expenses__cards">
        <?php foreach ($blocks as $item): ?>
          <div class="em-expenses__card">
            <div class="em-expenses__card-name"><?= $item['case_marketing_blocks_title']; ?></div>
            <div class="em-expenses__card-text">
              <?= $item['case_marketing_blocks_content']; ?>
              <?php if ($item['case_marketing_blocks_content_hide']): ?>
                <div class="em-expenses__card-more">
                  <?= $item['case_marketing_blocks_content_hide']; ?>
                </div>
                <div class="em-expenses__card-button">
                  Раскрыть
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>