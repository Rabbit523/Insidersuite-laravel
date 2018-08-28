<?php

///////////////////////////////////////////////////CPT2///////////////////////////////////////////////////////////////
function nd_booking_create_post_type_4() {

    register_post_type('nd_booking_cpt_4',
        array(
            'labels' => array(
                'name' => __('Branches', 'nd-booking'),
                'singular_name' => __('Branches', 'nd-booking')
            ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'branches' ),
            'menu_icon'   => 'dashicons-location-alt',
            'supports' => array('title', 'editor', 'thumbnail' )
        )
    );
}
add_action('init', 'nd_booking_create_post_type_4');

