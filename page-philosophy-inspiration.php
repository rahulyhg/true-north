<?php /* Template Name: Philosophy & Inspiration Page */ ?>

<div class="content">
  <div id="page-<?php the_ID() ?>" <?php post_class() ?>>
    <!-- <h2 class="entry-title"><?php the_title() ?></h2> -->
    <div class="entry-content">
      <?php the_content() ?>
      <?php the_field('philosophy_text') ?>
      <?php 
        $images = get_field('inspiration_gallery');

        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
  </div><!-- .post -->
</div><!-- .content -->
