<?php


$nd_booking_shortcode_right_content = '';

//START RIGHT CONTENT
$nd_booking_shortcode_right_content .= '

  <div id="nd_booking_archive_search_masonry_container" class="nd_booking_section nd_booking_position_relative">
    
    <div id="nd_booking_content_result" class="nd_booking_section">

        <!--<h3>'.__('Results Founded : ','nd-booking').''.$nd_booking_qnt_results_posts.'</h3>-->';

        //if NO RESULT
        if ( $nd_booking_qnt_results_posts == 0 ) { 

          $nd_booking_shortcode_right_content .= '

          <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">
            <div class="nd_booking_section nd_booking_bg_yellow nd_booking_padding_15_20 nd_booking_box_sizing_border_box">
              <img class="nd_booking_float_left nd_booking_display_none_all_iphone" width="20" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-warning-white.svg">
              <h3 class="nd_booking_float_left nd_options_color_white nd_booking_color_white nd_options_first_font nd_booking_margin_left_10">'.__('No results for this search','nd-booking').'</h3>
            </div>
          </div>
          
          '; 

        }
        //END if

        $nd_booking_shortcode_right_content .= '
        <div class="nd_booking_section nd_booking_masonry_content">';

          //START loop
          while ( $the_query->have_posts() ) : $the_query->the_post();

              include 'nd_booking_post_preview-1.php';

          endwhile;
          //END loop

        $nd_booking_shortcode_right_content .= '
        </div>


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


            //tooltip
            $( ".nd_booking_tooltip_jquery" ).tooltip({ 
              tooltipClass: "nd_booking_tooltip_jquery_content",
              position: {
                my: "center top",
                at: "center-7 top-33",
              }
            });


          });
          //END masonry

        });

        //]]>
      </script>';


      
      include 'nd_booking_search_results_pagination.php';



    $nd_booking_shortcode_right_content .= '
    </div>
  </div>
';
//END RIGHT CONTENT