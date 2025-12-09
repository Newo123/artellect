<?php

$faq = get_field('service_faq', $post->ID);

?>

<?php if (!empty($faq)): ?>
  <section id="main_faq_screen_block">
    <div id="main_faq_screen_block_bg_topgr"><br></div>
    <div class="main_faq_wcont">
      <h2>
        FAQ - частозадаваемые вопросы
      </h2>
    </div>
    <div id="main_faq_screen_block_list">
      <?php foreach ($faq as $index => $item): ?>
        <div class="main_faq_screen_block_list_item <?php if ($index === 0) {
                                                      echo 'main_faq_screen_block_list_item_sel';
                                                    } ?>" id="main_faq_screen_block_list_item_<?= $index + 1; ?>">
          <div class="main_faq_screen_block_list_item_q" data-rel="<?= $index + 1; ?>">
            <?= $item['service_faq_title']; ?>
          </div>
          <div class="main_faq_screen_block_list_item_a">
            <?= $item['service_faq_content']; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div id="main_faq_screen_block_bg"><br></div>
  </section>
<?php endif; ?>