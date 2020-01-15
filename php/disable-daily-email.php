<?php 

add_filter( 'mainwp_updatescheck_disable_sendmail', 'mycustom_mainwp_updatescheck_disable_sendmail', 10, 1 );
function mycustom_mainwp_updatescheck_disable_sendmail( $input ) {
  return true;
}
?>
