      <?php include 'partials/counter.php'; ?>
    </div><!-- .container -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-88807214-1','auto');ga('send','pageview');
    </script>
    <?php wp_footer(); ?>
    
    <script>
      $(".contact-form form").validate();
    </script>

    <div style="display:none";>
      <?php echo do_shortcode('[wpc-weather id="56"]'); ?>
    </div>

    <div class="gray-background"></div>
    <div class="sunset-gradient"></div>

    <?php include 'partials/pins.php'; ?>
  </body>
</html>
