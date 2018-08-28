var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#finance").click (function () {
  if (user) {
    window.location = redirect_path + "/career_detail?id=finance"
  } else {
    window.location = redirect_path + "/career-detail?id=finance"
  }    
});
$("#community").click (function () {
  if (user) {
    window.location = redirect_path + "/career_detail?id=engineering"
  } else {
    window.location = redirect_path + "/career-detail?id=engineering"
  }
});
$("#production").click (function () {
  if (user) {
    window.location = redirect_path + "/career_detail?id=security"
  } else {
    window.location = redirect_path + "/career-detail?id=security"
  }  
});
$("#developer").click (function () {
  if (user) {
    window.location = redirect_path + "/career_detail?id=marketing"
  } else {
    window.location = redirect_path + "/career-detail?id=marketing"
  }  
});
