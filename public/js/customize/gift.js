var design_id = "blue";
$("#blue").click(function () {
  var bool = $(this).hasClass('jbHdQk');
  design_id = "blue";
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
  design_id = "pink";
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
  design_id = "white";
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

var redirect_path = window.location.protocol + "//" + window.location.hostname;

$("#sender_name").on('focusin', function () {
  $("#sender_name").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
});
$("#sender_name").on('focusout', function () {
  if ($(this).val() == '') {
    $("#sender_name").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
  } else {
    $("#sender_name").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
  }
});
$("#beneficiary_name").on('focusin', function () {
  $("#beneficiary_name").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
});
$("#beneficiary_name").on('focusout', function () {
  if ($(this).val() == '') {
    $("#beneficiary_name").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
  } else {
    $("#beneficiary_name").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
  }
});
$("#beneficiary_email").on('focusin', function () {
  $("#beneficiary_email").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
});
$("#beneficiary_email").on('focusout', function () {
  if ($(this).val() == '') {
    $("#beneficiary_email").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
  } else {
    $("#beneficiary_email").attr('style', 'border: 1px solid rgb(224, 224, 224) !important');
  }
});
$("#place_order").click(function () {
  var data = {
    "design_id": design_id,
    "amount": $("#amount").val(),
    'sender_name': $("#sender_name").val(),
    'beneficiary_name': $("#beneficiary_name").val(),
    'beneficiary_email': $("#beneficiary_email").val(),
    'little_word': $("#message").val()
  };

  if (data.sender_name == '' || data.beneficiary_name == '' || data.beneficiary_email == '') {
    if (data.sender_name == '') {
      $("#sender_name").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
    }
    if (data.beneficiary_name == '') {
      $("#beneficiary_name").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
    }
    if (data.beneficiary_email == '') {
      $("#beneficiary_email").attr('style', 'border: 1px solid rgb(255, 51, 102) !important;');
    }
  }  else {
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'create_giftcard',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          $("#place_order").attr('style', 'display: none');
          $("#payment-form").attr('style', 'display: block!important');
          $("#customer_email").val(e.email);
        }
    });
  }
});
