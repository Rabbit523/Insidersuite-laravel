<?php


add_action('admin_menu','nd_booking_add_settings_menu_import_export');
function nd_booking_add_settings_menu_import_export(){

  add_submenu_page( 'nd-booking-settings','Import Export', __('Import Export','nd-booking'), 'manage_options', 'nd-booking-settings-import-export', 'nd_booking_settings_menu_import_export' );

}



function nd_booking_settings_menu_import_export() {

  wp_enqueue_script( 'nd_booking_import_sett', plugins_url() . '/nd-booking/inc/admin/import-export/js/nd_booking_import_settings.js', array( 'jquery' ) ); 

  wp_localize_script( 'nd_booking_import_sett', 'nd_booking_my_vars_import_settings', array( 'nd_booking_ajaxurl_import_settings'   => admin_url( 'admin-ajax.php' )) ); 

?>

  
  <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25 ">

    

    <div style="background-color:<?php echo nd_booking_get_profile_bg_color(0); ?>; border-bottom:3px solid <?php echo nd_booking_get_profile_bg_color(2); ?>;" class="nd_booking_section nd_booking_padding_20  nd_booking_box_sizing_border_box">
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

          <li><a class="" href="<?php echo admin_url('admin.php?page=nd-booking-paypal-settings'); ?>"><?php _e('Payment Settings','nd-booking'); ?></a></li>
          <li><a style="background-color:<?php echo nd_booking_get_profile_bg_color(2); ?>;" class="" href="" ><?php _e('Import Export','nd-booking'); ?></a></li>
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
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Import/Export','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Export or Import your theme options.','nd-booking'); ?></p>
          </div>
        </div>
        <!--END-->

        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>


        <?php


          $nd_booking_all_options = wp_load_alloptions();
          $nd_booking_my_options  = array();

          $nd_booking_name_write = '';
           
          foreach ( $nd_booking_all_options as $nd_booking_name => $nd_booking_value ) {
              if ( stristr( $nd_booking_name, 'nd_booking_' ) ) {
                  
                $nd_booking_my_options[ $nd_booking_name ] = $nd_booking_value;
                $nd_booking_name_write .= $nd_booking_name.'[nd_booking_option_value]'.$nd_booking_value.'[nd_booking_end_option]';

              }
          }

          $nd_booking_name_write_new = str_replace(" ", "%20", $nd_booking_name_write);
           
        ?>


        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Export Settings','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Export Nd Booking and customizer options.','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <div class="nd_booking_section nd_booking_padding_left_20 nd_booking_padding_right_20 nd_booking_box_sizing_border_box">
              
                <a class="button button-primary" href="data:application/octet-stream;charset=utf-8,<?php echo $nd_booking_name_write_new; ?>" download="nd-booking-export.txt"><?php _e('Export','nd-booking'); ?></a>
              
            </div>

          </div>
        </div>
        <!--END-->

        
        <div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

        

        <!--START-->
        <div class="nd_booking_section">
          <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            <h2 class="nd_booking_section nd_booking_margin_0"><?php _e('Import Settings','nd-booking'); ?></h2>
            <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10"><?php _e('Paste in the textarea the text of your export file','nd-booking'); ?></p>
          </div>
          <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
            
            <div class="nd_booking_section nd_booking_padding_left_20 nd_booking_padding_right_20 nd_booking_box_sizing_border_box">
              
                <textarea id="nd_booking_import_settings" class="nd_booking_margin_bottom_20 nd_booking_width_100_percentage" name="nd_booking_import_settings" rows="10"><?php echo esc_attr( get_option('nd_booking_textarea') ); ?></textarea>
                
                <a onclick="nd_booking_import_settings()" class="button button-primary"><?php _e('Import','nd-booking'); ?></a>

                <div class="nd_booking_margin_top_20 nd_booking_section" id="nd_booking_import_settings_result_container"></div>
                
            </div>

          </div>
        </div>
        <!--END-->


      </div>
      <!--END content-->


    </div>

  </div>

<?php } 
/*END 1*/







//START nd_booking_import_settings_php_function for AJAX
function nd_booking_import_settings_php_function() {


  //recover datas
  $nd_booking_value_import_settings = $_GET['nd_booking_value_import_settings'];

  $nd_booking_import_settings_result = '';

  if ( $nd_booking_value_import_settings != '' ) {

    $nd_booking_array_options = explode("[nd_booking_end_option]", $nd_booking_value_import_settings);

    foreach ($nd_booking_array_options as $nd_booking_array_option) {
        
      $nd_booking_array_single_option = explode("[nd_booking_option_value]", $nd_booking_array_option);
      $nd_booking_option = $nd_booking_array_single_option[0];
      $nd_booking_new_value = $nd_booking_array_single_option[1];

      if ( $nd_booking_new_value != '' ){
        $nd_booking_update_result = update_option($nd_booking_option,$nd_booking_new_value);  

        if ( $nd_booking_update_result == 1 ) {
          $nd_booking_import_settings_result .= '

            <div class="notice updated is-dismissible nd_booking_margin_0_important">
              <p>'.__('Updated option','nd-booking').' "'.$nd_booking_option.'" '.__('with','nd-booking').' '.$nd_booking_new_value.'.</p>
            </div>

            ';

        }else{
          $nd_booking_import_settings_result .= '

            <div class="notice updated is-dismissible nd_booking_margin_0_important">
              <p>'.__('Updated option','nd-booking').' "'.$nd_booking_option.'" '.__('with the same value','nd-booking').'.</p>
            </div>

          ';    
        }

      }else{

        if ( $nd_booking_option != '' ){
          $nd_booking_import_settings_result .= '

        <div class="notice notice-warning is-dismissible nd_booking_margin_0">
          <p>'.__('No value founded for','nd-booking').' "'.$nd_booking_option.'" '.__('option.','nd-booking').'</p>
        </div>
        ';
        }

        
      }
      
    }

  }else{

    $nd_booking_import_settings_result .= '
      <div class="notice notice-error is-dismissible nd_booking_margin_0">
        <p>'.__('Empty textarea, please paste your export options.','nd-booking').'</p>
      </div>
    ';

  }
  
  echo $nd_booking_import_settings_result;

  die();


}
add_action( 'wp_ajax_nd_booking_import_settings_php_function', 'nd_booking_import_settings_php_function' );
add_action( 'wp_ajax_nopriv_nd_booking_import_settings_php_function', 'nd_booking_import_settings_php_function' );
//END