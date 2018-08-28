<?php
/*
Plugin Name:       ND Booking
Description:       The plugin is used to manage your booking. To get started: 1) Click the "Activate" link to the left of this description. 2) Follow the documentation for installation for use the plugin in the better way.
Version:           2.3.6
Plugin URI:        http://www.nicdark.com/
Author:            Nicdark
Author URI:        http://www.nicdark.com/
License:           GPLv2 or later
*/

///////////////////////////////////////////////////TRANSLATIONS///////////////////////////////////////////////////////////////

//translation
function nd_booking_load_textdomain()
{
  load_plugin_textdomain("nd-booking", false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'nd_booking_load_textdomain');


///////////////////////////////////////////////////DB///////////////////////////////////////////////////////////////
register_activation_hook( __FILE__, 'nd_booking_create_booking_db' );
function nd_booking_create_booking_db()
{
    global $wpdb;

    $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';

    $nd_booking_sql = "CREATE TABLE $nd_booking_table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      id_post int(11) NOT NULL,
      title_post varchar(255) NOT NULL,
      date varchar(255) NOT NULL,
      date_from varchar(255) NOT NULL,
      date_to varchar(255) NOT NULL,
      guests int(11) NOT NULL,
      final_trip_price int(11) NOT NULL,
      extra_services varchar(255) NOT NULL,
      id_user int(11) NOT NULL,
      user_first_name varchar(255) NOT NULL,
      user_last_name varchar(255) NOT NULL,
      paypal_email varchar(255) NOT NULL,
      user_phone varchar(255) NOT NULL,
      user_address varchar(255) NOT NULL,
      user_city varchar(255) NOT NULL,
      user_country varchar(255) NOT NULL,
      user_message varchar(255) NOT NULL,
      user_arrival varchar(255) NOT NULL,
      user_coupon varchar(255) NOT NULL,
      paypal_payment_status varchar(255) NOT NULL,
      paypal_currency varchar(255) NOT NULL,
      paypal_tx varchar(255) NOT NULL,
      action_type varchar(255) NOT NULL,
      UNIQUE KEY id (id)
    );";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $nd_booking_sql );
}



///////////////////////////////////////////////////CSS STYLE///////////////////////////////////////////////////////////////

//add custom css
function nd_booking_scripts() {
  
  //basic css plugin
  wp_enqueue_style( 'nd_booking_style', plugins_url() . '/nd-booking/assets/css/style.css' );

  wp_enqueue_script('jquery');
  
}
add_action( 'wp_enqueue_scripts', 'nd_booking_scripts' );


//START add admin custom css
function nd_booking_admin_style() {
  
  wp_enqueue_style( 'nd_booking_admin_style', plugins_url() . '/nd-booking/assets/css/admin-style.css', array(), false, false );
  
}
add_action( 'admin_enqueue_scripts', 'nd_booking_admin_style' );
//END add custom css


///////////////////////////////////////////////////GET TEMPLATE ///////////////////////////////////////////////////////////////

//single Cpt 1
function nd_booking_get_cpt_1_template($nd_booking_single_cpt_1_template) {
     global $post;

     if ($post->post_type == 'nd_booking_cpt_1') {
          $nd_booking_single_cpt_1_template = dirname( __FILE__ ) . '/templates/single-cpt-1.php';
     }
     return $nd_booking_single_cpt_1_template;
}
add_filter( 'single_template', 'nd_booking_get_cpt_1_template' );

//single Cpt 4
function nd_booking_get_cpt_4_template($nd_booking_single_cpt_4_template) {
     global $post;

     if ($post->post_type == 'nd_booking_cpt_4') {
          $nd_booking_single_cpt_4_template = dirname( __FILE__ ) . '/templates/single-cpt-4.php';
     }
     return $nd_booking_single_cpt_4_template;
}
add_filter( 'single_template', 'nd_booking_get_cpt_4_template' );

//update theme options
function nd_booking_theme_setup_update(){
    update_option( 'nicdark_theme_author', 0 );
}
add_action( 'after_switch_theme' , 'nd_booking_theme_setup_update');


///////////////////////////////////////////////////CPT///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/cpt/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////SHORTCODES ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/shortcodes/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////ADDONS ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "addons/*/index.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////FUNCTIONS///////////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/functions/functions.php';


///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/metabox/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////PLUGIN SETTINGS ///////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/admin/plugin-settings.php';


//function for get plugin version
function nd_booking_get_plugin_version(){

    $nd_booking_plugin_data = get_plugin_data( __FILE__ );
    $nd_booking_plugin_version = $nd_booking_plugin_data['Version'];

    return $nd_booking_plugin_version;

}



