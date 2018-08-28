<?php


//image
$nd_booking_image_src = nd_booking_get_post_img_src($nd_booking_order_id_post);
if ( $nd_booking_image_src != '' ) { 
    
    $nd_booking_image = '

      <div class="nd_booking_section nd_booking_position_relative">

          <img class="nd_booking_section" src="'.$nd_booking_image_src.'">

          <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
              <div class="nd_booking_position_absolute nd_booking_top_20">
                  <p class="nd_options_color_white nd_booking_float_left nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_bg_greydark nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">
                    '.get_the_title($nd_booking_order_id_post).'
                  </p>
              </div>
          </div>

      </div>

    ';

}else{ 
    $nd_booking_image = '';
}


//date
$nd_booking_new_date_from = new DateTime($nd_booking_order_date_from);
$nd_booking_new_date_from_format_d = date_format($nd_booking_new_date_from, 'd');
$nd_booking_new_date_from_format_M = date_format($nd_booking_new_date_from, 'M');
$nd_booking_new_date_from_format_M = date_i18n('M',strtotime($nd_booking_order_date_from));
$nd_booking_new_date_from_format_l = date_format($nd_booking_new_date_from, 'l');
$nd_booking_new_date_from_format_l = date_i18n('l',strtotime($nd_booking_order_date_from));
$nd_booking_new_date_from_format_Y = date_format($nd_booking_new_date_from, 'Y');
$nd_booking_new_date_to = new DateTime($nd_booking_order_date_to);
$nd_booking_new_date_to_format_d = date_format($nd_booking_new_date_to, 'd');
$nd_booking_new_date_to_format_M = date_format($nd_booking_new_date_to, 'M');
$nd_booking_new_date_to_format_M = date_i18n('M',strtotime($nd_booking_order_date_to));
$nd_booking_new_date_to_format_l = date_format($nd_booking_new_date_to, 'l');
$nd_booking_new_date_to_format_l = date_i18n('l',strtotime($nd_booking_order_date_to));
$nd_booking_new_date_to_format_Y = date_format($nd_booking_new_date_to, 'Y');


$nd_booking_shortcode_left_content = '';
$nd_booking_shortcode_left_content .= '

<div class="nd_booking_section nd_booking_box_sizing_border_box">

  '.$nd_booking_image.'


  <!--START black section-->
  <div id="nd_booking_order_bg_main" class="nd_booking_section nd_booking_bg_greydark nd_booking_padding_30 nd_booking_padding_0_all_iphone nd_booking_box_sizing_border_box">

      <h6 class="nd_options_second_font nd_booking_margin_top_20_all_iphone nd_options_color_white nd_booking_letter_spacing_2 nd_booking_text_align_center nd_booking_font_size_12 nd_booking_font_weight_lighter">'.__('YOUR RESERVATION','nd-booking').'</h6>


      <div class="nd_booking_section nd_booking_height_30"></div> 

      <div class="nd_booking_width_50_percentage nd_booking_float_left  nd_booking_padding_right_10 nd_booking_box_sizing_border_box ">
           <div id="nd_booking_order_bg_check_in" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
              <h6 class="nd_options_color_white nd_booking_color_yellow_important nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_font_weight_lighter">'.__('CHECK-IN','nd-booking').'</h6>
              <div class="nd_booking_section nd_booking_height_15"></div> 
              <h1 class="nd_booking_font_size_50 nd_booking_color_yellow_important">'.$nd_booking_new_date_from_format_d.'</h1>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <h6 class="nd_options_color_white nd_booking_font_size_11"><i>'.$nd_booking_new_date_from_format_M.', '.$nd_booking_new_date_from_format_Y.'</i></h6>
              <div class="nd_booking_section nd_booking_height_5"></div>
              <h6 class="nd_options_second_font nd_options_color_grey nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_font_weight_lighter nd_booking_text_transform_uppercase">'.$nd_booking_new_date_from_format_l.'</h6>
          </div>   
      </div>

      <div class="nd_booking_width_50_percentage nd_booking_float_left  nd_booking_padding_left_10 nd_booking_box_sizing_border_box ">
           <div id="nd_booking_order_bg_check_out" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
              <h6 class="nd_options_color_white nd_booking_color_yellow_important nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_font_weight_lighter">'.__('CHECK-OUT','nd-booking').'</h6>
              <div class="nd_booking_section nd_booking_height_15"></div> 
              <h1 class="nd_booking_font_size_50 nd_booking_color_yellow_important">'.$nd_booking_new_date_to_format_d.'</h1>
              <div class="nd_booking_section nd_booking_height_15"></div>
              <h6 class="nd_options_color_white nd_booking_font_size_11"><i>'.$nd_booking_new_date_to_format_M.', '.$nd_booking_new_date_to_format_Y.'</i></h6>
              <div class="nd_booking_section nd_booking_height_5"></div>
              <h6 class="nd_options_second_font nd_options_color_grey nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_font_weight_lighter nd_booking_text_transform_uppercase">'.$nd_booking_new_date_to_format_l.'</h6>
          </div>    
      </div>

      <div class="nd_booking_section nd_booking_height_20"></div> 

      <div class="nd_booking_width_50_percentage nd_booking_float_left  nd_booking_padding_right_10 nd_booking_box_sizing_border_box ">
           <div id="nd_booking_order_bg_guests" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
              <h1 class=" nd_options_color_white">'.$nd_booking_order_guests.'</h1>
              <div class="nd_booking_section nd_booking_height_10"></div> 
              <h6 class="nd_options_second_font nd_options_color_grey nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_font_weight_lighter">'.__('GUESTS','nd-booking').'</h6>
              
          </div>   
      </div>

      <div class="nd_booking_width_50_percentage nd_booking_float_left  nd_booking_padding_left_10 nd_booking_box_sizing_border_box ">
           <div id="nd_booking_order_bg_nights" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_text_align_center">
              <h1 class=" nd_options_color_white">'.nd_booking_get_number_night($nd_booking_order_date_from,$nd_booking_order_date_to).'</h1>
              <div class="nd_booking_section nd_booking_height_10"></div> 
              <h6 class="nd_options_second_font nd_options_color_grey nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_font_weight_lighter">'.__('NIGHTS','nd-booking').'</h6>
          </div>    
      </div>

  </div>

  <div id="nd_booking_order_bg_total" class="nd_booking_section nd_booking_bg_greydark_2 nd_booking_padding_30 nd_booking_box_sizing_border_box nd_booking_text_align_center">
      <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_text_align_center">

              <div class="nd_booking_display_inline_block ">
                  <div id="nd_booking_final_trip_price_content" class="nd_booking_float_left nd_booking_text_align_right">
                      <h1 id="nd_booking_final_trip_price" class="nd_options_color_white nd_booking_font_size_50"><span>'.$nd_booking_order_final_trip_price.'</span></h1>
                  </div>
                  <div class="nd_booking_float_right nd_booking_text_align_left nd_booking_margin_left_10">
                      <h5 class="nd_options_second_font nd_options_color_white nd_booking_margin_top_7 nd_booking_font_size_14 nd_booking_font_weight_lighter">'.nd_booking_get_currency().'<p></p>
                      <div class="nd_booking_section nd_booking_height_5"></div>
                      </h5><h3 class="nd_options_second_font nd_options_color_white nd_booking_font_size_14 nd_booking_letter_spacing_2 nd_booking_font_weight_lighter">/ '.__('TOTAL','nd-booking').'</h3>
                  </div>
              </div>

          </div>
  </div>

  <!--END black section-->

</div>


';