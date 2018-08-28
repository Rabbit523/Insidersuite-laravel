<?php


//price range
$nd_booking_price_range_enable = get_option('nd_booking_price_range_enable'); 
if ( $nd_booking_price_range_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_search_class_1 = ''; }else{ $nd_booking_search_class_1 = 'nd_booking_display_none'; }
if ( get_option('nd_booking_price_range_min_value') == '' ) { $nd_booking_price_range_min_value = 1; }else{ $nd_booking_price_range_min_value = get_option('nd_booking_price_range_min_value'); }
if ( get_option('nd_booking_price_range_default_value') == '' ) { $nd_booking_price_range_default_value = 300; }else{ $nd_booking_price_range_default_value = get_option('nd_booking_price_range_default_value'); }
if ( get_option('nd_booking_price_range_max_value') == '' ) { $nd_booking_price_range_max_value = 700; }else{ $nd_booking_price_range_max_value = get_option('nd_booking_price_range_max_value'); }


$nd_booking_services_filter_enable = get_option('nd_booking_services_filter_enable'); 
if ( $nd_booking_services_filter_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_search_class_2 = ''; }else{ $nd_booking_search_class_2 = 'nd_booking_display_none'; }

$nd_booking_extra_services_filter_enable = get_option('nd_booking_extra_services_filter_enable'); 
if ( $nd_booking_extra_services_filter_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_search_class_3 = ''; }else{ $nd_booking_search_class_3 = 'nd_booking_display_none'; }



//START LEFT CONTENT
$nd_booking_shortcode_left_content = '';
$nd_booking_shortcode_left_content .= '

    <!--START FORM-->
    <form id="nd_booking_search_cpt_1_form_sidebar">
        

        <div class="nd_booking_section nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_box_sizing_border_box">

          <div id="nd_booking_search_main_bg" class="nd_booking_section nd_booking_bg_greydark nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_box_sizing_border_box">
            

            <!--branches-->
            <div id="nd_booking_search_cpt_1_form_branches" class="nd_booking_display_none nd_booking_width_100_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_box_sizing_border_box">
              
                <select class="nd_booking_width_100_percentage nd_booking_bg_greydark_2_important nd_booking_border_width_0_important nd_options_color_white nd_options_first_font nd_booking_font_size_20 nd_booking_text_align_center" onchange="nd_booking_sorting(1)" name="nd_booking_archive_form_branches" id="nd_booking_archive_form_branches">
                    <option value="0">'.__('All Branches','nd-booking').'</option>';

                    $nd_booking_branches_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_booking_cpt_4' );
                    $nd_booking_branches = get_posts($nd_booking_branches_args); 
                    foreach ($nd_booking_branches as $nd_booking_meta_box_branche) : 

                        $nd_booking_shortcode_left_content .= '<option ';

                        if ( $nd_booking_archive_form_branches == $nd_booking_meta_box_branche->ID ) { 
                            $nd_booking_shortcode_left_content .= 'selected="selected" ';  
                        }

                        $nd_booking_shortcode_left_content .= 'value="'.$nd_booking_meta_box_branche->ID.'">'.$nd_booking_meta_box_branche->post_title.'</option>';

                    endforeach; 
                
                $nd_booking_shortcode_left_content .= '
                </select>
            </div>
            <!--branches-->



            <!--check in/out-->
            <div id="nd_booking_search_cpt_1_form_checkin" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">


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
                <input placeholder="Check In" class="nd_booking_section nd_booking_margin_top_30 nd_booking_margin_0_responsive nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_from" id="nd_booking_archive_form_date_range_from" value="" />
            </div>
            <div id="nd_booking_search_cpt_1_form_checkout" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_padding_bottom_0 nd_booking_box_sizing_border_box">

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
                <input placeholder="Check Out" class="nd_booking_section nd_booking_margin_top_30 nd_booking_margin_0_responsive nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_to" id="nd_booking_archive_form_date_range_to" value="" />
                
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
                        nd_booking_sorting(1);

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
                        nd_booking_sorting(1);

                      }
                    });
                    
                    $("#nd_booking_archive_form_date_range_from").datepicker("setDate", "+0");
                    $("#nd_booking_archive_form_date_range_to").datepicker("setDate", "+1");
               
                    function nd_booking_get_nights(){
                      var nd_booking_archive_form_date_range_from = $("#nd_booking_archive_form_date_range_from").val();
                      var nd_booking_archive_form_date_range_to = $("#nd_booking_archive_form_date_range_to").val();
                      var nd_booking_start = new Date(nd_booking_archive_form_date_range_from);
                      var nd_booking_end = new Date(nd_booking_archive_form_date_range_to);
                      var nd_booking_nights_number = Math.round((nd_booking_end - nd_booking_start) / 1000 / 60 / 60 / 24); 
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
            <div id="nd_booking_search_cpt_1_form_guests" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                <div id="nd_booking_search_guests_bg" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
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
                <input placeholder="Guests" onchange="nd_booking_sorting(1)" class="nd_booking_section nd_booking_display_none" type="number" name="nd_booking_archive_form_guests" id="nd_booking_archive_form_guests" min="1" value="'.$nd_booking_archive_form_guests.'" />
            </div>
            <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function() {

                jQuery( function ( $ ) {

                  $(".nd_booking_guests_increase").click(function() {
                    var value = $(".nd_booking_guests_number").text();
                    value++;
                    $(".nd_booking_guests_number").text(value);
                    $("#nd_booking_archive_form_guests").val(value);
                    nd_booking_sorting(1);
                  }); 

                  $(".nd_booking_guests_decrease").click(function() {
                    var value = $(".nd_booking_guests_number").text();
                    
                    if ( value > 1 ) {
                      value--;
                      $(".nd_booking_guests_number").text(value);
                      $("#nd_booking_archive_form_guests").val(value);
                      nd_booking_sorting(1);
                    }
                    
                  }); 
                  
                });

              });
              //]]>
            </script>
            <!--guests-->





            <!--night info-->
            <div id="nd_booking_search_cpt_1_form_nights" class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_padding_15 nd_booking_padding_0_responsive nd_booking_padding_top_0 nd_booking_box_sizing_border_box">
                <div id="nd_booking_search_nights_bg" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
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
            </div>
            <!--night info-->


          </div>

        </div>

        
        



        <!--max night range-->
        <div id="nd_booking_search_cpt_1_form_night_range" class=" '.$nd_booking_search_class_1.' nd_booking_width_100_percentage nd_booking_float_left nd_booking_padding_0_15 nd_booking_box_sizing_border_box">

            <div class="nd_booking_section nd_booking_height_20"></div> 
            <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey"></div>

            <div class="nd_booking_section nd_booking_position_relative nd_booking_padding_30 nd_booking_padding_30_15_all_iphone nd_booking_box_sizing_border_box">
                
                <div class="nd_booking_section">
                  <h3 class="nd_booking_float_left">'.__('Max Night Price','nd-booking').' :</h3> 
                  <span class="nd_booking_float_right nd_options_first_font nd_options_color_greydark nd_booking_line_height_25 nd_booking_font_size_20">'.nd_booking_get_currency().'</span>
                  <input class="nd_booking_float_right nd_options_first_font nd_booking_margin_right_5 nd_booking_border_width_0_important" type="text" id="nd_booking_archive_form_max_price_for_day" name="nd_booking_archive_form_max_price_for_day" readonly >
                </div>
        
                <div class="nd_booking_section">
                  <div id="nd_booking_slider_range"></div>   
                </div>
                 
            </div>

            <div class="nd_booking_section nd_booking_height_5"></div> 
            <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey"></div>
            
        </div>

        <script type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function() {

          jQuery( function ( $ ) {

              $( "#nd_booking_slider_range" ).slider({
                range: "min",
                value: '.$nd_booking_price_range_default_value.',
                min: '.$nd_booking_price_range_min_value.',
                max: '.$nd_booking_price_range_max_value.',
                slide: function( event, ui ) {
                  $( "#nd_booking_archive_form_max_price_for_day" ).val( "" + ui.value );
                },
                change: function( event, ui ) {
                  nd_booking_sorting(1); 
                }
              });
              $( "#nd_booking_archive_form_max_price_for_day" ).val( "" + $( "#nd_booking_slider_range" ).slider( "value" ) );

          });

        });
        //]]>
        </script>

        <style>
            #nd_booking_slider_range {
              background-color:#e4e4e4;
              height:4px;  
              position:relative;
              margin-top:20px;
            }

            #nd_booking_slider_range .ui-slider-range {
                height:4px;
            }

            #nd_booking_slider_range .ui-slider-handle {
                height: 16px;
                width: 16px;
                position: absolute;
                top: -6px;
                cursor:pointer;
                outline:0;    
            }

            #nd_booking_archive_form_max_price_for_day {
              color: #1c1c1c;
              background-color: transparent;
              font-size: 20px;
              width: 50px;
              text-align: right;
              padding: 0px;
            }
        </style>
        <!--max night range-->




        

        <!--normal service-->
        <div id="nd_booking_search_cpt_1_form_normal_services" class=" '.$nd_booking_search_class_2.' nd_booking_width_100_percentage nd_booking_float_left nd_booking_padding_0_15 nd_booking_box_sizing_border_box">

            <div class="nd_booking_section nd_booking_position_relative nd_booking_padding_30 nd_booking_padding_30_15_all_iphone nd_booking_box_sizing_border_box">
                <h3>'.__('Services','nd-booking').' :</h3>
                <img class="nd_booking_toogle_services_open_content nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                <img style="transform: rotate(180deg);" class="nd_booking_toogle_services_close_content nd_booking_display_none nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
            </div>
            ';

            /*START normal service query*/
            $nd_booking_services_args = array( 
                'posts_per_page' => -1, 
                'post_type'=> 'nd_booking_cpt_2',
                'meta_query' => array(
                    array(
                        'key'     => 'nd_booking_meta_box_cpt_2_service_type',
                        'value'   => 'nd_booking_normal_service',
                        'compare' => '=',
                    )
                ) 
            );
            $nd_booking_services_query = new WP_Query( $nd_booking_services_args );

            $nd_booking_shortcode_left_content .= '
            <div class="nd_booking_toogle_services_content nd_booking_padding_0_30 nd_booking_section nd_booking_display_none  nd_booking_margin_top_10_negative nd_booking_box_sizing_border_box">';

            while ( $nd_booking_services_query->have_posts() ) : $nd_booking_services_query->the_post();

                $nd_booking_shortcode_left_content .= '
                <p class="nd_booking_width_50_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_service nd_booking_width_25 nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_8" name="nd_booking_service_id_'.get_the_ID().'" type="checkbox" value="'.get_the_ID().',">
                    '.get_the_title().'
                </p>';

            endwhile; 
            wp_reset_postdata();
            /*END normal service query*/


            $nd_booking_shortcode_left_content .= '
              <div class="nd_booking_section nd_booking_height_30"></div>
            </div>
            <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey"></div>';
        
        
        $nd_booking_shortcode_left_content .= '
            <input type="hidden" id="nd_booking_archive_form_services" name="nd_booking_archive_form_services" value="">


            <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function() {

                jQuery( function ( $ ) {

                    $( ".nd_booking_checkbox_service" ).change(function() {

                        if ( $( this ).is( ":checked" ) ) {

                            var nd_booking_service_value = $( this ).val();
                            var nd_booking_service_previous_value = $("#nd_booking_archive_form_services").val();
                            $( "#nd_booking_archive_form_services" ).val( nd_booking_service_value+nd_booking_service_previous_value );

                            nd_booking_sorting(1);

                        }else{

                            var nd_booking_service_value = $( this ).val();
                            var nd_booking_service_previous_value = $("#nd_booking_archive_form_services").val();
                            var nd_booking_archive_form_services = nd_booking_service_previous_value.replace(nd_booking_service_value, "");

                            $( "#nd_booking_archive_form_services" ).val( nd_booking_archive_form_services );

                            nd_booking_sorting(1);
                        }

                        
                    });

                    
                    //toogle
                    $( ".nd_booking_toogle_services_open_content" ).click(function() {
                      $( ".nd_booking_toogle_services_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_services_open_content" ).css("display","none");
                        $( ".nd_booking_toogle_services_close_content" ).css("display","block");
                      });
                    });
                    $( ".nd_booking_toogle_services_close_content" ).click(function() {
                      $( ".nd_booking_toogle_services_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_services_close_content" ).css("display","none");
                        $( ".nd_booking_toogle_services_open_content" ).css("display","block");  
                      }); 
                    });


                });

              });
              //]]>
            </script>



        </div>
        <!--normal service-->








        <!--additional service-->
        <div id="nd_booking_search_cpt_1_form_extra_services" class=" '.$nd_booking_search_class_3.' nd_booking_width_100_percentage nd_booking_float_left nd_booking_padding_0_15 nd_booking_box_sizing_border_box">

            <div class="nd_booking_section nd_booking_position_relative nd_booking_padding_30 nd_booking_padding_30_15_all_iphone nd_booking_box_sizing_border_box">
                <h3>'.__('Extra Services','nd-booking').' :</h3>
                <img class="nd_booking_toogle_additional_services_open_content nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                <img style="transform: rotate(180deg);" class="nd_booking_toogle_additional_services_close_content nd_booking_display_none nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
            </div>
            ';

            /*START add service query*/
            $nd_booking_additional_services_args = array( 
                'posts_per_page' => -1, 
                'post_type'=> 'nd_booking_cpt_2',
                'meta_query' => array(
                    array(
                        'key'     => 'nd_booking_meta_box_cpt_2_service_type',
                        'value'   => 'nd_booking_additional_service',
                        'compare' => '=',
                    )
                ) 
            );
            $nd_booking_additional_services_query = new WP_Query( $nd_booking_additional_services_args );

            $nd_booking_shortcode_left_content .= '
            <div class="nd_booking_toogle_additional_services_content nd_booking_padding_0_30 nd_booking_section nd_booking_display_none nd_booking_margin_top_10_negative nd_booking_box_sizing_border_box">';

            while ( $nd_booking_additional_services_query->have_posts() ) : $nd_booking_additional_services_query->the_post(); 

                $nd_booking_shortcode_left_content .= '
                <p class="nd_booking_width_50_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_additional_service nd_booking_width_25 nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_8" name="nd_booking_additional_service_id_'.get_the_ID().'" type="checkbox" value="'.get_the_ID().',">
                    '.get_the_title().'
                </p>';

            endwhile; 
            wp_reset_postdata(); 
            /*END add service query*/
            
            $nd_booking_shortcode_left_content .= '
              <div class="nd_booking_section nd_booking_height_30"></div>
            </div>
            <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey"></div>';


        $nd_booking_shortcode_left_content .= '
            <input type="hidden" id="nd_booking_archive_form_additional_services" name="nd_booking_archive_form_additional_services" value="">


            <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function() {

                jQuery( function ( $ ) {

                    $( ".nd_booking_checkbox_additional_service" ).change(function() {

                        if ( $( this ).is( ":checked" ) ) {

                            var nd_booking_additional_service_value = $( this ).val();
                            var nd_booking_additional_service_previous_value = $("#nd_booking_archive_form_additional_services").val();
                            $( "#nd_booking_archive_form_additional_services" ).val( nd_booking_additional_service_value+nd_booking_additional_service_previous_value );

                            nd_booking_sorting(1);

                        }else{

                            var nd_booking_additional_service_value = $( this ).val();
                            var nd_booking_additional_service_previous_value = $("#nd_booking_archive_form_additional_services").val();
                            var nd_booking_archive_form_additional_services = nd_booking_additional_service_previous_value.replace(nd_booking_additional_service_value, "");

                            $( "#nd_booking_archive_form_additional_services" ).val( nd_booking_archive_form_additional_services );

                            nd_booking_sorting(1);
                        }

                        
                    });

                    
                    //toogle
                    $( ".nd_booking_toogle_additional_services_open_content" ).click(function() {
                      $( ".nd_booking_toogle_additional_services_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_additional_services_open_content" ).css("display","none");
                        $( ".nd_booking_toogle_additional_services_close_content" ).css("display","block");
                      });
                    });
                    $( ".nd_booking_toogle_additional_services_close_content" ).click(function() {
                      $( ".nd_booking_toogle_additional_services_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_additional_services_close_content" ).css("display","none");
                        $( ".nd_booking_toogle_additional_services_open_content" ).css("display","block");  
                      }); 
                    });


                });

              });
              //]]>
            </script>



        </div>
        <!--additional service-->












        <!--stars-->
        <div id="nd_booking_search_cpt_1_form_branch_stars" class="nd_booking_width_100_percentage nd_booking_display_none nd_booking_float_left nd_booking_padding_0_15 nd_booking_box_sizing_border_box">

            <div class="nd_booking_section nd_booking_position_relative nd_booking_padding_30 nd_booking_box_sizing_border_box">
                <h3>Branch Stars :</h3>
                <img class="nd_booking_toogle_branch_stars_open_content nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                <img style="transform: rotate(180deg);" class="nd_booking_toogle_branch_stars_close_content nd_booking_display_none nd_booking_position_absolute nd_booking_right_30 nd_booking_top_35 nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
            </div>

            <div class="nd_booking_toogle_branch_stars_content nd_booking_padding_0_30 nd_booking_section nd_booking_display_none nd_booking_box_sizing_border_box">
              
              <p class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_branch_stars nd_booking_width_25 nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_1" name="nd_booking_checkbox_branch_star_5" type="checkbox" value="5,">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
              </p>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <p class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_branch_stars nd_booking_width_25 nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_1" name="nd_booking_checkbox_branch_star_4" type="checkbox" value="4,">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
              </p>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <p class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_branch_stars nd_booking_width_25 nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_1" name="nd_booking_checkbox_branch_star_3" type="checkbox" value="3,">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
              </p>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <p class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_branch_stars nd_booking_width_25 nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_1" name="nd_booking_checkbox_branch_star_2" type="checkbox" value="2,">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
              </p>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <p class="nd_booking_width_100_percentage nd_booking_float_left nd_booking_margin_0">
                  <input class="nd_booking_checkbox_branch_stars nd_booking_width_25 nd_booking_margin_right_5 nd_booking_float_left nd_booking_margin_0 nd_booking_padding_0 nd_booking_margin_top_1" name="nd_booking_checkbox_branch_star_1" type="checkbox" value="1,">
                  <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">
              </p>

              <div class="nd_booking_section nd_booking_height_30"></div>
            </div>
            <div class="nd_booking_section nd_booking_height_2 nd_booking_bg_grey"></div>
            
            <input type="hidden" id="nd_booking_archive_form_branch_stars" name="nd_booking_archive_form_branch_stars" value="">


            <script type="text/javascript">
              //<![CDATA[
              jQuery(document).ready(function() {

                jQuery( function ( $ ) {

                    $( ".nd_booking_checkbox_branch_stars" ).change(function() {

                        if ( $( this ).is( ":checked" ) ) {

                            var nd_booking_branch_stars_value = $( this ).val();
                            var nd_booking_branch_stars_previous_value = $("#nd_booking_archive_form_branch_stars").val();
                            $( "#nd_booking_archive_form_branch_stars" ).val( nd_booking_branch_stars_value+nd_booking_branch_stars_previous_value );

                            nd_booking_sorting(1);

                        }else{

                            var nd_booking_branch_stars_value = $( this ).val();
                            var nd_booking_branch_stars_previous_value = $("#nd_booking_archive_form_branch_stars").val();
                            var nd_booking_archive_form_branch_stars = nd_booking_branch_stars_previous_value.replace(nd_booking_branch_stars_value, "");

                            $( "#nd_booking_archive_form_branch_stars" ).val( nd_booking_archive_form_branch_stars );

                            nd_booking_sorting(1);
                        }

                        
                    });

                    
                    //toogle
                    $( ".nd_booking_toogle_branch_stars_open_content" ).click(function() {
                      $( ".nd_booking_toogle_branch_stars_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_branch_stars_open_content" ).css("display","none");
                        $( ".nd_booking_toogle_branch_stars_close_content" ).css("display","block");
                      });
                    });
                    $( ".nd_booking_toogle_branch_stars_close_content" ).click(function() {
                      $( ".nd_booking_toogle_branch_stars_content" ).slideToggle( "slow", function() {
                        $( ".nd_booking_toogle_branch_stars_close_content" ).css("display","none");
                        $( ".nd_booking_toogle_branch_stars_open_content" ).css("display","block");  
                      }); 
                    });


                });

              });
              //]]>
            </script>



        </div>
        <!--stars-->



        

      
    </form>
    <!--END FORM-->



';
//END LEFT CONTENT