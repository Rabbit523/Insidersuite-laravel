<?php

$nd_booking_integration_enable = get_option('nd_booking_integration_enable');
if ( $nd_booking_integration_enable == 1 and get_option('nicdark_theme_author') == 1 ) {



	//add tab in single room metabox
	add_action('nd_booking_single_cpt_1_tab_list','nd_booking_single_cpt_1_add_integration_tab_list');
	function nd_booking_single_cpt_1_add_integration_tab_list(){

	    $nd_booking_integration_tab = '';

	    $nd_booking_integration_tab .= '
	    <li id="nd_booking_tab_integr">
	    	<a href="#nd_booking_tab_integration">
	    		<span class="dashicons-before dashicons-admin-plugins nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span>
	    		'.__('Integration External Booking System','nd-booking').'
	    	</a>
	    </li>';

	    echo $nd_booking_integration_tab;
	}



	//add tab in single room metabox
	add_action('nd_booking_single_cpt_1_tab_content','nd_booking_single_cpt_1_add_integration_tab_content');
	function nd_booking_single_cpt_1_add_integration_tab_content(){

		$nd_booking_meta_box_room_custom_link = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_custom_link', true );
		$nd_booking_meta_box_room_integration = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_integration', true );

	    $nd_booking_integration_tab_content = '';

	    $nd_booking_integration_tab_content .= '

	    	<div id="nd_booking_tab_integration">
                
			    <div class="nd_booking_section nd_booking_border_bottom_1_solid_eee nd_booking_padding_10 nd_booking_box_sizing_border_box">
				    <p><strong>'.__('Set your profile','nd-booking').'</strong></p>
	                <p>
					    <select class="nd_booking_width_100_percentage" name="nd_booking_meta_box_room_integration" id="nd_booking_meta_box_room_integration">

					    	<option '; if( $nd_booking_meta_box_room_integration == 'nd_booking_meta_box_room_integration_custom' ) { $nd_booking_integration_tab_content .= 'selected="selected"'; } $nd_booking_integration_tab_content .= 'value="nd_booking_meta_box_room_integration_custom">'.__('Custom Link','nd-booking').'</option>
					    	<option '; if( $nd_booking_meta_box_room_integration == 'nd_booking_meta_box_room_integration_booking' ) { $nd_booking_integration_tab_content .= 'selected="selected"'; } $nd_booking_integration_tab_content .= 'value="nd_booking_meta_box_room_integration_booking">'.__('Booking','nd-booking').'</option>
					    	<option '; if( $nd_booking_meta_box_room_integration == 'nd_booking_meta_box_room_integration_airbnb' ) { $nd_booking_integration_tab_content .= 'selected="selected"'; } $nd_booking_integration_tab_content .= 'value="nd_booking_meta_box_room_integration_airbnb">'.__('Air B&B','nd-booking').'</option>
					    	<option '; if( $nd_booking_meta_box_room_integration == 'nd_booking_meta_box_room_integration_hostelworld' ) { $nd_booking_integration_tab_content .= 'selected="selected"'; } $nd_booking_integration_tab_content .= 'value="nd_booking_meta_box_room_integration_hostelworld">'.__('Hostel World','nd-booking').'</option>
					    	<option '; if( $nd_booking_meta_box_room_integration == 'nd_booking_meta_box_room_integration_tripadvisor' ) { $nd_booking_integration_tab_content .= 'selected="selected"'; } $nd_booking_integration_tab_content .= 'value="nd_booking_meta_box_room_integration_tripadvisor">'.__('Trip Advisor','nd-booking').'</option>
   
		                </select>
		            </p>
		            <p>'.__('Select which integration do you want to have for this room','nd-booking').' <a target="_blank" href="http://documentations.cleanthemes.net/hotel-booking/custom-link-integration/">'.__('VIEW DOCUMENTATION','nd-booking').'</a></p>
	            </div>

			    <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
                    <p><strong>'.__('Custom Link','nd-booking').'</strong></p>
                    <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_meta_box_room_custom_link" id="nd_booking_meta_box_room_custom_link" value="'.$nd_booking_meta_box_room_custom_link.'" /></p>
                    <p>'.__('Insert the custom link of the room wich will be the link on all room previews ( connection with your booking system )','nd-booking').' <a target="_blank" href="http://documentations.cleanthemes.net/hotel-booking/custom-link-integration/">'.__('VIEW DOCUMENTATION','nd-booking').'</a></p>
                </div>
			    
			</div>

	    ';

	    echo $nd_booking_integration_tab_content;
	}



	add_action( 'save_post', 'nd_booking_meta_box_integration' );
	function nd_booking_meta_box_integration( $post_id )
	{

		if( isset( $_POST['nd_booking_meta_box_room_integration'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_room_integration', wp_kses( $_POST['nd_booking_meta_box_room_integration'], $allowed ) );
	    if( isset( $_POST['nd_booking_meta_box_room_custom_link'] ) ) update_post_meta( $post_id, 'nd_booking_meta_box_room_custom_link', wp_kses( $_POST['nd_booking_meta_box_room_custom_link'], $allowed ) );

	   
	}

}

