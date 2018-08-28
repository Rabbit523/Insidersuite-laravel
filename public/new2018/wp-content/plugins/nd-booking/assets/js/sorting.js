//START function
function nd_booking_sorting(paged){

  jQuery( "body" ).append( "<div id='nd_booking_sorting_result_layer' class='nd_booking_cursor_progress nd_booking_position_fixed nd_booking_width_100_percentage nd_booking_height_100_percentage nd_booking_z_index_999'></div>" );

  var nd_booking_sorting_result_loader = jQuery('<div id="nd_booking_sorting_result_loader" class="nd_booking_position_absolute nd_booking_top_0 nd_booking_z_index_9 nd_booking_left_0 nd_booking_bg_white  nd_booking_cursor_progress nd_booking_height_100_percentage nd_booking_width_100_percentage"></div>').hide();
  jQuery( "#nd_booking_archive_search_masonry_container" ).append(nd_booking_sorting_result_loader);
  nd_booking_sorting_result_loader.fadeIn('slow');

  var nd_booking_search_filter_options_meta_key = jQuery( "#nd_booking_search_filter_options .nd_booking_search_filter_options_active").attr('data-meta-key');
  var nd_booking_search_filter_options_order = jQuery( "#nd_booking_search_filter_options .nd_booking_search_filter_options_active").attr('data-order');
  var nd_booking_search_filter_layout = jQuery( "#nd_booking_search_filter_layout .nd_booking_search_filter_layout_active").attr('data-layout');
  if ( typeof nd_booking_search_filter_layout === 'undefined' ){ nd_booking_search_filter_layout = 1; }

  //variables passed on function
  var nd_booking_paged = paged;
  if(typeof nd_booking_paged === 'undefined'){
    nd_booking_paged = jQuery( ".nd_booking_btn_pagination_active" ).text();
  }
  var nd_booking_layout = jQuery( "#nd_booking_btn_sorting_layout .nd_booking_btn_sorting_layout_active").attr('title');

  var nd_booking_archive_form_branches = jQuery( "#nd_booking_archive_form_branches").val();
  var nd_booking_archive_form_date_range_from = jQuery( "#nd_booking_archive_form_date_range_from").val();
  var nd_booking_archive_form_date_range_to = jQuery( "#nd_booking_archive_form_date_range_to").val();
  var nd_booking_archive_form_guests = jQuery( "#nd_booking_archive_form_guests").val();
  var nd_booking_archive_form_max_price_for_day = jQuery( "#nd_booking_archive_form_max_price_for_day").val();
  var nd_booking_archive_form_services = jQuery( "#nd_booking_archive_form_services").val();
  var nd_booking_archive_form_additional_services = jQuery( "#nd_booking_archive_form_additional_services").val();
  var nd_booking_archive_form_branch_stars = jQuery( "#nd_booking_archive_form_branch_stars").val();

  
  

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_booking_my_vars_sorting.nd_booking_ajaxurl_sorting,
    {
      action : 'nd_booking_sorting_php',
      nd_booking_paged : nd_booking_paged,
      nd_booking_archive_form_branches : nd_booking_archive_form_branches,
      nd_booking_archive_form_date_range_from : nd_booking_archive_form_date_range_from,
      nd_booking_archive_form_date_range_to : nd_booking_archive_form_date_range_to,
      nd_booking_archive_form_guests : nd_booking_archive_form_guests,
      nd_booking_archive_form_max_price_for_day : nd_booking_archive_form_max_price_for_day,
      nd_booking_archive_form_services : nd_booking_archive_form_services,
      nd_booking_archive_form_additional_services : nd_booking_archive_form_additional_services,
      nd_booking_search_filter_options_meta_key : nd_booking_search_filter_options_meta_key,
      nd_booking_search_filter_options_order : nd_booking_search_filter_options_order,
      nd_booking_search_filter_layout : nd_booking_search_filter_layout,
      nd_booking_archive_form_branch_stars : nd_booking_archive_form_branch_stars
    },
    //end ajax


    //START success
    function( nd_booking_sorting_result ) {


      setTimeout(function(){

        jQuery( "#nd_booking_content_result" ).remove();
        jQuery( "#nd_booking_archive_search_masonry_container" ).append(nd_booking_sorting_result);

        jQuery( "#nd_booking_sorting_result_loader" ).fadeOut( "slow", function() {
          jQuery( "#nd_booking_sorting_result_loader" ).remove();
          jQuery( "#nd_booking_sorting_result_layer" ).remove();  
        });

      },10);

      
    }
    //END

    

  );
  //END

  
}
//END function