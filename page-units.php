<?php /* Template Name: Units Page */ ?>

<?php the_post() ?>
<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <?php the_field('unit_text') ?>
    <div class="unit-boxes">
      <?php
        $gallery_json = [];
        function get_image_url($image) {
          return "\"{$image['url']}\"";
        }
        while (have_rows('unit')): the_row();
          $name = get_sub_field('unit_name');
          $description = get_sub_field('unit_description');
          $gallery = get_sub_field('unit_gallery');
      ?>
          <div class="unit-wrapper">
            <div class="unit-box" data-name="<?php echo $name; ?>">
              <div class="unit-name"><?php echo $name; ?></div>
              <div class="unit-svg">
                <?php echo file_get_contents(get_bloginfo('template_url') . '/images/svg/unit.svg'); ?>
              </div>
            </div>
            <div class="unit-description tiny"><?php echo $description; ?></div>
          </div>
      <?php
          if ($gallery):
            $joined_urls = join(",", array_map("get_image_url", $gallery));
            $json_obj = "\"{$name}\": [{$joined_urls}]";
            array_push($gallery_json, $json_obj);
          endif;
        endwhile;
        $gallery_json = "{" . join(",", $gallery_json) . "}";
      ?>
    </div>
    <div class="unit-detail hidden">
      <span class="close"></span>
      <div class="unit-detail-box">
        <div class="unit-detail-name bold-violet"></div>
        <div class="unit carousel"></div>
        <div class="unit-svg">
          <?php echo file_get_contents(get_bloginfo('template_url') . '/images/svg/unit.svg'); ?>
        </div>
      </div>
    </div>
  </div><!-- .post -->
</div><!-- .content -->

<script>
var gallery_json = <?php echo $gallery_json; ?>;
</script>