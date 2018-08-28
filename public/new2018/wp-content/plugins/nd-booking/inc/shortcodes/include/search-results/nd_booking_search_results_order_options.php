<?php

$nd_booking_shortcode_order_options = '';
$nd_booking_current_page_permalink = get_permalink(get_the_ID());

if ( $nd_booking_current_page_permalink == nd_booking_search_page() ) {


    $nd_booking_shortcode_order_options .= '

      <script type="text/javascript">
          //<![CDATA[
          
          jQuery(document).ready(function() {

            
            jQuery(function ($) {
              
              $( "#nd_booking_search_filter_options a" ).on("click",function() {

                $( "#nd_booking_search_filter_options a" ).removeClass( "nd_booking_search_filter_options_active" );
                $(this).addClass( "nd_booking_search_filter_options_active");

                nd_booking_sorting(1);
              
              });

              $( "#nd_booking_search_filter_layout a" ).on("click",function() {

                $( "#nd_booking_search_filter_layout a" ).removeClass( "nd_booking_search_filter_layout_active" );
                $(this).addClass( "nd_booking_search_filter_layout_active");

                nd_booking_sorting();

              });

              
              $("#nd_booking_search_filter_options li").on("click",function() {
                $("#nd_booking_search_filter_options li").removeClass( "nd_booking_search_filter_options_active_parent" );
                $(this).addClass( "nd_booking_search_filter_options_active_parent");
              });

            });
            

          });

          //]]>
        </script>

        <style>
        .nd_booking_search_filter_options_active { color:#fff !important; }
        #nd_booking_search_filter_options li.nd_booking_search_filter_options_active_parent p { color:#fff !important; border-bottom: 2px solid #878787;}
    
        #nd_booking_search_filter_options li:hover .nd_booking_search_filter_options_child { display: block; }

        .nd_booking_search_filter_layout_grid { background-image:url('.plugins_url().'/nd-booking/assets/img/icons/icon-grid-grey.svg); }
        .nd_booking_search_filter_layout_grid.nd_booking_search_filter_layout_active { background-image:url('.plugins_url().'/nd-booking/assets/img/icons/icon-grid-white.svg); }

        .nd_booking_search_filter_layout_list.nd_booking_search_filter_layout_active { background-image:url('.plugins_url().'/nd-booking/assets/img/icons/icon-list-white.svg); }
        .nd_booking_search_filter_layout_list { background-image:url('.plugins_url().'/nd-booking/assets/img/icons/icon-list-grey.svg); }

        </style>




      <div id="nd_booking_search_results_order_options" class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_bg_greydark nd_booking_text_align_center">';

          if ( nd_booking_get_container() != 1) {  $nd_booking_shortcode_order_options .= '<div class="nd_booking_container nd_booking_padding_0_15 nd_booking_box_sizing_border_box nd_booking_clearfix">'; }
        
            $nd_booking_shortcode_order_options .= '
            <div class="nd_booking_section nd_booking_position_relative nd_booking_line_height_0">


                <ul id="nd_booking_search_filter_options" class="nd_booking_list_style_none nd_booking_display_inline_block nd_booking_padding_0 nd_booking_margin_0">
                  <li class="nd_booking_display_inline_block nd_booking_position_relative nd_booking_padding_20 nd_booking_padding_bottom_15 nd_booking_margin_0 nd_booking_float_left">
                      
                      <p class="nd_booking_font_size_12 nd_booking_padding_bottom_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_float_left">'.__('Stay Price','nd-booking').'</p>
                      <img alt="" class="nd_booking_margin_left_10 nd_booking_float_left" width="10" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">

                      <ul class="nd_booking_padding_top_12 nd_booking_z_index_99 nd_booking_width_160 nd_booking_list_style_none nd_booking_search_filter_options_child nd_booking_position_absolute nd_booking_left_0 nd_booking_top_50 nd_booking_display_none nd_booking_padding_0 nd_booking_margin_0 nd_booking_width_100_percentage">
                          <li class="nd_booking_text_align_left nd_booking_bg_greydark_2 nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a data-meta-key="nd_booking_meta_box_min_price" data-order="ASC" class="nd_booking_cursor_pointer">'.__('Lowest Price','nd-booking').'</a></li>
                          <li class="nd_booking_text_align_left nd_booking_bg_greydark nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a data-meta-key="nd_booking_meta_box_min_price" data-order="DESC" class="nd_booking_cursor_pointer ">'.__('Highest Price','nd-booking').'</a></li>
                      </ul>

                  </li>   
                  <li class="nd_booking_display_inline_block nd_booking_position_relative nd_booking_padding_20 nd_booking_padding_bottom_15 nd_booking_margin_0 nd_booking_float_left">

                      <p class="nd_booking_font_size_12 nd_booking_padding_bottom_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_float_left">'.__('Room Size','nd-booking').'</p> 
                      <img alt="" class="nd_booking_margin_left_10 nd_booking_float_left" width="10" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-down-arrow-white.svg">

                      <ul class="nd_booking_padding_top_12 nd_booking_z_index_99 nd_booking_width_160 nd_booking_list_style_none nd_booking_search_filter_options_child nd_booking_position_absolute nd_booking_left_0 nd_booking_top_50 nd_booking_display_none nd_booking_padding_0 nd_booking_margin_0 nd_booking_width_100_percentage">
                          <li class="nd_booking_text_align_left nd_booking_bg_greydark_2 nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a data-meta-key="nd_booking_meta_box_room_size" data-order="DESC" class="nd_booking_cursor_pointer">'.__('Larger Room','nd-booking').'</a></li>
                          <li class="nd_booking_text_align_left nd_booking_bg_greydark nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a data-meta-key="nd_booking_meta_box_room_size" data-order="ASC" class="nd_booking_cursor_pointer">'.__('Smallest Room','nd-booking').'</a></li>
                      </ul>

                  </li>
              </ul> 


              <div id="nd_booking_search_filter_layout" class="">
                <a data-layout="1" class="nd_booking_search_filter_layout_grid nd_booking_cursor_pointer nd_booking_background_size_18 nd_booking_search_filter_layout_active nd_booking_width_18 nd_booking_height_18 nd_booking_position_absolute nd_booking_right_15 nd_booking_top_16"></a>
                <a data-layout="2" class="nd_booking_search_filter_layout_list nd_booking_cursor_pointer nd_booking_background_size_18 nd_booking_width_18 nd_booking_height_18 nd_booking_position_absolute nd_booking_right_53 nd_booking_top_16"></a>
              </div>

            </div>';


          if ( nd_booking_get_container() != 1 ) { $nd_booking_shortcode_order_options .= '</div>'; }

    $nd_booking_shortcode_order_options .= '
    </div>';


}













