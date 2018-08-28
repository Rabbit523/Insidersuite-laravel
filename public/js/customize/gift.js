$("#blue").click(function () {  
  var bool = $(this).hasClass('jbHdQk');
  if (!bool) {
    if ($('#pink').hasClass('jbHdQk')) {
      $('#pink').removeClass('jbHdQk');
      $('#pink').addClass('fGCWzl');
      $('#pink_check').attr('style', 'display: none');
      $(".pink-card").attr('style', 'display: none');
    } else if ($('#white').hasClass('jbHdQk')) {
      $('#white').removeClass('jbHdQk');
      $('#white').addClass('fGCWzl');
      $('#white_check').attr('style', 'display: none');
      $(".white-card").attr('style', 'display: none');
    } 
    $(this).removeClass('fGCWzl');
    $(this).addClass('jbHdQk');
    $('#blue_check').attr('style', 'display: block');
    $(".blue-card").attr('style', 'display: block');
  }  
});
$("#pink").click(function () {  
  var bool = $(this).hasClass('jbHdQk');
  if (!bool) {
    if ($('#blue').hasClass('jbHdQk')) {
      $('#blue').removeClass('jbHdQk');
      $('#blue').addClass('fGCWzl');
      $('#blue_check').attr('style', 'display: none');
      $(".blue-card").attr('style', 'display: none');
    } else if ($('#white').hasClass('jbHdQk')) {
      $('#white').removeClass('jbHdQk');
      $('#white').addClass('fGCWzl');
      $('#white_check').attr('style', 'display: none');
      $(".white-card").attr('style', 'display: none');
    } 
    $(this).removeClass('fGCWzl');
    $(this).addClass('jbHdQk');
    $('#pink_check').attr('style', 'display: block');
    $(".pink-card").attr('style', 'display: block');
  }  
});
$("#white").click(function () {
  var bool = $(this).hasClass('jbHdQk');
  if (!bool) {
    if ($('#blue').hasClass('jbHdQk')) {
      $('#blue').removeClass('jbHdQk');
      $('#blue').addClass('fGCWzl');
      $('#blue_check').attr('style', 'display: none');
      $(".blue-card").attr('style', 'display: none');
    } else if ($('#pink').hasClass('jbHdQk')) {
      $('#pink').removeClass('jbHdQk');
      $('#pink').addClass('fGCWzl');
      $('#pink_check').attr('style', 'display: none');
      $(".pink-card").attr('style', 'display: none');
    } 
    $(this).removeClass('fGCWzl');
    $(this).addClass('jbHdQk');
    $('#white_check').attr('style', 'display: block');
    $(".white-card").attr('style', 'display: block');
  }  
});

$("#serene_kiff").click(function () {
  var bool = $(this).hasClass('gFbcvG');
  if (!bool) {
    if ($("#serious_kiff").hasClass('gFbcvG')) {
      $("#serious_kiff").removeClass('gFbcvG');
      $("#serious_kiff").addClass('dVdEvt');
      $("#serious_kiff_text").removeClass('hbWVSK');
      $("#serious_kiff_text").addClass('cVhRmt');
      $("#card-100-value").attr('style', 'display: none;');
    } else if ($("#solid_kiff").hasClass('gFbcvG')) {
      $("#solid_kiff").removeClass('gFbcvG');
      $("#solid_kiff").addClass('dVdEvt');
      $("#solid_kiff_text").removeClass('hbWVSK');
      $("#solid_kiff_text").addClass('cVhRmt');
      $("#card-200-value").attr('style', 'display: none;');
    } else if ($("#kiff_yolo").hasClass('gFbcvG')) {
      $("#kiff_yolo").removeClass('gFbcvG');
      $("#kiff_yolo").addClass('dVdEvt');
      $("#kiff_yolo_text").removeClass('hbWVSK');
      $("#kiff_yolo_text").addClass('cVhRmt');
      $("#card-500-value").attr('style', 'display: none;');
    } 
    $(this).removeClass('dVdEvt');
    $(this).addClass('gFbcvG');
    $("#serene_kiff_text").addClass('hbWVSK');
    $("#card-50-value").attr('style', 'display: block;');
    $('#amount').val('50');
    $('#total_amount').html('Total Amount: $50');
  }
});
$("#serious_kiff").click(function () {
  var bool = $(this).hasClass('gFbcvG');
  if (!bool) {
    if ($("#serene_kiff").hasClass('gFbcvG')) {
      $("#serene_kiff").removeClass('gFbcvG');
      $("#serene_kiff").addClass('dVdEvt');
      $("#serene_kiff_text").removeClass('hbWVSK');
      $("#serene_kiff_text").addClass('cVhRmt');
      $("#card-50-value").attr('style', 'display: none;');
    } else if ($("#solid_kiff").hasClass('gFbcvG')) {
      $("#solid_kiff").removeClass('gFbcvG');
      $("#solid_kiff").addClass('dVdEvt');
      $("#solid_kiff_text").removeClass('hbWVSK');
      $("#solid_kiff_text").addClass('cVhRmt');
      $("#card-200-value").attr('style', 'display: none;');
    } else if ($("#kiff_yolo").hasClass('gFbcvG')) {
      $("#kiff_yolo").removeClass('gFbcvG');
      $("#kiff_yolo").addClass('dVdEvt');
      $("#kiff_yolo_text").removeClass('hbWVSK');
      $("#kiff_yolo_text").addClass('cVhRmt');
      $("#card-500-value").attr('style', 'display: none;');
    } 
    $(this).removeClass('dVdEvt');
    $(this).addClass('gFbcvG');
    $("#serious_kiff_text").addClass('hbWVSK');
    $("#card-100-value").attr('style', 'display: block;');
    $('#amount').val('100');
    $('#total_amount').html('Total Amount: $100');
  }
});
$("#solid_kiff").click(function () {
  var bool = $(this).hasClass('gFbcvG');
  if (!bool) {
    if ($("#serene_kiff").hasClass('gFbcvG')) {
      $("#serene_kiff").removeClass('gFbcvG');
      $("#serene_kiff").addClass('dVdEvt');
      $("#serene_kiff_text").removeClass('hbWVSK');
      $("#serene_kiff_text").addClass('cVhRmt');
      $("#card-50-value").attr('style', 'display: none;');
    } else if ($("#serious_kiff").hasClass('gFbcvG')) {
      $("#serious_kiff").removeClass('gFbcvG');
      $("#serious_kiff").addClass('dVdEvt');
      $("#serious_kiff_text").removeClass('hbWVSK');
      $("#serious_kiff_text").addClass('cVhRmt');
      $("#card-100-value").attr('style', 'display: none;');
    } else if ($("#kiff_yolo").hasClass('gFbcvG')) {
      $("#kiff_yolo").removeClass('gFbcvG');
      $("#kiff_yolo").addClass('dVdEvt');
      $("#kiff_yolo_text").removeClass('hbWVSK');
      $("#kiff_yolo_text").addClass('cVhRmt');
      $("#card-500-value").attr('style', 'display: none;');
    } 
    $(this).removeClass('dVdEvt');
    $(this).addClass('gFbcvG');
    $("#solid_kiff_text").addClass('hbWVSK');
    $("#card-200-value").attr('style', 'display: block;');
    $('#amount').val('200');
    $('#total_amount').html('Total Amount: $200');
  }
});
$("#kiff_yolo").click(function () {
  var bool = $(this).hasClass('gFbcvG');
  if (!bool) {
    if ($("#serene_kiff").hasClass('gFbcvG')) {
      $("#serene_kiff").removeClass('gFbcvG');
      $("#serene_kiff").addClass('dVdEvt');
      $("#serene_kiff_text").removeClass('hbWVSK');
      $("#serene_kiff_text").addClass('cVhRmt');
      $("#card-50-value").attr('style', 'display: none;');
    } else if ($("#serious_kiff").hasClass('gFbcvG')) {
      $("#serious_kiff").removeClass('gFbcvG');
      $("#serious_kiff").addClass('dVdEvt');
      $("#serious_kiff_text").removeClass('hbWVSK');
      $("#serious_kiff_text").addClass('cVhRmt');
      $("#card-100-value").attr('style', 'display: none;');
    } else if ($("#solid_kiff").hasClass('gFbcvG')) {
      $("#solid_kiff").removeClass('gFbcvG');
      $("#solid_kiff").addClass('dVdEvt');
      $("#solid_kiff_text").removeClass('hbWVSK');
      $("#solid_kiff_text").addClass('cVhRmt');
      $("#card-200-value").attr('style', 'display: none;');
    } 
    $(this).removeClass('dVdEvt');
    $(this).addClass('gFbcvG');
    $("#kiff_yolo_text").addClass('hbWVSK');
    $("#card-500-value").attr('style', 'display: block;');
    $('#amount').val('500');
    $('#total_amount').html('Total Amount: $500');
  }
});