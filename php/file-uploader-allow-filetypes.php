<?php 

add_filter('mainwp_file_uploader_allowed_file_types', 'mycustom_mainwp_file_uploader_allowed_file_types');
function mycustom_mainwp_file_uploader_allowed_file_types( $types ) {
   $types[] = 'htaccess';
   return $types;
}
