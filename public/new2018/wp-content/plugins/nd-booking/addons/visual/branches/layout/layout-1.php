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
$nd_booking_meta_box_cpt_4_stars = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_cpt_4_stars', true );


//image
if ( has_post_thumbnail() ) { 
    $nd_booking_image = '

        <a href="'.$nd_booking_permalink.'">
            <div class="nd_booking_section nd_booking_position_relative">

                <img class="nd_booking_section" src="'.nd_booking_get_post_img_src(get_the_ID()).'">

                <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                    <div class="nd_booking_position_absolute nd_booking_bottom_20">
                        <p class="nd_options_color_white nd_booking_margin_right_10 nd_booking_float_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">'.get_the_title($nd_booking_meta_box_branches).'</p>';

                        for ($nd_booking_meta_box_cpt_4_stars_i = 0; $nd_booking_meta_box_cpt_4_stars_i < $nd_booking_meta_box_cpt_4_stars; $nd_booking_meta_box_cpt_4_stars_i++) {
                            
                            $nd_booking_image .= '<img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="10" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-white.svg">';

                        }
                        
                    $nd_booking_image .= '
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