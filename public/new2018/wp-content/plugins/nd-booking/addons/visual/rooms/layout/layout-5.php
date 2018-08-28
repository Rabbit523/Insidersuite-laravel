<?php


wp_enqueue_script('masonry');

$str .= '

	<script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START masonry
      jQuery(function ($) {
        
        //Masonry
    		var $nd_booking_masonry_content = $(".nd_booking_masonry_content").imagesLoaded( function() {
    		  // init Masonry after all images have loaded
    		  $nd_booking_masonry_content.masonry({
    		    itemSelector: ".nd_booking_masonry_item"
    		  });
    		});

      });
      //END masonry

    });

    //]]>
  </script>

';


$str .= '<div class="nd_booking_section nd_booking_masonry_content '.$nd_booking_class.' ">';

while ( $the_query->have_posts() ) : $the_query->the_post();

//default
$nd_booking_title = get_the_title();
$nd_booking_content = do_shortcode(get_the_content());
$nd_booking_id = get_the_ID();
$nd_booking_permalink = get_permalink( $nd_booking_id );

//metabox
$nd_booking_meta_box_min_price = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_min_price', true );
$nd_booking_meta_box_color = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_color', true ); if ($nd_booking_meta_box_color == '') { $nd_booking_meta_box_color = '#000'; }
$nd_booking_meta_box_max_people = get_post_meta( get_the_ID(), 'nd_booking_meta_box_max_people', true );
$nd_booking_meta_box_room_size = get_post_meta( get_the_ID(), 'nd_booking_meta_box_room_size', true );
$nd_booking_meta_box_text_preview = get_post_meta( get_the_ID(), 'nd_booking_meta_box_text_preview', true );
$nd_booking_meta_box_branches = get_post_meta( get_the_ID(), 'nd_booking_meta_box_branches', true );
$nd_booking_meta_box_cpt_4_stars = get_post_meta( $nd_booking_meta_box_branches, 'nd_booking_meta_box_cpt_4_stars', true );


//image
if ( has_post_thumbnail() ) { 

    $nd_booking_image_id = get_post_thumbnail_id( $nd_booking_id );
    $nd_booking_image_attributes = wp_get_attachment_image_src( $nd_booking_image_id, $nd_booking_image_size );

    $nd_booking_image = '

        <div class="nd_booking_section nd_booking_position_relative">

            <img alt="" class="nd_booking_section" src="'.$nd_booking_image_attributes[0].'">

            <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                
                <div class="nd_booking_position_absolute nd_booking_top_20 nd_booking_left_0 nd_booking_width_100_percentage">
                    <div class="nd_booking_section nd_booking_text_align_center">
                        <a style="background-color: '.$nd_booking_meta_box_color.';" href="'.$nd_booking_permalink.'" class="nd_booking_padding_10_20 nd_booking_text_transform_uppercase nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_12 nd_booking_letter_spacing_2">'.$nd_booking_title.'</a>
                    </div>
                </div>

                <div class="nd_booking_position_absolute nd_booking_bottom_20 nd_booking_left_0 nd_booking_width_100_percentage">


                    <div class="nd_booking_section nd_booking_text_align_center nd_booking_display_none_iphone_port">
                        <div class="nd_booking_display_table nd_booking_margin_auto">
                            <img alt="" class="nd_booking_margin_right_10 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="23" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-user-white.png">
                            <p class=" nd_booking_letter_spacing_2 nd_options_color_white nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">'.$nd_booking_meta_box_max_people.' '.__('Guests','nd-booking').'</p>
                            <img alt="" class="nd_booking_margin_right_10 nd_booking_margin_left_20 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="20" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-plan-white.png">
                            <p class=" nd_booking_letter_spacing_2 nd_options_color_white nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">'.$nd_booking_meta_box_room_size.' '.nd_booking_get_units_of_measure().'</p>
                            <img style="padding-bottom:4px;" alt="" class="nd_booking_margin_right_10 nd_booking_margin_left_20 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="25" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-money-white.png">
                            <p class=" nd_booking_letter_spacing_2 nd_options_color_white nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">'.__('From','nd-booking').' '.$nd_booking_meta_box_min_price.' '.nd_booking_get_currency().'</p>
                        </div>
                    </div> 

                </div>
            </div>

        </div>

    ';
}else{ 
    $nd_booking_image = '';
}




$str .= '

<div id="nd_booking_archive_cpt_1_single_'.$nd_booking_id.'" class="nd_booking_masonry_item '.$nd_booking_width.' nd_booking_width_100_percentage_responsive">

    <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

        <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">
            
            '.$nd_booking_image.'

        </div>

    </div>

</div>';

endwhile;

$str .= '</div>';