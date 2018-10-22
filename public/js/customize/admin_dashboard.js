$("#datepicker").daterangepicker();
$('input[name="datepicker"]').on('apply.daterangepicker', function(ev, picker) {  
  var startDate= $("#datepicker").val().split('-')[0];
  var endDate= $("#datepicker").val().split('-')[1];  
  window.location.href= "dashboard-search?startDate="+startDate+"&endDate="+endDate;   
}); 