<?php if (have_rows('map_pins')): ?>
  <div class="pin-wrapper">
    <div class="pin-container">
      <div class="pin-content">
        <?php
          while (have_rows('map_pins')): the_row();
            $x = get_sub_field('pin_x');
            $y = get_sub_field('pin_y');
            $name = get_sub_field('name');
            $minutes = get_sub_field('minutes_away');
        ?>
            <div class="map-pin" style="top: <?php echo $y; ?>px;left: <?php echo $x; ?>px;">
              <div class="pin-svg"></div>
              <div class="pin-name"><?php echo $name; ?></div>
              <div class="pin-minutes"><?php echo $minutes; ?> minutes</div>
            </div>
        <?php
          endwhile;
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>