<?php


//header
get_header( );

$nd_booking_result = '';

//get header image info
$nd_booking_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_cpt_4_position', true );
$nd_booking_meta_box_image = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_cpt_4', true );

$nd_booking_meta_box_cpt_4_color = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_color', true );

$nd_booking_meta_box_cpt_4_phone = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_phone', true );
$nd_booking_meta_box_cpt_4_address = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_address', true );
$nd_booking_meta_box_cpt_4_city = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_city', true );
$nd_booking_meta_box_cpt_4_state = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_state', true );
$nd_booking_meta_box_cpt_4_email = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_email', true );
$nd_booking_meta_box_cpt_4_stars = get_post_meta( get_the_ID(), 'nd_booking_meta_box_cpt_4_stars', true );


if ( $nd_booking_meta_box_image != '' ) {	


	$nd_booking_result .= '
	<div id="nd_booking_single_cpt_4_header_image" class="nd_booking_section nd_booking_background_size_cover '.$nd_booking_meta_box_image_position.' " style="background-image:url('.$nd_booking_meta_box_image.');">

        <div class="nd_booking_section nd_booking_bg_greydark_alpha_2">';

            if ( nd_booking_get_container() != 1) {  $nd_booking_result .= '<div class="nd_booking_container nd_booking_box_sizing_border_box nd_booking_clearfix">'; }

            	$nd_booking_result .= '
                <div id="nd_booking_single_cpt_4_header_image_space_top" class="nd_booking_section nd_booking_height_110"></div>

               	<div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box nd_booking_text_align_center">

                    <h1 class="nd_options_color_white nd_booking_font_size_55 nd_booking_font_size_40_all_iphone nd_booking_line_height_40_all_iphone nd_options_first_font">'.get_the_title().'</h1>

                </div>
               	
                <div id="nd_booking_single_cpt_4_header_image_space_bottom" class="nd_booking_section nd_booking_height_110"></div>

               ';


            if ( nd_booking_get_container() != 1 ) { $nd_booking_result .= '</div>'; }


        $nd_booking_result .= '
        </div>

    </div>';

}


if ( nd_booking_get_container() != 1) {  $nd_booking_result .= '<div class="nd_booking_container nd_booking_box_sizing_border_box nd_booking_clearfix">'; }


if(have_posts()) :
	while(have_posts()) : the_post();


	    //default
	    $nd_booking_title = get_the_title();
	    $nd_booking_content = do_shortcode(get_the_content());
	    $nd_booking_id = get_the_ID();
	    $nd_booking_meta_box_page_layout = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_page_layout_cpt_4', true );
	    

	    //free content
	    if ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_cpt_4_free_content' ) {

	    	$nd_booking_result .= '


	    	<!--START CONTENT-->
			<div class="nd_booking_width_100_percentage nd_booking_float_left">
			 
			    <div class="nd_booking_section nd_booking_padding_0_15 nd_booking_box_sizing_border_box">

			    	<p>'.$nd_booking_content.'</p>
			    	
			    </div>

			</div> 
			<!--END CONTENT-->

	    	';

	    }else{

	    	//address
	    	if ( $nd_booking_meta_box_cpt_4_address != '' ) {

	    		$nd_booking_cpt_4_address_section = '

	    			<div id="nd_booking_single_cpt_4_info_address" class="nd_booking_section nd_booking_position_relative ">

				        <img alt="" class="nd_booking_position_absolute nd_booking_left_0 nd_booking_top_0" width="30" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-map-location-white.svg">

				        <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_left_50"> 
				            
				            <h3 class="nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_weight_lighter nd_options_color_white nd_booking_font_size_13">'.__('ADDRESS','nd-booking').'</h3> 
				            <p class="nd_options_second_font  nd_options_color_white">'.$nd_booking_meta_box_cpt_4_address.' - '.$nd_booking_meta_box_cpt_4_city.' ( '.$nd_booking_meta_box_cpt_4_state.' )</p> 
				            
				        </div>

				    </div>

	    		';

	    	} 


	    	//email
	    	if ( $nd_booking_meta_box_cpt_4_email != '' ) {

	    		$nd_booking_cpt_4_email_section = '

	    			<div id="nd_booking_single_cpt_4_info_email" class="nd_booking_section nd_booking_position_relative nd_booking_margin_top_20">

				        <img alt="" class="nd_booking_position_absolute nd_booking_left_0 nd_booking_top_0" width="30" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-message-white.svg">

				        <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_left_50"> 
				            
				            <h3 class="nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_weight_lighter nd_options_color_white nd_booking_font_size_13">'.__('EMAIL','nd-booking').'</h3> 
				            <p class="nd_options_second_font  nd_options_color_white">'.$nd_booking_meta_box_cpt_4_email.'</p> 
				            
				        </div>

				    </div>

	    		';

	    	} 


	    	//phone
	    	if ( $nd_booking_meta_box_cpt_4_phone != '' ) {

	    		$nd_booking_cpt_4_phone_section = '

	    			<div id="nd_booking_single_cpt_4_info_phone" class="nd_booking_section nd_booking_position_relative nd_booking_margin_top_20">

				        <img alt="" class="nd_booking_position_absolute nd_booking_left_0 nd_booking_top_0" width="30" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-smartphone-white.svg">

				        <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_left_50"> 
				            
				            <h3 class="nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_weight_lighter nd_options_color_white nd_booking_font_size_13">'.__('PHONE','nd-booking').'</h3> 
				            <p class="nd_options_second_font  nd_options_color_white">'.$nd_booking_meta_box_cpt_4_phone.'</p> 
				            
				        </div>

				    </div>

	    		';

	    	} 


	    	//stars
	    	$nd_booking_stars = '';
	    	for ($nd_booking_meta_box_cpt_4_stars_i = 0; $nd_booking_meta_box_cpt_4_stars_i < $nd_booking_meta_box_cpt_4_stars; $nd_booking_meta_box_cpt_4_stars_i++) {
                            
                $nd_booking_stars .= '<img alt="" class="nd_booking_margin_right_5" width="15" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">';

            }

		  	$nd_booking_result .= '

		  		<div class="nd_booking_section nd_booking_height_50"></div>

		  		<!--START CONTENT-->
				<div class="nd_booking_width_100_percentage nd_booking_float_left">
				 
				    <div id="nd_booking_single_cpt_4_content" class="nd_booking_width_66_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_15 nd_booking_float_left nd_booking_box_sizing_border_box">

				    	<p>'.$nd_booking_content.'</p>
				    	
				    </div>

				    <div id="nd_booking_single_cpt_4_info" class="nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_15 nd_booking_float_left nd_booking_box_sizing_border_box">

				    	<div style="background-color:'.$nd_booking_meta_box_cpt_4_color.';" class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_30">

				    		'.$nd_booking_cpt_4_address_section.'
				    		'.$nd_booking_cpt_4_phone_section.'
				    		'.$nd_booking_cpt_4_email_section.'	

				    	</div>
				    	
				    </div>

				</div>

				<div id="nd_booking_single_cpt_4_all_rooms" class="nd_booking_width_100_percentage nd_booking_float_left">

					<div class="nd_booking_section nd_booking_height_50"></div>

					<div id="nd_booking_single_cpt_4_all_rooms_stars" class="nd_booking_section nd_booking_text_align_center">'.$nd_booking_stars.'</div>
					
				    <div class="nd_booking_section nd_booking_height_15"></div>
				    <h1 id="nd_booking_single_cpt_4_all_rooms_title" class="nd_booking_text_align_center nd_booking_color_greydark nd_booking_font_size_55 nd_booking_font_size_40_all_iphone nd_booking_line_height_40_important_all_iphone nd_options_first_font ">'.__('Our Rooms','nd-booking').'</h1>
				    <div class="nd_booking_section nd_booking_height_30"></div>

				    '.do_shortcode('[nd_booking_rooms_pg nd_booking_branches="'.get_the_ID().'" nd_booking_width="nd_booking_width_33_percentage nd_booking_float_left" nd_booking_orderby="date" nd_booking_image_size="large" nd_booking_qnt="-1"]').'

				</div>

				<!--END CONTENT-->

				<div class="nd_booking_section nd_booking_height_50"></div>

			';

		}
  
	endwhile;
endif;


if ( nd_booking_get_container() != 1 ) { $nd_booking_result .= '</div>'; }


echo $nd_booking_result;


//footer
get_footer( );


