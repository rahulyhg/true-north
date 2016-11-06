<?php
function unhide_kitchensink( $args ) {
  $args['wordpress_adv_hidden'] = false;
  return $args;
}
add_filter( 'tiny_mce_before_init', 'unhide_kitchensink' );
?>