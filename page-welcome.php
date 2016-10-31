<?php /* Template Name: Welcome Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <div class="wpc-loading-spinner">
      <span class="timestamp">
        <?php
          date_default_timezone_set('America/New_York');
          echo date('h:ia', time());
        ?> //
      </span>
    </div>
    <?php echo do_shortcode('[wpc-weather id="55"]'); ?> 
  </div><!-- .post -->
</div><!-- .content -->
