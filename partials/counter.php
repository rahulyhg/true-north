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