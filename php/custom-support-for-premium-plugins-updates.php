<?php

// Custom snippet to add support for better Premium plugins updates detection. Example for Elementor Extras. Multiple plugins can be added to the $premiums array

add_filter( 'mainwp_detect_premium_plugins_update', 'myhook_mainwp_detect_premium_plugins_update', 10 );
function myhook_mainwp_detect_premium_plugins_update( $premiums ) {
   // add plugin info (slug) here. In this example, we used Elementor Extras, but you should replace it with the correct plugin info
   $premiums[] = 'elementor-extras/elementor-extras.php';
   return $premiums;
}
