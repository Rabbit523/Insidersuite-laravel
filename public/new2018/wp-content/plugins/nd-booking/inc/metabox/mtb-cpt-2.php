<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////


add_action( 'add_meta_boxes', 'nd_booking_box_add_cpt_2' );
function nd_booking_box_add_cpt_2() {
    add_meta_box( 'nd_booking_metabox_cpt_2', __('Metabox','nd-booking'), 'nd_booking_meta_box_cpt_2', 'nd_booking_cpt_2', 'normal', 'high' );
}

function nd_booking_meta_box_cpt_2()
{

    //iris color picker
    wp_enqueue_script('iris');

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_booking_values = get_post_custom( $post->ID );

    //main settings
    $nd_booking_meta_box_cpt_2_service_type = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_service_type', true );
    $nd_booking_meta_box_cpt_2_icon = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_icon', true );
    $nd_booking_meta_box_cpt_2_color = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_color', true );
    $nd_booking_meta_box_cpt_2_text_preview = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_text_preview', true );

    //additional service
    $nd_booking_meta_box_cpt_2_price = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_price', true );
    $nd_booking_meta_box_cpt_2_price_type_1 = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_price_type_1', true );
    $nd_booking_meta_box_cpt_2_price_type_2 = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_2_price_type_2', true );

    ?>



    <div id="nd_booking_id_metabox_cpt">
        <ul>
            <li><a href="#nd_booking_tab_main"><span class="dashicons-before dashicons-admin-settings nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Main Settings','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_additional_service"><span class="dashicons-before dashicons-awards nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Additional Service','nd-booking'); ?></a></li>
        </ul>
        
        <div class="nd_booking_id_metabox_cpt_content">
            <div id="nd_booking_tab_main">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Service Type','nd-booking'); ?></strong></p>
                    <p>

                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_cpt_2_service_type" id="nd_booking_meta_box_cpt_2_service_type">
    
                        <option <?php if( $nd_booking_meta_box_cpt_2_service_type == 'nd_booking_normal_service' ) { echo 'selected="selected"'; } ?> value="nd_booking_normal_service"><?php _e('Normal Service','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_2_service_type == 'nd_booking_additional_service' ) { echo 'selected="selected"'; } ?> value="nd_booking_additional_service"><?php _e('Additional Service','nd-booking'); ?></option>
                         
                      </select>

                    </p>
                    <p><?php _e('Choose the service type','nd-booking'); ?></p>
                </div>
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Icon','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_2_icon" id="nd_booking_meta_box_cpt_2_icon" value="<?php echo $nd_booking_meta_box_cpt_2_icon ?>" /></p>
                    <p>
                      <input class="button nd_booking_meta_box_cpt_2_icon_button" type="button" name="nd_booking_meta_box_cpt_2_icon_button" id="nd_booking_meta_box_cpt_2_icon_button" value="<?php _e('Upload','nd-booking'); ?>" />
                    </p>
                    <p><?php _e('Set the icon image for your service','nd-booking'); ?></p>


                    <script type="text/javascript">
                      //<![CDATA[
                      
                    jQuery(document).ready(function() {

                      jQuery( function ( $ ) {

                        var file_frame = [],
                        $button = $( '.nd_booking_meta_box_cpt_2_icon_button' );


                        $('#nd_booking_meta_box_cpt_2_icon_button').click( function () {


                          var $this = $( this ),
                            id = $this.attr( 'id' );

                          // If the media frame already exists, reopen it.
                          if ( file_frame[ id ] ) {
                            file_frame[ id ].open();

                            return;
                          }

                          // Create the media frame.
                          file_frame[ id ] = wp.media.frames.file_frame = wp.media( {
                            title    : $this.data( 'uploader_title' ),
                            button   : {
                              text : $this.data( 'uploader_button_text' )
                            },
                            multiple : false  // Set to true to allow multiple files to be selected
                          } );

                          // When an image is selected, run a callback.
                          file_frame[ id ].on( 'select', function() {

                            // We set multiple to false so only get one image from the uploader
                            var attachment = file_frame[ id ].state().get( 'selection' ).first().toJSON();

                            $('#nd_booking_meta_box_cpt_2_icon').val(attachment.url);

                          } );

                          // Finally, open the modal
                          file_frame[ id ].open();


                        } );

                      });

                    });

                      //]]>
                    </script>





                </div>
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Color','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_colorpicker" type="text" name="nd_booking_meta_box_cpt_2_color" value="<?php echo $nd_booking_meta_box_cpt_2_color; ?>" /></p>
                    <p><?php _e('Set the service color','nd-booking'); ?></p>
                </div>
                <script type="text/javascript">
                  //<![CDATA[
                  
                  jQuery(document).ready(function($){
                      $('#nd_booking_colorpicker').iris();
                  });

                  //]]>
                </script>
                <div class="nd_booking_section  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Text Preview','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_2_text_preview" id="nd_booking_meta_box_cpt_2_text_preview" value="<?php echo $nd_booking_meta_box_cpt_2_text_preview ?>" /></p>
                    <p><?php _e('Insert the text preview which will be visible in the preview of the service','nd-booking'); ?></p>
                </div>

            </div>
            
            <div id="nd_booking_tab_additional_service">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Price','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_cpt_2_price" id="nd_booking_meta_box_cpt_2_price" value="<?php echo $nd_booking_meta_box_cpt_2_price ?>" /></p>
                    <p><?php _e('Insert the price ( only number )','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Price Type 1','nd-booking'); ?></strong></p>
                    <p>

                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_cpt_2_price_type_1" id="nd_booking_meta_box_cpt_2_price_type_1">
    
                        <option <?php if( $nd_booking_meta_box_cpt_2_price_type_1 == 'nd_booking_price_type_person' ) { echo 'selected="selected"'; } ?> value="nd_booking_price_type_person"><?php _e('Person','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_2_price_type_1 == 'nd_booking_price_type_room' ) { echo 'selected="selected"'; } ?> value="nd_booking_price_type_room"><?php _e('Room','nd-booking'); ?></option>
                         
                      </select>

                    </p>
                    <p><?php _e('Set the type of the price','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Price Type 2','nd-booking'); ?></strong></p>
                    <p>

                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_cpt_2_price_type_2" id="nd_booking_meta_box_cpt_2_price_type_2">
    
                        <option <?php if( $nd_booking_meta_box_cpt_2_price_type_2 == 'nd_booking_price_type_day' ) { echo 'selected="selected"'; } ?> value="nd_booking_price_type_day"><?php _e('Day','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_2_price_type_2 == 'nd_booking_price_type_trip' ) { echo 'selected="selected"'; } ?> value="nd_booking_price_type_trip"><?php _e('Trip','nd-booking'); ?></option>
                         
                      </select>

                    </p>
                    <p><?php _e('Set the type of the price','nd-booking'); ?></p>
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


add_action( 'save_post', 'nd_booking_meta_box_save_cpt_2' );
function nd_booking_meta_box_save_cpt_2( $post_id )
{

    //main settings
    if( isset( $_POST['nd_booking_meta_box_cpt_2_service_type'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_service_type', wp_kses( $_POST['nd_booking_meta_box_cpt_2_service_type'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_2_icon'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_icon', wp_kses( $_POST['nd_booking_meta_box_cpt_2_icon'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_2_color'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_color', wp_kses( $_POST['nd_booking_meta_box_cpt_2_color'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_2_text_preview'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_text_preview', wp_kses( $_POST['nd_booking_meta_box_cpt_2_text_preview'], $allowed ) );
    
    //additional service
    if( isset( $_POST['nd_booking_meta_box_cpt_2_price'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_price', wp_kses( $_POST['nd_booking_meta_box_cpt_2_price'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_2_price_type_1'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_price_type_1', wp_kses( $_POST['nd_booking_meta_box_cpt_2_price_type_1'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_2_price_type_2'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_2_price_type_2', wp_kses( $_POST['nd_booking_meta_box_cpt_2_price_type_2'], $allowed ) );

}