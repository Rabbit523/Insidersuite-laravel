<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////


add_action( 'add_meta_boxes', 'nd_booking_box_add_cpt_4' );
function nd_booking_box_add_cpt_4() {
    add_meta_box( 'nd_booking_metabox_cpt_4', __('Metabox','nd-booking'), 'nd_booking_meta_box_cpt_4', 'nd_booking_cpt_4', 'normal', 'high' );
}

function nd_booking_meta_box_cpt_4()
{

    //iris color picker
    wp_enqueue_script('iris');

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_booking_values = get_post_custom( $post->ID );

    //main settings
    $nd_booking_meta_box_cpt_4_phone = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_phone', true );
    $nd_booking_meta_box_cpt_4_address = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_address', true );
    $nd_booking_meta_box_cpt_4_city = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_city', true );
    $nd_booking_meta_box_cpt_4_state = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_state', true );
    $nd_booking_meta_box_cpt_4_email = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_email', true );
    $nd_booking_meta_box_cpt_4_color = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_color', true );
    $nd_booking_meta_box_cpt_4_stars = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_stars', true );

    //page settings
    $nd_booking_meta_box_image_cpt_4 = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_cpt_4', true );
    $nd_booking_meta_box_image_cpt_4_position = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_cpt_4_position', true );
    $nd_booking_meta_box_page_layout_cpt_4 = get_post_meta( get_the_ID(), 'nd_booking_meta_box_page_layout_cpt_4', true );


    ?>



    <div id="nd_booking_id_metabox_cpt">
        <ul>
            <li><a href="#nd_booking_tab_main"><span class="dashicons-before dashicons-admin-settings nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Main Settings','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_page"><span class="dashicons-before dashicons-format-aside nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Page Settings','nd-booking'); ?></a></li>
        </ul>
        
        <div class="nd_booking_id_metabox_cpt_content">
            <div id="nd_booking_tab_main">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Phone','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_meta_box_cpt_4_phone" type="text" name="nd_booking_meta_box_cpt_4_phone" value="<?php echo $nd_booking_meta_box_cpt_4_phone; ?>" /></p>
                    <p><?php _e('Insert phone','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Address','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_meta_box_cpt_4_address" type="text" name="nd_booking_meta_box_cpt_4_address" value="<?php echo $nd_booking_meta_box_cpt_4_address; ?>" /></p>
                    <p><?php _e('Insert address','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('City','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_meta_box_cpt_4_city" type="text" name="nd_booking_meta_box_cpt_4_city" value="<?php echo $nd_booking_meta_box_cpt_4_city; ?>" /></p>
                    <p><?php _e('Insert city','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('State','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_meta_box_cpt_4_state" type="text" name="nd_booking_meta_box_cpt_4_state" value="<?php echo $nd_booking_meta_box_cpt_4_state; ?>" /></p>
                    <p><?php _e('Insert state','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Email','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_meta_box_cpt_4_email" type="text" name="nd_booking_meta_box_cpt_4_email" value="<?php echo $nd_booking_meta_box_cpt_4_email; ?>" /></p>
                    <p><?php _e('Insert the email','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Color','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_colorpicker" type="text" name="nd_booking_meta_box_cpt_4_color" value="<?php echo $nd_booking_meta_box_cpt_4_color; ?>" /></p>
                    <p><?php _e('Insert the color','nd-booking'); ?></p>
                </div>
                
                <script type="text/javascript">
                  //<![CDATA[
                  
                  jQuery(document).ready(function($){
                      $('#nd_booking_colorpicker').iris();
                  });

                  //]]>
                </script>

                <div class="nd_booking_section  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Stars','nd-booking'); ?></strong></p>
                    <p>

                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_cpt_4_stars" id="nd_booking_meta_box_cpt_4_stars">
    
                        <option <?php if( $nd_booking_meta_box_cpt_4_stars == '5' ) { echo 'selected="selected"'; } ?> value="5"><?php _e('5 Stars','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_4_stars == '4' ) { echo 'selected="selected"'; } ?> value="4"><?php _e('4 Stars','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_4_stars == '3' ) { echo 'selected="selected"'; } ?> value="3"><?php _e('3 Stars','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_4_stars == '2' ) { echo 'selected="selected"'; } ?> value="2"><?php _e('2 Stars','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_cpt_4_stars == '1' ) { echo 'selected="selected"'; } ?> value="1"><?php _e('1 Star','nd-booking'); ?></option>
                         
                      </select>

                    </p>
                    <p><?php _e('Set the stars','nd-booking'); ?></p>
                </div>


            </div>




            <div id="nd_booking_tab_page">

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Header Image','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_image_cpt_4" id="nd_booking_meta_box_image_cpt_4" value="<?php echo $nd_booking_meta_box_image_cpt_4 ?>" /></p>
                    <input class="button nd_booking_meta_box_image_cpt_4_button" type="button" name="nd_booking_meta_box_image_cpt_4_button" id="nd_booking_meta_box_image_cpt_4_button" value="<?php _e('Upload','nd-booking'); ?>" />
                    <p><?php _e('Insert the header image url','nd-booking'); ?></p>

                    <script type="text/javascript">
                      //<![CDATA[
                          
                      jQuery(document).ready(function() {

                        jQuery( function ( $ ) {

                          var file_frame = [],
                          $button = $( '.nd_booking_meta_box_image_cpt_4_button' );


                          $('#nd_booking_meta_box_image_cpt_4_button').click( function () {


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

                              $('#nd_booking_meta_box_image_cpt_4').val(attachment.url);

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
                    <p><strong><?php _e('Image Position','nd-booking'); ?></strong></p>
                    <p>
                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_image_cpt_4_position" id="nd_booking_meta_box_image_cpt_4_position">
    
                        <option <?php if( $nd_booking_meta_box_image_cpt_4_position == 'nd_booking_background_position_center' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center"><?php _e('Center','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_image_cpt_4_position == 'nd_booking_background_position_center_top' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center_top"><?php _e('Top','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_image_cpt_4_position == 'nd_booking_background_position_center_bottom' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center_bottom"><?php _e('Bottom','nd-booking'); ?></option>
                         
                      </select>
                    </p>
                    <p><?php _e('Select the image position for your header image','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Page Layout','nd-booking'); ?></strong></p>
                    <p>
                        
                        <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_page_layout_cpt_4" id="nd_booking_meta_box_page_layout_cpt_4">
    
                            <option <?php if( $nd_booking_meta_box_page_layout_cpt_4 == 'nd_booking_meta_box_page_layout_cpt_4_full_width' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_cpt_4_full_width"><?php _e('Default Layout','nd-booking'); ?></option>
                            <option <?php if( $nd_booking_meta_box_page_layout_cpt_4 == 'nd_booking_meta_box_page_layout_cpt_4_free_content' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_cpt_4_free_content"><?php _e('Free Content','nd-booking'); ?></option>

                        </select>

                    </p>
                    <p><?php _e('Select the layout for your room page','nd-booking'); ?></p>
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


add_action( 'save_post', 'nd_booking_meta_box_save_cpt_4' );
function nd_booking_meta_box_save_cpt_4( $post_id )
{

    //main settings
    if( isset( $_POST['nd_booking_meta_box_cpt_4_phone'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_phone', wp_kses( $_POST['nd_booking_meta_box_cpt_4_phone'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_address'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_address', wp_kses( $_POST['nd_booking_meta_box_cpt_4_address'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_city'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_city', wp_kses( $_POST['nd_booking_meta_box_cpt_4_city'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_state'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_state', wp_kses( $_POST['nd_booking_meta_box_cpt_4_state'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_email'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_email', wp_kses( $_POST['nd_booking_meta_box_cpt_4_email'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_color'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_color', wp_kses( $_POST['nd_booking_meta_box_cpt_4_color'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_cpt_4_stars'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_cpt_4_stars', wp_kses( $_POST['nd_booking_meta_box_cpt_4_stars'], $allowed ) );

    //page settings
    if( isset( $_POST['nd_booking_meta_box_image_cpt_4'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_image_cpt_4', wp_kses( $_POST['nd_booking_meta_box_image_cpt_4'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_image_cpt_4_position'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_image_cpt_4_position', wp_kses( $_POST['nd_booking_meta_box_image_cpt_4_position'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_page_layout_cpt_4'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_page_layout_cpt_4', wp_kses( $_POST['nd_booking_meta_box_page_layout_cpt_4'], $allowed ) );

}