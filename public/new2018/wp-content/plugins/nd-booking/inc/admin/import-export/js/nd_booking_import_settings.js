//START function
function nd_booking_import_settings(){

  //variables
  var nd_booking_value_import_settings = jQuery( "#nd_booking_import_settings").val();

  //empty result div
  jQuery( "#nd_booking_import_settings_result_container").empty();

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_booking_my_vars_import_settings.nd_booking_ajaxurl_import_settings,
    {
      action : 'nd_booking_import_settings_php_function',         
      nd_booking_value_import_settings: nd_booking_value_import_settings
    },
    //end ajax


    //START success
    function( nd_booking_import_settings_result ) {
    
      jQuery( "#nd_booking_import_settings").val('');
      jQuery( "#nd_booking_import_settings_result_container").append(nd_booking_import_settings_result);

    }
    //END
  

  );
  //END

  
}
//END function
