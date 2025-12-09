<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package artellect
 */

/**
 * Template Name: Шаблон страницы 404
 */

get_header();
?>

<main>
  <section class="error-page">
    <div class="error-page__body container">

      <div class="error-page__name page-name">Digital-агентство Artellect</div>
      <div class="error-page__error">
        <img src="<?= get_template_directory_uri(); ?>/img/404.svg" width="447" height="157" alt="404">
        <img src="<?= get_template_directory_uri(); ?>/img/john.gif" width="162" height="156" alt="gif" loading="lazy">
        <h1 class="error-page__title">Страница не найдена</h1>
      </div>
      <div class="error-page__subtitle">
        “Этот путь не конвертит... Попробуйте другой!"<br> Но мы точно знаем, как привести клиентов туда, куда
        нужно!
      </div>
      <div class="error-page__link">
        <a href="<?= get_home_url(); ?>" class="button-decore">Вернуться на главную</a>
      </div>
    </div>
    <div class="discount-btn border-gradient open-popup"
      data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php?title=<?= urlencode('10% скидка'); ?>&subtitle=<?= urlencode('на первый месяц сотрудничества'); ?>">
      <img src="<?= get_template_directory_uri(); ?>/img/icons/flash-card.svg" width="45" height="33" alt="icon">
      <p>Получить <span>скидку за внимательность – 10%</span> <br>
        на первый месяц сотрудничества!</p>
    </div>
  </section>
  <?php
  $args = array(
    'post_type' => 'cases',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
  );


  $cases_query = new WP_Query($args);
  $cases = $cases_query->get_posts();
  get_template_part('template-parts/slider-cases', null, array('cases' => $cases));

  ?>
</main>

<?php
get_footer();
