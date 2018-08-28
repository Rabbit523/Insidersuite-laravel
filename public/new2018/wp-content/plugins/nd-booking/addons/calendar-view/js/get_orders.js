
//START function
function nd_booking_get_orders(){

  //remove dropdown open 
  jQuery( "#nd_booking_order_drop_down" ).remove();

  var nd_booking_date_from = jQuery( "#nd_booking_get_orders_date_from").val()
  var nd_booking_date_to = jQuery( "#nd_booking_get_orders_date_to").val()
  var nd_booking_id = jQuery( "#nd_booking_get_orders_id_field").val();

  //START post method
  jQuery.get(
    
    //ajax
    nd_booking_my_vars_get_orders.nd_booking_ajaxurl_get_orders,
    {
      action : 'nd_booking_get_orders_php_function',
      nd_booking_date_from : nd_booking_date_from,
      nd_booking_date_to : nd_booking_date_to,
      nd_booking_id : nd_booking_id
    },
    //end ajax


    //START success
    function(nd_booking_string_result) {

      var nd_booking_new_date_from = nd_booking_date_from.replace("/", "-");
      var nd_booking_new_new_date_from = nd_booking_new_date_from.replace("/", "-");

      jQuery( ".nd_booking_cell_container_id_"+nd_booking_new_new_date_from+"_"+nd_booking_id ).append(nd_booking_string_result);

      jQuery( ".nd_booking_order_drop_down_btn_close" ).on( "click", function() { 

        jQuery( "#nd_booking_order_drop_down" ).remove();
        
      });

    }
    //END

    

  );
  //END

  
}
//END function