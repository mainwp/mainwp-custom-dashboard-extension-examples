<?php // DO NOT INCLUDE TAG WHEN PASTING SNIPPET

// Copy here down... 

/**
 * @snippet       Custom "Go-to-Admin" Button URL
 * @author        MainWP
 * @author_url    https://MainWP.com
 * @testedwith    WordPress v6.3
 * @testedwith    MainWP Dashboard v4.5
 *
 * @param         admin_url( 'plugins.php' );
 * @How-to-use    Change the page slug with admin_url('PAGE_SLUG.php').
 */

//Set custom url for the Go to WP Admin button. In this example, we are setting the button to go to the WP > Plugins > Installed Plugins page

add_filter( 'mainwp_go_back_wpadmin_link', 'mainwp_go_back_wpadmin_link', 10, 1);
function mainwp_go_back_wpadmin_link( $input ) {
   $input['url'] = admin_url( 'plugins.php' );
   return $input;
}
