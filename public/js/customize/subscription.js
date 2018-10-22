var redirect_path = window.location.protocol + "//" + window.location.hostname;
$.ajax({
  type: 'post',
  dataType: 'json',
  url: 'get_subscription_newsletter',
  data: {'user_id': user.user_id},
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  success: function (e) {
    if (e == "all") {
        $( "#my_slider" ).slider( "value", 100);
    } else if (e == "2week") {
        $( "#my_slider" ).slider( "value", 66);
    } else if (e == "1week") {
        $( "#my_slider" ).slider( "value", 33);
    } else if (e == "none") {
        $( "#my_slider" ).slider( "value", 0);
    }
  }
});

var val = "";
$( function() {
  function refreshSwatch() {
    val = $( "#my_slider" ).slider( "value");
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
    url: 'set_subscription_newsletter',
    data: {'type': val},
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      console.log(e);
      if (e == "success") {
        alert("success!");
        location.reload(true);
      }
    }
  });
});
