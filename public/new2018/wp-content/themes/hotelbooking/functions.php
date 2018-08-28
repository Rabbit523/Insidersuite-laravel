<?php

$nicdark_themename = "hotelbooking";

//TGMPA required plugin
require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'nicdark_register_required_plugins' );
function nicdark_register_required_plugins() {

    $nicdark_plugins = array(

        //cf7
        array(
            'name'      => esc_html__( 'Contact Form 7', 'hotelbooking' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),

        //wp import
        array(
            'name'      => esc_html__( 'Wordpress Importer', 'hotelbooking' ),
            'slug'      => 'wordpress-importer',
            'required'  => true,
        ),

        //nd booking
        array(
            'name'      => esc_html__( 'ND Booking', 'hotelbooking' ),
            'slug'      => 'nd-booking',
            'required'  => true,
        ),

        //nd shortcodes
        array(
            'name'      => esc_html__( 'ND Shortcodes', 'hotelbooking' ),
            'slug'      => 'nd-shortcodes',
            'required'  => true,
        ),

        //revslider
        array(
            'name'               => esc_html__( 'Revolution Slider', 'hotelbooking' ),
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory().'/plugins/revslider.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
        
        //Visual Composer
        array(
            'name'               => esc_html__( 'Visual Composer', 'hotelbooking' ),
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory().'/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),

    );


    $nicdark_config = array(
        'id'           => 'hotelbooking',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table. 
    );

    tgmpa( $nicdark_plugins, $nicdark_config );
}
//END tgmpa


//translation
load_theme_textdomain( 'hotelbooking', get_template_directory().'/languages' );


//register my menus
function nicdark_register_my_menus() {
  register_nav_menu( 'main-menu', esc_html__( 'Main Menu', 'hotelbooking' ) );  
}
add_action( 'init', 'nicdark_register_my_menus' );


//Content_width
if (!isset($content_width )) $content_width  = 1180;


//automatic-feed-links
add_theme_support( 'automatic-feed-links' );

//post-thumbnails
add_theme_support( "post-thumbnails" );

//post-formats
add_theme_support( 'post-formats', array( 'quote', 'image', 'link', 'video', 'gallery', 'audio' ) );

//title tag
add_theme_support( 'title-tag' );

// Sidebar
function nicdark_add_sidebars() {

    // Sidebar Main
    register_sidebar(array(
        'name' =>  esc_html__('Sidebar','hotelbooking'),
        'id' => 'nicdark_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}
add_action( 'widgets_init', 'nicdark_add_sidebars' );

//add css and js
function nicdark_enqueue_scripts()
{
	
    //css
    wp_enqueue_style( 'nicdark-style', get_stylesheet_uri() );
    wp_enqueue_style( 'nicdark-fonts', nicdark_google_fonts_url(), array(), '1.0.0' );

    //comment-reply
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    //navigation
    wp_enqueue_script("nicdark_navigation", get_template_directory_uri() . "/js/nicdark_navigation.js", array('jquery'), false, true );

}
add_action("wp_enqueue_scripts", "nicdark_enqueue_scripts");
//end js


//logo settings
add_action('customize_register','nicdark_customizer_logo');
function nicdark_customizer_logo( $wp_customize ) {
  

    //Logo
    $wp_customize->add_setting( 'nicdark_customizer_logo_img', array(
      'type' => 'option', // or 'option'
      'capability' => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
      'default' => '',
      'transport' => 'refresh', // or postMessage
      'sanitize_callback' => 'nicdark_sanitize_callback_logo_img',
      //'sanitize_js_callback' => '', // Basically to_json.
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Media_Control( 
            $wp_customize, 
            'nicdark_customizer_logo_img', 
            array(
              'label' => esc_html__( 'Logo', 'hotelbooking' ),
              'section' => 'title_tagline',
              'mime_type' => 'image',
            ) 
        ) 
    );

    //sanitize_callback
    function nicdark_sanitize_callback_logo_img($nicdark_logo_img_value) {
        return absint($nicdark_logo_img_value);
    }


}
//end logo settings


//woocommerce support
add_theme_support( 'woocommerce' );


//define nicdark theme option
function nicdark_theme_setup(){
    add_option( 'nicdark_theme_author', 1, '', 'yes' );
    update_option( 'nicdark_theme_author', 1 );
}
add_action( 'after_setup_theme', 'nicdark_theme_setup' );



//START add google fonts
function nicdark_google_fonts_url() {
    $nicdark_font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'hotelbooking' ) ) {
        $nicdark_font_url = add_query_arg( 'family', urlencode( 'Gilda+Display|Roboto:300,400,700' ), "//fonts.googleapis.com/css" );
    }
    return $nicdark_font_url;
}
//END add google fonts
