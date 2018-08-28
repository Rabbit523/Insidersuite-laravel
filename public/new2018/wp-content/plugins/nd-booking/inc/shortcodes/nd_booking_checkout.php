<?php

//START  nd_booking_checkout
function nd_booking_shortcode_checkout() {

    $nd_booking_shortcode_result = '';
    
    if( isset( $_POST['nd_booking_form_booking_arrive'] ) ) {  $nd_booking_form_booking_arrive = $_POST['nd_booking_form_booking_arrive']; }else{ $nd_booking_form_booking_arrive = '';} 
    if( isset( $_POST['nd_booking_form_checkout_arrive'] ) ) {  $nd_booking_form_checkout_arrive = $_POST['nd_booking_form_checkout_arrive']; }else{ $nd_booking_form_checkout_arrive = '';} 


    //ARRIVE FROM BOOKING FORM
    if ( $nd_booking_form_booking_arrive == 1 ) {


        //get value
        $nd_booking_booking_form_final_price = $_POST['nd_booking_booking_form_final_price'];
        $nd_booking_booking_form_date_from = $_POST['nd_booking_booking_form_date_from'];
        $nd_booking_booking_form_date_to = $_POST['nd_booking_booking_form_date_to'];
        $nd_booking_booking_form_guests = $_POST['nd_booking_booking_form_guests'];
        $nd_booking_booking_form_name = $_POST['nd_booking_booking_form_name'];
        $nd_booking_booking_form_surname = $_POST['nd_booking_booking_form_surname'];
        $nd_booking_booking_form_email = $_POST['nd_booking_booking_form_email'];
        $nd_booking_booking_form_phone = $_POST['nd_booking_booking_form_phone'];
        $nd_booking_booking_form_address = $_POST['nd_booking_booking_form_address'];
        $nd_booking_booking_form_city = $_POST['nd_booking_booking_form_city'];
        $nd_booking_booking_form_country = $_POST['nd_booking_booking_form_country'];
        $nd_booking_booking_form_zip = $_POST['nd_booking_booking_form_zip'];
        $nd_booking_booking_form_requests = $_POST['nd_booking_booking_form_requests'];
        $nd_booking_booking_form_arrival = $_POST['nd_booking_booking_form_arrival'];
        $nd_booking_booking_form_coupon = $_POST['nd_booking_booking_form_coupon'];
        $nd_booking_booking_form_term = $_POST['nd_booking_booking_form_term'];
        $nd_booking_booking_form_post_id = $_POST['nd_booking_booking_form_post_id'];
        $nd_booking_booking_form_post_title = $_POST['nd_booking_booking_form_post_title'];
        $nd_booking_booking_form_services = $_POST['nd_booking_booking_checkbox_services_id'];

        //ids
        $nd_booking_booking_form_post_id = $_POST['nd_booking_booking_form_post_id'];
        $nd_booking_ids_array = explode('-', $nd_booking_booking_form_post_id ); 
        $nd_booking_booking_form_post_id = $nd_booking_ids_array[0];
        $nd_booking_id_room = $nd_booking_ids_array[1];

        //city tax
        if ( get_option('nd_booking_city_tax') != '' ) {
            $nd_booking_total_city_tax = get_option('nd_booking_city_tax') * $nd_booking_booking_form_guests * nd_booking_get_number_night($nd_booking_booking_form_date_from,$nd_booking_booking_form_date_to);
            $nd_booking_booking_form_final_price = $nd_booking_booking_form_final_price + $nd_booking_total_city_tax;
        }
        
        include 'include/checkout/nd_booking_checkout_left_content.php';
        include 'include/checkout/nd_booking_checkout_right_content.php';
        include 'include/checkout/nd_booking_checkout_payment_options.php';
        
        $nd_booking_shortcode_result .= '

        <div class="nd_booking_section">
        

            <div class="nd_booking_float_left nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_right_15 nd_booking_box_sizing_border_box">
                
                '.$nd_booking_shortcode_left_content.'

            </div>

            <div class="nd_booking_float_left nd_booking_width_66_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_left_15 nd_booking_box_sizing_border_box">
                
                '.$nd_booking_shortcode_right_content.'

            </div>

        </div>
        ';

    //START PAYMENT ON CHECKOUT PAGE
    }elseif ( $nd_booking_form_checkout_arrive == 1 OR isset($_GET['tx']) OR $nd_booking_form_checkout_arrive == 2 ) {


        
        
        //START SIMPLE PAYMENT METHODS
        if ( $nd_booking_form_checkout_arrive == 1 ) {

            //transaction TX id
            $nd_booking_paypal_tx = rand(100000000,999999999);

            //get current date
            $nd_booking_date = date('H:m:s F j Y');

            //get currency
            $nd_booking_booking_form_currency = nd_booking_get_currency();

            $nd_booking_paypal_error = 0;
        
            //get value
            $nd_booking_booking_form_date_from = $_POST['nd_booking_checkout_form_date_from'];
            $nd_booking_booking_form_date_to = $_POST['nd_booking_checkout_form_date_top'];
            $nd_booking_booking_form_guests = $_POST['nd_booking_checkout_form_guests'];
            $nd_booking_booking_form_final_price = $_POST['nd_booking_checkout_form_final_price'];
            $nd_booking_checkout_form_post_id = $_POST['nd_booking_checkout_form_post_id'];
            $nd_booking_checkout_form_post_title = $_POST['nd_booking_checkout_form_post_title'];
            $nd_booking_booking_form_name = $_POST['nd_booking_checkout_form_name'];
            $nd_booking_booking_form_surname = $_POST['nd_booking_checkout_form_surname'];
            $nd_booking_booking_form_email = $_POST['nd_booking_checkout_form_email'];
            $nd_booking_booking_form_phone = $_POST['nd_booking_checkout_form_phone'];
            $nd_booking_booking_form_address = $_POST['nd_booking_checkout_form_address'];
            $nd_booking_booking_form_city = $_POST['nd_booking_checkout_form_city'];
            $nd_booking_booking_form_country = $_POST['nd_booking_checkout_form_country'];
            $nd_booking_booking_form_zip = $_POST['nd_booking_checkout_form_zip'];
            $nd_booking_booking_form_requests = $_POST['nd_booking_checkout_form_requets'];
            $nd_booking_booking_form_arrival = $_POST['nd_booking_checkout_form_arrival'];
            $nd_booking_booking_form_coupon = $_POST['nd_booking_checkout_form_coupon'];
            $nd_booking_booking_form_term = $_POST['nd_booking_checkout_form_term'];
            $nd_booking_booking_form_services = $_POST['nd_booking_booking_form_services'];
            $nd_booking_booking_form_action_type = $_POST['nd_booking_booking_form_action_type'];
            $nd_booking_booking_form_payment_status = $_POST['nd_booking_booking_form_payment_status'];

            //ids
            $nd_booking_checkout_form_post_id = $_POST['nd_booking_checkout_form_post_id'];
            $nd_booking_ids_array = explode('-', $nd_booking_checkout_form_post_id ); 
            $nd_booking_checkout_form_post_id = $nd_booking_ids_array[0];
            $nd_booking_id_room = $nd_booking_ids_array[1];



        //START STRIPE
        }elseif ( $nd_booking_form_checkout_arrive == 2 ) {
           
            //get datas
            $nd_booking_booking_form_date_from = $_POST['nd_booking_checkout_form_date_from'];
            $nd_booking_booking_form_date_to = $_POST['nd_booking_checkout_form_date_top'];
            $nd_booking_booking_form_guests = $_POST['nd_booking_checkout_form_guests'];
            $nd_booking_booking_form_final_price = $_POST['nd_booking_checkout_form_final_price'];
            $nd_booking_checkout_form_post_id = $_POST['nd_booking_checkout_form_post_id'];
            $nd_booking_checkout_form_post_title = $_POST['nd_booking_checkout_form_post_title'];
            $nd_booking_booking_form_name = $_POST['nd_booking_checkout_form_name'];
            $nd_booking_booking_form_surname = $_POST['nd_booking_checkout_form_surname'];
            $nd_booking_booking_form_email = $_POST['nd_booking_checkout_form_email'];
            $nd_booking_booking_form_phone = $_POST['nd_booking_checkout_form_phone'];
            $nd_booking_booking_form_address = $_POST['nd_booking_checkout_form_address'];
            $nd_booking_booking_form_city = $_POST['nd_booking_checkout_form_city'];
            $nd_booking_booking_form_country = $_POST['nd_booking_checkout_form_country'];
            $nd_booking_booking_form_zip = $_POST['nd_booking_checkout_form_zip'];
            $nd_booking_booking_form_requests = $_POST['nd_booking_checkout_form_requets'];
            $nd_booking_booking_form_arrival = $_POST['nd_booking_checkout_form_arrival'];
            $nd_booking_booking_form_coupon = $_POST['nd_booking_checkout_form_coupon'];
            $nd_booking_booking_form_term = $_POST['nd_booking_checkout_form_term'];
            $nd_booking_booking_form_services = $_POST['nd_booking_booking_form_services'];
            $nd_booking_booking_form_action_type = $_POST['nd_booking_booking_form_action_type'];
            $nd_booking_booking_form_payment_status = $_POST['nd_booking_booking_form_payment_status'];

            //ids
            $nd_booking_checkout_form_post_id = $_POST['nd_booking_checkout_form_post_id'];
            $nd_booking_ids_array = explode('-', $nd_booking_checkout_form_post_id ); 
            $nd_booking_checkout_form_post_id = $nd_booking_ids_array[0];
            $nd_booking_id_room = $nd_booking_ids_array[1];


            $nd_booking_stripe_token = $_POST['stripeToken'];

            //call the api stripe only if we are not in dev mode
            if ( get_option('nd_booking_plugin_dev_mode') == 1 ){

                $nd_booking_paypal_tx = rand(100000000,999999999);   

            }else{

                //stripe data
                $nd_booking_amount = $nd_booking_booking_form_final_price*100;
                $nd_booking_currency = get_option('nd_booking_stripe_currency');
                $nd_booking_description = $nd_booking_checkout_form_post_title.' - '.$nd_booking_booking_form_name.' '.$nd_booking_booking_form_surname.' - '.$nd_booking_booking_form_date_from.' '.$nd_booking_booking_form_date_to;
                $nd_booking_source = $nd_booking_stripe_token;

                $nd_booking_ch_header[] = 'Authorization: Bearer '.get_option('nd_booking_stripe_secret_key');
                $nd_booking_ch_header[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8'; 

                $nd_booking_url = 'https://api.stripe.com/v1/charges';
                $nd_booking_fields = array(
                    'amount' => urlencode($nd_booking_amount),
                    'currency' => urlencode($nd_booking_currency),
                    'description' => urlencode($nd_booking_description),
                    'source' => urlencode($nd_booking_source),
                    'metadata[date_from]' => urlencode($nd_booking_booking_form_date_from),
                    'metadata[date_to]' => urlencode($nd_booking_booking_form_date_to),
                    'metadata[guests]' => urlencode($nd_booking_booking_form_guests),
                    'metadata[name]' => urlencode($nd_booking_booking_form_name.' '.$nd_booking_booking_form_surname),
                    'metadata[email]' => urlencode($nd_booking_booking_form_email),
                    'metadata[phone]' => urlencode($nd_booking_booking_form_phone),
                    'metadata[address]' => urlencode($nd_booking_booking_form_address.' '.$nd_booking_booking_form_city.' '.$nd_booking_booking_form_country.' '.$nd_booking_booking_form_zip),
                    'metadata[requests]' => urlencode($nd_booking_booking_form_requests)
                );

                //url-ify the data for the POST
                $nd_booking_fields_string = '';
                foreach($nd_booking_fields as $nd_booking_key=>$nd_booking_value) { $nd_booking_fields_string .= $nd_booking_key.'='.$nd_booking_value.'&'; }
                rtrim($nd_booking_fields_string, '&');

                //open connection
                $nd_booking_ch = curl_init();

                //set the url, number of POST vars, POST data
                curl_setopt($nd_booking_ch,CURLOPT_URL, $nd_booking_url);
                curl_setopt($nd_booking_ch,CURLOPT_POST, count($nd_booking_fields));
                curl_setopt($nd_booking_ch,CURLOPT_POSTFIELDS, $nd_booking_fields_string);
                curl_setopt($nd_booking_ch,CURLOPT_HTTPHEADER, $nd_booking_ch_header );
                curl_setopt($nd_booking_ch, CURLOPT_RETURNTRANSFER, 1); 

                //execute post
                $nd_booking_result = curl_exec($nd_booking_ch);
                $nd_booking_result_content = json_decode($nd_booking_result, true);
                $nd_booking_status = curl_getinfo($nd_booking_ch, CURLINFO_HTTP_CODE );

                //close connection
                curl_close($nd_booking_ch);


                if ( $nd_booking_status == 200 ){

                    if ( $nd_booking_result_content['paid'] == true ) { $nd_booking_booking_form_payment_status = 'Completed'; }

                    //transaction TX id
                    $nd_booking_paypal_tx = $nd_booking_result_content['id'];

                    //get current date
                    $nd_booking_date = date('H:m:s F j Y');

                    //get currency
                    $nd_booking_booking_form_currency = nd_booking_get_currency();

                    $nd_booking_paypal_error = 0;

                }else{
                    $nd_booking_paypal_error = 1;
                }


            }



        //START PAYPAL
        }else{

            //recover datas from plugin settings
            $nd_booking_paypal_email = get_option('nd_booking_paypal_email');
            $nd_booking_paypal_currency = get_option('nd_booking_paypal_currency');
            $nd_booking_paypal_token = get_option('nd_booking_paypal_token');

            $nd_booking_paypal_developer = get_option('nd_booking_paypal_developer');
            if ( $nd_booking_paypal_developer == 1) {
              $nd_booking_paypal_action_1 = 'https://www.sandbox.paypal.com/cgi-bin';
              $nd_booking_paypal_action_2 = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
            }
            else{  
              $nd_booking_paypal_action_1 = 'https://www.paypal.com/cgi-bin';
              $nd_booking_paypal_action_2 = 'https://www.paypal.com/cgi-bin/webscr';
            }

            //transaction TX id
            $nd_booking_paypal_tx = $_GET['tx'];

              // Init cURL
              $nd_booking_request = curl_init();

              // Set request options
              curl_setopt_array($nd_booking_request, array
              (
                CURLOPT_URL => $nd_booking_paypal_action_2,
                CURLOPT_POST => TRUE,
                CURLOPT_POSTFIELDS => http_build_query(array
                  (
                    'cmd' => '_notify-synch',
                    'tx' => $nd_booking_paypal_tx,
                    'at' => $nd_booking_paypal_token,
                  )),
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HEADER => FALSE,
              ));

              // Execute request and get response and status code
              $nd_booking_response = curl_exec($nd_booking_request);
              $nd_booking_status   = curl_getinfo($nd_booking_request, CURLINFO_HTTP_CODE);

              // Close connection
              curl_close($nd_booking_request);


              
              //START IF 4
              if($nd_booking_status == 200 AND strpos($nd_booking_response, 'SUCCESS') === 0){
                
                // Remove SUCCESS part (7 characters long)
                $nd_booking_response = substr($nd_booking_response, 7);

                // URL decode
                $nd_booking_response = urldecode($nd_booking_response);

                // Turn into associative array
                preg_match_all('/^([^=\s]++)=(.*+)/m', $nd_booking_response, $m, PREG_PATTERN_ORDER);
                $nd_booking_response = array_combine($m[1], $m[2]);

                // Fix character encoding if different from UTF-8 (in my case)
                if(isset($nd_booking_response['charset']) AND strtoupper($nd_booking_response['charset']) !== 'UTF-8')
                {
                  foreach($nd_booking_response as $key => &$value)
                  {
                    $value = mb_convert_encoding($value, 'UTF-8', $nd_booking_response['charset']);
                  }
                  $nd_booking_response['charset_original'] = $nd_booking_response['charset'];
                  $nd_booking_response['charset'] = 'UTF-8';
                }

                // Sort on keys for readability (handy when debugging)
                ksort($nd_booking_response);

                //get value
                $nd_booking_date = $nd_booking_response['payment_date'];
                $nd_booking_booking_form_final_price = $nd_booking_response['mc_gross'];
                
                //ids
                $nd_booking_checkout_form_post_id = $nd_booking_response['item_number'];
                $nd_booking_ids_array = explode('-', $nd_booking_checkout_form_post_id ); 
                $nd_booking_checkout_form_post_id = $nd_booking_ids_array[0];
                $nd_booking_id_room = $nd_booking_ids_array[1];

                $nd_booking_checkout_form_post_title = get_the_title($nd_booking_checkout_form_post_id);
                
                //user info
                $nd_booking_booking_form_name = $nd_booking_response['first_name'];
                $nd_booking_booking_form_surname = $nd_booking_response['last_name'];
                $nd_booking_booking_form_email = $nd_booking_response['payer_email'];
                $nd_booking_booking_form_address = $nd_booking_response['address_street'];
                $nd_booking_booking_form_city = $nd_booking_response['address_city'];
                $nd_booking_booking_form_country = $nd_booking_response['address_country'];
                $nd_booking_booking_form_zip = $nd_booking_response['address_zip'];

                //transiction details
                $nd_booking_booking_form_currency = $nd_booking_response['mc_currency'];
                $nd_booking_booking_form_action_type = 'paypal';
                $nd_booking_booking_form_payment_status = $nd_booking_response['payment_status'];

                //null
                $nd_booking_booking_form_term = '';
                $nd_booking_paypal_error = 0;

                //START extract custom filed
                $nd_booking_custom_field_array = explode('[ndbcpm]', $nd_booking_response['custom']);
                $nd_booking_booking_form_date_from = $nd_booking_custom_field_array[0];
                $nd_booking_booking_form_date_to = $nd_booking_custom_field_array[1];
                $nd_booking_booking_form_guests = $nd_booking_custom_field_array[2];
                $nd_booking_booking_form_phone = $nd_booking_custom_field_array[3];
                $nd_booking_booking_form_arrival = $nd_booking_custom_field_array[4];
                $nd_booking_booking_form_services = $nd_booking_custom_field_array[5];
                $nd_booking_booking_form_requests = $nd_booking_custom_field_array[6];
                $nd_booking_booking_form_coupon = $nd_booking_custom_field_array[7];

              }
              //END IF 4
              else{

                $nd_booking_paypal_error = 1;
                  
              }
              //END


        }

        


        //START extra services
        $nd_booking_booking_form_extra_services = '';

        $nd_booking_additional_services_array = explode(',', $nd_booking_booking_form_services );
        for ($nd_booking_additional_services_array_i = 0; $nd_booking_additional_services_array_i < count($nd_booking_additional_services_array)-1; $nd_booking_additional_services_array_i++) {
            
            $nd_booking_service_id = $nd_booking_additional_services_array[$nd_booking_additional_services_array_i];

            //metabox
            $nd_booking_meta_box_cpt_2_price = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price', true );
            $nd_booking_meta_box_cpt_2_price_type_1 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_1', true );
            if ( $nd_booking_meta_box_cpt_2_price_type_1 == '' ) { $nd_booking_meta_box_cpt_2_price_type_1 = 'nd_booking_price_type_person'; }
            $nd_booking_meta_box_cpt_2_price_type_2 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_2', true );
            if ( $nd_booking_meta_box_cpt_2_price_type_2 == '' ) { $nd_booking_meta_box_cpt_2_price_type_2 = 'nd_booking_price_type_day'; }

            //operator
            if ( $nd_booking_meta_box_cpt_2_price_type_1 == 'nd_booking_price_type_person' ) {
                $nd_booking_operator_1 = $nd_booking_booking_form_guests;
            }else{
                $nd_booking_operator_1 = 1; 
            }
            if ( $nd_booking_meta_box_cpt_2_price_type_2 == 'nd_booking_price_type_day' ) {
                $nd_booking_operator_2 = nd_booking_get_number_night($nd_booking_booking_form_date_from,$nd_booking_booking_form_date_to);
            }else{
                $nd_booking_operator_2 = 1; 
            }
            
            $nd_booking_additional_service_total_price = $nd_booking_meta_box_cpt_2_price*$nd_booking_operator_1*$nd_booking_operator_2;

            $nd_booking_booking_form_extra_services .= $nd_booking_service_id.'['.$nd_booking_additional_service_total_price.'],';

        }
        //END extra services

        
        //translations action type
        if ( $nd_booking_booking_form_action_type == 'bank_transfer' ) {
            $nd_booking_booking_form_action_type_lang = __('Bank Transfer','nd-booking');
        }elseif ( $nd_booking_booking_form_action_type == 'payment_on_arrive' ) {
            $nd_booking_booking_form_action_type_lang = __('Payment on arrive','nd-booking');
        }elseif ( $nd_booking_booking_form_action_type == 'booking_request' ) {
            $nd_booking_booking_form_action_type_lang = __('Booking Request','nd-booking');
        }elseif ( $nd_booking_booking_form_action_type == 'stripe' ) {
            $nd_booking_booking_form_action_type_lang = __('Stripe','nd-booking');
        }else{
            $nd_booking_booking_form_action_type_lang = __('Paypal','nd-booking');   
        }

        include 'include/thankyou/nd_booking_thankyou_left_content.php';
        include 'include/thankyou/nd_booking_thankyou_right_content.php';
        
        $nd_booking_shortcode_result .= '

        <div class="nd_booking_section">
        

            <div class="nd_booking_float_left nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_right_15 nd_booking_box_sizing_border_box">
                
                '.$nd_booking_shortcode_left_content.'

            </div>

            <div class="nd_booking_float_left nd_booking_width_66_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_0_responsive nd_booking_padding_left_15 nd_booking_box_sizing_border_box">
                
                '.$nd_booking_shortcode_right_content.'

            </div>

        </div>
        ';


        //START check if user is logged
        if ( is_user_logged_in() == 1 ) {
          $nd_booking_current_user = wp_get_current_user();
          $nd_booking_current_user_id = $nd_booking_current_user->ID;
        }else{
          $nd_booking_current_user_id = 0; 
        }
        //END check if user is logged


        nd_booking_add_booking_in_db(
  
          $nd_booking_id_room,
          get_the_title($nd_booking_id_room),
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
    //END EASY PAYMENT
    }else{
    



        $nd_booking_shortcode_result .= '

            <div class="nd_booking_section">
            
                <div class="nd_booking_float_left nd_booking_width_100_percentage nd_booking_box_sizing_border_box">
                    <p>'.__('Please select a room to make a reservation','nd-booking').'</p>
                    <div class="nd_booking_section nd_booking_height_20"></div>
                    <a href="'.nd_booking_search_page().'" class="nd_booking_bg_yellow nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2">'.__('RETURN TO SEARCH PAGE','nd-booking').'</a>
                </div>

            </div>
        
        '; 

    }


    echo $nd_booking_shortcode_result;
		


}
add_shortcode('nd_booking_checkout', 'nd_booking_shortcode_checkout');
//END nd_booking_checkout






