<?php


//START
add_shortcode('nd_booking_rooms_pg', 'nd_booking_vc_shortcode_rooms');
function nd_booking_vc_shortcode_rooms($atts, $content = null)
{  

  $atts = shortcode_atts(
  array(
    'nd_booking_class' => '',
    'nd_booking_layout' => '',
    'nd_booking_width' => '',
    'nd_booking_qnt' => '',
    'nd_booking_id' => '',
    'nd_booking_order' => '',
    'nd_booking_orderby' => '',
    'nd_booking_image_size' => '',
    'nd_booking_padding' => '',
    'nd_booking_branches' => '',
  ), $atts);

  $str = '';

  //get variables
  $nd_booking_class = $atts['nd_booking_class'];
  $nd_booking_layout = $atts['nd_booking_layout'];
  $nd_booking_width = $atts['nd_booking_width'];
  $nd_booking_qnt = $atts['nd_booking_qnt'];
  $nd_booking_id = $atts['nd_booking_id'];
  $nd_booking_order = $atts['nd_booking_order'];
  $nd_booking_orderby = $atts['nd_booking_orderby'];
  $nd_booking_image_size = $atts['nd_booking_image_size'];
  $nd_booking_padding = $atts['nd_booking_padding'];
  $nd_booking_branches = $atts['nd_booking_branches'];


  //default value
  if ($nd_booking_layout == '') { $nd_booking_layout = "layout-1"; }
  if ($nd_booking_width == '') { $nd_booking_width = "nd_booking_width_100_percentage"; }
  if ($nd_booking_qnt == '') { $nd_booking_qnt = -1; }
  if ($nd_booking_order == '') { $nd_booking_order = 'DESC'; }
  if ($nd_booking_orderby == '') { $nd_booking_orderby = 'date'; }

  
  if ( $nd_booking_branches == '' ) {

    $args = array(
      'post_type' => 'nd_booking_cpt_1',
      'posts_per_page' => $nd_booking_qnt,
      'order' => $nd_booking_order,
      'orderby' => $nd_booking_orderby,
      'p' => $nd_booking_id
    );

  }else{

    $args = array(
      'post_type' => 'nd_booking_cpt_1',
      'posts_per_page' => $nd_booking_qnt,
      'order' => $nd_booking_order,
      'orderby' => $nd_booking_orderby,
      'p' => $nd_booking_id,
      'meta_query' => array(
          array(
              'key' => 'nd_booking_meta_box_branches',
              'type' => 'numeric',
              'value'   => $nd_booking_branches,
              'compare' => 'IN',
          ),
      ),
    );

  }

  

  $the_query = new WP_Query( $args );

  
  //include the layout selected
  include 'layout/'.$nd_booking_layout.'.php';


  wp_reset_postdata();
  
  return apply_filters('uds_shortcode_out_filter', $str);

}
//END





//vc
add_action( 'vc_before_init', 'nd_booking_rooms_pg' );
function nd_booking_rooms_pg() {


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


  //get all branches
  $nd_booking_get_branches = get_posts( 'post_type="nd_booking_cpt_4"&numberposts=-1' );
  $nd_booking_all_branches = array();
  if ( $nd_booking_get_branches ) {
    $nd_booking_all_branches[__('All Branches','nd-booking')] = '';
    foreach ( $nd_booking_get_branches as $nd_booking_get_branch ) {
      $nd_booking_all_branches[ $nd_booking_get_branch->post_title ] = $nd_booking_get_branch->ID;
    }
  } else {
    $nd_booking_all_branches[ __( 'No branches found', 'nd-booking' ) ] = 0;
  }
  //END get all branches


  //START image size
  $nd_booking_image_sizes = get_intermediate_image_sizes(); 
  //END image size


   vc_map( array(
      "name" => __( "Rooms", "nd-booking" ),
      "base" => "nd_booking_rooms_pg",
      'description' => __( 'Add Rooms Post Grid', 'nd-booking' ),
      'show_settings_on_create' => true,
      "icon" => plugins_url() . "/nd-booking/addons/visual/thumb/pg-rooms.jpg",
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
          "heading" => __( "Width", "nd-booking" ),
          'param_name' => 'nd_booking_width',
          'value' => array( __( 'Select Width', 'nd-booking' ) => 'nd_booking_width_100_percentage nd_booking_float_left', __( '20 %', 'nd-booking' ) => 'nd_booking_width_20_percentage nd_booking_float_left', __( '25 %', 'nd-booking' ) => 'nd_booking_width_25_percentage nd_booking_float_left', __( '33 %', 'nd-booking' ) => 'nd_booking_width_33_percentage nd_booking_float_left', __( '50 %', 'nd-booking' ) => 'nd_booking_width_50_percentage nd_booking_float_left', __( '100 %', 'nd-booking' ) => 'nd_booking_width_100_percentage nd_booking_float_left' ),
          'description' => __( "Select the width for room preview grid", "nd-booking" )
         ),
          array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Qnt rooms", "nd-booking" ),
            "param_name" => "nd_booking_qnt",
            "description" => __( "Insert the quantity of rooms that you want display.", "nd-booking" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order", "nd-booking" ),
          'param_name' => 'nd_booking_order',
          'value' => array('DESC','ASC'),
          'description' => __( "Select the Order paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-booking" )
         ),
          array(
         'type' => 'dropdown',
          "heading" => __( "Order By", "nd-booking" ),
          'param_name' => 'nd_booking_orderby',
          'value' => array('none','ID','author','title','name','date','modified','rand','comment_count'),
          'description' => __( "Select the OrderBy paramater, more info <a target='_blank' href='https://codex.wordpress.org/it:Riferimento_classi/WP_Query#Parametri_Order_.26_Orderby'>here</a>", "nd-booking" )
         ),
           array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "ID room", "nd-booking" ),
            "param_name" => "nd_booking_id",
            "description" => __( "Insert the id of the room that you want display ( NB: only one room )", "nd-booking" )
         ),
         array(
          'type' => 'dropdown',
          'heading' => __( 'Image Size', 'nd-booking' ),
          'param_name' => 'nd_booking_image_size',
          'value' => $nd_booking_image_sizes,
          'save_always' => true,
          'description' => __( 'Choose the image size that you want to use', 'nd-booking' ),
        ),
         array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Padding", "nd-booking" ),
            "param_name" => "nd_booking_padding",
            "description" => __( "Insert the padding in px ( eg : 20px or 10px 15px 20px 25px )", "nd-booking" ),
            'dependency' => array( 'element' => 'nd_booking_layout', 'value' => array( 'layout-4' ) )
         ),
         array(
          'type' => 'dropdown',
          'heading' => __( 'Branches', 'nd-booking' ),
          'param_name' => 'nd_booking_branches',
          'value' => $nd_booking_all_branches,
          'save_always' => true,
          "description" => __( "Choose the branch", "nd-booking" )
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