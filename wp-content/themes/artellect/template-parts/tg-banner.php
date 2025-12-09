<?php ?>


<section class="art-support">
  <div class="art-support__body container">
    <div class="atropos my-atropos">
      <div class="atropos-scale">
        <div class="atropos-rotate">
          <a href="<?= get_field('site_tg', 'options')['url']; ?>" class="atropos-inner art-support__card" target="_blank">
            <h2 class="art-support__title" data-atropos-offset="4">
              <span class="orange-outline" data-atropos-offset="1">РОБОголик</span> на службе 24/7
            </h2>
            <div class="art-support__subtitle" data-atropos-offset="3">
              Задайте свой вопрос в <span>Telegram</span>
            </div>
            <div class="art-support__link" data-atropos-offset="2">
              <span target="_blank" aria-label="Telegram">
                <svg>
                  <use xlink:href="#icon-telegram"></use>
                </svg>
              </span>
            </div>
            <div class="art-support__image" data-atropos-offset="8">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/support.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/support.png" width="600" height="583" alt="support">
              </picture>
            </div>
            <div class="art-support__bg" data-atropos-offset="-5">
              <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/img/support-bg.webp" type="image/webp"><img src="<?= get_template_directory_uri(); ?>/img/support-bg.png" width="821" height="385" alt="support bg">
              </picture>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>