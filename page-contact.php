<?php /* Template Name: Contact Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php the_field('body_text') ?>
  </div><!-- .post -->
</div><!-- .content -->
<div class="contact-form">
  <?php echo do_shortcode('[contact-form-7 id="66" title="Contact form 1"]'); ?>
</div>