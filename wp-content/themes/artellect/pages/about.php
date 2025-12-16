<?php

/**
 * Template Name: Шаблон страницы О нас
 */
get_header();

?>
<main>
  <section class="fv-about">
    <div class="fv-about__body container">
      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('services')): ?>
          <a href="<?= get_post_type_archive_link('services'); ?>" class="breadcrumbs__link">О компании</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <span class="breadcrumbs__current">О компании</span>
        <?php endif; ?>
      </div>
      <div class="fv-about__content">
        <h1 class="fv-about__page-name page-name">О компании</h1>
        <div class="fv-about__logo">
          <div class="fv-about__logo-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="41" height="42" alt="artellect logo">
          </div>
          <div class="fv-about__logo-text">
            <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="838" height="146" alt="artellect logo">
          </div>
        </div>
        <div class="fv-about__circle">
          <picture>
            <source media="(max-width: 767px)" srcset="<?= get_template_directory_uri(); ?>/img/circle-mob.png">
            <img src="<?= get_template_directory_uri(); ?>/img/circle.png" width="1700" height="1700" alt="circle">
          </picture>
        </div>
        <div class="fv-about__subtitle">
          <p>Мы не будем заигрывать с банальностями и писать красивые речи. Давайте говорить честно и открыто.
          </p>
          <p>
            Мы — команда профессионалов, увлеченных своим делом,
            и именно это делает Artellect особенным
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="fv-about-more">
    <div class="fv-about-more__body container">

      <div class="fv-about__team">
        <div class="fv-about__card">
          <div class="fv-about__card-info">
            <div class="fv-about__card-title">
              <b>Душа Artellect</b> это мы : Елена Соловьева и Андрей Баранов.
            </div>
            <div class="fv-about__card-photo">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/about/team-1.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/team-1.png" width="315" height="327" alt="Команда">
              </picture>
            </div>
            <div class="fv-about__card-candles">
              <div class="art-checklist__subtitle-icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-1" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-2" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-3" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-4" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-5" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-6" width="6" height="30" alt="candle">
              </div>
            </div>
          </div>
          <div class="fv-about__card-descr">
            <div class="fv-about__card-text">
              <p>Мы прошли путь от студенческой скамьи до бизнеса, маркетинга и семейной жизни, всегда
                поддерживая друг друга. Этот опыт
                стал нашим фундаментом и помогает нам строить сильную компанию.</p>
              <p>Хотя мы и «одна сатана» в глазах окружающих, на самом деле мы очень разные. <b>Андрей</b>
                — технический гений, который
                виртуозно разбирается в аналитике, финансах и процессах. Он умеет выстраивать структуры,
                связывая все точки контакта с
                клиентами, а также вдохновлять и мотивировать команду.</p>
              <p>Елена же погружается в анализ рынка, конкурентов и целевой аудитории, выстраивая стратегии
                и концепции, которые двигают
                Artellect вперед и открывают новые возможности для наших клиентов.</p>
            </div>
            <div class="fv-about__card-footer">
              <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="36" height="36" alt="artellect logo">
              <p>
                <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="79" height="22" alt="artellect logo">
                <span>Founders</span>
              </p>
            </div>
          </div>
        </div>
        <div class="fv-about__card">
          <div class="fv-about__card-info">
            <div class="fv-about__card-title">
              Но главное в <b>Artellect</b> — это наша <b>команда</b>
            </div>
            <div class="fv-about__card-photo">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/about/team-2.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/team-2.png" width="315" height="327" alt="Команда">
              </picture>
            </div>
            <div class="fv-about__card-candles">
              <div class="art-checklist__subtitle-icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-1" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-2" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-3" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-4" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-5" width="6" height="30" alt="candle">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-6" width="6" height="30" alt="candle">
              </div>
            </div>
          </div>
          <div class="fv-about__card-descr">
            <div class="fv-about__card-text">
              <p>Ее сердце — <b>Литвиненко Павел</b>, наш директор по маркетингу.</p>
              <p>В его подчинении — невероятные маркетологи и талантливые специалисты, создающие мощные
                проекты</p>
              <p>Они, словно артисты, работают в гармонии, воплощая лучшие идеи в жизнь. Чтобы работа шла
                быстрее и продуктивнее, наш
                искусственный интеллект «Маркетолог Боря» помогает оптимизировать процессы и генерировать
                новые решения.</p>
            </div>
            <div class="fv-about__card-footer">
              <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="36" height="36" alt="artellect logo">
              <p>
                <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="79" height="22" alt="artellect logo">
                <span>СМО</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fv-mission">
    <div class="fv-mission__body container">
      <h2 class="fv-mission__title section-title">Наша миссия</h2>
      <div class="fv-mission__image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/img/about/orden.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/orden.png" width="210" height="230" alt="orden">
        </picture>
      </div>
      <div class="fv-mission__cards">
        <div class="fv-mission__card border-gradient">
          <div class="fv-mission__card-info">
            <div class="fv-mission__card-name">Мы не просто выполняем маркетинговые задачи.</div>
            <p class="fv-mission__card-text">Наша цель — изменить представление о возможностях маркетинга. Мы
              помогаем бизнесу расти, внедряем инновационные инструменты и воплощаем самые смелые идеи.</p>
          </div>
          <div class="fv-mission__card-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/about/shapes-1.svg" width="119" height="101" alt="icon">
          </div>
        </div>
        <div class="fv-mission__card border-gradient">
          <div class="fv-mission__card-info">
            <div class="fv-mission__card-name">Artellect — это не просто маркетинговое агентство.</div>
            <p class="fv-mission__card-text">Мы партнеры в развитии бизнеса. Мы работаем не на клиентов, а
              вместе с ними. Когда вы приходите к нам, вы получаете не просто услуги, а команду, которая
              болеет за ваш успех.
            </p>
          </div>
          <div class="fv-mission__card-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/about/shapes-2.svg" width="119" height="135" alt="icon">
          </div>
        </div>
      </div>
    </div>
    <div class="fv-mission__bg">
      <picture>
        <source media="(max-width: 767px)" srcset="<?= get_template_directory_uri(); ?>/img/about/abstract-mob.png">
        <img src="<?= get_template_directory_uri(); ?>/img/about/abstract.png" width="1920" height="1080" alt="abstract">
      </picture>
    </div>
  </section>

  <section class="art-work">
    <div class="art-work__body container">
      <h2 class="art-work__title section-title">Как мы работаем</h2>
      <div class="art-work__blocks">
        <div class="art-work__block border-gradient">
          <div class="art-work__float-image">
            <img src="<?= get_template_directory_uri(); ?>/img/about/working-1.gif" width="145" height="145" alt="gif" loading="lazy">
          </div>
          <div class="art-work__subtitle">Маркетинг без результата: в чём настоящая проблема</div>
          <div class="art-work__descr">
            За годы работы в маркетинге, бизнесе, аналитике и финансах мы поняли, что стандартные
            маркетинговые услуги не решают ключевых проблем компаний.
          </div>
          <div class="clearfix"></div>
          <ul class="art-work__text">
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/marker-red.svg" width="24" height="24" alt="mark">
              <span>Они не гарантируют поток клиентов, а лишь привлекают трафик.</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/marker-red.svg" width="24" height="24" alt="mark">
              <span>Они не снимают нагрузку с руководителей — маркетинг требует управления и глубокой
                вовлеченности.</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/marker-red.svg" width="24" height="24" alt="mark">
              <span>Они не дают ответ на вопрос: «Какой канал приносит максимальную отдачу и куда стоит
                инвестировать больше?»</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/marker-red.svg" width="24" height="24" alt="mark">
              <span>Они не интегрируются с отделом продаж, оставляя процесс разрозненным.</span>
            </li>
          </ul>
        </div>
        <div class="art-work__block border-gradient">
          <div class="art-work__float-image">
            <img src="<?= get_template_directory_uri(); ?>/img/about/working-2.gif" width="145" height="145" alt="gif" loading="lazy">
          </div>
          <div class="art-work__subtitle">Как мы превращаем маркетинг
            в точку роста</div>
          <div class="art-work__descr">Мы берем на себя весь процесс привлечения клиентов,
            чтобы вы могли сосредоточиться на развитии своего бизнеса.</div>
          <div class="clearfix"></div>
          <ul class="art-work__text">
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/lighthing.svg" width="24" height="24" alt="mark">
              <span>Создаем маркетинговые воронки, которые ведут клиента прямо к вам.</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/lighthing.svg" width="24" height="24" alt="mark">
              <span>Проектом управляет не просто проджект, а опытный маркетолог, который глубоко погружается в
                ваш бизнес.</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/lighthing.svg" width="24" height="24" alt="mark">
              <span>В каждом проекте используется сквозная аналитика, позволяющая точно определить, куда
                уходит бюджет и где максимальная
                эффективность.</span>
            </li>
            <li>
              <img src="<?= get_template_directory_uri(); ?>/img/icons/lighthing.svg" width="24" height="24" alt="mark">
              <span>Автоматизируем продажи, объединяя маркетинг и отдел продаж в единую систему CRM для
                увеличения конверсии.</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="art-work__cards">
        <div class="art-work__card border-gradient">
          <div class="art-work__card-info">
            <div class="art-work__card-text">
              <div class="art-work__card-title">Мы понимаем, что у бизнеса разные потребности на разных
                стадиях роста, поэтому предлагаем три уровня маркетинговых решений:</div>
              <div class="art-work__card-levels">
                <div class="art-work__card-level active" data-level="1">
                  <button class="art-work__card-level-btn border-gradient border-rainbow">Базовые
                    воронки</button>
                  <div class="art-work__card-level-text">
                    <p><span></span> для стартапов и небольших компаний. <br></p>
                    <img src="<?= get_template_directory_uri(); ?>/img/about/level-1.gif" width="280" height="280" alt="gif">
                  </div>
                </div>
                <div class="art-work__card-level" data-level="2">
                  <button class="art-work__card-level-btn border-gradient border-rainbow">Комплексные
                    воронки </button>
                  <div class="art-work__card-level-text">
                    <p><span></span> для растущих компаний с отделом продаж и CRM.<br></p>
                    <img src="<?= get_template_directory_uri(); ?>/img/about/level-2.gif" width="280" height="280" alt="gif">
                  </div>
                </div>
                <div class="art-work__card-level" data-level="3">
                  <button class="art-work__card-level-btn border-gradient border-rainbow">Системный
                    маркетинг</button>
                  <div class="art-work__card-level-text">
                    <p><span></span> для зрелых компаний, где важна глубокая аналитика и интеграция
                      маркетинга в бизнес-процессы.<br></p>
                    <img src="<?= get_template_directory_uri(); ?>/img/about/level-3.gif" width="280" height="280" alt="gif">
                  </div>
                </div>
              </div>
            </div>
            <div class="art-work__card-images">
              <div class="art-work__card-image border-gradient" data-level="1">
                <img src="<?= get_template_directory_uri(); ?>/img/about/level-1.gif" width="331" height="331" alt="gif" loading="lazy">
              </div>
              <div class="art-work__card-image border-gradient" data-level="2">
                <img src="<?= get_template_directory_uri(); ?>/img/about/level-2.gif" width="331" height="331" alt="gif" loading="lazy">
              </div>
              <div class="art-work__card-image border-gradient" data-level="3">
                <img src="<?= get_template_directory_uri(); ?>/img/about/level-3.gif" width="331" height="331" alt="gif" loading="lazy">
              </div>
            </div>
          </div>
          <div class="art-work__card-about">
            <div class="art-work__card-description">
              <p>В каждом из них заложен анализ конкурентов, аудитории, unit-экономики
                и подключение сквозной аналитики. И, конечно, за ваш проект отвечает профессиональный
                маркетолог, руководящий командой специалистов.</p>
              <p>Дополнительно мы предлагаем решения по цифровизации бизнеса и внедрению глубокой аналитики
                данных, чтобы маркетинг работал максимально эффективно. Если у вас медицинская клиника — у
                нас есть глубокая экспертиза в медицинском маркетинге.
              </p>
            </div>
          </div>
        </div>
        <div class="art-work__card border-gradient">
          <div class="art-work__card-info">
            <div class="art-work__card-video border-gradient">
              <div class="art-work__card-agitation">
                <div class="art-work__card-agitation-gif">
                  <img src="<?= get_template_directory_uri(); ?>/img/about/agitation.gif" width="74" height="74" alt="gif">
                </div>
                <p>Присоединяйтесь к <br>
                  <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="236" height="42" alt="artellect logo">
                </p>
              </div>
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/about/video-poster.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/video-poster.png" width="757" height="426" alt="video">
              </picture>
            </div>
          </div>
          <div class="art-work__card-about">
            Мы не просто предоставляем услуги — мы помогаем бизнесу расти, внедрять передовые технологии и
            управлять маркетингом на высоком уровне. <br>
            Работа с нами — это инвестиция в уверенный рост и развитие вашего бизнеса.
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  $args = array(
    'post_type' => 'employee',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
  );

  $employee_query = new WP_Query($args);
  $employee = $employee_query->get_posts();

  ?>
  <?php if (!empty($employee)): ?>
    <section class="art-team">
      <div class="art-team__body container">
        <h2 class="art-team__title section-title">Команда Artellect</h2>
        <div class="art-team__slider swiper full-width">
          <div class="art-team__slider-wrapper swiper-wrapper">
            <?php foreach ($employee as $item): ?>
              <div class="art-team__slide swiper-slide border-gradient">
                <div class="art-team__slide-photo">
                  <img src="<?= get_field('employee_image', $item->ID); ?>" width="311" height="366" alt="<?= get_field('employee_fio', $item->ID); ?>">
                  <div class="art-team__slide-photo-bg">
                    <img src="<?= get_template_directory_uri(); ?>/img/about/teammate-bg.gif" width="408" height="366" alt="gif">
                  </div>
                </div>
                <div class="art-team__slide-link">
                  <img src="<?= get_template_directory_uri(); ?>/img/rot-text.svg" width="120" height="120" alt="Подробнее">
                  <div class="art-team__slide-link-icon">
                    <svg>
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                  </div>
                </div>
                <div class="art-team__slide-logo">
                  <img src="<?= get_template_directory_uri(); ?>/img/logo-icon.svg" width="24" height="24" alt="artellect logo">
                </div>
                <div class="art-team__slide-info border-gradient border-rainbow">
                  <div class="art-team__slide-name"><?= get_field('employee_fio', $item->ID); ?></div>
                  <div class="art-team__slide-role">[ <?= get_field('employee_job', $item->ID); ?><?php if (get_field('employee_ceo', $item->ID)) {
                                                                                                    echo ', Сооснователь';
                                                                                                  } ?> ]</div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="art-team__buttons">
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Стать частью
            команды</button>
          <div class="art-team__slider-panel">
            <div class="art-team__slider-pagination slider-pagination"></div>
            <div class="art-team__slider-buttons">
              <button type="button" class="art-team__slider-prev slider-prev border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button type="button" class="art-team__slider-next slider-next border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/tg-banner'); ?>
</main>


<?php
get_footer();
