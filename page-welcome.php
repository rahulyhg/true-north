<?php /* Template Name: Welcome Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php echo do_shortcode('[wpc-weather id="55"]'); ?> 
    <div class="entry-content">
      <?php the_content() ?>
    </div>
  </div><!-- .post -->
</div><!-- .content -->
