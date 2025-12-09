<?php
$block = get_query_var('block_data');
$block_number = get_query_var('block_number');

$title = $block['case_blocks_layout_results_title'];
$first = $block['case_blocks_layout_results_first'];
$repeater = $block['case_blocks_layout_results_list'];
?>

<section class="em-results" id="<?= $block['acf_fc_layout']; ?>">
  <div class="em-results__body container em-padding">
    <div class="em-results__main">
      <div class="em-results__card">
        <h2 class="em-title">
          <span class="em-num"><?= $block_number; ?></span> <?= $title; ?>
        </h2>
        <?php if ($first): ?>
          <div class="em-results__subtitle border-gradient">
            <?= $first; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($repeater[0]): ?>
        <div class="em-results__card border-gradient">
          <div class="em-results__card-name"><?= $repeater[0]['case_blocks_layout_results_list_title']; ?></div>
          <div class="em-results__card-descr">
            <?= $repeater[0]['case_blocks_layout_results_list_text']; ?>
          </div>
          <div class="em-results__values">
            <div class="em-results__value -before">
              <div class="em-results__value-label">Было</div>
              <div class="em-results__value-track" style="width: <?= $repeater[0]['case_blocks_layout_results_list_before']; ?>%;"></div>
              <div class="em-results__value-label"><?= $repeater[0]['case_blocks_layout_results_list_before_text']; ?></div>
            </div>
            <div class="em-results__value -affter">
              <div class="em-results__value-label">Стало</div>
              <div class="em-results__value-track" style="width: <?= $repeater[0]['case_blocks_layout_results_list_after']; ?>%;"></div>
              <div class="em-results__value-label"><?= $repeater[0]['case_blocks_layout_results_list_after_text']; ?></div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <?php
    $items = array_slice($repeater, 1);
    if (!empty($items)): ?>
      <div class="em-results__cards">
        <?php foreach ($items as $item): ?>
          <div class="em-results__card border-gradient">
            <div class="em-results__card-name"><?= $repeater[0]['case_blocks_layout_results_list_title']; ?></div>
            <div class="em-results__card-descr">
              <?= $repeater[0]['case_blocks_layout_results_list_text']; ?>
            </div>
            <div class="em-results__values">
              <?php if ($item['case_blocks_layout_results_list_image']) {
                echo '<div class="d-flex">';
              } ?>
              <div class="em-results__value -before" <?php if ($item['case_blocks_layout_results_list_image']) {
                                                        echo 'style="width: ' . $item['case_blocks_layout_results_list_before'] . '%;"';
                                                      } ?>>
                <div class="em-results__value-label">Было</div>
                <div class="em-results__value-track" <?php if (!$item['case_blocks_layout_results_list_image']) {
                                                        echo 'style="width: ' . $item['case_blocks_layout_results_list_before'] . '%;"';
                                                      } else {
                                                        echo 'style="width: 100%;"';
                                                      } ?>></div>
                <div class="em-results__value-label"><?= $item['case_blocks_layout_results_list_before_text']; ?></div>
              </div>
              <div class="em-results__value -affter" <?php if ($item['case_blocks_layout_results_list_image']) {
                                                        echo 'style="width: ' . $item['case_blocks_layout_results_list_after'] . '%;"';
                                                      } ?>>
                <div class="em-results__value-label">Стало</div>
                <div class="em-results__value-track" <?php if (!$item['case_blocks_layout_results_list_image']) {
                                                        echo 'style="width: ' . $item['case_blocks_layout_results_list_after'] . '%;"';
                                                      } else {
                                                        echo 'style="width: 100%;"';
                                                      } ?>></div>
                <div class="em-results__value-label"><?= $item['case_blocks_layout_results_list_after_text']; ?></div>
              </div>
              <?php if ($item['case_blocks_layout_results_list_image']) {
                echo '</div>';
              } ?>
            </div>
            <?php if ($item['case_blocks_layout_results_list_image']): ?>
              <div class="em-results__screen">
                <a data-fancybox="results__screen-1" class="em-results__screen-image"
                  href="<?= $item['case_blocks_layout_results_list_image']; ?>">
                  <img src="<?= $item['case_blocks_layout_results_list_image']; ?>" width="455" height="230" alt="image">
                </a>
              </div>
            <?php endif; ?>
            <?php if ($item['case_blocks_layout_results_list_text_2']): ?>
              <div class="em-results__card-att">
                <?= $item['case_blocks_layout_results_list_text_2']; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>