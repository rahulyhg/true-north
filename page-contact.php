<?php /* Template Name: Contact Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php the_field('body_text') ?>
  </div><!-- .post -->
</div><!-- .content -->
<div class="contact-form">
  <?php
    if (isset($_GET["sent"])):
  ?>
  <div>Your message has been sent.</div>
  <?php
    else:
  ?>
    <form action="/webformmailer.php" method="post">
      <input type="hidden" name="subject" value="True North Contact Form" />
      <input type="hidden" name="redirect" value="/contact?sent" />
      <label>Name <input type="text" name="Name" minlength="2" required/> </label>
      <label>Email <input type="email" name="Email" required/> </label>
      <label>Current City <input type="text" name="CurrentCity" required/> </label>
      <label>Desired Unit(s) <input type="text" name="DesiredUnits" required/> </label>
      <label>Desired Move-in <input type="text" name="DesiredMovein" required/> </label>
      <label>Desired Lease Term <input type="text" name="DesiredLeaseTerm" required/> </label>
      <label>Additional Feedback <textarea name="AdditionalFeedback"></textarea> </label>
      <input type="submit" name="submit" value="submit"/>
      <input type="hidden" name="form_order" value="default"/>
      <input type="hidden" name="form_delivery" value="default"/>
      <input type="hidden" name="form_format" value="html"/>
    </form>
  <?php endif; ?>
</div>