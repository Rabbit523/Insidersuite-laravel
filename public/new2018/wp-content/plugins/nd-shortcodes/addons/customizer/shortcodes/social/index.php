<?php

//shortcode nd_social
function nd_options_social( $nd_options_atts ) {
    
    $nd_options_social = shortcode_atts( 
    	array(
	        'social' => '',
	        'image' => '',
	        'link' => '',
    	), 
    $nd_options_atts );

    //start
    $nd_options_str = '';

    
    //image
    if ( $nd_options_social['image'] == '' ) { 

    	$nd_options_social_image = plugins_url().'/nd-shortcodes/addons/customizer/shortcodes/social/img/'.$nd_options_social['social'].'.svg';	

    }else {

    	$nd_options_social_image = $nd_options_social['image'];

    }


   	$nd_options_str .= '<a target="_blank" href="'.$nd_options_social['link'].'"><img alt="" width="40" height="40" class="nd_options_margin_5" src="'.$nd_options_social_image.'"></a>';


    return $nd_options_str;
}
add_shortcode( 'nd_social', 'nd_options_social' );
