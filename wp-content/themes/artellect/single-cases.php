<?php
$directions = get_terms(array(
  'taxonomy' => 'direction',
  'hide_empty' => false, // показывать даже пустые термины
));
$industries = get_terms(array('taxonomy' => 'industries', 'hide_empty' => false));


$page_title = get_field('case_title');
$page_description = get_field('case_description');
$blocks = get_field('case_blocks');
$story = get_field('case_reviews_story');

get_header();
?>

<main>
  <section class="em-hero" id="theme-1">
    <div class="em-hero__body container">

      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('cases')): ?>
          <a href="<?= get_post_type_archive_link('cases'); ?>" class="breadcrumbs__link">Кейсы</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <span class="breadcrumbs__current">Кейсы</span>
        <?php endif; ?>
      </div>



      <?php if ($page_title): ?>
        <h1 class="em-hero__title" data-title="<?= $page_title; ?>"><?= $page_title; ?></h1>
      <?php endif; ?>
      <?php if ($page_description): ?>
        <div class="em-hero__subtitle"><?= $page_description; ?></div>
      <?php endif; ?>
      <?php
      $block_number = str_pad(1, 2, '0', STR_PAD_LEFT);
      set_query_var('block_data', $blocks[0]);
      set_query_var('block_number', $block_number);
      get_template_part('template-parts/' . $blocks[0]['acf_fc_layout']);
      ?>
    </div>
    <div class="em-hero__blur"></div>
  </section>

  <nav class="em-navigation">
    <div class="em-navigation__body container">
      <h2 class="em-navigation__title">Быстрая навигация:</h2>
      <div class="em-navigation__block">
        <div class="em-navigation__wrapper">
          <div class="em-navigation__links">
            <?php
            foreach ($blocks as $index => $block) {
              // Пропускаем первый элемент
              if ($index === 0) {
                continue;
              }

            ?>
              <a href="#<?= $block['acf_fc_layout']; ?>" class="border-gradient"><span><?= $index + 1; ?>. <?= $block['case_blocks_layout_' . $block['acf_fc_layout'] . '_title']; ?></span></a>
            <?php

            }

            ?>
          </div>
        </div>
        <a href="#<?= $blocks[0]['acf_fc_layout']; ?>" class="em-navigation__btn border-gradient">
          <svg>
            <use xlink:href="#icon-arrow-left"></use>
          </svg>
          В начало
        </a>
      </div>
    </div>
  </nav>

  <?php
  foreach ($blocks as $index => $block) {
    // Пропускаем первый элемент
    if ($index === 0) {
      continue;
    }

    // Сохраняем оригинальную нумерацию (02, 03, ...)
    $block_number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);

    set_query_var('block_data', $block);
    set_query_var('block_number', $block_number);
    get_template_part('template-parts/' . $block['acf_fc_layout']);
  }
  get_template_part('template-parts/expenses');
  get_template_part('template-parts/case-review');
  ?>
  <?php if ($story): ?>
    <div class="em-end">
      <div class="em-end__body container">
        <div class="em-subtitle">
          <?= $story; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php get_template_part('template-parts/reviews'); ?>

  <div class="em-conclusion">
    <div class="em-conclusion__body container">
      <p>Все, выдыхайте:) Надеемся, что представленная здесь информация была вам интересна и дала повод для
        размышлений, а также
        стимул сравнить наши результаты с вашими!</p>
      <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/img/emerkon/end-g.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/emerkon/end-g.png" width="270" height="200" alt="image">
      </picture>
      <p>Если вас заинтересовал наш опыт и вы готовы реализовать его в вашей клинике, оставляйте заявку на
        консультацию с нашим
        маркетологом. Уверены, у нас найдется много тем для продуктивного обсуждения!</p>
      <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Заявка на
        консультацию</button>
    </div>
  </div>
</main>


<?php
get_footer();
