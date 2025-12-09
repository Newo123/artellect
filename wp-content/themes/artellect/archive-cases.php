<?php
$directions = get_terms(array(
  'taxonomy' => 'direction',
  'hide_empty' => false,
));
$industries = get_terms(array('taxonomy' => 'industries', 'hide_empty' => false));

// Получаем выбранные фильтры
$selected_directions = isset($_GET['directions']) ? (array)$_GET['directions'] : [];
$selected_industries = isset($_GET['industries']) ? (array)$_GET['industries'] : [];

// Формируем аргументы для WP_Query
$args = array(
  'post_type' => 'cases', // предполагается, что тип записи называется 'cases'
  'posts_per_page' => 6,
  'post_status' => 'publish',
);

// Добавляем фильтрацию по таксономиям, если есть выбранные значения
$tax_query = array('relation' => 'AND');

if (!empty($selected_directions)) {
  $tax_query[] = array(
    'taxonomy' => 'direction',
    'field' => 'slug',
    'terms' => $selected_directions,
    'operator' => 'IN'
  );
}

if (!empty($selected_industries)) {
  $tax_query[] = array(
    'taxonomy' => 'industries',
    'field' => 'slug',
    'terms' => $selected_industries,
    'operator' => 'IN'
  );
}

// Если есть хотя бы один фильтр, добавляем tax_query
if (count($tax_query) > 1) {
  $args['tax_query'] = $tax_query;
}

// Выполняем запрос
$cases_query = new WP_Query($args);

get_header();
?>

<main>
  <section class="all-cases">
    <div class="all-cases__body container">
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
      <div class="all-cases__name page-name">Digital-агентство Artellect</div>
      <h1 class="all-cases__title main-title">Кейсы — истории успеха</h1>
      <div class="art-filters">
        <form class="art-filters__form" id="filter-form">
          <div class="art-filters__items">
            <div class="art-filters__item">
              <div class="theme-dropdown">
                <div class="theme-dropdown__button border-gradient">
                  Услуги
                  <div class="theme-dropdown__button-icon">
                    <svg>
                      <use xlink:href="#icon-chevron"></use>
                    </svg>
                  </div>
                </div>
                <ul class="theme-dropdown__list">
                  <?php
                  if (!empty($directions) && !is_wp_error($directions)) {
                    foreach ($directions as $direction):
                      $is_checked = in_array($direction->slug, $selected_directions);
                  ?>
                      <li>
                        <label class="theme-dropdown__checkbox">
                          <input type="checkbox"
                            name="directions[]"
                            value="<?= esc_attr($direction->slug); ?>"
                            data-name="<?= esc_attr($direction->name); ?>"
                            <?= $is_checked ? 'checked' : '' ?>>
                          <?= esc_html($direction->name); ?>
                          <span class="theme-dropdown__box border-gradient"></span>
                        </label>
                      </li>
                  <?php endforeach;
                  } else {
                    echo '<li><label class="theme-dropdown__checkbox">Нет направлений</label></li>';
                  }
                  ?>
                </ul>
              </div>
            </div>
            <div class="art-filters__item">
              <div class="theme-dropdown">
                <div class="theme-dropdown__button border-gradient">
                  Отрасли
                  <div class="theme-dropdown__button-icon">
                    <svg>
                      <use xlink:href="#icon-chevron"></use>
                    </svg>
                  </div>
                </div>
                <ul class="theme-dropdown__list">
                  <?php
                  if (!empty($industries) && !is_wp_error($industries)) {
                    foreach ($industries as $industry):
                      $is_checked = in_array($industry->slug, $selected_industries);
                  ?>
                      <li>
                        <label class="theme-dropdown__checkbox">
                          <input type="checkbox"
                            name="industries[]"
                            value="<?= esc_attr($industry->slug); ?>"
                            data-name="<?= esc_attr($industry->name); ?>"
                            <?= $is_checked ? 'checked' : '' ?>>
                          <?= esc_html($industry->name); ?>
                          <span class="theme-dropdown__box border-gradient"></span>
                        </label>
                      </li>
                  <?php endforeach;
                  } else {
                    echo '<li><label class="theme-dropdown__checkbox">Нет отраслей</label></li>';
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="art-filters__apply">
            <button type="submit" class="button-gradient"><span>Показать</span></button>
          </div>
        </form>
        <?php
        $selected_items = [];

        // Добавляем выбранные направления
        if (!empty($selected_directions) && !empty($directions) && !is_wp_error($directions)) {
          foreach ($directions as $direction) {
            if (in_array($direction->slug, $selected_directions)) {
              $selected_items[] = [
                'name' => $direction->name,
                'slug' => $direction->slug,
                'type' => 'direction'
              ];
            }
          }
        }

        // Добавляем выбранные отрасли
        if (!empty($selected_industries) && !empty($industries) && !is_wp_error($industries)) {
          foreach ($industries as $industry) {
            if (in_array($industry->slug, $selected_industries)) {
              $selected_items[] = [
                'name' => $industry->name,
                'slug' => $industry->slug,
                'type' => 'industry'
              ];
            }
          }
        }
        ?>
        <div class="art-filters__selected">
          <div class="art-filters__selected-title" style="<?php if (empty($selected_items)) {
                                                            echo 'display:none;';
                                                          } ?>">Выбрано:</div>
          <div class="art-filters__selected-items">
            <?php


            if (!empty($selected_items)) {
              foreach ($selected_items as $item) {
            ?>
                <div class="art-filters__selected-item">
                  <span class="art-filters__selected-text"><?= esc_html($item['name']); ?></span>
                  <span class="art-filters__selected-icon" aria-hidden="true"></span>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="art-filters__reset">
          <button type="reset" form="filter-form"
            style="<?php if (empty($selected_items)) {
                      echo 'display:none;';
                    } ?>">Сбросить фильтр</button>
        </div>
      </div>

      <div class="all-cases__content">
        <div class="all-cases__wrapper">
          <?php if ($cases_query->have_posts()): ?>
            <?php while ($cases_query->have_posts()): $cases_query->the_post(); ?>
              <div class="case-preview border-gradient">
                <?php
                $categories = wp_get_post_terms($post->ID, 'direction', array('fields' => 'all'));
                if (!empty($categories) && !is_wp_error($categories)): ?>
                  <span class="case-preview__tag art-tag"><?= $categories[0]->name; ?></span>
                <?php endif; ?>
                <div class="case-preview__icon">
                  <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="icon">
                </div>
                <div class="case-preview__image">
                  <?php
                  $image = get_field('case_anons_image');
                  ?>
                  <img src="<?= $image; ?>" width="440" height="551" alt="<?= get_the_title(); ?>">
                </div>
                <div class="case-preview__info border-gradient">
                  <div class="case-preview__details">
                    <?php
                    $params = get_field('case_anons_results');
                    if (!empty($params)) {
                      foreach ($params as $param) {
                    ?>
                        <div class="case-preview__details-item">
                          <?= $param['case_anons_results_title']; ?> <span><?= $param['case_anons_results_value']; ?></span>
                        </div>
                    <?php }
                    } ?>
                  </div>
                  <h3 class="case-preview__title"><?= get_field('case_anons_title'); ?></h3>
                  <div class="case-preview__footer">
                    <div class="case-preview__logo">
                      <?php
                      $client_logo = get_field('case_anons_logo');
                      if ($client_logo): ?>
                        <img src="<?= $client_logo; ?>" width="77" height="17" alt="client logo">
                      <?php endif; ?>
                    </div>
                    <div class="case-preview__button">
                      <a href="<?= get_permalink(); ?>" class="button-gradient"><span>Смотреть</span></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <div class="no-cases">
              <p>Кейсы не найдены. Попробуйте изменить параметры фильтра.</p>
            </div>
          <?php endif; ?>
        </div>

        <?php
        // Показываем кнопку только если постов больше чем выводится на одной странице
        if ($cases_query->found_posts > 6): ?>
          <div class="all-cases__more">
            <button type="button"
              class="button-gradient"
              data-nonce="<?php echo wp_create_nonce('load_more_cases_nonce'); ?>">
              <span>Загрузить ещё</span>
            </button>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
