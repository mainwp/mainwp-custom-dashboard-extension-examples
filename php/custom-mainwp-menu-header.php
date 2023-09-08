<?php // DO NOT INCLUDE TAG WHEN PASTING SNIPPET

// Copy here down... 

/**
 * @snippet       Change the MainWP WP Admin menu label.
 * @author        MainWP
 * @author_url    https://mainwp.com
 * @testedwith    WordPress v6.3
 * @testedwith    MainWP Dashboard v4.5.1.1
 * 
 * @param         $item[0] = 'Demo Label'; ( change this to what you want ) 
 */

add_action( 'admin_head', 'mycustom_menu_admin_head' );
function mycustom_menu_admin_head() {
    global $menu;
    foreach( $menu as &$item ) {
        if ( $item[2] == 'mainwp_tab' ) {
             $item[0] = 'Demo Label';
          break;
        }
    }
}
