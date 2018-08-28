var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(document).ready(function () {
   $("#post5").attr('style', 'display:none');
   $("#post6").attr('style', 'display:none');
});
$(".home-improvements").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=1"
  } else {
    window.location = redirect_path + "/blog-detail?id=1"
  }    
});
$(".community").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=2"
  } else {
    window.location = redirect_path + "/blog-detail?id=2"
  }
});
$(".experience").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=3"
  } else {
    window.location = redirect_path + "/blog-detail?id=3"
  }  
});
$(".guest").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=5"
  } else {
    window.location = redirect_path + "/blog-detail?id=5"
  }  
});
$(".inside_experience").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=6"
  } else {
    window.location = redirect_path + "/blog-detail?id=6"
  }  
});
$(".rankings").click (function () {
  if (user) {
    window.location = redirect_path + "/blog_detail?id=4"
  } else {
    window.location = redirect_path + "/blog-detail?id=4"
  }  
});
$(".read_more").click(function () {
   var loading = new Loading({ title: '', discription: 'Loading...' });
   setTimeout(function () {  
    $("#post5").attr('style', 'display:block');
    $("#post6").attr('style', 'display:block'); }, 1000);
   setTimeout(() => loading.out(), 1000);
  
});