      <div id="counter">
        <div>
          <?php 
            $visits = vcp_get_visit_count('T');
            $digits = str_split($visits);
            $num_digits = strlen($visits);
            for ($x = 0; $x < 9 - $num_digits; $x++):
          ?>
            <span class="number">0</span>
          <?php
            endfor;
            for ($x = 0; $x < $num_digits; $x++):
          ?>
            <span class="number"><?php echo $digits[$x]; ?></span>
          <?php endfor; ?>
        </div>
        <div class="tiny visitors">
          Visitors
        </div>
      </div>
    </div><!-- .container -->
    <script>
      // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      // e.src='https://www.google-analytics.com/analytics.js';
      // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    <?php wp_footer(); ?>

    <div style="display:none";>
      <?php echo do_shortcode('[wpc-weather id="56"]'); ?>
    </div>

    <div class="gray-background"></div>
    <div class="sunset-gradient"></div>
  </body>
</html>
