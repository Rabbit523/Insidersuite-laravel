//START function
function nd_booking_validate_fields(){

  //variables
  var nd_booking_email = jQuery( "#nd_booking_booking_form_email").val();
  var nd_booking_name = jQuery( "#nd_booking_booking_form_name").val();
  var nd_booking_surname = jQuery( "#nd_booking_booking_form_surname").val();
  var nd_booking_message = jQuery( "#nd_booking_booking_form_requests").val();
  var nd_booking_phone = jQuery( "#nd_booking_booking_form_phone").val();
  var nd_booking_coupon = jQuery( "#nd_booking_booking_form_coupon").val();

  //term
  if ( jQuery( "#nd_booking_booking_form_term").is(':checked') ) { 
    var nd_booking_term = 1;
  }else{ 
    var nd_booking_term = 0;
  }

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_booking_my_vars_form_validate_fields.nd_booking_ajaxurl_form_validate_fields,
    {
      action : 'nd_booking_validate_fields_php_function',        
      nd_booking_email: nd_booking_email,
      nd_booking_name: nd_booking_name,
      nd_booking_surname: nd_booking_surname,
      nd_booking_message: nd_booking_message,
      nd_booking_phone: nd_booking_phone,
      nd_booking_term: nd_booking_term,
      nd_booking_coupon: nd_booking_coupon
    },
    //end ajax


    //START success
    function( nd_booking_validate_fields_result ) {
      
     

     if ( nd_booking_validate_fields_result == 1 ){

        jQuery( ".nd_booking_validation_errors").remove();
        jQuery("#nd_booking_submit_go_to_checkout").trigger("click");
        
     }else{
        
        jQuery( ".nd_booking_validation_errors").remove();

        //split all result
        var nd_booking_errors_validation = nd_booking_validate_fields_result.split("[divider]");
        
        //declare variables
        var nd_booking_error_validation_name = nd_booking_errors_validation[0];
        var nd_booking_error_validation_surname = nd_booking_errors_validation[1];
        var nd_booking_error_validation_email = nd_booking_errors_validation[2];
        var nd_booking_error_validation_phone = nd_booking_errors_validation[3];
        var nd_booking_error_validation_message = nd_booking_errors_validation[4];
        var nd_booking_error_validation_term = nd_booking_errors_validation[5];
        var nd_booking_error_validation_coupon = nd_booking_errors_validation[6];

        jQuery( "#nd_booking_booking_form_name_container p").append(nd_booking_error_validation_name);
        jQuery( "#nd_booking_booking_form_surname_container p").append(nd_booking_error_validation_surname);
        jQuery( "#nd_booking_booking_form_email_container p").append(nd_booking_error_validation_email);
        jQuery( "#nd_booking_booking_form_phone_container p").append(nd_booking_error_validation_phone);
        jQuery( "#nd_booking_booking_form_requests_container p").append(nd_booking_error_validation_message);
        jQuery( "#nd_booking_booking_form_term_container p").append(nd_booking_error_validation_term);
        jQuery( "#nd_booking_booking_form_coupon_container p").append(nd_booking_error_validation_coupon);
        
     
     }

     

    }
    //END

  
  );
  //END

  
}
//END function
