//START function
function nd_options_import_settings(){

  //variables
  var nd_options_value_import_settings = jQuery( "#nd_options_import_settings").val();

  //empty result div
  jQuery( "#nd_options_import_settings_result_container").empty();

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_options_my_vars_import_settings.nd_options_ajaxurl_import_settings,
    {
      action : 'nd_options_import_settings_php_function',         
      nd_options_value_import_settings: nd_options_value_import_settings
    },
    //end ajax


    //START success
    function( nd_options_import_settings_result ) {
    
      jQuery( "#nd_options_import_settings").val('');
      jQuery( "#nd_options_import_settings_result_container").append(nd_options_import_settings_result);

    }
    //END
  

  );
  //END

  
}
//END function
