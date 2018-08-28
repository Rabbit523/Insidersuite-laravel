<?php



include 'include/account/nd_booking_login.php';
include 'include/account/nd_booking_register.php';


//START  nd_booking_account
function nd_booking_shortcode_account() {


	//check if the user is lkogged
	if (is_user_logged_in() == 1){

		$nd_booking_current_user = wp_get_current_user();

		wp_enqueue_script('jquery-ui-tabs');

		?>



		<div class="nd_booking_width_33_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_15 nd_booking_width_100_percentage_responsive">

	        <div class="nd_booking_section nd_booking_box_sizing_border_box">
	                    
                <!--start preview-->
                <div class="nd_booking_section ">
            
                    <!--image-->
                    <div class="nd_booking_section nd_booking_position_relative">


                    	<?php

                    		$nd_booking_account_avatar_url_args = array(
								'size'   => 600
							);
							$nd_booking_account_avatar_url = get_avatar_url($nd_booking_current_user->user_email, $nd_booking_account_avatar_url_args);

                    	?>
                        
                        <img alt="" class="nd_booking_section" src="<?php echo $nd_booking_account_avatar_url; ?>">

                        <div class="nd_booking_bg_greydark_alpha_gradient nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box">
                            <div class="nd_booking_position_absolute nd_booking_bottom_20">
                                <h2 class="nd_booking_color_white_important">@<?php echo $nd_booking_current_user->user_login; ?></h2>
                            </div>

                        </div>

                    </div>
                    <!--image-->


                    <div class="nd_booking_section nd_booking_box_sizing_border_box">
                    
                        <div class="nd_booking_section nd_booking_bg_greydark">
                            <table class="nd_booking_section ">
                                <tbody>
                                   
                                   <tr class="">
                                        <td class="nd_booking_padding_30">  
                                            <h5 class="nd_booking_font_size_13 nd_booking_text_transform_uppercase nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2"><?php _e('Name','nd-booking'); ?></h5>
                                            <div class="nd_booking_section nd_booking_height_5"></div>
                                            <p class="nd_booking_color_white_important nd_booking_line_height_16"><?php echo $nd_booking_current_user->user_firstname; ?></p>
                                        </td>
                                        <td class="nd_booking_padding_30">
                                            <h5 class="nd_booking_font_size_13 nd_booking_text_transform_uppercase nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2"><?php _e('Last Name','nd-booking'); ?></h5>
                                            <div class="nd_booking_section nd_booking_height_5"></div>
                                            <p class="nd_booking_color_white_important nd_booking_line_height_16"><?php echo $nd_booking_current_user->user_lastname; ?></p>    
                                        </td>
                                    </tr>

                                </tbody>
                            </table> 
                        </div>

                        <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_padding_20 nd_booking_box_sizing_border_box">

                            <table class="nd_booking_section">
                                <tbody>
                                   
                                   <tr class="">
                                        <td class="nd_booking_padding_10">  

                                            <div class="nd_booking_display_table nd_booking_float_left">
                    
                                                <div class="nd_booking_display_table_cell nd_booking_vertical_align_middle">
                                                    <img alt="" class="nd_booking_margin_right_20" width="25" src="<?php echo plugins_url() ?>/nd-booking/assets/img/icons/icon-email-grey.svg">
                                                </div>

                                                <div class="nd_booking_display_table_cell nd_booking_vertical_align_middle">
                                                    <h5 class="nd_booking_font_size_13 nd_booking_text_transform_uppercase nd_options_second_font nd_booking_letter_spacing_2"><?php _e('Email','nd-booking'); ?></h5>
                                                    <div class="nd_booking_section nd_booking_height_5"></div>
                                                    <p class=""><?php echo $nd_booking_current_user->user_email; ?></p>
                                                </div>

                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="nd_booking_padding_10">  

                                            <div class="nd_booking_display_table nd_booking_float_left">
                    
                                                <div class="nd_booking_display_table_cell nd_booking_vertical_align_middle">
                                                    <img alt="" class="nd_booking_margin_right_20" width="25" src="<?php echo plugins_url() ?>/nd-booking/assets/img/icons/icon-link-grey.svg">
                                                </div>

                                                <div class="nd_booking_display_table_cell nd_booking_vertical_align_middle">
                                                    <h5 class="nd_booking_font_size_13 nd_booking_text_transform_uppercase nd_options_second_font nd_booking_letter_spacing_2"><?php _e('Url','nd-booking'); ?></h5>
                                                    <div class="nd_booking_section nd_booking_height_5"></div>
                                                    <p class=""><?php echo $nd_booking_current_user->user_url; ?></p>
                                                </div>

                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="nd_booking_padding_10">  
                                            <h5 class="nd_booking_font_size_13 nd_booking_text_transform_uppercase nd_options_second_font nd_booking_letter_spacing_2"><?php _e('About Me','nd-booking'); ?></h5>
                                            <div class="nd_booking_section nd_booking_height_5"></div>
                                            <p class="nd_booking_line_height_25"><?php echo $nd_booking_current_user->description; ?></p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table> 
                        </div>
                        

                    </div>

                    <div class="nd_booking_section nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_bg_white ">
                        
                        <div class="nd_booking_width_50_percentage nd_booking_width_100_percentage_all_iphone nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_float_left nd_booking_text_align_center">
                            <a class="nd_booking_display_inline_block nd_booking_color_white_important nd_booking_bg_yellow nd_booking_box_sizing_border_box nd_booking_width_100_percentage nd_options_second_font nd_booking_padding_8  nd_booking_font_size_13" href="<?php echo get_edit_user_link(); ?>"><?php _e('EDIT PROFILE','nd-booking'); ?></a>
                        </div>  

                        <div class="nd_booking_width_50_percentage nd_booking_width_100_percentage_all_iphone nd_booking_padding_10 nd_booking_box_sizing_border_box nd_booking_float_left nd_booking_text_align_center">
                            <a class="nd_booking_display_inline_block nd_booking_color_white_important nd_booking_bg_red nd_booking_box_sizing_border_box nd_booking_width_100_percentage nd_options_second_font nd_booking_padding_8  nd_booking_font_size_13" href="<?php echo wp_logout_url( get_permalink() ); ?>"><?php _e('LOGOUT','nd-booking'); ?></a>
                        </div> 
                        
                    </div>



        		</div>
                <!--start preview-->

	        </div>

	    </div>






	    <div class="nd_booking_width_66_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_15 nd_booking_width_100_percentage_responsive">
	    	

	    	<!--START Tabs-->
			<div class="nd_booking_tabs nd_booking_section">

				<ul class="nd_booking_list_style_none nd_booking_margin_0 nd_booking_padding_0 nd_booking_section ">

					<?php 
					//custom hook
	    			do_action("nd_booking_shortcode_account_tab_list"); 
		    		?>	
				</ul>
			  
			  	<?php 
				//custom hook
				do_action("nd_booking_shortcode_account_tab_list_content"); 
		    	?>
			    
	    	</div>
	    	<!--END tabs-->



	    	<script type="text/javascript">
			<!--//--><![CDATA[//><!--
				jQuery(document).ready(function($) {
					$('.nd_booking_tabs').tabs();
				});
			//--><!]]>
			</script>


	    </div>




		<?php

		//custom hook
    	do_action("nd_booking_end_shortcode_account_on_user_login");

    	?>



    	<?php


	}else{

        $nd_booking_account_page_result = '';

        $nd_booking_account_page_result .= '

            <div class="nd_booking_section">
              <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_15 nd_booking_width_100_percentage_responsive">
                
                <div class="nd_booking_section  nd_booking_border_1_solid_grey nd_booking_padding_20 nd_booking_box_sizing_border_box">
                    
                    <h6 class="nd_options_second_font nd_booking_bg_red nd_booking_padding_5_10 nd_booking_color_white_important nd_booking_display_inline_block">'.__('ALREADY A MEMBER','nd-booking').'</h6>
                    <div class="nd_booking_section nd_booking_height_10"></div>
                    <h3>'.__('Log In','nd-booking').'</h3>

                    '.do_shortcode("[nd_booking_login]").' 
                </div>

                
              </div>

        ';

        //START check if registration is enable
        if ( get_option( 'users_can_register' ) == 1 ) {

            $nd_booking_account_page_result .='

            <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_15 nd_booking_width_100_percentage_responsive">

                <div class="nd_booking_section nd_booking_bg_white  nd_booking_border_1_solid_grey nd_booking_padding_20 nd_booking_box_sizing_border_box">
                
                    <h6 class="nd_options_second_font nd_booking_bg_red nd_booking_padding_5_10  nd_booking_color_white_important nd_booking_display_inline_block">'.__('I DO NOT HAVE AN ACCOUNT','nd-booking').'</h6>
                    <div class="nd_booking_section nd_booking_height_10"></div>
                    <h3>'.__('Register','nd-booking').'</h3>

                    '.do_shortcode("[nd_booking_register]").'

                </div>
                
              </div>';

        }else{

            $nd_booking_account_page_result .='

            <div class="nd_booking_width_50_percentage nd_booking_float_left nd_booking_box_sizing_border_box nd_booking_padding_15 nd_booking_width_100_percentage_responsive">

                <div class="nd_booking_opacity_04 nd_booking_section nd_booking_bg_white  nd_booking_border_1_solid_grey nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_position_relative">
                
                    <div class="nd_booking_section nd_booking_position_absolute nd_booking_cursor_not_allowed nd_booking_height_100_percentage nd_booking_left_0 nd_booking_top_0"></div>

                    <h6 class="nd_options_second_font nd_booking_bg_red nd_booking_padding_5_10  nd_booking_color_white_important nd_booking_display_inline_block">'.__('I DO NOT HAVE AN ACCOUNT','nd-booking').'</h6>
                    <div class="nd_booking_section nd_booking_height_10"></div>
                    <h3>'.__('Registration Disabled','nd-booking').'</h3>

                    
                    <form action="#" method="post">
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Username','nd-booking').' *</label>
                          <input readonly type="text" name="nd_booking_username" class=" nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Password','nd-booking').' *</label>
                          <input readonly type="password" name="nd_booking_password" class=" nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Email','nd-booking').' *</label>
                          <input readonly type="text" name="nd_booking_email" class=" nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Website','nd-booking').'</label>
                          <input readonly type="text" name="nd_booking_website" class=" nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('First Name','nd-booking').'</label>
                          <input readonly type="text" name="nd_booking_first_name" class="nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Last Name','nd-booking').'</label>
                          <input readonly type="text" name="nd_booking_last_name" class="nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('Nickname','nd-booking').'</label>
                          <input readonly type="text" name="nd_booking_nickname" class="nd_booking_section" value="">
                        </p>
                        <p>
                          <label class="nd_booking_section nd_booking_margin_top_20">'.__('About / Bio','nd-booking').'</label>
                          <textarea readonly class="nd_booking_section" name="nd_booking_bio"></textarea>
                        </p>
                        <input id="nd_booking_registration_form_submit" disabled class="nd_booking_section nd_booking_margin_top_20" type="submit" name="submit" value="'.__('REGISTRATION DISABLED','nd-booking').'">
                    </form>
    

                </div>


              </div>';

        }
        //END check if registration is enable


        $nd_booking_account_page_result .='</div>';


        echo $nd_booking_account_page_result;
		

	}
	//end if


}
add_shortcode('nd_booking_account', 'nd_booking_shortcode_account');
//END nd_booking_account







//add attendees tab list in the custom hook
add_action('nd_booking_shortcode_account_tab_list','nd_booking_account_add_reservations_tab_list');
function nd_booking_account_add_reservations_tab_list(){

  $nd_booking_offline_reservations_tab = '';


  $nd_booking_offline_reservations_tab .= '
    <li class="nd_booking_display_inline_block nd_booking_margin_right_40">
    <h3>
      <a class="nd_booking_outline_0 nd_booking_padding_10_0 nd_booking_display_inline_block nd_options_first_font nd_options_color_greydark" href="#nd_booking_offline_reservations_tab">
        '.__('My Reservations','nd-booking').'
      </a>
    </h3>
  </li>
    ';

    echo $nd_booking_offline_reservations_tab;

}


//Add reservations on account page
function nd_booking_show_reservations(){

  //declare variable
  $nd_booking_result = '';

  //get current user id
  $nd_booking_current_user = wp_get_current_user();
  $nd_booking_current_user_id = $nd_booking_current_user->ID;

  global $wpdb;

  $nd_booking_table_name = $wpdb->prefix . 'nd_booking_booking';

  //START select for items
  $nd_booking_reservation_ids = $wpdb->get_results( "SELECT * FROM $nd_booking_table_name WHERE id_user = $nd_booking_current_user_id");

  //title section
  $nd_booking_result .= '
    <div class="nd_booking_section" id="nd_booking_offline_reservations_tab">
      <div class="nd_booking_section nd_booking_height_10"></div>
  ';

  //no results
  if ( empty($nd_booking_reservation_ids) ) { 
    $nd_booking_result .= '<div class="nd_booking_section nd_booking_height_10"></div><p>'.__('You do not have any reservation','nd-booking').'</p>'; 
  }else{


    $nd_booking_result .= '
      
      <div class="nd_booking_section nd_booking_box_sizing_border_box nd_booking_overflow_hidden nd_booking_overflow_x_auto nd_booking_cursor_move_responsive">
      <table>
        <thead>
          <tr class="nd_booking_border_bottom_1_solid_grey">
              <td class="nd_booking_padding_20 nd_booking_width_25_percentage nd_booking_display_none_all_iphone">
                  <h6 class="nd_booking_text_transform_uppercase nd_options_second_font">'.__('ROOM','nd-booking').'</h6>    
              </td>
              <td class="nd_booking_padding_20 nd_booking_width_45_percentage ">
                      
              </td>
              <td class="nd_booking_padding_20 nd_booking_width_20_percentage nd_booking_display_none_all_iphone">
                  <h6 class="nd_booking_text_transform_uppercase nd_options_second_font">'.__('VALUE','nd-booking').'</h6>    
              </td>
              <td class="nd_booking_padding_20 nd_booking_width_10_percentage">
                    
              </td>
          </tr>
      </thead>
      <tbody>
    ';

    foreach ( $nd_booking_reservation_ids as $nd_booking_reservation_id ) 
    {
      $nd_booking_result .= '

        <tr class="nd_booking_border_bottom_1_solid_grey">
            <td class="nd_booking_padding_20 nd_booking_display_none_all_iphone">  
                <img alt="" class="nd_booking_section" src="'.nd_booking_get_post_img_src($nd_booking_reservation_id->id_post).'"> 
            </td>
            <td class="nd_booking_padding_20"> 
                <div class="nd_booking_section nd_booking_height_10"></div> 
                <h4 class="">'.get_the_title($nd_booking_reservation_id->id_post).'</h4> 
                <div class="nd_booking_section nd_booking_height_10 nd_booking_display_none_all_iphone"></div>
                <p class="nd_booking_display_none_all_iphone">'.$nd_booking_reservation_id->date_from.' - '.$nd_booking_reservation_id->date_to.'</p>
                <p class="nd_booking_display_none_all_iphone">'.__('Transaction : ','nd-booking').''.$nd_booking_reservation_id->paypal_tx.'</p>
            </td>
            <td class="nd_booking_padding_20 nd_booking_display_none_all_iphone">
                <p class="nd_options_color_greydark">'.nd_booking_get_currency().' '.$nd_booking_reservation_id->final_trip_price.'</p>    
            </td>
            <td class="nd_booking_padding_20 nd_booking_text_align_right">'; 

                if ( $nd_booking_reservation_id->paypal_payment_status == 'Completed' ) { 
                    $nd_booking_order_btn_bg_color = 'nd_booking_bg_greydark';
                }else{
                    $nd_booking_order_btn_bg_color = 'nd_booking_bg_red';   
                }

            //translations payment status
            if ( $nd_booking_reservation_id->paypal_payment_status == 'Pending' ) {
                $nd_booking_paypal_payment_status_lang = __('Pending','nd-booking');
            }elseif ( $nd_booking_reservation_id->paypal_payment_status == 'Pending Payment' ){
                $nd_booking_paypal_payment_status_lang = __('Pending Payment','nd-booking');
            }else{
                $nd_booking_paypal_payment_status_lang = __('Completed','nd-booking');
            }

            $nd_booking_result .= '

                <form action="'.nd_booking_order_page().'" method="POST">

                    <input type="hidden" name="nd_booking_order_id" value="'.$nd_booking_reservation_id->id.'">
                    <input type="hidden" name="nd_booking_order_room_id" value="'.$nd_booking_reservation_id->id_post.'">
                    <input type="hidden" name="nd_booking_order_user_id" value="'.$nd_booking_current_user_id.'">

                    <input class=" '.$nd_booking_order_btn_bg_color.' nd_booking_text_transform_uppercase nd_options_second_font_important nd_booking_font_weight_lighter nd_booking_letter_spacing_2 nd_booking_padding_8  nd_booking_font_size_13 " type="submit" value="'.$nd_booking_paypal_payment_status_lang.'">

                </form>

            </td>
        </tr>

      ';
    }
    $nd_booking_result .= '</tbody></table></div>';

  }
  //END select for items

  $nd_booking_result .= '</div>';

  echo $nd_booking_result;
  

}
//END
add_action('nd_booking_shortcode_account_tab_list_content','nd_booking_show_reservations');



