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

        <a href="'.$nd_booking_permalink.'">
            <div class="nd_booking_section nd_booking_position_relative">

                <img alt="" class="nd_booking_section" src="'.$nd_booking_image_attributes[0].'">

                <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                    <div class="nd_booking_position_absolute nd_booking_bottom_20">


                        <div class="nd_booking_display_table nd_booking_float_left">
                            <p class="nd_booking_display_table_cell nd_booking_padding_right_20 nd_booking_vertical_align_middle  nd_options_color_white nd_booking_margin_right_10  nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.$nd_booking_title.'</p>
                            <p style="background-color:'.$nd_booking_meta_box_color.';" class="nd_booking_display_table_cell nd_booking_vertical_align_middle  nd_options_color_white  nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.__('FROM','nd-booking').' '.$nd_booking_meta_box_min_price.' '.nd_booking_get_currency().'</p>
                        </div>
                        
                    </div>
                </div>

            </div>
        </a>


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