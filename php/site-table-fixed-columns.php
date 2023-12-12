<?php // DO NOT INCLUDE TAG WHEN PASTING SNIPPET

// Copy here down... 

/**
 * @snippet       Site Table Fixed Columns
 * @author        MainWP
 * @author_url    https://MainWP.com
 * @testedwith    WordPress v6.4.2
 * @testedwith    MainWP Dashboard v4.5.3.2
 *
 * @param         $table_features['fixedColumns'] = "{left:3}";
 */

add_filter( 'mainwp_sites_table_features', 'mycustom_fixed_columns', 10, 1 );
function mycustom_fixed_columns( $table_features ) {
	$table_features['fixedColumns'] = "{left:3}";
	return $table_features;
