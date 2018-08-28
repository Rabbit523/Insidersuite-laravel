<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////

//add image size
if ( function_exists( 'add_image_size' ) ) {  
    add_image_size( 'nd_booking_image_size_1110_570', 1110, 570, true ); 
    add_image_size( 'nd_booking_image_size_720_720', 720, 720, true ); 
}


add_action( 'add_meta_boxes', 'nd_booking_box_add' );
function nd_booking_box_add() {
    add_meta_box( 'nd_booking_metabox_cpt_1', __('Metabox','nd-booking'), 'nd_booking_meta_box', 'nd_booking_cpt_1', 'normal', 'high' );
}

function nd_booking_meta_box()
{

    //iris color picker
    wp_enqueue_script('iris');

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    //jquery-ui-autocomplete
    wp_enqueue_script('jquery-ui-autocomplete');


    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_booking_values = get_post_custom( $post->ID );
     

    //main settings
    $nd_booking_meta_box_max_people = get_post_meta( get_the_ID(), 'nd_booking_meta_box_max_people', true );
    $nd_booking_meta_box_room_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_size', true );
    $nd_booking_meta_box_color = get_post_meta( get_the_ID(), 'nd_booking_meta_box_color', true );
    $nd_booking_meta_box_text_preview = get_post_meta( get_the_ID(), 'nd_booking_meta_box_text_preview', true );
    $nd_booking_meta_box_branches = get_post_meta( get_the_ID(), 'nd_booking_meta_box_branches', true );
    $nd_booking_meta_box_qnt = get_post_meta( get_the_ID(), 'nd_booking_meta_box_qnt', true );
    $nd_booking_meta_box_min_booking_day = get_post_meta( get_the_ID(), 'nd_booking_meta_box_min_booking_day', true );

    //price settings
    $nd_booking_meta_box_price = get_post_meta( get_the_ID(), 'nd_booking_meta_box_price', true );
    $nd_booking_meta_box_week_price_mon = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_mon', true ); if ( $nd_booking_meta_box_week_price_mon == '' ) { $nd_booking_meta_box_week_price_mon = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_tue = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_tue', true ); if ( $nd_booking_meta_box_week_price_tue == '' ) { $nd_booking_meta_box_week_price_tue = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_wed = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_wed', true ); if ( $nd_booking_meta_box_week_price_wed == '' ) { $nd_booking_meta_box_week_price_wed = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_thu = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_thu', true ); if ( $nd_booking_meta_box_week_price_thu == '' ) { $nd_booking_meta_box_week_price_thu = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_fri = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_fri', true ); if ( $nd_booking_meta_box_week_price_fri == '' ) { $nd_booking_meta_box_week_price_fri = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_sat = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_sat', true ); if ( $nd_booking_meta_box_week_price_sat == '' ) { $nd_booking_meta_box_week_price_sat = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_week_price_sun = get_post_meta( get_the_ID(), 'nd_booking_meta_box_week_price_sun', true ); if ( $nd_booking_meta_box_week_price_sun == '' ) { $nd_booking_meta_box_week_price_sun = $nd_booking_meta_box_price; }
    $nd_booking_meta_box_min_price = get_post_meta( get_the_ID(), 'nd_booking_meta_box_min_price', true );

    //services
    $nd_booking_meta_box_normal_services = get_post_meta( get_the_ID(), 'nd_booking_meta_box_normal_services', true );
    $nd_booking_meta_box_additional_services = get_post_meta( get_the_ID(), 'nd_booking_meta_box_additional_services', true );

    //exceptions
    $nd_booking_meta_box_exceptions = get_post_meta( get_the_ID(), 'nd_booking_meta_box_exceptions', true );
    $nd_booking_meta_box_exceptions_block = get_post_meta( get_the_ID(), 'nd_booking_meta_box_exceptions_block', true );

    //page settings
    $nd_booking_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_position', true );
    $nd_booking_meta_box_image = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image', true );
    $nd_booking_meta_box_page_layout = get_post_meta( get_the_ID(), 'nd_booking_meta_box_page_layout', true );
    $nd_booking_meta_box_featured_image_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_featured_image_size', true );
    $nd_booking_meta_box_featured_image_replace = get_post_meta( get_the_ID(), 'nd_booking_meta_box_featured_image_replace', true );

    //packages and similar rooms
    $nd_booking_meta_box_title_packages = get_post_meta( get_the_ID(), 'nd_booking_meta_box_title_packages', true );
    $nd_booking_meta_box_packages = get_post_meta( get_the_ID(), 'nd_booking_meta_box_packages', true );
    $nd_booking_meta_box_packages_image_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_packages_image_size', true );
    $nd_booking_meta_box_similar_rooms = get_post_meta( get_the_ID(), 'nd_booking_meta_box_similar_rooms', true );


    $nd_booking_packages_enable = get_option('nd_booking_packages_enable'); 
    if ( $nd_booking_packages_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_pack_class = ''; }else{ $nd_booking_pack_class = 'nd_booking_display_none'; }
    $nd_booking_similar_rooms_enable = get_option('nd_booking_similar_rooms_enable'); 
    if ( $nd_booking_similar_rooms_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_s_room_class = ''; }else{ $nd_booking_s_room_class = 'nd_booking_display_none'; }
    if ( $nd_booking_pack_class == 'nd_booking_display_none' and $nd_booking_s_room_class == 'nd_booking_display_none' ) { ?> <style> #nd_booking_tab_sim_rooms { display: none; }</style> <?php } 
    
    ?>



    <div id="nd_booking_id_metabox_cpt">
        <ul>
            <li><a href="#nd_booking_tab_main"><span class="dashicons-before dashicons-admin-settings nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Main Settings','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_price"><span class="dashicons-before dashicons-admin-multisite nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Price Settings','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_services"><span class="dashicons-before dashicons-star-filled nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Services','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_exceptions"><span class="dashicons-before dashicons-calendar-alt nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Exceptions','nd-booking'); ?></a></li>
            <li><a href="#nd_booking_tab_page"><span class="dashicons-before dashicons-format-aside nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Page Settings','nd-booking'); ?></a></li>
            <li id="nd_booking_tab_sim_rooms"><a href="#nd_booking_tab_similar_rooms"><span class="dashicons-before dashicons-plus nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span><?php _e('Packages And Rooms','nd-booking'); ?></a></li>

            <?php do_action("nd_booking_single_cpt_1_tab_list"); ?>

        </ul>
        
        <div class="nd_booking_id_metabox_cpt_content">
            <div id="nd_booking_tab_main">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('MAX People','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_max_people" id="nd_booking_meta_box_max_people" value="<?php echo $nd_booking_meta_box_max_people ?>" /></p>
                    <p><?php _e('Insert the max people number of your room ( only number )','nd-booking'); ?></p>
                </div>
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Room Size','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_room_size" id="nd_booking_meta_box_room_size" value="<?php echo $nd_booking_meta_box_room_size ?>" /></p>
                    <p><?php _e('Insert the room size ( only number ), unit of measure can be sets on plugin options','nd-booking'); ?></p>
                </div>
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Color','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" id="nd_booking_colorpicker" type="text" name="nd_booking_meta_box_color" value="<?php echo $nd_booking_meta_box_color; ?>" /></p>
                    <p><?php _e('Set room color','nd-booking'); ?></p>
                </div>
                <script type="text/javascript">
                  //<![CDATA[
                  
                  jQuery(document).ready(function($){
                      $('#nd_booking_colorpicker').iris();
                  });

                  //]]>
                </script>
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Text Preview','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_text_preview" id="nd_booking_meta_box_text_preview" value="<?php echo $nd_booking_meta_box_text_preview ?>" /></p>
                    <p><?php _e('Insert the text preview which will be visible on the post grid preview','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Branch','nd-booking'); ?></strong></p>
                    <p>
                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_branches" id="nd_booking_meta_box_branches">
                        <?php 

                          $nd_booking_meta_box_branches = get_post_meta( get_the_ID(), 'nd_booking_meta_box_branches', true );
                          $nd_booking_branches_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_4' );
                          $nd_booking_branches = get_posts($nd_booking_branches_args); 

                          ?>
                        <?php foreach ($nd_booking_branches as $nd_booking_meta_box_branche) : ?>
                            <option 

                            <?php 
                              if( $nd_booking_meta_box_branches == $nd_booking_meta_box_branche->ID ) { 
                                echo 'selected="selected"';
                              } 
                            ?>

                            value="<?php echo $nd_booking_meta_box_branche->ID; ?>">
                                <?php echo $nd_booking_meta_box_branche->post_title; ?>
                            </option>
                        <?php endforeach; ?>
                      </select>
                    </p>
                    <p><?php _e('Select the branch of the room','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_border_bottom_1_solid_eee nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Quantity','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_qnt" id="nd_booking_meta_box_qnt" value="<?php echo $nd_booking_meta_box_qnt ?>" /></p>
                    <p><?php _e('Insert the room quantity ( only number )','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Min Booking Day','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_min_booking_day" id="nd_booking_meta_box_min_booking_day" value="<?php echo $nd_booking_meta_box_min_booking_day ?>" /></p>
                    <p><?php _e('Insert the minimum nights number for make a reservation ( empty value always available ) This field accept only number ( eg: 3 )','nd-booking'); ?></p>
                </div>

                

            </div>
            <div id="nd_booking_tab_price">
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Price','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_price" id="nd_booking_meta_box_price" value="<?php echo $nd_booking_meta_box_price ?>" /></p>
                    <p><?php _e('Insert the price number ( only number ) currency can be sets on plugin options','nd-booking'); ?></p>
                </div>
                
                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_padding_left_0 nd_booking_padding_right_0 nd_booking_box_sizing_border_box">

                    <div class="nd_booking_section  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">
                        <p class="nd_booking_margin_bottom_0"><strong><?php _e('Week Price','nd-booking'); ?></strong></p>
                    </div>

                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_mon" id="nd_booking_meta_box_week_price_mon" value="<?php echo $nd_booking_meta_box_week_price_mon ?>" /></p>
                        <p><?php _e('Monday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_tue" id="nd_booking_meta_box_week_price_tue" value="<?php echo $nd_booking_meta_box_week_price_tue ?>" /></p>
                        <p><?php _e('Tuesday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_wed" id="nd_booking_meta_box_week_price_wed" value="<?php echo $nd_booking_meta_box_week_price_wed ?>" /></p>
                        <p><?php _e('Wednesday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_thu" id="nd_booking_meta_box_week_price_thu" value="<?php echo $nd_booking_meta_box_week_price_thu ?>" /></p>
                        <p><?php _e('Thursday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_fri" id="nd_booking_meta_box_week_price_fri" value="<?php echo $nd_booking_meta_box_week_price_fri ?>" /></p>
                        <p><?php _e('Friday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_sat" id="nd_booking_meta_box_week_price_sat" value="<?php echo $nd_booking_meta_box_week_price_sat ?>" /></p>
                        <p><?php _e('Saturday','nd-booking'); ?></p>
                    </div>
                    <div class="nd_booking_float_left nd_booking_width_14_28_percentage  nd_booking_padding_10 nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                        <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_week_price_sun" id="nd_booking_meta_box_week_price_sun" value="<?php echo $nd_booking_meta_box_week_price_sun ?>" /></p>
                        <p><?php _e('Sunday','nd-booking'); ?></p>
                    </div>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Min Price','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" readonly name="nd_booking_meta_box_min_price" id="nd_booking_meta_box_min_price" value="<?php echo min($nd_booking_meta_box_price,$nd_booking_meta_box_week_price_mon,$nd_booking_meta_box_week_price_tue,$nd_booking_meta_box_week_price_wed,$nd_booking_meta_box_week_price_thu,$nd_booking_meta_box_week_price_fri,$nd_booking_meta_box_week_price_sat,$nd_booking_meta_box_week_price_sun); ?>" /></p>
                    <p><?php _e('This is the minimum night price for this room, this value is calculated by the system','nd-booking'); ?></p>
                </div>


            </div>
            <div id="nd_booking_tab_services">

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Normal Services','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_normal_services" id="nd_booking_meta_box_normal_services" value="<?php echo $nd_booking_meta_box_normal_services ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the normal services previously created in the services section ( separated by comma )','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Additional Services','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_additional_services" id="nd_booking_meta_box_additional_services" value="<?php echo $nd_booking_meta_box_additional_services ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the additional services previously created in the services section ( separated by comma )','nd-booking'); ?></p>
                </div>


                <script type="text/javascript">
                //<![CDATA[

                jQuery(document).ready(function($){
                  var nd_booking_available_services = [ 

                    //start all documents list
                    <?php 

                      $nd_booking_services_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_2' );
                      $nd_booking_services = get_posts($nd_booking_services_args); 

                      foreach ($nd_booking_services as $nd_booking_service) :
                        echo '"'.$nd_booking_service->post_name.'",'; 
                      endforeach;
                      
                    ?>
                    //end all documents list

                  ];
                  function split( val ) {
                    return val.split( /,\s*/ );
                  }
                  function extractLast( term ) {
                    return split( term ).pop();
                  }

                  $( "#nd_booking_meta_box_normal_services,#nd_booking_meta_box_additional_services" )
                    // don't navigate away from the field on tab when selecting an item
                    .on( "keydown", function( event ) {
                      if ( event.keyCode === $.ui.keyCode.TAB &&
                          $( this ).autocomplete( "instance" ).menu.active ) {
                        event.preventDefault();
                      }
                    })
                    .autocomplete({
                      minLength: 0,
                      source: function( request, response ) {
                        // delegate back to autocomplete, but extract the last term
                        response( $.ui.autocomplete.filter(
                          nd_booking_available_services, extractLast( request.term ) ) );
                      },
                      focus: function() {
                        // prevent value inserted on focus
                        return false;
                      },
                      select: function( event, ui ) {
                        var terms = split( this.value );
                        // remove the current input
                        terms.pop();
                        // add the selected item
                        terms.push( ui.item.value );
                        // add placeholder to get the comma-and-space at the end
                        terms.push( "" );
                        this.value = terms.join( "," );
                        return false;
                      }
                    });
                } );

                //]]>
                </script>


            </div>
            <div id="nd_booking_tab_exceptions">

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_border_bottom_1_solid_eee">
                    <p><strong><?php _e('Price Variations','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_exceptions" id="nd_booking_meta_box_exceptions" value="<?php echo $nd_booking_meta_box_exceptions; ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the exceptions previously created in the exceptions section ( separated by comma )','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Block Reservations','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_exceptions_block" id="nd_booking_meta_box_exceptions_block" value="<?php echo $nd_booking_meta_box_exceptions_block; ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the exceptions previously created in the exceptions section ( separated by comma )','nd-booking'); ?></p>
                </div>

                <script type="text/javascript">
                //<![CDATA[

                jQuery(document).ready(function($){
                  var nd_booking_available_exceptions = [ 

                    //start all documents list
                    <?php 

                      $nd_booking_exceptions_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_3' );
                      $nd_booking_exceptions = get_posts($nd_booking_exceptions_args); 

                      foreach ($nd_booking_exceptions as $nd_booking_exception) :

                        $nd_booking_meta_box_cpt_3_exceptions_type = get_post_meta( $nd_booking_exception->ID, 'nd_booking_meta_box_cpt_3_exceptions_type', true );

                        if ( $nd_booking_meta_box_cpt_3_exceptions_type == 'nd_booking_custom_price' ) {
                            echo '"'.$nd_booking_exception->post_name.'",'; 
                        }

                        
                      endforeach;
                      
                    ?>
                    //end all documents list

                  ];
                  function split( val ) {
                    return val.split( /,\s*/ );
                  }
                  function extractLast( term ) {
                    return split( term ).pop();
                  }

                  $( "#nd_booking_meta_box_exceptions" )
                    // don't navigate away from the field on tab when selecting an item
                    .on( "keydown", function( event ) {
                      if ( event.keyCode === $.ui.keyCode.TAB &&
                          $( this ).autocomplete( "instance" ).menu.active ) {
                        event.preventDefault();
                      }
                    })
                    .autocomplete({
                      minLength: 0,
                      source: function( request, response ) {
                        // delegate back to autocomplete, but extract the last term
                        response( $.ui.autocomplete.filter(
                          nd_booking_available_exceptions, extractLast( request.term ) ) );
                      },
                      focus: function() {
                        // prevent value inserted on focus
                        return false;
                      },
                      select: function( event, ui ) {
                        var terms = split( this.value );
                        // remove the current input
                        terms.pop();
                        // add the selected item
                        terms.push( ui.item.value );
                        // add placeholder to get the comma-and-space at the end
                        terms.push( "" );
                        this.value = terms.join( "," );
                        return false;
                      }
                    });
                } );

                //]]>
                </script>



                <script type="text/javascript">
                //<![CDATA[

                jQuery(document).ready(function($){
                  var nd_booking_available_exceptions_block = [ 

                    //start all documents list
                    <?php 

                      $nd_booking_exceptions_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_3' );
                      $nd_booking_exceptions = get_posts($nd_booking_exceptions_args); 

                      foreach ($nd_booking_exceptions as $nd_booking_exception) :

                        $nd_booking_meta_box_cpt_3_exceptions_type = get_post_meta( $nd_booking_exception->ID, 'nd_booking_meta_box_cpt_3_exceptions_type', true );

                        if ( $nd_booking_meta_box_cpt_3_exceptions_type == 'nd_booking_block_dates' ) {
                            echo '"'.$nd_booking_exception->post_name.'",'; 
                        }

                        
                      endforeach;
                      
                    ?>
                    //end all documents list

                  ];
                  function split( val ) {
                    return val.split( /,\s*/ );
                  }
                  function extractLast( term ) {
                    return split( term ).pop();
                  }

                  $( "#nd_booking_meta_box_exceptions_block" )
                    // don't navigate away from the field on tab when selecting an item
                    .on( "keydown", function( event ) {
                      if ( event.keyCode === $.ui.keyCode.TAB &&
                          $( this ).autocomplete( "instance" ).menu.active ) {
                        event.preventDefault();
                      }
                    })
                    .autocomplete({
                      minLength: 0,
                      source: function( request, response ) {
                        // delegate back to autocomplete, but extract the last term
                        response( $.ui.autocomplete.filter(
                          nd_booking_available_exceptions_block, extractLast( request.term ) ) );
                      },
                      focus: function() {
                        // prevent value inserted on focus
                        return false;
                      },
                      select: function( event, ui ) {
                        var terms = split( this.value );
                        // remove the current input
                        terms.pop();
                        // add the selected item
                        terms.push( ui.item.value );
                        // add placeholder to get the comma-and-space at the end
                        terms.push( "" );
                        this.value = terms.join( "," );
                        return false;
                      }
                    });
                } );

                //]]>
                </script>



            </div>


            <div id="nd_booking_tab_page">

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Header Image','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_image" id="nd_booking_meta_box_image" value="<?php echo $nd_booking_meta_box_image ?>" /></p>
                    <input class="button nd_booking_meta_box_image_button" type="button" name="nd_booking_meta_box_image_button" id="nd_booking_meta_box_image_button" value="<?php _e('Upload','nd-booking'); ?>" />
                    <p><?php _e('Insert the header image url','nd-booking'); ?></p>

                    <script type="text/javascript">
                      //<![CDATA[
                          
                      jQuery(document).ready(function() {

                        jQuery( function ( $ ) {

                          var file_frame = [],
                          $button = $( '.nd_booking_meta_box_image_button' );


                          $('#nd_booking_meta_box_image_button').click( function () {


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

                              $('#nd_booking_meta_box_image').val(attachment.url);

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
                      <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_image_position" id="nd_booking_meta_box_image_position">
    
                        <option <?php if( $nd_booking_meta_box_image_position == 'nd_booking_background_position_center' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center"><?php _e('Center','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_image_position == 'nd_booking_background_position_center_top' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center_top"><?php _e('Top','nd-booking'); ?></option>
                        <option <?php if( $nd_booking_meta_box_image_position == 'nd_booking_background_position_center_bottom' ) { echo 'selected="selected"'; } ?> value="nd_booking_background_position_center_bottom"><?php _e('Bottom','nd-booking'); ?></option>
                         
                      </select>
                    </p>
                    <p><?php _e('Select the image position for your header image','nd-booking'); ?></p>
                </div>

                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee  nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Page Layout','nd-booking'); ?></strong></p>
                    <p>
                        
                        <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_page_layout" id="nd_booking_meta_box_page_layout">
    
                            <option <?php if( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_full_width' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_full_width"><?php _e('Full Width','nd-booking'); ?></option>
                            <option <?php if( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_right_sidebar' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_right_sidebar"><?php _e('Right Sidebar','nd-booking'); ?></option>
                            <option <?php if( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_left_sidebar' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_left_sidebar"><?php _e('Left Sidebar','nd-booking'); ?></option>
                            <option <?php if( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_free_content' ) { echo 'selected="selected"'; } ?> value="nd_booking_meta_box_page_layout_free_content"><?php _e('Free Content','nd-booking'); ?></option>

                        </select>

                    </p>
                    <p><?php _e('Select the layout for your room page','nd-booking'); ?></p>
                </div>


                <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Featured Image size','nd-booking'); ?></strong></p>
                    <p>
                        
                        <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_featured_image_size" id="nd_booking_meta_box_featured_image_size">
                            <option <?php if( $nd_booking_meta_box_featured_image_size == 'large' ) { echo 'selected="selected"'; } ?> value="large"><?php _e('Large','nd-booking'); ?></option>
                        <?php

                            $nd_booking_image_sizes = get_intermediate_image_sizes();
                            for ($nd_booking_image_sizes_i = 0; $nd_booking_image_sizes_i < count($nd_booking_image_sizes); $nd_booking_image_sizes_i++) {
                                
                                $nd_booking_image_size = $nd_booking_image_sizes[$nd_booking_image_sizes_i]; ?>

                                <option <?php if( $nd_booking_meta_box_featured_image_size == $nd_booking_image_size ) { echo 'selected="selected"'; } ?> value="<?php echo $nd_booking_image_size; ?>"><?php echo $nd_booking_image_size; ?></option>
                         
                        <?php        
                        }
                        ?>
                        </select>

                    </p>
                    <p><?php _e('Select the image size that you want to use for your featured image','nd-booking'); ?></p>
                </div>


                <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Featured Image Replace','nd-booking'); ?></strong></p>
                    <p><textarea rows="5" class="nd_booking_width_100_percentage" name="nd_booking_meta_box_featured_image_replace" id="nd_booking_meta_box_featured_image_replace"><?php echo $nd_booking_meta_box_featured_image_replace ?></textarea></p>
                    <p><?php _e('Replace the featured image with your custom content','nd-booking'); ?></p>
                </div>

            </div>


            <div id="nd_booking_tab_similar_rooms">

                <div class=" <?php echo $nd_booking_pack_class; ?> nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Title Packages','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_title_packages" id="nd_booking_meta_box_title_packages" value="<?php echo $nd_booking_meta_box_title_packages ?>" /></p>
                    <p><?php _e('Insert the title for your packages section','nd-booking'); ?></p>
                </div>

                <div class=" <?php echo $nd_booking_pack_class; ?> nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Packages','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_packages" id="nd_booking_meta_box_packages" value="<?php echo $nd_booking_meta_box_packages ?>" /></p>
                    <p><?php _e('IThis is an intuitive field, enter the articles previously created in posts section ( separated by comma )','nd-booking'); ?></p>
                </div>

                <div class=" <?php echo $nd_booking_pack_class; ?> nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Packages Image size','nd-booking'); ?></strong></p>
                    <p>
                        
                        <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_packages_image_size" id="nd_booking_meta_box_packages_image_size">
                            <option <?php if( $nd_booking_meta_box_packages_image_size == 'large' ) { echo 'selected="selected"'; } ?> value="large"><?php _e('Large','nd-booking'); ?></option>
                        <?php

                            $nd_booking_image_sizes = get_intermediate_image_sizes();
                            for ($nd_booking_image_sizes_i = 0; $nd_booking_image_sizes_i < count($nd_booking_image_sizes); $nd_booking_image_sizes_i++) {
                                
                                $nd_booking_image_size = $nd_booking_image_sizes[$nd_booking_image_sizes_i]; ?>

                                <option <?php if( $nd_booking_meta_box_packages_image_size == $nd_booking_image_size ) { echo 'selected="selected"'; } ?> value="<?php echo $nd_booking_image_size; ?>"><?php echo $nd_booking_image_size; ?></option>
                         
                        <?php        
                        }
                        ?>
                        </select>

                    </p>
                    <p><?php _e('Select the image size that you want to use for your packages preview image','nd-booking'); ?></p>
                </div>

                <div class=" <?php echo $nd_booking_s_room_class; ?> nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong><?php _e('Similar Rooms','nd-booking'); ?></strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_similar_rooms" id="nd_booking_meta_box_similar_rooms" value="<?php echo $nd_booking_meta_box_similar_rooms ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the rooms previously created in rooms section ( separated by comma )','nd-booking'); ?></p>
                </div>


                <script type="text/javascript">
                  //<![CDATA[

                  jQuery(document).ready(function($){
                    var nd_booking_available_posts = [ 

                      //start all documents list
                      <?php 

                        $nd_booking_posts_args = array( 'posts_per_page' => -1, 'post_type'=> 'post' );
                        $nd_booking_posts = get_posts($nd_booking_posts_args); 

                        foreach ($nd_booking_posts as $nd_booking_post) :
                          echo '"'.$nd_booking_post->post_name.'",'; 
                        endforeach;
                        
                      ?>
                      //end all documents list

                    ];
                    function split( val ) {
                      return val.split( /,\s*/ );
                    }
                    function extractLast( term ) {
                      return split( term ).pop();
                    }

                    $( "#nd_booking_meta_box_packages" )
                      // don't navigate away from the field on tab when selecting an item
                      .on( "keydown", function( event ) {
                        if ( event.keyCode === $.ui.keyCode.TAB &&
                            $( this ).autocomplete( "instance" ).menu.active ) {
                          event.preventDefault();
                        }
                      })
                      .autocomplete({
                        minLength: 0,
                        source: function( request, response ) {
                          // delegate back to autocomplete, but extract the last term
                          response( $.ui.autocomplete.filter(
                            nd_booking_available_posts, extractLast( request.term ) ) );
                        },
                        focus: function() {
                          // prevent value inserted on focus
                          return false;
                        },
                        select: function( event, ui ) {
                          var terms = split( this.value );
                          // remove the current input
                          terms.pop();
                          // add the selected item
                          terms.push( ui.item.value );
                          // add placeholder to get the comma-and-space at the end
                          terms.push( "" );
                          this.value = terms.join( "," );
                          return false;
                        }
                      });
                  } );

                  //]]>
                  </script>


                  <script type="text/javascript">
                    //<![CDATA[

                    jQuery(document).ready(function($){
                      var nd_booking_available_rooms = [ 

                        //start all documents list
                        <?php 

                          $nd_booking_rooms_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_1' );
                          $nd_booking_rooms = get_posts($nd_booking_rooms_args); 

                          foreach ($nd_booking_rooms as $nd_booking_room) :
                            echo '"'.$nd_booking_room->post_name.'",'; 
                          endforeach;
                          
                        ?>
                        //end all documents list

                      ];
                      function split( val ) {
                        return val.split( /,\s*/ );
                      }
                      function extractLast( term ) {
                        return split( term ).pop();
                      }

                      $( "#nd_booking_meta_box_similar_rooms" )
                        // don't navigate away from the field on tab when selecting an item
                        .on( "keydown", function( event ) {
                          if ( event.keyCode === $.ui.keyCode.TAB &&
                              $( this ).autocomplete( "instance" ).menu.active ) {
                            event.preventDefault();
                          }
                        })
                        .autocomplete({
                          minLength: 0,
                          source: function( request, response ) {
                            // delegate back to autocomplete, but extract the last term
                            response( $.ui.autocomplete.filter(
                              nd_booking_available_rooms, extractLast( request.term ) ) );
                          },
                          focus: function() {
                            // prevent value inserted on focus
                            return false;
                          },
                          select: function( event, ui ) {
                            var terms = split( this.value );
                            // remove the current input
                            terms.pop();
                            // add the selected item
                            terms.push( ui.item.value );
                            // add placeholder to get the comma-and-space at the end
                            terms.push( "" );
                            this.value = terms.join( "," );
                            return false;
                          }
                        });
                    } );

                    //]]>
                    </script>


            </div>



            <?php do_action("nd_booking_single_cpt_1_tab_content"); ?>



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


add_action( 'save_post', 'nd_booking_meta_box_save' );
function nd_booking_meta_box_save( $post_id )
{

    //main settings
    if( isset( $_POST['nd_booking_meta_box_max_people'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_max_people', wp_kses( $_POST['nd_booking_meta_box_max_people'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_room_size'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_room_size', wp_kses( $_POST['nd_booking_meta_box_room_size'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_color'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_color', wp_kses( $_POST['nd_booking_meta_box_color'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_text_preview'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_text_preview', wp_kses( $_POST['nd_booking_meta_box_text_preview'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_branches'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_branches', wp_kses( $_POST['nd_booking_meta_box_branches'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_qnt'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_qnt', wp_kses( $_POST['nd_booking_meta_box_qnt'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_min_booking_day'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_min_booking_day', wp_kses( $_POST['nd_booking_meta_box_min_booking_day'], $allowed ) );

    //price settings
    if( isset( $_POST['nd_booking_meta_box_price'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_price', wp_kses( $_POST['nd_booking_meta_box_price'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_mon'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_mon', wp_kses( $_POST['nd_booking_meta_box_week_price_mon'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_tue'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_tue', wp_kses( $_POST['nd_booking_meta_box_week_price_tue'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_wed'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_wed', wp_kses( $_POST['nd_booking_meta_box_week_price_wed'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_thu'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_thu', wp_kses( $_POST['nd_booking_meta_box_week_price_thu'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_fri'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_fri', wp_kses( $_POST['nd_booking_meta_box_week_price_fri'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_sat'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_sat', wp_kses( $_POST['nd_booking_meta_box_week_price_sat'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_week_price_sun'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_week_price_sun', wp_kses( $_POST['nd_booking_meta_box_week_price_sun'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_min_price'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_min_price', wp_kses( $_POST['nd_booking_meta_box_min_price'], $allowed ) );

    //services
    if( isset( $_POST['nd_booking_meta_box_normal_services'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_normal_services', wp_kses( $_POST['nd_booking_meta_box_normal_services'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_additional_services'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_additional_services', wp_kses( $_POST['nd_booking_meta_box_additional_services'], $allowed ) );

    //exceptions
    if( isset( $_POST['nd_booking_meta_box_exceptions'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_exceptions', wp_kses( $_POST['nd_booking_meta_box_exceptions'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_exceptions_block'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_exceptions_block', wp_kses( $_POST['nd_booking_meta_box_exceptions_block'], $allowed ) );

    //page settings
    if( isset( $_POST['nd_booking_meta_box_image'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_image', wp_kses( $_POST['nd_booking_meta_box_image'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_image_position'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_image_position', wp_kses( $_POST['nd_booking_meta_box_image_position'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_page_layout'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_page_layout', wp_kses( $_POST['nd_booking_meta_box_page_layout'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_featured_image_size'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_featured_image_size', wp_kses( $_POST['nd_booking_meta_box_featured_image_size'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_featured_image_replace'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_featured_image_replace', wp_kses( $_POST['nd_booking_meta_box_featured_image_replace'], $allowed ) );

    //packages and similar rooms
    if( isset( $_POST['nd_booking_meta_box_title_packages'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_title_packages', wp_kses( $_POST['nd_booking_meta_box_title_packages'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_packages'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_packages', wp_kses( $_POST['nd_booking_meta_box_packages'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_packages_image_size'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_packages_image_size', wp_kses( $_POST['nd_booking_meta_box_packages_image_size'], $allowed ) );
    if( isset( $_POST['nd_booking_meta_box_similar_rooms'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_similar_rooms', wp_kses( $_POST['nd_booking_meta_box_similar_rooms'], $allowed ) );

    //ids
    if( isset( $_POST['nd_booking_post_id_room'] ) ) update_post_meta( $post_id, 'nd_booking_post_id_room', wp_kses( $_POST['nd_booking_post_id_room'], $allowed ) );
    if( isset( $_POST['nd_booking_id_room'] ) ) update_post_meta( $post_id, 'nd_booking_id_room', wp_kses( $_POST['nd_booking_id_room'], $allowed ) );
    

}