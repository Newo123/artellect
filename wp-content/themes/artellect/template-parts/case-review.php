<?php
$title = get_field('case_reviews_title');
$content = get_field('case_reviews_content');
?>

<?php if ($title): ?>
  <section class="em-review">
    <div class="em-review__body container em-padding">
      <h2 class="em-title"><?= $title; ?></h2>
      <?php if ($content): ?>
        <div class="em-review__card border-gradient">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-start.svg" class="qoute-icon-start" width="24" height="24" alt="qoute icon">
          <div class="em-review__card-text">
            <?= $content; ?>
          </div>
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-end.svg" class="qoute-icon-end" width="24" height="24" alt="qoute icon">
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>