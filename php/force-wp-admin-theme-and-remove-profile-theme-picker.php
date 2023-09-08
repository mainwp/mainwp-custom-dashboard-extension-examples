<?php // DO NOT INCLUDE TAG WHEN PASTING SNIPPET

// Copy here down... 

/**
 * @snippet       Force WP Admin theme and remove profile theme picker
 * @author        Keith Crain
 * @author_url    https://kronoslabs.io
 * @testedwith    WordPress v6.3
 * @testedwith    MainWP Dashboard v4.5.1.1
 * 
 * @param         midnight ( change this to what theme you want ) 
 * @return        @param
 */
function change_admin_color($result) {
    return 'midnight';
}
add_filter('get_user_option_admin_color', 'change_admin_color');
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
