var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(document).ready(function () {
   $("#post5").attr('style', 'display:none');
   $("#post6").attr('style', 'display:none');
});
$(".blog_detail").click (function () {
  var id = $(this).data('id');
  if (user) {
    window.location = redirect_path + "/blog_detail?id="+id
  } else {
    window.location = redirect_path + "/blog-detail?id="+id
  }    
});
$(".read_more").click(function () {
   var loading = new Loading({ title: '', discription: 'Loading...' });
   setTimeout(function () {  
    $("#post5").attr('style', 'display:block');
    $("#post6").attr('style', 'display:block'); }, 1000);
   setTimeout(() => loading.out(), 1000);  
});