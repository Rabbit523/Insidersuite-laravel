<?php


/////////////////////////////////////////////////// START MAIN PLUGIN SETTINGS ///////////////////////////////////////////////////////////////
add_action('admin_menu', 'nd_booking_create_menu');
function nd_booking_create_menu() {
  
  add_menu_page('Booking Plugin', __('Booking Plugin','nd-booking'), 'manage_options', 'nd-booking-settings', 'nd_booking_settings_page', 'dashicons-admin-generic' );
  add_action( 'admin_init', 'nd_booking_settings' );

  //custom hook
  do_action("nd_booking_add_menu_settings");

}

function nd_booking_settings() {
  register_setting( 'nd_booking_settings_group', 'nd_booking_currency' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_units_of_measure' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_container' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_plugin_dev_mode' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_price_guests' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_price_range_min_value' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_price_range_default_value' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_price_range_max_value' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_search_page' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_booking_page' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_checkout_page' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_terms_page' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_account_page' );
  register_setting( 'nd_booking_settings_group', 'nd_booking_order_page' );

  //custom hook
  do_action("nd_booking_add_settings_group");

}

function nd_booking_settings_page() {

?>


<form method="post" action="options.php">
    
  <?php settings_fields( 'nd_booking_settings_group' ); ?>
  <?php do_settings_sections( 'nd_booking_settings_group' ); ?>


  <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_booking_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_booking_get_profile_bg_color(2); ?>;" class="nd_booking_section nd_booking_padding_20 nd_booking_box_sizing_border_box">
      <h2 class="nd_booking_color_ffffff nd_booking_display_inline_block"><?php _e('ND Booking','nd-booking'); ?></h2><span class="nd_booking_margin_left_10 nd_booking_color_a0a5aa"><?php echo nd_booking_get_plugin_version(); ?></span>
    </div>

    

    <div class="nd_booking_section  nd_booking_box_shadow_0_1_1_000_04 nd_booking_background_color_ffffff nd_booking_border_1_solid_e5e5e5 nd_booking_border_top_width_0 nd_booking_border_left_width_0 nd_booking_overflow_hidden nd_booking_position_relative">

      <!--START menu-->
      <div style="background-color:<?php echo nd_booking_get_profile_bg_color(1); ?>;" class="nd_booking_width_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_min_height_3000 nd_booking_position_absolute">

        <ul class="nd_booking_navigation">
          <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href="#"><?php _e('Plugin Settings','nd-booking'); ?></a></li>

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

          <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-premium-addons'); ?>" ><?php _e('Premium Addons','nd-booking'); ?></a></li>

          <?php }

          ?>
          
        </ul>
      </div>
      <!--END menu-->

      <!--START content-->
      <div class="nd_booking_width_80_percentage nd_booking_margin_left_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Plugin Settings','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Below some important plugin settings.','nd-booking'); ?></p>
          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Currency','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Plugin Currency','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_currency" value="<?php echo esc_attr( get_option('nd_booking_currency') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert the currency. Eg: $','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Units of Measure','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Plugin Units of measure','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_units_of_measure" value="<?php echo esc_attr( get_option('nd_booking_units_of_measure') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert the units of measure. Eg: m','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <?php
          //custom hook
          do_action("nd_booking_add_setting_on_main_page");
        ?>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Container','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Remove default container','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input <?php if( get_option('nd_booking_container') == 1 ) { echo 'checked="checked"'; } ?> name="nd_booking_container" type="checkbox" value="1">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('If your theme does not need the default container of 1200px in template pages you can remove it by flagging the checkbox.','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Developer Mode','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Enable developer mode','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input <?php if( get_option('nd_booking_plugin_dev_mode') == 1 ) { echo 'checked="checked"'; } ?> name="nd_booking_plugin_dev_mode" type="checkbox" value="1">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('In this mode all requests will not be saved in your database','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Price Guests','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Enable developer mode','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input <?php if( get_option('nd_booking_price_guests') == 1 ) { echo 'checked="checked"'; } ?> name="nd_booking_price_guests" type="checkbox" value="1">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Enable the checkbox if you want to multiplie the price room for the number of guests','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <?php

        //decide display
        $nd_booking_price_range_enable = get_option('nd_booking_price_range_enable'); 
        if ( $nd_booking_price_range_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_price_range_class = ''; }else{ $nd_booking_price_range_class = 'nd_booking_display_none'; }
        
        //default values
        if ( get_option('nd_booking_price_range_min_value') == '' ) { $nd_booking_price_range_min_value = 1; }else{ $nd_booking_price_range_min_value = get_option('nd_booking_price_range_min_value'); }
        if ( get_option('nd_booking_price_range_default_value') == '' ) { $nd_booking_price_range_default_value = 300; }else{ $nd_booking_price_range_default_value = get_option('nd_booking_price_range_default_value'); }
        if ( get_option('nd_booking_price_range_max_value') == '' ) { $nd_booking_price_range_max_value = 700; }else{ $nd_booking_price_range_max_value = get_option('nd_booking_price_range_max_value'); }

        ?>
        <div class="nd_booking_section <?php echo $nd_booking_price_range_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Price Range','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set the price range values on the search page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <div class="nd_booking_width_33_percentage nd_booking_box_sizing_border_box nd_booking_float_left nd_booking_padding_right_10">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_price_range_min_value" value="<?php echo esc_attr($nd_booking_price_range_min_value); ?>" />
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Min Value','nd-booking'); ?></p>
            </div>

            <div class="nd_booking_width_33_percentage nd_booking_box_sizing_border_box nd_booking_float_left nd_booking_padding_left_10 nd_booking_padding_right_10">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_price_range_default_value" value="<?php echo esc_attr($nd_booking_price_range_default_value); ?>" />
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Default Value','nd-booking'); ?></p>
            </div>
            
            <div class="nd_booking_width_33_percentage nd_booking_box_sizing_border_box nd_booking_float_left nd_booking_padding_left_10">
              <input class="nd_booking_width_100_percentage" type="text" name="nd_booking_price_range_max_value" value="<?php echo esc_attr($nd_booking_price_range_max_value); ?>" />
              <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Max Value','nd-booking'); ?></p>
            </div>
            
          </div>
        </div>
        <div class="nd_booking_section <?php echo $nd_booking_price_range_class; ?> nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>
        <!--END-->

        
        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Search Page','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your search page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_search_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_search_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added the shortcode [nd_booking_search_results]','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Booking Page','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your booking page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_booking_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_booking_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added the shortcode [nd_booking_booking]','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Checkout Page','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your checkout page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_checkout_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_checkout_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added the shortcode [nd_booking_checkout]','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Terms and conditions','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your terms and conditions page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_terms_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_terms_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added your terms and conditions informations','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>





        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Account','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your account page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_account_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_account_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added the shortcode [nd_booking_account]','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>





        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Order','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Select your order page','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_order_page">
              <?php $nd_booking_pages = get_pages(); ?>
              <?php foreach ($nd_booking_pages as $nd_booking_page) : ?>
                  <option

                  <?php 
                    if( get_option('nd_booking_order_page') == $nd_booking_page->ID ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                   value="<?php echo $nd_booking_page->ID; ?>">
                      <?php echo $nd_booking_page->post_title; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select the page where you have added the shortcode [nd_booking_order]','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>





        <div class="nd_booking_section nd_booking_padding_left_20 nd_booking_padding_right_20 nd_booking_box_sizing_border_box">
          <?php submit_button(); ?>
        </div>      


      </div>
      <!--END content-->


    </div>

  </div>
</form>

<?php } 
/////////////////////////////////////////////////// END MAIN PLUGIN SETTINGS ///////////////////////////////////////////////////////////////



/////////////////////////////////////////////////// START PAYPAL SETTINGS ///////////////////////////////////////////////////////////////

add_action('nd_booking_add_menu_settings','nd_booking_add_paypal_settings');
function nd_booking_add_paypal_settings(){

  add_submenu_page( 'nd-booking-settings','ND Booking', __('Payment Settings','nd-booking'), 'manage_options', 'nd-booking-paypal-settings', 'nd_booking_paypal_page' );
  add_action( 'admin_init', 'nd_booking_paypal_settings' );

}


function nd_booking_paypal_settings() {
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_city_tax' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_vat' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_paypal_developer' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_paypal_email' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_paypal_token' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_paypal_currency' );

  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_paypal_message_checkout' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_booking_request_message_checkout' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_bank_transfer_message_checkout' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_payment_on_arrive_message_checkout' );

  do_action("nd_booking_add_setting_on_register_payment_message");

}


function nd_booking_paypal_page() {


  $nd_booking_paypal_enable = get_option('nd_booking_paypal_enable'); 
  if ( $nd_booking_paypal_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_paypal_class = ''; }else{ $nd_booking_paypal_class = 'nd_booking_display_none'; }
  $nd_booking_booking_request_enable = get_option('nd_booking_booking_request_enable'); 
  if ( $nd_booking_booking_request_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_br_class = ''; }else{ $nd_booking_br_class = 'nd_booking_display_none'; }
  $nd_booking_payment_on_arrive_enable = get_option('nd_booking_payment_on_arrive_enable'); 
  if ( $nd_booking_payment_on_arrive_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_poa_class = ''; }else{ $nd_booking_poa_class = 'nd_booking_display_none'; }



?>
<form method="post" action="options.php">
    
  <?php settings_fields( 'nd_booking_paypal_settings_group' ); ?>
  <?php do_settings_sections( 'nd_booking_paypal_settings_group' ); ?>


  <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_booking_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_booking_get_profile_bg_color(2); ?>;" class="nd_booking_section nd_booking_padding_20 nd_booking_box_sizing_border_box">
      <h2 class="nd_booking_color_ffffff nd_booking_display_inline_block"><?php _e('ND Booking','nd-booking'); ?></h2><span class="nd_booking_margin_left_10 nd_booking_color_a0a5aa"><?php echo nd_booking_get_plugin_version(); ?></span>
    </div>

    

    <div class="nd_booking_section  nd_booking_box_shadow_0_1_1_000_04 nd_booking_background_color_ffffff nd_booking_border_1_solid_e5e5e5 nd_booking_border_top_width_0 nd_booking_border_left_width_0 nd_booking_overflow_hidden nd_booking_position_relative">
    
      <!--START menu-->
      <div style="background-color:<?php echo nd_booking_get_profile_bg_color(1); ?>;" class="nd_booking_width_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_min_height_3000 nd_booking_position_absolute">

        <ul class="nd_booking_navigation">
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings'); ?>"><?php _e('Plugin Settings','nd-booking'); ?></a></li>
          
          <?php 

          if ( get_option('nicdark_theme_author') == 1 ){ ?>

            <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-addons-manager'); ?>"><?php _e('Addons Manager','nd-booking'); ?></a></li>

          <?php }
          
          ?>
          
          <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href=""><?php _e('Payment Settings','nd-booking'); ?></a></li>
          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-import-export'); ?>"><?php _e('Import Export','nd-booking'); ?></a></li>
          <li><a target="_blank" class="" href="http://documentations.cleanthemes.net/hotel-booking/"><?php _e('Documentation','nd-booking'); ?></a></li>

          <?php 

          if ( get_option('nicdark_theme_author') != 1 ){ ?>

          <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href="<?php echo admin_url('admin.php?page=nd-booking-settings-premium-addons'); ?>" ><?php _e('Premium Addons','nd-booking'); ?></a></li>

          <?php }

          ?>

        </ul>
      </div>
      <!--END menu-->


      <!--START content-->
      <div class="nd_booking_width_80_percentage nd_booking_margin_left_20_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Payment Settings','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Below some important payment settings.','nd-booking'); ?></p>
          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

        

        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('City Tax','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Insert city tax value','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_city_tax" value="<?php echo esc_attr( get_option('nd_booking_city_tax') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert your city tax value, only number ( not mandatory ), City tax is calculated per person per night.','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('VAT','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Insert your country VAT','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_vat" value="<?php echo esc_attr( get_option('nd_booking_vat') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert your country VAT value, only number ( not mandatory ).','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_paypal_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Developer Mode Paypal','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Enable paypal developer mode','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input <?php if( get_option('nd_booking_paypal_developer') == 1 ) { echo 'checked="checked"'; } ?> name="nd_booking_paypal_developer" type="checkbox" value="1">
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Check to use paypal in developer mode , more information','nd-booking'); ?> <a target="_blank" href="https://developer.paypal.com/docs/classic/lifecycle/sb_about-accounts/"><?php _e('HERE','nd-booking'); ?></a></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_paypal_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_paypal_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Paypal Email','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Insert your paypal email','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_paypal_email" value="<?php echo esc_attr( get_option('nd_booking_paypal_email') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert your paypal email of your business account','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_paypal_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>




        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_paypal_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('PDT identity token Paypal','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Insert paypal api token','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_paypal_token" value="<?php echo esc_attr( get_option('nd_booking_paypal_token') ); ?>" />
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert your PDT identity token , more information','nd-booking'); ?> <a target="_blank" href="https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/paymentdatatransfer/"><?php _e('HERE','nd-booking'); ?></a> <?php _e('section Activating PDT','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_paypal_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>




        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_paypal_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Currency Paypal','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set your paypal currency','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <select class="nd_booking_width_100_percentage" name="nd_booking_paypal_currency">
              <?php $nd_booking_currencies = array(
                
                "AUD","BRL","CAD","CZK","DKK","EUR","HKD","HUF","ILS","JPY","MYR","MXN","NOK","NZD","PHP","PLN","GBP","RUB","SGD","SEK","CHF","TWD","THB","TRY","USD"

                ); ?>
              <?php foreach ($nd_booking_currencies as $nd_booking_currency) : ?>
                  <option 

                  <?php 
                    if( get_option('nd_booking_paypal_currency') == $nd_booking_currency ) { 
                      echo 'selected="selected"';
                    } 
                  ?>

                  value="<?php echo $nd_booking_currency; ?>">
                      <?php echo $nd_booking_currency; ?>
                  </option>
              <?php endforeach; ?>
            </select>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Select your Currency, more information','nd-booking'); ?> <a target="_blank" href="https://developer.paypal.com/docs/classic/api/currency_codes/"><?php _e('HERE','nd-booking'); ?></a></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_paypal_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_paypal_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Paypal Message on Checkout','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set your checkout message','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <textarea rows="5" class="nd_booking_width_100_percentage" type="text" name="nd_booking_paypal_message_checkout"><?php echo esc_attr( get_option('nd_booking_paypal_message_checkout') ); ?></textarea>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert some description which will be visible in the checkout page','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_paypal_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>




        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_br_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Booking Request Message on Checkout','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set your checkout message','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <textarea rows="5" class="nd_booking_width_100_percentage" type="text" name="nd_booking_booking_request_message_checkout"><?php echo esc_attr( get_option('nd_booking_booking_request_message_checkout') ); ?></textarea>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert some description which will be visible in the checkout page','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_br_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>




        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Bank Transfer Message on Checkout','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set your checkout message','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <textarea rows="5" class="nd_booking_width_100_percentage" type="text" name="nd_booking_bank_transfer_message_checkout"><?php echo esc_attr( get_option('nd_booking_bank_transfer_message_checkout') ); ?></textarea>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert some description which will be visible in the checkout page','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <!--START-->
        <div class="nd_booking_section <?php echo $nd_booking_poa_class; ?> ">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Payment on arrive Message on Checkout','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Set your checkout message','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <textarea rows="5" class="nd_booking_width_100_percentage" type="text" name="nd_booking_payment_on_arrive_message_checkout"><?php echo esc_attr( get_option('nd_booking_payment_on_arrive_message_checkout') ); ?></textarea>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20"><?php _e('Insert some description which will be visible in the checkout page','nd-booking'); ?></p>

          </div>
        </div>
        <!--END-->
        <div class=" <?php echo $nd_booking_poa_class; ?> nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



        <?php do_action("nd_booking_add_setting_on_payment_message"); ?>



        <div class="nd_booking_section nd_booking_padding_left_20 nd_booking_padding_right_20 nd_booking_box_sizing_border_box">
          <?php submit_button(); ?>
        </div>
      


      </div>
      <!--END content-->


    </div>

  </div>
</form>


<?php } 
/////////////////////////////////////////////////// END PAYPAL SETTINGS ///////////////////////////////////////////////////////////////



//include all options
foreach ( glob ( plugin_dir_path( __FILE__ ) . "*/index.php" ) as $file ){
  include_once $file;
}

