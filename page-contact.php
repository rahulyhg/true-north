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
    <input type="hidden" name="redirect" value="/contact?sent=true" />
    <label>Name</label>  <input type="text" name="Name" />
    <label>Email</label>  <input type="text" name="Email" />
    <label>Current City</label>  <input type="text" name="CurrentCity" />
    <label>Desired Unit(s)</label>  <input type="text" name="DesiredUnits" />
    <label>Desired Move-in</label>  <input type="text" name="DesiredMovein" />
    <label>Desired Lease Term</label>  <input type="text" name="DesiredLeaseTerm" />
    <label>Additional Feedback</label>  <textarea name="AdditionalFeedback"></textarea>
    <input type="submit" name="submit" value="submit"/>
    <input type="hidden" name="form_order" value="default"/>
    <input type="hidden" name="form_delivery" value="default"/>
    <input type="hidden" name="form_format" value="html"/>
  </form>
</div>