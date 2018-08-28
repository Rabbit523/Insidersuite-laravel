var step2_show = false;
var step5_show = false;

$("#next_step0").click(function () {
  step2_show = true;
  $(".step0").fadeOut(1000);
  $(".step1").fadeIn(1000);
  setTimeout(function () {
    if (step2_show) {
      $(".step1").fadeOut(1000);
      $(".step2").fadeIn(1000);
    }    
  }, 3000);
});

$("#next_step2").click(function () {
  $(".step2").fadeOut(1000);
  $(".step3").fadeIn(1000);
});

$("#next_step3").click(function () {
  step5_show = true;
  $(".step3").fadeOut(1000);
  $(".step4").fadeIn(1000);
  setTimeout(function () {
    if (step5_show) {
      $(".step4").fadeOut(1000);
      $(".step5").fadeIn(1000);
    }
  }, 3000);
});

$("#avatar_button").click(function() {
  $("#avatarUpload").trigger('click');
});

$("#avatar_link").click(function() {
  $("#avatarUpload").trigger('click');
});

$("#avatarUpload").on('change', function() {
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'profile_photo',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      $("#new_img").attr('src', e);
    }
  });
});

var count_country = 1;

$("#indicate").keydown(function (e) {
  if (e.keyCode == 13) {
    var country = $("#indicate").val();
    if (count_country != 6) {
      if (country) {        
        $( ".tags").append( "<a class='tag' " + "id='" + "country" + count_country +"'" + ">" + country + "</a>");
        $("#indicate").val("");
        count_country ++;
      } else {
        alert("Please indicate a country!");
      }
    } else {
      alert("Sorry, you can't indicate over 6 countries!");
    }
  }
});

$(document).on('click', '#country0', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$(document).on('click', '#country1', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$(document).on('click', '#country2', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$(document).on('click', '#country3', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$(document).on('click', '#country4', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$(document).on('click', '#country5', function(e) {
  $(this).fadeOut(50);
  count_country --;  
});

$("#next_step5").click(function () {
  $(".step5").fadeOut(1000);
  $(".step6").fadeIn(1000);
});

$("#next_step6").click(function () {
  $(".step6").fadeOut(1000);
  $(".step7").fadeIn(1000);
});


$("#back_step7").click(function () {
  $(".step7").fadeOut(1000);
  $(".step6").fadeIn(1000);
});

$("#back_step6").click(function () {
  $(".step6").fadeOut(1000);
  $(".step5").fadeIn(1000);
});

$("#back_step5").click(function () {
  $(".step5").fadeOut(1000);
  $(".step4").fadeIn(1000);
  setTimeout(function () {
    if (step5_show) {
      $(".step4").fadeOut(1000);
      $(".step5").fadeIn(1000);
    }
  }, 3000);
});

$("#back_step4").click(function () {
  $(".step4").fadeOut(1000);
  $(".step3").fadeIn(1000);
  step5_show = false;
});

$("#back_step3").click(function () {
  $(".step3").fadeOut(1000);
  $(".step2").fadeIn(1000);
});

$("#back_step2").click(function () {
  $(".step2").fadeOut(1000);
  $(".step1").fadeIn(1000);
  setTimeout(function () {
    if (step2_show) {
      $(".step1").fadeOut(1000);
      $(".step2").fadeIn(1000);
    }    
  }, 3000);
});

$("#back_step1").click(function () {
  $(".step1").fadeOut(1000);
  $(".step0").fadeIn(1000);
  step2_show = false;
});