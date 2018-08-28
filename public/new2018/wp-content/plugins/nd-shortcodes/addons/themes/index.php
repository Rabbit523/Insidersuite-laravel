<?php


if ( get_option('nicdark_theme_author') != 1 ){

  add_action('admin_menu', 'nd_options_create_themes_menu');
  function nd_options_create_themes_menu() {
    
    /*1*/
    add_menu_page( __('WP Themes','nd-shortcodes'), __('WP Themes','nd-shortcodes'), 'manage_options', 'nd-shortcodes-themes', 'nd_options_themes_menu_page', 'dashicons-cart' );

  }


  //START add custom css
  function nd_options_admin_style_for_theme_page() {
    
    wp_enqueue_style( 'nd_options_style_theme_page', plugins_url() . '/nd-shortcodes/css/admin-style.css', array(), false, false );
    
  }
  add_action( 'admin_enqueue_scripts', 'nd_options_admin_style_for_theme_page' );
  //END add custom css




  /*1 - page*/
  function nd_options_themes_menu_page() {
  ?>


    
    <div class="wrap">
      
      <h1 class="nd_options_margin_bottom_15_important">
        <?php _e('Themes','nd-shortcodes'); ?>
        <span class="nd_options_margin_left_10 title-count theme-count">9</span>
      </h1>

      <div class="theme-browser rendered">
        <div class="themes wp-clearfix">



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/hotel-booking.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/hotel-booking-hotel-wordpress-theme/20522335?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/hotel-booking-hotel-wordpress-theme/20522335?ref=nicdark">Hotel Booking</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/intro/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/hotel-booking-hotel-wordpress-theme/20522335?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/charity-foundation.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/charity-foundation-charity-hub-wp-theme/19763204?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/charity-foundation-charity-hub-wp-theme/19763204?ref=nicdark">Charity Foundation</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/charity/wp/demo/intro/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/charity-foundation-charity-hub-wp-theme/19763204?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/beauty-pack.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/health-beauty-wp-theme-for-beauty-business/18150388?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/health-beauty-wp-theme-for-beauty-business/18150388?ref=nicdark">Beauty Pack</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/beauty/wp/demo/intro/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/health-beauty-wp-theme-for-beauty-business/18150388?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->




          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/education-pack.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/education-pack-education-learning-theme-wp/16649896?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/education-pack-education-learning-theme-wp/16649896?ref=nicdark">Education Pack</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/education/wp/demo/intro/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/education-pack-education-learning-theme-wp/16649896?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/love-travel.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/love-travel-creative-travel-agency-wordpress/7704831?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/love-travel-creative-travel-agency-wordpress/7704831?ref=nicdark">Love Travel</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/love-travel/wp/demo-travel/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/love-travel-creative-travel-agency-wordpress/7704831?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->


          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/wedding-industry.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/wedding-industry-multipurpose-for-wedding-couple-site-wp/12744555?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/wedding-industry-multipurpose-for-wedding-couple-site-wp/12744555?ref=nicdark">Wedding Industry</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/wedding/wp/demo/intro/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/wedding-industry-multipurpose-for-wedding-couple-site-wp/12744555?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/baby-kids.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/baby-kids-education-primary-school-for-children/10240657?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/baby-kids-education-primary-school-for-children/10240657?ref=nicdark">Baby Kids</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/baby-kids/wp/demo/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/baby-kids-education-primary-school-for-children/10240657?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/sweet-cake.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/sweet-cake-wp-theme-for-bakery-yogurt-chocolate-coffee-shop/5514731?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/sweet-cake-wp-theme-for-bakery-yogurt-chocolate-coffee-shop/5514731?ref=nicdark">Sweet Cake</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/sweet-cake/wp/demo-sweet/cake/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/sweet-cake-wp-theme-for-bakery-yogurt-chocolate-coffee-shop/5514731?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->



          <!--theme-->
          <div class="theme nd_options_cursor_auto_important nd_options_margin_bottom_30_important" tabindex="0">
            
              <div class="theme-screenshot">
                <img src="<?php echo plugins_url(); ?>/nd-shortcodes/addons/themes/img/camping-village.jpg" alt="">
              </div>
            
              <span class="more-details"><a target="_blank" class="nd_options_color_ffffff nd_options_color_ffffff_hover nd_options_text_decoration_initial" href="https://themeforest.net/item/camping-village-campground-caravan-hiking-tent-accommodation-wp/14950641?ref=nicdark"><?php _e('Theme Details','nd-shortcodes'); ?></a></span>

              <h2 class="theme-name"><a target="_blank" class="nd_options_color_23282d nd_options_text_decoration_initial nd_options_color_23282d_hover" href="https://themeforest.net/item/camping-village-campground-caravan-hiking-tent-accommodation-wp/14950641?ref=nicdark">Camping Village</a></h2>
            
              <div class="theme-actions">
                <a target="_blank" class="button button-secondary activate" href="http://www.nicdarkthemes.com/themes/camping-village/wp/demo/"><?php _e('Demo','nd-shortcodes'); ?></a>
                <a target="_blank" class="button button-primary load-customize hide-if-no-customize" href="https://themeforest.net/item/camping-village-campground-caravan-hiking-tent-accommodation-wp/14950641?ref=nicdark"><?php _e('Purchase','nd-shortcodes'); ?></a>
              </div>

          </div>
          <!--theme-->


          

        </div>
      </div>

    </div>


  <?php } 
  /*END 1*/

}
