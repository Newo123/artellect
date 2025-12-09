<?php
$filters = array(
  'category' => array(),
  'tag' => array()
);

// Получаем текущий URL
$current_url = $_SERVER['REQUEST_URI'];

// Парсим URL для категорий (оба варианта: category/categories)
if (preg_match('#/blog/category/([^/]+(?:/[^/]+)*)(?:/(?:tag|tags)/|$)#', $current_url, $matches)) {
  if (isset($matches[1])) {
    $filters['category'] = explode('/', $matches[1]);
  }
}

// Парсим URL для тегов (оба варианта: tag/tags)
if (preg_match('#/tag/([^/]+(?:/[^/]+)*)/?$#', $current_url, $matches)) {
  if (isset($matches[1])) {
    $filters['tag'] = explode('/', $matches[1]);
  }
}


get_header();
?>

<main>
  <section class="art-blog">
    <div class="art-blog__body container">
      <div class="breadcrumbs">
        <span class="breadcrumbs__separator">//</span>
        <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
        <span class="breadcrumbs__separator">/</span>
        <?php if (is_singular('blog')): ?>
          <a href="<?= get_post_type_archive_link('blog'); ?>" class="breadcrumbs__link">Блог</a>
          <span class="breadcrumbs__separator">/</span>
          <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
        <?php else: ?>
          <?php if (!$filters['category'] && !$filters['tag']): ?>
            <span class="breadcrumbs__current">Блог</span>
          <?php else: ?>
            <a href="<?= get_post_type_archive_link('blog'); ?>" class="breadcrumbs__link">Блог</a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="art-blog__name page-name">Digital-агентство Artellect</div>
      <h1 class="art-blog__title main-title">Блог</h1>

      <?php if (!$filters['category'] && !$filters['tag']): ?>
        <?php
        $recommend = get_field('blog_main', 'options');
        if ($recommend):
          $tags = get_the_tags($recommend->ID);
          $categories = wp_get_post_terms($recommend->ID, 'categories', array(
            'orderby' => 'name',
            'order' => 'ASC'
          ));

          $author = get_field('blog_page_author', $recommend->ID);
        ?>
          <div class="art-blog__banner border-gradient">
            <div class="art-blog__banner-image">
              <img src="<?= get_field('blog_anons_image', $recommend->ID); ?>" width="1700" height="477" alt="image">
            </div>
            <div class="art-blog__panel">
              <div class="art-blog__tags blog-tags">
                <a href="<?= get_post_type_archive_link('blog'); ?>" class="blog-tag">Artellect-Блог</a>
                <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts" class="blog-tag">Рекомендуем🔥</a>
                <?php if (!empty($categories)): ?>
                  <?php foreach ($categories as $item): ?>
                    <a href="<?= get_post_type_archive_link('blog'); ?>/category/<?= $item->slug; ?>" class="blog-tag"><?= $item->name; ?></a>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <div class="art-blog__banner-icon">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="icon">
              </div>
            </div>
            <div class="art-blog__banner-main">
              <div class="art-blog__banner-title"><?= get_field('blog_main_title', 'options') ?>
                <span class="gradient-text">
                  <?= get_field('blog_main_title_gradient', 'options') ?>
                  <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/img/cursor.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/cursor.png" width="148" height="148" alt="cursor">
                  </picture>
                </span>
              </div>
              <div class="art-blog__banner-link">
                <a href="<?= get_permalink($recommend->ID); ?>" class="button-gradient"><span>Читать статью</span></a>
              </div>
            </div>
            <div class="art-blog__banner-info">
              <div class="art-blog__banner-details">
                <div class="art-blog__banner-detail">
                  <div class="art-blog__banner-detail-photo">
                    <img src="<?= get_field('employee_avatar', $author->ID); ?>" width="43" height="43" alt="<?= get_field('employee_fio', $author->ID); ?>">
                  </div>
                  <div class="art-blog__banner-detail-text"><span>Автор</span><?= get_field('employee_fio', $author->ID); ?></div>
                </div>
                <div class="art-blog__banner-detail">
                  <div class="art-blog__banner-detail-icon">
                    <svg>
                      <use xlink:href="#icon-clock"></use>
                    </svg>
                  </div>
                  <div class="art-blog__banner-detail-text"><?= get_field('blog_main_time', $recommend->ID); ?></div>
                </div>
                <div class="art-blog__banner-detail">
                  <div class="art-blog__banner-detail-icon">
                    <svg>
                      <use xlink:href="#icon-eye"></use>
                    </svg>
                  </div>
                  <div class="art-blog__banner-detail-text"><?= display_post_views_with_text(); ?></div>
                </div>
              </div>
              <?php if (!empty($tags)): ?>
                <div class="art-blog__banner-labels">
                  <?php foreach ($tags as $item): ?>
                    <div class="blog-tag">#<?= $item->name; ?></div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>



        <?php

        $actual = get_field('blog_actual', 'options');
        if (!empty($actual)):
        ?>
          <h2 class="art-actuals__title section-title">Актуальные</h2>
          <div class="art-actuals__slider swiper">
            <div class="swiper-wrapper">

              <?php foreach ($actual as $item):

                $categories = wp_get_post_terms($item['blog_actual_post']->ID, 'categories', array(
                  'orderby' => 'name',
                  'order' => 'ASC'
                ));
              ?>

                <a href="<?= get_permalink($item['blog_actual_post']->ID); ?>" class="art-actuals__slide swiper-slide border-gradient <?php if ($item['blog_actual_direction']) {
                                                                                                                                        echo 'align-bottom';
                                                                                                                                      } ?>">
                  <div class="art-actuals__tag"><?= $categories[0]->name; ?></div>
                  <div class="art-actuals__name">
                    <?= get_the_title($item['blog_actual_post']->ID); ?>
                  </div>
                  <div class="art-actuals__descr"><?= get_the_excerpt($item['blog_actual_post']->ID); ?></div>
                  <div class="art-actuals__image">
                    <img src="<?= get_field('blog_anons_actual_image', $item['blog_actual_post']->ID); ?>" width="406" height="541" alt="blog image">
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>



        <div class="art-actuals__panel slider-panel">
          <div class="art-actuals__pagination slider-pagination"></div>
          <div class="art-actuals__navigation slider-navigation">
            <button type="button" class="art-actuals__prev slider-prev border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-left"></use>
              </svg>
            </button>
            <button type="button" class="art-actuals__next slider-next border-gradient">
              <svg>
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </button>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>
  <?php if (!empty($filters['category']) || !empty($filters['tag'])):

    // Функция для получения заголовка
    function get_filter_title($filter_type, $slugs)
    {
      $terms = [];
      $taxonomy = ($filter_type === 'category') ? 'categories' : 'post_tag';

      $slugs_array = is_array($slugs) ? $slugs : [$slugs];

      foreach ($slugs_array as $slug) {
        $term = get_term_by('slug', $slug, $taxonomy);
        if ($term && !is_wp_error($term)) {
          $terms[] = $term->name;
        }
      }

      if (empty($terms)) {
        return ($filter_type === 'category') ? 'Категория не найдена' : 'Тег не найден';
      }

      $count = count($terms);

      if ($count === 1) {
        $title = ($filter_type === 'category')
          ? 'Категория: ' . $terms[0]
          : 'Статьи на тему: ' . $terms[0];
      } elseif ($count === 2) {
        $title = ($filter_type === 'category')
          ? 'Категории: ' . $terms[0] . ' и ' . $terms[1]
          : 'Статьи по тегам: ' . $terms[0] . ' и ' . $terms[1];
      } else {
        $last = array_pop($terms);
        $title = ($filter_type === 'category')
          ? 'Категории: ' . implode(', ', $terms) . ' и ' . $last
          : 'Статьи по тегам: ' . implode(', ', $terms) . ' и ' . $last;
      }

      return $title;
    }

    // Определяем тип фильтра и получаем заголовок
    if (!empty($filters['category'])) {
      $title = get_filter_title('category', $filters['category']);
      $taxonomy_type = 'categories';
      $taxonomy_slug = $filters['category'];
    } else {
      $title = get_filter_title('tag', $filters['tag']);
      $taxonomy_type = 'post_tag';
      $taxonomy_slug = $filters['tag'];
    }

    // Подготавливаем аргументы для WP_Query
    $args = array(
      'post_type'      => 'blog', // Тип записи blog
      'post_status'    => 'publish',
      'posts_per_page' => -1, // Или нужное количество
      'orderby'        => 'date',
      'order'          => 'DESC',
    );

    // Добавляем таксономию в запрос
    if (!empty($filters['category']) && !in_array('all-posts', $filters['category'])) {
      // Для категорий
      $args['tax_query'] = array(
        array(
          'taxonomy' => 'categories',
          'field'    => 'slug',
          'terms'    => $taxonomy_slug,
        )
      );
    } elseif (!empty($filters['tag'])) {
      // Для тегов
      $args['tax_query'] = array(
        array(
          'taxonomy' => 'post_tag',
          'field'    => 'slug',
          'terms'    => $taxonomy_slug,
        )
      );
    }

    // Выполняем запрос
    $blog_query = new WP_Query($args);
  ?>
    <section class="art-news">
      <div class="art-news__body container">
        <div class="art-news__head">
          <h2 class="art-news__title section-title">
            <?= esc_html($title); ?>
          </h2>

          <?php if ($blog_query->have_posts()): ?>
            <div class="art-news__count">
              Найдено статей: <?= $blog_query->found_posts; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="art-news__content">
          <?php if ($blog_query->have_posts()): ?>
            <?php while ($blog_query->have_posts()): $blog_query->the_post();
              $post_id = get_the_ID();
              $categories = wp_get_post_terms($post_id, 'categories', array(
                'orderby' => 'name',
                'order' => 'ASC'
              ));
            ?>
              <a href="<?= get_permalink($post_id); ?>" class="article-preview border-gradient">
                <div class="article-preview__image">
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?= get_the_post_thumbnail_url($post_id, 'full'); ?>" width="551" height="234" alt="<?= get_the_title(); ?>">
                  <?php else: ?>
                    <img src="<?= get_field('blog_anons_image', $post_id); ?>" width="551" height="234" alt="image">
                  <?php endif; ?>
                </div>
                <div class="article-preview__panel">
                  <?php if (!empty($categories) && !is_wp_error($categories)): ?>
                    <div class="article-preview__tags">
                      <?php foreach ($categories as $category): ?>
                        <button class="art-tag"
                          data-category-url="<?= get_term_link($category); ?>"
                          onclick="event.stopPropagation(); event.preventDefault(); window.location.href = this.dataset.categoryUrl;">
                          <?= esc_html($category->name); ?>
                        </button>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  <div class="article-preview__icon">
                    <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="triangle icon">
                  </div>
                </div>
                <div class="article-preview__info border-gradient">
                  <div class="article-preview__date">
                    <?= get_the_date('d.m.Y', $post_id); ?>
                  </div>
                  <div class="article-preview__name">
                    <?= get_the_title($post_id); ?>
                  </div>
                  <div class="article-preview__descr">
                    <?= get_the_excerpt($post_id); ?>
                  </div>
                </div>
              </a>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else: ?>
            <div class="art-news__empty">
              <a href="<?= get_post_type_archive_link('blog'); ?>" class="button-gradient">
                <span>Вернуться в блог</span>
              </a>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </section>
  <?php endif; ?>

  <?php
  $new_posts = get_field('blog_new_posts', 'options');
  $new_title = get_field('blog_new_title', 'options');

  if (!empty($new_posts) && empty($filters['category']) && empty($filters['tag'])):
  ?>
    <section class="art-news">
      <div class="art-news__body container">
        <div class="art-news__head">
          <h2 class="art-news__title section-title"><?= $new_title; ?></h2>
          <div class="art-news__all">
            <a href="<?= get_post_type_archive_link('blog') ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
          </div>
        </div>
        <div class="art-news__content">
          <?php foreach ($new_posts as $post_item):
            $post_id = $post_item['blog_new_posts_item']->ID;
            $categories = wp_get_post_terms($post_id, 'categories', array(
              'orderby' => 'name',
              'order' => 'ASC'
            ));
          ?>
            <a href="<?= get_permalink($post_id); ?>" class="article-preview border-gradient">
              <div class="article-preview__image">
                <img src="<?= get_field('blog_anons_image', $post_id); ?>" width="551" height="234" alt="image">
              </div>
              <div class="article-preview__panel">
                <?php if (!empty($categories) && !is_wp_error($categories)): ?>
                  <div class="article-preview__tags">
                    <?php foreach ($categories as $category): ?>
                      <button class="art-tag"
                        data-category-url="<?= get_post_type_archive_link('blog') ?>/category/<?= $category->slug; ?>"
                        onclick="event.stopPropagation(); event.preventDefault(); window.location.href = this.dataset.categoryUrl;">
                        <?= $category->name; ?>
                      </button>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <div class="article-preview__icon">
                  <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="triangle icon">
                </div>
              </div>
              <div class="article-preview__info border-gradient">
                <div class="article-preview__date">
                  <?= get_the_date('d.m.Y', $post_id); ?>
                </div>
                <div class="article-preview__name">
                  <?= get_the_title($post_id); ?>
                </div>
                <div class="article-preview__descr">
                  <?= get_the_excerpt($post_id); ?>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
        <div class="art-news__more">
          <a href="<?= get_post_type_archive_link('blog') ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
        </div>
      </div>
    </section>

  <?php endif; ?>

  <?php
  $advertising_image = get_field('blog_advertising_image', 'options');
  $advertising_href = get_field('blog_advertising_href', 'options');

  if (empty($filters['category']) && empty($filters['tag'])):
  ?>
    <section class="art-ad">
      <?php if ($advertising_image): ?>
        <a href="<?= $advertising_href; ?>">
          <img src="<?= $advertising_image; ?>" alt="advertising">
        </a>
      <?php else: ?>
        <div class="art-ad__body container">
          <h2 class="art-ad__title section-title">Здесь могла бы быть ваша реклама</h2>
          <div class="art-ad__subtitle">А пока это просто контейнер</div>
          <div class="art-ad__image">
            <img src="<?= get_template_directory_uri(); ?>/img/blog/ad.gif" width="322" height="282" alt="gif">
          </div>
        </div>
      <?php endif; ?>
    </section>
  <?php endif; ?>

  <?php
  $popular_posts = get_field('blog_popular_posts', 'options');
  $popular_title = get_field('blog_popular_title', 'options');

  if (!empty($popular_posts) && empty($filters['category']) && empty($filters['tag'])):
  ?>
    <section class="art-news">
      <div class="art-news__body container">
        <div class="art-news__head">
          <h2 class="art-news__title section-title"><?= $popular_title; ?></h2>
          <div class="art-news__all">
            <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
          </div>
        </div>
        <div class="art-news__content">
          <?php foreach ($popular_posts as $post_item):
            $post_id = $post_item['blog_popular_posts_item']->ID;
            $categories = wp_get_post_terms($post_id, 'categories', array(
              'orderby' => 'name',
              'order' => 'ASC'
            ));
          ?>
            <a href="<?= get_permalink($post_id); ?>" class="article-preview border-gradient">
              <div class="article-preview__image">
                <img src="<?= get_field('blog_anons_image', $post_id); ?>" width="551" height="234" alt="image">
              </div>
              <div class="article-preview__panel">
                <?php if (!empty($categories) && !is_wp_error($categories)): ?>
                  <div class="article-preview__tags">
                    <?php foreach ($categories as $category): ?>
                      <button class="art-tag"
                        data-category-url="<?= get_post_type_archive_link('blog') ?>/category/<?= $category->slug; ?>"
                        onclick="event.stopPropagation(); event.preventDefault(); window.location.href = this.dataset.categoryUrl;">
                        <?= $category->name; ?>
                      </button>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <div class="article-preview__icon">
                  <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="triangle icon">
                </div>
              </div>
              <div class="article-preview__info border-gradient">
                <div class="article-preview__date">
                  <?= get_the_date('d.m.Y', $post_id); ?>
                </div>
                <div class="article-preview__name">
                  <?= get_the_title($post_id); ?>
                </div>
                <div class="article-preview__descr">
                  <?= get_the_excerpt($post_id); ?>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
        <div class="art-news__more">
          <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php
  $categories = get_terms(array(
    'taxonomy' => 'categories',
    'hide_empty' => false,
  ));
  $tag = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => false,
  ));

  ?>
  <section class="blog-filters">
    <div class="blog-filters__body container">
      <?php if (!empty($tag)): ?>
        <h2 class="blog-filters__title section-title">Популярные теги</h2>
        <div class="blog-filters__wrapper">
          <div class="blog-filters__items">
            <?php foreach ($tag as $item):
              // Проверяем, активен ли текущий тег
              $is_active = !empty($filters['tag']) &&
                ((is_array($filters['tag']) && in_array($item->slug, $filters['tag'])) ||
                  (!is_array($filters['tag']) && $filters['tag'] === $item->slug));
              $active_class = $is_active ? ' active' : '';
            ?>
              <a href="<?= get_post_type_archive_link('blog'); ?>/tag/<?= $item->slug; ?>"
                class="border-gradient<?= $active_class; ?>">
                <span>#<?= $item->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($categories)): ?>
        <h2 class="blog-filters__title section-title">Категории</h2>
        <div class="blog-filters__wrapper">
          <div class="blog-filters__items">
            <?php
            // Проверяем активность ссылки "Все статьи"
            $is_all_active = in_array('all-posts', $filters['category']);
            $all_active_class = $is_all_active ? ' active' : '';
            ?>
            <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts"
              class="border-gradient<?= $all_active_class; ?>">
              <span>Все статьи</span>
            </a>

            <?php foreach ($categories as $item):
              // Проверяем, активна ли текущая категория
              $is_active = !empty($filters['category']) &&
                ((is_array($filters['category']) && in_array($item->slug, $filters['category'])) ||
                  (!is_array($filters['category']) && $filters['category'] === $item->slug));
              $active_class = $is_active ? ' active' : '';
            ?>
              <a href="<?= get_post_type_archive_link('blog'); ?>/category/<?= $item->slug; ?>"
                class="border-gradient<?= $active_class; ?>">
                <span><?= $item->name; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <section class="art-subscribe">
    <div class="art-subscribe__body container">
      <h2 class="art-subscribe__title section-title">Подписывайтесь на наши социальные сети</h2>
      <div class="art-subscribe__subtitle">Делимся опытом и рассказываем о маркетинге и сквозной аналитике!</div>
      <div class="art-subscribe__socials">
        <a href="<?= get_field('site_telegram', 'options') ?>" target="_blank" class="art-subscribe__social border-gradient" aria-label="telegram">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/icons/telegram.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/icons/telegram.png" width="48" height="48" alt="Telegram">
          </picture>
        </a>
        <a href="<?= get_field('site_vk', 'options') ?>" target="_blank" class="art-subscribe__social border-gradient" aria-label="vk">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/icons/vk.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/icons/vk.png" width="48" height="48" alt="Telegram">
          </picture>
        </a>
        <a href="<?= get_field('site_youtube', 'options') ?>" target="_blank" class="art-subscribe__social border-gradient" aria-label="youtube">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/img/icons/youtube.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/icons/youtube.png" width="48" height="48" alt="Telegram">
          </picture>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/tg-banner'); ?>
</main>

<?php get_footer(); ?>