<?php

$nd_booking_visualcomposer_enable = get_option('nd_booking_visualcomposer_enable');
if ( $nd_booking_visualcomposer_enable == 1 and get_option('nicdark_theme_author') == 1 ) {

//add image size
if ( function_exists( 'add_image_size' ) ) {  add_image_size( 'nd_booking_image_size_1110_611', 1110, 611, true ); }

//include all shortcodes
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
	include_once $file;
}

}