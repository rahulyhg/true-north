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
          <div class="map-pin" style="top: <?php echo $y; ?>px;left: <?php echo $x; ?>px;" data-top="<?php echo $y; ?>" data-left="<?php echo $x; ?>">
            <div class="pin-svg">
              <?php echo file_get_contents(get_bloginfo('template_url') . '/images/svg/flag.svg'); ?>
            </div>
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
    <?php
      if (is_page_template('page-home.php')):
    ?>
      <div class="map-pin" style="top: 100px;left: 670px;" data-top="100" data-left="670">
        <div class="pin-svg">
          <?php echo file_get_contents(get_bloginfo('template_url') . '/images/svg/flag.svg'); ?>
        </div>
        <div class="pin-name">True North</div>
        <div class="pin-minutes">
          0 minutes
        </div>
      </div>
    <?php
      endif;
    ?>
  </div>
<?php endif; ?>