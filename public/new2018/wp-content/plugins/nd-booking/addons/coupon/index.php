<?php

/////////////////////////////////////////////////// REGISTER POST TYPE ///////////////////////////////////////////////////////////////

$nd_booking_coupon_enable = get_option('nd_booking_coupon_enable'); 

if ( $nd_booking_coupon_enable == 1 and get_option('nicdark_theme_author') == 1  ) {

    function nd_booking_create_post_type_5() {

        register_post_type('nd_booking_cpt_5',
            array(
                'labels' => array(
                    'name' => __('Coupon', 'nd-booking'),
                    'singular_name' => __('Coupon', 'nd-booking')
                ),
                'public' => false,
                'show_ui' => true,
                'show_in_nav_menus' => false,
                'menu_icon'   => 'dashicons-tickets-alt',
                'has_archive' => false,
                'exclude_from_search' => true,
                'rewrite' => array('slug' => 'coupon'),
                'supports' => array('title','editor')
            )
        );
    }
    add_action('init', 'nd_booking_create_post_type_5');

}

/////////////////////////////////////////////////// CREATE METABOX ///////////////////////////////////////////////////////////////


add_action( 'add_meta_boxes', 'nd_booking_box_add_cpt_5' );
function nd_booking_box_add_cpt_5() {
    add_meta_box( 'nd_booking_metabox_cpt_5', __('Metabox','nd-booking'), 'nd_booking_meta_box_cpt_5', 'nd_booking_cpt_5', 'normal', 'high' );
}

function nd_booking_meta_box_cpt_5()
{

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_booking_values = get_post_custom( $post->ID );

    //main settings
    $nd_booking_meta_box_cpt_5_percentage = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_5_percentage', true ); 
    $nd_booking_meta_box_cpt_5_code = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_5_code', true ); 

    ?>



    <div id="nd_booking_id_metabox_cpt">
        
        <ul>
            <li><a href="#nd_booking_tab_main"><span class="dashicons-before dashicons-admin-settings nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Main Settings','nd-booking'); ?></a></li>
        </ul>
        
        <div class="nd_booking_id_metabox_cpt_content">
            <div id="nd_booking_tab_main">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Coupon Code','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_5_code" id="nd_booking_meta_box_cpt_5_code" value="<?php echo $nd_booking_meta_box_cpt_5_code ?>" /></p>
                    <p><?php _e('Insert the coupon code ( example : SBV9CBSRF6QNZZQX )','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Coupon Percentage Value','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_5_percentage" id="nd_booking_meta_box_cpt_5_percentage" value="<?php echo $nd_booking_meta_box_cpt_5_percentage ?>" /></p>
                    <p><?php _e('Insert the coupon value, only number ( example for -50% coupon insert only 50 )','nd-booking'); ?></p>
                </div>

            </div>
             
        </div>

    </div>


    <?php   

}


add_action( 'save_post', 'nd_booking_meta_box_save_cpt_5' );
function nd_booking_meta_box_save_cpt_5( $post_id )
{

    //main settings
    if( isset( $_POST['nd_booking_meta_box_cpt_5_percentage'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_5_percentage', wp_kses( $_POST['nd_booking_meta_box_cpt_5_percentage'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_5_code'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_5_code', wp_kses( $_POST['nd_booking_meta_box_cpt_5_code'], $allowed ) );

}


/////////////////////////////////////////////////// FUNCTIONS ///////////////////////////////////////////////////////////////

//get coupon value
function nd_booking_get_coupon_value($nd_booking_coupon){


  $args = array(
      'post_type' => 'nd_booking_cpt_5',
      'meta_query' => array(
          array(
              'key'     => 'nd_booking_meta_box_cpt_5_code',
              'value'   => $nd_booking_coupon,
              'compare' => '=',
          ),
      ),
  );
  $the_query = new WP_Query( $args );
  $nd_booking_qnt_results_posts = $the_query->found_posts;

  if ( $nd_booking_qnt_results_posts == 0 ) { 
    return 0;
  }else{
    
    //START loop
    while ( $the_query->have_posts() ) : $the_query->the_post();

      $nd_booking_meta_box_cpt_5_percentage = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_5_percentage', true );

    endwhile;
    //END loop

    return $nd_booking_meta_box_cpt_5_percentage;

  }
  

}


//get price before coupon
function nd_booking_get_price_before_coupon($nd_booking_booking_form_coupon,$nd_booking_booking_form_final_price){

    $nd_booking_coupon_value = nd_booking_get_coupon_value($nd_booking_booking_form_coupon);

    $nd_booking_get_price_before_coupon = ($nd_booking_booking_form_final_price*100)/(100-$nd_booking_coupon_value);

    return number_format($nd_booking_get_price_before_coupon,2);
}


//get coupon class enable 
function nd_booking_get_coupon_enable_class(){

    $nd_booking_coupon_enable = get_option('nd_booking_coupon_enable'); 
    if ( $nd_booking_coupon_enable == 1 and get_option('nicdark_theme_author') == 1 ) {
        $nd_booking_coupon_enable_class = '';
    }else{ 
        $nd_booking_coupon_enable_class = 'nd_booking_display_none'; 
    }
    return $nd_booking_coupon_enable_class;

}

