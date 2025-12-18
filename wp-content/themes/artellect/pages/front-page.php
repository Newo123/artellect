<?php

/**
 * Template Name: Шаблон страницы Главная
 */

get_header();

?>
<main>
  <section class="hero">
    <div class="hero__body container">
      <div class="hero__graphic hud">
        <div class="hud__wrapper">
          <div class="hud__circle hud__circle-1">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-1.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-1.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-2">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-2.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-2.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-3">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-3.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-3.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-4">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-4.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-4.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-5">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-5.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-5.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-6">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-6.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-6.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-7">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-7.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-7.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-8">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-8.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-8.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__circle hud__circle-9">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/hud/circle-9.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/hud/circle-9.png" width="710" height="710" alt="circle">
            </picture>
          </div>
          <div class="hud__label hud__label-1 orange-outline">LTV</div>
          <div class="hud__label hud__label-2 orange-outline">CR</div>
          <div class="hud__label hud__label-3 orange-outline">ROMI</div>
          <div class="hud__label hud__label-4 orange-outline">CPL</div>
          <div class="hud__label hud__label-5 orange-outline">CAC</div>
          <div class="hud__label hud__label-6 orange-outline">ROAS</div>
        </div>
      </div>
      <div class="hero__labels">
        <div class="hero__label">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/bracket.svg" width="28" height="80" alt="bracket">
          <p><b>Digital</b> <i>–</i> наша профессия</p>
          <img src="<?= get_template_directory_uri(); ?>/img/icons/bracket-cl.svg" width="28" height="80" alt="bracket">
        </div>
        <div class="hero__label">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/bracket.svg" width="28" height="80" alt="bracket">
          <p><b>Кратно увеличиваем</b> заявки <br> уже со 2-го месяца</p>
          <img src="<?= get_template_directory_uri(); ?>/img/icons/bracket-cl.svg" width="28" height="80" alt="bracket">
        </div>
      </div>
      <div class="hero__title">
        <img src="<?= get_template_directory_uri(); ?>/img/logo-text.svg" width="1700" height="297" alt="artellect logo">
        Маркетинговое агенство полного цикла в Москве
      </div>
      <div class="hero__bg"></div>
    </div>
  </section>

  <section class="art-about">
    <div class="art-about__body container">
      <div class="art-about__adv border-gradient">
        <h2 class="art-about__title section-title">
          Digital маркетинг - цифры имеют значение!
        </h2>
        <div class="art-about__adv-items">
          <div class="art-about__adv-item">
            <div class="art-about__adv-value gradient-text">6 лет</div>
            <div class="art-about__adv-text">маркетинговому агенству Artellect</div>
          </div>
          <div class="art-about__adv-item">
            <div class="art-about__adv-value gradient-text">>10 лет</div>
            <div class="art-about__adv-text">опыта у каждого члена команды</div>
          </div>
          <div class="art-about__adv-item">
            <div class="art-about__adv-value gradient-text">↗300</div>
            <div class="art-about__adv-text">реализованых проектов</div>
          </div>
          <div class="art-about__adv-item">
            <div class="art-about__adv-value gradient-text">20+</div>
            <div class="art-about__adv-text">отраслей, в которых двигаем бизнес</div>
          </div>
        </div>
      </div>
      <div class="art-about__achievements">
        <div class="art-about__achievement border-gradient">
          <span></span>Привлекли более 84000 лидов
        </div>
        <div class="art-about__achievement border-gradient">
          <span></span>Средний ROAS 457%
        </div>
        <div class="art-about__achievement border-gradient">
          <span></span>За 6 лет оптимизировали более 912 рекламных кампаний
        </div>
        <div class="art-about__achievement border-gradient">
          <span></span>Максимальный бюджет в управлении - 160 000 000 р./месяц
        </div>
      </div>
      <div class="art-about__ceo border-gradient">
        <div class="art-about__ceo-image">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/about/ceo.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/ceo.png" width="477" height="551" alt="CEO">
          </picture>
        </div>
        <div class="art-about__ceo-citation">
          <div class="art-about__ceo-citation-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-start.svg" width="24" height="24" alt="quote">
          </div>
          <div class="art-about__ceo-citation-text">
            <p>
              Современный маркетинг – это формирование гибкой экосистемы, которая позволяет планировать,
              привлекать и анализировать
              клиентские потоки в разрезе продукта.
            </p>
            <p>Только цифры, только хардкор!</p>
          </div>
          <div class="art-about__ceo-citation-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-end.svg" width="24" height="24" alt="quote">
          </div>
          <div class="art-about__ceo-name gradient-text">Андрей Баранов, СЕО</div>
        </div>
      </div>
    </div>
  </section>

  <section class="art-description">
    <div class="art-description__body container">
      <h2 class="art-description__title section-title">Digital агентство полного цикла – <br> услуги «под ключ»
      </h2>
      <div class="art-description__subtitle">Чем наш подход отличается от других агентств?</div>
      <div class="art-description__text">Наш подход отличается от других агентств благодаря нашему уникальному
        подходу к маркетингу. В то время как наши коллеги
        специализируются, например, исключительно на SMM или контекстной рекламе, мы предлагаем более системное
        решение,
        основанное на проектировании digital-воронки.</div>
      <div class="art-description__content">
        <div class="art-description__row -row-1">
          <div class="art-description__item">
            <div class="art-description__name border-gradient">Привлечение</div>
            <div class="art-description__descr">
              Реклама <br>
              (Контекстная реклама, таргетированная реклама, SEO, медийная реклама в Telegram, CPA-сети,
              Классифайд и т.д)
            </div>
          </div>
        </div>
        <div class="art-description__row -row-2">
          <div class="art-description__item">
            <div class="art-description__name border-gradient">Интерес</div>
            <div class="art-description__descr">
              Посадка <br>
              (лендинг, страница многостраничного сайта,
              чат-бот, квиз, страница соц. сетей, карты и т.д)
            </div>
          </div>
        </div>
        <div class="art-description__row -row-3">
          <div class="art-description__item">
            <div class="art-description__name border-gradient">Прогрев</div>
            <div class="art-description__descr">
              Воронка прогрева <br>
              (чат-бот, внутренние страницы сайта, email-рассылка, блог, ловушка на выходе с сайта, соц. сети,
              ретаргетинг, воронка вовлечения на лендинге, корзина, формы обратной связи, звонок, мессенджер,
              чат, обратный звонок и т.д)
            </div>
          </div>
        </div>
        <div class="art-description__row -row-4">
          <div class="art-description__item">
            <div class="art-description__name border-gradient">Продажа</div>
            <div class="art-description__descr">
              Воронка продаж <br>
              (скрипты, CRM, система продаж)
            </div>
          </div>
        </div>
        <div class="art-description__row -row-5">
          <div class="art-description__item">
            <div class="art-description__name border-gradient">Доход</div>
            <div class="art-description__descr">
              Исполнение сделки <br>
              (производств, доставка, выполнение услуги и т.д.)
            </div>
          </div>
        </div>
        <div class="art-description__funnel funnel">
          <div class="funnel__paths">
            <div class="funnel__path funnel__path-1">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/funnel-line-sm.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/funnel-line-sm.png" width="45" height="586" alt="">
              </picture>
            </div>
            <div class="funnel__path funnel__path-2">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/funnel-line-sm.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/funnel-line-sm.png" width="121" height="586" alt="">
              </picture>
            </div>
          </div>

          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/funnel2.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/funnel2.png" class="funnel__main" width="588" height="696" alt="funnel">
          </picture>
          <div class="funnel__rain">
            <img src="<?= get_template_directory_uri(); ?>/img/home/rain.svg" alt="drop">
          </div>
          <div class="funnel__glow"></div>
          <div class="funnel__stars">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/star.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/star.png" width="20" height="20" alt="star">
            </picture>
          </div>
        </div>
      </div>
      <div class="art-description__bg">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/img/home/money-bg.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/money-bg.png" width="1620" height="464" alt="money bg">
        </picture>
      </div>
    </div>
  </section>

  <section class="art-services">
    <div class="art-services__body container">
      <div class="art-services__cards">
        <div class="art-services__card">
          <div class="art-services__head border-gradient">
            <h3>Простые <br>
              воронки</h3>
            <img src="<?= get_template_directory_uri(); ?>/img/icons/1.svg" width="84" height="140" alt="number 1">
          </div>
          <div class="art-services__info border-gradient">
            <ul class="art-services__list">
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                1-2 канала трафика
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                проверенные инстурменты
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                минимальное время “прогрева”
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                аналитика до лида
              </li>
            </ul>
            <div class="art-services__description">
              <p><b>Акцент</b> на результаты с минимальными затратами времени и ресурсов.</p>
              <p><b>В проекте задействованы:</b> проджект-маркетолог и специалисты по трафику и лидогенерации.
              </p>
              <p><b>Кому подходит:</b> <br>
                малому бизнесу, микробизнесу, экспертам с не большим маркетинговым бюджетом.
                Для продуктов с невысокой ценой
                и быстрым принятием решения</p>
            </div>
            <div class="art-services__description-more">Развернуть</div>
            <div class="art-services__target">
              <b>Цель маркетинга:</b> количество лидов по нужной стоимости
            </div>
          </div>
          <div class="art-services__price">от 80.000 ₽</div>
          <!-- <a href="" class="art-services__example border-gradient">Пример
                     <img src="<?= get_template_directory_uri(); ?>/img/icons/chevron.svg" width="14" height="24" alt="chevron">
                  </a> -->
        </div>

        <div class="art-services__card">
          <div class="art-services__head border-gradient">
            <h3>Сложные <br>
              воронки</h3>
            <img src="<?= get_template_directory_uri(); ?>/img/icons/2.svg" width="84" height="140" alt="number 1">
          </div>
          <div class="art-services__info border-gradient">
            <ul class="art-services__list">
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                2-6 каналов трафика
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                проверенные инструменты <br>
                и тест новых
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                многоступенчатая система прогрева
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                аналитика до продажи <br>
                и на каждом шаге воронки
              </li>
            </ul>
            <div class="art-services__description">
              <p><b>Акцент на</b> связь между вложенными средствами и полученным результатом.</p>
              <p><b>В проекте задействованы:</b> проджект-маркетолог и специалисты по трафику и лидогенерации.
              </p>
              <p><b>Кому подходит:</b> малому и среднему бизнесу готовому развиваться.
                У компании должна быть CRM и сквозная аналитика (или желание внедрить)
                Для продуктов требующих “прогрева” аудитории перед покупкой</p>
            </div>
            <div class="art-services__description-more">Развернуть</div>

            <div class="art-services__target"><b>Цель маркетинга:</b> Выручка за минусом маркетинговых расходов
            </div>
          </div>
          <div class="art-services__price">от 120.000 ₽</div>
          <!-- <a href="" class="art-services__example border-gradient">Пример
                     <img src="<?= get_template_directory_uri(); ?>/img/icons/chevron.svg" width="14" height="24" alt="chevron">
                  </a> -->
        </div>

        <div class="art-services__card">
          <div class="art-services__head border-gradient">
            <h3>Системный <br>
              маркетинг</h3>
            <img src="<?= get_template_directory_uri(); ?>/img/icons/3.svg" width="84" height="140" alt="number 1">
          </div>
          <div class="art-services__info border-gradient">
            <ul class="art-services__list">
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/ref.svg" width="20" height="20" alt="ref">
                <b>Все что есть в сложных воронках +</b>
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                глубокое взаимодействие с отделом продаж, фин. отделом
                и продуктовой стратегией
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                постоянное исследование целевой аудитории, конкурентов, рынка
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                выстраивание BI-аналитики
              </li>
            </ul>
            <div class="art-services__description">
              <p><b>Акцент</b> на долгосрочные цели компании и масштабируемость системы маркетинга</p>
              <p><b>В проекте задействованы:</b> директор по маркетингу, аналитик, продакт-маркетолог,
                бизнес-трекер и специалисты по трафику и лидогенерации</p>
            </div>
            <div class="art-services__description-more">Развернуть</div>

            <div class="art-services__target"><b>Цель маркетинга:</b> валовая прибыль</div>
          </div>
          <div class="art-services__price">от 250.000 ₽</div>
          <!-- <a href="" class="art-services__example border-gradient">Пример
                     <img src="<?= get_template_directory_uri(); ?>/img/icons/chevron.svg" width="14" height="24" alt="chevron">
                  </a> -->
        </div>

        <div class="art-services__card">
          <div class="art-services__head border-gradient">
            <h3>Growth Hacking <br>
              (Взлом роста)</h3>
            <img src="<?= get_template_directory_uri(); ?>/img/icons/4.svg" width="84" height="140" alt="number 1">
          </div>
          <div class="art-services__info border-gradient">
            <ul class="art-services__list">
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/ref.svg" width="20" height="20" alt="ref">
                <b>Дополнительный инструмент роста для компаний у которых есть сложные воронки или системный
                  маркетинг</b>
              </li>
              <li>
                <img src="<?= get_template_directory_uri(); ?>/img/icons/check-dotted.svg" width="16" height="12" alt="check icon">
                тестирование коротких гипотез, помогающих найти точки роста
                в текущей системе или новый креативный способ продвижения.
              </li>
            </ul>
            <div class="art-services__description">
              <p><b>Акцент</b> на креативе и поиске новых решений</p>
              <p><b>В проекте задействованы:</b> Growth Haking маркетолог, аналитик и специалисты по трафику и
                лидогенерации</p>
              <p><b>Кому подходит:</b> Для компаний, которые уже круто привлекают клиентов через свой
                performance маркетинг, но хотят еще круче</p>
            </div>
            <div class="art-services__description-more">Развернуть</div>
            <div class="art-services__target"><b>Цель маркетинга:</b> индивидуальные KPI</div>
          </div>
          <div class="art-services__price">от 80.000 ₽</div>
          <!-- <a href="" class="art-services__example border-gradient">Пример
                     <img src="<?= get_template_directory_uri(); ?>/img/icons/chevron.svg" width="14" height="24" alt="chevron">
                  </a> -->
        </div>
      </div>
    </div>
  </section>

  <section class="art-checklist">
    <div class="art-checklist__body container">
      <div class="art-checklist__start">
        <h3 class="art-checklist__subtitle"><span>В начале работы мы всегда проводим:</span>
          <div class="art-checklist__subtitle-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-1" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-2" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-3" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-4" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-5" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-6" width="10" height="40" alt="candle">
          </div>
          <div class="art-checklist__subtitle-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-1" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-2" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-3" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-4" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-5" width="10" height="40" alt="candle">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/candle.svg" class="candle-6" width="10" height="40" alt="candle">
          </div>
        </h3>
        <ol>
          <li>Брифование, чтобы понять какие у вас планы <br> и какой из наших продуктов подходит именно вам
          </li>
          <li>Анализ аудитории, конкурентов и рынка</li>
          <li>Рассчёт unit-экономики, постановку целей и формирование KPI</li>
          <li>Аудит текущего состояния маркетинга</li>
          <li>Работы по проектированию воронки</li>
          <li>Настройку аналитики на всех этапах</li>
        </ol>
      </div>
      <div class="art-checklist__variants">
        <h3 class="art-checklist__subtitle"><span>Вариант работы с нами</span></h3>
        <ol>
          <li><img src="<?= get_template_directory_uri(); ?>/img/icons/brain.svg" width="55" height="55" alt="icon">Мы проводим анализ и проектируем
            вашу воронку, а вы самостоятельно ее внедряете</li>
          <li><img src="<?= get_template_directory_uri(); ?>/img/icons/check-or.svg" width="55" height="55" alt="icon">Мы проводим анализ,
            проектируем воронку и сами ее внедряем “под ключ”</li>
        </ol>
      </div>
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

  <section class="section-form">
    <div class="section-form__body container">
      <div class="atropos my-atropos2">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <div class="atropos-inner request-card">
              <div class="request-card__title" data-atropos-offset="4">
                Разберём вашу воронку за 30 минут — покажем, где утекают клиенты.
              </div>
              <div class="request-card__subtitle">
                Закажите наш аудит <br>
                Мы досконально проанализируем ваши рекламные кампании и дадим рекомендации
              </div>
              <form class="request-card__form"
                method="POST"
                data-send="<?= get_template_directory_uri(); ?>/callback/callback.php?template=callback"
                data-hash="<?= get_template_directory_uri(); ?>/callback/get_hash.php">
                <div class="request-card__form-row">
                  <div class="form-area border-rainbow" data-atropos-offset="4">
                    <input type="text" name="name" class="form-area__input" placeholder="Введите ваше имя" required>
                  </div>
                  <div class="form-area border-rainbow" data-atropos-offset="4">
                    <input type="text" inputmode="tel" name="phone" class="form-area__input tel-mask"
                      placeholder="+7 (495) *** - ** - **" required>
                  </div>
                </div>
                <div class="request-card__form-row">
                  <p class="policy-agree">Нажимая на кнопку я даю свое информированное согласие на <a
                      href="">обработку
                      персональных данных</a>
                  </p>
                  <button type="submit" class="button-decore" data-atropos-offset="10">Отправить</button>
                </div>
              </form>
              <div class="request-card__bg">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/card-bg-light.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/card-bg-light.png" width="1126" height="524" alt="card bg">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="art-about__ceo border-gradient">
      <div class="art-about__ceo-image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/img/about/teammate-4.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/teammate-4.png" width="477" height="551" alt="CEO">
        </picture>
      </div>
      <div class="art-about__ceo-citation">
        <div class="art-about__ceo-citation-icon">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-start.svg" width="24" height="24" alt="quote">
        </div>
        <div class="art-about__ceo-citation-text">
          <p>
            Чем масштабнее цели бизнеса - тем мощнее должен быть маркетинг. На самокате до Луны не долететь!
          </p>
          <p>Мы построим космический корабль!</p>
        </div>
        <div class="art-about__ceo-citation-icon">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-end.svg" width="24" height="24" alt="quote">
        </div>
        <div class="art-about__ceo-name gradient-text">Елена Соловьева, СЕО</div>
      </div>
    </div>
  </section>

  <section class="art-marketing">
    <div class="art-marketing__body container">
      <h2 class="art-marketing__title section-title">Цифровой маркетинг для b2b и b2c — это к нам!</h2>
      <div class="art-marketing__slider swiper full-width">
        <div class="swiper-wrapper">
          <div class="art-marketing__slide swiper-slide border-gradient">
            <div class="art-marketing__image">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/marketing-1.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/marketing-1.png" width="280" height="280" alt="image">
              </picture>
            </div>
            <div class="art-marketing__info border-gradient">
              <div class="art-marketing__name">Малый и микробизнес</div>
              <div class="art-marketing__text">
                <p>Наше маркетинговое агентство работает с небольшими бюджетами, при росте и масштабировании
                  бизнеса внедряем
                  дополнительные инструменты, соответствующие этапу развития.</p>
                <p>Сэкономим до 950 000 ₽ ежемесячно + время и нервы на подбор инхаус-команды.</p>
              </div>
            </div>
          </div>
          <div class="art-marketing__slide swiper-slide border-gradient">
            <div class="art-marketing__image">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/marketing-2.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/marketing-2.png" width="280" height="280" alt="image">
              </picture>
            </div>
            <div class="art-marketing__info border-gradient">
              <div class="art-marketing__name">Средний бизнес</div>
              <div class="art-marketing__text">
                <p>
                  Если у вас уже есть отдел маркетинга или штатный маркетолог, мы совместно разработаем
                  систему
                  взаимодействия и закроем
                  узкие места. Вы получите полный внутренний и внешний контроль над digital маркетингом.
                </p>

                <p>Если отдел диджитал развития отсутствует, наше маркетинговое агентство Artellect станет
                  вашим опытным b2b маркетологом
                  на аутсорсе-</p>
              </div>
            </div>
          </div>
          <div class="art-marketing__slide swiper-slide border-gradient">
            <div class="art-marketing__image">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/marketing-3.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/marketing-3.png" width="280" height="280" alt="image">
              </picture>
            </div>
            <div class="art-marketing__info border-gradient">
              <div class="art-marketing__name">Стартапы</div>
              <div class="art-marketing__text">
                <p>Имеете сногсшибательную идею и хотите реализовать задумку на практике? Время покорять
                  Олимп. Разработаем маркетинговую
                  стратегию и поможем не «наломать дров» в самом начале пути.
                  Кстати! У digital агентства Artellect большой запас компетенций в запуске собственных
                  проектов! Мы покажем решения в
                  сфере финансов и бухгалтерского учета, в подборе IT-программ для работы, налаживанию
                  бизнес-процессов и многое другое.
                </p>
              </div>
            </div>
          </div>
          <div class="art-marketing__slide swiper-slide border-gradient">
            <div class="art-marketing__image">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/marketing-4.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/marketing-4.png" width="280" height="280" alt="image">
              </picture>
            </div>
            <div class="art-marketing__info border-gradient">
              <div class="art-marketing__name">Эксперты</div>
              <div class="art-marketing__text">
                <p>Мы работаем не только с компаниями, но и с частными экспертами. Разработаем стратегию
                  развития личного бренда и подберем
                  под нее подходящие каналы рекламы. Не стоит сидеть днями и ночами за курсами пугающего
                  маркетинга, лучше потратить время
                  на близких или повышение квалификации.</p>
              </div>
            </div>
          </div>
          <div class="art-marketing__slide swiper-slide border-gradient">
            <div class="art-marketing__image">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/home/marketing-5.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/marketing-5.png" width="280" height="280" alt="image">
              </picture>
            </div>
            <div class="art-marketing__info border-gradient">
              <div class="art-marketing__name">Сложные ниши</div>
              <div class="art-marketing__text">
                <p>У вас сложная ниша? Или Вы только так думаете? Перебрали уже множество агентств и
                  специалистов, а они все разводят
                  руками и говорят “в вашей нише лучше не сделать”?
                  Мы работали с табуированной сферой* наркологии, со стриптиз клубами, займами, бадами и так
                  далее. Мы четко знаем, как
                  можно рекламироваться там, где, казалось бы, нельзя ничего.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="art-marketing__slider-panel slider-panel">
        <div class="art-marketing__slider-navigation slider-navigation">
          <button class="art-marketing__slider-prev slider-prev border-gradient">
            <svg>
              <use xlink:href="#icon-arrow-left"></use>
            </svg>
          </button>
          <button class="art-marketing__slider-next slider-next border-gradient">
            <svg>
              <use xlink:href="#icon-arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="art-coverage">
    <div class="art-coverage__body em-padding">
      <h2 class="art-coverage__title section-title container">Работаем с бизнесами по России <br>
        и зарубежными проектами</h2>
      <div class="art-coverage__map">
        <img src="<?= get_template_directory_uri(); ?>/img/map.svg" width="1920" height="502" alt="map">
      </div>
    </div>
  </section>

  <section class="container">
    <div class="art-about__ceo border-gradient">
      <div class="art-about__ceo-image">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/img/about/teammate-5.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/about/teammate-5.png" width="477" height="551" alt="CEO">
        </picture>
      </div>
      <div class="art-about__ceo-citation">
        <div class="art-about__ceo-citation-icon">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-start.svg" width="24" height="24" alt="quote">
        </div>
        <div class="art-about__ceo-citation-text">
          <p>Если вы не можете измерить маркетинг прибылью,значит вам только кажется, что он у вас есть</p>
        </div>
        <div class="art-about__ceo-citation-icon">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/quotes-end.svg" width="24" height="24" alt="quote">
        </div>
        <div class="art-about__ceo-name gradient-text">Павел Литвиненко, CMO</div>
      </div>
    </div>
  </section>

  <section class="section-form">
    <div class="section-form__body container">
      <div class="atropos my-atropos2">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <div class="atropos-inner request-card">
              <div class="request-card__title" data-atropos-offset="4">
                <span class="rainbow-text">Бесплатная <br>
                  консультация маркетолога</span>
              </div>
              <div class="request-card__subtitle">
                Закажите наш аудит <br>
                Мы досконально проанализируем ваши рекламные кампании и дадим рекомендации
              </div>
              <form class="request-card__form"
                method="POST"
                data-send="<?= get_template_directory_uri(); ?>/callback/callback.php?template=callback"
                data-hash="<?= get_template_directory_uri(); ?>/callback/get_hash.php">
                <div class="request-card__form-row">
                  <div class="form-area border-rainbow" data-atropos-offset="4">
                    <input type="text" name="name" class="form-area__input" placeholder="Введите ваше имя" required>
                  </div>
                  <div class="form-area border-rainbow" data-atropos-offset="4">
                    <input type="text" inputmode="tel" name="phone" class="form-area__input tel-mask"
                      placeholder="+7 (495) *** - ** - **" required>
                  </div>
                </div>
                <div class="request-card__form-row">
                  <p class="policy-agree">Нажимая на кнопку я даю свое информированное согласие на <a
                      href="">обработку
                      персональных данных</a>
                  </p>
                  <button type="submit" class="button-decore" data-atropos-offset="10">Отправить</button>
                </div>
              </form>
              <div class="request-card__bg">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/card-bg-light.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/card-bg-light.png" width="1126" height="524" alt="card bg">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ads-calculator art-calculator">
    <div class="ads-calculator__body container">
      <div class="ads-calculator__head">
        <h2 class="ads-calculator__title section-title">Рассчитайте вашу прибыль <br>
          от инвестиций в маркетинг</h2>
      </div>
      <div class="ads-calculator__tabs">
        <div class="ads-calculator__tab border-gradient border-rainbow active " data-calc-tab="1">По нагрузке на
          отдел продаж
        </div>
        <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="2">По желаемому бюджету
        </div>
        <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="3">По желаемой выручке
        </div>
      </div>

      <div class="ads-calculator__block active" data-calc-block="1">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Сколько лидов (обращений) сможете обработать?
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем лидов, который вы сможете обработать в течение
                    месяца</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите кол-во">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                    маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
                ФОТ</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Выручка в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
                параметров</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>

      <div class="ads-calculator__block " data-calc-block="2">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Вложения в маркетинг:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем бюджета, который вы можете потратить на
                    маркетинг, включая ФОТ</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите кол-во">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                    маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают
                    товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во лидов/месяц: <span>—</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во заявок для обеспечения оптимиальной загрузки
                бюджета</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>—</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Нужно будет обработать клиентов при заданных параметрах</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Выручка в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
                параметров</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>

      <div class="ads-calculator__block " data-calc-block="3">
        <div class="ads-calculator__card border-gradient">
          <div class="ads-calculator__subtitle">Вводные данные:</div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Выручка в месяц:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите объем выручки (оборот), которую вы хотели бы получать
                    (минимально 100 000 р.)</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите кол-во">
              </div>
            </div>
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средний чек:
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                    месяц</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите сумму в рублях">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Планируемая доля расходов на маркетинг от
                выручки (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Укажите ориентировочный процент от выручки, который вы готовы
                    потратить на маркетинг</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__row">
            <div class="ads-calculator__area">
              <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
                <span class="tips">
                  <span class="tips__btn">?</span>
                  <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                    заказывают
                    товар/услугу</span>
                </span>
              </div>
              <div class="border-gradient">
                <input type="text" class="ads-calculator__input"
                  placeholder="Укажите в процентах">
              </div>
            </div>
          </div>
          <div class="ads-calculator__card-dec"></div>
          <div class="ads-calculator__card-dec"></div>
        </div>
        <div class="ads-calculator__results border-gradient">
          <div class="ads-calculator__subtitle">Результат расчёта:</div>
          <div class="ads-calculator__result">
            <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
                ФОТ</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
                дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
                (обращение) не дороже указанной суммы</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Необходимое кол-во лидов/месяц: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Минимальное кол-во заявок для обеспечения заданной выручки</span>
            </span>
          </div>
          <div class="ads-calculator__result">
            <p>Вaловая прибыль: <span>— ₽</span></p>
            <span class="tips">
              <span class="tips__btn">?</span>
              <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
                маркетинг</span>
            </span>
          </div>
          <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php">Узнайте как получить
            результат!</button>
        </div>
      </div>
    </div>
  </section>

  <section class="art-cooperation">
    <div class="art-cooperation__body container em-padding">
      <h2 class="art-cooperation__title section-title">Почему мы?</h2>
      <div class="art-cooperation__subtitle">Мы неукоснительно соблюдаем каноны performance маркетинга.</div>
      <div class="art-cooperation__subsubtitle gradient-text">Сотрудничая с нами, Вы получите:</div>
      <div class="art-cooperation__cards">
        <div class="art-cooperation__card -card-1 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-1.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-1.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Отчет в понятных цифрах
              и показателях</div>
            <div class="art-cooperation__card-text">Составляем финансовую модель, определяем показатели kpi и
              достигаем их день ото дня.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-2 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-2.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-2.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Комплексное решение
              маркетинговых задач</div>
            <div class="art-cooperation__card-text">Снимем головную боль по всем точкам маркетинга</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-3 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-3.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-3.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Комфорт и компетентность</div>
            <div class="art-cooperation__card-text">Ваш проект будет вести профессиональный и вежливый (да-да!)
              digital-маркетолог, а не менеджер, который вечно “уточняет
              данный вопрос”</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-4 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-4.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-4.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Кристальную прозрачность</div>
            <div class="art-cooperation__card-text">Предоставим доступ к Дашборду с настроенными показателями и
              автоматически обновляемой аналитикой.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-5 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-5.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-5.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Долгосрочных партнеров</div>
            <div class="art-cooperation__card-text">Мы заинтересованы в плодотворном долгосрочном
              сотрудничестве, и знаем, что это достигается ежедневной работой, порой
              рутинной, а порой творческой.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-6 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-6.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-6.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Конфиденциальность</div>
            <div class="art-cooperation__card-text">Пароли от сайтов, хостингов, CRM хранятся в специальной
              системе с шифрованием, сотрудники не могут просто скопировать и
              передать доступ.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-7 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-7.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-7.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Анонимность</div>
            <div class="art-cooperation__card-text">По вашему желанию, мы подпишем NDA на неразглашение
              информации о вашей компании и ее продуктах. Также мы можем не
              публиковать в открытом доступе, что вы наш клиент.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
        <div class="art-cooperation__card -card-8 border-rainbow">
          <div class="art-cooperation__card-icon">
            <picture>
              <source srcset="<?= get_template_directory_uri(); ?>/img/home/adv-8.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/adv-8.png" width="112" height="130" alt="icon">
            </picture>
          </div>
          <div class="art-cooperation__card-info">
            <div class="art-cooperation__card-name">Знания и опыт</div>
            <div class="art-cooperation__card-text">Мы с удовольствием делимся знаниями в бизнесе и в сфере
              digital. Поможем сформировать нужные навыки для качественного
              развития.</div>
          </div>
          <div class="art-cooperation__card-corner -corner-1"></div>
          <div class="art-cooperation__card-corner -corner-2"></div>
          <div class="art-cooperation__card-corner -corner-3"></div>
          <div class="art-cooperation__card-corner -corner-4"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-form">
    <div class="section-form__body container">
      <div class="atropos my-atropos2">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <div class="atropos-inner request-card flex-card card-sm">
              <div class="request-card__title" data-atropos-offset="4">
                <span class="rainbow-text">Бонус -20% первые 2 месяца, при переходе <br> к нам от другого
                  агенства</span>
              </div>
              <div class="request-card__form">
                <div class="request-card__form-row">
                  <p class="policy-agree">Нажимая на кнопку я даю свое информированное согласие на <a
                      href="">обработку
                      персональных данных</a>
                  </p>
                  <button type="button" class="button-decore open-popup" data-popup="<?= get_template_directory_uri(); ?>/includes/popup.php"
                    data-atropos-offset="10">Загрузить новую
                    реальность</button>
                </div>
              </div>
              <div class="request-card__bg">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/card-bg-light.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/card-bg-light.png" width="1126" height="524" alt="card bg">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="comparison">
    <div class="comparison__body container em-padding">
      <h2 class="comparison__title section-title"><span class="gradient-text">6 отличий</span> с инхаус командой
      </h2>
      <div class="comparison__head">
        <div class="comparison__head-cell border-gradient border-rainbow">
          Маркетинговое агентство
        </div>
        <div class="comparison__head-cell border-gradient">
          <img src="<?= get_template_directory_uri(); ?>/img/icons/vs.svg" width="110" height="86" alt="vs">
        </div>
        <div class="comparison__head-cell border-gradient border-rainbow">
          Инхаус команда
        </div>
      </div>
      <div class="comparison__table border-gradient">
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Дешевле</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">01</span> Дешевле
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Дешевле</div>
          </div>
        </div>
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Не нужно платить налоги на ФОТ</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">02</span> Не нужно платить налоги на ФОТ
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Не нужно платить налоги на ФОТ</div>
          </div>
        </div>
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Есть узкие специалисты (интеграторы, аналитики,
              медицинские копирайтеры, специалисты по хостингам и т.д)</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">03</span> Есть узкие специалисты (интеграторы, аналитики,
              медицинские копирайтеры, специалисты по хостингам и т.д)
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Есть узкие специалисты (интеграторы, аналитики,
              медицинские копирайтеры, специалисты по хостингам и т.д)</div>
          </div>
        </div>
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Не болеют и не увольняются</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">04</span> Не болеют и не увольняются
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Не болеют и не увольняются</div>
          </div>
        </div>
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Работают слаженно с 1 дня</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">05</span> Работают слаженно с 1 дня
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Работают слаженно с 1 дня</div>
          </div>
        </div>
        <div class="comparison__table-row">
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/check-green.svg" width="48" height="48" alt="check icon">
            </div>
            <div class="comparison__table-cell-text">Процессы и отчеты уже отстроены</div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-text">
              <span class="gradient-text">06</span> Процессы и отчеты уже отстроены
            </div>
          </div>
          <div class="comparison__table-cell">
            <div class="comparison__table-cell-icon">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/close_red.svg" width="48" height="48" alt="close icon">
            </div>
            <div class="comparison__table-cell-text">Процессы и отчеты уже отстроены</div>
          </div>
        </div>
      </div>
      <div class="comparison__score border-gradient">
        <div class="comparison__score-cell">6</div>
        <div class="comparison__score-cell">SCORE</div>
        <div class="comparison__score-cell">0=(</div>
      </div>
      <div class="comparison__winner">
        <picture>
          <source srcset="<?= get_template_directory_uri(); ?>/img/home/winner-full.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/home/winner-full.png" width="1017" height="625" alt="winner" loading="lazy">
        </picture>
      </div>
    </div>
    <div class="comparison__bg">
      <img src="<?= get_template_directory_uri(); ?>/img/home/game.gif" width="1920" height="1061" alt="gif" loading="lazy">
    </div>
  </section>

  <section id="main_steps_screen_block">

    <div id="main_steps_screen_block_topbg"><br></div>

    <div class="cl0"><br></div>

    <div class="screen_block_wcont">

      <h2>
        Семь простых шагов работы с нами
      </h2>


      <div id="main_steps_screen_block_list_container">
        <div id="main_steps_screen_block_list_container_cont_item_1" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_1_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Заявка на результативный
            маркетинг
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Просто заполните форму ниже, мы свяжемся
            в течение 5 минут
          </div>
        </div>

        <div id="main_steps_screen_block_list_container_cont_item_2" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_2_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Интервью и аудит
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Наш специалист проведет мини-интервью
            для понимания целей и потребностей.
            При необходимости проведем полномасштабный
            аудит.
          </div>
        </div>

        <div class="cl0"><br></div>

        <div id="main_steps_screen_block_list_container_cont_item_3" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_3_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Коммерческое предложение
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Оформим коммерческое предложение с планом
            работ и экономической моделью.
            Для обсуждения условий с вами свяжется
            маркетолог, который в дальнейшем будет
            вести ваш проект.
          </div>
        </div>

        <div id="main_steps_screen_block_list_container_cont_item_4" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_4_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Заключение договора<br>
            и оплата счета
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Договор на маркетинговые услуги и счет
            на оплату подготовим в кратчайшее время.
          </div>
        </div>

        <div class="cl0"><br></div>

        <div id="main_steps_screen_block_list_container_cont_item_5" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_5_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Воплощение<br>
            результативного маркетинга
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Маркетолог проекта формирует команду
            из специалистов digital-агентства Artellect
            и начинает рабочий процесс.
          </div>
        </div>

        <div id="main_steps_screen_block_list_container_cont_item_6" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_6_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Контроль качества
          </div>
          <div class="main_steps_screen_block_list_container_cont_item_txt">
            Вы сможете отслеживать статистику
            на специально созданном для вашего проекта
            Дашборде (странице с показателями отчетности).
            Интернет-маркетолог пояснит показатели
            по желанию. Ежемесячно Вы будете получать отчет
            о всех выполненных работах, выводы, прогноз
            на будущее и рациональные предложения команды.
          </div>
        </div>

        <div class="cl0"><br></div>

        <div id="main_steps_screen_block_list_container_cont_item_7" class="main_steps_screen_block_list_container_cont_item">
          <div class="main_steps_screen_block_list_container_cont_item_ico" id="main_steps_screen_block_list_container_cont_item_7_ico"><br></div>
          <div class="main_steps_screen_block_list_container_cont_item_header">
            Результат:<br><br>
          </div>
        </div>

      </div>


    </div>


    <div id="main_steps_screen_block_graph">
      <div id="main_steps_screen_block_graph_money" style="margin-top: 50px;"><br></div>
      <div id="main_steps_screen_block_graph_kpi">
        <div id="main_steps_screen_block_graph_kpi_txt">KPI</div>
        <div id="main_steps_screen_block_graph_kpi_90" class="pie animate" style="--p:53">53%</div>
        <div id="main_steps_screen_block_graph_kpi_45" class="pie animate" style="--p:24">24%</div>
        <div id="main_steps_screen_block_graph_kpi_87" class="pie animate" style="--p:42">42%</div>
      </div>
    </div>

  </section>

  <section class="ads-stages ads-stages--home">
<<<<<<< Updated upstream
        <div class="ads-stages__body container">
          <h2 class="ads-stages__title section-title">Как мы делаем <br> креативный digital-marketing?</h2>
          <div class="ads-stages__content">
            <div class="ads-stages__slider swiper">
              <div class="swiper-wrapper">
                  <div class="ads-stages__slide swiper-slide border-gradient">
                    <div class="ads-stages__icon" data-swiper-parallax="-200"
                      data-swiper-parallax-duration="800">
                      <img src="http://old.artellect.agency/images/main_howwedo_screen_block_list_container_cont_item_ico_1.png" width="165" height="150" alt="icon">
                    </div>
                    <div class="ads-stages__info">
                      <div class="ads-stages__name" data-swiper-parallax="-200"
                        data-swiper-parallax-duration="1000">Работаем, как инхаус-команда</div>
                        <div class="ads-stages__text" data-swiper-parallax="-200"
                          data-swiper-parallax-duration="1200">Глубоко погружаемся в специфику бизнеса на уровне штатного отдела.</div>
                    </div>
                  </div>
                  <div class="ads-stages__slide swiper-slide border-gradient">
                    <div class="ads-stages__icon" data-swiper-parallax="-200"
                      data-swiper-parallax-duration="800">
                      <img src="http://old.artellect.agency/images/main_howwedo_screen_block_list_container_cont_item_ico_2.png" width="165" height="150" alt="icon">
                    </div>
                    <div class="ads-stages__info">
                      <div class="ads-stages__name" data-swiper-parallax="-200"
                        data-swiper-parallax-duration="1000">Внедряем HADI-циклы</div>
                        <div class="ads-stages__text" data-swiper-parallax="-200"
                          data-swiper-parallax-duration="1200">Предпочитаем короткие итерации, формулируем гипотезы, собираем данные, проверяем на практике,
                           делаем выводы и повторяем для достижения результата.</div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="ads-stages__panel">
              <div class="ads-stages__buttons">
                <button class="ads-stages__slider-prev slider-prev border-gradient">
                  <svg>
                    <use xlink:href="#icon-arrow-left"></use>
                  </svg>
                </button>
                <button class="ads-stages__slider-next slider-next border-gradient">
                  <svg>
                    <use xlink:href="#icon-arrow-right"></use>
                  </svg>
                </button>
=======
    <div class="ads-stages__body container">
      <h2 class="ads-stages__title section-title">Как мы делаем <br> креативный digital-marketing?</h2>
      <div class="ads-stages__content">
        <div class="ads-stages__slider swiper">
          <div class="swiper-wrapper">
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_1.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Работаем, как инхаус-команда</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Глубоко погружаемся в специфику бизнеса на уровне штатного отдела.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_2.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Внедряем HADI-циклы</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Предпочитаем короткие итерации, формулируем гипотезы, собираем данные, проверяем на практике,
                  делаем выводы и повторяем для достижения результата.</div>
>>>>>>> Stashed changes
              </div>
              <div class="ads-stages__fraction"></div>
            </div>
            <div class="ads-stages__content-bg">
                <img src="http://old.artellect.agency/images/main_howwedo_screen_block_list_container_cont_item_ico_1.png" width="491" height="446" alt="icon">
                <img src="http://old.artellect.agency/images/main_howwedo_screen_block_list_container_cont_item_ico_2.png" width="491" height="446" alt="icon">
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Применяем Growth Hacking</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200"><p>Отметим факт, что универсальных инструментов для любой отрасли и конкретного бизнеса не существует. Если «взлетело» у других, это не значит, что так же успешно будет работать в вашем случае.</p>
                  <p>Что делать? Тут нам помогает подход по «взлому роста» - быстрый MVP тест на уровне простого прототипа с минимальными затратами. Так мы поймем, что работает, а что нет.</p></div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_4.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Строим Customer Journey Map</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Разрабатываем портреты целевой аудитории и строим путь клиента от формирования потребности до регулярных продаж. Начинаем работать с клиентом до того, как за него возьмутся конкуренты.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_5.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Внедряем гиперсегментацию</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Разделяем аудиторию на мини-сегменты и показываем каждому уникальное предложение. Получается эффективный таргетинг.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_6.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Строим автоворонки</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Запускаем рекламу на вашу ЦА, вовлекаем с помощью мессенджеров, конверсионных сайтов и индивидуальных предложений, в итоге получаем лиды (заявки). Подогреваем клиента повторно на будущие заказы. Процесс полностью автоматизирован!</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_7.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Настраиваем чат-боты</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Снижаем нагрузку на call-центр и минимизируем риски упустить клиента. Клиент подогревается к продаже автоматически.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_8.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Внедряем CRM-маркетинг</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Все данные о клиенте будут собираться в CRM-системе, обрабатываться и сегментироваться для реализации дальнейших шагов по автоворонке.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_9.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Внедряем сквозную аналитику</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Вы будете видеть, не только откуда пришел клиент, что и сколько заказал, но и вклад источника трафика в валовую прибыль. Данные аналитики позволяют связать каналы лидогенерации, сайты, CRM и другие инструменты в единый информационный центр, а также принимать правильные решения по перераспределению бюджетов между каналами. Это не только ключевой, но и жизненно необходимый инструмент цифрового маркетинга.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_10.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Проведем A/B и мультитесты</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Мы выдвигаем и проверяем гипотезы на регулярной основе. Это помогает понять направление дальнейшего вложения ресурсов.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_11.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Строим unit-экономику и используем Data Driven</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Важно уметь считать стоимость каждого отдельного клиента, чтобы при росте затрат на маркетинг масштабировать прибыль, а не убытки.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_12.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Добиваемся синергии инструментов digital-маркетинга в бизнесе</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">В согласованном и связанном комплексе все инструменты работают в 3-9 раз эффективнее, чем порознь.</div>
              </div>
            </div>
            <div class="ads-stages__slide swiper-slide border-gradient">
              <div class="ads-stages__icon" data-swiper-parallax="-200"
                data-swiper-parallax-duration="800">
                <img src="<?= get_template_directory_uri(); ?>/images/main_howwedo_screen_block_list_container_cont_item_ico_13.png" width="165" height="150" alt="icon">
              </div>
              <div class="ads-stages__info">
                <div class="ads-stages__name" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1000">Собираем и визуализируем данные в одном Дашборде</div>
                <div class="ads-stages__text" data-swiper-parallax="-200"
                  data-swiper-parallax-duration="1200">Вам не придется искать данные по множеству сервисов и получать неинформативные отчеты в Excel. Эффективность бизнеса собрана в одном месте.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

  <?php get_template_part('template-parts/reviews'); ?>

  <?php get_template_part('template-parts/partners'); ?>

  <section class="art-faq">
    <div class="art-faq__body container em-padding">
      <h2 class="art-faq__title section-title">FAQ-часто задаваемые вопросы</h2>
      <div class="art-faq__items">
        <div class="art-faq__item">
          <div class="art-faq__question">
            Как быстро я увижу результат?
          </div>
          <div class="art-faq__answer">Вы увидите результат уже в первый месяц работы, изменения будут
            отображаться в дашборде.</div>
        </div>
        <div class="art-faq__item">
          <div class="art-faq__question">
            Как мне выбрать нужные услуги?
          </div>
          <div class="art-faq__answer">Оставьте заявку на сайте или позвоните нам, после брифования маркетолог
            составит персональные рекомендации для вашего
            бизнеса.</div>
        </div>
        <div class="art-faq__item">
          <div class="art-faq__question">
            По каким KPI я смогу оценить работу?
          </div>
          <div class="art-faq__answer">
            <p>Мы применяем следующие Kpi:</p>
            <ul>
              <li>CPL (Cost Per Lead) стоимость привлечения лида</li>
              <li>Количество привлеченных клиентов</li>
              <li>CAC (Customer Acquisition Cost) стоимость привлечения клиента</li>
              <li>CR1 (Conversion Ratio) — коэффициент конверсии</li>
              <li>LPO (Leads generated Per Offer) — количество лидов от конкретного вида рекламы</li>
              <li>LTV (Lifetime Value) Пожизненная ценность клиента</li>
              <li>ROMI (Return on Marketing Investment) - окупаемость (возврат) инвестиций в маркетинг</li>
              <li>ROAS (return on advertising spend) - окупаемость расходов на рекламу</li>
              <li>ARPU (average revenue per user) - средний доход с клиента и т.д)</li>
              <li>CR2 (конверсия в продажу)</li>
              <li>Общая сумма расходов на digital маркетинг</li>
              <li>Выручка (gross profit)</li>
            </ul>
            <p>По желанию клиента добавляем персональные Kpi</p>
          </div>
        </div>
        <div class="art-faq__item">
          <div class="art-faq__question">
            Какой рекламный канал подходит моему бизнесу?
          </div>
          <div class="art-faq__answer">Cходу на этот вопрос может ответить только новичок в маркетинге.
            Профессионал знает, что под каждый бизнес подходит
            персональный набор рекламных каналов и офферов.</div>
        </div>
        <div class="art-faq__item">
          <div class="art-faq__question">
            Что такое цифровой маркетинг «под ключ»?
          </div>
          <div class="art-faq__answer">Маркетинг «под ключ» - это ваш рекламный отдел на аутсорсе. Только без
            отчислений с ФОТ, обучения и затрат на подбор
            кадров, с огромной экспертизой, опытом и затратами в среднем на 950000 меньше, чем содержание
            штатного отдела.</div>
        </div>
        <div class="art-faq__item">
          <div class="art-faq__question">
            Можно ли заказать у вас отдельную услугу?
          </div>
          <div class="art-faq__answer">Конечно, это возможно. Оставьте заявку, обсудим подходящий вам вариант
            сотрудничества.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="art-support">
    <div class="art-support__body container">
      <div class="atropos my-atropos">
        <div class="atropos-scale">
          <div class="atropos-rotate">
            <a href="<?= get_field('site_tg', 'options')['url']; ?>" class="atropos-inner art-support__card" target="_blank">
              <h2 class="art-support__title" data-atropos-offset="4">
                <span class="gradient-text" data-atropos-offset="1">РОБОголик</span> на службе 24/7
              </h2>
              <div class="art-support__subtitle" data-atropos-offset="3">
                Задайте свой вопрос в <span>Telegram</span>
              </div>
              <div class="art-support__link border-gradient" data-atropos-offset="2">
                <span target="_blank" aria-label="Telegram">
                  <svg>
                    <use xlink:href="#icon-telegram"></use>
                  </svg>
                </span>
              </div>
              <div class="art-support__image" data-atropos-offset="8">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/support.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/support.png" width="600"
                    height="583" alt="support">
                </picture>
              </div>
              <div class="art-support__bg" data-atropos-offset="-5">
                <picture>
                  <source srcset="<?= get_template_directory_uri(); ?>/img/support-bg.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/support-bg.png" width="821"
                    height="385" alt="support bg">
                </picture>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>




<?php
get_footer();
