<?php

add_filter( 'mainwp-sitestable-getcolumns', 'mycustom_sites_table_column', 10 );
add_filter( 'mainwp-sitestable-item', 'mycustom_sitestable_item', 10 );

function mycustom_sites_table_column( $cols ) {
   $cols['wpversion'] = 'WP Version';
   return $cols;
}

function mycustom_sitestable_item( $item ) {
   $options = apply_filters('mainwp_getwebsiteoptions', array(), $item['id'], 'site_info');
   $website_info = json_decode( $options, true );
   if (is_array($website_info) && isset($website_info['wpversion'])) {
     $item['wpversion'] = $website_info['wpversion'];
   } else {
     $item['wpversion'] = '';
   }
   return $item;
}
