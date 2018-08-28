
//START function
function nd_booking_final_price(){

  jQuery( "body" ).append( "<div id='nd_booking_sorting_result_layer' class='nd_booking_cursor_progress nd_booking_position_fixed nd_booking_width_100_percentage nd_booking_height_100_percentage nd_booking_z_index_999'></div>" );

  var nd_booking_booking_checkbox_services = jQuery( "#nd_booking_booking_checkbox_services").val();
  var nd_booking_booking_form_final_price = jQuery( "#nd_booking_booking_form_trip_price").val();

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_booking_my_vars_final_price.nd_booking_ajaxurl_final_price,
    {
      action : 'nd_booking_final_price_php',
      nd_booking_booking_checkbox_services : nd_booking_booking_checkbox_services,
      nd_booking_booking_form_final_price : nd_booking_booking_form_final_price
    },
    //end ajax


    //START success
    function( nd_booking_booking_result ) {

      jQuery( "#nd_booking_final_trip_price span" ).empty();
      jQuery( "#nd_booking_final_trip_price span" ).text(nd_booking_booking_result);
      jQuery( "#nd_booking_booking_form_final_price").val(nd_booking_booking_result);

      jQuery( "#nd_booking_sorting_result_layer" ).remove(); 

    }
    //END

    

  );
  //END

  
}
//END function