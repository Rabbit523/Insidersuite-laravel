var temp;
var new_text = " ";
$( document ).ready(function() {
    var len = $(".text_content").text().length;
    temp = $(".text_content").text();
    if (len > 200) {
        $("#read_more").attr("style", "display: block;");
        var i;
        for (i = 0; i < 200; i++) {
            new_text += temp[i];
        }
        new_text +="... ";
        $(".text_content").text(new_text);
    } else {
        $("#read_more").attr("style", "display: none;");
    }
});
var flag = false;
$("#read_more").click (function () {
    if (flag) {
        $(".text_content").text(temp);
        flag = false;
    } else {
        flag = true;
        $(".text_content").text(new_text);
    }
   
   
});
$("#tab1").click(function () {
  $(this).attr('style', 'display: none');
  $("#tab1_").attr('style', 'display: block');
  $(".section1").addClass('active');
  $(".best_bits").attr('style', 'display: block');
  if ($(".section2").hasClass('active')) {
    $(".section2").removeClass('active');
    $("#tab2_").attr('style', 'display: none');
    $("#tab2").attr('style', 'display: block');
    $(".details").attr('style', 'display: none');
  }
  if ($(".section3").hasClass('active')) {
    $(".section3").removeClass('active');
    $("#tab3_").attr('style', 'display: none');
    $("#tab3").attr('style', 'display: block');
    $(".reviews").attr('style', 'display: none');
  }
});
$("#tab2").click(function () {
  $(this).attr('style', 'display: none');
  $("#tab2_").attr('style', 'display: block');
  $(".section2").addClass('active');
  $(".details").attr('style', 'display: block');
  if ($(".section1").hasClass('active')) {
    $(".section1").removeClass('active');
    $("#tab1_").attr('style', 'display: none');
    $("#tab1").attr('style', 'display: block');
    $(".best_bits").attr('style', 'display: none');
  }
  if ($(".section3").hasClass('active')) {
    $(".section3").removeClass('active');
    $("#tab3_").attr('style', 'display: none');
    $("#tab3").attr('style', 'display: block');
    $(".reviews").attr('style', 'display: none');
  }
});
$("#tab3").click(function () {
  $(this).attr('style', 'display: none');
  $("#tab3_").attr('style', 'display: block');
  $(".section3").addClass('active');
  $(".reviews").attr('style', 'display: block');
  if ($(".section1").hasClass('active')) {
    $(".section1").removeClass('active');
    $("#tab1_").attr('style', 'display: none');
    $("#tab1").attr('style', 'display: block');
    $(".best_bits").attr('style', 'display: none');
  }
  if ($(".section2").hasClass('active')) {
    $(".section2").removeClass('active');
    $("#tab2_").attr('style', 'display: none');
    $("#tab2").attr('style', 'display: block');
    $(".details").attr('style', 'display: none');
  }
});

var is_up = false;
$(".ParticipantsFunnelButton").on("click", function() {
  if (is_up == false) {    
    $(this).removeClass('dvuQnw');
    $(this).removeClass('juOFEj');
    $(this).addClass('ksTFHy');
    $(this).addClass('kzlcuA');
    $("#down_caret").attr('style', 'display: none;');
    $("#up_caret").attr('style', 'display: block;');
    $(".hkJiNs").attr('style', 'display: block;');
    $(".dsssji").attr('style', 'display: block; width:100%;');
    is_up = true;
  } else {
    is_up = false;
    $(this).addClass('dvuQnw');
    $(this).addClass('juOFEj');
    $(this).removeClass('ksTFHy');
    $(this).removeClass('kzlcuA');
    $("#down_caret").attr('style', 'display: block;');
    $("#up_caret").attr('style', 'display: none;');
    $(".hkJiNs").attr('style', 'display: none;');
    $(".dsssji").attr('style', 'display: none;');
  }
});

$("#adults_increase").click(function () {
  $("#adults_decrease").attr("disabled", false);
  var count =  $("#adults").val();
  if (count != 3) {
    count ++;
    $("#adults").val(count);
    $("#participants_adult").text(count + " Adults ");
  } else {
    count = 1;
    $("#adults_increase").attr("disabled", true);
  }
});
$("#adults_decrease").click(function () {
  $("#adults_increase").attr("disabled", false);
  var count =  $("#adults").val();
  if (count != 1) {
    count --;
    $("#adults").val(count);
    $("#participants_adult").text(count + " Adult ");
  } else {
    count = 1;
    $("#participants_adult").text("1 Adult ");
    $("#adults_decrease").attr("disabled", true);
  }
});
$("#child_increase").click(function () {
  $("#child_decrease").attr("disabled", false);
  $("#participants_child").removeClass("disable");
  $("#participants_child").addClass("enable");
  var count =  $("#children").val();
  if (count != 2) {
    count ++;
    $("#children").val(count);
    if (count == 1) {
      $("#participants_child").text(", 1 Child ");
    } else {
      $("#participants_child").text(", " + count + " Children ");
    }    
  } else {
    count = 0;
    $("#child_increase").attr("disabled", true);
  }
});
$("#child_decrease").click(function () {
  $("#child_increase").attr("disabled", false);
  var count =  $("#children").val();
  if (count != 0) {
    count --;
    $("#children").val(count);
    if (count == 1) {
      $("#participants_child").text(", 1 Child ");
    } else {
      $("#participants_child").removeClass("enable");
      $("#participants_child").addClass("disable");
    }
  } else {
    count = 0;   
    $("#child_decrease").attr("disabled", true);
  }  
});
$("#baby_increase").click(function () {
  $("#baby_decrease").attr("disabled", false);
  $("#participants_baby").removeClass("disable");
  $("#participants_baby").addClass("enable");
  var count =  $("#babies").val();
  if (count != 2) {
    count ++;
    $("#babies").val(count);
    if (count == 1) {
      $("#participants_baby").text(", 1 Baby ");
    } else {
      $("#participants_baby").text(", " + count + " Babies ");
    }  
  } else {
    count = 0;
    $("#baby_increase").attr("disabled", true);
  }  
});
$("#baby_decrease").click(function () {
  $("#baby_increase").attr("disabled", false);
  var count =  $("#babies").val();
  if (count != 0) {
    count --;
    $("#babies").val(count);
    if (count == 1) {
      $("#participants_baby").text(", 1 Baby ");
    } else {
      $("#participants_baby").removeClass("enable");
      $("#participants_baby").addClass("disable");
    }
  } else {
    count = 0;
    $("#baby_decrease").attr("disabled", true);
  }
});

$(".iCflgr").click(function () {
  $(".dsssji").attr('style', 'display: none;');
});

var clicked = false;
$("#duration").click(function () {
  if(!clicked) {
      $(this).attr('style', 'background: #000;padding: 8px 10px;');
      $("#duration .fa-right").attr('style', 'display: none;');
      $("#duration .fa-down").attr('style', 'display: block;');
      clicked = true;
  } else {
      $(this).attr('style', 'background: #ddd;padding: 8px 11px;');
      $("#duration .fa-right").attr('style', 'display: block;');
      $("#duration .fa-down").attr('style', 'display: none;');
      clicked = false;
  }
});