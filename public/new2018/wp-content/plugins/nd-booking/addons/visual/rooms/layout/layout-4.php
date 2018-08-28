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
    $nd_booking_image = '<img alt="" class="nd_booking_position_absolute" width="100" src="'.$nd_booking_image_attributes[0].'">';

}else{ 
    $nd_booking_image = '';
}




$str .= '

<div id="nd_booking_archive_cpt_1_single_'.$nd_booking_id.'" class="nd_booking_masonry_item '.$nd_booking_width.' nd_booking_width_100_percentage_responsive">

    <div style="padding:'.$nd_booking_padding.';" class="nd_booking_section nd_booking_box_sizing_border_box">

        <div class="nd_booking_section nd_booking_position_relative">
            
            '.$nd_booking_image.'
            
            <div class="nd_booking_section nd_booking_padding_left_120 nd_booking_min_height_100 nd_booking_box_sizing_border_box">
                
                <div class="nd_booking_section nd_booking_height_5"></div>
                <h4>'.$nd_booking_title.'</h4>
                <div class="nd_booking_section nd_booking_height_10"></div>
                <p class="">'.__('From','nd-booking').' '.$nd_booking_meta_box_min_price.' '.nd_booking_get_currency().' '.__('per night','nd-booking').'</p>
                <div class="nd_booking_section nd_booking_height_10"></div>
                <div class="nd_booking_section">
                    <a href="'.$nd_booking_permalink.'" style="background-color: '.$nd_booking_meta_box_color.';" class="nd_options_color_white nd_booking_padding_5_10 nd_booking_font_size_11">'.__('BOOK NOW','nd-booking').'</a>
                </div>

            </div>
        </div>

    </div>

</div>';

endwhile;

$str .= '</div>';