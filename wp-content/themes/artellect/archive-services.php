<?php

get_header();

?>
<main>
  <section class="services-main">
    <div class="container">
      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('services')): ?>
          <a href="<?= get_post_type_archive_link('services'); ?>" class="breadcrumbs__link">Услуги</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <span class="breadcrumbs__current">Услуги</span>
        <?php endif; ?>
      </div>
      <div class="absolute-binary">
        <img src="<?= get_template_directory_uri() ?>/serv-images/binary-code.svg" alt="Услуги Artellect1">
      </div>
      <div class="services-main-inner">
        <img src="<?= get_template_directory_uri() ?>/serv-images/services-main-text.svg" alt="Услуги" class="services-main-text">
        <img src="<?= get_template_directory_uri() ?>/serv-images/services-sub-text.svg" alt="Digital Агентство Artellect" class="services-sub-text">
        <img src="<?= get_template_directory_uri() ?>/serv-images/siphon.svg" alt="Siphon" class="services-siphone">
      </div>
    </div>
  </section>
  <section class="marquee-section">
    <div class="marquee-container">
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
      <img src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" class="marquee-logo" alt="Artellect" width="104" height="32">
      <p class="marquee-text">CR</p>
      <p class="marquee-text">ROMI</p>
      <p class="marquee-text">LTV</p>
      <p class="marquee-text">ROAS</p>
      <p class="marquee-text">CAC</p>
      <p class="marquee-text">CPL</p>
    </div>
  </section>
  <?php get_template_part('template-parts/services'); ?>
  <section id="main_quiz_screen_block">
    <div id="main_quiz_screen_block_r"><br></div>
    <div id="main_quiz_screen_block_l"><br></div>
    <div class="main_quiz_wcont">
      <h2>
        Какие digital услуги нужны
        <br>
        именно Вам?
      </h2>
      <div id="main_quiz_screen_block_quest" class="screen_parallax_item_block"><br></div>
      <div id="main_quiz_screen_block_quest_mob"><br></div>
      <div id="main_quiz_screen_block_wcont">
        <div id="main_quiz_screen_block_txt_header">
          Пройдите квиз и узнайте,<br>
          как с выгодой инвестировать<br>
          в Ваш маркетинг!
        </div>
        <div id="main_quiz_screen_block_txt">
          Если у вас есть трудности с выбором, заполните
          эту простую анкету и получите бесплатный расчет
          Unit-экономики для вашего бизнеса
        </div>
        <div class="cl0"><br></div>
        <div id="main_quiz_screen_block_aftertxt">
          <div id="main_quiz_screen_block_aftertxt_btn" onclick="Marquiz.showModal('645268f56fc06c0025297c29')" class="glowblock">
            Пройти квиз
            <div class="glow-wrap">
              <i class="glow"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/reviews'); ?>
</main>
<?php get_footer(); ?>