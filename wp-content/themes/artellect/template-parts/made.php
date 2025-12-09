 <?php

  $block = get_query_var('block_data');
  $block_number = get_query_var('block_number');

  $title = $block['case_blocks_layout_made_title'];
  $subtitle = $block['case_blocks_layout_made_subtitle'];
  $description = $block['case_blocks_layout_made_description'];
  $description_repeater = $block['case_blocks_layout_made_description_repeater'];
  $text = $block['case_blocks_layout_made_text'];
  $analityc_title = $block['case_blocks_layout_made_analityc_title'];
  $analityc_steps = $block['case_blocks_layout_made_analityc_steps'];
  $analityc_images = $block['case_blocks_layout_made_analityc_images'];
  $analityc_text = $block['case_blocks_layout_made_analityc_text'];
  $analityc_repeater = $block['case_blocks_layout_made_analityc_repeater'];
  $analityc_text_2 = $block['case_blocks_layout_made_analityc_text_2'];

  ?>

 <section class="em-stages" id="<?= $block['acf_fc_layout']; ?>">
   <div class="em-stages__body container em-padding">
     <?php if ($title): ?>
       <h2 class="em-stages__title em-title">
         <span class="em-num"><?= $block_number; ?></span><?= $title; ?>
       </h2>
     <?php endif; ?>
     <div class="em-stage">
       <?php if ($subtitle): ?>
         <div class="em-stage__name em-name"><span>-</span><?= $subtitle; ?></div>
       <?php endif; ?>
       <div class="em-stage__cards">
         <?php if ($description): ?>
           <div class="em-stage__card border-gradient border-rainbow">
             <?= $description; ?>
           </div>
         <?php endif; ?>
         <?php if (!empty($description_repeater)): ?>
           <?php foreach ($description_repeater as $item): ?>
             <div class="em-stage__card border-gradient">
               <div class="em-stage__card-val gradient-text"><?= $item['case_blocks_layout_made_description_repeater_title']; ?></div>
               <div class="em-stage__card-text">
                 <?= $item['case_blocks_layout_made_description_repeater_description']; ?>
               </div>
             </div>
           <?php endforeach; ?>
         <?php endif; ?>
       </div>

       <?php if ($text): ?>
         <div class="em-stage__subtitle em-subtitle">
           <?= $text; ?>
         </div>
       <?php endif; ?>
     </div>
     <div class="em-analysis">
       <?php if ($analityc_title): ?>
         <div class="em-stage__name em-name"><span>-</span><?= $analityc_title; ?></div>
       <?php endif; ?>
       <div class="em-analysis__content">
         <?php if (!empty($analityc_steps)): ?>
           <div class="em-analysis__info border-gradient border-rainbow">
             <?php foreach ($analityc_steps as $item): ?>
               <div class="em-analysis__info-item">
                 <?= $item['case_blocks_layout_made_analityc_steps_content']; ?>
               </div>
             <?php endforeach; ?>
           </div>
         <?php endif; ?>
         <?php if ($analityc_images): ?>
           <div class="em-analysis__preview">
             <div class="em-analysis__slider swiper  border-gradient">
               <div class="swiper-wrapper">
                 <?php foreach ($analityc_images as $item): ?>
                   <div class="em-analysis__slide swiper-slide">
                     <a data-fancybox="analysis-gallery" class="em-analysis__slide-image"
                       href="<?= $item['case_blocks_layout_made_analityc_images_item']; ?>">
                       <img src="<?= $item['case_blocks_layout_made_analityc_images_item']; ?>" width="688" height="485" alt="image">
                     </a>
                   </div>
                 <?php endforeach; ?>
               </div>
               <div class="em-analysis__slide-fullscreen border-gradient">
                 <img src="<?= get_template_directory_uri(); ?>/img/icons/fullscreen.svg" width="24" height="24" alt="fullscreen">
               </div>
             </div>
             <div class="em-analysis__slider-panel slider-panel">
               <div class="em-analysis__slider-pagination slider-pagination"></div>
               <div class="em-analysis__slider-navigation slider-navigation">
                 <button class="em-analysis__slider-prev slider-prev border-gradient">
                   <svg>
                     <use xlink:href="#icon-arrow-left"></use>
                   </svg>
                 </button>
                 <button class="em-analysis__slider-next slider-next border-gradient">
                   <svg>
                     <use xlink:href="#icon-arrow-right"></use>
                   </svg>
                 </button>
               </div>
             </div>
           </div>
         <?php endif; ?>

       </div>

       <?php if ($analityc_text): ?>
         <div class="em-analysis__subtitle em-subtitle">
           <?= $analityc_text; ?>
         </div>
       <?php endif; ?>
       <?php if ($analityc_repeater): ?>
         <div class="em-analysis__cards">
           <?php foreach ($analityc_repeater as $index => $item): ?>
             <div class="em-analysis__card border-gradient">
               <div class="em-analysis__card-num gradient-text"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
               <div class="em-analysis__card-info">
                 <div class="em-analysis__card-name"><?= $item['case_blocks_layout_made_analityc_repeater_title']; ?></div>
                 <div class="em-analysis__card-text"><?= $item['case_blocks_layout_made_analityc_repeater_text']; ?>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>
         </div>
       <?php endif; ?>

       <?php if ($analityc_text_2): ?>
         <div class="em-analysis__subtitle em-subtitle"><?= $analityc_text_2; ?></div>
       <?php endif; ?>
     </div>
   </div>
 </section>