<?php

/**
 * Template Name: Шаблон страницы Политики
 */

get_header();
?>
<main>

  <section id="in_cont_screen_block">

    <div id="in_cont_screen_block_topbg"><br></div>

    <div class="cl0"><br></div>

    <!--- ----------------- BREADCRUMBS ----------------- -->

    <div id="in_breadcrumbs_screen_block_cont">

      <a href="<?= get_home_url(); ?>">Главная</a>
      <div class="in_breadcrumbs_screen_block_cont_sepa">/</div>
      <div class="in_breadcrumbs_screen_block_cont_curpage">
        Политика в отношении обработки персональных данных
      </div>

    </div>

    <div class="screen_block_wcont">

      <h1>
        Политика в отношении обработки персональных данных
      </h1>

      <?php the_content(); ?>


    </div>

  </section>

</main>

<?php

get_footer();
?>