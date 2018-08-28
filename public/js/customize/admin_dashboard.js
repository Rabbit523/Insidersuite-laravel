$("#datepicker").daterangepicker();
$('input[name="datepicker"]').on('apply.daterangepicker', function(ev, picker) {  
  var startDate= $("#datepicker").val().split('-')[0];
  var endDate= $("#datepicker").val().split('-')[1];
  console.log(startDate);
  //setTimeout(function () { window.location.href= "/admin/air-search-passenger?startDate="+startDate+"&endDate="+endDate+"&search="+"search"}, 100); 
}); 