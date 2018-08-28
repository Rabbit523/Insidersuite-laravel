<?php


add_action('admin_menu','nd_booking_add_settings_menu_add_orders');
function nd_booking_add_settings_menu_add_orders(){

  add_submenu_page( 'nd-booking-settings','Add Orders', __('Add New Order','nd-booking'), 'manage_options', 'nd-booking-settings-add-orders', 'nd_booking_settings_menu_add_orders' );

}


function nd_booking_settings_menu_add_orders() { ?>


  <?php if ( isset($_POST['nd_booking_add_order_page']) ) { ?>

    <?php

    //get datas
    $nd_booking_id_room = $_POST['nd_booking_add_order_room_id'];
    $nd_booking_title_room = get_the_title($nd_booking_id_room);
    $nd_booking_date = date('H:m:s F j Y');
    $nd_booking_booking_form_date_from = $_POST['nd_booking_add_order_date_from'];
    $nd_booking_booking_form_date_to = $_POST['nd_booking_add_order_date_to'];
    $nd_booking_booking_form_guests = $_POST['nd_booking_add_order_guests'];
    $nd_booking_booking_form_final_price = $_POST['nd_booking_add_order_final_price'];
    $nd_booking_current_user_id = 0;
    $nd_booking_booking_form_currency = nd_booking_get_currency();
    $nd_booking_paypal_tx = rand(100000000,999999999);
    $nd_booking_booking_form_name = $_POST['nd_booking_add_order_name'];
    $nd_booking_booking_form_surname = $_POST['nd_booking_add_order_surname'];
    $nd_booking_booking_form_email = $_POST['nd_booking_add_order_email'];
    $nd_booking_booking_form_phone = $_POST['nd_booking_add_order_phone'];
    $nd_booking_booking_form_address = $_POST['nd_booking_add_order_address'];
    $nd_booking_booking_form_zip = $_POST['nd_booking_add_order_zip'];
    $nd_booking_booking_form_city = $_POST['nd_booking_add_order_city'];
    $nd_booking_booking_form_country = $_POST['nd_booking_add_order_country'];
    $nd_booking_booking_form_requests = $_POST['nd_booking_add_order_requests'];
    $nd_booking_booking_form_arrival = $_POST['nd_booking_add_order_arrival'];
    $nd_booking_booking_form_payment_status = $_POST['nd_booking_add_order_payment_status'];
    $nd_booking_booking_form_action_type = $_POST['nd_booking_add_order_action_type'];
    $nd_booking_booking_form_coupon = '';
    $nd_booking_booking_form_extra_services = $_POST['nd_booking_add_order_services'];

    
    //insert order in db
    nd_booking_add_booking_in_db(
  
      $nd_booking_id_room,
      $nd_booking_title_room,
      $nd_booking_date,
      $nd_booking_booking_form_date_from,
      $nd_booking_booking_form_date_to,
      $nd_booking_booking_form_guests,
      $nd_booking_booking_form_final_price,
      $nd_booking_booking_form_extra_services,
      $nd_booking_current_user_id,
      $nd_booking_booking_form_name,
      $nd_booking_booking_form_surname,
      $nd_booking_booking_form_email,
      $nd_booking_booking_form_phone,
      $nd_booking_booking_form_address.' '.$nd_booking_booking_form_zip,
      $nd_booking_booking_form_city,
      $nd_booking_booking_form_country,
      $nd_booking_booking_form_requests,
      $nd_booking_booking_form_arrival,
      $nd_booking_booking_form_coupon,
      $nd_booking_booking_form_payment_status,
      $nd_booking_booking_form_currency,
      $nd_booking_paypal_tx,
      $nd_booking_booking_form_action_type

    );

    ?>


    <style>
      .update-nag { display:none; } 
    </style>


    <div style="margin-top:20px;" id="setting-error-settings_updated" class="updated settings-error notice is-dismissible nd_booking_margin_left_0_important nd_booking_margin_bottom_20_important"> 
      <p>
        <strong><?php _e('Order Added','nd-booking'); ?></strong>
      </p>
      <button type="button" class="notice-dismiss">
        <span class="screen-reader-text"><?php _e('Dismiss this notice.','nd-booking'); ?></span>
      </button>
    </div>




  <?php }else{ ?>



    <?php

      wp_enqueue_script( 'nd_booking_add_order_val', plugins_url() . '/nd-booking/inc/admin/orders/include/js/nd_booking_add_order_validation.js', array( 'jquery' ) ); 

      wp_localize_script( 'nd_booking_add_order_val', 'nd_booking_my_vars_add_order_val', array( 'nd_booking_ajaxurl_add_order_val'   => admin_url( 'admin-ajax.php' )) ); 

    ?>


    <style>
    .nd_booking_validation_errors{
      background-color: #cb4a21;
      float: left;
      color: #fff;
    }
    .nd_booking_validation_errors span{
      padding: 2px 5px;
      display: inline-block;
    }

    #nd_booking_add_order_check_availability_btn{
      background: #32373d;
      border-color: #24282e #24282e #24282e;
      box-shadow: 0 1px 0 #32373d;
      text-shadow: 0 -1px 1px #24282e, 1px 0 1px #24282e, 0 1px 1px #32373d, -1px 0 1px #24282e;  
    }

    </style>


    <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25 ">

      <form style="max-width: 800px;" class="nd_booking_float_left" method="POST">

        <div class="nd_booking_section">

          <input type="hidden" name="nd_booking_add_order_page" value="1">

          <!--1-->
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Main Informations','nd-booking') ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Reservation datas','nd-booking') ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select id="nd_booking_add_order_room_id" class="nd_booking_width_100_percentage" name="nd_booking_add_order_room_id" id="">
              <?php 

                $nd_booking_rooms_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_1' );
                $nd_booking_rooms = get_posts($nd_booking_rooms_args); 

                ?>
              <?php foreach ($nd_booking_rooms as $nd_booking_room) : ?>
                  <option value="<?php echo $nd_booking_room->ID; ?>">
                      <?php echo $nd_booking_room->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>

            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Room','nd-booking') ?> *</strong></p>
            <div class="nd_booking_section nd_booking_height_20"></div>
            <div class="nd_booking_section nd_booking_height_10"></div>

            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_date_from">
              <input id="nd_booking_add_order_date_from" class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_date_from" value="" placeholder="yyyy/mm/dd">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Date From','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_date_to">
              <input id="nd_booking_add_order_date_to" class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_date_to" value="" placeholder="yyyy/mm/dd">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Date to','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>

            <div class="nd_booking_validation_errors_from_to">
              <div class="nd_booking_validation_errors"></div>
            </div>
            <div class="nd_booking_validation_availability">
              <div class="nd_booking_validation_errors"></div>
            </div>
            
            
            <div class="nd_booking_section nd_booking_height_20"></div>
            <div class="nd_booking_section nd_booking_height_10"></div>


            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_guests">
              <input id="nd_booking_add_order_guests" class="nd_booking_width_100_percentage" type="number" name="nd_booking_add_order_guests" value="">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('N Guests','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_final_price">
              <input id="nd_booking_add_order_final_price" class="nd_booking_width_100_percentage" type="number" name="nd_booking_add_order_final_price" value="">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Final Price','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>


        </div>
        <!--END 1-->

        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

        
        <!--2-->
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Customer Datas','nd-booking') ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Main details','nd-booking') ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            

            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_name">
              <input id="nd_booking_add_order_name" class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_name" value="">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Name','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_surname">
              <input id="nd_booking_add_order_surname" class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_surname" value="">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Surname','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>

            <div class="nd_booking_section nd_booking_height_20"></div>
            <div class="nd_booking_section nd_booking_height_10"></div>

            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box nd_booking_add_order_email">
              <input id="nd_booking_add_order_email" class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_email" value="">
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Email','nd-booking') ?> *</strong></p>
              <div class="nd_booking_validation_errors"></div>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_phone" value="">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Phone','nd-booking') ?></strong></p>
            </div>

            <div class="nd_booking_section nd_booking_height_20"></div>
            <div class="nd_booking_section nd_booking_height_10"></div>

            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_address" value="">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Address','nd-booking') ?></strong></p>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_city" value="">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('City','nd-booking') ?></strong></p>
            </div>

            <div class="nd_booking_section nd_booking_height_20"></div>
            <div class="nd_booking_section nd_booking_height_10"></div>


            <div style="padding-right:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_country" value="">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Country','nd-booking') ?></strong></p>
            </div>
            <div style="padding-left:10px;" class="nd_booking_float_left nd_booking_width_50_percentage nd_booking_box_sizing_border_box">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_add_order_zip" value="">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Zip','nd-booking') ?></strong></p>
            </div>


        </div>
        <!--END 2-->


        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--3-->
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Order Details','nd-booking') ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Additional Informations','nd-booking') ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            
              <?php 

                $nd_booking_services_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_2' );
                $nd_booking_services = get_posts($nd_booking_services_args); 

              ?>
              <?php foreach ($nd_booking_services as $nd_booking_service) : ?>

                  <?php 
                    
                    $nd_booking_meta_box_cpt_2_service_type = get_post_meta( $nd_booking_service->ID, 'nd_booking_meta_box_cpt_2_service_type', true ); 
                    if ( $nd_booking_meta_box_cpt_2_service_type == 'nd_booking_normal_service' ) {
                      $nd_booking_add_order_service_class = 'nd_booking_display_none';
                    }else{
                      $nd_booking_add_order_service_class = '';
                    }

                  ?>

                  <div class="<?php echo $nd_booking_add_order_service_class; ?> nd_booking_width_33_percentage nd_booking_float_left">
                   <input class="nd_booking_booking_checkbox_service" name="nd_booking_add_order_service_<?php echo $nd_booking_service->ID; ?>" type="checkbox" value="<?php echo $nd_booking_service->ID; ?>,">
                   <p class="nd_booking_color_666666 nd_booking_display_inline_block nd_booking_margin_0 nd_booking_padding_0"><?php echo $nd_booking_service->post_title; ?></p>
                   <div class="nd_booking_section nd_booking_height_10"></div>
                 </div>

              <?php endforeach; ?>

              <input type="hidden" id="nd_booking_booking_checkbox_services" name="nd_booking_add_order_services" readonly value="">

              <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function() {

                jQuery( function ( $ ) {

                    $( ".nd_booking_booking_checkbox_service" ).change(function() {

                        if ( $( this ).is( ":checked" ) ) {

                            var nd_booking_service_value = $( this ).val();
                            var nd_booking_service_previous_value = $("#nd_booking_booking_checkbox_services").val();
                            $( "#nd_booking_booking_checkbox_services" ).val( nd_booking_service_value+nd_booking_service_previous_value );

                        }else{

                            var nd_booking_service_value = $( this ).val();
                            var nd_booking_service_previous_value = $("#nd_booking_booking_checkbox_services").val();
                            var nd_booking_booking_checkbox_services = nd_booking_service_previous_value.replace(nd_booking_service_value, "");
                            $( "#nd_booking_booking_checkbox_services" ).val( nd_booking_booking_checkbox_services );

                        }

                        
                    });

                });

              });
              //]]>
            </script>



            
              <div class="nd_booking_section nd_booking_height_20"></div>
              <div class="nd_booking_section nd_booking_height_10"></div>

              

              <select class="nd_booking_width_100_percentage" name="nd_booking_add_order_arrival" id="">
                <option><?php _e('I do not know','nd-booking'); ?></option>
                <option>12:00 - 1:00 <?php _e('am','nd-booking'); ?></option>
                <option>1:00 - 2:00 <?php _e('am','nd-booking'); ?></option>
                <option>2:00 - 3:00 <?php _e('am','nd-booking'); ?></option>
                <option>3:00 - 4:00 <?php _e('am','nd-booking'); ?></option>
                <option>4:00 - 5:00 <?php _e('am','nd-booking'); ?></option>
                <option>5:00 - 6:00 <?php _e('am','nd-booking'); ?></option>
                <option>6:00 - 7:00 <?php _e('am','nd-booking'); ?></option>
                <option>7:00 - 8:00 <?php _e('am','nd-booking'); ?></option>
                <option>8:00 - 9:00 <?php _e('am','nd-booking'); ?></option>
                <option>9:00 - 10:00 <?php _e('am','nd-booking'); ?></option>
                <option>10:00 - 11:00 <?php _e('am','nd-booking'); ?></option>
                <option>11:00 - 12:00 <?php _e('am','nd-booking'); ?></option>
                <option>12:00 - 1:00 <?php _e('pm','nd-booking'); ?></option>
                <option>1:00 - 2:00 <?php _e('pm','nd-booking'); ?></option>
                <option>2:00 - 3:00 <?php _e('pm','nd-booking'); ?></option>
                <option>3:00 - 4:00 <?php _e('pm','nd-booking'); ?></option>
                <option>4:00 - 5:00 <?php _e('pm','nd-booking'); ?></option>
                <option>5:00 - 6:00 <?php _e('pm','nd-booking'); ?></option>
                <option>6:00 - 7:00 <?php _e('pm','nd-booking'); ?></option>
                <option>7:00 - 8:00 <?php _e('pm','nd-booking'); ?></option>
                <option>8:00 - 9:00 <?php _e('pm','nd-booking'); ?></option>
                <option>9:00 - 10:00 <?php _e('pm','nd-booking'); ?></option>
                <option>10:00 - 11:00 <?php _e('pm','nd-booking'); ?></option>
                <option>11:00 - 12:00 <?php _e('pm','nd-booking'); ?></option>
              </select>

              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Arrival','nd-booking') ?></strong></p>
              <div class="nd_booking_section nd_booking_height_20"></div>
              <div class="nd_booking_section nd_booking_height_10"></div>

              <textarea id="nd_booking_add_order_requests" rows="5" class="nd_booking_width_100_percentage" name="nd_booking_add_order_requests"></textarea>
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Requests','nd-booking') ?></strong></p>
              <div class="nd_booking_section nd_booking_height_20"></div>
              <div class="nd_booking_section nd_booking_height_10"></div>

         
        </div>
        <!--END 3-->

        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

        <!--4-->
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Payment Details','nd-booking') ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Payment Settings','nd-booking') ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
    
              <select class="nd_booking_width_100_percentage" name="nd_booking_add_order_payment_status" id="">
                <option value="Pending Payment"><?php _e('Pending Payment','nd-booking'); ?></option>
                <option value="Pending"><?php _e('Pending','nd-booking'); ?></option>
                <option value="Completed"><?php _e('Completed','nd-booking'); ?></option>
              </select>

              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Payment Status','nd-booking') ?></strong></p>
              <div class="nd_booking_section nd_booking_height_20"></div>
              <div class="nd_booking_section nd_booking_height_10"></div>

              <select class="nd_booking_width_100_percentage" name="nd_booking_add_order_action_type" id="">
                <option value="bank_transfer"><?php _e('Bank Transfer','nd-booking'); ?></option>
                <option value="payment_on_arrive"><?php _e('Payment On Arrive','nd-booking'); ?></option>
                <option value="booking_request"><?php _e('Booking Request','nd-booking'); ?></option>
                <option value="paypal"><?php _e('Paypal','nd-booking'); ?></option>
                <option value="stripe"><?php _e('Stripe','nd-booking'); ?></option>
              </select>

              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><strong><?php _e('Action Type','nd-booking') ?></strong></p>
              <div class="nd_booking_section nd_booking_height_20"></div>
              <div class="nd_booking_section nd_booking_height_10"></div>

         
        </div>
        <!--END 4-->


        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

        <div class="nd_booking_width_100_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">

          <a id="nd_booking_add_order_check_availability_btn" onclick="nd_booking_check_order_val()" class="button button-primary"><?php _e('CHECK AVAILABILITY','nd-booking'); ?></a>

          <input id="nd_booking_add_order_add_reservation_btn" class="button button-primary nd_booking_display_none_important" type="submit" name="" value="<?php _e('ADD RESERVATION','nd-booking') ?>">

        </div>

        </div>

      </form>

    </div>

  <?php } ?>


<?php } 




//START nd_booking_import_settings_php_function for AJAX
function nd_booking_add_order_validation_php_function() {

  //declare
  $nd_booking_string_result = '';

  //recover datas
  $nd_booking_add_order_room_id = $_GET['nd_booking_add_order_room_id'];
  $nd_booking_add_order_name = $_GET['nd_booking_add_order_name'];
  $nd_booking_add_order_surname = $_GET['nd_booking_add_order_surname'];
  $nd_booking_add_order_email = $_GET['nd_booking_add_order_email'];
  $nd_booking_add_order_guests = $_GET['nd_booking_add_order_guests'];
  $nd_booking_add_order_final_price = $_GET['nd_booking_add_order_final_price'];
  $nd_booking_add_order_date_from = $_GET['nd_booking_add_order_date_from'];
  $nd_booking_add_order_date_to = $_GET['nd_booking_add_order_date_to'];

  
  //name
  if ( $nd_booking_add_order_name == '' ){ 
    
    $nd_booking_result_name = 0; 
    $nd_booking_string_result .= '<span>'.__('Name is mandatory','nd-booking').'</span>[divider]'; 
  
  }else{

    $nd_booking_result_name = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }

  //surname
  if ( $nd_booking_add_order_surname == '' ){ 
    
    $nd_booking_result_surname = 0; 
    $nd_booking_string_result .= '<span>'.__('Surname is mandatory','nd-booking').'</span>[divider]'; 
  
  }else{

    $nd_booking_result_surname = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }


  //email
  if ( $nd_booking_add_order_email == '' ) {

    $nd_booking_result_email = 0; 

    $nd_booking_string_result .= '<span>'.__('Email is mandatory','nd-booking').'</span>[divider]';    

  }elseif ( nd_booking_is_email($nd_booking_add_order_email) == 0 ) {

    $nd_booking_result_email = 0; 

    $nd_booking_string_result .= '<span>'.__('Email not valid','nd-booking').'</span>[divider]';  

  }else{

    $nd_booking_result_email = 1;

    $nd_booking_string_result .= ' [divider]'; 

  }



  //guests
  if ( $nd_booking_add_order_guests == '' ){ 
    
    $nd_booking_result_guests = 0; 
    $nd_booking_string_result .= '<span>'.__('Guests is mandatory','nd-booking').'</span>[divider]'; 
  
  }else{

    $nd_booking_result_guests = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }



  //final_price
  if ( $nd_booking_add_order_final_price == '' ){ 
    
    $nd_booking_result_final_price = 0; 
    $nd_booking_string_result .= '<span>'.__('Final Price is mandatory','nd-booking').'</span>[divider]'; 
  
  }else{

    $nd_booking_result_final_price = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }



  //date_from
  if ( $nd_booking_add_order_date_from == '' ){ 
    
    $nd_booking_result_date_from = 0; 
    $nd_booking_string_result .= '<span>'.__('Date From is mandatory','nd-booking').'</span>[divider]'; 
  
  }elseif ( nd_booking_is_correct_date($nd_booking_add_order_date_from,'Y/m/d') != 1 ){

    $nd_booking_result_date_from = 0; 
    $nd_booking_string_result .= '<span>'.__('Date From not correct','nd-booking').'</span>[divider]'; 

  }else{

    $nd_booking_result_date_from = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }



  //date_to
  if ( $nd_booking_add_order_date_to == '' ){ 
    
    $nd_booking_result_date_to = 0; 
    $nd_booking_string_result .= '<span>'.__('Date To is mandatory','nd-booking').'</span>[divider]'; 
  
  }elseif ( nd_booking_is_correct_date($nd_booking_add_order_date_to,'Y/m/d') != 1 ){

    $nd_booking_result_date_to = 0; 
    $nd_booking_string_result .= '<span>'.__('Date To not correct','nd-booking').'</span>[divider]'; 

  }else{

    $nd_booking_result_date_to = 1; 
    $nd_booking_string_result .= ' [divider]'; 

  }


  //date_to greater than date_from
  if ( $nd_booking_result_date_to == 1 AND $nd_booking_result_date_from == 1 ){

    if ( str_replace('/','',$nd_booking_add_order_date_to) <= str_replace('/','',$nd_booking_add_order_date_from) ) {

      $nd_booking_result_date_from_to = 0; 
      $nd_booking_string_result .= '<span>'.__('Date To should be greater than Date From','nd-booking').'</span>[divider]'; 

    }else{
      
      $nd_booking_result_date_from_to = 1; 
      $nd_booking_string_result .= ' [divider]';  

    }

  }else{

    $nd_booking_result_date_from_to = 0; 
    $nd_booking_string_result .= ' [divider]'; 

  }



  //check availability
  if ( $nd_booking_result_date_to == 1 AND $nd_booking_result_date_from == 1 AND $nd_booking_result_date_from_to == 1 ){

    if ( nd_booking_is_qnt_available(nd_booking_is_available($nd_booking_add_order_room_id,$nd_booking_add_order_date_from,$nd_booking_add_order_date_to),$nd_booking_add_order_date_from,$nd_booking_add_order_date_to,$nd_booking_add_order_room_id) == 1 ) {

      $nd_booking_result_availability = 1; 
      $nd_booking_string_result .= ' [divider]';  

    }else{

      $nd_booking_result_availability = 0; 
      $nd_booking_string_result .= '<span>'.__('Room is not available, please change your dates','nd-booking').'</span>[divider]'; 

    }

  }else{

    $nd_booking_result_availability = 0; 
    $nd_booking_string_result .= ' [divider]'; 

  }



  //Determiante the final result
  if ( $nd_booking_result_name == 1 AND  $nd_booking_result_surname == 1  AND  $nd_booking_result_email == 1  AND  $nd_booking_result_guests == 1  AND  $nd_booking_result_final_price == 1  AND  $nd_booking_result_date_from == 1  AND  $nd_booking_result_date_to == 1 AND $nd_booking_result_date_from_to == 1 AND $nd_booking_result_availability == 1 ){
    echo 1;
  }else{
    echo $nd_booking_string_result;  
  }


  die();


}
add_action( 'wp_ajax_nd_booking_add_order_validation_php_function', 'nd_booking_add_order_validation_php_function' );
add_action( 'wp_ajax_nopriv_nd_booking_add_order_validation_php_function', 'nd_booking_add_order_validation_php_function' );
//END