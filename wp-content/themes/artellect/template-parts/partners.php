<?php
$partners = get_field('partners');


?>

<?php if (!empty($partners)): ?>
  <section class="art-clients">
    <div class="art-clients__body container em-padding">
      <h2 class="art-clients__title section-title">Нам доверяют</h2>

      <div class="art-clients__slider swiper full-width">
        <div class="swiper-wrapper">
          <?php foreach ($partners as $item): ?>
            <div class="art-clients__slide swiper-slide border-gradient">
              <div class="art-clients__logo">
                <img src="<?= $item['partners_image']; ?>" width="96" height="128" alt="<?= $item['partners_name']; ?>">
              </div>
              <div class="art-clients__name border-gradient"><?= $item['partners_name']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>