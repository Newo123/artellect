<?php
get_header();
?>

<main>

  <section class="art-article">
    <div class="art-article__body container">
      <div class="art-article__go-back">
        <a href="<?= get_post_type_archive_link('blog'); ?>" class="border-gradient">
          <svg>
            <use xlink:href="#icon-arrow-left"></use>
          </svg>
          Назад к блогу
        </a>
      </div>
      <div class="art-article__banner border-gradient">
        <div class="art-article__banner-top">
          <div class="art-article__banner-date"><?= get_the_date('d.m.Y'); ?></div>
          <div class="art-article__banner-tags">
            <a href="<?= get_post_type_archive_link('blog'); ?>" class="blog-tag">Artellect-Блог</a>
            <?php

            $categories = wp_get_post_terms($post->ID, 'categories', array(
              'orderby' => 'name',
              'order' => 'ASC'
            ));
            ?>
            <?php if (!empty($categories)): ?>
              <?php foreach ($categories as $item): ?>
                <a href="<?= get_post_type_archive_link('blog'); ?>/category/<?= $item->slug; ?>" class="blog-tag"><?= $item->name; ?></a>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="art-article__banner-icon">
            <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="icon">
          </div>
        </div>
        <div class="art-article__banner-main">
          <h1 class="art-article__banner-name rainbow-text">
            <?= get_the_title(); ?>
          </h1>

          <div class="breadcrumbs">
            <span class="breadcrumbs__separator">//</span>
            <a href="<?= home_url(); ?>" class="breadcrumbs__link">Главная</a>
            <span class="breadcrumbs__separator">/</span>
            <?php if (is_singular('blog')): ?>
              <a href="<?= get_post_type_archive_link('blog'); ?>" class="breadcrumbs__link">Блог</a>
              <span class="breadcrumbs__separator">/</span>
              <span class="breadcrumbs__current"><?= get_the_title(); ?></span>
            <?php else: ?>
              <span class="breadcrumbs__current">Блог</span>
            <?php endif; ?>
          </div>

        </div>
        <div class="art-article__banner-footer">
          <div class="art-blog__banner-details">
            <div class="art-blog__banner-detail">
              <div class="art-blog__banner-detail-icon">
                <svg>
                  <use xlink:href="#icon-clock"></use>
                </svg>
              </div>
              <div class="art-blog__banner-detail-text"><?= get_field('blog_main_time', $post->ID); ?></div>
            </div>
            <div class="art-blog__banner-detail">
              <div class="art-blog__banner-detail-icon">
                <svg>
                  <use xlink:href="#icon-eye"></use>
                </svg>
              </div>
              <div class="art-blog__banner-detail-text">
                <?= display_post_views_with_text(); ?>
              </div>
            </div>
          </div>
          <div class="art-article__banner-buttons">
            <a href="#new-comment" class="art-article__banner-comment">
              <svg>
                <use xlink:href="#icon-write"></use>
              </svg>
              <span>Оставить комментарий</span>
            </a>
            <div class="art-article__banner-share">
              <p>
                <svg>
                  <use xlink:href="#icon-share"></use>
                </svg>
                Поделиться в:
              </p>
              <a href="https://t.me/share/url?url=<?= get_permalink($post->ID); ?>" target="_blank" class="art-article__banner-soc" aria-label="telegram">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/telegram.svg" width="24" height="24" alt="telegram">
              </a>
              <a href="https://vk.com/share.php?url=<?= get_permalink($post->ID); ?>&noparse=true" target="_blank" class="art-article__banner-soc" aria-label="vk">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/vk.svg" width="24" height="24" alt="vk">
              </a>
              <a href="https://wa.me/?text=<?= get_permalink($post->ID); ?>" target="_blank" class="art-article__banner-soc" aria-label="whatsapp">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/whatsapp.svg" width="24" height="24" alt="whatsapp">
              </a>
            </div>
          </div>
        </div>
        <div class="art-article__banner-image">
          <img src="<?= get_field('blog_page_image', $post->ID); ?>" width="1700" height="577" alt="<?= get_the_title(); ?>">
        </div>
      </div>
      <div class="art-article__content">
        <div class="art-article__main">
          <div class="art-article__nav border-gradient">
            <div class="art-article__nav-title">В статье рассказывается:</div>
            <?php
            $meta = get_field('blog_page_about', $post->ID);
            if (!empty($meta)):
            ?>
              <ol>
                <?php foreach ($meta as $item): ?>
                  <li class="border-gradient"><a href="#<?= $item['blog_page_about_tag']; ?>"><?= $item['blog_page_about_text']; ?></a></li>
                <?php endforeach; ?>
              </ol>
            <?php endif; ?>
            <?php
            $file = get_field('blog_page_file', $post->ID);
            if ($file):
            ?>
              <div class="art-article__download border-gradient">
                <div class="art-article__download-icon">
                  <img src="<?= get_template_directory_uri(); ?>/img/icons/pdf.svg" width="48" height="48" alt="download icon">
                </div>
                <p><?= $file['title']; ?>
                  <a href="<?= $file['url']; ?>" target="_blank">Скачать бесплатно</a>
                </p>
              </div>
            <?php endif; ?>
          </div>
          <?php
          $content = get_field('blog_page_content', $post->ID);

          if ($content):
          ?>
            <div class="art-article__text">
              <?= $content; ?>
            </div>
          <?php endif; ?>

          <?php
          $expert_name = get_field('blog_page_expert_name', $post->ID);
          $expert_job = get_field('blog_page_expert_job', $post->ID);
          $expert_company = get_field('blog_page_expert_company', $post->ID);
          $expert_text = get_field('blog_page_expert_text', $post->ID);
          $expert_image = get_field('blog_page_expert_image', $post->ID);

          if ($expert_text):
          ?>
            <div class="art-article__expert border-gradient">
              <div class="art-article__expert-title">Мнение эксперта</div>
              <div class="art-article__expert-name"><?= $expert_name; ?><?php if ($expert_job) {
                                                                          echo ', ' . $expert_job;
                                                                        } ?><?php if ($expert_company) {
                                                                              echo ', ' . $expert_company;
                                                                            } ?></div>
              <div class="art-article__expert-qoute">
                <div class="art-article__expert-photo">
                  <img src="<?= $expert_image; ?>" width="240" height="240" alt="<?= $expert_name; ?>">
                </div>
                <div class="art-article__expert-text">
                  <?= $expert_text; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>


          <div class="art-article__banner-share">
            <p>
              <svg>
                <use xlink:href="#icon-share"></use>
              </svg>
              Поделиться в:
            </p>
            <a href="https://t.me/share/url?url=<?= get_permalink($post->ID); ?>" target="_blank" class="art-article__banner-soc" aria-label="telegram">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/telegram.svg" width="24" height="24" alt="telegram">
            </a>
            <a href="https://vk.com/share.php?url=<?= get_permalink($post->ID); ?>&noparse=true" target="_blank" class="art-article__banner-soc" aria-label="vk">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/vk.svg" width="24" height="24" alt="vk">
            </a>
            <a href="https://wa.me/?text=<?= get_permalink($post->ID); ?>" target="_blank" class="art-article__banner-soc" aria-label="whatsapp">
              <img src="<?= get_template_directory_uri(); ?>/img/icons/whatsapp.svg" width="24" height="24" alt="whatsapp">
            </a>
          </div>
          <?php
          // Получаем теги текущего поста
          $current_post_tags = wp_get_post_terms(get_the_ID(), 'post_tag', array(
            'fields' => 'slugs' // Получаем только slugs для сравнения
          ));

          // Получаем все теги
          $all_tags = get_terms(array(
            'taxonomy' => 'post_tag',
            'hide_empty' => false,
            'orderby' => 'name',
            'order' => 'ASC'
          ));

          // Проверяем, находимся ли мы на странице архива тега
          $current_tag_slug = get_query_var('tag');
          $is_tag_archive = is_tag();

          if (!empty($all_tags)):
          ?>

            <div class="blog-filters">
              <div class="blog-filters__body">
                <h2 class="blog-filters__title section-title">Облако тегов</h2>
                <div class="blog-filters__wrapper">
                  <div class="blog-filters__items">
                    <?php foreach ($all_tags as $tag):
                      // Проверяем активность тега
                      $is_active = false;

                      if ($is_tag_archive) {
                        // На странице архива тега
                        $is_active = ($current_tag_slug === $tag->slug);
                      } elseif (is_single()) {
                        // На странице поста
                        $is_active = in_array($tag->slug, $current_post_tags);
                      }

                      // Формируем классы
                      $classes = 'border-gradient';
                      if ($is_active) {
                        $classes .= ' active';
                      }
                    ?>
                      <a href="<?= get_term_link($tag); ?>" class="<?= esc_attr($classes); ?>">
                        <span>#<?= esc_html($tag->name); ?></span>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endif; ?>
          <div class="art-article__reviews">
            <h2 class="art-article__reviews-title">Комментарии</h2>

            <?php
            // Получаем первые 2 комментария
            $comments = get_comments(array(
              'post_id' => get_the_ID(),
              'status' => 'approve',
              'order' => 'DESC',
              'orderby' => 'comment_date',
              'number' => 2
            ));

            $total_comments = get_comments_number(get_the_ID());
            $remaining_comments = $total_comments - count($comments);
            ?>

            <div class="art-article__reviews-wrapper" id="commentsContainer">
              <?php if ($comments) : ?>
                <?php foreach ($comments as $comment) : ?>
                  <div class="art-article__review border-gradient">
                    <div class="art-article__review-info">
                      <div class="art-article__review-author">
                        <?php echo esc_html($comment->comment_author); ?>
                      </div>
                      <div class="art-article__review-date">
                        <?php echo get_simple_date($comment->comment_date); ?>
                      </div>
                    </div>
                    <div class="art-article__review-text">
                      <?php echo wpautop(esc_html($comment->comment_content)); ?>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else : ?>
                <div class="art-article__reviews-empty">
                  <p>Пока нет комментариев. Будьте первым!</p>
                </div>
              <?php endif; ?>
            </div>

            <?php if ($total_comments > count($comments)) : ?>
              <div class="art-article__reviews-more">
                <button type="button"
                  class="button-gradient"
                  id="loadMoreComments"
                  data-post-id="<?php echo get_the_ID(); ?>"
                  data-offset="2"
                  data-per-page="6"
                  data-url="<?php echo get_template_directory_uri(); ?>/callback/comment.php">
                  <span>Загрузить ещё (<?php echo min(6, $remaining_comments); ?>)</span>
                  <span class="loading-spinner" style="display:none;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="2" stroke-dasharray="44" stroke-linecap="round" transform="rotate(-90 8 8)">
                        <animateTransform attributeName="transform" type="rotate" from="0 8 8" to="360 8 8" dur="1s" repeatCount="indefinite" />
                      </circle>
                    </svg>
                  </span>
                </button>
              </div>
            <?php endif; ?>
          </div>
          <div class="new-comment" id="new-comment">
            <div class="new-comment__title">Оставить комментарий</div>

            <form class="new-comment__form"
              method="POST"
              data-send="<?= get_template_directory_uri(); ?>/callback/comment.php"
              data-hash="<?= get_template_directory_uri(); ?>/callback/get_hash.php">
              <div class="new-comment__form-area border-gradient">
                <input type="text" required placeholder="Введите ваше имя*" required name="name">
              </div>
              <div class="new-comment__form-area border-gradient">
                <textarea maxlength="240" class="symbols-counter" required
                  placeholder="Оставить комментарий" required name="comment"></textarea>
                <div class="new-comment__form-symbols">Осталось <span class="symbols-value">240</span>
                  символов</div>
              </div>
              <input type="hidden" name="post_id" value="<?= $post->ID; ?>">
              <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('blog_comment_action'); ?>">
              <div class="new-comment__form-area">
                <button type="submit" class="button-gradient"><span>Отправить</span></button>
                <div class="new-comment__form-captcha"></div>
              </div>
            </form>

          </div>
        </div>
        <aside class="art-article__aside">
          <div class="art-article__about border-gradient">
            <?php
            $author = get_field('blog_page_author', $post->ID);
            if ($author):
              $author_image = get_field('employee_avatar', $author->ID);
              $author_name = get_field('employee_fio', $author->ID);
              $author_job = get_field('employee_job', $author->ID);
            ?>
              <div class="art-article__aside-title">Статью подготовил</div>
              <div class="art-article__author">
                <?php if ($author_image): ?>
                  <div class="art-article__author-photo">
                    <img src="<?= $author_image; ?>" width="80" height="80" alt="photo">
                  </div>
                <?php endif; ?>
                <div class="art-article__author-info">
                  <?php if ($author_name): ?>
                    <div class="art-article__author-name"><?= $author_name; ?></div>
                  <?php endif; ?>
                  <?php if ($author_job): ?>
                    <div class="art-article__author-role"><?= $author_job; ?></div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php
            $categories = get_terms(array(
              'taxonomy' => 'categories',
              'hide_empty' => false,
              'orderby' => 'name',
              'order' => 'ASC'
            ));
            if (!empty($categories) && !is_wp_error($categories)):
            ?>
              <div class="art-article__aside-title">Разделы блога</div>
              <ul class="art-article__chapters">
                <?php foreach ($categories as $category):
                  if ($category->count == 0) continue;
                ?>
                  <li>
                    <span class="border-gradient"><?php echo esc_html($category->count); ?></span>
                    <a href="<?php echo esc_url(get_term_link($category)); ?>" class="border-gradient">
                      <?php echo esc_html($category->name); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </aside>
      </div>
    </div>

  </section>

  <?php
  $advertising_image = get_field('blog_page_banner_image', $post->ID);
  $advertising_href = get_field('blog_page_banner_href', $post->ID);
  ?>
  <section class="art-ad">
    <?php if ($advertising_image): ?>
      <a href="<?= $advertising_href; ?>" class="art-ad__advertising">
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


  <?php


  $current_categories = wp_get_post_terms($post->ID, 'categories', array('fields' => 'ids'));

  if (!empty($current_categories) && !is_wp_error($current_categories)) :

    $related_posts = new WP_Query(array(
      'post_type' => 'blog',
      'posts_per_page' => -1, // Количество постов для вывода
      'post__not_in' => array($post->ID), // Исключаем текущий пост
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field' => 'term_id',
          'terms' => $current_categories,
          'operator' => 'IN'
        )
      ),
      'orderby' => 'date',
      'order' => 'DESC'
    ));

    if ($related_posts->have_posts()):
  ?>

      <section class="more-articles">
        <div class="more-articles__body container">
          <div class="more-articles__head">
            <h2 class="more-articles__title section-title">Другие подходящие по категории статьи</h2>
            <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
          </div>
          <div class="more-articles__slider swiper full-width">
            <div class="more-articles__slider-wrapper swiper-wrapper">
              <?php foreach ($related_posts->posts as $post):
                setup_postdata($post);
                $categories = wp_get_post_terms($post->ID, 'categories', array(
                  'orderby' => 'name',
                  'order' => 'ASC'
                ));
                $image = get_field('blog_anons_image', $post->ID);
              ?>
                <a href="<?= the_permalink(); ?>" class="swiper-slide article-preview border-gradient">
                  <?php if ($image): ?>
                    <div class="article-preview__image">
                      <img src="<?= $image; ?>" width="551" height="234" alt="image">
                    </div>
                  <?php endif; ?>
                  <div class="article-preview__panel">
                    <?php if (!empty($categories)): ?>
                      <div class="article-preview__tags">
                        <?php foreach ($categories as $item): ?>
                          <a href="<?= get_post_type_archive_link('blog'); ?>/category/<?= $item->slug; ?>" class="art-tag"><?= $item->name; ?></a>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                    <div class="article-preview__icon">
                      <img src="<?= get_template_directory_uri(); ?>/img/icons/dots-triangle.svg" width="24" height="22" alt="triangle icon">
                    </div>
                  </div>
                  <div class="article-preview__info border-gradient">
                    <div class="article-preview__date"><?= get_the_date('d.m.Y', $post->ID); ?></div>
                    <div class="article-preview__name"><?= get_the_title($post->ID); ?></div>
                    <div class="article-preview__descr"><?= get_the_excerpt($post->ID); ?></div>
                  </div>
                </a>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="more-articles__slider-panel slider-panel">
            <div class="more-articles__slider-pagination slider-pagination"></div>
            <div class="more-articles__slider-navigation slider-navigation">
              <button class="more-articles__slider-prev slider-prev border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button class="more-articles__slider-next slider-next border-gradient">
                <svg>
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
          <div class="more-articles__btn">
            <a href="<?= get_post_type_archive_link('blog'); ?>/category/all-posts" class="button-gradient"><span>Все статьи</span></a>
          </div>
        </div>
      </section>
  <?php endif;
  endif; ?>
</main>

<?php get_footer(); ?>