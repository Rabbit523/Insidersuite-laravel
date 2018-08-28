<?php


//create settings
add_action("nd_booking_add_addons_settings_group","nd_booking_add_wpml_setting");
function nd_booking_add_wpml_setting(){
	register_setting( 'nd_booking_addons_settings_group', 'nd_booking_integration_wpml' );
}

//add settings in plugin option
add_action("nd_booking_add_setting_on_main_addons","nd_booking_add_wpml_field");
function nd_booking_add_wpml_field(){
	

	$nd_booking_add_wpml_field = '
		<div class="nd_booking_section nd_booking_height_20"></div>
        <label class="nd_booking_section"><input '; if( get_option("nd_booking_integration_wpml") == 1 ) { $nd_booking_add_wpml_field .= 'checked="checked"'; } $nd_booking_add_wpml_field .= 'name="nd_booking_integration_wpml" type="checkbox" value="1"> '.__("WPML Integration","nd-booking").'</label>
	';

	echo $nd_booking_add_wpml_field;
}


$nd_booking_integration_wpml = get_option('nd_booking_integration_wpml');
if ( $nd_booking_integration_wpml == 1 and get_option('nicdark_theme_author') == 1 ) {


	//add the tab
	add_action("nd_booking_single_cpt_1_tab_list","nd_booking_add_id_metabox_on_cpt_1");
	function nd_booking_add_id_metabox_on_cpt_1(){

	    $nd_booking_tab_id = '

	    	<li id="nd_booking_tab_id"><a href="#nd_booking_tab_id_room"><span class="dashicons-before dashicons-admin-network nd_booking_line_height_20 nd_booking_margin_right_10 nd_booking_color_444444"></span>'.__('ID Room','nd-booking').'</a></li>

	    ';

	    echo $nd_booking_tab_id;
		
	}
	

	//add the tab content
	add_action("nd_booking_single_cpt_1_tab_content","nd_booking_add_id_metabox_content_on_cpt_1");
	function nd_booking_add_id_metabox_content_on_cpt_1(){

		//IDs
	    $nd_booking_post_id_room = get_post_meta( get_the_ID(), 'nd_booking_post_id_room', true );
	    $nd_booking_id_room = get_post_meta( get_the_ID(), 'nd_booking_id_room', true );

	    $nd_booking_tab_ids_content = '

	    	<div id="nd_booking_tab_id_room">

		        <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_border_bottom_1_solid_eee">
		            <p><strong>'.__('Post ID','nd-booking').'</strong></p>
		            <p><input readonly class="nd_booking_width_100_percentage" type="text" name="nd_booking_post_id_room" id="nd_booking_post_id_room" value="'.get_the_ID().'" /></p>
		            <p>'.__('This is the default Post ID','nd-booking').'</p>
		        </div>

		        <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box">
		            <p><strong>'.__('Room ID','nd-booking').'</strong></p>
		            <p><input class="nd_booking_width_100_percentage" type="text" name="nd_booking_id_room" id="nd_booking_id_room" value="'.$nd_booking_id_room.'" /></p>
		            <p>'.__('If you are using WPML and this is a translated room, enter the room post ID of the deafult language.','nd-booking').' <a target="_blank" href="http://documentations.nicdark.com/hotel-booking/multilanguage/">'.__('More info in the documentation.','nd-booking').'</a></p>
		        </div>

		    </div>

	    ';

	    echo $nd_booking_tab_ids_content;
		
	}


}