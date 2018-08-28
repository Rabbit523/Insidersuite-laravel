<?php

//START  nd_booking_login
function nd_booking_shortcode_login() {

  //recover datas from plugin settings
  $nd_booking_account_page = get_option('nd_booking_account_page');
  $nd_booking_account_page_url = get_permalink($nd_booking_account_page);

  $args = array(
      'echo'           => false,
      'redirect'       => $nd_booking_account_page_url, 
      'form_id'        => 'nd_booking_shortcode_account_login_form',
      'label_username' => __( 'Username','nd-booking' ),
      'label_password' => __( 'Password','nd-booking' ),
      'label_remember' => __( 'Remember Me','nd-booking' ),
      'label_log_in'   => __( 'LOG IN','nd-booking' ),
      'id_username'    => 'nd_booking_login_form_user',
      'id_password'    => 'nd_booking_login_form_password',
      'id_remember'    => 'nd_booking_login_form_remember',
      'id_submit'      => 'nd_booking_login_form_submit',
      'remember'       => true,
      'value_username' => NULL,
      'value_remember' => false
  );


  return wp_login_form( $args );


}
add_shortcode('nd_booking_login', 'nd_booking_shortcode_login');
//END nd_booking_login