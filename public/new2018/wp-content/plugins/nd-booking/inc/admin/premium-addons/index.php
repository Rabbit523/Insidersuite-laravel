<?php


if ( get_option('nicdark_theme_author') != 1 ){



  add_action('admin_menu','nd_booking_add_settings_menu_premium_addons');
  function nd_booking_add_settings_menu_premium_addons(){

    add_submenu_page( 'nd-booking-settings','Premium Addons', __('Premium Addons','nd-booking'), 'manage_options', 'nd-booking-settings-premium-addons', 'nd_booking_settings_menu_premium_addons' );

  }



  function nd_booking_settings_menu_premium_addons() {

  ?>

    
    <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25 ">

      

      <div style="background-color:<?php echo nd_booking_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_booking_get_profile_bg_color(2); ?>;" class="nd_booking_section nd_booking_padding_20  nd_booking_box_sizing_border_box">
        <h2 class="nd_booking_color_ffffff nd_booking_display_inline_block"><?php _e('ND Booking','nd-booking'); ?></h2><span class="nd_booking_margin_left_10 nd_booking_color_a0a5aa"><?php echo nd_booking_get_plugin_version(); ?></span>
      </div>

      

      <div class="nd_booking_section nd_booking_min_height_400  nd_booking_box_shadow_0_1_1_000_04 nd_booking_background_color_ffffff nd_booking_border_1_solid_e5e5e5 nd_booking_border_top_width_0 nd_booking_border_left_width_0 nd_booking_overflow_hidden nd_booking_position_relative">
      
        <!--START menu-->
        <div style="background-color:<?php echo nd_booking_get_profile_bg_color(1); ?>;" class="nd_booking_width_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_min_height_3000 nd_booking_position_absolute">

          <ul class="nd_booking_navigation">
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings'); ?>"><?php _e('Plugin Settings','nd-booking'); ?></a></li>
            
            <?php 

            if ( get_option('nicdark_theme_author') == 1 ){ ?>

              <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-addons-manager'); ?>"><?php _e('Addons Manager','nd-booking'); ?></a></li>

            <?php }
            
            ?>
            
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-paypal-settings'); ?>"><?php _e('Payment Settings','nd-booking'); ?></a></li>
            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-import-export'); ?>"><?php _e('Import Export','nd-booking'); ?></a></li>
            <li><a target="_blank" class="" href="http://documentations.cleanthemes.net/hotel-booking/"><?php _e('Documentation','nd-booking'); ?></a></li>

            <?php 

            if ( get_option('nicdark_theme_author') != 1 ){ ?>

              <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href="" ><?php _e('Premium Addons','nd-booking'); ?></a></li>

            <?php }
            
            ?>


          </ul>
        </div>
        <!--END menu-->


        <!--START content-->
        <div class="nd_booking_width_80_percentage nd_booking_margin_left_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">


          <!--START-->
          <div class="nd_booking_section">
            
              


               <div class="nd_booking_section nd_booking_padding_20 nd_booking_box_sizing_border_box">
                <div class="nd_booking_section nd_booking_padding_30 nd_booking_box_sizing_border_box nd_booking_border_1_solid_e5e5e5 nd_booking_position_relative">
                  <h2 class="nd_booking_font_size_21 nd_booking_line_height_21 nd_booking_margin_0"><?php _e('Get All Addons','nd-booking'); ?></h2>
                  <p class="nd_booking_margin_top_10 nd_booking_color_666666 nd_booking_font_size_16 nd_booking_line_height_16 nd_booking_margin_0"><?php _e('Get all addons and an amazing Hotel WP theme all in one pack.','nd-booking'); ?></p>
                  <a target="_blank" class="button button-primary button-hero nd_booking_top_30 nd_booking_right_30 nd_booking_position_absolute" href="https://goo.gl/pXmVxV"><?php _e('CHECK IT NOW !','nd-booking'); ?></a>
                </div>
              </div>





              <table id="nd_booking_table_premium_addons" class="nd_booking_width_60_percentage nd_booking_margin_auto nd_booking_border_collapse_collapse">
                
                <thead class="nd_booking_text_align_center">
                  <tr>
                    <td>
                    </td>
                    <td>
                      <h2><?php _e('FREE','nd-booking'); ?></h2>
                    </td>
                    <td>
                      <h2><?php _e('PREMIUM','nd-booking'); ?></h2>
                    </td>
                  </tr>
                </thead>

                <tbody>
                  

                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Room Managment','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Create your romms and manage all reservations','nd-booking'); ?>. <a target="_blank" href="https://goo.gl/JNE8c8"><?php _e('View Demo','nd-booking'); ?></a></p>
                    </td>

                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Branch','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set a different branch for each room','nd-booking'); ?>. <a target="_blank" href="https://goo.gl/4KDfhT"><?php _e('View Demo','nd-booking'); ?></a></p>
                    </td>

                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>



                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Services','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Normal and Extra services managment','nd-booking'); ?>. <a target="_blank" href="https://goo.gl/XKTpsA"><?php _e('View Demo','nd-booking'); ?></a></p>
                    </td>

                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>



                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Paypal & more','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Paypal and more payment systems ready for all reservations','nd-booking'); ?>.</p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Search Filter','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Add price range and services filter on search page','nd-booking'); ?>. <a target="_blank" href="https://goo.gl/JNE8c8"><?php _e('View Demo','nd-booking'); ?></a></p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Email on order','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Receive an automatic email for each new order','nd-booking'); ?>.</p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Visual Composer integration','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Custom visual composer components for all your pages','nd-booking'); ?>.</p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('External Booking System','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Integrate your site with booking.com, Airbnb, Hostel World, Trip Advisor etc..','nd-booking'); ?>.</p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>


                  <tr>
                    <td>
                      <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Similar Rooms & Packages','nd-booking'); ?></h2>
                      <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Add related rooms and show some focus on single room page','nd-booking'); ?>. <a target="_blank" href="https://goo.gl/XKTpsA"><?php _e('View Demo','nd-booking'); ?></a></p>
                    </td>
                    
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-not.svg">
                    </td>
                    <td class="nd_booking_text_align_center">
                      <img width="25" height="25" src="<?php echo plugins_url(); ?>/nd-booking/assets/img/icons/icon-yes.svg">
                    </td>
                  </tr>






                </tbody>

              </table>




          </div>
          <!--END-->


          


        </div>
        <!--END content-->


      </div>

    </div>

  <?php } 
  /*END 1*/

}



