<?php    

$nd_booking_result = '';
$nd_booking_order_id = $_POST['edit_order_id'];

global $wpdb;
$nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';


//START UPDATE RECORD
if ( isset($_POST['nd_booking_order_id']) ){

  $nd_booking_order_id = $_POST['nd_booking_order_id'];

  $nd_booking_edit_record = $wpdb->update( 
        
    $nd_booking_table_name, 
    
    array( 
      'id' => $_POST['nd_booking_order_id'],
      'id_post' => $_POST['nd_booking_order_id_post'],
      'title_post' => $_POST['nd_booking_order_title_post'],
      'date' => $_POST['nd_booking_order_date'],
      'date_from' => $_POST['nd_booking_order_date_from'],
      'date_to' => $_POST['nd_booking_order_date_to'],
      'guests' => $_POST['nd_booking_order_guests'],
      'final_trip_price' => $_POST['nd_booking_order_final_trip_price'],
      'extra_services' => $_POST['nd_booking_order_extra_services'],
      'id_user' => $_POST['nd_booking_order_id_user'],
      'user_first_name' => $_POST['nd_booking_order_user_first_name'],
      'user_last_name' => $_POST['nd_booking_order_user_last_name'],
      'paypal_email' => $_POST['nd_booking_order_paypal_email'],
      'user_phone' => $_POST['nd_booking_order_user_phone'],
      'user_address' => $_POST['nd_booking_order_user_address'],
      'user_city' => $_POST['nd_booking_order_user_city'],
      'user_country' => $_POST['nd_booking_order_user_country'],
      'user_message' => $_POST['nd_booking_order_user_message'],
      'user_arrival' => $_POST['nd_booking_order_user_arrival'],
      'user_coupon' => $_POST['nd_booking_order_user_coupon'],
      'paypal_payment_status' => $_POST['nd_booking_order_paypal_payment_status'],
      'paypal_currency' => $_POST['nd_booking_order_paypal_currency'],
      'paypal_tx' => $_POST['nd_booking_order_paypal_tx'],
      'action_type' => $_POST['nd_booking_order_action_type'],
    ),
    array( 'ID' => $_POST['nd_booking_order_id'] )

  );


  if ($nd_booking_edit_record){

    $nd_booking_result .= '

      <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible nd_booking_margin_left_0_important nd_booking_margin_bottom_20_important"> 
        <p>
          <strong>'.__('Settings saved.','nd-booking').'</strong>
        </p>
        <button type="button" class="notice-dismiss">
          <span class="screen-reader-text">'.__('Dismiss this notice.','nd-booking').'</span>
        </button>
      </div>

    ';

  }else{

    #$wpdb->show_errors();
    #$wpdb->print_error();

  }



}
//END UPDATE RECORD


//START select order
$nd_booking_orders = $wpdb->get_results( "SELECT * FROM $nd_booking_table_name WHERE id = $nd_booking_order_id");


if ( empty($nd_booking_orders) ) { 

  $nd_booking_result .= '
  <div class="nd_booking_position_relative  nd_booking_width_100_percentage nd_booking_box_sizing_border_box nd_booking_display_inline_block">           
    <p class=" nd_booking_margin_0 nd_booking_padding_0">'.__('There was some db problem','nd-booking').'</p>
  </div>';              


}else{


  foreach ( $nd_booking_orders as $nd_booking_order ) 
  {
     

    //get room image
    $nd_booking_id = $nd_booking_order->id_post;
    $nd_booking_image_id = get_post_thumbnail_id($nd_booking_id);
    $nd_booking_image_attributes = wp_get_attachment_image_src( $nd_booking_image_id, 'thumbnail' );
    $nd_booking_room_img_src = $nd_booking_image_attributes[0];

    //decide status color
    if ( $nd_booking_order->paypal_payment_status == 'Pending Payment' ) { 
      $nd_booking_color_bg_status = '#e64343';
    }elseif ( $nd_booking_order->paypal_payment_status == 'Pending' ){
      $nd_booking_color_bg_status = '#e68843';
    }else{
      $nd_booking_color_bg_status = '#54ce59'; 
    }

    //define action type
    $nd_booking_new_action_type = str_replace("_"," ",$nd_booking_order->action_type);


    $nd_booking_result .= '


    <style>
    .update-nag { display:none; }

    .nd_booking_custom_tables table td p {
        margin-bottom: 10px !important;
        margin-top: 10px !important;
        padding-bottom: 0px;
        padding-top: 0px;
    }

    </style>


  
    <form method="POST">

      <div class="nd_booking_section">


        <div style="width:80%;" class="nd_booking_float_left  nd_booking_padding_right_20 nd_booking_box_sizing_border_box">
          
          <div style="border: 1px solid #e5e5e5; box-shadow: 0 1px 1px rgba(0,0,0,.04);" class="nd_booking_section nd_booking_background_color_ffffff nd_booking_padding_10 nd_booking_box_sizing_border_box">

            <div style="padding-bottom:0px;" class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_20">
              


              <div style="display:table;" class="nd_booking_section">
                
                <div style="width:80px; display:table-cell; vertical-align:middle;">
                  <img class="nd_booking_float_left" width="60" src="'.$nd_booking_room_img_src.'">
                </div>

                <div style="display:table-cell; vertical-align:middle;" class="nd_booking_box_sizing_border_box">
                  
                  <div class="nd_booking_section nd_booking_height_5"></div>
                  <div class="nd_booking_section">
                    <h1 class="nd_booking_margin_0 nd_booking_display_inline_block nd_booking_float_left">'.__('Order','nd-booking').' #'.$nd_booking_order->id.' '.__('details','nd-booking').' </h1>
                    <span style="background-color:'.$nd_booking_color_bg_status.'; margin-left:15px; margin-top:-5px;" class="nd_booking_padding_5 nd_booking_display_block nd_booking_float_left nd_booking_color_ffffff nd_booking_font_size_12 nd_booking_text_transform_uppercase">'.$nd_booking_order->paypal_payment_status.'</span>
                  </div>
                  
                  <div class="nd_booking_section nd_booking_height_10"></div>
                  <p class="nd_booking_margin_0">'.$nd_booking_order->title_post.' #'.$nd_booking_order->id_post.' '.__('on','nd-booking').' <u>'.$nd_booking_order->date.'</u></p>

                  <input readonly name="nd_booking_order_id" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->id.'"> 
                  <input readonly name="nd_booking_order_id_post" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->id_post.'"> 
                  <input readonly name="nd_booking_order_title_post" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->title_post.'"> 

                </div>

              </div>


              


            </div>

            <div style="width:33.33%;" class="nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">
              

                <h3>'.__('General Details','nd-booking').'</h3>


                <input readonly name="nd_booking_order_date" class="nd_booking_display_none nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->date.'"> 


                <label class="nd_booking_section">'.__('Date From','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_date_from" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->date_from.'"> 

                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('Date To','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_date_to" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->date_to.'"> 

                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('Arrival','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_user_arrival" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_arrival.'"> 

            </div>

            <div style="width:33.33%;" class="nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">


                <h3>'.__('Customer Details','nd-booking').'</h3>

                <input readonly name="nd_booking_order_id_user" class="nd_booking_display_none nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->id_user.'"> 

                <label class="nd_booking_section">'.__('Name and Surname','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>

                <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_right_10">
                  <input name="nd_booking_order_user_first_name" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_first_name.'">
                </div>
                <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_left_10">
                  <input name="nd_booking_order_user_last_name" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_last_name.'"> 
                </div>
                
                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('Email','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_paypal_email" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->paypal_email.'"> 

                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('Phone','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_user_phone" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_phone.'"> 

                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('Address','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <input name="nd_booking_order_user_address" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_address.'"> 

                <div class="nd_booking_section nd_booking_height_20"></div>

                <label class="nd_booking_section">'.__('City and Country','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_right_10">
                  <input name="nd_booking_order_user_city" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_city.'">  
                </div>
                <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_left_10">
                  <input name="nd_booking_order_user_country" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_country.'">   
                </div>

            </div>

            <div style="width:33.33%;" class="nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_20">

                <label style="margin-top:50px;" class="nd_booking_section">'.__('Message','nd-booking').'</label>
                <div class="nd_booking_section nd_booking_height_5"></div>
                <textarea rows="16" name="nd_booking_order_user_message" class="nd_booking_section nd_booking_display_block regular-text">'.$nd_booking_order->user_message.'</textarea>

            </div>
            
          
          </div>

          
          <div style="border: 1px solid #e5e5e5; box-shadow: 0 1px 1px rgba(0,0,0,.04);" class="nd_booking_section nd_booking_background_color_ffffff nd_booking_margin_top_20">
            
            <div class="nd_booking_custom_tables nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_30">

              <h3 class="nd_booking_margin_0">'.__('Price Details','nd-booking').'</h3>

              <div class="nd_booking_section nd_booking_height_20"></div>

              <input name="nd_booking_order_guests" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->guests.'"> 
              <input name="nd_booking_order_final_trip_price" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->final_trip_price.'">               
              <input name="nd_booking_order_paypal_currency" class="nd_booking_display_none nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->paypal_currency.'"> 
              <input name="nd_booking_order_extra_services" class="nd_booking_display_none nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->extra_services.'">';

              $nd_booking_result .= '
                <div class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_border_bottom_1_solid_eee">

                  <table class="nd_booking_section">
                    <tr>
                      <td style="width:70%;">'.__('Item','nd-booking').'</td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p>'.__('Cost','nd-booking').'</p></td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p>'.__('Qnt','nd-booking').' *</p></td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p>'.__('Tot','nd-booking').'</p></td>
                    </tr>

                  </table>

                </div>'; 

              $nd_booking_services_array = explode(',', $nd_booking_order->extra_services );
              $nd_booking_tot_services = 0;

              for ($nd_booking_services_array_i = 0; $nd_booking_services_array_i < count($nd_booking_services_array)-1; $nd_booking_services_array_i++) {
                      
                  $nd_booking_service_array = explode('[', $nd_booking_services_array[$nd_booking_services_array_i] );

                  //info service
                  $nd_booking_service_id = $nd_booking_service_array[0];
                  $nd_booking_service_price = str_replace(']','',$nd_booking_service_array[1]);
                  if ( $nd_booking_service_price == '' ) { $nd_booking_service_price = __('n.a.','nd-booking'); }
                  $nd_booking_service_name = get_the_title($nd_booking_service_id);
                  $nd_booking_meta_box_cpt_2_price_type_1 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_1', true );
                  $nd_booking_meta_box_cpt_2_price_type_2 = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_price_type_2', true );
                  if ( $nd_booking_meta_box_cpt_2_price_type_1 == 'nd_booking_price_type_person' ) { $nd_booking_price_type_1 = $nd_booking_order->guests; }else{ $nd_booking_price_type_1 = 1; }
                  if ( $nd_booking_meta_box_cpt_2_price_type_2 == 'nd_booking_price_type_day' ) { $nd_booking_price_type_2 = nd_booking_get_number_night($nd_booking_order->date_from,$nd_booking_order->date_to); }else{ $nd_booking_price_type_2 = 1; }
                  $nd_booking_service_price_initial = $nd_booking_service_price/$nd_booking_price_type_1/$nd_booking_price_type_2;
                  if ( $nd_booking_service_price_initial == 0 ) { $nd_booking_service_price_initial = __('n.a.','nd-booking'); }

                  //icon
                  $nd_booking_service_icon = get_post_meta( $nd_booking_service_id, 'nd_booking_meta_box_cpt_2_icon', true );
                  if (  $nd_booking_service_icon != '' ){
                      $nd_booking_service_image = '<img alt="" class="nd_booking_margin_right_15 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="25" src="'.$nd_booking_service_icon.'">';
                  }else{
                      $nd_booking_service_image = '';
                  }

                  $nd_booking_result .= '
                  <div class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">

                    <table class="nd_booking_section">
                      <tr>
                        <td style="width:70%;">
                          <div class="nd_booking_display_table nd_booking_float_left">
                            '.$nd_booking_service_image.'
                            <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_line_height_20">'.$nd_booking_service_name.'</p>
                          </div>
                        </td>
                        <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_service_price_initial.' '.nd_booking_get_currency().'</p></td>
                        <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_price_type_1.' x '.$nd_booking_price_type_2.'</p></td>
                        <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_service_price.' '.nd_booking_get_currency().'</p></td>
                      </tr>
                    </table>

                  </div>';    

                  $nd_booking_tot_services = $nd_booking_tot_services + $nd_booking_service_price;

              }


              if ( $nd_booking_tot_services != 0 ) {

                $nd_booking_result .= '
                <div style="border-top:4px double #eee;" class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">

                  <table class="nd_booking_section">
                    <tr>
                      <td style="width:70%;">
                        <strong>'.__('TOTAL SERVICES','nd-booking').'</strong>
                      </td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p></p></td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p></p></td>
                      <td style="width:10%;" class="nd_booking_text_align_right"><p><strong>'.$nd_booking_tot_services.' '.nd_booking_get_currency().'</strong></p></td>
                    </tr>

                  </table>

                </div>';  


              }

              //price room
              $nd_booking_tot_room = $nd_booking_order->final_trip_price - $nd_booking_tot_services;
              $nd_booking_price_room = $nd_booking_tot_room/$nd_booking_order->guests;


              $nd_booking_result .= '
              <div class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">

                <table class="nd_booking_section">
                  <tr>
                    <td style="width:70%;">
                      '.__('Room','nd-booking').'
                    </td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_price_room.' '.nd_booking_get_currency().'</p></td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_order->guests.'</p></td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><p>'.$nd_booking_tot_room.' '.nd_booking_get_currency().'</p></td>
                  </tr>

                </table>

              </div>



              <div style="border-top:4px double #eee;" class="nd_booking_width_100_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left">

                <table class="nd_booking_section">
                  <tr>
                    <td style="width:70%;">
                      <h2>'.__('TOTAL','nd-booking').'</h2>
                    </td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><p></p></td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><p></p></td>
                    <td style="width:10%;" class="nd_booking_text_align_right"><h2>';

                    if ( $nd_booking_order->user_coupon != '' ) {
                      $nd_booking_result .= '**';
                    }

                    $nd_booking_result .= ' 
                    '.$nd_booking_order->final_trip_price.' '.nd_booking_get_currency().'</h2></td>
                  </tr>
                </table>

              </div>


              <div class="nd_booking_section">
                <p class="nd_booking_margin_0">* '.__('The services qnt filed is related to the single service settings ( Person/Room | Day/Trip )','nd-booking').'</p>';

                if ( $nd_booking_order->user_coupon != '' ) {
                  $nd_booking_result .= '<p class="nd_booking_margin_0">** '.__('One coupon was applied, the original price was :','nd-booking').' '.nd_booking_get_price_before_coupon($nd_booking_order->user_coupon,$nd_booking_order->final_trip_price).' '.nd_booking_get_currency().'</p>';
                }
                

              $nd_booking_result .= '
              </div>


              ';



          $nd_booking_result .= '
            </div>
          </div>';






        $nd_booking_result .= '
        </div>

        <div style="width:20%; border: 1px solid #e5e5e5; box-shadow: 0 1px 1px rgba(0,0,0,.04);" class="nd_booking_float_left nd_booking_background_color_ffffff nd_booking_box_sizing_border_box">
          
        
          <h4 class="nd_booking_margin_0 nd_booking_padding_10_20 nd_booking_border_bottom_1_solid_eee">'.__('Payment Options','nd-booking').'</h4>

          <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_20">

            <label class="nd_booking_section '.nd_booking_get_coupon_enable_class().' ">'.__('Coupon','nd-booking').'</label>
            <div class="nd_booking_section nd_booking_height_5 '.nd_booking_get_coupon_enable_class().' "></div>
            <input readonly name="nd_booking_order_user_coupon" class=" '.nd_booking_get_coupon_enable_class().' nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->user_coupon.'"> 

            <div class="nd_booking_section nd_booking_height_20 '.nd_booking_get_coupon_enable_class().' "></div>

            <label class="nd_booking_section">'.__('Transaction','nd-booking').'</label>
            <div class="nd_booking_section nd_booking_height_5"></div>
            <input readonly name="nd_booking_order_paypal_tx" class="nd_booking_section nd_booking_display_block regular-text" type="text" value="'.$nd_booking_order->paypal_tx.'"> 

            <div class="nd_booking_section nd_booking_height_20"></div>

            <label class="nd_booking_section">'.__('Payment Method','nd-booking').'</label>
            <div class="nd_booking_section nd_booking_height_5"></div>
            <input readonly name="nd_booking_order_action_type" class="nd_booking_section nd_booking_text_transform_capitalize nd_booking_display_block regular-text" type="text" value="'.$nd_booking_new_action_type.'">

            <div class="nd_booking_section nd_booking_height_20"></div>

            <label class="nd_booking_section">'.__('Payment Status','nd-booking').'</label>
            <div class="nd_booking_section nd_booking_height_5"></div>
            <select name="nd_booking_order_paypal_payment_status" class="nd_booking_section nd_booking_display_block">
              <option '; if ( $nd_booking_order->paypal_payment_status == 'Pending' ){ $nd_booking_result .= 'selected="selected"'; }  $nd_booking_result .= 'value="Pending">'.__('Pending','nd-booking').'</option>
              <option '; if ( $nd_booking_order->paypal_payment_status == 'Pending Payment' ){ $nd_booking_result .= 'selected="selected"'; }  $nd_booking_result .= 'value="Pending Payment">'.__('Pending Payment','nd-booking').'</option>
              <option '; if ( $nd_booking_order->paypal_payment_status == 'Completed' ){ $nd_booking_result .= 'selected="selected"'; }  $nd_booking_result .= 'value="Completed">'.__('Completed','nd-booking').'</option>
            </select>

          </div>


          <div class="nd_booking_background_color_f5f5f5 nd_booking_section nd_booking_box_sizing_border_box nd_booking_padding_20 nd_booking_border_top_1_solid_eee">
            <input class="button button-primary" type="submit" value="'.__('Update Record','nd-booking').'"> 
          </div>


        </div>


      </div>


      

    </form>
    ';

  }


} 