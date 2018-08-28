<?php


/*START pagination*/
if ( $nd_booking_qnt_results_posts > $nd_booking_qnt_posts_per_page ) {

  $nd_booking_shortcode_right_content .= '
  <div id="nd_booking_btn_pagination_content" class="nd_booking_section nd_booking_margin_top_20">

    <div id="nd_booking_btn_pagination" class="nd_booking_section nd_booking_text_align_center">';
        
        for ($nd_booking_i_pagination = 1; $nd_booking_i_pagination <= $nd_booking_qnt_pagination; $nd_booking_i_pagination++) {

            if ( $nd_booking_i_pagination == $nd_booking_paged ){ $nd_booking_class_pagination_active = 'nd_booking_btn_pagination_active'; } else { $nd_booking_class_pagination_active = ''; }

            $nd_booking_shortcode_right_content .= '
                
                <div class=" '.$nd_booking_class_pagination_active.' nd_booking_display_inline_block nd_booking_bg_greydark nd_booking_margin_0_10">
                    <a class="nd_booking_display_inline_block nd_booking_second_font nd_options_color_white nd_booking_padding_10_15 nd_booking_cursor_pointer nd_booking_font_size_11" onclick="nd_booking_sorting('.$nd_booking_i_pagination.')">
                        '.$nd_booking_i_pagination.'
                    </a>
                </div>
            ';

        }

    $nd_booking_shortcode_right_content .= '
    </div>

  </div>
';
}
/*END pagination*/