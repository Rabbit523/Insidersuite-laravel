//START function
function nd_booking_check_order_val(){

  //variables
  var nd_booking_add_order_name = jQuery( "#nd_booking_add_order_name").val();
  var nd_booking_add_order_surname = jQuery( "#nd_booking_add_order_surname").val();
  var nd_booking_add_order_email = jQuery( "#nd_booking_add_order_email").val();
  var nd_booking_add_order_guests = jQuery( "#nd_booking_add_order_guests").val();
  var nd_booking_add_order_final_price = jQuery( "#nd_booking_add_order_final_price").val();
  var nd_booking_add_order_date_from = jQuery( "#nd_booking_add_order_date_from").val();
  var nd_booking_add_order_date_to = jQuery( "#nd_booking_add_order_date_to").val();
  var nd_booking_add_order_room_id = jQuery( "#nd_booking_add_order_room_id option:checked" ).val();

  //empty result div
  jQuery( "#nd_booking_import_settings_result_container").empty();

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_booking_my_vars_add_order_val.nd_booking_ajaxurl_add_order_val,
    {
      action : 'nd_booking_add_order_validation_php_function',         
      nd_booking_add_order_name: nd_booking_add_order_name,
      nd_booking_add_order_surname: nd_booking_add_order_surname,
      nd_booking_add_order_email: nd_booking_add_order_email,
      nd_booking_add_order_guests: nd_booking_add_order_guests,
      nd_booking_add_order_final_price: nd_booking_add_order_final_price,
      nd_booking_add_order_date_from: nd_booking_add_order_date_from,
      nd_booking_add_order_date_to: nd_booking_add_order_date_to,
      nd_booking_add_order_room_id: nd_booking_add_order_room_id
    },
    //end ajax


    //START success
    function( nd_booking_add_order_val_result ) {
    

      if ( nd_booking_add_order_val_result == 1 ){

          jQuery( ".nd_booking_validation_errors").empty();

          jQuery("#nd_booking_add_order_check_availability_btn").addClass("nd_booking_display_none_important");
          jQuery("#nd_booking_add_order_add_reservation_btn").removeClass("nd_booking_display_none_important");
          
       }else{
          
          jQuery( ".nd_booking_validation_errors").empty();

          //split all result
          var nd_booking_errors_validation = nd_booking_add_order_val_result.split("[divider]");
          
          //declare variables
          var nd_booking_error_validation_name = nd_booking_errors_validation[0];
          var nd_booking_error_validation_surname = nd_booking_errors_validation[1];
          var nd_booking_error_validation_email = nd_booking_errors_validation[2];
          var nd_booking_error_validation_guests = nd_booking_errors_validation[3];
          var nd_booking_error_validation_final_price = nd_booking_errors_validation[4];
          var nd_booking_error_validation_date_from = nd_booking_errors_validation[5];
          var nd_booking_error_validation_date_to = nd_booking_errors_validation[6];
          var nd_booking_error_validation_date_from_to = nd_booking_errors_validation[7];
          var nd_booking_error_validation_availability = nd_booking_errors_validation[8];

          jQuery( ".nd_booking_add_order_name .nd_booking_validation_errors").append(nd_booking_error_validation_name);
          jQuery( ".nd_booking_add_order_surname .nd_booking_validation_errors").append(nd_booking_error_validation_surname);
          jQuery( ".nd_booking_add_order_email .nd_booking_validation_errors").append(nd_booking_error_validation_email);
          jQuery( ".nd_booking_add_order_guests .nd_booking_validation_errors").append(nd_booking_error_validation_guests);
          jQuery( ".nd_booking_add_order_final_price .nd_booking_validation_errors").append(nd_booking_error_validation_final_price);
          jQuery( ".nd_booking_add_order_date_from .nd_booking_validation_errors").append(nd_booking_error_validation_date_from);
          jQuery( ".nd_booking_add_order_date_to .nd_booking_validation_errors").append(nd_booking_error_validation_date_to);
          jQuery( ".nd_booking_validation_errors_from_to .nd_booking_validation_errors").append(nd_booking_error_validation_date_from_to);
          jQuery( ".nd_booking_validation_availability .nd_booking_validation_errors").append(nd_booking_error_validation_availability);

       }


    }
    //END
  

  );
  //END

  
}
//END function
