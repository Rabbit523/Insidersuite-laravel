var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(".career").click (function () {  
  var id = $(this).data('id');
  if (user) {
    window.location = redirect_path + "/career_detail?id="+id
  } else {
    window.location = redirect_path + "/career-detail?id="+id
  }    
});

