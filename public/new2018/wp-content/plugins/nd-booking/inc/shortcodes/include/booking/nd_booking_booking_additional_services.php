<?php



//START additional services
if ( get_post_meta( $nd_booking_form_booking_id, 'nd_booking_meta_box_additional_services', true ) != '' ) { 

    $nd_booking_additional_services = '
    <div class="nd_booking_section nd_booking_margin_top_50_responsive">
      <h1>'.__('Add Extra Services','nd-booking').' :</h1>
      <div class="nd_booking_section nd_booking_height_30"></div>
    ';

    $nd_booking_meta_box_additional_services_array = explode(',', get_post_meta( $nd_booking_form_booking_id, 'nd_booking_meta_box_additional_services', true ) );
    for ($nd_booking_meta_box_additional_services_array_i = 0; $nd_booking_meta_box_additional_services_array_i < count($nd_booking_meta_box_additional_services_array)-1; $nd_booking_meta_box_additional_services_array_i++) {
        
        $nd_booking_page_by_path = get_page_by_path($nd_booking_meta_box_additional_services_array[$nd_booking_meta_box_additional_services_array_i],OBJECT,'nd_booking_cpt_2');
        
        //info service
        $nd_booking_service_id = $nd_booking_page_by_path->ID;
        $nd_booking_service_name = get_the_title($nd_booking_service_id);
        $nd_booking_service_content = get_post_field('post_content', $nd_booking_service_id);
        $nd_booking_service_permalink = get_permalink($nd_booking_service_id);

        //metabox
        $nd_booking_meta_box_cpt_2_service_type = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_service_type', true );
        if ( $nd_booking_meta_box_cpt_2_service_type == '' ) { $nd_booking_meta_box_cpt_2_service_type = 'nd_booking_normal_service'; }
        $nd_booking_meta_box_cpt_2_icon = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_icon', true );
        $nd_booking_meta_box_cpt_2_color = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_color', true );
        $nd_booking_meta_box_cpt_2_text_preview = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_text_preview', true );
        $nd_booking_meta_box_cpt_2_price = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price', true );
        $nd_booking_meta_box_cpt_2_price_type_1 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_1', true );
        if ( $nd_booking_meta_box_cpt_2_price_type_1 == '' ) { $nd_booking_meta_box_cpt_2_price_type_1 = 'nd_booking_price_type_person'; }
        $nd_booking_meta_box_cpt_2_price_type_2 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_2', true );
        if ( $nd_booking_meta_box_cpt_2_price_type_2 == '' ) { $nd_booking_meta_box_cpt_2_price_type_2 = 'nd_booking_price_type_day'; }

        //operator
        if ( $nd_booking_meta_box_cpt_2_price_type_1 == 'nd_booking_price_type_person' ) {
            $nd_booking_operator_1 = $nd_booking_form_booking_guests;
            $nd_booking_word_1 = __('Guest','nd-booking'); 
        }else{
            $nd_booking_operator_1 = 1; 
            $nd_booking_word_1 = __('Room','nd-booking');  
        }
        if ( $nd_booking_meta_box_cpt_2_price_type_2 == 'nd_booking_price_type_day' ) {
            $nd_booking_operator_2 = nd_booking_get_number_night($nd_booking_date_from,$nd_booking_date_to);
            $nd_booking_word_2 = __('Night','nd-booking'); 
        }else{
            $nd_booking_operator_2 = 1; 
            $nd_booking_word_2 = __('Trip','nd-booking');   
        }
        
        $nd_booking_additional_service_total_price = $nd_booking_meta_box_cpt_2_price*$nd_booking_operator_1*$nd_booking_operator_2;

        $nd_booking_additional_services .= '
            <p class="nd_booking_width_50_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">
              <input data-id="'.$nd_booking_service_id.'," class="nd_booking_width_30 nd_booking_float_left_all_iphone nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_8 nd_booking_booking_checkbox_service" type="checkbox" value="'.$nd_booking_additional_service_total_price.'," >
              <span class="nd_options_color_greydark nd_booking_font_weight_bolder nd_booking_float_left_all_iphone">'.$nd_booking_service_name.' :</span> 
              <span class="nd_booking_float_left_all_iphone nd_booking_margin_bottom_20_all_iphone">'.$nd_booking_meta_box_cpt_2_price.' '.nd_booking_get_currency().' ( '.$nd_booking_word_1.' / '.$nd_booking_word_2.' ) = '.$nd_booking_meta_box_cpt_2_price*$nd_booking_operator_1*$nd_booking_operator_2.' '.nd_booking_get_currency().'</span>
            </p>
        ';

    }
    
    $nd_booking_additional_services .= '

        <input type="hidden" id="nd_booking_booking_checkbox_services" name="nd_booking_booking_checkbox_services" readonly value="">

        <script type="text/javascript">
          //<![CDATA[
          jQuery(document).ready(function() {

            jQuery( function ( $ ) {

                $( ".nd_booking_booking_checkbox_service" ).change(function() {

                    if ( $( this ).is( ":checked" ) ) {

                        var nd_booking_service_value = $( this ).val();
                        var nd_booking_service_previous_value = $("#nd_booking_booking_checkbox_services").val();
                        $( "#nd_booking_booking_checkbox_services" ).val( nd_booking_service_value+nd_booking_service_previous_value );

                        var nd_booking_booking_service_id = $(this).attr("data-id");
                        var nd_booking_service_previous_value_id = $("#nd_booking_booking_checkbox_services_id").val();
                        $( "#nd_booking_booking_checkbox_services_id" ).val( nd_booking_booking_service_id+nd_booking_service_previous_value_id );

                        nd_booking_final_price();

                    }else{

                        var nd_booking_service_value = $( this ).val();
                        var nd_booking_service_previous_value = $("#nd_booking_booking_checkbox_services").val();
                        var nd_booking_booking_checkbox_services = nd_booking_service_previous_value.replace(nd_booking_service_value, "");
                        $( "#nd_booking_booking_checkbox_services" ).val( nd_booking_booking_checkbox_services );

                        var nd_booking_booking_service_id = $(this).attr("data-id");
                        var nd_booking_service_previous_value_id = $("#nd_booking_booking_checkbox_services_id").val();
                        var nd_booking_booking_checkbox_services_id = nd_booking_service_previous_value_id.replace(nd_booking_booking_service_id, "");
                        $( "#nd_booking_booking_checkbox_services_id" ).val( nd_booking_booking_checkbox_services_id );

                        nd_booking_final_price();
                       
                    }

                    
                });

            });

          });
          //]]>
        </script>


        <div class="nd_booking_section nd_booking_height_40"></div>
        </div>

    ';

}
//END additional services