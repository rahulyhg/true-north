<?php /* Template Name: Home Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?> style="margin-top: 250px">
    <?php the_field('home_text') ?>
  </div><!-- .post -->
</div><!-- .content -->
