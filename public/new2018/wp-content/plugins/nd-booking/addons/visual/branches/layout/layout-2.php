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
$nd_booking_meta_box_cpt_4_state = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_cpt_4_state', true );
$nd_booking_meta_box_cpt_4_city = get_post_meta( $nd_booking_id, 'nd_booking_meta_box_cpt_4_city', true );


//image
if ( has_post_thumbnail() ) { 

    $nd_booking_image_id = get_post_thumbnail_id( $nd_booking_id );
    $nd_booking_image_attributes = wp_get_attachment_image_src( $nd_booking_image_id, $nd_booking_image_size );
    $nd_booking_image = '<img alt="" class="nd_booking_position_absolute" width="100" src="'.$nd_booking_image_attributes[0].'">';

}else{ 
    $nd_booking_image = '';
}


//stars icons
$nd_booking_stars = '';
for ($nd_booking_meta_box_cpt_4_stars_i = 0; $nd_booking_meta_box_cpt_4_stars_i < $nd_booking_meta_box_cpt_4_stars; $nd_booking_meta_box_cpt_4_stars_i++) {
                         
    $nd_booking_stars .= '<img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="13" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-star-full-grey.svg">';

}

//city and state
$nd_booking_city_state = '';
if ( $nd_booking_meta_box_cpt_4_state != '' AND $nd_booking_meta_box_cpt_4_city != '' ) {
  $nd_booking_city_state .= '
    <div class="nd_booking_section nd_booking_height_10"></div>
    <p class="">'.$nd_booking_meta_box_cpt_4_city.' ( '.$nd_booking_meta_box_cpt_4_state.' )</p>
  ';
}


$str .= '

<div id="nd_booking_archive_cpt_1_single_'.$nd_booking_id.'" class="nd_booking_masonry_item '.$nd_booking_width.' nd_booking_width_100_percentage_responsive">

    <div style="padding:'.$nd_booking_padding.';" class="nd_booking_section nd_booking_box_sizing_border_box">

        <div class="nd_booking_section nd_booking_position_relative">
            
            '.$nd_booking_image.'
            
            <div class="nd_booking_section nd_booking_padding_left_120 nd_booking_min_height_100 nd_booking_box_sizing_border_box">
                
                <div class="nd_booking_section nd_booking_height_5"></div>
                <div class="nd_booking_section nd_booking_height_7"></div>
                <a href="'.$nd_booking_permalink.'"><h4>'.$nd_booking_title.'</h4></a>
                '.$nd_booking_city_state.'
                <div class="nd_booking_section nd_booking_height_10"></div>
                <div class="nd_booking_section">
                  '.$nd_booking_stars.'
                </div>

            </div>
        </div>

    </div>

</div>';

endwhile;

$str .= '</div>';