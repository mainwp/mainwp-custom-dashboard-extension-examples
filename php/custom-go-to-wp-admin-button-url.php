<?php

//Set custom url for the Go to WP Admin button. In this example, we are setting the button to go to the WP > Plugins > Installed Plugins page

add_filter( 'mainwp_go_back_wpadmin_link', 'mainwp_go_back_wpadmin_link', 10, 1);
function mainwp_go_back_wpadmin_link( $input ) {
   $input['url'] = admin_url( 'plugins.php' );
   return $input;
}
