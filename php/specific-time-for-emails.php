<?php 

add_filter( 'mainwp_updatescheck_sendmail_at_time', 'mycustom_mainwp_updatescheck_sendmail_at_time', 10, 1 );
function myhook_mainwp_updatescheck_sendmail_at_time( $hour ) {
  $hour = '12:00'; // send email notifactions after 12:00
  return $hour;
}
