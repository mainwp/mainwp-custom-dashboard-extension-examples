<?php // DO NOT INCLUDE TAG WHEN PASTING SNIPPET

// Copy here down... 

/**
 * @snippet       Custom "Go-to-Admin" Button URL
 * @author        MainWP
 * @author_url    https://MainWP.com
 * @testedwith    WordPress v6.3
 * @testedwith    MainWP Dashboard v4.5
 *
 * @param         admin_url( 'PAGE_SLUG.php' );
 * @How-to-use    Change the page slug within admin_url('PAGE_SLUG.php').
 *                In this example, we are setting the button to go to the `WP > Plugins > Installed Plugins` page ( plugins.php )
 */
add_filter( 'mainwp_go_back_wpadmin_link', 'mainwp_go_back_wpadmin_link', 10, 1);
function mainwp_go_back_wpadmin_link( $input ) {
   $input['url'] = admin_url( 'plugins.php' );
   return $input;
}
