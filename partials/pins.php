<?php if (have_rows('map_pins')): ?>
  <div class="pin-wrapper">
    <div class="pin-content">
      <?php
        while (have_rows('map_pins')): the_row();
          $x = get_sub_field('pin_x');
          $y = get_sub_field('pin_y');
          $name = get_sub_field('name');
          $minutes_away = get_sub_field('minutes_away');
          $hours = (int)($minutes_away / 60);
          $minutes = $minutes_away % 60;
      ?>
          <div class="map-pin" style="top: <?php echo $y; ?>px;left: <?php echo $x; ?>px;">
            <div class="pin-svg"></div>
            <div class="pin-name"><?php echo $name; ?></div>
            <div class="pin-minutes">
              <?php
                if ($hours > 1):
                  echo $hours . " hours ";
                elseif ($hours == 1):
                  echo $hours . " hour ";
                endif;
                if ($minutes > 1):
                  echo $minutes . " minutes";
                elseif ($minutes == 1):
                  echo $minutes . " minute";
                elseif ($minutes == 0 && $hours == 0):
                  echo $minutes . " minutes";
                endif;
              ?>
            </div>
          </div>
      <?php
        endwhile;
      ?>
    </div>
  </div>
<?php endif; ?>