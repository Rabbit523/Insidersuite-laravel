<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////


add_action( 'add_meta_boxes', 'nd_booking_box_add_cpt_3' );
function nd_booking_box_add_cpt_3() {
    add_meta_box( 'nd_booking_metabox_cpt_3', __('Metabox','nd-booking'), 'nd_booking_meta_box_cpt_3', 'nd_booking_cpt_3', 'normal', 'high' );
}

function nd_booking_meta_box_cpt_3()
{


    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    //jquery-ui-datepicker
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_style('jquery-ui-datepicker-css', plugins_url() . '/nd-booking/assets/css/jquery-ui-datepicker.css' );


    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_booking_values = get_post_custom( $post->ID );

    //main settings
    $nd_booking_meta_box_cpt_3_exceptions_type = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_3_exceptions_type', true );
    $nd_booking_meta_box_cpt_3_price = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_3_price', true ); 
    $nd_booking_meta_box_cpt_3_date_range_from = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_3_date_range_from', true ); 
    $nd_booking_meta_box_cpt_3_date_range_to = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_3_date_range_to', true ); 


    ?>



    <div id="nd_booking_id_metabox_cpt">
        <ul>
            <li><a href="#nd_booking_tab_main"><span class="dashicons-before dashicons-admin-settings nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Main Settings','nd-booking'); ?></a></li>
        </ul>
        
        <div class="nd_booking_id_metabox_cpt_content">
            <div id="nd_booking_tab_main">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Exception Type','nd-booking'); ?></strong></p>
                    <p>

                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_cpt_3_exceptions_type" id="nd_booking_meta_box_cpt_3_exceptions_type">
    
                        <option <?php if( $nd_booking_meta_box_cpt_3_exceptions_type == 'nd_booking_custom_price' ) { echo 'selected="selected"'; } ?> value="nd_booking_custom_price"><?php _e('Custom Price','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_3_exceptions_type == 'nd_booking_block_dates' ) { echo 'selected="selected"'; } ?> value="nd_booking_block_dates"><?php _e('Block Dates','nd-booking'); ?></option>
                         
                      </select>

                    </p>
                    <p><?php _e('Set the exception type','nd-booking'); ?></p>
                </div>

                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee  nd_booking_padding_10 nd_booking_padding_left_0 nd_booking_padding_right_0 nd_booking_box_sizing_border_box">

                    <div class="nd_booking_section  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">
                        <p class="nd_booking_margin_bottom_0"><strong><?php _e('Date Range','nd-booking'); ?></strong></p>
                    </div>

                    <div class="nd_booking_float_left nd_booking_width_50_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_3_date_range_from" id="nd_booking_meta_box_cpt_3_date_range_from" value="<?php echo $nd_booking_meta_box_cpt_3_date_range_from ?>" /></p>
                        <p><?php _e('From','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_50_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_3_date_range_to" id="nd_booking_meta_box_cpt_3_date_range_to" value="<?php echo $nd_booking_meta_box_cpt_3_date_range_to ?>" /></p>
                        <p><?php _e('To','nd-booking'); ?></p>
                    </div>
                </div>

                <script type="text/javascript">
                  //<![CDATA[
                  jQuery(document).ready(function() {

                    jQuery( function ( $ ) {

                      var dateFormat = "mm/dd/yy",
                        


                        from = $( "#nd_booking_meta_box_cpt_3_date_range_from" )
                          .datepicker({
                            changeMonth: false,
                            numberOfMonths: 2
                          })
                          .on( "change", function() {
                            to.datepicker( "option", "minDate", getDate( this ) );
                          }),
                        

                        to = $( "#nd_booking_meta_box_cpt_3_date_range_to" ).datepicker({
                          changeMonth: false,
                          numberOfMonths: 2
                        })
                        .on( "change", function() {
                          from.datepicker( "option", "maxDate", getDate( this ) );
                        });
                   


                      function getDate( element ) {
                        var date;
                        try {
                          date = $.datepicker.parseDate( dateFormat, element.value );
                        } catch( error ) {
                          date = null;
                        }
                   
                        return date;
                      }

                    });

                  });
                  //]]>
                </script>


                <div class="nd_booking_section  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Price','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_3_price" id="nd_booking_meta_box_cpt_3_price" value="<?php echo $nd_booking_meta_box_cpt_3_price ?>" /></p>
                    <p><?php _e('Insert the price ( only number )','nd-booking'); ?></p>
                </div>

            </div>
             
        </div>

    </div>

    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
        $( "#nd_booking_id_metabox_cpt" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#nd_booking_id_metabox_cpt li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
      });

      //]]>
    </script>


    <?php   

}


add_action( 'save_post', 'nd_booking_meta_box_save_cpt_3' );
function nd_booking_meta_box_save_cpt_3( $post_id )
{

    //main settings
    if( isset( $_POST['nd_booking_meta_box_cpt_3_exceptions_type'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_3_exceptions_type', wp_kses( $_POST['nd_booking_meta_box_cpt_3_exceptions_type'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_3_price'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_3_price', wp_kses( $_POST['nd_booking_meta_box_cpt_3_price'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_3_date_range_from'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_3_date_range_from', wp_kses( $_POST['nd_booking_meta_box_cpt_3_date_range_from'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_3_date_range_to'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_3_date_range_to', wp_kses( $_POST['nd_booking_meta_box_cpt_3_date_range_to'], $allowed ) );

}