<?php
$directions = get_terms(array(
  'taxonomy' => 'direction',
  'hide_empty' => false,
  'order' => 'DESC'
));

if ($directions && !is_wp_error($directions)):
?>

  <section class="services-info">
    <div class="container">
      <h1 class="title text-center">Услуги</h1>
      <p class="text-small text-center">[_выберите услугу]</p>

      <div class="services-grid">

        <?php foreach ($directions as $index => $direction):
          $services_args = array(
            'post_type' => 'services',
            'posts_per_page' => -1,
            'post_status'    => array('publish', 'pending'),
            'tax_query' => array(
              array(
                'taxonomy' => 'direction',
                'field' => 'term_id',
                'terms' => $direction->term_id
              )
            ),
            'orderby' => 'title',
            'order' => 'ASC'
          );

          $services = new WP_Query($services_args);

          $item_class = match (true) {
            $index === 0 || $index === 1 => 'grid-item-large',
            $index === 3 => 'tablet-double',
            default => ''
          };
        ?>
          <div class="services-grid-item <?= esc_attr($item_class); ?>">
            <div class="grid-item-header"><?= esc_html($direction->name); ?></div>

            <?php if ($services->have_posts()) : ?>
              <?php

              foreach ($services->posts as $post):
                setup_postdata($post);
              ?>
                <?php if ($post->post_status != 'pending') {
                  echo '<a href="' . get_permalink() . '" class="grid-item-link">';
                } else {
                  echo '<div class="grid-item-link">';
                } ?>
                <span class="grid-item-link-text"><?php the_title(); ?></span>
                <div class="grid-item-link-arrows">
                  <svg class="arrow" width="15" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L13 13L1 25" stroke="#F74E1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <svg class="arrow-hover" width="15" height="26" viewBox="0 0 14 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L13 13L1 25" stroke="#F74E1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <?php if ($post->post_status != 'pending') {
                  echo '</a>';
                } else {
                  echo '</div>';
                } ?>
                </a>
              <?php
              endforeach;
              wp_reset_postdata();
              ?>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <img loading="lazy" class="services-absolute-bg" src="<?= get_template_directory_uri() ?>/serv-images/serv-bg-sv.svg" alt="services bg svg">
      </div>
    </div>
  </section>
<?php endif; ?>