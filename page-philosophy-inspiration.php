<?php /* Template Name: Philosophy & Inspiration Page */ ?>

<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <!-- <h2 class="entry-title"><?php the_title() ?></h2> -->
      <?php the_field('philosophy_text') ?>
      <?php 
        $images = get_field('inspiration_gallery');

        if( $images ): ?>
          <div class="inspiration carousel" data-flickity='{"setGallerySize": false, "wrapAround": true, "lazyLoad": true}'>
            <?php foreach( $images as $image ): ?>
              <div class="carousel-cell">
                <a href="<?php echo $image['url']; ?>">
                  <img data-flickity-lazyload="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
  </div><!-- .post -->
</div><!-- .content -->
