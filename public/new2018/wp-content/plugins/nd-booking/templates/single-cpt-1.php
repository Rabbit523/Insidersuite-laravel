<?php


//header
get_header( );

$nd_booking_result = '';


//get header image info
$nd_booking_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image_position', true );
$nd_booking_meta_box_image = get_post_meta( get_the_ID(), 'nd_booking_meta_box_image', true );
$nd_booking_meta_box_min_price = get_post_meta( get_the_ID(), 'nd_booking_meta_box_min_price', true );
$nd_booking_meta_box_title_packages = get_post_meta( get_the_ID(), 'nd_booking_meta_box_title_packages', true );


if ( $nd_booking_meta_box_image != '' ) {	

	//similar room link
	$nd_booking_meta_box_similar_rooms = get_post_meta( get_the_ID(), 'nd_booking_meta_box_similar_rooms', true );
	if ( $nd_booking_meta_box_similar_rooms != '' ) {
		$nd_booking_similar_rooms_link = '<li class="nd_booking_display_inline_block nd_booking_margin_right_40 nd_booking_width_100_percentage_all_iphone nd_booking_margin_0_all_iphone"><a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase" href="#nd_booking_single_cpt_1_similar_rooms">'.__('Similar Rooms','nd-booking').'</a></li>';	
	}else{
		$nd_booking_similar_rooms_link = '';
	}

	//packages
	if ( $nd_booking_meta_box_title_packages != '' ) {
		$nd_booking_packages_link = '<li class="nd_booking_display_inline_block nd_booking_margin_right_40 nd_booking_width_100_percentage_all_iphone nd_booking_margin_0_all_iphone"><a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase" href="#nd_booking_single_cpt_1_packages">'.$nd_booking_meta_box_title_packages.'</a></li>';
	}else{
		$nd_booking_packages_link = '';
	}

	//services
	$nd_booking_meta_box_normal_services = get_post_meta( get_the_ID(), 'nd_booking_meta_box_normal_services', true );
	if ( $nd_booking_meta_box_normal_services != '' ) {
		$nd_booking_services_link = '<li class="nd_booking_display_inline_block nd_booking_margin_right_40 nd_booking_width_100_percentage_all_iphone nd_booking_margin_0_all_iphone"><a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase" href="#nd_booking_single_cpt_1_services">'.__('Room Services','nd-booking').'</a></li>';
	}else{
		$nd_booking_services_link = '';	
	}


	$nd_booking_result .= '
	<div id="nd_booking_single_cpt_1_header_image" class="nd_booking_section nd_booking_background_size_cover '.$nd_booking_meta_box_image_position.' " style="background-image:url('.$nd_booking_meta_box_image.');">

        <div class="nd_booking_section nd_booking_bg_greydark_alpha_gradient_5">';

            if ( nd_booking_get_container() != 1) {  $nd_booking_result .= '<div class="nd_booking_container nd_booking_box_sizing_border_box nd_booking_clearfix">'; }

            	$nd_booking_result .= '
                <div id="nd_booking_single_cpt_1_header_image_space_top" class="nd_booking_section nd_booking_height_250"></div>

               	
               	<!--START MENU-->
               	<div id="nd_booking_single_cpt_1_header_image_tab" class="nd_booking_width_66_percentage nd_booking_width_100_percentage_responsive nd_booking_padding_15 nd_booking_box_sizing_border_box nd_booking_float_left">
                	
                	<div class="nd_booking_section nd_booking_height_10"></div>
                	<div class="nd_booking_section nd_booking_position_relative ">

					    <ul class="nd_booking_list_style_none nd_booking_padding_0 nd_booking_margin_0 nd_booking_text_align_center_responsive">
					        <li class="nd_booking_display_inline_block nd_booking_margin_right_40 nd_booking_width_100_percentage_all_iphone nd_booking_margin_0_all_iphone"><a class="nd_options_color_white nd_booking_font_size_12 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_bottom_5 nd_booking_border_bottom_2_solid_white" href="#nd_booking_single_cpt_1_description">'.__('Description','nd-booking').'</a></li>
					        '.$nd_booking_services_link.'
					        '.$nd_booking_packages_link.'
					        '.$nd_booking_similar_rooms_link.'
					    </ul>

					</div>
					<div class="nd_booking_section nd_booking_height_20"></div>

                </div>
                <!--END MENU-->


                <!--START PRICE-->
                <div id="nd_booking_single_cpt_1_header_image_price" class="nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_float_left nd_booking_padding_15 nd_booking_box_sizing_border_box">
                	
                	<div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_text_align_center">
                            
					    <div class="nd_booking_display_inline_block ">
					        <div class="nd_booking_float_left nd_booking_text_align_right">
					            <h1 class="nd_options_color_white nd_booking_font_size_50">'.$nd_booking_meta_box_min_price.'</h1>
					        </div>
					        <div class="nd_booking_float_right nd_booking_text_align_left nd_booking_margin_left_10">
					            <h5 class="nd_options_second_font nd_options_color_white nd_booking_margin_top_7 nd_booking_font_size_14">'.nd_booking_get_currency().'</h5>
					            <div class="nd_booking_section nd_booking_height_5"></div>
					            <h3 class="nd_options_second_font nd_options_color_white nd_booking_font_size_14 nd_booking_letter_spacing_2">/ '.__('PER NIGHT','nd-booking').'</h3>
					        </div>
					    </div>

					</div>

                </div>
                <!--END PRICE-->';


            if ( nd_booking_get_container() != 1 ) { $nd_booking_result .= '</div>'; }


        $nd_booking_result .= '
        </div>

    </div>';

}


$nd_booking_packages_enable = get_option('nd_booking_packages_enable'); 
if ( $nd_booking_packages_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_pack_class = ''; }else{ $nd_booking_pack_class = 'nd_booking_display_none'; }
$nd_booking_similar_rooms_enable = get_option('nd_booking_similar_rooms_enable'); 
if ( $nd_booking_similar_rooms_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_s_room_class = ''; }else{ $nd_booking_s_room_class = 'nd_booking_display_none'; }


if ( nd_booking_get_container() != 1) {  $nd_booking_result .= '<div class="nd_booking_container nd_booking_box_sizing_border_box nd_booking_clearfix">'; }


if(have_posts()) :
	while(have_posts()) : the_post();


	    //default
	    $nd_booking_title = get_the_title();
	    $nd_booking_content = do_shortcode(get_the_content());
	    $nd_booking_id = get_the_ID();
	    $nd_booking_meta_box_page_layout = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_page_layout', true );
		$nd_booking_meta_box_featured_image_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_featured_image_size', true );
		$nd_booking_meta_box_featured_image_replace = get_post_meta( get_the_ID(), 'nd_booking_meta_box_featured_image_replace', true );

		//ids
		$nd_booking_id_room = get_post_meta( get_the_ID(), 'nd_booking_id_room', true );
		if ( $nd_booking_id_room == '' ) { $nd_booking_id_room = $nd_booking_id; }else{ $nd_booking_id_room = $nd_booking_id_room; }	    


	    //START calendar widget
	    $nd_booking_meta_box_max_people = get_post_meta( get_the_ID(), 'nd_booking_meta_box_max_people', true );

	    //script
	    wp_enqueue_script('jquery-ui-datepicker');
    	wp_enqueue_style('jquery-ui-datepicker-css', plugins_url() . '/nd-booking/assets/css/jquery-ui-datepicker.css' );

    	//date
    	$nd_booking_date_from = date('m/d/Y');
        $nd_booking_date_to = date('Y-m-d', strtotime(' + 1 days'));
        $nd_booking_archive_form_guests = 1;
        $nd_booking_nights_number = 1;
        $nd_booking_date_number_from_front = date('d');
        $nd_booking_date_month_from_front = date('M');
        $nd_booking_date_month_from_front = date_i18n('M',strtotime($nd_booking_date_from));
        $nd_booking_date_tomorrow = new DateTime('tomorrow');
        $nd_booking_date_number_to_front = $nd_booking_date_tomorrow->format('d');
        $nd_booking_date_month_to_front = $nd_booking_date_tomorrow->format('M');
        $nd_booking_date_month_to_front = date_i18n('M',strtotime($nd_booking_date_to));

        //action
        $nd_booking_meta_box_room_custom_link = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_custom_link', true );
        if ( $nd_booking_meta_box_room_custom_link == '' ) {
        	$nd_booking_form_btn = '<input class="nd_options_color_white nd_booking_width_100_percentage nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_booking_bg_yellow nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2" type="submit" value="'.__('BOOK NOW','nd-booking').'">';
        }else{
        	$nd_booking_form_btn = '<a target="_blank" class="nd_options_text_align_center nd_options_box_sizing_border_box nd_options_color_white nd_booking_width_100_percentage nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_booking_bg_yellow nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2" href="'.$nd_booking_meta_box_room_custom_link.'">'.__('BOOK NOW','nd-booking').'</a>';
        }

        

        $nd_booking_calendar = '';

        $nd_booking_calendar .= '

        	<!--START FORM-->
			<form id="nd_booking_single_cpt_1_calendar" action="'.nd_booking_booking_page().'" method="POST">
				<div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_margin_top_40_responsive nd_booking_margin_bottom_20_responsive">

  					<div class="nd_booking_section nd_booking_bg_greydark nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_box_sizing_border_box">
  					
  						<!--check in/out-->
			            <div id="nd_booking_single_cpt_1_calendar_checkin" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">


			                <div id="nd_booking_open_calendar_from" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
			                  <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                    <h6 class="nd_options_color_white nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">'.__('CHECK-IN','nd-booking').'</h6>
			                    <div class="nd_booking_section nd_booking_height_15"></div> 
			                    <div class="nd_booking_display_inline_flex ">
			                      <div class="nd_booking_float_left nd_booking_text_align_right">
			                        <h1 id="nd_booking_date_number_from_front" class="nd_booking_font_size_50 nd_booking_color_yellow_important">'.$nd_booking_date_number_from_front.'</h1>
			                      </div>
			                      <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
			                          <h6 id="nd_booking_date_month_from_front" class="nd_booking_color_yellow_important  nd_booking_margin_top_7 nd_booking_font_size_12">'.$nd_booking_date_month_from_front.'</h6>
			                          <div class="nd_booking_section nd_booking_height_5"></div>
			                          <img alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">
			                      </div>
			                    </div>
			                  </div>
			                </div>

			                <input type="hidden" id="nd_booking_date_month_from" class="nd_booking_section nd_booking_margin_top_20">
			                <input type="hidden" id="nd_booking_date_number_from" class="nd_booking_section nd_booking_margin_top_20">
			                <input placeholder="Check In" class="nd_booking_section nd_booking_margin_top_30 nd_booking_margin_0_all_iphone nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_from" id="nd_booking_archive_form_date_range_from" value="" />
			            </div>
			            <div id="nd_booking_single_cpt_1_calendar_checkout" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">

			                <div id="nd_booking_open_calendar_to" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
			                  <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                    <h6 class="nd_options_color_white nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">'.__('CHECK-OUT','nd-booking').'</h6>
			                    <div class="nd_booking_section nd_booking_height_15"></div> 
			                    <div class="nd_booking_display_inline_flex ">
			                      <div class="nd_booking_float_left nd_booking_text_align_right">
			                        <h1 id="nd_booking_date_number_to_front" class="nd_booking_font_size_50 nd_booking_color_yellow_important">'.$nd_booking_date_number_to_front.'</h1>
			                      </div>
			                      <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
			                          <h6 id="nd_booking_date_month_to_front" class="nd_booking_color_yellow_important  nd_booking_margin_top_7 nd_booking_font_size_12">'.$nd_booking_date_month_to_front.'</h6>
			                          <div class="nd_booking_section nd_booking_height_5"></div>
			                          <img alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">
			                      </div>
			                    </div>
			                  </div>
			                </div>

			                <input type="hidden" id="nd_booking_date_month_to" class="nd_booking_section nd_booking_margin_top_20">
			                <input type="hidden" id="nd_booking_date_number_to" class="nd_booking_section nd_booking_margin_top_20">
			                <input placeholder="Check Out" class="nd_booking_section nd_booking_margin_top_30 nd_booking_margin_0_all_iphone nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_to" id="nd_booking_archive_form_date_range_to" value="" />
			                
			            </div>  

			            <script type="text/javascript">
			              //<![CDATA[
			              jQuery(document).ready(function() {

			                jQuery( function ( $ ) {

			                    $( "#nd_booking_archive_form_date_range_from" ).datepicker({
			                      defaultDate: "+1w",
			                      minDate: 0,
			                      altField: "#nd_booking_date_month_from",
			                      altFormat: "M",
			                      firstDay: 0,
			                      dateFormat: "mm/dd/yy",
			                      monthNames: ["'.__('January','nd-booking').'","'.__('February','nd-booking').'","'.__('March','nd-booking').'","'.__('April','nd-booking').'","'.__('May','nd-booking').'","'.__('June','nd-booking').'", "'.__('July','nd-booking').'","'.__('August','nd-booking').'","'.__('September','nd-booking').'","'.__('October','nd-booking').'","'.__('November','nd-booking').'","'.__('December','nd-booking').'"],
			                      monthNamesShort: [ "'.__('Jan','nd-booking').'", "'.__('Feb','nd-booking').'", "'.__('Mar','nd-booking').'", "'.__('Apr','nd-booking').'", "'.__('Maj','nd-booking').'", "'.__('Jun','nd-booking').'", "'.__('Jul','nd-booking').'", "'.__('Aug','nd-booking').'", "'.__('Sep','nd-booking').'", "'.__('Oct','nd-booking').'", "'.__('Nov','nd-booking').'", "'.__('Dec','nd-booking').'" ],
			                      dayNamesMin: ["'.__('SU','nd-booking').'","'.__('MO','nd-booking').'","'.__('TU','nd-booking').'","'.__('WE','nd-booking').'","'.__('TH','nd-booking').'","'.__('FR','nd-booking').'", "'.__('SA','nd-booking').'"],
			                      nextText: "'.__('NEXT','nd-booking').'",
			                      prevText: "'.__('PREV','nd-booking').'",
			                      changeMonth: false,
			                      numberOfMonths: 1,
			                      onClose: function() {   
			                        var minDate = $(this).datepicker("getDate");
			                        var newMin = new Date(minDate.setDate(minDate.getDate() + 1));
			                        $( "#nd_booking_archive_form_date_range_to" ).datepicker( "option", "minDate", newMin );

			                        var nd_booking_input_date_from = $( "#nd_booking_archive_form_date_range_from" ).val();
			                        var nd_booking_date_number_from = nd_booking_input_date_from.substring(3, 5);
			                        $( "#nd_booking_date_number_from" ).val(nd_booking_date_number_from);
			                        var nd_booking_input_date_to = $( "#nd_booking_archive_form_date_range_to" ).val();
			                        var nd_booking_date_number_to = nd_booking_input_date_to.substring(3, 5);
			                        $( "#nd_booking_date_number_to" ).val(nd_booking_date_number_to);

			                        $( "#nd_booking_date_number_from_front" ).text(nd_booking_date_number_from);
			                        var nd_booking_date_month_from = $( "#nd_booking_date_month_from" ).val();
			                        $( "#nd_booking_date_month_from_front" ).text(nd_booking_date_month_from);

			                        $( "#nd_booking_date_number_to_front" ).text(nd_booking_date_number_to);
			                        var nd_booking_date_month_to = $( "#nd_booking_date_month_to" ).val();
			                        $( "#nd_booking_date_month_to_front" ).text(nd_booking_date_month_to);

			                        nd_booking_get_nights();

			                      }
			                    });
			                    

			                    $( "#nd_booking_archive_form_date_range_to" ).datepicker({
			                      defaultDate: "+1w",
			                      altField: "#nd_booking_date_month_to",
			                      altFormat: "M",
			                      minDate: "+1d",
			                      monthNames: ["'.__('January','nd-booking').'","'.__('February','nd-booking').'","'.__('March','nd-booking').'","'.__('April','nd-booking').'","'.__('May','nd-booking').'","'.__('June','nd-booking').'", "'.__('July','nd-booking').'","'.__('August','nd-booking').'","'.__('September','nd-booking').'","'.__('October','nd-booking').'","'.__('November','nd-booking').'","'.__('December','nd-booking').'"],
			                      monthNamesShort: [ "'.__('Jan','nd-booking').'", "'.__('Feb','nd-booking').'", "'.__('Mar','nd-booking').'", "'.__('Apr','nd-booking').'", "'.__('Maj','nd-booking').'", "'.__('Jun','nd-booking').'", "'.__('Jul','nd-booking').'", "'.__('Aug','nd-booking').'", "'.__('Sep','nd-booking').'", "'.__('Oct','nd-booking').'", "'.__('Nov','nd-booking').'", "'.__('Dec','nd-booking').'" ],
			                      dayNamesMin: ["'.__('SU','nd-booking').'","'.__('MO','nd-booking').'","'.__('TU','nd-booking').'","'.__('WE','nd-booking').'","'.__('TH','nd-booking').'","'.__('FR','nd-booking').'", "'.__('SA','nd-booking').'"],
			                      nextText: "'.__('NEXT','nd-booking').'",
			                      prevText: "'.__('PREV','nd-booking').'",
			                      changeMonth: false,
			                      firstDay: 0,
			                      dateFormat: "mm/dd/yy",
			                      numberOfMonths: 1,
			                      onClose: function() {   
			                        
			                        var nd_booking_input_date_from = $( "#nd_booking_archive_form_date_range_from" ).val();
			                        var nd_booking_date_number_from = nd_booking_input_date_from.substring(3, 5);
			                        $( "#nd_booking_date_number_from" ).val(nd_booking_date_number_from);
			                        var nd_booking_input_date_to = $( "#nd_booking_archive_form_date_range_to" ).val();
			                        var nd_booking_date_number_to = nd_booking_input_date_to.substring(3, 5);
			                        $( "#nd_booking_date_number_to" ).val(nd_booking_date_number_to);

			                        $( "#nd_booking_date_number_from_front" ).text(nd_booking_date_number_from);
			                        var nd_booking_date_month_from = $( "#nd_booking_date_month_from" ).val();
			                        $( "#nd_booking_date_month_from_front" ).text(nd_booking_date_month_from);

			                        $( "#nd_booking_date_number_to_front" ).text(nd_booking_date_number_to);
			                        var nd_booking_date_month_to = $( "#nd_booking_date_month_to" ).val();
			                        $( "#nd_booking_date_month_to_front" ).text(nd_booking_date_month_to);

			                        nd_booking_get_nights(); 

			                      }
			                    });
			                    
			                    $("#nd_booking_archive_form_date_range_from").datepicker("setDate", "+0");
			                    $("#nd_booking_archive_form_date_range_to").datepicker("setDate", "+1");
			               
			                    function nd_booking_get_nights(){
			                      var nd_booking_archive_form_date_range_from = $("#nd_booking_archive_form_date_range_from").val();
			                      var nd_booking_archive_form_date_range_to = $("#nd_booking_archive_form_date_range_to").val();
			                      var nd_booking_start = new Date(nd_booking_archive_form_date_range_from);
			                      var nd_booking_end = new Date(nd_booking_archive_form_date_range_to);
			                      var nd_booking_nights_number = (nd_booking_end - nd_booking_start) / 1000 / 60 / 60 / 24; 
			                      $( ".nd_booking_nights_number" ).text(nd_booking_nights_number); 
			                    }

			                    $("#nd_booking_open_calendar_from").click(function () {
			                        $("#nd_booking_archive_form_date_range_from").datepicker("show");
			                    });
			                    $("#nd_booking_open_calendar_to").click(function () {
			                        $("#nd_booking_archive_form_date_range_to").datepicker("show");
			                    });

			                });

			              });
			              //]]>
			            </script>
			            <!--check in/out-->


			            <!--guests-->
			            <div id="nd_booking_single_cpt_1_calendar_guests" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
			                <div class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                  <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                    <h6 class="nd_options_color_white nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">'.__('GUESTS','nd-booking').'</h6>
			                    <div class="nd_booking_section nd_booking_height_15"></div> 
			                    <div class="nd_booking_display_inline_flex ">
			                      <div class="nd_booking_float_left nd_booking_text_align_right">
			                          <h1 class="nd_booking_font_size_50 nd_booking_color_yellow_important nd_booking_guests_number">'.$nd_booking_archive_form_guests.'</h1>
			                      </div>
			                      <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
			                          <div class="nd_booking_section nd_booking_height_7"></div>
			                          <div class="nd_booking_section">
			                              <img class="nd_booking_float_right nd_booking_guests_increase nd_booking_cursor_pointer" style="transform: rotate(180deg);" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">
			                          </div>
			                          <div class="nd_booking_section nd_booking_height_10"></div>
			                          <div class="nd_booking_section">
			                              <img class="nd_booking_float_right nd_booking_guests_decrease nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">
			                          </div>
			                      </div>
			                    </div>
			                  </div> 
			                </div>
			                <label class="nd_booking_display_none" for="nd_booking_archive_form_guests">Guests :</label>
			                <input placeholder="Guests" class="nd_booking_section nd_booking_display_none" type="number" name="nd_booking_archive_form_guests" id="nd_booking_archive_form_guests" min="1" value="'.$nd_booking_archive_form_guests.'" />
			            </div>
			            <script type="text/javascript">
			              //<![CDATA[
			              jQuery(document).ready(function() {

			                jQuery( function ( $ ) {

			                  $(".nd_booking_guests_increase").click(function() {
			                    var value = $(".nd_booking_guests_number").text();
			                    
			                    if ( value < '.$nd_booking_meta_box_max_people.' ) {
			                    	value++;
			                    	$(".nd_booking_guests_increase").removeClass( "nd_booking_cursor_not_allowed" );
			                    	$(".nd_booking_guests_increase").addClass( "nd_booking_cursor_pointer" );
				                    $(".nd_booking_guests_number").text(value);
				                    $("#nd_booking_archive_form_guests").val(value);
			                    }else{
			                    	$(".nd_booking_guests_increase").removeClass( "nd_booking_cursor_pointer" );
			                    	$(".nd_booking_guests_increase").addClass( "nd_booking_cursor_not_allowed" );
			                    }	

			                    
			                  }); 

			                  $(".nd_booking_guests_decrease").click(function() {
			                    var value = $(".nd_booking_guests_number").text();
			                    
			                    if ( value > 1 ) {
			                      value--;
			                      $(".nd_booking_guests_increase").removeClass( "nd_booking_cursor_not_allowed" );
			                      $(".nd_booking_guests_increase").addClass( "nd_booking_cursor_pointer" );
			                      $(".nd_booking_guests_number").text(value);
			                      $("#nd_booking_archive_form_guests").val(value);
			                    }
			                    
			                  }); 
			                  
			                });

			              });
			              //]]>
			            </script>
			            <!--guests-->

			            <!--night info-->
			            <div id="nd_booking_single_cpt_1_calendar_nights" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
			                <div class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                  <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
			                    <h6 class="nd_options_color_white nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">'.__('NIGHTS','nd-booking').'</h6>
			                    <div class="nd_booking_section nd_booking_height_15"></div> 
			                    <div class="nd_booking_display_inline_flex ">
			                      <div class="nd_booking_float_left nd_booking_text_align_right">
			                          <h1 class="nd_booking_font_size_50 nd_booking_color_yellow_important nd_booking_nights_number">'.$nd_booking_nights_number.'</h1>
			                      </div>
			                    </div>
			                  </div> 
			                </div>
			                <input type="hidden" name="nd_booking_archive_form_id" id="nd_booking_archive_form_id" value="'.$nd_booking_id.'-'.$nd_booking_id_room.'" />
			                <input type="hidden" name="nd_booking_form_booking_arrive_advs" value="1">
			                <input type="hidden" name="nd_booking_form_booking_arrive_sr" value="1">
			            </div>
			            <!--night info-->


			            <!--START button-->
			            <div id="nd_booking_single_cpt_1_calendar_btn" class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_all_iphone nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
			            	<div class="nd_booking_section nd_booking_height_15 nd_booking_display_none_all_iphone"></div>
			            	'.$nd_booking_form_btn.'
			            </div>
			            <!--END button-->

  					</div>
  				</div>
			</form>
			<!--END FORM-->

			<div class="nd_booking_section nd_booking_height_40"></div>

        ';
        //END calendar widget
	    

	    

	    //START image or custom content
        if ( $nd_booking_meta_box_featured_image_replace == '' ) {

        	if ( has_post_thumbnail() ) { 

		    	$nd_booking_image_id = get_post_thumbnail_id( $nd_booking_id );
			    $nd_booking_image_attributes = wp_get_attachment_image_src( $nd_booking_image_id, $nd_booking_meta_box_featured_image_size );

				$nd_booking_image = '
				<div id="nd_booking_single_cpt_1_image" class="nd_booking_section">

					<div class="nd_booking_section nd_booking_position_relative">

			            <img alt="" class="nd_booking_section" src="'.$nd_booking_image_attributes[0].'">

			            <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
			            </div>

			        </div>				
					
			    </div>
				';
		    }else{ 
		    	$nd_booking_image = '';
		    }

        }else{

			$nd_booking_image = do_shortcode($nd_booking_meta_box_featured_image_replace);        	

        }
        //END image or custom content
	    


	    //page layout
	    if ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_full_width' ) { 
	    	$nd_booking_meta_box_page_layout_content_width = 'nd_booking_width_100_percentage';
	    	$nd_booking_meta_box_page_layout_content_class = 'nd_booking_padding_15 nd_booking_box_sizing_border_box';	
	    }elseif ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_right_sidebar' ) {
	    	$nd_booking_meta_box_page_layout_content_width = 'nd_booking_width_66_percentage';	
	    	$nd_booking_meta_box_page_layout_content_class = 'nd_booking_padding_15 nd_booking_box_sizing_border_box';	
	    }elseif ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_left_sidebar' ){
	    	$nd_booking_meta_box_page_layout_content_width = 'nd_booking_width_66_percentage';	
	    	$nd_booking_meta_box_page_layout_content_class = 'nd_booking_padding_15 nd_booking_box_sizing_border_box';
	    }else{

	    }


	    //free content
	    if ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_free_content' ) {

	    	$nd_booking_result .= '<p>'.$nd_booking_content.'</p>';

	    }else{

		  	$nd_booking_result .= '

		  		<div class="nd_booking_section nd_booking_height_20"></div>

		  		<!--START CONTENT-->
				<div class="nd_booking_width_100_percentage nd_booking_float_left">
				 
				    <div class="nd_booking_section">

				    	<div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box nd_booking_text_align_center_all_iphone">    
					    	<!--START title and branches-->
					        <h1 id="nd_booking_single_cpt_1_title" class="nd_booking_font_size_40 nd_booking_font_size_30_all_iphone ">'.$nd_booking_title.'</h1>
					        <div class="nd_booking_section nd_booking_height_10"></div>
					        <div id="nd_booking_single_cpt_1_subtitle" class="nd_booking_section nd_booking_display_inline_block_all_iphone nd_booking_width_initial_all_iphone nd_booking_float_initial_all_iphone">
					            <p class=" nd_booking_float_left nd_booking_letter_spacing_2"><span class="nd_booking_margin_right_10 nd_booking_text_transform_uppercase">'.get_the_title(get_post_meta( $nd_booking_id, 'nd_booking_meta_box_branches', true )).'</span></p>';

					            $nd_booking_meta_box_branches_stars = get_post_meta( get_post_meta( $nd_booking_id, 'nd_booking_meta_box_branches', true ), 'nd_booking_meta_box_cpt_4_stars', true );
			                    for ($nd_booking_meta_box_cpt_4_stars_i = 0; $nd_booking_meta_box_cpt_4_stars_i < $nd_booking_meta_box_branches_stars; $nd_booking_meta_box_cpt_4_stars_i++) {
			                        
			                        $nd_booking_result .= '<img alt="" class="nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_top_5" width="15" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">';

			                    }

			                $nd_booking_result .= '
					        </div>
					        <!--END title and branches-->
				        </div>
				        ';

				       
				    	//START left sidebar
				    	if ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_left_sidebar' ) { 
				    		
				    		$nd_booking_result .= '
				    		<div class="nd_booking_float_left nd_booking_sidebar nd_booking_padding_15 nd_booking_box_sizing_border_box nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive">
				    			'.$nd_booking_calendar.'
				    		';

				    			echo $nd_booking_result;
					    		dynamic_sidebar("nd_booking_sidebar_cpt_1");
					    	
					    	$nd_booking_result = '</div>';
				    		

				    	}
				    	//END left sidebar
	 

				    	$nd_booking_result .= '
				    	<div class="nd_booking_float_left '.$nd_booking_meta_box_page_layout_content_width.' nd_booking_width_100_percentage_responsive ">
				        	<div class=" nd_booking_width_100_percentage '.$nd_booking_meta_box_page_layout_content_class.' ">

					        	'.$nd_booking_image.'

					        	<div id="nd_booking_single_cpt_1_description" class="nd_booking_section nd_booking_height_50"></div>

						        <!--START basic informations-->
						        <div id="nd_booking_single_cpt_1_basic_info" class="nd_booking_section">
						            <div id="nd_booking_single_cpt_1_basic_info_guests" class="nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_text_align_center">
						                <img alt="" class="" width="40" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-user-grey.svg">
						                <div class="nd_booking_section nd_booking_height_5"></div>
						                <p class="">'.get_post_meta( $nd_booking_id, 'nd_booking_meta_box_max_people', true ).' '.__('GUESTS','nd-booking').'</p>
						            </div>
						            <div id="nd_booking_single_cpt_1_basic_info_measure" class="nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_margin_top_40_all_iphone nd_booking_float_left nd_booking_text_align_center">
						                <img alt="" class="" width="40" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-plan-grey.svg">
						                <div class="nd_booking_section nd_booking_height_5"></div>
						                <p class="">'.get_post_meta( $nd_booking_id, 'nd_booking_meta_box_room_size', true ).' '.nd_booking_get_units_of_measure().'</p>
						            </div>
						            <div id="nd_booking_single_cpt_1_basic_info_night" class="nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_margin_top_40_all_iphone nd_booking_float_left nd_booking_text_align_center">
						                <img alt="" class="" width="40" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-bed-grey.svg">
						                <div class="nd_booking_section nd_booking_height_5"></div>
						                <p class="">'.nd_booking_get_final_price($nd_booking_id,date('m/d/Y')).' '.nd_booking_get_currency().' / '.__('PER NIGHT','nd-booking').'</p>
						            </div>
						            <div id="nd_booking_single_cpt_1_basic_info_week_price" class="nd_booking_week_price_icon nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_margin_top_40_all_iphone nd_booking_float_left nd_booking_text_align_center">
						                <span class="nd_booking_position_relative nd_booking_display_inline_block ">
						                	<img alt="" class="" width="40" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-calendar-grey.svg">';
						                


						                	//START week price information
									    	$nd_booking_date_today = date('m/d/Y');

									    	$nd_booking_date_num = new DateTime();
											$nd_booking_date_num_n = $nd_booking_date_num->format('N');
									    	$nd_booking_date_num_start = 7+($nd_booking_date_num_n-1);
									    	$nd_booking_date_num_end = 7+(7-$nd_booking_date_num_n);

									        $nd_booking_date_start = new DateTime('- '.$nd_booking_date_num_start.' days');
											$nd_booking_date_start = $nd_booking_date_start->format('m/d/Y');
											$nd_booking_date_start_2 = new DateTime($nd_booking_date_start);
											$nd_booking_date_start_format = date_format($nd_booking_date_start_2, 'm/d/Y');

									        $nd_booking_date_end = new DateTime('+ '.$nd_booking_date_num_end.' days');
											$nd_booking_date_end = $nd_booking_date_end->format('m/d/Y');
											$nd_booking_date_end_2 = new DateTime($nd_booking_date_end);
											$nd_booking_date_end_format = date_format($nd_booking_date_end_2, 'm/d/Y');

											$nd_booking_date_cicle = $nd_booking_date_start_format;

							                $nd_booking_result .= '


							                <style>
							                	
							                	.nd_booking_week_price_icon:hover #nd_booking_week_price { display:block; }

							                	.nd_booking_week_price_first_column { background-color: '.get_option( 'nd_booking_customizer_color_dark_2', '#151515' ).'; }

							                	.nd_booking_week_price_current_column > table { border-left:1px solid '.get_option( 'nd_booking_customizer_color_dark_2', '#151515' ).'; border-right:1px solid '.get_option( 'nd_booking_customizer_color_dark_2', '#151515' ).'; }

							                	.nd_booking_week_price_first_column .nd_booking_week_price_first_line { color:'.get_option( 'nd_booking_customizer_color_1', '#c19b76' ).' !important; }
							                	.nd_booking_week_price_first_column .nd_booking_week_price_second_line { color:'.get_option( 'nd_booking_customizer_color_dark_2', '#151515' ).'; }
							                	
							                	.nd_booking_week_price_first_line {
							                		font-size: 12px;
												    padding: 10px;
												    box-sizing: border-box;
												    background-color: '.get_option( 'nd_booking_customizer_color_1', '#c19b76' ).';
												    color: #fff !important;
												    letter-spacing: 2px;
												    line-height: 12px;
							                	}
							                	.nd_booking_week_price_second_line{
							                		font-size: 11px;
												    letter-spacing: 2px;
												    padding: 10px;
												    box-sizing: border-box;
												    line-height: 11px;
												    background-color: '.get_option( 'nd_booking_customizer_color_dark_2', '#151515' ).';
							                	}
							                	.nd_booking_week_price_content p{
							                		font-size:10px;
							                	}

							                	.nd_booking_week_price_content_empty {
							                		color:'.get_option( 'nd_booking_customizer_color_dark_1', '#1c1c1c' ).' !important;
							                	}


							                	.nd_booking_week_price_triangle_down {
									                width: 100%;
									                overflow: hidden;
									                box-sizing: border-box;
									                text-align: center;
									                line-height: 10px;
									                margin-bottom:-10px;
									            }
									            .nd_booking_week_price_triangle_down:after {
									                content: "";
									                display: inline-block;
									                width: 0px;
									                height: 0px;
									                border-left: 10px solid transparent;
									                border-right: 10px solid transparent;
									                border-top: 10px solid '.get_option( 'nd_booking_customizer_color_dark_1', '#1c1c1c' ).';
									                line-height: 10px;
									            }

							                </style>



							                <div id="nd_booking_week_price" class="nd_booking_width_650 nd_booking_padding_bottom_20 nd_booking_display_none nd_booking_width_300_responsive nd_booking_bottom_50 nd_booking_left_305_negative nd_booking_left_130_negative_responsive nd_booking_float_left nd_booking_position_absolute nd_booking_z_index_9">
							                	<div class="nd_booking_section nd_booking_bg_greydark">
							                ';

							                		$nd_booking_date_i = 1;
							                		$nd_booking_date_i_2 = 1;
							                		
							                		#while( $nd_booking_date_cicle <= $nd_booking_date_end_format ) {
							                		for ($nd_booking_for_i = 1; $nd_booking_for_i <= 21; $nd_booking_for_i++) {

							                			$nd_booking_date_week = date("N", strtotime($nd_booking_date_cicle));

							                			
							                			//define class for today
							                			if ( $nd_booking_date_cicle == $nd_booking_date_today ) { $nd_booking_today_class = 'nd_options_color_white'; }else{ $nd_booking_today_class = ''; }

							                			if ( $nd_booking_date_i_2 == 1 ) {
							                				$nd_booking_result .= '
							                					<div class="nd_booking_width_10_percentage nd_booking_display_none_responsive nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_week_price_first_column">
							                						
							                						<p class="nd_booking_week_price_first_line">-</p>
							                						<p class="nd_booking_week_price_second_line">-</p>
							                					
							                						<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('MON','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('TUE','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('WED','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('THU','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('FRI','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('SAT','nd-booking').'</p></td></tr>
											                		</table>
											                		<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
											                     		<tr><td><p>'.__('SUN','nd-booking').'</p></td></tr>
											                		</table>
							                					</div>
							                				';
							                			}

							                			//open div if week number is 1 and index is 
							                			if ( $nd_booking_date_i == 1 ) { 


							                				if ( $nd_booking_date_i_2 == 1 ) {
							                					$nd_booking_week_word = __('PREV WEEK','nd-booking');	
							                					$nd_booking_week_class = 'nd_booking_week_price_prev_column';
							                				}elseif ( $nd_booking_date_i_2 >= 7 and $nd_booking_date_i_2 <= 14 ) {
							                					$nd_booking_week_word = __('CURRENT WEEK','nd-booking');
							                					$nd_booking_week_class = 'nd_booking_week_price_current_column';
							                				}else{
							                					$nd_booking_week_word = __('NEXT WEEK','nd-booking');
							                					$nd_booking_week_class = 'nd_booking_week_price_next_column';		
							                				}


							                				$nd_booking_result .= '
							                				<div class="nd_booking_width_30_percentage nd_booking_width_100_percentage_responsive nd_booking_float_left nd_booking_box_sizing_border_box '.$nd_booking_week_class.' ">
							                					
							                					<div class="nd_booking_section">
							                						<div class="nd_booking_section"><p class="nd_booking_week_price_first_line">'.$nd_booking_week_word.'</p></div>
							                						<div class="nd_booking_width_50_percentage nd_booking_float_left">
							                							<p class="nd_booking_week_price_second_line">'.__('DAY','nd-booking').'</p>
							                						</div>
							                						<div class="nd_booking_width_50_percentage nd_booking_float_left">
							                							<p class="nd_booking_week_price_second_line">'.__('PRICE','nd-booking').'</p>
							                						</div>
							                					</div>
						                						'; 
							                			}

							                			
							                			//display data only if week day is ugual to cicle
							                			if ( $nd_booking_date_week == $nd_booking_date_i ) {

							                				$nd_booking_result .= '
									                     	<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
									                     		<tr class="'.$nd_booking_today_class.'">
									                				<td class="nd_booking_width_50_percentage"><p class="'.$nd_booking_today_class.'">'.$nd_booking_date_cicle.'</p></td>
									                				<td class="nd_booking_width_50_percentage"><p class="'.$nd_booking_today_class.'">'.nd_booking_get_final_price($nd_booking_id,$nd_booking_date_cicle).' '.nd_booking_get_currency().'</p></td>
									                			</tr>
									                		</table>
									                		';

									                		$nd_booking_date_cicle = date('m/d/Y', strtotime($nd_booking_date_cicle.' + 1 days'));

							                			}else{

							                				$nd_booking_result .= '
									                     	<table class="nd_booking_width_100_percentage nd_booking_week_price_content">
									                     		<tr>
									                				<td class="nd_booking_width_50_percentage"><p class="nd_booking_week_price_content_empty">-</p></td>
									                				<td class="nd_booking_width_50_percentage"><p class="nd_booking_week_price_content_empty">-</p></td>
									                			</tr>
									                		</table>
									                		';

									                		$nd_booking_date_cicle = date('m/d/Y', strtotime($nd_booking_date_cicle.' + 1 days'));
									                		$nd_booking_date_cicle = date('m/d/Y', strtotime($nd_booking_date_cicle.' - 1 days'));	

							                			}

													

								                		if ( $nd_booking_date_week == 7 ) { 
								                			$nd_booking_result .= '</div>'; 
								                			$nd_booking_date_i = 1;
								                		}else{
								                			$nd_booking_date_i = $nd_booking_date_i+1;
								                		}

								                		$nd_booking_date_i_2 = $nd_booking_date_i_2+1;
													    					
													}
							                			

							                	$nd_booking_result .= '

							                	<div class="nd_booking_week_price_triangle_down"></div>						                		
							                	
							                	</div>
							                </div>
							                ';
							                
							                //END week price information



							            $nd_booking_result .= '
						                </span>
						                <div class="nd_booking_section nd_booking_height_5"></div>
						                <p class="">
						                	'.__('WEEK PRICE','nd-booking').'
						                	<img alt="" class="nd_booking_margin_left_5" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-info-grey.svg">
						                </p>';


						                



						            $nd_booking_result .= '
						            </div>
						        </div>
						        <!--END basic informations-->

						        <div class="nd_booking_section nd_booking_height_30"></div>
						        <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey nd_booking_single_cpt_1_divider"></div>
						        <div class="nd_booking_section nd_booking_height_40"></div>

					        	<p>'.$nd_booking_content.'</p>';


						        
						        //START services
					        	$nd_booking_meta_box_normal_services = get_post_meta( get_the_ID(), 'nd_booking_meta_box_normal_services', true );
								
								if ( $nd_booking_meta_box_normal_services != '' ) {

									$nd_booking_meta_box_normal_services_array = explode(',', get_post_meta( $nd_booking_id, 'nd_booking_meta_box_normal_services', true ) );

									if ( $nd_booking_meta_box_normal_services_array != '' ) {
										
										$nd_booking_result .= '
											<div  id="nd_booking_single_cpt_1_services" class="nd_booking_section nd_booking_height_50"></div>
									        <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey nd_booking_single_cpt_1_divider"></div>
									        

									        <div id="nd_booking_single_cpt_1_services_content" class="nd_booking_section">
									        <div class="nd_booking_section nd_booking_height_40"></div>
									        <div class="nd_booking_section"><h2>'.__('Room Services','nd-booking').'</h2></div>
									        <div class="nd_booking_section nd_booking_height_20"></div>
								        ';

									}

									//START CICLE
									for ($nd_booking_meta_box_normal_services_array_i = 0; $nd_booking_meta_box_normal_services_array_i < count($nd_booking_meta_box_normal_services_array)-1; $nd_booking_meta_box_normal_services_array_i++) {
									    
									    $nd_booking_page_by_path = get_page_by_path($nd_booking_meta_box_normal_services_array[$nd_booking_meta_box_normal_services_array_i],OBJECT,'nd_booking_cpt_2');
									    
									    //info service
									    $nd_booking_service_id = $nd_booking_page_by_path->ID;
									    $nd_booking_service_name = get_the_title($nd_booking_service_id);

									    //metabox
									    $nd_booking_meta_box_cpt_2_icon = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_icon', true );

									   	$nd_booking_result .= '
								   		<div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_padding_10_0">
								            <div class="nd_booking_display_table nd_booking_float_left">
								                <img alt="" class="nd_booking_margin_right_15 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="25" src="'.$nd_booking_meta_box_cpt_2_icon.'">
								                <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_line_height_20">'.$nd_booking_service_name.'</p>
								            </div>
								        </div>';

									}	

								}
								//END services

				    $nd_booking_result .= '</div></div>';


				    			
				    			//START packages
								$nd_booking_meta_box_title_packages = get_post_meta( get_the_ID(), 'nd_booking_meta_box_title_packages', true );
								
								if ( $nd_booking_meta_box_title_packages != '' ) {
								
									$nd_booking_meta_box_packages_array = explode(',', get_post_meta( $nd_booking_id, 'nd_booking_meta_box_packages', true ) );

									if ( $nd_booking_meta_box_packages_array != '' ) {
									  
									  $nd_booking_result .= '
								    	
								    	<div id="nd_booking_single_cpt_1_title_packages" class=" '.$nd_booking_pack_class.' nd_booking_section nd_booking_padding_0_15 nd_booking_box_sizing_border_box">
									    	<div id="nd_booking_single_cpt_1_packages" class="nd_booking_section nd_booking_height_50"></div>
									        <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey nd_booking_single_cpt_1_divider"></div>
									        <div class="nd_booking_section nd_booking_height_40"></div>

									        <div class="nd_booking_section"><h2>'.$nd_booking_meta_box_title_packages.'</h2></div>
									        <div class="nd_booking_section nd_booking_height_30"></div>
								        </div>
									      ';

									}

									$nd_booking_result .= '
									<div id="nd_booking_single_cpt_1_content_packages" class=" '.$nd_booking_pack_class.' nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_0_5">
									';

									//START CICLE
									for ($nd_booking_meta_box_packages_array_i = 0; $nd_booking_meta_box_packages_array_i < count($nd_booking_meta_box_packages_array)-1; $nd_booking_meta_box_packages_array_i++) {
									    
									    $nd_booking_page_by_path = get_page_by_path($nd_booking_meta_box_packages_array[$nd_booking_meta_box_packages_array_i],OBJECT,'post');
									    
									    //info package
									    $nd_booking_package_id = $nd_booking_page_by_path->ID;
									    $nd_booking_package_name = get_the_title($nd_booking_package_id);
									    $nd_booking_package_permalink = get_permalink($nd_booking_package_id);

									    //image
									    $nd_booking_meta_box_packages_image_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_packages_image_size', true );
									    $nd_booking_package_image_id = get_post_thumbnail_id($nd_booking_package_id);
		    							$nd_booking_package_image_attributes = wp_get_attachment_image_src( $nd_booking_package_image_id, $nd_booking_meta_box_packages_image_size );


									    $nd_booking_result .= '
									    <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_0_10">
										    <div class="nd_booking_section nd_booking_position_relative nd_booking_box_sizing_border_box">
										        <img alt="" class="nd_booking_section" src="'.$nd_booking_package_image_attributes[0].'">
										        <div class="nd_booking_bg_greydark_alpha_gradient_5 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
										            <div class="nd_booking_position_absolute nd_booking_bottom_20">
										                <a href="'.$nd_booking_package_permalink.'"><h4 class="nd_options_color_white nd_booking_float_left nd_booking_letter_spacing_2">'.$nd_booking_package_name.'</h4></a>
										            </div>
										        </div>
										    </div>
										</div>';

									}	

									$nd_booking_result .= '
									</div>
									';

								}
								//END packages



						$nd_booking_result .= '
				    	</div>';


				    	//START right sidebar
				    	if ( $nd_booking_meta_box_page_layout == 'nd_booking_meta_box_page_layout_right_sidebar' ) { 
				    		
				    		$nd_booking_result .= '
				    		<div class="nd_booking_float_left nd_booking_sidebar nd_booking_padding_15 nd_booking_box_sizing_border_box nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive">
				    			'.$nd_booking_calendar.'
				    		';

				    			echo $nd_booking_result;
					    		dynamic_sidebar("nd_booking_sidebar_cpt_1");
					    	
					    	$nd_booking_result = '</div>';
				    		

				    	}
				    	//END right sidebar

				    	
				    $nd_booking_result .= '
				    </div>

				</div> 
				<!--END CONTENT-->

				<div class="nd_booking_section nd_booking_height_50"></div>

			';

		}
  
	endwhile;
endif;


if ( nd_booking_get_container() != 1 ) { $nd_booking_result .= '</div>'; }




//START similar_rooms
$nd_booking_meta_box_similar_rooms = get_post_meta( get_the_ID(), 'nd_booking_meta_box_similar_rooms', true );

if ( $nd_booking_meta_box_similar_rooms != '' ) {

	$nd_booking_meta_box_similar_rooms_array = explode(',', get_post_meta( $nd_booking_id, 'nd_booking_meta_box_similar_rooms', true ) );

	if ( $nd_booking_meta_box_similar_rooms_array != '' ) {
	  
	  $nd_booking_result .= '
	    <div id="nd_booking_single_cpt_1_similar_rooms" class=" '.$nd_booking_s_room_class.' nd_booking_section nd_booking_border_top_2_solid_grey">
	        <div class="nd_booking_section nd_booking_height_50"></div>';

	        if ( nd_booking_get_container() != 1) {  $nd_booking_result .= '<div class="nd_booking_container nd_booking_box_sizing_border_box nd_booking_clearfix">'; }

	        $nd_booking_result .= '
	        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">
	        	<h1 class="nd_booking_font_size_40">'.__('Similar Rooms','nd-booking').'</h1>
		        <div class="nd_booking_section">
		        	<span class="nd_booking_display_inline_block nd_booking_height_1 nd_booking_width_30 nd_booking_bg_greydark"></span>
		        </div>
		    </div>
	      ';

	}

	//START CICLE
	for ($nd_booking_meta_box_similar_rooms_array_i = 0; $nd_booking_meta_box_similar_rooms_array_i < count($nd_booking_meta_box_similar_rooms_array)-1; $nd_booking_meta_box_similar_rooms_array_i++) {
	    
	    $nd_booking_page_by_path = get_page_by_path($nd_booking_meta_box_similar_rooms_array[$nd_booking_meta_box_similar_rooms_array_i],OBJECT,'nd_booking_cpt_1');
	    
	    //default
	    $nd_booking_id = $nd_booking_page_by_path->ID;
	    $nd_booking_title = get_the_title($nd_booking_id);
		$nd_booking_permalink = get_permalink( $nd_booking_id );

		//metabox
		$nd_booking_meta_box_min_price = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_min_price', true );
		$nd_booking_meta_box_color = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_color', true ); if ($nd_booking_meta_box_color == '') { $nd_booking_meta_box_color = '#000'; }
		$nd_booking_meta_box_max_people = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_max_people', true );
		$nd_booking_meta_box_room_size = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_room_size', true );
		$nd_booking_meta_box_text_preview = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_text_preview', true );
		$nd_booking_meta_box_branches = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_branches', true );
		$nd_booking_meta_box_cpt_4_stars = get_post_meta( $nd_booking_meta_box_branches, 'nd_booking_meta_box_cpt_4_stars', true );

		//image
		if ( has_post_thumbnail() ) { 
		    $nd_booking_image = '

		        <div class="nd_booking_section nd_booking_position_relative">

		            <img alt="" class="nd_booking_section" src="'.nd_booking_get_post_img_src($nd_booking_id).'">

		            <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
		                <div class="nd_booking_position_absolute nd_booking_bottom_20">
		                    <p class="nd_options_color_white nd_booking_margin_right_10 nd_booking_float_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.get_the_title($nd_booking_meta_box_branches).'</p>';

		                    $nd_booking_meta_box_branches_stars = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_cpt_4_stars', true );
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


		$nd_booking_result .= '
		<div id="nd_booking_single_cpt_1_similar_room_'.$nd_booking_id.'" class="nd_booking_width_33_percentage nd_booking_width_100_percentage_responsive nd_booking_float_left">

		    <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

		        <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">
		            
		            '.$nd_booking_image.'

		            <div class="nd_booking_section nd_booking_padding_30 nd_booking_box_sizing_border_box">

		                <a href="'.$nd_booking_permalink.'"><h1>'.$nd_booking_title.'</h1></a>
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
		                <p>'.$nd_booking_meta_box_text_preview.'</p>
		                <div class="nd_booking_section nd_booking_height_20"></div> 
		                <a style="color: '.$nd_booking_meta_box_color.'; border:2px solid '.$nd_booking_meta_box_color.';" href="'.$nd_booking_permalink.'" class="nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2 ">'.__('BOOK','nd-booking').' <span class="nd_booking_display_none_all_iphone">'.__('NOW','nd-booking').'</span> '.__('FROM','nd-booking').' '.$nd_booking_meta_box_min_price.' '.nd_booking_get_currency().'</a>

		            </div>
		        </div>

		    </div>

		</div>
		';

	}
	//END CICLE


	if ( $nd_booking_meta_box_similar_rooms_array != '' ) {

		if ( nd_booking_get_container() != 1 ) { $nd_booking_result .= '</div>'; }
	  
		$nd_booking_result .= '
			<div class="nd_booking_section nd_booking_height_50"></div>
		</div>
		';

	}

}
//END similar_rooms




echo $nd_booking_result;


//footer
get_footer( );


