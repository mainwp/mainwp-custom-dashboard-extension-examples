<?php 

add_action( 'admin_head', 'mycustom_menu_admin_head' );
function mycustom_menu_admin_head() {
    global $menu;
    foreach( $menu as &$item ) {
        if ( $item[2] == 'mainwp_tab' ) {
             $item[0] = 'Demo Header';
          break;
        }
    }
}
