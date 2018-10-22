var redirect_path = window.location.protocol + "//" + window.location.hostname;
//  $.ajax({
//       type: 'post',
//       dataType: 'json',
//       url: 'create_giftcard',
//       data: data,
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       },
//       success: function (e) {
//         $("#place_order").attr('style', 'display: none');
//         $("#payment-form").attr('style', 'display: block!important');
//         $("#customer_email").val(e.email);
//       }
//   });
$("#phone_number").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});
$("#datepicker").datepicker({
    showOtherMonths: true,
    selectOtherMonths: true
});
var sidebar_height = $(".sidebar").height();
$("#general").click (function () {
    $("#general_info").attr('style', 'display: block');
    $("#accommodation_info").attr('style', 'display: none');
    $("#experience_info").attr('style', 'display: none');
    $("#invite_info").attr('style', 'display: none');
    $("#review_info").attr('style', 'display: none');
    $("#payment_info").attr('style', 'display: none');

    $("#accomodation").removeClass('active');
    $("#experience").removeClass('active');
    $("#invite").removeClass('active');
    $("#review").removeClass('active');
    $("#payment").removeClass('active');
    $(this).addClass('active');

    var height = $(".experience-content").height();
    $(".sidebar").height(height);

    if ($( window ).width() <= 414) {
      $(".sidebar").attr('style', 'display: none;');
      $("._66jk8g").attr('style', 'display: block;');
      $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
    }
});

$("#accomodation").click (function () {
    $("#accommodation_info").attr('style', 'display: block');
    $("#general_info").attr('style', 'display: none');
    $("#experience_info").attr('style', 'display: none');
    $("#invite_info").attr('style', 'display: none');
    $("#review_info").attr('style', 'display: none');
    $("#payment_info").attr('style', 'display: none');

    $("#general").removeClass('active');
    $("#experience").removeClass('active');
    $("#invite").removeClass('active');
    $("#review").removeClass('active');
    $("#payment").removeClass('active');
    $(this).addClass('active');

    var height = $(".experience-content").height();
    $(".sidebar").height(height);

    if ($( window ).width() <= 414) {
      $(".sidebar").attr('style', 'display: none;');
      $("._66jk8g").attr('style', 'display: block;');
      $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
    }
});

$("#experience").click (function () {
    $("#experience_info").attr('style', 'display: block');
    $("#general_info").attr('style', 'display: none');
    $("#accommodation_info").attr('style', 'display: none');
    $("#invite_info").attr('style', 'display: none');
    $("#review_info").attr('style', 'display: none');
    $("#payment_info").attr('style', 'display: none');

    $("#general").removeClass('active');
    $("#accomodation").removeClass('active');
    $("#invite").removeClass('active');
    $("#review").removeClass('active');
    $("#payment").removeClass('active');
    $(this).addClass('active');

    var height = $("#experience_info").height();
    $(".sidebar").height(height+160);
    $("#invite").removeClass('disabled');

    if ($( window ).width() <= 414) {
      $(".sidebar").attr('style', 'display: none;');
      $("._66jk8g").attr('style', 'display: block;');
      $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
    }
});

$(".accomodation").click(function() {
  $("#myModal2").modal('show');
});
$(".experience").click(function() {
  $("#myModal1").modal('show');
});
$("#invite").click (function () {
    $("#invite img:last-child").remove();
    $("#invite_info").attr('style', 'display: block');
    $("#experience_info").attr('style', 'display: none');
    $("#general_info").attr('style', 'display: none');
    $("#accommodation_info").attr('style', 'display: none');
    $("#review_info").attr('style', 'display: none');
    $("#payment_info").attr('style', 'display: none');

    $("#general").removeClass('active');
    $("#accomodation").removeClass('active');
    $("#experience").removeClass('active');
    $("#review").removeClass('active');
    $("#payment").removeClass('active');
    $(this).addClass('active');

    $(".sidebar").height(sidebar_height);
    $("#invite_info").height(sidebar_height);
    $("#review").removeClass('disabled');
});

$("#review").click (function () {
    $("#review img:last-child").remove();
    $("#review_info").attr('style', 'display: flex');
    $("#invite_info").attr('style', 'display: none');
    $("#experience_info").attr('style', 'display: none');
    $("#general_info").attr('style', 'display: none');
    $("#accommodation_info").attr('style', 'display: none');
    $("#payment_info").attr('style', 'display: none');

    $("#invite").removeClass('active');
    $("#general").removeClass('active');
    $("#accomodation").removeClass('active');
    $("#experience").removeClass('active');
    $("#payment").removeClass('active');
    $(this).addClass('active');

    $(".sidebar").height(sidebar_height);
    $(".experience-content").height(sidebar_height);
    $("#payment").removeClass('disabled');
});

$("#payment").click (function () {
    $("#payment img:last-child").remove();
    $("#payment_info").attr('style', 'display: flex');
    $("#invite_info").attr('style', 'display: none');
    $("#experience_info").attr('style', 'display: none');
    $("#general_info").attr('style', 'display: none');
    $("#accommodation_info").attr('style', 'display: none');
    $("#review_info").attr('style', 'display: none');

    $("#invite").removeClass('active');
    $("#general").removeClass('active');
    $("#accomodation").removeClass('active');
    $("#experience").removeClass('active');
    $("#review").removeClass('active');
    $(this).addClass('active');

    $(".experience-content").height(870);
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
  if (count != 15) {
    count ++;
    $("#adults").val(count);
    $("#participants_adult").text(count + " nights ");
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
    $("#participants_adult").text(count + " night ");
  } else {
    count = 1;
    $("#participants_adult").text("1 night ");
    $("#adults_decrease").attr("disabled", true);
  }
});
$(".iCflgr").click(function () {
  $(".hkJiNs").attr('style', 'display: none;');
  $(".dsssji").attr('style', 'display: none;');
});
$('.calender').pignoseCalendar({
    multiple: true,
    lang: 'en',
    date: moment(),
    theme: 'light',
    format: 'YYYY-MM-DD',
    modal: false,
    // apply: functon (){},
});
$(".map_link").click(function() {
  if ($(".map_info").hasClass('active')) {
    $(".map_info").removeClass('active');
    $("#map").attr('style', 'display:none');
    $(".headBg").attr('style', 'display:block');
  } else {
	  $(".map_info").addClass('active');
	  $("#map").attr('style', 'display:block');
	  $(".headBg").attr('style', 'display:none');
  }
});

$(".dropdown-toggle").click(function () {
  $(".dropdown").addClass('open');
});
