<?php


//create the option in addons manager
add_action('nd_booking_add_addons_settings_group','nd_booking_add_addons_settings_group_stripe');
function nd_booking_add_addons_settings_group_stripe(){

  register_setting( 'nd_booking_addons_settings_group', 'nd_booking_stripe_enable' );

}


//echo the html in addons manager
add_action('nd_booking_add_setting_on_payment_methods_addons','nd_booking_add_setting_on_payment_methods_addons_html');
function nd_booking_add_setting_on_payment_methods_addons_html(){

	$nd_booking_result = '<div class="nd_booking_section nd_booking_height_20"></div>';

	$nd_booking_result .= '
	
	<label class="nd_booking_section">
		<input '; if( get_option('nd_booking_stripe_enable') == 1 ) { $nd_booking_result .= 'checked="checked"'; } $nd_booking_result .= ' name="nd_booking_stripe_enable" type="checkbox" value="1">';
		$nd_booking_result .= __('Stripe','nd-booking');

	$nd_booking_result .= '
	</label>';

	echo $nd_booking_result;
  
}




//create the option in payment settings
add_action('nd_booking_add_setting_on_register_payment_message','nd_booking_add_setting_on_register_payment_message_stripe');
function nd_booking_add_setting_on_register_payment_message_stripe(){

  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_stripe_checkout' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_stripe_public_key' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_stripe_secret_key' );
  register_setting( 'nd_booking_paypal_settings_group', 'nd_booking_stripe_currency' );

}


//create the option in addons manager
add_action('nd_booking_add_setting_on_payment_message','nd_booking_add_setting_on_payment_message_stripe');
function nd_booking_add_setting_on_payment_message_stripe(){


  $nd_booking_stripe_enable = get_option('nd_booking_stripe_enable'); 
  if ( $nd_booking_stripe_enable == 1 and get_option('nicdark_theme_author') == 1 ) { $nd_booking_stripe_class = ''; }else{ $nd_booking_stripe_class = 'nd_booking_display_none'; }


  $nd_booking_result = '

  	<!--START-->
	<div class="nd_booking_section '.$nd_booking_stripe_class.'">
	  <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
	    <h2 class="nd_booking_section nd_booking_margin_0">'.__('Stripe Message on Checkout','nd-booking').'</h2>
	    <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10">'.__('Set your checkout message','nd-booking').'</p>
	  </div>
	  <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
	    
	    <textarea rows="5" class="nd_booking_width_100_percentage" type="text" name="nd_booking_stripe_checkout">'.esc_attr( get_option('nd_booking_stripe_checkout') ).'</textarea>
	    <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20">'.__('Insert some description which will be visible in the checkout page','nd-booking').'</p>

	  </div>
	</div>
	<!--END-->
	<div class="'.$nd_booking_stripe_class.' nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



	<!--START-->
    <div class="nd_booking_section '.$nd_booking_stripe_class.' ">
      <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        <h2 class="nd_booking_section nd_booking_margin_0">'.__('Stripe P. Key','nd-booking').'</h2>
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10">'.__('Stripe Publishable key','nd-booking').'</p>
      </div>
      <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        
        <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_stripe_public_key" value="'.esc_attr( get_option('nd_booking_stripe_public_key') ).'" />
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20">'.__('Insert your Stripe publishable key','nd-booking').'</p>

      </div>
    </div>
    <!--END-->
    <div class="'.$nd_booking_stripe_class.' nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>



    <!--START-->
    <div class="nd_booking_section '.$nd_booking_stripe_class.' ">
      <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        <h2 class="nd_booking_section nd_booking_margin_0">'.__('Stripe S. Key','nd-booking').'</h2>
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10">'.__('Stripe Secret key','nd-booking').'</p>
      </div>
      <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        
        <input class="regular-text nd_booking_width_100_percentage" type="text" name="nd_booking_stripe_secret_key" value="'.esc_attr( get_option('nd_booking_stripe_secret_key') ).'" />
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20">'.__('Insert your Stripe secret key','nd-booking').'</p>

      </div>
    </div>
    <!--END-->
    <div class="'.$nd_booking_stripe_class.' nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>





    <!--START-->
    <div class="nd_booking_section '.$nd_booking_stripe_class.' ">
      <div class="nd_booking_width_40_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        <h2 class="nd_booking_section nd_booking_margin_0">'.__('Currency Stripe','nd-booking').'</h2>
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_10">'.__('Set your stripe currency','nd-booking').'</p>
      </div>
      <div class="nd_booking_width_60_percentage nd_booking_padding_20 nd_booking_box_sizing_border_box nd_booking_float_left">
        
        <select class="nd_booking_width_100_percentage" name="nd_booking_stripe_currency">';
          
          $nd_booking_currencies = array("USD","AED","AFN","ALL","AMD","ANG","AOA","ARS","AUD","AWG","AZN","BAM","BBD","BDT","BGN","BIF","BMD","BND","BOB","BRL","BSD","BWP","BZD","CAD","CDF","CHF","CLP","CNY","COP","CRC","CVE","CZK","DJF","DKK","DOP","DZD","EGP","ETB","EUR","FJD","FKP","GBP","GEL","GIP","GMD","GNF","GTQ","GYD","HKD","HNL","HRK","HTG","HUF","IDR","ILS","INR","ISK","JMD","JPY","KES","KGS","KHR","KMF","KRW","KYD","KZT","LAK","LBP","LKR","LRD","LSL","MAD","MDL","MGA","MKD","MMK","MNT","MOP","MRO","MUR","MVR","MWK","MXN","MYR","MZN","NAD","NGN","NIO","NOK","NPR","NZD","PAB","PEN","PGK","PHP","PKR","PLN","PYG","QAR","RON","RSD","RUB","RWF","SAR","SBD","SCR","SEK","SGD","SHP","SLL","SOS","SRD","STD","SVC","SZL","THB","TJS","TOP","TRY","TTD","TWD","TZS","UAH","UGX","UYU","UZS","VND","VUV","WST","XAF","XCD","XOF","XPF","YER","ZAR","ZMW");

          foreach ($nd_booking_currencies as $nd_booking_currency) :

              $nd_booking_result .= '<option '; if( get_option('nd_booking_stripe_currency') == $nd_booking_currency ) {  $nd_booking_result .= 'selected="selected"'; }  $nd_booking_result .= 'value="'.$nd_booking_currency.'">'.$nd_booking_currency.'</option>';
          
          endforeach;

        $nd_booking_result .= '
        </select>
        <p class="nd_booking_color_666666 nd_booking_section nd_booking_margin_0 nd_booking_margin_top_20">'.__('Select your Currency','nd-booking').'</p>

      </div>
    </div>
    <!--END-->
    <div class="'.$nd_booking_stripe_class.' nd_booking_section nd_booking_height_1 nd_booking_background_color_E7E7E7 nd_booking_margin_top_10 nd_booking_margin_bottom_10"></div>

  ';


  echo $nd_booking_result;

}











