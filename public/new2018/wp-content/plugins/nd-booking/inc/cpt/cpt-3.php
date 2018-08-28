<?php

///////////////////////////////////////////////////CPT3///////////////////////////////////////////////////////////////
function nd_booking_create_post_type_3() {

    register_post_type('nd_booking_cpt_3',
        array(
            'labels' => array(
                'name' => __('Exceptions', 'nd-booking'),
                'singular_name' => __('Exceptions', 'nd-booking')
            ),
            'public' => false,
            'show_ui' => true,
            'show_in_nav_menus' => false,
            'menu_icon'   => 'dashicons-calendar-alt',
            'has_archive' => false,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'exceptions'),
            'supports' => array('title','editor')
        )
    );
}
add_action('init', 'nd_booking_create_post_type_3');

