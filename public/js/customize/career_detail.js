var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#info_link").click (function () {
  if (user) {
    window.location = redirect_path + "/career_detail_info?id=" + id
  } else {
    window.location = redirect_path + "/career-detail_info?id=" + id
  }    
});