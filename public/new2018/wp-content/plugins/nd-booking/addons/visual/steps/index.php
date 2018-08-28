<?php


//START
add_shortcode('nd_booking_steps', 'nd_booking_vc_shortcode_steps');
function nd_booking_vc_shortcode_steps($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_booking_class' => '',
    'nd_booking_layout' => '',
    'nd_booking_display_steps' => '',
    'nd_booking_bg_color' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_booking_class = $atts['nd_booking_class'];
  $nd_booking_layout = $atts['nd_booking_layout'];
  $nd_booking_display_steps = $atts['nd_booking_display_steps'];
  $nd_booking_bg_color = $atts['nd_booking_bg_color'];

  //determinate title step
  $nd_booking_id = get_the_ID();
  $nd_booking_permalink = get_permalink($nd_booking_id);

  //declare class variables
  $nd_booking_search_class = 'nd_booking_border_1_solid_white';
  $nd_booking_booking_class = 'nd_booking_border_1_solid_white';
  $nd_booking_checkout_class = 'nd_booking_border_1_solid_white';
  $nd_booking_thankyou_class = 'nd_booking_border_1_solid_white';

  if ( $nd_booking_permalink == nd_booking_search_page() ) {
    $nd_booking_title_step = __('SEARCH','nd-booking');
    $nd_booking_search_class .= ' nd_booking_bg_greydark nd_booking_bg_custom_color nd_booking_border_1_solid_greydark_important';
  }elseif ( $nd_booking_permalink == nd_booking_booking_page() ){
    $nd_booking_title_step = __('BOOKING','nd-booking');
    $nd_booking_booking_class .= ' nd_booking_bg_greydark nd_booking_bg_custom_color nd_booking_border_1_solid_greydark_important';
  }elseif ( $nd_booking_permalink == nd_booking_checkout_page() ){

    if( isset( $_POST['nd_booking_form_booking_arrive'] ) ) {  $nd_booking_form_booking_arrive = $_POST['nd_booking_form_booking_arrive']; }else{ $nd_booking_form_booking_arrive = '';} 
    if( isset( $_POST['nd_booking_form_checkout_arrive'] ) ) {  $nd_booking_form_checkout_arrive = $_POST['nd_booking_form_checkout_arrive']; }else{ $nd_booking_form_checkout_arrive = '';} 

    if ( $nd_booking_form_booking_arrive == 1 ) {
      $nd_booking_title_step = __('CHECKOUT','nd-booking');
      $nd_booking_checkout_class .= ' nd_booking_bg_greydark nd_booking_bg_custom_color nd_booking_border_1_solid_greydark_important';
    }elseif ( $nd_booking_form_checkout_arrive == 1 OR isset($_GET['tx']) OR $nd_booking_form_checkout_arrive == 2 ) {
      $nd_booking_title_step = __('THANK YOU','nd-booking');
      $nd_booking_thankyou_class .= ' nd_booking_bg_greydark nd_booking_bg_custom_color nd_booking_border_1_solid_greydark_important';
    }else{
      $nd_booking_title_step = __('CHECKOUT','nd-booking');
      $nd_booking_checkout_class .= ' nd_booking_bg_greydark nd_booking_bg_custom_color nd_booking_border_1_solid_greydark_important';
    }

  }else{
    $nd_booking_title_step = '';  
  }

  //default value
  if ($nd_booking_layout == '') { $nd_booking_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_booking_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_booking_steps' );
function nd_booking_steps() {


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
      "name" => __( "Steps", "nd-booking" ),
      "base" => "nd_booking_steps",
      'description' => __( 'Add Steps', 'nd-booking' ),
      'show_settings_on_create' => true,
      "icon" => plugins_url() . "/nd-booking/addons/visual/thumb/steps.jpg",
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
         'type' => 'dropdown',
          "heading" => __( "Display Steps", "nd-booking" ),
          'param_name' => 'nd_booking_display_steps',
          'value' => array('select'=>'','Yes'=>'yes','Not'=>'not'),
          'description' => __( "Choose if you want to display the steps below the title", "nd-booking" )
         ),
          array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg Active color", "nd-booking" ),
            "param_name" => "nd_booking_bg_color",
            "description" => __( "Insert bg color", "nd-booking" )
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