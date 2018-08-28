<?php


$nd_booking_message_enable = get_option('nd_booking_message_enable');
if ( $nd_booking_message_enable == 1 and get_option('nicdark_theme_author') == 1 ) {


	//create settings
	add_action("nd_booking_add_settings_group","nd_booking_add_email_template_setting");
	function nd_booking_add_email_template_setting(){
		register_setting( 'nd_booking_settings_group', 'nd_booking_email_template' );
	}

	//add settings in plugin option
	add_action("nd_booking_add_setting_on_main_page","nd_booking_add_email_template_field");
	function nd_booking_add_email_template_field(){
		

		$nd_booking_email_template_field = '

			<!--START-->
			<div class="nd_booking_section">
			  <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
			    <h2 class="nd_booking_section nd_booking_margin_0">'.__('Email Notificatons','nd-booking').'</h2>
			    <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10">'.__('Set your email template','nd-booking').'</p>
			  </div>
			  <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
			    
			    <select class="nd_booking_width_100_percentage" name="nd_booking_email_template">';


			      $nd_booking_currencies = array(__('Default Template','nd-booking'),__('Template 1','nd-booking'));
			      
			      foreach ($nd_booking_currencies as $nd_booking_currency) :
			          
			          $nd_booking_email_template_field .= '
			          <option '; 

			         
			          if( get_option('nd_booking_email_template') == $nd_booking_currency ) {  $nd_booking_email_template_field .= 'selected="selected"'; } 
			          
			          $nd_booking_email_template_field .= '
			          value="'.$nd_booking_currency.'">'.$nd_booking_currency.'
			          </option>';

			      endforeach;
			    
			    $nd_booking_email_template_field .= '
			    </select>
			    <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20">'.__('Select your email template that you want to use for reservation notifactions','nd-booking').'</p>

			  </div>
			</div>
			<!--END-->
			<div class="nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>';


			echo $nd_booking_email_template_field;
	}




	//nd_booking_send_message
	function nd_booking_send_message($nd_booking_id_post,$nd_booking_title_post,$nd_booking_date,$nd_booking_date_from,$nd_booking_date_to,$nd_booking_guests,$nd_booking_final_trip_price,$nd_booking_extra_services,$nd_booking_id_user,$nd_booking_user_first_name,$nd_booking_user_last_name,$nd_booking_paypal_email,$nd_booking_user_phone,$nd_booking_user_address,$nd_booking_user_city,$nd_booking_user_country,$nd_booking_user_message,$nd_booking_user_arrival,$nd_booking_user_coupon,$nd_booking_paypal_payment_status,$nd_booking_paypal_currency,$nd_booking_paypal_tx,$nd_booking_action_type){


		//services
		$nd_booking_extra_services_result = '';
		if ( $nd_booking_extra_services == '' ) {

	        $nd_booking_extra_services_result .= '<p>'.__('You have not selected any additional services','nd-booking').'</p>';

	    }else{

	        $nd_booking_services_array = explode(',', $nd_booking_extra_services );
	        
	        for ($nd_booking_services_array_i = 0; $nd_booking_services_array_i < count($nd_booking_services_array)-1; $nd_booking_services_array_i++) {
	                
	        	$nd_booking_service_array = explode('[', $nd_booking_services_array[$nd_booking_services_array_i] );

	        	$nd_booking_service_id  = $nd_booking_service_array[0];
				$nd_booking_service_title  = get_the_title($nd_booking_service_id); 
				$nd_booking_service_price = str_replace(']','', $nd_booking_service_array[1]);      	

	            $nd_booking_extra_services_result .= '<p>'.$nd_booking_service_title.' : '.$nd_booking_service_price.' '.$nd_booking_paypal_currency.'</p>';    

	        }


	    }




	    //services for template 1
	    $nd_booking_extra_services_1 = $nd_booking_extra_services;
		$nd_booking_extra_services_result_1 = '';
		if ( $nd_booking_extra_services_1 == '' ) {

	        $nd_booking_extra_services_result_1 .= '<p>'.__('You have not selected any additional services','nd-booking').'</p>';

	    }else{

	        $nd_booking_services_array = explode(',', $nd_booking_extra_services_1 );
	        
	        for ($nd_booking_services_array_i = 0; $nd_booking_services_array_i < count($nd_booking_services_array)-1; $nd_booking_services_array_i++) {
	                
	        	$nd_booking_service_array = explode('[', $nd_booking_services_array[$nd_booking_services_array_i] );

	        	$nd_booking_service_id  = $nd_booking_service_array[0];
				$nd_booking_service_title  = get_the_title($nd_booking_service_id); 
				$nd_booking_service_price = str_replace(']','', $nd_booking_service_array[1]);      	

	            $nd_booking_extra_services_result_1 .= '
	            <div style="float:left; width:100%; height:7px;"></div>
	            <p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.$nd_booking_service_title.' : '.$nd_booking_service_price.' '.$nd_booking_paypal_currency.'</p>
	            <div style="float:left; width:100%; height:7px;"></div>
	            ';    

	        }


	    }


	   
	    //get logo
		$nd_booking_customizer_logo = get_option( 'nicdark_customizer_logo_img' );
		if ( $nd_booking_customizer_logo == '' ) { 
		 	$nd_booking_email_logo = '';  
		}else{
		    $nd_booking_customizer_logo_src = wp_get_attachment_url($nd_booking_customizer_logo);
		    $nd_booking_email_logo = '<img src="'.$nd_booking_customizer_logo_src.'">';  
		}


	    //START MAIL TO ADMIN
		// Multiple recipients $to = 'email1@gmail.com, email2@gmail.com';
		$to = get_option('admin_email');
		$nd_booking_email = get_option('admin_email');
		$nd_booking_name = get_bloginfo( 'name' );

		// Subject
		$subject = __('New Reservation','nd-booking');

		
		// Message Default Template
		$message = '
		<html>
		<head>
		  <title>'.__('New Reservation','nd-booking').'</title>
		</head>
		<body>
		  <p>'.__('Hi, you received a new reservation on your site, here all details','nd-booking').' :</p>
		  
		  <p><strong>'.__('MAIN INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Room','nd-booking').' : '.$nd_booking_title_post.'</p>
		  <p>'.__('Date From','nd-booking').' : '.$nd_booking_date_from.'</p>
		  <p>'.__('Date To','nd-booking').' : '.$nd_booking_date_to.'</p>
		  <p>'.__('Guests','nd-booking').' : '.$nd_booking_guests.'</p><br/>

		  <p><strong>'.__('TOTAL PRICE','nd-booking').' :</strong></p>
		  <p>'.__('Price','nd-booking').' : '.$nd_booking_final_trip_price.' '.$nd_booking_paypal_currency.'</p><br/>

		  <p><strong>'.__('EXTRA SERVICES ( included in the price )','nd-booking').' :</strong></p>
		  '.$nd_booking_extra_services_result.'<br/>
		  
		  <p><strong>'.__('USER INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Name','nd-booking').' : '.$nd_booking_user_first_name.'</p>
		  <p>'.__('Surname','nd-booking').' : '.$nd_booking_user_last_name.'</p>
		  <p>'.__('Phone','nd-booking').' : '.$nd_booking_user_phone.'</p>
		  <p>'.__('Address','nd-booking').' : '.$nd_booking_user_address.'</p>
		  <p>'.__('City','nd-booking').' : '.$nd_booking_user_city.'</p>
		  <p>'.__('Country','nd-booking').' : '.$nd_booking_user_country.'</p>
		  <p>'.__('Email','nd-booking').' : '.$nd_booking_paypal_email.'</p>
		  <p>'.__('Message','nd-booking').' : '.$nd_booking_user_message.'</p><br/>

		  <p><strong>'.__('PAYMENT INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Payment Type','nd-booking').' : '.$nd_booking_action_type.'</p>
		  <p>'.__('Payment Status','nd-booking').' : '.$nd_booking_paypal_payment_status.'</p>
		  <p>'.__('Payment ID','nd-booking').' : '.$nd_booking_paypal_tx.'</p>

		</body>
		</html>
		';
		//END default template




		// Message Template 1
		$message_1 = '
		<html>
		<head>
		  <title>'.__('New Reservation','nd-booking').'</title>

			<style>
			h1,h2,h3,h4,h5,h6,p,a{ font-family:"Open Sans"; }
			</style>

		</head>
		<body>
		  

			<div style="width:500px; margin:auto;">

				<div style="text-align:center; float:left; width:100%; ">
					'.$nd_booking_email_logo.'
				</div>

				<div style="text-align:center; float:left; width:100%; ">
					<img style="float:left; width:100%; height:auto;" src="'.nd_booking_get_post_img_src($nd_booking_id_post).'">
				</div>

				<!--START SECTION-->
				<div style="float:left; width:100%; ">
					
					<div style="float:left; width:100%; height:40px;"></div>
					<h2 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('Main Informations','nd-booking').' :</h2>
					<div style="float:left; width:100%; height:20px;"></div>
					<div style="float:left; width:50%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Room','nd-booking').' : '.$nd_booking_title_post.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Guests','nd-booking').' : '.$nd_booking_guests.'</p>
					</div>

					<div style="float:left; width:50%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Date From','nd-booking').' : '.$nd_booking_date_from.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Date To','nd-booking').' : '.$nd_booking_date_to.'</p>
					</div>
					
				</div>
				<!--START SECTION-->




				<!--START SECTION-->
				<div style="float:left; width:100%; ">
					
					<div style="float:left; width:100%; height:40px;"></div>
					<h2 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('Total Price','nd-booking').' :</h2>
					<div style="float:left; width:100%; height:20px;"></div>
					<div style="float:left; width:100%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Price','nd-booking').' : '.$nd_booking_final_trip_price.' '.$nd_booking_paypal_currency.'</p>
					</div>
					
				</div>
				<!--START SECTION-->



				<!--START SECTION-->
				<div style="float:left; width:100%; ">
					
					<div style="float:left; width:100%; height:40px;"></div>
					<h2 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('Extra Services','nd-booking').' :</h2>
					<div style="float:left; width:100%; height:5px;"></div>
					<h4 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('Included in the price','nd-booking').'</h4>
					<div style="float:left; width:100%; height:20px;"></div>
					<div style="float:left; width:100%; background-color:#f9f9f9; padding:13px 20px; box-sizing:border-box;">
						'.$nd_booking_extra_services_result_1.'
					</div>
					
				</div>
				<!--START SECTION-->



				<!--START SECTION-->
				<div style="float:left; width:100%; ">
					
					<div style="float:left; width:100%; height:40px;"></div>
					<h2 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('User Informations','nd-booking').' :</h2>
					<div style="float:left; width:100%; height:20px;"></div>
					<div style="float:left; width:50%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Name','nd-booking').' : '.$nd_booking_user_first_name.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Surname','nd-booking').' : '.$nd_booking_user_last_name.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Phone','nd-booking').' : '.$nd_booking_user_phone.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Address','nd-booking').' : '.$nd_booking_user_address.'</p>
					</div>

					<div style="float:left; width:50%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('City','nd-booking').' : '.$nd_booking_user_city.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Country','nd-booking').' : '.$nd_booking_user_country.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Email','nd-booking').' : '.$nd_booking_paypal_email.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Message','nd-booking').' : '.$nd_booking_user_message.'</p>
					</div>
					
				</div>
				<!--START SECTION-->


				<!--START SECTION-->
				<div style="float:left; width:100%; ">
					
					<div style="float:left; width:100%; height:40px;"></div>
					<h2 style="float:left; width:100%; text-align:center; color:#727475; font-weight:normal; margin:0px; padding:0px;">'.__('Payment Informations','nd-booking').' :</h2>
					<div style="float:left; width:100%; height:20px;"></div>
					<div style="float:left; width:100%; background-color:#f9f9f9; padding:20px; box-sizing:border-box;">
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Payment Type','nd-booking').' : '.$nd_booking_action_type.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Payment Status','nd-booking').' : '.$nd_booking_paypal_payment_status.'</p>
						<div style="float:left; width:100%; height:10px;"></div>
						<div style="float:left; width:100%; height:1px; background-color:#f1f1f1;"></div>
						<div style="float:left; width:100%; height:10px;"></div>
						<p style="margin:0px; padding:0px; float:left; width:100%; color:#878787;">'.__('Payment ID','nd-booking').' : '.$nd_booking_paypal_tx.'</p>
					</div>
					
				</div>
				<!--START SECTION-->
				
			</div>
		  
		</body>
		</html>
		';
		//END template 1


		// To send HTML mail, the Content-type header must be set
		$headers = array('Content-Type: text/html; charset=UTF-8','From: '.$nd_booking_name.' <'.$nd_booking_email.'>');


		//decide email template
	    $nd_booking_email_template = get_option('nd_booking_email_template');
	    if ( $nd_booking_email_template == __('Template 1','nd-booking') ) {
	    	$nd_booking_template = $message_1;
	    }else{
	    	$nd_booking_template = $message;
	    }
		

		// Mail it
		wp_mail( $to, $subject, $nd_booking_template, $headers );





		//START MAIL TO CUSTOMER
		// Multiple recipients $to = 'email1@gmail.com, email2@gmail.com';
		$to = $nd_booking_paypal_email;
		$nd_booking_email = get_option('admin_email');
		$nd_booking_name = get_bloginfo( 'name' );

		// Subject
		$subject = __('Your Reservation','nd-booking');

		// Message
		$message = '
		<html>
		<head>
		  <title>'.__('Your Reservation','nd-booking').'</title>
		</head>
		<body>
		  <p>'.__('Hi, below your reservation details','nd-booking').' :</p>
		  
		  <p><strong>'.__('MAIN INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Room','nd-booking').' : '.$nd_booking_title_post.'</p>
		  <p>'.__('Date From','nd-booking').' : '.$nd_booking_date_from.'</p>
		  <p>'.__('Date To','nd-booking').' : '.$nd_booking_date_to.'</p>
		  <p>'.__('Guests','nd-booking').' : '.$nd_booking_guests.'</p><br/>

		  <p><strong>'.__('TOTAL PRICE','nd-booking').' :</strong></p>
		  <p>'.__('Price','nd-booking').' : '.$nd_booking_final_trip_price.' '.$nd_booking_paypal_currency.'</p><br/>

		  <p><strong>'.__('EXTRA SERVICES ( included in the price )','nd-booking').' :</strong></p>
		  '.$nd_booking_extra_services_result.'</p><br/>
		  
		  <p><strong>'.__('YOUR INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Name','nd-booking').' : '.$nd_booking_user_first_name.'</p>
		  <p>'.__('Surname','nd-booking').' : '.$nd_booking_user_last_name.'</p>
		  <p>'.__('Phone','nd-booking').' : '.$nd_booking_user_phone.'</p>
		  <p>'.__('Address','nd-booking').' : '.$nd_booking_user_address.'</p>
		  <p>'.__('City','nd-booking').' : '.$nd_booking_user_city.'</p>
		  <p>'.__('Country','nd-booking').' : '.$nd_booking_user_country.'</p>
		  <p>'.__('Email','nd-booking').' : '.$nd_booking_paypal_email.'</p>
		  <p>'.__('Message','nd-booking').' : '.$nd_booking_user_message.'</p><br/>

		  <p><strong>'.__('PAYMENT INFORMATIONS','nd-booking').' :</strong></p>
		  <p>'.__('Payment Type','nd-booking').' : '.$nd_booking_action_type.'</p>
		  <p>'.__('Payment Status','nd-booking').' : '.$nd_booking_paypal_payment_status.'</p>
		  <p>'.__('Payment ID','nd-booking').' : '.$nd_booking_paypal_tx.'</p>

		</body>
		</html>
		';


		// To send HTML mail, the Content-type header must be set
		$headers = array('Content-Type: text/html; charset=UTF-8','From: '.$nd_booking_name.' <'.$nd_booking_email.'>');


		//decide email template
	    $nd_booking_email_template = get_option('nd_booking_email_template');
	    if ( $nd_booking_email_template == __('Template 1','nd-booking') ) {
	    	$nd_booking_template = $message_1;
	    }else{
	    	$nd_booking_template = $message;
	    }
	    

		// Mail it
		wp_mail( $to, $subject, $nd_booking_template, $headers );




	}
	add_action('nd_booking_reservation_added_in_db','nd_booking_send_message',10,23);

}