<?php    

$nd_booking_result = '';
$nd_booking_order_id = $_POST['delete_order_id'];

if ( isset($_POST['nd_booking_delete_order_id']) ) {

  global $wpdb;
  $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';

  $nd_booking_delete_record = $wpdb->delete( 
        
    $nd_booking_table_name, 
    array( 'ID' => $_POST['nd_booking_delete_order_id'] )

  );


  if ($nd_booking_delete_record){

    $nd_booking_result .= '

      <style>
        .update-nag { display:none; } 
      </style>


      <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible nd_booking_margin_left_0_important nd_booking_margin_bottom_20_important"> 
        <p>
          <strong>'.__('Deleted','nd-booking').'</strong>
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


}else{

  $nd_booking_result .= '

    <style>
        .update-nag { display:none; } 
      </style>

    <h1>'.__('Delete Order','nd-booking').' : '.$nd_booking_order_id.'</h1>
    <p>'.__('Please confirm delete by clicking on the button below','nd-booking').'</p>
    <form method="POST">
      <input type="hidden" name="nd_booking_delete_order_id" value="'.$nd_booking_order_id.'">
      <input class="button button-primary" type="submit" value="'.__('Delete','nd-booking').'">
    </form>
  ';

}

