<?php

$str .= '
	<div id="nd_booking_vc_steps" class="nd_booking_section nd_booking_text_align_center '.$nd_booking_class.' ">
		
		<div class="nd_booking_section">
			<h1 class="nd_options_color_white nd_booking_font_size_55 nd_booking_font_size_40_all_iphone nd_options_first_font">'.$nd_booking_title_step.'</h1>
		</div>';


	
if ( $nd_booking_display_steps == 'yes' ) {

	$str .= '

		<style>
		.nd_booking_bg_custom_color { 
			background-color:'.$nd_booking_bg_color.' !important; 
			border-color: '.$nd_booking_bg_color.' !important;
		}
		</style>

		<div class="nd_booking_section nd_booking_height_100"></div>

		<!--start steps-->
		<div class="nd_booking_section nd_booking_position_relative ">
	        <ul class="nd_booking_list_style_none nd_booking_padding_0 nd_booking_margin_0">
	            
	            <li id="nd_booking_vc_steps_search" class="nd_booking_display_inline_block nd_booking_margin_right_20 nd_booking_margin_left_20">
	                <h1 class=" '.$nd_booking_search_class.' nd_booking_width_20 nd_booking_height_20 nd_booking_line_height_20 nd_booking_font_size_11 nd_booking_display_inline_block nd_booking_border_radius_100_percentage nd_options_color_white nd_booking_margin_right_10">1</h1>
	                <a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase" href="'.nd_booking_search_page().'">'.__('Search','nd-booking').'</a>
	            </li>
	            <li id="nd_booking_vc_steps_booking" class="nd_booking_display_inline_block nd_booking_margin_right_20 nd_booking_margin_left_20">
	                <h1 class=" '.$nd_booking_booking_class.' nd_booking_width_20 nd_booking_height_20 nd_booking_line_height_20 nd_booking_font_size_11 nd_booking_display_inline_block nd_booking_border_radius_100_percentage nd_options_color_white nd_booking_margin_right_10">2</h1>
	                <a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_cursor_text" href="#">'.__('Booking','nd-booking').'</a>
	            </li>
	            <li id="nd_booking_vc_steps_checkout" class="nd_booking_display_inline_block nd_booking_margin_right_20 nd_booking_margin_left_20">
	                <h1 class=" '.$nd_booking_checkout_class.' nd_booking_width_20 nd_booking_height_20 nd_booking_line_height_20 nd_booking_font_size_11 nd_booking_display_inline_block nd_booking_border_radius_100_percentage nd_options_color_white nd_booking_margin_right_10">3</h1>
	                <a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_cursor_text" href="#">'.__('Checkout','nd-booking').'</a>
	            </li>
	            <li id="nd_booking_vc_steps_thankyou" class="nd_booking_display_inline_block nd_booking_margin_right_20 nd_booking_margin_left_20">
	                <h1 class=" '.$nd_booking_thankyou_class.' nd_booking_width_20 nd_booking_height_20 nd_booking_line_height_20 nd_booking_font_size_11 nd_booking_display_inline_block nd_booking_border_radius_100_percentage nd_options_color_white nd_booking_margin_right_10">4</h1>
	                <a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_cursor_text" href="#">'.__('Thank You','nd-booking').'</a>
	            </li>
	            
	        </ul>
	    </div>
	    <!--end steps-->';

}



$str .= '
	</div>
';

