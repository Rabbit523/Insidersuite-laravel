<?php


//START
add_shortcode('nd_booking_search', 'nd_booking_vc_shortcode_search');
function nd_booking_vc_shortcode_search($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_booking_class' => '',
    'nd_booking_layout' => '',
    'nd_booking_submit_padding' => '',
    'nd_booking_submit_bg' => '',
    'nd_booking_action' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_booking_class = $atts['nd_booking_class'];
  $nd_booking_action = $atts['nd_booking_action']; if ( $nd_booking_action == '' ) { $nd_booking_action = nd_booking_search_page(); }else{ $nd_booking_action = get_the_permalink($nd_booking_action); }
  $nd_booking_layout = $atts['nd_booking_layout'];
  $nd_booking_submit_padding = $atts['nd_booking_submit_padding'];
  $nd_booking_submit_bg = $atts['nd_booking_submit_bg'];
  $nd_booking_archive_form_guests = '';

  //date options
  $nd_booking_date_number_from_front = date('d');
  $nd_booking_date_month_from_front = date('M');
  $nd_booking_date_month_from_front = date_i18n('M');

  $nd_booking_date_tomorrow = new DateTime('tomorrow');
  $nd_booking_date_number_to_front = $nd_booking_date_tomorrow->format('d');
  $nd_booking_date_month_to_front = $nd_booking_date_tomorrow->format('M');
  $nd_booking_todayy = date('Y/m/d');
  $nd_booking_tomorroww = date('Y/m/d', strtotime($nd_booking_todayy.' + 1 days'));
  $nd_booking_date_month_to_front = date_i18n('M',strtotime($nd_booking_tomorroww));


  //default value
  if ($nd_booking_layout == '') { $nd_booking_layout = "layout-1"; }

  //include script for calendar
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_style('jquery-ui-datepicker-css', plugins_url() . '/nd-booking/assets/css/jquery-ui-datepicker.css' );


  //include the layout selected
  include 'layout/'.$nd_booking_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_booking_search' );
function nd_booking_search() {


  //START get all layout
  $nd_booking_layouts = array();

  //php function to descover all name files in directory
  $nd_booking_directory = plugin_dir_path( __FILE__ ) .'layout/';
  $nd_booking_layouts = scandir($nd_booking_directory);


  //cicle for delete hidden file that not are php files
  $i = 0;
  foreach ($nd_booking_layouts as $value) {
    
    //remove all files that aren't php
    if ( strpos( $nd_booking_layouts[$i] , ".php" ) != true ){
      unset($nd_booking_layouts[$i]);
    }else{
      $nd_booking_layout_name = str_replace(".php","",$nd_booking_layouts[$i]);
      $nd_booking_layouts[$i] = $nd_booking_layout_name;
    } 
    $i++; 

  }
  //END get all layout


   vc_map( array(
      "name" => __( "Search", "nd-booking" ),
      "base" => "nd_booking_search",
      'description' => __( 'Add search', 'nd-booking' ),
      'show_settings_on_create' => true,
      "icon" => plugins_url() . "/nd-booking/addons/visual/thumb/search.jpg",
      "class" => "",
      "category" => __( "ND Booking", "nd-booking"),
      "params" => array(
   

          array(
           'type' => 'dropdown',
            'heading' => __( 'Layout', 'nd-booking' ),
            'param_name' => 'nd_booking_layout',
            'value' => $nd_booking_layouts,
            'description' => __( "Choose the layout", "nd-booking" )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Submit Bg Color", "nd-booking" ),
            "param_name" => "nd_booking_submit_bg",
            "description" => __( "Choose submit bg color", "nd-booking" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Submit Padding", "nd-booking" ),
            "param_name" => "nd_booking_submit_padding",
            "description" => __( "Insert the submit padding in px ( eg : '20px' or '20px 15px' for top/bottom and left/right )", "nd-booking" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Action Page ID", "nd-booking" ),
            "param_name" => "nd_booking_action",
            "description" => __( "Action Page ID ( not mandatory ), use this field ONLY if you want to redirect the search button to a different page, insert only the ID of your site page ( only number )", "nd-booking" )
         ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nd-booking" ),
            "param_name" => "nd_booking_class",
            "description" => __( "Insert custom class", "nd-booking" )
         )

        
      )
   ) );
}
//end shortcode