<?php


$nd_booking_shortcode_right_content = '';
$nd_booking_shortcode_right_content .= '

    <h1 class="nd_booking_margin_top_50_responsive">'.__('Your Informations','nd-booking').' :</h1>
    <div class="nd_booking_section nd_booking_height_30"></div>

    <div class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Order Transaction','nd-booking').' :</span></p>
        <p>'.$nd_booking_order_paypal_tx.'</p>
    </div>

    <div class="nd_booking_section nd_booking_height_30"></div>

    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Name','nd-booking').' :</span> '.$nd_booking_order_user_first_name.' '.$nd_booking_order_user_last_name.'</p>
    </div>
    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Phone','nd-booking').' :</span> '.$nd_booking_order_user_phone.'</p>
    </div>
    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Email','nd-booking').' :</span> '.$nd_booking_order_paypal_email.'</p>
    </div>
    <div class="nd_booking_section nd_booking_height_10"></div>

    
    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Address','nd-booking').' :</span> '.$nd_booking_order_user_address.'</p>
    </div>
    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('City','nd-booking').' :</span> '.$nd_booking_order_user_city.'</p>
    </div>
    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Country','nd-booking').' :</span> '.$nd_booking_order_user_country.'</p>
    </div>

    <div class="nd_booking_section nd_booking_height_30"></div>

    <div class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Requests','nd-booking').' :</span></p>
        <p>'.$nd_booking_order_user_message.'</p>
    </div>

    <div class="nd_booking_section nd_booking_height_30"></div>

    <div class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Extra services included in the price','nd-booking').' :</span></p>

    ';


    if ( $nd_booking_order_extra_services == '' ) {

        $nd_booking_shortcode_right_content .= '<p>'.__('You have not selected any additional services','nd-booking').'</p>';

    }else{

        $nd_booking_shortcode_right_content .= '<div class="nd_booking_section nd_booking_height_10"></div>';

        $nd_booking_services_array = explode(',', $nd_booking_order_extra_services );
        for ($nd_booking_services_array_i = 0; $nd_booking_services_array_i < count($nd_booking_services_array)-1; $nd_booking_services_array_i++) {
                
            $nd_booking_service_array = explode('[', $nd_booking_services_array[$nd_booking_services_array_i] );

            //info service
            $nd_booking_service_id = $nd_booking_service_array[0];
            $nd_booking_service_price = str_replace(']','',$nd_booking_service_array[1]);
            $nd_booking_service_name = get_the_title($nd_booking_service_id);

            //icon
            $nd_booking_service_icon = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_icon', true );
            if (  $nd_booking_service_icon != '' ){
                $nd_booking_service_image = '<img alt="" class="nd_booking_margin_right_15 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="25" src="'.$nd_booking_service_icon.'">';
            }else{
                $nd_booking_service_image = '';
            }

            $nd_booking_shortcode_right_content .= '
            <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">
                <div class="nd_booking_display_table nd_booking_float_left">
                    '.$nd_booking_service_image.'
                    <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_line_height_20">'.$nd_booking_service_name.' ( '.$nd_booking_service_price.' '.nd_booking_get_currency().' )</p>
                </div>
            </div>';    

        }


    }

    $nd_booking_shortcode_right_content .= '
    </div>';



    $nd_booking_shortcode_right_content .= '
    <div class="nd_booking_section nd_booking_height_30 '.nd_booking_get_coupon_enable_class().' "></div>

    <div class="nd_booking_width_100_percentage '.nd_booking_get_coupon_enable_class().' nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Coupon','nd-booking').' :</span></p>';
        
        if ( $nd_booking_order_user_coupon != '' ) {
            $nd_booking_shortcode_right_content .= '<p>'.$nd_booking_order_user_coupon.' - '.__('Value','nd-booking').' '.nd_booking_get_coupon_value($nd_booking_order_user_coupon).' '.__('% OFF','nd-booking').' ( '.__('Original Price : ','nd-booking').' '.nd_booking_get_price_before_coupon($nd_booking_order_user_coupon,$nd_booking_order_final_trip_price).' '.nd_booking_get_currency().' )</p>';    
        }else{
            $nd_booking_shortcode_right_content .= '<p>'.__('Not set','nd-booking').'</p>';    
        }

    $nd_booking_shortcode_right_content .= '
    </div>';
    


    $nd_booking_shortcode_right_content .= '
    <div class="nd_booking_section nd_booking_height_30"></div>

    <div class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_box_sizing_border_box ">
        <p><span class="nd_options_color_greydark nd_booking_font_weight_bolder">'.__('Payment Options','nd-booking').' :</span></p>
        <p>'.$nd_booking_order_action_type_lang.'</p>
    </div>

    <div class="nd_booking_section nd_booking_height_20"></div>

    <p class="nd_booking_bg_yellow nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.$nd_booking_order_paypal_payment_status_lang.'</p>
    ';






