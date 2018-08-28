var redirect_path = window.location.protocol + "//" + window.location.hostname;
var val = "";
$( function() {  
  function refreshSwatch() {
    val = $( "#my_slider" ).slider( "value" );
  }
  $( "#my_slider" ).slider({
    orientation: "horizontal",
    range: "min",
    max: 100,
    value: 100,
    step: 33,
    slide: refreshSwatch,
    change: refreshSwatch
  });
  $( "#my_slider" ).slider( "value", 100);
});

$('#save').click(function (){
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'subscription_newsletter',
    data: {'type': val},
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {      
      if (e == "success") {
        alert("success!");
        setTimeout(function(){window.location = redirect_path + "/subscription";}, 1000);        
      }      
    }
  });
});