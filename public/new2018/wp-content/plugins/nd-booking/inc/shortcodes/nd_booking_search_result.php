<?php


//START  nd_booking_search_results
function nd_booking_shortcode_search_results() {

    wp_enqueue_script('masonry');
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_style('jquery-ui-datepicker-css', plugins_url() . '/nd-booking/assets/css/jquery-ui-datepicker.css' );
    wp_enqueue_script('jquery-ui-slider');
    wp_enqueue_script('jquery-ui-tooltip');

    //ajax results
    wp_enqueue_script( 'nd_booking_search_sorting', plugins_url() . '/nd-booking/assets/js/sorting.js', array( 'jquery' ) ); 
    wp_localize_script( 'nd_booking_search_sorting', 'nd_booking_my_vars_sorting', array( 'nd_booking_ajaxurl_sorting'   => admin_url( 'admin-ajax.php' )) ); 

    //START if dates are set
    if( isset( $_GET['nd_booking_archive_form_date_range_from']) && isset( $_GET['nd_booking_archive_form_date_range_to'])  ) { 
    
        $nd_booking_date_from = $_GET['nd_booking_archive_form_date_range_from'];
        $nd_booking_date_to = $_GET['nd_booking_archive_form_date_range_to'];
        
        $nd_booking_archive_form_guests = $_GET['nd_booking_archive_form_guests'];
        if ( $nd_booking_archive_form_guests == '' ) { $nd_booking_archive_form_guests = 1; }

        $nd_booking_nights_number = nd_booking_get_number_night($nd_booking_date_from,$nd_booking_date_to);

        //for calendar
        $nd_booking_new_date_from = new DateTime($nd_booking_date_from);
        $nd_booking_date_number_from_front = date_format($nd_booking_new_date_from, 'd');
        $nd_booking_date_month_from_front = date_format($nd_booking_new_date_from, 'M');
        $nd_booking_date_month_from_front = date_i18n('M',strtotime($nd_booking_date_from));
        $nd_booking_new_date_to = new DateTime($nd_booking_date_to);
        $nd_booking_date_number_to_front = date_format($nd_booking_new_date_to, 'd');
        $nd_booking_date_month_to_front = date_format($nd_booking_new_date_to, 'M');
        $nd_booking_date_month_to_front = date_i18n('M',strtotime($nd_booking_date_to));
        
    } else {

        $nd_booking_date_from = date('m/d/Y');
        $nd_booking_date_to = date('Y-m-d', strtotime(' + 1 days'));
        $nd_booking_archive_form_guests = 1;
        $nd_booking_nights_number = 1;

        //for calendar
        $nd_booking_date_number_from_front = date('d');
        $nd_booking_date_month_from_front = date('M');

        $nd_booking_date_month_from_front = date_i18n('M');

        $nd_booking_date_tomorrow = new DateTime('tomorrow');
        $nd_booking_date_number_to_front = $nd_booking_date_tomorrow->format('d');
        $nd_booking_date_month_to_front = $nd_booking_date_tomorrow->format('M');

        $nd_booking_todayy = date('Y/m/d');
        $nd_booking_tomorroww = date('Y/m/d', strtotime($nd_booking_todayy.' + 1 days'));
        $nd_booking_date_month_to_front = date_i18n('M',strtotime($nd_booking_tomorroww));
        
    }
    //END if dates are set
        
    
    //default price range
    if ( get_option('nd_booking_price_range_default_value') == '' ) { $nd_booking_price_range_default_value = 300; }else{ $nd_booking_price_range_default_value = get_option('nd_booking_price_range_default_value'); }    
    $nd_booking_archive_form_max_price_for_day = $nd_booking_price_range_default_value;
    

    //branches
    if( isset( $_GET['nd_booking_archive_form_branches'] ) ) { 
        
        $nd_booking_archive_form_branches = $_GET['nd_booking_archive_form_branches'];

    }else{

        $nd_booking_archive_form_branches = 0;

    }
    
    if ( $nd_booking_archive_form_branches == 0 ) { 
        $nd_booking_archive_form_branches_value = 0;
        $nd_booking_archive_form_branches_compare = '>'; 
    }else{  
        $nd_booking_archive_form_branches_value = $nd_booking_archive_form_branches;
        $nd_booking_archive_form_branches_compare = 'IN';
    }
    //end branches


    $nd_booking_new_date_to = new DateTime($nd_booking_date_to);
    $nd_booking_new_date_to_format_mdy = date_format($nd_booking_new_date_to, 'm/d/Y');

    //for pagination
    $nd_booking_qnt_posts_per_page = 4;

    //prepare query
    $nd_booking_paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1 ;

    $args = array(
        'post_type' => 'nd_booking_cpt_1',
        'posts_per_page' => $nd_booking_qnt_posts_per_page,
        'meta_query' => array(
            array(
                'key'     => 'nd_booking_meta_box_max_people',
                'type' => 'numeric',
                'value'   => $nd_booking_archive_form_guests,
                'compare' => '>=',
            ),
            array(
                'key'     => 'nd_booking_meta_box_min_price',
                'type' => 'numeric',
                'value'   => $nd_booking_archive_form_max_price_for_day,
                'compare' => '<=',
            ),
            array(
                'key' => 'nd_booking_meta_box_branches',
                'value'   => $nd_booking_archive_form_branches_value,
                'compare' => $nd_booking_archive_form_branches_compare,
            ),
        ),
        'paged' => $nd_booking_paged
    );
    $the_query = new WP_Query( $args );

    //pagination
    $nd_booking_qnt_results_posts = $the_query->found_posts;
    $nd_booking_qnt_pagination = ceil($nd_booking_qnt_results_posts / $nd_booking_qnt_posts_per_page);

    

    if ( get_option('nicdark_theme_author') == 1 and get_option('nd_options_page_enable') ) {} else {
        include 'include/search-results/nd_booking_search_results_order_options.php';   
    }
    include 'include/search-results/nd_booking_search_results_right_content.php';
    include 'include/search-results/nd_booking_search_results_left_content.php';

    
    //START final result
    $nd_booking_shortcode_result = '';
    $nd_booking_shortcode_result .='


    <div class="nd_booking_section">
    
        <div id="nd_booking_search_cpt_1_sidebar" class="nd_booking_float_left nd_booking_width_33_percentage nd_booking_box_sizing_border_box nd_booking_width_100_percentage_responsive">
            
            '.$nd_booking_shortcode_left_content.'

        </div>

        <div id="nd_booking_search_cpt_1_content" class="nd_booking_float_left nd_booking_width_66_percentage nd_booking_box_sizing_border_box nd_booking_width_100_percentage_responsive">
            
            '.$nd_booking_shortcode_right_content.'

        </div>

    </div>';
    //END final result


    echo $nd_booking_shortcode_result;
		


}
add_shortcode('nd_booking_search_results', 'nd_booking_shortcode_search_results');
//END nd_booking_search_results









//START function for AJAX
function nd_booking_sorting_php() {


    //for pagination
    $nd_booking_qnt_posts_per_page = 4;

    //recover var
    $nd_booking_paged = $_GET['nd_booking_paged'];
    $nd_booking_archive_form_branches = $_GET['nd_booking_archive_form_branches'];
    $nd_booking_date_from = $_GET['nd_booking_archive_form_date_range_from'];
    $nd_booking_date_to = $_GET['nd_booking_archive_form_date_range_to'];
    $nd_booking_archive_form_guests = $_GET['nd_booking_archive_form_guests'];
    $nd_booking_archive_form_max_price_for_day = $_GET['nd_booking_archive_form_max_price_for_day'];
    $nd_booking_archive_form_services = $_GET['nd_booking_archive_form_services'];
    $nd_booking_archive_form_additional_services = $_GET['nd_booking_archive_form_additional_services'];
    $nd_booking_search_filter_layout = $_GET['nd_booking_search_filter_layout'];
    $nd_booking_archive_form_branch_stars = $_GET['nd_booking_archive_form_branch_stars'];
    
    

    //order
    $nd_booking_search_filter_options_meta_key = $_GET['nd_booking_search_filter_options_meta_key'];
    $nd_booking_search_filter_options_order = $_GET['nd_booking_search_filter_options_order'];
    if ( $nd_booking_search_filter_options_meta_key == '' ) { 
        $nd_booking_orderby = 'date';
        $nd_booking_order = 'DESC';
    }else{
        $nd_booking_orderby = 'meta_value_num';
        $nd_booking_order = $nd_booking_search_filter_options_order;
    }
    
    //branch
    if ( $nd_booking_archive_form_branches == 0 ) { 
        $nd_booking_archive_form_branches_value = 0;
        $nd_booking_archive_form_branches_compare = '>'; 
    }else{  
        $nd_booking_archive_form_branches_value = $nd_booking_archive_form_branches;
        $nd_booking_archive_form_branches_compare = 'IN';
    }


    $args = array(
        'post_type' => 'nd_booking_cpt_1',
        'posts_per_page' => $nd_booking_qnt_posts_per_page,
        'orderby' => $nd_booking_orderby,
        'meta_key' => $nd_booking_search_filter_options_meta_key,
        'order' => $nd_booking_order,
        'meta_query' => array(
            array(
                'key'     => 'nd_booking_meta_box_max_people',
                'type' => 'numeric',
                'value'   => $nd_booking_archive_form_guests,
                'compare' => '>=',
            ),
            array(
                    'key'     => 'nd_booking_meta_box_min_price',
                    'type' => 'numeric',
                    'value'   => $nd_booking_archive_form_max_price_for_day,
                    'compare' => '<=',
                ),
            array(
                'key' => 'nd_booking_meta_box_branches',
                'type' => 'numeric',
                'value'   => $nd_booking_archive_form_branches_value,
                'compare' => $nd_booking_archive_form_branches_compare,
            ),
        ),
        'paged' => $nd_booking_paged
    );

    //START add new service to args
    $nd_booking_services_array = explode(',', $nd_booking_archive_form_services );

    for ($nd_booking_services_i = 0; $nd_booking_services_i < count($nd_booking_services_array)-1; $nd_booking_services_i++) {
        
        $nd_booking_service_slug = get_post_field( 'post_name', $nd_booking_services_array[$nd_booking_services_i] );
        $nd_booking_add_new_service_to_meta_query_position = 3+$nd_booking_services_i;
        
        $args['meta_query'][$nd_booking_add_new_service_to_meta_query_position] = array(
            'key' => 'nd_booking_meta_box_normal_services',
            'value'   => $nd_booking_service_slug,
            'compare' => 'LIKE',
        );

    }
    //END

    //START add new additional service to args
    $nd_booking_start_array_position_for_additional_services = 3+count($nd_booking_services_array)-1;
    $nd_booking_additional_services_array = explode(',', $nd_booking_archive_form_additional_services );

    for ($nd_booking_additional_services_i = 0; $nd_booking_additional_services_i < count($nd_booking_additional_services_array)-1; $nd_booking_additional_services_i++) {
        
        $nd_booking_additional_service_slug = get_post_field( 'post_name', $nd_booking_additional_services_array[$nd_booking_additional_services_i] );
        $nd_booking_add_new_additional_service_to_meta_query_position = $nd_booking_start_array_position_for_additional_services+$nd_booking_additional_services_i;
        
        $args['meta_query'][$nd_booking_add_new_additional_service_to_meta_query_position] = array(
            'key' => 'nd_booking_meta_box_additional_services',
            'value'   => $nd_booking_additional_service_slug,
            'compare' => 'LIKE',
        );

    }
    //END

    $the_query = new WP_Query( $args );

    //pagination
    $nd_booking_qnt_results_posts = $the_query->found_posts;
    $nd_booking_qnt_pagination = ceil($nd_booking_qnt_results_posts / $nd_booking_qnt_posts_per_page);


    //start output AJAX content
    $nd_booking_shortcode_right_content = '

    <div id="nd_booking_content_result" class="nd_booking_section">';


        if ( $nd_booking_qnt_results_posts == 0 ) { $nd_booking_shortcode_right_content .= '


        <div id="nd_booking_search_cpt_1_no_results" class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">
            <div class="nd_booking_section nd_booking_bg_yellow nd_booking_padding_15_20 nd_booking_box_sizing_border_box">
              <img class="nd_booking_float_left nd_booking_display_none_all_iphone" width="20" src="'.plugins_url().'/nd-booking/assets/img/icons/icon-warning-white.svg">
              <h3 class="nd_booking_float_left nd_options_color_white nd_booking_color_white nd_options_first_font nd_booking_margin_left_10">'.__('No results for this search','nd-booking').'</h3>
            </div>
        </div>


        '; }

        $nd_booking_shortcode_right_content .= '<div class="nd_booking_section nd_booking_masonry_content">';

        //START loop
        while ( $the_query->have_posts() ) : $the_query->the_post();

            include 'include/search-results/nd_booking_post_preview-'.$nd_booking_search_filter_layout.'.php';

        endwhile;
        //END loop

        $nd_booking_shortcode_right_content .= '</div>

            <script type="text/javascript">
                //<![CDATA[
                
                jQuery(document).ready(function() {

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


                });

                //]]>
              </script>';




            include 'include/search-results/nd_booking_search_results_pagination.php';




        $nd_booking_shortcode_right_content .= '</div>';


    wp_reset_postdata();


    echo $nd_booking_shortcode_right_content;

    die();

}
add_action( 'wp_ajax_nd_booking_sorting_php', 'nd_booking_sorting_php' );
add_action( 'wp_ajax_nopriv_nd_booking_sorting_php', 'nd_booking_sorting_php' );




//END