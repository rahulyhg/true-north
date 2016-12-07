<?php /* Template Name: Project Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php 
      $images = get_field('project_gallery');

      if( $images ): ?>
        <div class="project carousel" data-flickity='{"setGallerySize": false, "wrapAround": true, "lazyLoad": true}'>
          <?php foreach( $images as $image ): ?>
            <div class="carousel-cell">
              <a href="<?php echo $image['url']; ?>" class="fresco">
                <img data-flickity-lazyload="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    <div style="padding-top: 30px;">
      <?php the_field('project_text') ?>
    </div>
  </div><!-- .post -->
</div><!-- .content -->
