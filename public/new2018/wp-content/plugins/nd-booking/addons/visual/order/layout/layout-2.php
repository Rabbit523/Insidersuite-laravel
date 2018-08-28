<?php


$nd_booking_current_page_permalink = get_permalink(get_the_ID());

if ( $nd_booking_current_page_permalink == nd_booking_search_page() ) {


    $str .= '

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
        .nd_booking_search_filter_options_active { color:'.$nd_booking_text_color_active.' !important; }
        #nd_booking_search_filter_options li.nd_booking_search_filter_options_active_parent p { color:'.$nd_booking_text_color_active.' !important; border-bottom: 2px solid '.$nd_booking_text_color_active.' !important;}
        #nd_booking_search_filter_options li p { border-bottom: 2px solid '.$nd_booking_bg_color.' !important;}
    
        #nd_booking_search_filter_options li:hover .nd_booking_search_filter_options_child { display: block; }

        .nd_booking_search_filter_layout_grid { background-size: 18px 18px; opacity:0.5; background-image:url('.$nd_booking_grid_image_src[0].'); }
        .nd_booking_search_filter_layout_grid.nd_booking_search_filter_layout_active { opacity:1 !important; background-size: 18px 18px; background-image:url('.$nd_booking_grid_image_src[0].'); }

        .nd_booking_search_filter_layout_list.nd_booking_search_filter_layout_active { opacity:1 !important; background-size: 18px 18px; background-image:url('.$nd_booking_list_image_src[0].'); }
        .nd_booking_search_filter_layout_list { background-size: 18px 18px; opacity:0.5; background-image:url('.$nd_booking_list_image_src[0].'); }

        </style>



      	<div id="nd_booking_vc_order" class="nd_booking_section '.$nd_booking_class.' ">

      		<div style="background-color:'.$nd_booking_bg_color.';" id="nd_booking_search_results_order_options" class="nd_booking_section nd_booking_padding_10_0 nd_booking_box_sizing_border_box nd_booking_text_align_center">

            	<div class="nd_booking_section nd_booking_position_relative nd_booking_line_height_0">


					<ul id="nd_booking_search_filter_options" class="nd_booking_list_style_none nd_booking_display_inline_block nd_booking_padding_0 nd_booking_margin_0">
					  <li id="nd_booking_vc_order_price" class="nd_booking_display_inline_block nd_booking_position_relative nd_booking_padding_20 nd_booking_padding_bottom_15 nd_booking_margin_0 nd_booking_float_left">
					      
					      <p style="color:'.$nd_booking_text_color.';" class="nd_booking_font_size_12 nd_booking_padding_bottom_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_float_left">'.__('Stay Price','nd-booking').'</p>
					      <img alt="" class="nd_booking_margin_left_10 nd_booking_float_left" width="10" height="10" src="'.$nd_booking_arrow_image_src[0].'">

					      <ul class="nd_booking_padding_top_12 nd_booking_z_index_99 nd_booking_width_160 nd_booking_list_style_none nd_booking_search_filter_options_child nd_booking_position_absolute nd_booking_left_0 nd_booking_top_50 nd_booking_display_none nd_booking_padding_0 nd_booking_margin_0 nd_booking_width_100_percentage">
					          <li style="background-color:'.$nd_booking_bg_color_2.';" class="nd_booking_text_align_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a style="color:'.$nd_booking_text_color.';" data-meta-key="nd_booking_meta_box_min_price" data-order="ASC" class="nd_booking_cursor_pointer">'.__('Lowest Price','nd-booking').'</a></li>
					          <li style="background-color:'.$nd_booking_bg_color.';" class="nd_booking_text_align_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a style="color:'.$nd_booking_text_color.';" data-meta-key="nd_booking_meta_box_min_price" data-order="DESC" class="nd_booking_cursor_pointer ">'.__('Highest Price','nd-booking').'</a></li>
					      </ul>

					  </li>   
					  <li id="nd_booking_vc_order_size" class="nd_booking_display_inline_block nd_booking_position_relative nd_booking_padding_20 nd_booking_padding_bottom_15 nd_booking_margin_0 nd_booking_float_left">

					      <p style="color:'.$nd_booking_text_color.';" class="nd_booking_font_size_12 nd_booking_padding_bottom_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_float_left">'.__('Room Size','nd-booking').'</p> 
					      <img alt="" class="nd_booking_margin_left_10 nd_booking_float_left" width="10" height="10" src="'.$nd_booking_arrow_image_src[0].'">

					      <ul class="nd_booking_padding_top_12 nd_booking_z_index_99 nd_booking_width_160 nd_booking_list_style_none nd_booking_search_filter_options_child nd_booking_position_absolute nd_booking_left_0 nd_booking_top_50 nd_booking_display_none nd_booking_padding_0 nd_booking_margin_0 nd_booking_width_100_percentage">
					          <li style="background-color:'.$nd_booking_bg_color_2.';" class="nd_booking_text_align_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a style="color:'.$nd_booking_text_color.';" data-meta-key="nd_booking_meta_box_room_size" data-order="DESC" class="nd_booking_cursor_pointer">'.__('Larger Room','nd-booking').'</a></li>
					          <li style="background-color:'.$nd_booking_bg_color.';" class="nd_booking_text_align_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase nd_booking_padding_15_20"><a style="color:'.$nd_booking_text_color.';" data-meta-key="nd_booking_meta_box_room_size" data-order="ASC" class="nd_booking_cursor_pointer">'.__('Smallest Room','nd-booking').'</a></li>
					      </ul>

					  </li>
					</ul> 


					<div id="nd_booking_search_filter_layout" class="nd_booking_display_none_all_iphone">
						<a data-layout="1" class="nd_booking_search_filter_layout_grid nd_booking_cursor_pointer nd_booking_background_size_18 nd_booking_search_filter_layout_active nd_booking_width_18 nd_booking_height_18 nd_booking_position_absolute nd_booking_right_15 nd_booking_top_16"></a>
						<a data-layout="2" class="nd_booking_search_filter_layout_list nd_booking_cursor_pointer nd_booking_background_size_18 nd_booking_width_18 nd_booking_height_18 nd_booking_position_absolute nd_booking_right_53 nd_booking_top_16"></a>
					</div>

        		</div>
			</div>
		</div>
		';


}

