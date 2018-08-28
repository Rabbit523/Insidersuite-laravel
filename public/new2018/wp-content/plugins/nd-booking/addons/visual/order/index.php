<?php


//START
add_shortcode('nd_booking_order', 'nd_booking_vc_shortcode_order');
function nd_booking_vc_shortcode_order($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_booking_class' => '',
    'nd_booking_layout' => '',
    'nd_booking_bg_color' => '',
    'nd_booking_bg_color_2' => '',
    'nd_booking_text_color' => '',
    'nd_booking_text_color_active' => '',
    'nd_booking_arrow_image' => '',
    'nd_booking_list_image' => '',
    'nd_booking_grid_image' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_booking_class = $atts['nd_booking_class'];
  $nd_booking_layout = $atts['nd_booking_layout'];
  $nd_booking_bg_color = $atts['nd_booking_bg_color'];
  $nd_booking_bg_color_2 = $atts['nd_booking_bg_color_2'];
  $nd_booking_text_color = $atts['nd_booking_text_color'];
  $nd_booking_text_color_active = $atts['nd_booking_text_color_active'];
  $nd_booking_arrow_image = $atts['nd_booking_arrow_image'];
  $nd_booking_list_image = $atts['nd_booking_list_image'];
  $nd_booking_grid_image = $atts['nd_booking_grid_image'];

  //images
  if ( $nd_booking_arrow_image == '' ) { 
    $nd_booking_arrow_image_src = plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg '; 
  }else{
    $nd_booking_arrow_image_src = wp_get_attachment_image_src($nd_booking_arrow_image,'large');
  }

  if ( $nd_booking_list_image == '' ) { 
    $nd_booking_list_image_src = plugins_url().'/nd-booking/assets/img/icons/icon-list-white.svg'; 
  }else{
    $nd_booking_list_image_src = wp_get_attachment_image_src($nd_booking_list_image,'large');
  }

  if ( $nd_booking_grid_image == '' ) { 
    $nd_booking_grid_image_src = plugins_url().'/nd-booking/assets/img/icons/icon-grid-grey.svg'; 
  }else{
    $nd_booking_grid_image_src = wp_get_attachment_image_src($nd_booking_grid_image,'large');
  }
  

  //default value
  if ($nd_booking_layout == '') { $nd_booking_layout = "layout-1"; }

  //include the layout selected
  include 'layout/'.$nd_booking_layout.'.php';

  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_booking_order' );
function nd_booking_order() {


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
      "name" => __( "Order", "nd-booking" ),
      "base" => "nd_booking_order",
      'description' => __( 'Add Order', 'nd-booking' ),
      'show_settings_on_create' => true,
      "icon" => plugins_url() . "/nd-booking/addons/visual/thumb/order.jpg",
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
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Custom class", "nd-booking" ),
            "param_name" => "nd_booking_class",
            "description" => __( "Insert custom class", "nd-booking" )
         ),

         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg color", "nd-booking" ),
            "param_name" => "nd_booking_bg_color",
            "description" => __( "Insert bg color", "nd-booking" ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Bg color 2", "nd-booking" ),
            "param_name" => "nd_booking_bg_color_2",
            "description" => __( "Insert bg color 2", "nd-booking" ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color", "nd-booking" ),
            "param_name" => "nd_booking_text_color",
            "description" => __( "Insert text color", "nd-booking" ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            "type" => "colorpicker",
            "class" => "",
            "heading" => __( "Text Color Active", "nd-booking" ),
            "param_name" => "nd_booking_text_color_active",
            "description" => __( "Insert text active color", "nd-booking" ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),

         array(
            'type' => 'attach_image',
            'heading' => __( 'Arrow Icon', 'nd-booking' ),
            'param_name' => 'nd_booking_arrow_image',
            'description' => __( 'Select image from media library.', 'nd-booking' ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'List Icon', 'nd-booking' ),
            'param_name' => 'nd_booking_list_image',
            'description' => __( 'Select image from media library.', 'nd-booking' ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         array(
            'type' => 'attach_image',
            'heading' => __( 'Grid Icon', 'nd-booking' ),
            'param_name' => 'nd_booking_grid_image',
            'description' => __( 'Select image from media library.', 'nd-booking' ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-2' ) )
         ),
         

        
      )
   ) );
}
//end shortcode