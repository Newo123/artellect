<?php

$title = get_field('service_title', $post->ID);
$process = get_field('service_process', $post->ID);
$motivations = get_field('service_motivation', $post->ID);
$consultation = get_field('service_consultations', $post->ID);
get_header();

?>
<main>
  <section class="services-single-main">
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


      <h1 class="main-title text-center"><?= $title; ?></h1>
      <div class="serv-light-bg">
        <img class="services-main-gif" src="<?= get_template_directory_uri() ?>/serv-images/anim-bg.png" alt="gif">
      </div>
      <div class="services-single-road">
        <div class="road-absolute">
          <img src="<?= get_template_directory_uri() ?>/serv-images/serv-single-rect.webp" alt="rectangle" width="1517" height="75">
          <img src="<?= get_template_directory_uri() ?>/serv-images/rect-mob.png" alt="rectangle" width="1517" height="75">
          <div class="linear-rnb-item"></div>
        </div>

        <?php if (!empty($process)): ?>
          <?php foreach ($process as $index => $item): ?>
            <div class="services-single-road-item"><?= $item['service_process_name']; ?></div>

            <?php if ($index < count($process) - 1): ?>
              <div class="chain">
                <img class="chain" src="<?= get_template_directory_uri() ?>/serv-images/chains.gif" alt="chain">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <a href="#consult-roadmap-section" class="primary-button">Оставить заявку</a>
    </div>
  </section>

  <div class="consult-bg">
    <?php if (!empty($motivations)): ?>
      <section class="services-single-faq">
        <div class="container">
          <div class="faq-tabs">
            <?php foreach ($motivations as $index => $item): ?>
              <div class="faq-tab-wrapper <?php if ($index === 0) {
                                            echo 'active';
                                          } ?>">
                <div class="faq-tab-header">
                  <span><?= $item['service_motivation_title']; ?></span>
                  <svg class="arrow" width="15" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L13 13L1 25" stroke="#F74E1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="faq-tab-content">
                  <div class="fq-contant-bg"></div>
                  <p class="faq-tab-title"><?= $item['service_motivation_title']; ?></p>
                  <?php if (!empty($item['service_motivation_items'])): ?>
                    <ul class="faq-tab-list">
                      <?php foreach ($item['service_motivation_items'] as $el): ?>
                        <li><?= $el['service_motivation_items_item']; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <?php if (!empty($consultation)): ?>
      <section class="consultations-section">
        <div class="container">
          <h2 class="subtitle">Кто проводит консультации?</h2>
          <?php foreach ($consultation as $item): ?>
            <div class="consultation-info__wrapper">
              <div class="consultation-info__left-wrapper">
                <img loading="lazy" src="<?= $item['service_consultations_image']; ?>" alt="<?= get_field('employee_fio', $item['service_consultations_person']->ID); ?>" width="417" height="540" class="consultation-info__img">
                <div class="consultation-info__left">
                  <div class="consultation-info__employee">
                    <span class="consultation-info__name"><?= get_field('employee_fio', $item['service_consultations_person']->ID); ?></span>
                    <span class="consultation-info__post"><?= get_field('employee_job', $item['service_consultations_person']->ID); ?></span>
                    <img loading="lazy" src="<?= get_template_directory_uri() ?>/serv-images/cons-rocket.svg" alt="rocket">
                    <span class="consultation-info__position"><?= get_field('employee_rank', $item['service_consultations_person']->ID); ?></span>
                  </div>
                  <div class="consultation-info__gif">
                    <video autoplay="" muted="" loop="" playsinline="" defaultmuted="" preload="auto" src="<?= $item['service_consultations_bg']; ?>"></video>
                  </div>
                </div>
              </div>
              <div class="consultation-info__right">
                <div class="consultation-info__quote">
                  <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.9884 1.15206C41.0489 0.758864 40.8706 0.367211 40.5343 0.154675C40.198 -0.0578606 39.7677 -0.0508516 39.4385 0.172524L21.1147 12.6065L22.9857 1.6686C23.0536 1.2718 22.8769 0.872994 22.5374 0.656663C22.1979 0.440332 21.7618 0.448665 21.4308 0.677808L1.9308 14.1778C1.70391 14.3349 1.55201 14.5788 1.51107 14.8517L0.0110744 24.8517C-0.035982 25.1654 0.0685961 25.4828 0.292904 25.7071L14.7929 40.2071C15.0572 40.4714 15.4469 40.5663 15.8032 40.4529C16.1594 40.3396 16.4227 40.0371 16.4857 39.6686L18.5982 27.3184L32.3291 39.7415C32.5969 39.9839 32.9746 40.0629 33.3171 39.9484C33.6597 39.8339 33.9138 39.5435 33.982 39.1888L36.482 26.1888C36.5447 25.8631 36.4417 25.5275 36.2071 25.2929L31.0466 20.1323L38.5767 14.817C38.7985 14.6604 38.9471 14.4204 38.9884 14.1521L40.9884 1.15206ZM18.9977 24.9827L32.3535 37.0665L34.4178 26.332L28.7929 20.7071C28.5844 20.4986 28.4785 20.2086 28.5037 19.9147C28.5288 19.6209 28.6824 19.3531 28.9233 19.183L37.0762 13.428L38.6627 3.11594L20.647 15.3409L18.9977 24.9827ZM18.3515 16.8985L17.2406 23.393L13.615 20.1126L18.3515 16.8985ZM18.8192 14.1642L11.4385 19.1725C11.1845 19.3449 11.0238 19.6243 11.0024 19.9304C10.9811 20.2366 11.1015 20.5356 11.3291 20.7415L16.8411 25.7286L14.8402 37.426L2.06377 24.6495L3.42479 15.576L20.6132 3.67635L18.8192 14.1642Z" fill="#C8430A" />
                  </svg>
                  <h3><?= $item['service_consultations_quote']; ?></h3>
                  <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0116171 39.3479C-0.0488726 39.7411 0.129449 40.1328 0.465738 40.3453C0.802022 40.5579 1.2323 40.5509 1.56149 40.3275L19.8853 27.8935L18.0143 38.8314C17.9464 39.2282 18.1231 39.627 18.4626 39.8433C18.8021 40.0597 19.2382 40.0513 19.5692 39.8222L39.0692 26.3222C39.2961 26.1651 39.448 25.9212 39.4889 25.6483L40.9889 15.6483C41.036 15.3346 40.9314 15.0172 40.7071 14.7929L26.2071 0.292893C25.9428 0.028561 25.5531 -0.0662647 25.1968 0.0470547C24.8406 0.160378 24.5773 0.462929 24.5143 0.831398L22.4018 13.1816L8.6709 0.758465C8.40308 0.516148 8.02541 0.437081 7.68287 0.551613C7.34034 0.666146 7.08619 0.956478 7.01798 1.31115L4.51798 14.3112C4.45534 14.6369 4.55831 14.9725 4.79288 15.2071L9.95343 20.3677L2.42331 25.683C2.20151 25.8396 2.0529 26.0796 2.01162 26.3479L0.0116171 39.3479ZM22.0023 15.5173L8.64649 3.43348L6.58217 14.168L12.2071 19.7929C12.4156 20.0014 12.5215 20.2914 12.4963 20.5853C12.4712 20.8791 12.3176 21.1469 12.0767 21.317L3.92376 27.072L2.33728 37.3841L20.353 25.1591L22.0023 15.5173ZM22.6485 23.6015L23.7594 17.107L27.385 20.3874L22.6485 23.6015ZM22.1808 26.3358L29.5615 21.3275C29.8155 21.1551 29.9762 20.8757 29.9976 20.5696C30.0189 20.2634 29.8985 19.9644 29.6709 19.7585L24.1589 14.7714L26.1598 3.07398L38.9362 15.8505L37.5752 24.924L20.3868 36.8237L22.1808 26.3358Z" fill="#C8430A" />
                  </svg>
                </div>
                <?php if (!empty($item['service_consultations_experience'])): ?>
                  <div class="consultation-info__main">
                    <ul class="consultation-info__list">
                      <?php foreach ($item['service_consultations_experience'] as $el): ?>
                        <li class="consultation-info__item">
                          <?= $el['service_consultations_experience_item']; ?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

    <?php endif; ?>
  </div>

  <div class="price-bg">
    <section class="banner-section top-minus">
      <img loading="lazy" class="banner-gif" src="<?= get_template_directory_uri() ?>/serv-images/CTA1.gif" alt="banner">
      <img loading="lazy" class="banner-bg" src="<?= get_template_directory_uri() ?>/serv-images/banner2.svg" alt="banner">
      <div class="banner-content">
        <img loading="lazy" class="banner-logo" src="<?= get_template_directory_uri() ?>/serv-images/logo.svg" alt="logo">
        <p class="banner-text">Ответим на любые запросы в сфере маркетинга и рекламы</p>
      </div>
    </section>
    <section class="consult-prise-section">
      <div class="container">
        <h2 class="subtitle">Cколько стоит консультация маркетолога?</h2>
        <?php
        $table_price = get_field('service_price', $post->ID);
        $table_description =  get_field('service_description', $post->ID);


        if (!empty($table_price)):
        ?>
          <div class="consult-prise__table-wrapper">
            <table class="consult-prise__table">
              <?php foreach ($table_price['body'] as $index => $item): ?>
                <tr>
                  <?php foreach ($item as $i => $el): ?>
                    <?php if ($index === 0 || $i === 0): ?>
                      <th><?= $el['c']; ?></th>
                    <?php else: ?>
                      <td><?= $el['c']; ?></td>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </tr>
              <?php endforeach; ?>
            </table>
            <div class="table-bg"></div>
          </div>
        <?php endif; ?>


        <?php if (!empty($table_description)): ?>
          <table class="consult-prise__table">
            <?php foreach ($table_description['body'] as $index => $item): ?>
              <tr>
                <?php
                $skipUntil = -1;

                foreach ($item as $i => $el):
                  if ($i <= $skipUntil) {
                    continue;
                  }

                  $colspan = 1;
                  for ($j = $i + 1; $j < count($item); $j++) {
                    if (empty($item[$j]['c'])) {
                      $colspan++;
                    } else {
                      break;
                    }
                  }

                  if ($colspan > 1) {
                    $skipUntil = $i + $colspan - 1;
                  }

                  if ($i === 0): ?>
                    <th><?= !empty($el['c']) ? $el['c'] : '&nbsp;' ?></th>
                  <?php else: ?>
                    <td colspan="<?= $colspan ?>"><?= !empty($el['c']) ? $el['c'] : '&nbsp;' ?></td>
                  <?php endif; ?>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>

          </table>
        <?php endif; ?>
        <?php
        $mobile_price = get_field('service_price_mobile', $post->ID);

        if (!empty($mobile_price)):
        ?>

          <div class="consult-price-mobile">
            <?php foreach ($mobile_price as $index => $item): ?>
              <?php
              // Подсчитываем количество символов в строке времени
              $timeLength = isset($item['service_price_time']) ? mb_strlen($item['service_price_time']) : 0;

              // Определяем класс для первой строки в зависимости от длины текста
              $firstRowClass = ($timeLength > 30) ? 'consult-price-row col' : 'consult-price-row';
              ?>

              <div class="consult-price-mobile__item">
                <div class="<?= $firstRowClass ?>">
                  <div class="head"><?= $item['service_price_mobile_title']; ?></div>

                  <div class="desc">
                    <?php if ($item['service_price_icon']): ?>
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 1.3125C5.42637 1.3125 1.3125 5.42637 1.3125 10.5C1.3125 15.5736 5.42637 19.6875 10.5 19.6875C15.5736 19.6875 19.6875 15.5736 19.6875 10.5C19.6875 5.42637 15.5736 1.3125 10.5 1.3125ZM10.5 18.1289C6.2877 18.1289 2.87109 14.7123 2.87109 10.5C2.87109 6.2877 6.2877 2.87109 10.5 2.87109C14.7123 2.87109 18.1289 6.2877 18.1289 10.5C18.1289 14.7123 14.7123 18.1289 10.5 18.1289Z" fill="url(#paint0_linear_140_9710)" />
                        <path d="M14.0827 13.0963L11.1583 10.9819V5.90625C11.1583 5.81602 11.0845 5.74219 10.9942 5.74219H10.0078C9.91758 5.74219 9.84375 5.81602 9.84375 5.90625V11.5541C9.84375 11.6074 9.86836 11.6566 9.91143 11.6874L13.3034 14.1606C13.3772 14.214 13.4798 14.1976 13.5331 14.1258L14.1196 13.326C14.1729 13.2501 14.1565 13.1476 14.0827 13.0963Z" fill="url(#paint1_linear_140_9710)" />
                        <defs>
                          <linearGradient id="paint0_linear_140_9710" x1="1.07692" y1="10.7692" x2="19.9231" y2="10.7692" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#50AFE8" />
                            <stop offset="0.575" stop-color="#B874FF" />
                            <stop offset="1" stop-color="#F9F2FF" />
                          </linearGradient>
                          <linearGradient id="paint1_linear_140_9710" x1="1.07692" y1="10.7692" x2="19.9231" y2="10.7692" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#50AFE8" />
                            <stop offset="0.575" stop-color="#B874FF" />
                            <stop offset="1" stop-color="#F9F2FF" />
                          </linearGradient>
                        </defs>
                      </svg>
                    <?php endif; ?>
                    <?= $item['service_price_time']; ?>
                  </div>
                </div>

                <?php
                if (!empty($item['service_price_mobile_description'])):
                ?>
                  <?php foreach ($item['service_price_mobile_description'] as $el): ?>
                    <?php
                    // Также можно добавить проверку для description элементов, если нужно
                    // $descTextLength = isset($el['service_price_mobile_description_text']) ? mb_strlen($el['service_price_mobile_description_text']) : 0;
                    // $descRowClass = ($descTextLength > 30) ? 'consult-price-row col' : 'consult-price-row';
                    ?>

                    <div class="consult-price-row">
                      <div class="head"><?= $el['service_price_mobile_description_title']; ?></div>
                      <div class="desc"><?= $el['service_price_mobile_description_text']; ?></div>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>

                <div class="gradient-bottom"><?= $item['service_price_mobile_price']; ?></div>
              </div>
            <?php endforeach; ?>

          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="consult-roadmap-section" id="consult-roadmap-section">
      <div class="container">
        <h2 class="subtitle">Процесс консультации по digital маркетингу</h2>
        <div class="consult-roadmap__info">
          <ul class="consult-roadmap__list">
            <li class="consult-roadmap__item">
              Заполните форму
            </li>
            <li class="consult-roadmap__item">
              Согласовываем дату и время консультации Уточняем вводные данные
            </li>
            <li class="consult-roadmap__item">
              Подробно консультируем онлайн
            </li>
            <li class="consult-roadmap__item">
              По итогу вы получите рекомендации в письменном виде
            </li>
          </ul>
          <img loading="lazy" src="<?= get_template_directory_uri() ?>/serv-images/decor3.svg" alt="chain">
        </div>
        <div class="consult-roamap__monitor-decor">
        </div>
        <div class="consult-roadmap__form-wrapper">
          <form class="consult-roadmap__form"
            method="POST"
            data-send="<?= get_template_directory_uri(); ?>/callback/callback.php?template=consultation"
            data-hash="<?= get_template_directory_uri(); ?>/callback/get_hash.php">
            <div class="consult-roadmap__forms-wrapper">
              <div class="consult-roadmap__form-left">
                <div class="consult-roadmap__input-wrapper">
                  <label for="name" class="consult-roadmap__label">Имя*</label>
                  <input type="text" class="consult-roadmap__input" id="name" name="name" required>
                </div>
                <div class="consult-roadmap__input-wrapper">
                  <label for="post" class="consult-roadmap__label">Должность</label>
                  <input type="text" class="consult-roadmap__input" id="post" name="job" required>
                </div>
                <div class="consult-roadmap__input-wrapper">
                  <label for="scope" class="consult-roadmap__label">Сфера деятельности</label>
                  <input type="text" class="consult-roadmap__input" id="scope" name="scope" required>
                </div>
                <div class="consult-roadmap__input-wrapper">
                  <label for="phonenumber" class="consult-roadmap__label">Номер телефона</label>
                  <input type="text" class="consult-roadmap__input phone" id="phonenumber" placeholder="+7" name="phone" required>
                </div>
              </div>
              <div class="consult-roadmap__form-right">
                <div class="consult-roadmap__input-wrapper">
                  <label for="question" class="consult-roadmap__label">Ваш вопрос</label>
                  <textarea class="consult-roadmap__input" id="question" name="message" placeholder="Пожалуйста, расскажите как можно подробнее о вашем бизнесе, а также укажите сайт, соц. сети (если есть) и регион продвижения"></textarea>
                </div>
              </div>
            </div>
            <div id="main_form_screen_block_pca_2"><input type="checkbox" id="main_prefooter_form_screen_block_police" value="1" checked required name="confirm">Я даю согласие на обработку моих персональных данных в соответствии с
              <a href="/legal/privacypolicy/">Политикой конфиденциальности
              </a>
            </div>
            <input type="submit" class="primary-button" value="Отправить">
          </form>
        </div>
        <div class="consult-roamap__decor">
          <img loading="lazy" src="<?= get_template_directory_uri() ?>/serv-images/decor1.svg" alt="chain">
          <img loading="lazy" src="<?= get_template_directory_uri() ?>/serv-images/decor2.svg" alt="chain">
          <img loading="lazy" src="<?= get_template_directory_uri() ?>/serv-images/decor3.svg" alt="chain">
        </div>
      </div>
    </section>


    <?php get_template_part('template-parts/service-faq'); ?>



  </div>
  <section class="banner-section">
    <img loading="lazy" class="banner-gif" src="<?= get_template_directory_uri() ?>/serv-images/CTA2.gif" alt="banner">
    <img loading="lazy" class="banner-bg" src="<?= get_template_directory_uri() ?>/serv-images/banner1.svg" alt="banner">
    <div class="banner-content">
      <img loading="lazy" class="banner-logo large" src="<?= get_template_directory_uri() ?>/serv-images/banner-logo.svg " alt="logo">
    </div>
  </section>




  <?php get_template_part('template-parts/reviews'); ?>

</main>
<?php get_footer(); ?>