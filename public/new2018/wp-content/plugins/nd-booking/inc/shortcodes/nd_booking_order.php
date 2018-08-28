<?php


//START  nd_booking_order
function nd_booking_shortcode_order() {

    
    //check if the user is lkogged
    if ( is_user_logged_in() == 1 ){

          $nd_booking_current_user = wp_get_current_user();
          $nd_booking_current_user_id = $nd_booking_current_user->ID;
          
          if( isset( $_POST['nd_booking_order_user_id'] ) ) {  $nd_booking_order_user_id = $_POST['nd_booking_order_user_id']; }else{ $nd_booking_order_user_id = '';} 


        if ( $nd_booking_current_user_id == $nd_booking_order_user_id ) {

            //recover order info
            $nd_booking_order_id = $_POST['nd_booking_order_id'];
            $nd_booking_order_room_id = $_POST['nd_booking_order_room_id'];
            


            //info order
            global $wpdb;

            $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';

            //START select for items
            $nd_booking_order_infos = $wpdb->get_results( "SELECT * FROM $nd_booking_table_name WHERE id = $nd_booking_order_id" );


            foreach ( $nd_booking_order_infos as $nd_booking_order_info ) 
            {

              
                //get all informations
                $nd_booking_order_id = $nd_booking_order_info->id;
                $nd_booking_order_id_post = $nd_booking_order_info->id_post;
                $nd_booking_order_title_post = $nd_booking_order_info->title_post;  
                $nd_booking_order_date = $nd_booking_order_info->date;   
                $nd_booking_order_date_from = $nd_booking_order_info->date_from;  
                $nd_booking_order_date_to = $nd_booking_order_info->date_to;
                $nd_booking_order_guests = $nd_booking_order_info->guests;  
                $nd_booking_order_final_trip_price = $nd_booking_order_info->final_trip_price;    
                $nd_booking_order_extra_services = $nd_booking_order_info->extra_services;  
                $nd_booking_order_id_user = $nd_booking_order_info->id_user;
                $nd_booking_order_user_first_name = $nd_booking_order_info->user_first_name; 
                $nd_booking_order_user_last_name = $nd_booking_order_info->user_last_name;  
                $nd_booking_order_paypal_email = $nd_booking_order_info->paypal_email;    
                $nd_booking_order_user_phone = $nd_booking_order_info->user_phone;  
                $nd_booking_order_user_address = $nd_booking_order_info->user_address;    
                $nd_booking_order_user_city = $nd_booking_order_info->user_city;   
                $nd_booking_order_user_country = $nd_booking_order_info->user_country;    
                $nd_booking_order_user_message = $nd_booking_order_info->user_message;    
                $nd_booking_order_user_arrival = $nd_booking_order_info->user_arrival;    
                $nd_booking_order_user_coupon = $nd_booking_order_info->user_coupon; 
                $nd_booking_order_paypal_payment_status = $nd_booking_order_info->paypal_payment_status;   
                $nd_booking_order_paypal_currency = $nd_booking_order_info->paypal_currency; 
                $nd_booking_order_paypal_tx = $nd_booking_order_info->paypal_tx;   
                $nd_booking_order_action_type = $nd_booking_order_info->action_type;


                //translations action type
                if ( $nd_booking_order_action_type == 'bank_transfer' ) {
                    $nd_booking_order_action_type_lang = __('Bank Transfer','nd-booking');
                }elseif ( $nd_booking_order_action_type == 'payment_on_arrive' ) {
                    $nd_booking_order_action_type_lang = __('Payment on arrive','nd-booking');
                }elseif ( $nd_booking_order_action_type == 'booking_request' ) {
                    $nd_booking_order_action_type_lang = __('Booking Request','nd-booking');
                }else{
                    $nd_booking_order_action_type_lang = __('Paypal','nd-booking');   
                }

                //translations payment status
                if ( $nd_booking_order_paypal_payment_status == 'Pending' ) {
                    $nd_booking_order_paypal_payment_status_lang = __('Pending','nd-booking');
                }elseif ( $nd_booking_order_paypal_payment_status == 'Pending Payment' ){
                    $nd_booking_order_paypal_payment_status_lang = __('Pending Payment','nd-booking');
                }else{
                    $nd_booking_order_paypal_payment_status_lang = __('Completed','nd-booking');
                }

              
              include 'include/order/nd_booking_order_left_content.php';
              include 'include/order/nd_booking_order_right_content.php';


                $nd_booking_shortcode_order = '


                <div class="nd_booking_section">


                    <div class="nd_booking_float_left nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_right_15 nd_booking_box_sizing_border_box">
                        
                        '.$nd_booking_shortcode_left_content.'

                    </div>

                    <div class="nd_booking_float_left nd_booking_width_66_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_left_15 nd_booking_box_sizing_border_box">
                        
                        '.$nd_booking_shortcode_right_content.'

                    </div>

                </div>


                ';


            }
            //end for each

        }else{

            $nd_booking_shortcode_order = '
            <div class="nd_booking_section">
                
                    <div class="nd_booking_float_left nd_booking_width_100_percentage nd_booking_box_sizing_border_box">
                        <p>'.__('You have not selected any order','nd-booking').'</p>
                        <div class="nd_booking_section nd_booking_height_20"></div>
                        <a href="'.nd_booking_search_page().'" class="nd_booking_bg_yellow nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2">'.__('RETURN TO SEARCH PAGE','nd-booking').'</a>
                    </div>

                </div>'; 

        }

        

    }else{

        $nd_booking_shortcode_order .= '
        <div class="nd_booking_section">
            
                <div class="nd_booking_float_left nd_booking_width_100_percentage nd_booking_box_sizing_border_box">
                    <p>'.__('You have not selected any order','nd-booking').'</p>
                    <div class="nd_booking_section nd_booking_height_20"></div>
                    <a href="'.nd_booking_search_page().'" class="nd_booking_bg_yellow nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2">'.__('RETURN TO SEARCH PAGE','nd-booking').'</a>
                </div>

            </div>';  

    }


    echo $nd_booking_shortcode_order;


}
add_shortcode('nd_booking_order_info', 'nd_booking_shortcode_order');
//END nd_booking_order