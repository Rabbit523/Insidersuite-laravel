<?php

///////////////////////////////////////////////////CPT1///////////////////////////////////////////////////////////////
function nd_booking_create_post_type_1() {

    register_post_type('nd_booking_cpt_1',
        array(
            'labels' => array(
                'name' => __('Rooms', 'nd-booking'),
                'singular_name' => __('Rooms', 'nd-booking')
            ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'rooms' ),
            'menu_icon'   => 'dashicons-admin-multisite',
            'supports' => array('title', 'editor', 'thumbnail' )
        )
    );
}
add_action('init', 'nd_booking_create_post_type_1');


//START create sidebar
function nd_booking_single_cause_sidebar() {

  // Sidebar Main
  register_sidebar(array(
      'name' =>  esc_html__('ND Booking Sidebar','nd-booking'),
      'id' => 'nd_booking_sidebar_cpt_1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));

}
add_action( 'widgets_init', 'nd_booking_single_cause_sidebar' );
//END create sidebar

