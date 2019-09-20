<?php
/**
 * @snippet       Force WP Admin theme and remove profile theme picker
 * @sourcecode    https://bitbucket.org/snippets/keith_crain/5Lg4E9
 * @author        Keith Crain
 * @author_url    https://kronoslabs.io
 * @testedwith    WordPress v5.2.3
 * 
 * @param         midnight ( change this to what theme you want ) 
 * @return        @param
 */
function change_admin_color($result) {
    return 'midnight';
}
add_filter('get_user_option_admin_color', 'change_admin_color');
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
