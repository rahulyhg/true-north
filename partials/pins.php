<div class="pin-wrapper">
  <div class="pin-container">
    <div class="pin-content">
      <?php
        while (have_rows('map_pins')): the_row();
          $x = get_sub_field('pin_x');
          $y = get_sub_field('pin_y');
      ?>
          <div class="map-pin" style="top: <?php echo $y; ?>px;left: <?php echo $x; ?>px;"></div>
      <?php
        endwhile;
      ?>
    </div>
  </div>
</div>