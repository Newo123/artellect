<?php

$args = array(
  'post_type' => 'reviews',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC'
);

$reviews_query = new WP_Query($args);
$reviews = $reviews_query->get_posts();
?>
<?php if (!empty($reviews)) : ?>
  <section class="art-testimonials">
    <div class="art-testimonials__body container">
      <h2 class="art-testimonials__title section-title">Отзывы о digital-агентстве Artellect</h2>
      <div class="art-testimonials__content">
        <div class="art-testimonials__slider swiper">
          <div class="swiper-wrapper">
            <?php
            foreach ($reviews as $item):
              setup_postdata($item);
              $name = get_field('reviews_fio', $item->ID);
              $job = get_field('reviews_job', $item->ID);
              $text = get_field('reviews_text', $item->ID);
              $image = get_field('reviews_image', $item->ID);
            ?>
              <div class="art-testimonials__slide swiper-slide">
                <?php if ($image): ?>
                  <div class="art-testimonials__image">
                    <a data-fancybox="testimonial-gallery" href="<?= $image; ?>">
                      <img src="<?= $image; ?>" width="231" height="300" alt="сертификат">
                    </a>
                  </div>
                <?php endif; ?>
                <div class="art-testimonials__info">
                  <?php if ($name): ?>
                    <div class="art-testimonials__name"><?= $name; ?></div>
                  <?php endif; ?>
                  <?php if ($job): ?>
                    <div class="art-testimonials__role"><?= $job; ?></div>
                  <?php endif; ?>
                  <?php if ($text): ?>
                    <div class="art-testimonials__text"><?= $text; ?></div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="art-testimonials__panel">
          <div class="art-testimonials__navigation">
            <button class="art-testimonials__slider-prev slider-prev border-gradient">
              <svg>
                <use xlink:href="#icon-chevron"></use>
              </svg>
            </button>
            <button class="art-testimonials__slider-next slider-next border-gradient">
              <svg>
                <use xlink:href="#icon-chevron"></use>
              </svg>
            </button>
          </div>
          <div class="art-testimonials__fraction"></div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>