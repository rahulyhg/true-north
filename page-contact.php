<?php /* Template Name: Contact Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php the_field('body_text') ?>
  </div><!-- .post -->
</div><!-- .content -->
<div class="contact-form">
  <form action="/webformmailer.php" method="post">
    <input type="hidden" name="subject" value="True North Contact Form" />
    <input type="hidden" name="redirect" value="#" />
    Name:  <input type="text" name="name" />
    Email:  <input type="text" name="email" />
    Comments:  <textarea name="comments">
    Type comments here.</textarea>
    <input type="submit" name="submit" value="submit"/>
    <input type="hidden" name="form_order" value="alpha"/>
    <input type="hidden" name="form_delivery" value="default"/>
    <input type="hidden" name="form_format" value="html"/>
  </form>
</div>