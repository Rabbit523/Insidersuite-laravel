<?php

//default
$nd_booking_title = get_the_title();
$nd_booking_content = do_shortcode(get_the_content());
$nd_booking_id = get_the_ID();
$nd_booking_permalink = get_permalink( $nd_booking_id );

//ids
$nd_booking_id_room = get_post_meta( get_the_ID(), 'nd_booking_id_room', true );
if ( $nd_booking_id_room == '' ) { $nd_booking_id_room = $nd_booking_id; }else{ $nd_booking_id_room = $nd_booking_id_room; }

//metabox
$nd_booking_meta_box_min_price = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_min_price', true );
$nd_booking_meta_box_color = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_color', true ); if ($nd_booking_meta_box_color == '') { $nd_booking_meta_box_color = '#000'; }
$nd_booking_meta_box_max_people = get_post_meta( get_the_ID(), 'nd_booking_meta_box_max_people', true );
$nd_booking_meta_box_room_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_size', true );
$nd_booking_meta_box_text_preview = get_post_meta( get_the_ID(), 'nd_booking_meta_box_text_preview', true );
$nd_booking_meta_box_branches = get_post_meta( get_the_ID(), 'nd_booking_meta_box_branches', true );
$nd_booking_meta_box_cpt_4_stars = get_post_meta( $nd_booking_meta_box_branches, 'nd_booking_meta_box_cpt_4_stars', true );


if ( nd_booking_is_available_block($nd_booking_id_room,$nd_booking_date_from,$nd_booking_date_to) == 0 ) {
    
    $nd_booking_availability = "<span class='nd_options_color_white nd_booking_font_size_10 nd_booking_line_height_10 nd_booking_letter_spacing_2 nd_booking_padding_3_5 nd_booking_top_10 nd_booking_position_absolute nd_booking_right_10 nd_booking_bg_yellow'>".__('NOT AVAILABLE','nd-booking')."</span>";

}else{

    //available or not
    if ( nd_booking_is_qnt_available(nd_booking_is_available($nd_booking_id_room,$nd_booking_date_from,$nd_booking_date_to),$nd_booking_date_from,$nd_booking_date_to,$nd_booking_id_room) == 1 ) {
        
        //check the options min booking days
        $nd_booking_meta_box_min_booking_day = get_post_meta( $nd_booking_id_room, 'nd_booking_meta_box_min_booking_day', true ); 
        if ( $nd_booking_meta_box_min_booking_day == '' ) { $nd_booking_meta_box_min_booking_day = 1; }
        if ( nd_booking_get_number_night($nd_booking_date_from,$nd_booking_date_to) >= $nd_booking_meta_box_min_booking_day ) {
            
            $nd_booking_availability = "";

        }else{

            $nd_booking_availability = "<span class='nd_options_color_white nd_booking_font_size_10 nd_booking_line_height_10 nd_booking_letter_spacing_2 nd_booking_padding_3_5 nd_booking_top_10 nd_booking_position_absolute nd_booking_right_10 nd_booking_bg_greydark'>".__('MINIMUM BOOKING DAYS','nd-booking')." : ".$nd_booking_meta_box_min_booking_day."</span>";

        }


    }else{
        $nd_booking_availability = "<span class='nd_options_color_white nd_booking_font_size_10 nd_booking_line_height_10 nd_booking_letter_spacing_2 nd_booking_padding_3_5 nd_booking_top_10 nd_booking_position_absolute nd_booking_right_10 nd_booking_bg_yellow'>".__('NOT AVAILABLE','nd-booking')."</span>";
    }

}


//image
if ( has_post_thumbnail() ) { 
    $nd_booking_image = '

        <div class="nd_booking_section nd_booking_position_relative">

            '.$nd_booking_availability.'

            <img class="nd_booking_section" src="'.nd_booking_get_post_img_src(get_the_ID()).'">

            <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                <div class="nd_booking_position_absolute nd_booking_bottom_20">
                    <p class="nd_options_color_white nd_booking_margin_right_10 nd_booking_float_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.get_the_title($nd_booking_meta_box_branches).'</p>';

                    $nd_booking_meta_box_branches_stars = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_stars', true );
                    for ($nd_booking_meta_box_cpt_4_stars_i = 0; $nd_booking_meta_box_cpt_4_stars_i < $nd_booking_meta_box_cpt_4_stars; $nd_booking_meta_box_cpt_4_stars_i++) {
                        
                        $nd_booking_image .= '<img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="10" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-white.svg">';

                    }
                    
                $nd_booking_image .= '
                </div>
            </div>

        </div>


    ';
}else{ 
    $nd_booking_image = '';
}


$nd_booking_shortcode_right_content .= '



<div id="nd_booking_archive_cpt_1_single_'.$nd_booking_id.'" class="nd_booking_masonry_item nd_booking_width_100_percentage nd_booking_width_100_percentage_responsive">

    <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

        <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">
            
            '.$nd_booking_image.'

            <div class="nd_booking_section nd_booking_padding_30 nd_booking_box_sizing_border_box">

                <a href="'.nd_booking_get_room_link($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to,$nd_booking_archive_form_guests).'"><h1>'.$nd_booking_title.'</h1></a>
                <div class="nd_booking_section nd_booking_height_10"></div>

                <div class="nd_booking_section">
                    <div class="nd_booking_display_table nd_booking_float_left">
                        <img alt="" class="nd_booking_margin_right_10 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="23" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-user-grey.svg">
                        <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">'.$nd_booking_meta_box_max_people.' '.__('GUESTS','nd-booking').'</p>
                        <img alt="" class="nd_booking_margin_right_10 nd_booking_margin_left_20 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="20" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-plan-grey.svg">
                        <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">'.$nd_booking_meta_box_room_size.' '.nd_booking_get_units_of_measure().'</p>
                    </div>
                </div> 
        
                <div class="nd_booking_section nd_booking_height_20"></div> 
                <p>'.$nd_booking_meta_box_text_preview.'</p>';

                
                if ( nd_booking_is_available_block($nd_booking_id_room,$nd_booking_date_from,$nd_booking_date_to) == 1 ) {

                    if ( nd_booking_is_qnt_available(nd_booking_is_available($nd_booking_id_room,$nd_booking_date_from,$nd_booking_date_to),$nd_booking_date_from,$nd_booking_date_to,$nd_booking_id_room) == 1 ) {

                        //check the options min booking days
                        $nd_booking_meta_box_min_booking_day = get_post_meta( $nd_booking_id_room, 'nd_booking_meta_box_min_booking_day', true );
                        if ( $nd_booking_meta_box_min_booking_day == '' ) { $nd_booking_meta_box_min_booking_day = 1; }
                        if ( nd_booking_get_number_night($nd_booking_date_from,$nd_booking_date_to) >= $nd_booking_meta_box_min_booking_day ) {

                            $nd_booking_trip_price = 0;
                            $nd_booking_index = 1;
                            $nd_booking_date_cicle = $nd_booking_date_from;
                            while ($nd_booking_index <= nd_booking_get_number_night($nd_booking_date_from,$nd_booking_date_to)) {

                                $nd_booking_trip_price = $nd_booking_trip_price + nd_booking_get_final_price($nd_booking_id,$nd_booking_date_cicle);

                                $nd_booking_date_cicle = date('Y/m/d', strtotime($nd_booking_date_cicle.' + 1 days'));

                                $nd_booking_index++;
                            } 


                            $nd_booking_shortcode_right_content .= '
                            <div class="nd_booking_section nd_booking_height_20"></div>
                            <form method="post" action="';

                            if ( nd_booking_get_room_link($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to,$nd_booking_archive_form_guests) == $nd_booking_permalink ) {
                                $nd_booking_shortcode_right_content .= nd_booking_booking_page();
                            }else{
                                $nd_booking_shortcode_right_content .= nd_booking_get_room_link($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to,$nd_booking_archive_form_guests);
                            }

                            $nd_booking_shortcode_right_content .= '">

                                <input type="hidden" name="nd_booking_form_booking_id" value="'.$nd_booking_id.'-'.$nd_booking_id_room.'">
                                <input type="hidden" name="nd_booking_form_booking_date_from" value="'.$nd_booking_date_from.'">
                                <input type="hidden" name="nd_booking_form_booking_date_to" value="'.$nd_booking_date_to.'">
                                <input type="hidden" name="nd_booking_form_booking_guests" value="'.$nd_booking_archive_form_guests.'">
                                <input type="hidden" name="nd_booking_form_booking_arrive_advs" value="1">
                                <input style="border:2px solid '.$nd_booking_meta_box_color.'; color:'.$nd_booking_meta_box_color.';" class="nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_booking_background_color_transparent_important nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2" type="submit" value="'.__('BOOK NOW','nd-booking').' '.__('FOR','nd-booking').' '.$nd_booking_trip_price.' '.nd_booking_get_currency().'">
                            </form>';

                        }

                    }

                }
                

                
                //SERVICES explode the string
                $nd_booking_meta_box_normal_services_array = explode(',', get_post_meta( $nd_booking_id, 'nd_booking_meta_box_normal_services', true ) );

                if ( get_post_meta( $nd_booking_id, 'nd_booking_meta_box_normal_services', true ) != '' ) {


                    $nd_booking_shortcode_right_content .= '
                    <div class="nd_booking_section nd_booking_height_20"></div> 
                    <div class="nd_booking_section nd_booking_height_1 nd_booking_border_bottom_1_solid_grey"></div> 
                    <div class="nd_booking_section nd_booking_height_20"></div>';


                    //START CICLE
                    for ($nd_booking_meta_box_normal_services_array_i = 0; $nd_booking_meta_box_normal_services_array_i < count($nd_booking_meta_box_normal_services_array)-1; $nd_booking_meta_box_normal_services_array_i++) {
                        
                        $nd_booking_page_by_path = get_page_by_path($nd_booking_meta_box_normal_services_array[$nd_booking_meta_box_normal_services_array_i],OBJECT,'nd_booking_cpt_2');
                        
                        //info service
                        $nd_booking_service_id = $nd_booking_page_by_path->ID;
                        $nd_booking_service_name = get_the_title($nd_booking_service_id);

                        //metabox
                        $nd_booking_meta_box_cpt_2_icon = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_icon', true );

                        $nd_booking_shortcode_right_content .= '
                             <a title="'.$nd_booking_service_name.'" class="nd_booking_tooltip_jquery nd_booking_float_left"><img alt="'.$nd_booking_service_name.'" class="nd_booking_margin_right_15 nd_booking_float_left" width="23" height="23" src="'.$nd_booking_meta_box_cpt_2_icon.'"></a>
                        ';

                    }
                    //END CICLE


                    $nd_booking_shortcode_right_content .= '
                    <a href="'.nd_booking_get_room_link($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to,$nd_booking_archive_form_guests).'" class="nd_booking_margin_top_7 nd_booking_float_right nd_booking_display_inline_block nd_booking_text_align_center nd_booking_box_sizing_border_box nd_booking_font_size_12">
                        <span class="nd_booking_float_left nd_booking_font_size_11 nd_booking_letter_spacing_2">'.__('FULL INFO','nd-booking').'</span>
                        <img alt="" class="nd_booking_margin_left_5 nd_booking_float_left" width="10" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-right-arrow-grey.svg">
                    </a>';

                }

                


                

            $nd_booking_shortcode_right_content .= '
            </div>
        </div>

    </div>

</div>';