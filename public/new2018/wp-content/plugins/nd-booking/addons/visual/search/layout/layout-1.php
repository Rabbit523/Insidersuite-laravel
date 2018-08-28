<?php



$str .= '

    <div class="nd_booking_section '.$nd_booking_class.' ">

        <!--START FORM-->
        <form action="'.$nd_booking_action.'" method="get">


            <div class="nd_booking_width_75_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_padding_30 nd_booking_box_sizing_border_box nd_booking_bg_white">

                <!--check in/out-->
                <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_border_right_2_solid_grey nd_booking_border_0_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box">


                    <div id="nd_booking_open_calendar_from" class="nd_booking_section   nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
                      <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">'.__('CHECK-IN','nd-booking').'</h6>
                        <div class="nd_booking_section nd_booking_height_15"></div> 
                        <div class="nd_booking_display_inline_flex ">
                          <div class="nd_booking_float_left nd_booking_text_align_right">
                            <h1 id="nd_booking_date_number_from_front" class="nd_booking_font_size_50 nd_options_color_greydark nd_booking_font_weight_bold">'.$nd_booking_date_number_from_front.'</h1>
                          </div>
                          <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                              <h6 id="nd_booking_date_month_from_front" class="nd_options_color_greydark  nd_booking_margin_top_7 nd_booking_font_size_12">'.$nd_booking_date_month_from_front.'</h6>
                              <div class="nd_booking_section nd_booking_height_5"></div>
                              <img alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" id="nd_booking_date_month_from" class="nd_booking_section nd_booking_margin_top_20">
                    <input type="hidden" id="nd_booking_date_number_from" class="nd_booking_section nd_booking_margin_top_20">
                    <input placeholder="Check In" class="nd_booking_section nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_from" id="nd_booking_archive_form_date_range_from" value="" />
                </div>
                <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_border_right_2_solid_grey nd_booking_border_0_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">

                    <div id="nd_booking_open_calendar_to" class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
                      <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_margin_top_20_all_iphone">'.__('CHECK-OUT','nd-booking').'</h6>
                        <div class="nd_booking_section nd_booking_height_15"></div> 
                        <div class="nd_booking_display_inline_flex ">
                          <div class="nd_booking_float_left nd_booking_text_align_right">
                            <h1 id="nd_booking_date_number_to_front" class="nd_booking_font_size_50 nd_options_color_greydark nd_booking_font_weight_bold">'.$nd_booking_date_number_to_front.'</h1>
                          </div>
                          <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                              <h6 id="nd_booking_date_month_to_front" class="nd_options_color_greydark  nd_booking_margin_top_7 nd_booking_font_size_12">'.$nd_booking_date_month_to_front.'</h6>
                              <div class="nd_booking_section nd_booking_height_5"></div>
                              <img alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" id="nd_booking_date_month_to" class="nd_booking_section nd_booking_margin_top_20">
                    <input type="hidden" id="nd_booking_date_number_to" class="nd_booking_section nd_booking_margin_top_20">
                    <input placeholder="Check Out" class="nd_booking_section nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_to" id="nd_booking_archive_form_date_range_to" value="" />
                    
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
                <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">
                    <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                      <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_margin_top_20_all_iphone">'.__('GUESTS','nd-booking').'</h6>
                        <div class="nd_booking_section nd_booking_height_15"></div> 
                        <div class="nd_booking_display_inline_flex ">
                          <div class="nd_booking_float_left nd_booking_text_align_right">
                              <h1 class="nd_booking_font_size_50 nd_booking_color_greydark nd_booking_guests_number nd_booking_font_weight_bold">1</h1>
                          </div>
                          <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                              <div class="nd_booking_section nd_booking_height_7"></div>
                              <div class="nd_booking_section">
                                  <img class="nd_booking_float_right nd_booking_guests_increase nd_booking_cursor_pointer" style="transform: rotate(180deg);" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                              </div>
                              <div class="nd_booking_section nd_booking_height_10"></div>
                              <div class="nd_booking_section">
                                  <img class="nd_booking_float_right nd_booking_guests_decrease nd_booking_cursor_pointer" alt="" width="12" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
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
                        value++;
                        $(".nd_booking_guests_number").text(value);
                        $("#nd_booking_archive_form_guests").val(value);
                      }); 

                      $(".nd_booking_guests_decrease").click(function() {
                        var value = $(".nd_booking_guests_number").text();
                        
                        if ( value > 1 ) {
                          value--;
                          $(".nd_booking_guests_number").text(value);
                          $("#nd_booking_archive_form_guests").val(value);
                        }
                        
                      }); 
                      
                    });

                  });
                  //]]>
                </script>
                <!--guests-->


            </div>



            <div class="nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_text_align_center nd_booking_bg_greydark">

                <input style="padding: '.$nd_booking_submit_padding.'; background-color:'.$nd_booking_submit_bg.';" class="nd_options_color_white nd_options_second_font_important nd_booking_width_100_percentage nd_booking_font_weight_lighter nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_line_height_18 nd_booking_white_space_normal" type="submit" value="'.__('CHECK AVAILABILITY','nd-booking').'">

            </div>  


        </form>
        <!--END FORM-->

    </div>


';