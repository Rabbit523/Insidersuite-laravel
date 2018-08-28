<?php




add_action('nd_booking_add_menu_page_after_order','nd_booking_add_settings_menu_calendar_view');
function nd_booking_add_settings_menu_calendar_view(){

  add_submenu_page( 'nd-booking-settings','Calendar', __('Calendar View','nd-booking'), 'manage_options', 'nd-booking-settings-calendar-view', 'nd_booking_add_calendar_view' );

}


function nd_booking_add_calendar_view(){


    //call script
    wp_enqueue_script( 'nd_booking_get_orders', plugins_url() . '/nd-booking/addons/calendar-view/js/get_orders.js', array( 'jquery' ) ); 

    //ajax validate_fields
    wp_localize_script( 'nd_booking_get_orders', 'nd_booking_my_vars_get_orders', array( 'nd_booking_ajaxurl_get_orders'   => admin_url( 'admin-ajax.php' )) );

    $nd_booking_month = $_POST['nd_booking_month'];

    if ($nd_booking_month == '') {

        //dates variables
        $nd_booking_day_today = date('j');
        $nd_booking_month_today = date('n');
        $nd_booking_year_today = date('Y');
        $nd_booking_tot_days_this_month = cal_days_in_month(CAL_GREGORIAN, $nd_booking_month_today, $nd_booking_year_today);

        //calculate next and prev date
        $nd_booking_next_month = nd_booking_get_next_prev_month_year(date('Y-m-d'),'month','next');
        $nd_booking_next_year = nd_booking_get_next_prev_month_year(date('Y-m-d'),'year','next');
        $nd_booking_prev_month = nd_booking_get_next_prev_month_year(date('Y-m-d'),'month','prev');
        $nd_booking_prev_year = nd_booking_get_next_prev_month_year(date('Y-m-d'),'year','prev');

    }else{

        $nd_booking_month = $_POST['nd_booking_month'];
        $nd_booking_year = $_POST['nd_booking_year'];

        $nd_booking_new_date = $nd_booking_year.'-'.$nd_booking_month.'-1';

        //dates variables
        $nd_booking_month_today = $nd_booking_month;
        $nd_booking_year_today = $nd_booking_year;
        $nd_booking_tot_days_this_month = cal_days_in_month(CAL_GREGORIAN, $nd_booking_month_today, $nd_booking_year_today);

        //calculate next and prev date
        $nd_booking_next_month = nd_booking_get_next_prev_month_year($nd_booking_new_date,'month','next');
        $nd_booking_next_year = nd_booking_get_next_prev_month_year($nd_booking_new_date,'year','next');
        $nd_booking_prev_month = nd_booking_get_next_prev_month_year($nd_booking_new_date,'month','prev');
        $nd_booking_prev_year = nd_booking_get_next_prev_month_year($nd_booking_new_date,'year','prev');

    }


    //variables
    $nd_booking_date_cell_width = 100/$nd_booking_tot_days_this_month;
    $nd_booking_get_month_name_date = $nd_booking_year_today.'-'.$nd_booking_month_today.'-1';

    $nd_booking_add_calendar_view = '';

    
    //START CALENDAR CONTENT
    $nd_booking_add_calendar_view .= '


    <style>
        #nd_booking_order_drop_down .nd_booking_edit { color: #0073aa;cursor: pointer;background: none; border: 0px;font-size: 13px; padding: 0px; }
        #nd_booking_order_drop_down .nd_booking_edit:hover { color: #00a0d2; }  
        #nd_booking_order_drop_down .nd_booking_delete { color: #a00;cursor: pointer;background: none;border: 0px;font-size: 13px;padding: 0px; }
        .nd_booking_prev_next_cal { background-color:#23282d; color:#fff; border:0px; font-size:10px; margin-right:5px; margin-left:5px; cursor:pointer; }
        .nd_booking_date_box { width:20px; height:20px; border-radius:100%; margin:auto; margin-top:12px; }
        .triangle-up {overflow: hidden;box-sizing: border-box;text-align: center;line-height: 10px;position: absolute;top: -9px;}
        .triangle-up:after {content: "";display: inline-block;width: 0px;height: 0px;border-left: 10px solid transparent;border-right: 10px solid transparent;border-bottom: 10px solid #fff;line-height: 10px;}

    </style>


    <div class="nd_booking_section nd_booking_padding_right_20 nd_booking_padding_left_2 nd_booking_box_sizing_border_box nd_booking_margin_top_25">
        

        <h1 class="nd_booking_margin_0" style="font-size: 23px; font-weight: 400;">'.__('Calendar View','nd-booking').'</h1>


        <!--START DAYS-->
        <div style="background-color:#fff; border:1px solid #e1e1e1;" class="nd_booking_section nd_booking_margin_top_20">
            <div class="nd_booking_float_left nd_booking_width_10_percentage">

                <div style="padding-top:1em;" class="nd_booking_section nd_booking_text_align_center">
                    <span>'.nd_booking_get_month_name($nd_booking_get_month_name_date).' '.$nd_booking_year_today.'</span>
                </div>
                <div class="nd_booking_float_left nd_booking_text_align_center nd_booking_width_50_percentage">
                    <form method="POST" action="admin.php?page=nd-booking-settings-calendar-view">
                        <input type="hidden" name="nd_booking_month" value="'.$nd_booking_prev_month.'">
                        <input type="hidden" name="nd_booking_year" value="'.$nd_booking_prev_year.'">
                        <input type="submit" class="nd_booking_prev_next_cal nd_booking_float_right" value="'.__('PREV','nd-booking').'">
                    </form>
                </div>
                <div class="nd_booking_float_left nd_booking_text_align_center nd_booking_width_50_percentage">
                    <form method="POST" action="admin.php?page=nd-booking-settings-calendar-view">
                        <input type="hidden" name="nd_booking_month" value="'.$nd_booking_next_month.'">
                        <input type="hidden" name="nd_booking_year" value="'.$nd_booking_next_year.'">
                        <input type="submit" class="nd_booking_prev_next_cal nd_booking_float_left" value="'.__('NEXT','nd-booking').'">
                    </form>
                </div>

            </div>

            <div class="nd_booking_float_left nd_booking_width_90_percentage">';

            for ($nd_booking_i = 1; $nd_booking_i <= $nd_booking_tot_days_this_month; $nd_booking_i++) {

                $nd_booking_date = $nd_booking_month_today.'/'.$nd_booking_i.'/'.$nd_booking_year_today;

                $nd_booking_add_calendar_view .= '
                    <div class="nd_booking_float_left nd_booking_text_align_center" style="width:'.$nd_booking_date_cell_width.'%;">
                        
                        <p class="nd_booking_section">
                            <span class="nd_booking_section">'.date("D",strtotime($nd_booking_date)).'</span>
                            <span class="nd_booking_section">'.$nd_booking_i.'</span>
                        </p>
                        
                    </div>
                ';      

            }

        $nd_booking_add_calendar_view .= '
            </div>
        </div>
        <!--END DAYS-->';





        $nd_booking_add_calendar_view .= '
        <!--START ROOMS-->
        <div style="border-left: 1px solid #e1e1e1; border-right: 1px solid #e1e1e1; box-shadow: 0 1px 1px rgba(0,0,0,.04); " class="nd_booking_section">';

            $args = array(
              'post_type' => 'nd_booking_cpt_1',
              'posts_per_page' => -1
            );
            $the_query = new WP_Query( $args );
            $nd_booking_qnt_results_posts = $the_query->found_posts;

            //colors row
            $nd_booking_i_color = 0;

            //START loop
            while ( $the_query->have_posts() ) : $the_query->the_post();

                if ( $nd_booking_i_color & 1 ) { $nd_booking_row_class = 'nd_booking_tr_light'; } else { $nd_booking_row_class = 'nd_booking_tr_dark'; } 

                $nd_booking_add_calendar_view .= '
                <div class="nd_booking_section '.$nd_booking_row_class.' " style="border-bottom:1px solid #e1e1e1;">';

                    //default
                    $nd_booking_title = get_the_title();
                    $nd_booking_id = get_the_ID();
                    $nd_booking_permalink = get_permalink( $nd_booking_id );
                    
                    $nd_booking_add_calendar_view .= ' 
                    <div class="nd_booking_float_left nd_booking_width_10_percentage nd_booking_padding_10_15 nd_booking_box_sizing_border_box">


                        <div style="display:table;" class="nd_booking_section">
                          <div style="width:45px; display:table-cell; vertical-align:middle;">
                            <img class="nd_booking_float_left" width="35" src="'.nd_booking_get_post_img_src($nd_booking_id).'">
                          </div>
                          <div style="display:table-cell; vertical-align:middle;" class="nd_booking_box_sizing_border_box">
                            <span class="nd_booking_section">
                              <span class="nd_booking_section"><strong>'.$nd_booking_title.'</strong></span>
                            </span>
                          </div>
                        </div>

                    </div>';     

                    $nd_booking_add_calendar_view .= '
                    <div class="nd_booking_float_left nd_booking_width_90_percentage">';

                        for ($nd_booking_i = 1; $nd_booking_i <= $nd_booking_tot_days_this_month; $nd_booking_i++) {

                            //prepare dates
                            $nd_booking_date_from = $nd_booking_month_today.'/'.$nd_booking_i.'/'.$nd_booking_year_today;
                            $nd_booking_date_to = date('Y/m/d', strtotime($nd_booking_date_from.' + 1 days'));

                            //availability
                            $nd_booking_availability = nd_booking_is_qnt_available(nd_booking_is_available($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to),$nd_booking_date_from,$nd_booking_date_to,$nd_booking_id);
                            if ( $nd_booking_availability == 0 ) {

                                 $nd_booking_availability_color_class = 'nd_booking_background_color_e64343';
                                $nd_booking_availability_content = '<div data-date-from="'.$nd_booking_date_from.'" data-date-to="'.$nd_booking_date_to.'" data-date-id="'.$nd_booking_id.'" class=" '.$nd_booking_availability_color_class.' nd_booking_date_box nd_booking_cursor_pointer nd_booking_cell_id_'.str_replace('/','-',$nd_booking_date_from).'_'.$nd_booking_id.'  nd_booking_position_relative "></div>';
                               
                            }else{

                                if( nd_booking_is_available($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to) != '' ){

                                    $nd_booking_availability_color_class = 'nd_booking_background_color_e68843';
                                    $nd_booking_availability_content = '<div data-date-from="'.$nd_booking_date_from.'" data-date-to="'.$nd_booking_date_to.'" data-date-id="'.$nd_booking_id.'" class=" '.$nd_booking_availability_color_class.' nd_booking_date_box nd_booking_cursor_pointer nd_booking_cell_id_'.str_replace('/','-',$nd_booking_date_from).'_'.$nd_booking_id.'  nd_booking_position_relative "></div>';
                                    

                                }else{

                                    $nd_booking_availability_color_class = '';
                                    $nd_booking_availability_content = '<div data-date-from="'.$nd_booking_date_from.'" data-date-to="'.$nd_booking_date_to.'" data-date-id="'.$nd_booking_id.'" class=" '.$nd_booking_availability_color_class.' nd_booking_cell_id_'.str_replace('/','-',$nd_booking_date_from).'_'.$nd_booking_id.' nd_booking_section nd_booking_position_relative "></div>';
                                    
                                }

                            }

                            $nd_booking_add_calendar_view .= '
                                <div class=" nd_booking_cell_container_id_'.str_replace('/','-',$nd_booking_date_from).'_'.$nd_booking_id.' nd_booking_float_left nd_booking_text_align_center nd_booking_box_sizing_border_box nd_booking_height_45 nd_booking_position_relative" style="width:'.$nd_booking_date_cell_width.'%; border-left:1px solid #e1e1e1;">
                                    '.$nd_booking_availability_content.'
                                </div>
                            ';      

                        }
                    $nd_booking_add_calendar_view .= '
                    </div>';


                $nd_booking_add_calendar_view .= '
                </div>';

                $nd_booking_i_color = $nd_booking_i_color + 1;

            endwhile;
            //END loop

        $nd_booking_add_calendar_view .= '
        </div>
        <!--END ROOMS-->



        <input type="hidden" id="nd_booking_get_orders_date_from" name="nd_booking_get_orders_date_from" readonly value="">
        <input type="hidden" id="nd_booking_get_orders_date_to" name="nd_booking_get_orders_date_to" readonly value="">
        <input type="hidden" id="nd_booking_get_orders_id_field" name="nd_booking_get_orders_id_field" readonly value="">


        <script type="text/javascript">
          //<![CDATA[
          jQuery(document).ready(function() {

            jQuery( function ( $ ) {

                $( ".nd_booking_date_box" ).on( "click", function() {
                    
                    var nd_booking_date_from = $(this).attr("data-date-from");
                    var nd_booking_date_to = $(this).attr("data-date-to");
                    var nd_booking_id = $(this).attr("data-date-id");
                
                    $( "#nd_booking_get_orders_date_from" ).val(nd_booking_date_from);
                    $( "#nd_booking_get_orders_date_to" ).val(nd_booking_date_to);
                    $( "#nd_booking_get_orders_id_field" ).val(nd_booking_id);

                    nd_booking_get_orders();

                });

            });

          });
          //]]>
        </script>';





    $nd_booking_add_calendar_view .= '
    </div>';  
    //END CALENDAR CONTENT



    echo $nd_booking_add_calendar_view;

}



//php function for get all orders in strings
function nd_booking_is_available_orders($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to){

    //date_2 are already booked dates
    //date_1 are the dates of the search

    //converte date_1
    $nd_booking_date_from_1 = new DateTime($nd_booking_date_from);
    $nd_booking_date_to_1 = new DateTime($nd_booking_date_to);
    $nd_booking_date_1_from = date_format($nd_booking_date_from_1, 'Y/m/d');
    $nd_booking_date_1_to = date_format($nd_booking_date_to_1, 'Y/m/d');

    //range date_1
    $nd_booking_number_night_range_1 = nd_booking_get_number_night($nd_booking_date_1_from,$nd_booking_date_1_to);

    global $wpdb;

    $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';
    $nd_booking_booking_form_payment_status = "'Pending'";

    $nd_booking_dates = $wpdb->get_results( "SELECT date_from,date_to,id FROM $nd_booking_table_name WHERE id_post = $nd_booking_id AND paypal_payment_status <> $nd_booking_booking_form_payment_status");

    $nd_booking_avaiability_string = '';

    //no results
    if ( empty($nd_booking_dates) ) { 

    return $nd_booking_avaiability_string;

    }else{

        foreach ( $nd_booking_dates as $nd_booking_date ) 
        {
            
            $nd_booking_date_1_from = date_format($nd_booking_date_from_1, 'Y/m/d');

            //converte date_2
            $nd_booking_date_from_booked = $nd_booking_date->date_from; 
            $nd_booking_date_to_booked = $nd_booking_date->date_to; 
            $nd_booking_date_from_2 = new DateTime($nd_booking_date_from_booked);
            $nd_booking_date_to_2 = new DateTime($nd_booking_date_to_booked);
            $nd_booking_date_2_from = date_format($nd_booking_date_from_2, 'Y/m/d');
            $nd_booking_date_2_to = date_format($nd_booking_date_to_2, 'Y/m/d');

            //range date_2
            $nd_booking_number_night_range_2 = nd_booking_get_number_night($nd_booking_date_2_from,$nd_booking_date_2_to);
            
            //start cicle 1
            for ($nd_booking_i_1 = 1; $nd_booking_i_1 <= $nd_booking_number_night_range_1; $nd_booking_i_1++ ) {
                
                $nd_booking_date_2_from = date_format($nd_booking_date_from_2, 'Y/m/d');

                //start cicle 2
                for ($nd_booking_i_2 = 1; $nd_booking_i_2 <= $nd_booking_number_night_range_2; $nd_booking_i_2++) {

                    if ( $nd_booking_date_1_from == $nd_booking_date_2_from ) {
                        $nd_booking_avaiability_string .= $nd_booking_date->id.'-';
                    }

                    $nd_booking_date_2_from = date('Y/m/d', strtotime($nd_booking_date_2_from.' + 1 days'));    

                }
                //end cicle 2

                $nd_booking_date_1_from = date('Y/m/d', strtotime($nd_booking_date_1_from.' + 1 days'));    
                    
            }
            //end cicle 1
            

        }

        return $nd_booking_avaiability_string;
         
    }



}




/* **************************************** START AJAX **************************************** */

//php function for validation fields on booking form
function nd_booking_get_orders_php_function() {

    //recover datas
    $nd_booking_date_from = $_GET['nd_booking_date_from'];
    $nd_booking_date_to = $_GET['nd_booking_date_to'];
    $nd_booking_id = $_GET['nd_booking_id'];

    //get_all_orders
    $nd_booking_string_result_orders = nd_booking_is_available_orders($nd_booking_id,$nd_booking_date_from,$nd_booking_date_to);

    //array orders
    $nd_booking_orders = explode("-", $nd_booking_string_result_orders);

    //qnt orders
    $nd_booking_orders_qnt = count($nd_booking_orders);
    $nd_booking_orders_cicle = $nd_booking_orders_qnt-2;

    //position
    if ( nd_booking_get_day_number($nd_booking_date_from) >= 15 ){
        $nd_booking_position_class = 'right';
        $nd_booking_position_close_class = 'left';
    }else{
        $nd_booking_position_class = 'left';
         $nd_booking_position_close_class = 'right';
    }

    //START ALL POPUP CONTENT
    $nd_booking_string_result = '
    <div id="nd_booking_order_drop_down" class="nd_booking_position_relative" style=" '.$nd_booking_position_class.': 0px; cursor:initial; position: absolute; padding-left:20px; padding-right:20px; width: 450px; background-color: #fff;  top: 40px; z-index:9; border:1px solid #e1e1e1;">
        
        <div style="'.$nd_booking_position_class.':15px;" class="triangle-up"></div>

        <div style="width: 15px;height: 15px;cursor: pointer;'.$nd_booking_position_close_class.': 0px;top: 0px;" class="nd_booking_order_drop_down_btn_close nd_booking_position_absolute">
            <img alt="" style="width: 60%; margin-top: 5px; margin-'.$nd_booking_position_close_class.': 5px;" src="'.plugins_url().'/nd-booking/addons/calendar-view/img/cancel.png">
        </div>

    ';


        for ($nd_booking_i = 0; $nd_booking_i <= $nd_booking_orders_cicle; $nd_booking_i++) {
            
            $nd_booking_order = $nd_booking_orders[$nd_booking_i];
    
            //START DB
            global $wpdb;

            $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';

            $nd_booking_info_order = $wpdb->get_results( "SELECT date_from,date_to,final_trip_price,user_first_name,user_last_name,paypal_email,paypal_payment_status,paypal_currency,action_type FROM $nd_booking_table_name WHERE id = $nd_booking_order");

            if ( empty($nd_booking_info_order) ) { 

                $nd_booking_string_result .= __('NO DATA','nd-booking');

            }else{

                foreach ( $nd_booking_info_order as $nd_booking_info_orde ){
                        

                    //decide status color
                    if ( $nd_booking_info_orde->paypal_payment_status == 'Pending Payment' ) { 
                      $nd_booking_color_bg_status = '#e64343';
                    }elseif ( $nd_booking_info_orde->paypal_payment_status == 'Pending' ){
                      $nd_booking_color_bg_status = '#e68843';
                    }else{
                      $nd_booking_color_bg_status = '#54ce59'; 
                    }
                    
                    $nd_booking_string_result .= '

                        <div class=" nd_booking_order_drop_down_row nd_booking_section nd_booking_padding_10 '.$nd_booking_border_class.' nd_booking_box_sizing_border_box">
                            
                            <div class="nd_booking_width_33_percentage nd_booking_float_left nd_booking_box_sizing_border_box">

                                <div class="nd_booking_float_left">
                                  <span class="nd_booking_section nd_booking_text_align_left">'.$nd_booking_i_border.' '.$nd_booking_info_orde->user_first_name.' '.$nd_booking_info_orde->user_last_name.'</span>
                                    
                                    <form class="nd_booking_float_left" method="POST" action="admin.php?page=nd-booking-settings-orders">
                                      <input type="hidden" name="edit_order_id" value="'.$nd_booking_order.'">
                                      <input type="submit" class="nd_booking_edit" value="'.__('View','nd-booking').'">
                                    </form>

                                    <form class="nd_booking_float_left nd_booking_padding_left_10" method="POST" action="admin.php?page=nd-booking-settings-orders">
                                      <input type="hidden" name="delete_order_id" value="'.$nd_booking_order.'">
                                      <input type="submit" class="nd_booking_delete" value="'.__('Delete','nd-booking').'">
                                    </form>

                                </div>

                            </div>
                            <div class="nd_booking_width_33_percentage nd_booking_float_left nd_booking_box_sizing_border_box">
                                <span class="nd_booking_section nd_booking_text_align_left"><u>'.__('From','nd-booking').'</u> : '.$nd_booking_info_orde->date_from.'</span>
                                <span class="nd_booking_section nd_booking_text_align_left"><u>'.__('To','nd-booking').'</u> : '.$nd_booking_info_orde->date_to.'</span>
                            </div>
                            <div class="nd_booking_width_33_percentage nd_booking_float_left nd_booking_box_sizing_border_box">
                                <span class="nd_booking_section nd_booking_text_align_left">'.$nd_booking_info_orde->final_trip_price.' '.$nd_booking_info_orde->paypal_currency.' - '.$nd_booking_info_orde->action_type.'</span>
                                <span class="nd_booking_text_transform_uppercase" style="background-color: '.$nd_booking_color_bg_status.';color: #fff; text-decoration:none; font-size: 10px;padding: 3px;float: left;line-height: 10px;margin-top: 2px;">'.$nd_booking_info_orde->paypal_payment_status.'</span>
                            </div>

                        </div>

                    ';

                }

            }
            //END DB

        }
        
    $nd_booking_string_result .= '
    </div>
    ';
    //END ALL POPUP CONTENT


    echo $nd_booking_string_result;  

    //close the function to avoid wordpress errors
    die();

}
add_action( 'wp_ajax_nd_booking_get_orders_php_function', 'nd_booking_get_orders_php_function' );
add_action( 'wp_ajax_nopriv_nd_booking_get_orders_php_function', 'nd_booking_get_orders_php_function' );
/* **************************************** END AJAX **************************************** */


