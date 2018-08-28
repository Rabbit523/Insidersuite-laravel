<?php


function nd_booking_registration_form( $nd_booking_username, $nd_booking_password, $nd_booking_email, $nd_booking_website, $nd_booking_first_name, $nd_booking_last_name, $nd_booking_nickname, $nd_booking_bio ) {
     
    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    

    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Username *','nd-booking').'</label>
      <input type="text" name="nd_booking_username" class=" nd_booking_section" value="' . ( isset( $_POST['nd_booking_username'] ) ? $nd_booking_username : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Password *','nd-booking').'</label>
      <input type="password" name="nd_booking_password" class=" nd_booking_section" value="' . ( isset( $_POST['nd_booking_password'] ) ? $nd_booking_password : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Email *','nd-booking').'</label>
      <input type="text" name="nd_booking_email" class=" nd_booking_section" value="' . ( isset( $_POST['nd_booking_email']) ? $nd_booking_email : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Website','nd-booking').'</label>
      <input type="text" name="nd_booking_website" class=" nd_booking_section" value="' . ( isset( $_POST['nd_booking_website']) ? $nd_booking_website : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('First Name','nd-booking').'</label>
      <input type="text" name="nd_booking_first_name" class="nd_booking_section" value="' . ( isset( $_POST['nd_booking_first_name']) ? $nd_booking_first_name : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Last Name','nd-booking').'</label>
      <input type="text" name="nd_booking_last_name" class="nd_booking_section" value="' . ( isset( $_POST['nd_booking_last_name']) ? $nd_booking_last_name : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('Nickname','nd-booking').'</label>
      <input type="text" name="nd_booking_nickname" class="nd_booking_section" value="' . ( isset( $_POST['nd_booking_nickname']) ? $nd_booking_nickname : null ) . '">
    </p>
    <p>
      <label class="nd_booking_section nd_booking_margin_top_20">'.__('About / Bio','nd-booking').'</label>
      <textarea class="nd_booking_section" name="nd_booking_bio">' . ( isset( $_POST['nd_booking_bio']) ? $nd_booking_bio : null ) . '</textarea>
    </p>
    <input id="nd_booking_registration_form_submit" class="nd_booking_section nd_booking_margin_top_20" type="submit" name="submit" value="'.__('REGISTER','nd-booking').'"/>
    </form>
    ';
}




function nd_booking_registration_validation( $nd_booking_username, $nd_booking_password, $nd_booking_email, $nd_booking_website, $nd_booking_first_name, $nd_booking_last_name, $nd_booking_nickname, $nd_booking_bio )  {


  global $nd_booking_reg_errors;
  $nd_booking_reg_errors = new WP_Error;

  if ( empty( $nd_booking_username ) || empty( $nd_booking_password ) || empty( $nd_booking_email ) ) {
      $nd_booking_reg_errors->add('field', 'Required form field is missing');
  }


  if ( 4 > strlen( $nd_booking_username ) ) {
      $nd_booking_reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
  }

  if ( username_exists( $nd_booking_username ) )
      $nd_booking_reg_errors->add('user_name', 'Sorry, that username already exists!');

    if ( ! validate_username( $nd_booking_username ) ) {
      $nd_booking_reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
  }

  if ( 5 > strlen( $nd_booking_password ) ) {
          $nd_booking_reg_errors->add( 'nd_booking_password', 'Password length must be greater than 5' );
      }

      if ( !is_email( $nd_booking_email ) ) {
      $nd_booking_reg_errors->add( 'email_invalid', 'Email is not valid' );
  }

  if ( email_exists( $nd_booking_email ) ) {
      $nd_booking_reg_errors->add( 'nd_booking_email', 'Email Already in use' );
  }

  if ( ! empty( $nd_booking_website ) ) {
      if ( ! filter_var( $nd_booking_website, FILTER_VALIDATE_URL ) ) {
          $nd_booking_reg_errors->add( 'nd_booking_website', 'Website is not a valid URL' );
      }
  }

  if ( is_wp_error( $nd_booking_reg_errors ) ) {
   
      foreach ( $nd_booking_reg_errors->get_error_messages() as $nd_booking_error ) {
       
          echo '<div class="nd_booking_margin_top_20">';
          echo '<strong class="nd_booking_text_decoration_underline">'.__('ERROR','nd-booking').'</strong> : ';
          echo $nd_booking_error;
          echo '</div>';
           
      }
   
  }

}


function nd_booking_complete_registration() {
    global $nd_booking_reg_errors, $nd_booking_username, $nd_booking_password, $nd_booking_email, $nd_booking_website, $nd_booking_first_name, $nd_booking_last_name, $nd_booking_nickname, $nd_booking_bio;
    if ( 1 > count( $nd_booking_reg_errors->get_error_messages() ) ) {
        $nd_booking_userdata = array(
        'user_login'    =>   $nd_booking_username,
        'user_email'    =>   $nd_booking_email,
        'user_pass'     =>   $nd_booking_password,
        'user_url'      =>   $nd_booking_website,
        'first_name'    =>   $nd_booking_first_name,
        'last_name'     =>   $nd_booking_last_name,
        'nickname'      =>   $nd_booking_nickname,
        'description'   =>   $nd_booking_bio,
        );
        $nd_booking_user = wp_insert_user( $nd_booking_userdata );
        echo '<div class="nd_booking_section nd_booking_color_white_important nd_booking_bg_red nd_booking_padding_20 nd_booking_margin_top_20 nd_booking_box_sizing_border_box nd_booking_border_radius_3"><span class="nd_options_first_font">'.__('REGISTRATION COMPLETED','nd-booking').'</span> : '.__('Please for make the login using the form on the left.','nd-booking').'</div>';   
    }
}



function nd_booking_custom_registration_function() {
    if ( isset($_POST['submit'] ) ) {


        nd_booking_registration_validation(
        $_POST['nd_booking_username'],
        $_POST['nd_booking_password'],
        $_POST['nd_booking_email'],
        $_POST['nd_booking_website'],
        $_POST['nd_booking_first_name'],
        $_POST['nd_booking_last_name'],
        $_POST['nd_booking_nickname'],
        $_POST['nd_booking_bio']
        );
         
        // sanitize user form input
        global $nd_booking_username, $nd_booking_password, $nd_booking_email, $nd_booking_website, $nd_booking_first_name, $nd_booking_last_name, $nd_booking_nickname, $nd_booking_bio;
        $nd_booking_username   =   sanitize_user( $_POST['nd_booking_username'] );
        $nd_booking_password   =   esc_attr( $_POST['nd_booking_password'] );
        $nd_booking_email      =   sanitize_email( $_POST['nd_booking_email'] );
        $nd_booking_website    =   esc_url( $_POST['nd_booking_website'] );
        $nd_booking_first_name =   sanitize_text_field( $_POST['nd_booking_first_name'] );
        $nd_booking_last_name  =   sanitize_text_field( $_POST['nd_booking_last_name'] );
        $nd_booking_nickname   =   sanitize_text_field( $_POST['nd_booking_nickname'] );
        $nd_booking_bio        =   esc_textarea( $_POST['nd_booking_bio'] );
 
        // call @function complete_registration to create the user
        // only when no WP_error is found
        nd_booking_complete_registration(
        $nd_booking_username,
        $nd_booking_password,
        $nd_booking_email,
        $nd_booking_website,
        $nd_booking_first_name,
        $nd_booking_last_name,
        $nd_booking_nickname,
        $nd_booking_bio
        );
    }


    if ( isset( $nd_booking_username ) ) {

    }else{

      $nd_booking_username = ''; $nd_booking_password = ''; $nd_booking_email = ''; $nd_booking_website = '';
      $nd_booking_first_name = ''; $nd_booking_last_name = ''; $nd_booking_nickname = ''; $nd_booking_bio = '';

    }
 
    

    nd_booking_registration_form(
        $nd_booking_username,
        $nd_booking_password,
        $nd_booking_email,
        $nd_booking_website,
        $nd_booking_first_name,
        $nd_booking_last_name,
        $nd_booking_nickname,
        $nd_booking_bio
        );
}





add_shortcode( 'nd_booking_register', 'nd_booking_shortcode_register' );
function nd_booking_shortcode_register() {

    ob_start();

    //call function
    nd_booking_custom_registration_function();
    return ob_get_clean();

}



