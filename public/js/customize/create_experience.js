//-------------------Variables---------------------------
var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#map").addClass('disable');
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
  selectOtherMonths: true,
  dateFormat: 'dd/mm/yy'
});
$("#arrival_date").datepicker({
  showOtherMonths: true,
  selectOtherMonths: true,
  dateFormat: 'dd/mm/yy',
  minDate: 0
});
$("#payment_form").validate({
  errorPlacement: function () { },
  errorClass: "label",
  highlight: function (element, errorClass, validClass) {
      $(element).parent().addClass("error");
      $(element).parent().removeClass("success");
  },
  unhighlight: function (element, errorClass, validClass) {
      $(element).parent().removeClass("error");
      $(element).parent().addClass("success");
  }
});
var sidebar_height = $(".sidebar").height();
var sel_accoms = [], sel_acts = [];
var flags = [];
var invite_content = [];
var is_clicked_invite = false;
var order_invite = 0; var order_review = 0;
//---------------Prepare for calculate if it's a single date-----------------
if (f_count > 1) {
  var str = _flags.split("A");
  for (var i =0; i < f_count; i ++) {
    var temp = str[i].split("k"+i);  
    var price_t = temp[0].split("$");
    var flag = {
      "price": price_t[1],
      "start_day": temp[1],
      "end_day": temp[2]
    };
    flags.push(flag);
  }
} else {  
  var temp = _flags.split("k1");  
  var price_t = temp[0].split("$");
  var flag = {
    "price": price_t[1],
    "start_day": temp[1],
    "end_day": temp[2]
  };
  flags.push(flag);
}
// get_progress_status();
//-----------------Get Progress status-------------------------
// function get_progress_status() {
//   $.ajax({
//     type: 'get',
//     dataType: 'json',
//     url: 'get_progress_status',
//     data: { 'exp_id': exp_id},
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//     success: function (e) {
//       var exp = e.exp;
//       console.log(e);
//       if (exp.exp_name != " ") {
//         if (e.exp_ac_count != 0) {
//           if (e.exp_at_count != 0) {
//             $(".progress_bar").attr('style', 'width: 60%');
//             $(".submit_count").html('5');
//           } else {
//             $(".progress_bar").attr('style', 'width: 50%');
//             $(".submit_count").html('5');
//           }
//         } else {
//           $(".progress_bar").attr('style', 'width: 40%');
//           $(".submit_count").html('6');
//         }
//       } else {
//         $(".progress_bar").attr('style', 'width: 0%');
//         $(".submit_count").html('10');
//       }      
//     }
//   });
// }
//----------------Sidebar Section ----------------------
$("#general").click(function () {
  $(".progress_bar").attr('style', 'width: 0%');
  $(".submit_count").html('5');
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
  is_clicked_invite = false;
  if ($(window).width() <= 414) {
    $(".sidebar").attr('style', 'display: none;');
    $("._66jk8g").attr('style', 'display: block;');
    $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
  }
  get_progress_status();
});
$("#accomodation").click(function () {
//   get_progress_status();
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
  is_clicked_invite = false;
  if ($(window).width() <= 414) {
    $(".sidebar").attr('style', 'display: none;');
    $("._66jk8g").attr('style', 'display: block;');
    $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
  }
});
$("#experience").click(function () {
  $(".progress_bar").attr('style', 'width: 20%');
  $(".submit_count").html('4');
  $("#experience_info").attr('style', 'display: block');
  $("#general_info").attr('style', 'display: none');
  $("#accommodation_info").attr('style', 'display: none');
  if (count_c != 0 || count_a != 0) {
    $("#invite").removeClass('disabled');
  }
  $("#invite_info").attr('style', 'display: none');
  $("#review_info").attr('style', 'display: none');
  $("#payment_info").attr('style', 'display: none');

  $("#general").removeClass('active');
  $("#accomodation").removeClass('active');
  $("#invite").removeClass('active');
  $("#review").removeClass('active');
  $("#payment").removeClass('active');
  $(this).addClass('active');
  is_clicked_invite = false;
  if ($(window).width() <= 414) {
    $(".sidebar").attr('style', 'display: none;');
    $("._66jk8g").attr('style', 'display: block;');
    $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
  }
});
$("#invite").click(function () {
  $(".progress_bar").attr('style', 'width: 40%');
  $(".submit_count").html('2');
  var accoms = $(this).data('accoms');
  var acts = $(this).data('acts');
  var accom_imgs = $(this).data('ac');
  var act_imgs = $(this).data('at');
  var prices_accoms = $(this).data('acprice');
  var prices_acts = $(this).data('atprice');
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
  order_invite = order_review = 0;
  var invite_accom_count = 0; var invite_act_count = 0;
  
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'get_experience_details',
    data: { 'exp_id': exp_id },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      var date_list = [];
      var check_in_list = [];
      var check_out_list = [];
      e.forEach(sel => {
        check_in_list.push(sel.check_in);        
        check_out_list.push(sel.check_out);
        if (jQuery.inArray(sel.check_in, date_list) == -1) {
          date_list.push(sel.check_in);
        }        
      });
      for (var i = 0; i < check_out_list.length; i++) {
        if (check_out_list[i] != check_in_list[i]) {
          var diff = daysBetween(check_in_list[i], check_out_list[i]);
          for (var j = 1; j <= diff; j++) {
            var str = check_in_list[i].split("-");
            var middle_date_day = parseInt(str[2]) + j;
            var middle_date = str[0] + "-" + str[1] + "-" + middle_date_day;
            if (jQuery.inArray(middle_date, date_list) == -1) {
              date_list.push(middle_date);
            }
          }
        }
      }      
      var exact_dates = date_list.sort();
      var total_content = "", mail_total_content = "";
      var total_acb_price = 0, total_atb_price = 0, total_aca_price = 0, total_ata_price = 0;
      var content = [], mail_content = []; var match_imgs = [];
      
      for (var k = 0; k < exact_dates.length; k++) {
        var title = makeTitle(exact_dates[k], "invite");
        content[k] = "<div class='single_sel'><h3>" + title + "</h3>";
        mail_content[k] = "<div class='single_sel'><h3>" + title + "</h3>";
        e.forEach(exp => {
          if (exp.type == "accommodation") {
            if (exp.check_in == exact_dates[k]) {
              b_price = exp.d_b_price.split("$");
              a_price = exp.d_a_price.split("$");
              total_acb_price += parseInt(b_price[1]);
              total_aca_price += parseInt(a_price[1]);
              accoms.forEach(accom => {
                if (accom.id == exp.type_id) {
                  invite_accom_count ++;
                  content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>";                  
                  accom_imgs.forEach(img => {
                    if (img.accom_id == accom.id) {
                      match_imgs.push(img);
                      content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                    }
                  });
                  content[k] += "</ul>";
                  mail_content[k] += "<div class='part_sel'><img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";                  
                  content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                  prices_accoms.forEach(price => {
                    if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                      content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>"; 
                      mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>";                      
                    }
                  });
                }
              });
              content[k] += "</div></div>"; 
              mail_content[k] += "</div></div>";              
            } else if (exp.check_out == exact_dates[k]) {
              accoms.forEach(accom => {
                if (accom.id == exp.type_id) {
                  invite_accom_count ++;
                  content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>"; mail_content[k] += "<div class='part_sel'>";
                  accom_imgs.forEach(img => {
                    if (img.accom_id == accom.id) {
                      match_imgs.push(img);
                      content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                    }
                  });
                  content[k] += "</ul>";
                  mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                  content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                  prices_accoms.forEach(price => {
                    if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                      content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>"; mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>";
                    }
                  });
                }
              });
              content[k] += "</div></div>"; mail_content[k] += "</div></div>";              
            } else if ((daysBetween(exact_dates[k], exp.check_in) < 0) && (daysBetween(exact_dates[k], exp.check_out) > 0)) {              
              accoms.forEach(accom => {
                if (accom.id == exp.type_id) {
                  invite_accom_count ++;
                  content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>"; mail_content[k] = "<div class='part_sel'>";
                  accom_imgs.forEach(img => {
                    if (img.accom_id == accom.id) {
                      match_imgs.push(img);
                      content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                    }
                  });
                  content[k] += "</ul>";
                  mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                  content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                  prices_accoms.forEach(price => {
                    if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                      content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>"; mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                    }
                  });
                }
              });
            }
          } else if (exp.type == "activity") {
            if (exp.check_in == exact_dates[k]) {              
              b_price = exp.d_b_price.split("$");
              a_price = exp.d_a_price.split("$");
              total_atb_price += parseInt(b_price[1]);
              total_ata_price += parseInt(a_price[1]);
              acts.forEach(act => {
                if (act.id == exp.type_id) {
                  invite_act_count ++;
                  content[k] += "<div class='part_act_sel'>Activity<div class='part_sel'><ul class='gallery-slideshow'>";
                  mail_content[k] += "<div class='part_act_sel'><h3>Activity</h3><div class='part_sel'>";
                  act_imgs.forEach(img => {
                    if (img.act_id == act.id) {
                      match_imgs.push(img);
                      content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                    }
                  });
                  content[k] += "</ul>";
                  mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + act.category + "</h4><p>" + act.name + "</p></div>";
                  content[k] += "<div class='gallery-info'>" + "<h4>" + act.category + "</h4><p>" + act.name + "</p></div>";
                  prices_acts.forEach(price => {
                    if ((price.check_in_date == exact_dates[k]) && (price.activity_id == act.id)) {
                      mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                      content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                    }
                  });
                }
              });
              content[k] += "</div></div>"; mail_content[k] += "</div></div>";
            }
          }
        });
        total_content += content[k]; mail_total_content += mail_content[k];        
      }
      total_content += "<script>$('.gallery-selected').slideshow({interval: 5000,width: 170,height: 135});$('.gallery-slideshow').slideshow({interval: 5000,width: 170,height: 135});</script>";
      invite_content = mail_total_content;      
      $(".review_form").html(total_content);
      $("#accom_count").val(invite_accom_count);
      $("#act_count").val(invite_act_count);
      console.log(invite_accom_count, invite_act_count);
      is_clicked_invite = true;
      $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'get_experience',
        data: { 'exp_id': exp_id },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          $(".review_exp").html(e.exp_name);
        }
      });

      $(".review_period").html(makeSimpleTitle(exact_dates[0]) + "-" + makeSimpleTitle(exact_dates[exact_dates.length - 1]));
      $(".review_accom_ap").html("&nbsp;&nbsp;<b>$" + total_aca_price + "</b>");
      $(".review_accom_bp").html("<del>$" + total_acb_price + "</del>");
      $(".review_act_ap").html("&nbsp;&nbsp;<b>$" + total_ata_price + "</b>");
      $(".review_act_bp").html("<del>$" + total_atb_price + "</del>");
      var total_new = total_aca_price + total_ata_price;
      var total_old = total_acb_price + total_atb_price;
      $(".new_price").html("<b>$" + total_new + "</b>");
      $(".old_price").html("<del>$" + total_old + "</del>&nbsp;&nbsp;");
      $(".payment_price").html("Total: $" + total_new);
    }
  });

  $("#review").removeClass('disabled');
});
$("#review").click(function () {
  $(".progress_bar").attr('style', 'width: 80%');
  $(".submit_count").html('2');
  var accoms = $(this).data('accoms');
  var acts = $(this).data('acts');
  var accom_imgs = $(this).data('ac');
  var act_imgs = $(this).data('at');
  var prices_accoms = $(this).data('acprice');
  var prices_acts = $(this).data('atprice');
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
  order_invite = order_review = 0;
  var review_accom_count = 0; var review_act_count = 0;
  if (is_clicked_invite == false) {
    invite_content = [];
    $(".review_form").empty();
    $.ajax({
      type: 'get',
      dataType: 'json',
      url: 'get_experience_details',
      data: { 'exp_id': exp_id },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (e) {
        var date_list = [];
        var check_in_list = [];
        var check_out_list = [];
        e.forEach(sel => {
          check_in_list.push(sel.check_in);        
          check_out_list.push(sel.check_out);
          if (jQuery.inArray(sel.check_in, date_list) == -1) {
            date_list.push(sel.check_in);
          }        
        });
        for (var i = 0; i < check_out_list.length; i++) {
          if (check_out_list[i] != check_in_list[i]) {
            var diff = daysBetween(check_in_list[i], check_out_list[i]);
            for (var j = 1; j <= diff; j++) {
              var str = check_in_list[i].split("-");
              var middle_date_day = parseInt(str[2]) + j;
              var middle_date = str[0] + "-" + str[1] + "-" + middle_date_day;
              if (jQuery.inArray(middle_date, date_list) == -1) {
                date_list.push(middle_date);
              }
            }
          }
        }
              
        var exact_dates = date_list.sort();
        var total_content = "", mail_total_content = "";
        var total_acb_price = 0, total_atb_price = 0, total_aca_price = 0, total_ata_price = 0;
        var content = [], mail_content = []; var match_imgs = [];      
        for (var k = 0; k < exact_dates.length; k++) {
          var title = makeTitle(exact_dates[k], "review");
          content[k] = "<div class='single_sel'><h3>" + title + "</h3>";
          mail_content[k] = "<div class='single_sel'><h3>" + title + "</h3>";
          e.forEach(exp => {          
            if (exp.type == "accommodation") {
              if (exp.check_in == exact_dates[k]) {
                b_price = exp.d_b_price.split("$");
                a_price = exp.d_a_price.split("$");
                total_acb_price += parseInt(b_price[1]);
                total_aca_price += parseInt(a_price[1]);
                accoms.forEach(accom => {
                  if (accom.id == exp.type_id) {
                    review_accom_count ++;
                    content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>";                  
                    accom_imgs.forEach(img => {
                      if (img.accom_id == accom.id) {
                        match_imgs.push(img);
                        content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                      }
                    });
                    content[k] += "</ul>";
                    mail_content[k] += "<div class='part_sel'><img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";                  
                    content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                    prices_accoms.forEach(price => {
                      if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                        content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>"; 
                        mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>";                      
                      }
                    });
                  }
                });
                content[k] += "</div></div>"; 
                mail_content[k] += "</div></div>";              
              } else if (exp.check_out == exact_dates[k]) {
                accoms.forEach(accom => {
                  if (accom.id == exp.type_id) {
                    review_accom_count ++;
                    content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>"; mail_content[k] += "<div class='part_sel'>";
                    accom_imgs.forEach(img => {
                      if (img.accom_id == accom.id) {
                        match_imgs.push(img);
                        content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                      }
                    });
                    content[k] += "</ul>";
                    mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                    content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                    prices_accoms.forEach(price => {
                      if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                        content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>"; mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div>";
                      }
                    });
                  }
                });
                content[k] += "</div></div>"; mail_content[k] += "</div></div>";              
              } else if ((daysBetween(exact_dates[k], exp.check_in) < 0) && (daysBetween(exact_dates[k], exp.check_out) > 0)) {
                accoms.forEach(accom => {
                  if (accom.id == exp.type_id) {
                    review_accom_count ++;
                    content[k] += "Accommodation<div class='part_sel'><ul class='gallery-selected'>"; mail_content[k] = "<div class='part_sel'>";
                    accom_imgs.forEach(img => {
                      if (img.accom_id == accom.id) {
                        match_imgs.push(img);
                        content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                      }
                    });
                    content[k] += "</ul>";
                    mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                    content[k] += "<div class='gallery-info'>" + "<h4>" + accom.name + "</h4><label>" + accom.full_address + "</label><p>" + accom.category + "</p></div>";
                    prices_accoms.forEach(price => {
                      if ((price.check_in_date == exact_dates[k]) && (price.accomodation_id == accom.id)) {
                        content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>"; mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                      }
                    });
                  }
                });
              }
            } else if (exp.type == "activity") {
              if (exp.check_in == exact_dates[k]) {
                b_price = exp.d_b_price.split("$");
                a_price = exp.d_a_price.split("$");
                total_atb_price += parseInt(b_price[1]);
                total_ata_price += parseInt(a_price[1]);
                acts.forEach(act => {
                  if (act.id == exp.type_id) {
                    review_act_count ++;
                    content[k] += "<div class='part_act_sel'>Activity<div class='part_sel'><ul class='gallery-slideshow'>";
                    mail_content[k] += "<div class='part_act_sel'><h3>Activities</h3><div class='part_sel'>";
                    act_imgs.forEach(img => {
                      if (img.act_id == act.id) {
                        match_imgs.push(img);
                        content[k] += "<li><img src='" + img.path + "' style='width: 170px; height: 135px;'/>" + "</li>";
                      }
                    });
                    content[k] += "</ul>";
                    mail_content[k] += "<img src='http://www.insidersuite.com" + match_imgs[0].path + "' style='width: 170px; height: 135px;'/><div class='gallery-info'>" + "<h4>" + act.category + "</h4><p>" + act.name + "</p></div>";
                    content[k] += "<div class='gallery-info'>" + "<h4>" + act.category + "</h4><p>" + act.name + "</p></div>";
                    prices_acts.forEach(price => {
                      if ((price.check_in_date == exact_dates[k]) && (price.activity_id == act.id)) {
                        mail_content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                        content[k] += "<div class='gallery-price-info'>" + "<p><b>" + price.price_a_discount + "$/pers</b></p></div></div>";
                      }
                    });
                  }
                });
                content[k] += "</div></div>"; mail_content[k] += "</div></div>";
              }
            }
          });
          total_content += content[k]; mail_total_content += mail_content[k];        
        }
        total_content += "<script>$('.gallery-selected').slideshow({interval: 5000,width: 170,height: 135});$('.gallery-slideshow').slideshow({interval: 5000,width: 170,height: 135});</script>";
        invite_content = mail_total_content;        
        $(".review_form").html(total_content);
        $("#accom_count").val(review_accom_count);
        $("#act_count").val(review_act_count);
        console.log(review_accom_count, review_act_count);
        $.ajax({
          type: 'get',
          dataType: 'json',
          url: 'get_experience',
          data: { 'exp_id': exp_id },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (e) {
            $(".review_exp").html(e.exp_name);
          }
        });

        $(".review_period").html(makeSimpleTitle(exact_dates[0]) + "-" + makeSimpleTitle(exact_dates[exact_dates.length - 1]));
        $(".review_accom_ap").html("&nbsp;&nbsp;<b>$" + total_aca_price + "</b>");
        $(".review_accom_bp").html("<del>$" + total_acb_price + "</del>");
        $(".review_act_ap").html("&nbsp;&nbsp;<b>$" + total_ata_price + "</b>");
        $(".review_act_bp").html("<del>$" + total_atb_price + "</del>");
        var total_new = total_aca_price + total_ata_price;
        var total_old = total_acb_price + total_atb_price;
        $(".new_price").html("<b>$" + total_new + "</b>");
        $(".old_price").html("<del>$" + total_old + "</del>&nbsp;&nbsp;");
        $(".payment_price").html("Total: $" + total_new);
      }
    });
  }
  $(".progress_bar").attr('style', 'width: 80%');
  $(".submit_count").html('2');
  $("#payment").removeClass('disabled');
});
$("#payment").click(function () {
  $(".progress_bar").attr('style', 'width: 90%');
  $(".submit_count").html('1');
  $("#payment img:last-child").remove();
  $("#payment_info").attr('style', 'display: flex');
  $("#invite_info").attr('style', 'display: none');
  $("#experience_info").attr('style', 'display: none');
  $("#general_info").attr('style', 'display: none');
  $("#accommodation_info").attr('style', 'display: none');
  $("#review_info").attr('style', 'display: none');
  is_clicked_invite = false;
  $("#invite").removeClass('active');
  $("#general").removeClass('active');
  $("#accomodation").removeClass('active');
  $("#experience").removeClass('active');
  $("#review").removeClass('active');
  $(this).addClass('active');
});
$(".map_link").click(function () {
  $(".map_link").attr('style', 'display: none;');
  $(".photo_link").attr('style', 'display: block;');
  if ($(".map_info").hasClass('active')) {
    $(".map_info").removeClass('active');
    $("#map").removeClass('show');
    $(".headBg").addClass('show');
    $(".headBg").removeClass('disable');
    $("#map").addClass('disable');
  } else {
    $(".map_info").addClass('active');
    $("#map").addClass('show');
    $("#map").removeClass('disable');
    $(".headBg").addClass('disable');
    $(".headBg").removeClass('show');
  }
});
$(".photo_link").click(function () {
   $(".photo_link").attr('style', 'display: none;');
   $(".map_link").attr('style', 'display: block;');
   if ($(".map_info").hasClass('active')) {
    $(".map_info").removeClass('active');
    $("#map").removeClass('show');
    $(".headBg").addClass('show');
    $(".headBg").removeClass('disable');
    $("#map").addClass('disable');
  } else {
    $(".map_info").addClass('active');
    $("#map").addClass('show');
    $("#map").removeClass('disable');
    $(".headBg").addClass('disable');
    $(".headBg").removeClass('show');
  }
});
$(".dropdown-toggle").click(function () {
  $(".dropdown").addClass('open');
});
//----------------------General information ------------------------
$("#guests").click(function () {
  $(".dsssji").attr('style', 'display: block; width:100%;');
});
$("#adults_increase").click(function () {
  $("#adults_decrease").attr("disabled", false);
  var count =  $("#adults").val();
  if (count != 15) {
    count ++;
    $("#adults").val(count);    
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
  } else {
    count = 1;
    $("#adults_decrease").attr("disabled", true);
  }
});
$("#children_increase").click(function () {
  $("#children_decrease").attr("disabled", false);
  var count =  $("#children").val();
  if (count != 15) {
    count ++;
    $("#children").val(count);    
  } else {
    count = 0;
    $("#children_increase").attr("disabled", true);
  }
});
$("#children_decrease").click(function () {
  $("#children_increase").attr("disabled", false);
  var count =  $("#children").val();
  if (count != 0) {
    count --;
    $("#children").val(count);
  } else {
    count = 0;
    $("#children_decrease").attr("disabled", true);
  }
});
$("#infants_increase").click(function () {
  $("#infants_decrease").attr("disabled", false);
  var count =  $("#infants").val();
  if (count != 15) {
    count ++;
    $("#infants").val(count);    
  } else {
    count = 0;
    $("#infants_increase").attr("disabled", true);
  }
});
$("#infants_decrease").click(function () {
  $("#infants_increase").attr("disabled", false);
  var count =  $("#infants").val();
  if (count != 0) {
    count --;
    $("#infants").val(count);
  } else {
    count = 0;
    $("#infants_decrease").attr("disabled", true);
  }
});
$("#guest_apply").click(function() {
  var guests = parseInt($("#adults").val()) + parseInt($("#children").val()) + parseInt($("#infants").val());  
  $("#guests").val(guests + " guests");
  $(".dsssji").attr('style', 'display: none;');
});
var form = document.getElementById('input_form');
form.addEventListener('submit', function (event) {
  event.preventDefault();
  if ($("#input_form").valid()) {
    var str = $("#guests").val();
    var guests_nb = str.split(" guests");
    var data = {
      "city": $("#city").val(),
      "arrival_date": $("#arrival_date").val(),
      "guests_nb": guests_nb[0],
      "exp_name": $("#experience_title").val()
    };
    console.log(data);
    $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'save_general_info',
      data: data,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (e) {
        exp_id = e.id;
        if (type == "new") {
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'save_favourite',
            data: { 'exp_id': e.id },
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
              $(".notification").attr('style', 'display:block;');
              $(".notification").html(e);
              $(".notification_short").attr('style', 'display:block;');
              $(".notification_short").html(e);
          	  $("#accomodation").removeClass('disabled');
			  $("#accomodation img:last-child").remove();
			  $("#experience img:last-child").remove();
              $("#experience").removeClass('disabled');
            }
          });
        }
        $("#accomodation").trigger("click");
        $("#accomodation").removeClass('disabled');
        $("#experience").removeClass('disabled');
        $("#accomodation img:last-child").remove();
	    $("#experience img:last-child").remove(); 
	    $(".progress_bar").attr('style', 'width: 10%');
        $(".submit_count").html('5');
      }
    });
  } else {
    alert("please input all the information.");
  }
});
//---------------------Experience Section ------------------------
var accom_selected_day1 = "", accom_selected_day2 = "";
var accom = {};
var exp_accom = [];
var head_imgs = [];
origin_prices = origin_prices.replace(/&quot;/g, '"');
var prices = JSON.parse(origin_prices);
$(".accomodation").click(function () {
  accom_selected_day1 = "";
  accom_selected_day2 = "";
  accom = $(this).data('source');
  imgs_accom = $(this).data('img');
  exp_accom = $(this).data('exp');
  var practicals = $(this).data('practical');

  practicals.forEach(practical => {
    if (practical.accom_id == accom.id) {
      $("#check_in").val(practical.check_in);
      $("#check_out").val(practical.check_out);
      if (practical.breakfast == "false") {
        $("#breakfast_access").parent().parent().attr('style', 'display: none');
      } else {
        $("#breakfast_access").val(practical.breakfast_t);
      }
      if (practical.jacuzzi_access == "false") {
        $("#jacuzzi_access").parent().parent().attr('style', 'display: none');
      } else {
        $("#jacuzzi_access").val(practical.jacuzzi_t);
      }
      if (practical.gym_access == "false") {
        $("#gym").parent().parent().attr('style', 'display: none');
      } else {
        $("#gym").val(practical.gym_t);
      }
      $(".accomodation_note").val(practical.note);
    }
  });
  head_imgs = [];
  imgs_accom.forEach(img => {
    if (img.accom_id == accom.id) {
      var path = { path: img.path };
      head_imgs.push(path);
    }
  });
  setMap(accom.location_latitude, accom.location_longtitude, "map");

  $(".headBg").attr('data-bg', accom.path);
  $(".headBg").attr('style', "background-image:url(" + accom.path + ")");
  $(".modal2-place").html(accom.name);
  $(".modal2-address").html(accom.full_address);
  $(".part1-content").html(accom.content);
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  if (dd < 10) { dd = '0' + dd }
  if (mm < 10) { mm = '0' + mm }
  today = yyyy + '-' + mm + '-' + dd;

  var ndate = [];
  var min_price = 1000000;

  for (var i = 0; i < prices.length - 1; i++) {
    if (prices[i].accomodation_id == accom.id) {
      if (min_price > parseInt(prices[i].price_a_discount)) {
        min_price = prices[i].price_a_discount;
      }
    }
  }
  prices.forEach(price => {
    if (price.accomodation_id == accom.id && price.nb_available != 0) {
      ndate.push(price.check_in_date);
    }
    if (price.check_in_date == today) {
      $("#accom_discounted_price").html("$" + price.price_a_discount);
      $("#accom_origin_price").html("$" + price.price_b_discount);
      $("#accom_discont").html(Math.round(price.discount * 100, 2) + "%");
    } else if (price.check_in_date != today && price.price_a_discount == min_price) {
      $("#accom_discounted_price").html("$" + min_price);
      $("#accom_origin_price").html("$" + price.price_b_discount);
      $("#accom_discont").html(Math.round(price.discount * 100, 2) + "%");
    }
  });

  // make dates array extract block dates  
  var enableDates = [];  
  for (var i = 0; i < ndate.length; i++) {
    var today = convertDate(new Date());
    var diff = daysBetween(today, ndate[i]);
    
    if (diff >= 0) {
      enableDates.push(ndate[i]);
    } else {
      enableDates.push("2900-01-01");
    }
  }

  // find the nearest date of arrival date 
  var arrival_date = $("#arrival_date").val();
  console.log("original form arrival date: ", arrival_date);
  var date_str = arrival_date.split("/");
  str_date = date_str[2] + "-" + date_str[1] + "-" + date_str[0];
  console.log("arrival_date: ",str_date);
  var count = 0; 
  enableDates.forEach(sel => {
    if (daysBetween(str_date, sel) <= 0) {
        count ++;
    } 
  });
  console.log("count: ",count);
  console.log("accommodation available dates: ", enableDates);
  var diff = daysBetween(str_date, today);
  console.log("DaysBetween: ", diff);
  var diff_plus = daysBetween(str_date, enableDates[0]);
  var k = 0;
  for (var j = 0; j < enableDates.length; j++) {
      if (count > 0) {
        if (0 >= daysBetween(str_date, enableDates[j])) {
            if (diff <= daysBetween(str_date, enableDates[j])) {
                console.log("nearer than before: ", enableDates[j]);
                console.log("current min: ", diff);
              diff = daysBetween(str_date, enableDates[j]);
              console.log("new min: ", diff);
              k = j;
            }
        }
      } else {
          if (0 < daysBetween(str_date, enableDates[j])) {
              if (daysBetween(str_date, enableDates[j]) < diff_plus) {
                diff_plus = daysBetween(str_date, enableDates[j]);
                k = j;
              }
          }
      }
  }  
  str_date = enableDates[k];
  
  //initialization of calendar
  $('.calender').pignoseCalendar({
    multiple: true,
    lang: 'en',
    date: moment(str_date),
    theme: 'light',
    format: 'YYYY-MM-DD',
    modal: false,
    initialize: false,
    enabledDates: enableDates,
    default: { str_date },
    select: function (date, context) {
      /**
       * @params this Element
       * @params date moment[]
       * @params context PignoseCalendarContext
       * @returns void
       */

      // This is selected button Element.
      var $this = $(this);

      // You can get target element in `context` variable, This element is same `$(this)`.
      var $element = context.element;

      // You can also get calendar element, It is calendar view DOM.
      var $calendar = context.calendar;

      // Selected dates (start date, end date) is passed at first parameter, And this parameters are moment type.
      // If you unselected date, It will be `null`.       
      calendarEvent(date[0], date[1]);
    }
  });
  // show experiences
  var content = '';
  exp_accom.forEach(exp => {
    if (exp.accom_id == accom.id) {
      var temp = "<div class='part1-tab-content-detail' id='" + exp.accom_id + "'><img src='" + exp.path + "' style='width: 110px; height: 70px;'/>" + "<p>" + exp.title + "</p></div>";
      content += temp;
    }
  });
  content += "<script>$('.part1-tab-content-detail').click(function () {var id = $(this).attr('id'); showExperience(id);});</script>";
  $(".part1-tab-content").html(content);
  $("#myModal2").modal('show');
});
function showExperience(id) {
  var data = $(".experience-content").data('id');
  var basic_data = [], breakfast_data = [], jacuzzi_data = [], room_data = [], outdoor_data = [];
  $(".basic_data_").html(""); $(".breakfast_").html(""); $(".jacuzzi_").html(""); $(".room_").html(""); $(".outdoor_").html(outdoor_);
  
  data.forEach(sel => {
    if (sel.exp_id == id) {
      if (sel.category == "main") {
        basic_data.push(sel.path);
      } else if (sel.category == "breakfast") {
        breakfast_data.push(sel.path);
      } else if (sel.category == "jacuzzi") {
        jacuzzi_data.push(sel.path);
      } else if (sel.category == "room") {
        room_data.push(sel.path);
      } else if (sel.category == "outdoor") {
        outdoor_data.push(sel.path);
      }
    }
  });
  
  if (basic_data.length != 0) {
    var basic_ = "";
    basic_ = "<div class='fDEzJd'><img class='image_' src='" + basic_data[0] + "'></div>";
    basic_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < basic_data.length; i ++) {      
      basic_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + basic_data[i] + "'></div></div></div>";
    }
    basic_ += "</div>"
    $(".basic_").html(basic_);
  }
  if (breakfast_data.length != 0) {
    var breakfast_ = "";
    breakfast_ = "<h2 class='jhDePP'>Breakfast</h2><div class='fDEzJd'><img class='image_' src='" + breakfast_data[0] + "'></div>";
    breakfast_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < breakfast_data.length; i ++) {      
      breakfast_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + breakfast_data[i] + "'></div></div></div>";
    }
    breakfast_ += "</div>"
    $(".breakfast_").html(breakfast_);
  }
  if (breakfast_data.length != 0) {
    var breakfast_ = "";
    breakfast_ = "<h2 class='jhDePP'>Breakfast</h2><div class='fDEzJd'><img class='image_' src='" + breakfast_data[0] + "'></div>";
    breakfast_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < breakfast_data.length; i ++) {      
      breakfast_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + breakfast_data[i] + "'></div></div></div>";
    }
    breakfast_ += "</div>"
    $(".breakfast_").html(breakfast_);
  }
  if (jacuzzi_data.length != 0) {
    var jacuzzi_ = "";
    jacuzzi_ = "<h2 class='jhDePP'>Jacuzzi spa</h2><div class='fDEzJd'><img class='image_' src='" + jacuzzi_data[0] + "'></div>";
    jacuzzi_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < jacuzzi_data.length; i ++) {      
      jacuzzi_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + jacuzzi_data[i] + "'></div></div></div>";
    }
    jacuzzi_ += "</div>"
    $(".jacuzzi_").html(jacuzzi_);
  }
  if (room_data.length != 0) {
    var room_ = "";
    room_ = "<h2 class='jhDePP'>Room</h2><div class='fDEzJd'><img class='image_' src='" + room_data[0] + "'></div>";
    room_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < room_data.length; i ++) {      
      room_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + room_data[i] + "'></div></div></div>";
    }
    room_ += "</div>"
    $(".room_").html(room_);
  }
  if (outdoor_data.length != 0) {
    var outdoor_ = "";
    outdoor_ = "<h2 class='jhDePP'>Outdoor</h2><div class='fDEzJd'><img class='image_' src='" + outdoor_data[0] + "'></div>";
    outdoor_ += "<div class='row isksGx' gutter='10'>";
    for (var i = 1; i < outdoor_data.length; i ++) {      
      outdoor_ += "<div class='col-xs-12 col-md-6 btgdIN'><div class='fDEzJd'><div class='gKZlhh'><img class='image_' src='" + outdoor_data[i] + "'></div></div></div>";
    }
    outdoor_ += "</div>"
    $(".room_").html(outdoor_);
  }
  $(".navbar").attr('style', 'display: none');
  $(".modal-experience-place").html("Welcome to " + accom.name + " Hotel*****");
  $("#modal-experience").modal('show');
}
$("#discover_hotel").click(function () {
     showExperience(accom.id);
});
$("#modal-experience").on("hidden.bs.modal", function () {
  // put your default event here
  $(".navbar").attr('style', 'display: block;');
});
$(".experience-model-close").click(function () {
  $(".navbar").attr('style', 'display: block;');
  $("#modal-experience").modal('hide');
});
$("#save_accom").click(function () {
    console.log(count_a);
    console.log(sel_accoms);
  if (count_a != sel_accoms.length) {
    sel_accoms.forEach(sel => {
      var x = document.getElementById(sel);
      var y = x.getElementsByTagName("div");
      var z = y[5].getElementsByTagName("span");
      var res_ = y[5].getElementsByTagName("del");
      var res = z[1].getElementsByTagName("b");      
      var str1 = $("#check_in" + sel).html().split("/");
      var check_in = str1[2] + "-" + str1[1] + "-" + str1[0];
      var str2 = $("#check_out" + sel).html().split("/");
      var check_out = str2[2] + "-" + str2[1] + "-" + str2[0];
      var data = {
        'experience_id': exp_id,
        'type_id': $("#"+sel).data('id'),
        'check_in': check_in,
        'check_out': check_out,
        'd_a_price': res[0].innerHTML,
        'd_b_price': res_[0].innerHTML,
        'discount': z[2].innerHTML,
        'type': 'accommodation'
      };
      flags.forEach(flag => {
        if (flag.price == data.d_a_price.replace('$', '') && flag.start_day == data.check_in) {
          data.check_out = flag.end_day;
        }
      });
      console.log(data);
      $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'create_accom_info',
        data: data,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          console.log(e);
        }
      });
    });
    $("#experience").trigger("click");
    $(".progress_bar").attr('style', 'width: 20%');
    $(".submit_count").html('4');
  } else {
    $("#experience").trigger("click");
  }
});
$("#undo_accom").click(function () {
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'undo_accom_info',
    data: { 'experience_id': exp_id },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      location.reload(true);
    }
  });
});
var calendarEvent = function (first_d, end_d) {
  if (end_d != null) { // if the second date is available
    if (first_d != null) {
      var total_a_discount = 0, total_b_discount = 0; //variables for period total prices
      var period = []; //variable for contain all dates which user requested
      // check the period is linked with next month
      period.push($.datepicker.formatDate('yy-mm-dd', new Date(first_d._d))); // push the first date of requested into the period variable
      var str_start = $.datepicker.formatDate('yy-mm-dd', new Date(first_d._d)).split("-");
      if (end_d._i) {
        var str_end = end_d._i.split("-"); // returns day-1
        var end_month = parseInt(str_end[1]); // get real month
        var end_date = parseInt(str_end[2]); // get real date
      } else {
        var str_end = $.datepicker.formatDate('yy-mm-dd', new Date(end_d._d)).split("-"); // returns day-1
        var end_month = parseInt(str_end[1]); // get real month
        var end_date = parseInt(str_end[2]); // get real date
      }
      //case of same month
      if (str_start[1] == end_month) {
        var period_length = end_date - str_start[2] + 1;
        $("#participants_adult").html(period_length);
        var middle_d = "";
        for (var i = 1; i < period_length; i++) {
          var day = parseInt(str_start[2]) + parseInt(i);
          if (day < 10) {
            middle_d = str_start[0] + "-" + str_start[1] + "-" + "0" + day;
          } else {
            middle_d = str_start[0] + "-" + str_start[1] + "-" + day;
          }
          period.push(middle_d);
        }
      } else { // case of next month
        var date = new Date();
        var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
        var str_lastday = $.datepicker.formatDate('yy-mm-dd', lastDay).split("-");
        var middle_d = "";
        var length = str_lastday[2] - str_start[2] + 1;
        for (var i = 1; i < length; i++) {
          var day = parseInt(str_start[2]) + parseInt(i);
          middle_d = str_start[0] + "-" + str_start[1] + "-" + day;
          period.push(middle_d);
        }
        for (var j = 0; j < end_date; j++) {
          if (j + 1 < 10) { middle_d = str_end[0] + "-" + str_end[1] + "-" + "0" + (j + 1); }
          else { middle_d = str_end[0] + "-" + str_end[1] + "-" + (j + 1); }
          period.push(middle_d);
        }
      }
      // sum of prices    
      period.forEach(p => {
        prices.forEach(price => {
          if (price.check_in_date == p && price.accomodation_id == accom.id) {
            total_a_discount += parseInt(price.price_a_discount);
            total_b_discount += parseInt(price.price_b_discount);
          }
        });
      });
      var flag = {
        'price': total_a_discount,
        'start_day': period[0],
        'end_day': period[period.length - 1]
      };
      flags.push(flag);
      accom_selected_day1 = period[0];
      accom_selected_day2 = period[period.length - 1];
      $("#participants_adult").html(period.length);
      $("#accom_discounted_price").html("$" + total_a_discount);
      $("#accom_origin_price").html("$" + total_b_discount);
      $("#accom_discont").html(Math.round((total_b_discount - total_a_discount) / total_b_discount * 100, 2) + "%");
    } else if (first_d == null) { // select the single date after current date
      var flag = {
        'price': "",
        'start_day': "",
        'end_day': ""
      };
      var _end_d = end_d._i;
      accom_selected_day1 = _end_d;
      var d = parseInt(_end_d.split("-")[2]) + 1;
      if (d < 10) {
        accom_selected_day2 = _end_d.split("-")[0] + "-" + _end_d.split("-")[1] + "-" + "0" + d;
      } else {
        accom_selected_day2 = _end_d.split("-")[0] + "-" + _end_d.split("-")[1] + "-" + d;
      }
      flag.start_day = _end_d.split("-")[0] + "-" + _end_d.split("-")[1] + "-" + _end_d.split("-")[2];
      flag.end_day = _end_d.split("-")[0] + "-" + _end_d.split("-")[1] + "-" + _end_d.split("-")[2];
      prices.forEach(price => {
        if (price.check_in_date == _end_d) {
          flag.price = price.price_a_discount;
          $("#participants_adult").html('1');
          $("#accom_discounted_price").html("$" + price.price_a_discount);
          $("#accom_origin_price").html("$" + price.price_b_discount);
          $("#accom_discont").html(Math.round(price.discount * 100, 2) + "%");
        }
      });
      flags.push(flag);
    }
  } else { // select the single date before current date
    var flag = {
      'price': "",
      'start_day': "",
      'end_day': ""
    };
    var start_d = first_d._i;
    accom_selected_day1 = start_d;
    var day2_date = parseInt(start_d.split("-")[2]) + 1;
    if (day2_date < 10) {
      accom_selected_day2 = start_d.split("-")[0] + "-" + start_d.split("-")[1] + "-" + "0" + day2_date;
    } else {
      accom_selected_day2 = start_d.split("-")[0] + "-" + start_d.split("-")[1] + "-" + day2_date;
    }
    flag.start_day = start_d.split("-")[0] + "-" + start_d.split("-")[1] + "-" + start_d.split("-")[2];
    flag.end_day = start_d.split("-")[0] + "-" + start_d.split("-")[1] + "-" + start_d.split("-")[2];
    prices.forEach(price => {
      if (price.check_in_date == start_d) {
        flag.price = price.price_a_discount;
        $("#participants_adult").html('1');
        $("#accom_discounted_price").html("$" + price.price_a_discount);
        $("#accom_origin_price").html("$" + price.price_b_discount);
        $("#accom_discont").html(Math.round(price.discount * 100, 2) + "%");
      }
    });
    flags.push(flag);
  }
};

$(".add_trip_btn").click(function () {
  if (accom_selected_day1 != '') {
    var content = create_selected_html();
    sel_accoms.push(sel_c);
    content += "<script>$('.slide-like').click(function () {var id = $(this).attr('id');removeSelection(id, 'accoms');});</script>";
    $(".selected_content").append(content);
    // $('#' + sel_c + '.gallery-slideshow').slideshow({interval: 5000,width: 205,height: 170});
    $('.gallery-slideshow').slideshow({interval: 5000,width: 205,height: 170});
    $("#myModal2").modal('hide');
  } else { alert("please select the date on the calendar."); }
});
var create_selected_html = function () {
  var str1 = accom_selected_day1.split("-");
  var day1 = str1[2] + "/" + str1[1] + "/" + str1[0];
  var str2 = accom_selected_day2.split("-");
  var day2 = str2[2] + "/" + str2[1] + "/" + str2[0];
  sel_c++;
  var temp = "";
  temp = "<div class='single_content detail accomodation' data-id='" + accom.id + "'" + "id='" + sel_c + "'><label>From <span id='check_in" + sel_c + "'>" + day1 + "</span> To <span id='check_out" + sel_c + "'>" + day2 + "</span></label>";
  temp += "<ul class='gallery-slideshow'>";
  head_imgs.forEach(img => {
    temp += "<li><img src='" + img.path + "' style='width: 205px; height: 170px;'/><i class='fas fa-heart slide-like' style='color:rgb(255, 51, 102) !important;' data-id='" + accom.id + "'" + "id='" + sel_c + "'></i></li>";
  });
  temp += "</ul>";
  temp += "<div class='detail-info'><div class='location_name'><p>" + accom.full_address + "</p>" + "<p>" + accom.name + "</p></div></div>";
  temp += "<div class='eUhMAS'><span>Total: </span><span class='gTJpzd'><b>" + $("#accom_discounted_price").html() + "</b></span>" + "<del class='gNVZZi'>" + $("#accom_origin_price").html() + "</del>" + "<span class='dHEojY'>" + $("#accom_discont").html() + "</span></div></div>";
  return temp;
};
var removeSelection = function (id, type) {
    console.log(type);
    if (type == "accoms") {
      if (sel_accoms.length == 1) {
          var x = document.getElementById(id);
          var y = x.getElementsByTagName("div");
          var z = y[5].getElementsByTagName("span");
          var res_ = y[5].getElementsByTagName("del");
          var res = z[1].getElementsByTagName("b");      
          var str1 = $("#check_in" + id).html().split("/");
          var check_in = str1[2] + "-" + str1[1] + "-" + str1[0];
          var str2 = $("#check_out" + id).html().split("/");
          var check_out = str2[2] + "-" + str2[1] + "-" + str2[0];
          var data = {
            'experience_id': exp_id,
            'type_id': $("#"+id).data('id'),
            'check_in': check_in,
            'check_out': check_out,
            'd_a_price': res[0].innerHTML,
            'd_b_price': res_[0].innerHTML,
            'discount': z[2].innerHTML,
            'type': 'accommodation'
          };
          flags.forEach(flag => {
            if (flag.price == data.d_a_price.replace('$', '') && flag.start_day == data.check_in) {
              data.check_out = flag.end_day;
            }
          });
          console.log(data);
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'remove_accom_info',
            data: data,
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
              console.log(e);
            }
          });
      }
      if (sel_accoms.findIndex(e => { return e == id }) != "-1") {
        sel_accoms.splice(sel_accoms.findIndex(e => { return e == id }), 1);
        $("#" + id).remove();
      }
    } else {
        console.log("removeSelection: ", sel_acts);
      if (sel_acts.length == 1) {
          var x = document.getElementById(id);
          var y = x.getElementsByTagName("div");       
          var z = y[5].getElementsByTagName("span");
          var res_ = y[5].getElementsByTagName("del");
          var res = z[1].getElementsByTagName("b");
          var date_ = $("#act_date" + id).html().split('Activity on ');
          var str = date_[1].split("/");
          var date = str[2] + "-" + str[1] + "-" + str[0];
          var data = {
            'experience_id': exp_id,
            'type_id': $("#"+id).data('id'),
            'check_in': date,
            'check_out': date,
            'd_a_price': res[0].innerHTML,
            'd_b_price': res_[0].innerHTML,
            'discount': z[2].innerHTML,
            'type': 'activity'
          };
          console.log(data);
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'remove_act_info',
            data: data,
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
              count_c -= 1;
              console.log(e);
            }
          });
      }
      if (sel_acts.findIndex(e => { return e == id }) != "-1") {
        sel_acts.splice(sel_acts.findIndex(e => { return e == id }), 1);
        $("#" + id).remove();
      }
    }
};
$("#experience_view").click(function () {
    $('.modal-content').animate({
        scrollTop : 800
    }, 500);
});
$("#street_view").click(function () {
    $('.modal-content').animate({
        scrollTop : 1200
    }, 500);
});
//-------------------Activity Section------------------------
act_prices = act_prices.replace(/&quot;/g, '"');
var _prices = JSON.parse(act_prices);
var act = [];
$(".experience").click(function () {
  act_selected_day = "";
  act = $(this).data('source');
  imgs_act = $(this).data('img');
  var practicals = $(this).data('practical');
  
  //attach information about activity & practical
  $("#name_activity").html(act.name);
  $("#category_activity").html(act.category);
  $("#activity_lang").html(act.language);
  $("#activity_content").html(act.content);
  practicals.forEach(practical => {
    if (practical.act_id == act.id) {
      $("#activity_arrival_date").html("Starts at " + practical.start_time);
      $("#activity_activity_hours").html(practical.total_hours + " hours total");
      if (practical.parking == "true") {
        $("#activity_parking").html("Meal provided");
      } else {
        $("#activity_parking").html("Bring your meal");
      }
      $("#activity_group").html(practical.group_size);
      $("#activity_address").html(practical.address);
      $("#cancellation").val(practical.provided);
      $(".activity_note").val(practical.bring);
    }
  });
  //attach slide shows
  var content = [];
  content += "<ul class='theTarget'>";
  imgs_act.forEach(img => {
    if (img.act_id == act.id) {
      var temp = "<li> <img src='" + img.path + "'style='width: 351px; height: 400px;'/><p class='slide-title'>"+act.name+"</p></li>";
      ;
      content += temp;
        
    }
  });
  content += "</ul>"
  content += "<script>$('.theTarget').slideshow({interval: 8000,width: 351,height: 400});</script>";
  $(".slider-modal").html(content);

  // init map
  setMap(act.location_latitude, act.location_longitude, "location");
  // prepare calendar
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  if (dd < 10) { dd = '0' + dd }
  if (mm < 10) { mm = '0' + mm }
  today = yyyy + '-' + mm + '-' + dd;

  var ndate = [];
  var min_price = 1000000;
  for (var i = 0; i < _prices.length - 1; i++) {
    if (_prices[i].activity_id == act.id) {
      if (min_price > parseInt(_prices[i].price_a_discount)) {
        min_price = _prices[i].price_a_discount;
      }
    }
  }
  _prices.forEach(price => {
    if (price.activity_id == act.id && price.nb_available != 0) {
      ndate.push(price.check_in_date);
    }
    if (price.check_in_date == today) {
      $("#act_discounted_price").html("$" + price.price_a_discount);
      $("#act_origin_price").html("$" + price.price_b_discount);
      $("#act_discont").html(Math.round(price.discount * 100, 2) + "%");
    } else if (price.check_in_date != today && price.price_a_discount == min_price) {
      $("#act_discounted_price").html("$" + min_price);
      $("#act_origin_price").html("$" + price.price_b_discount);
      $("#act_discont").html(Math.round(price.discount * 100, 2) + "%");
    }
  });
  // make dates array extract block dates  
  var enableDates = [];  
  for (var i = 0; i < ndate.length; i++) {
    var today = convertDate(new Date());
    var diff = daysBetween(today, ndate[i]);
    
    if (diff >= 0) {
      enableDates.push(ndate[i]);
    } else {
      enableDates.push("2900-01-01");
    }
  }
  // find the nearest date of arrival date 
  var arrival_date = $("#arrival_date").val();  
  console.log("original form of arrival date: ", arrival_date);
  var date_str = arrival_date.split("/");
  str_date = date_str[2] + "-" + date_str[1] + "-" + date_str[0];
  console.log("arrival date: ", str_date);
  var count = 0; 
  enableDates.forEach(sel => {
    if (daysBetween(str_date, sel) < 0) {
        count ++;
    } 
  });
  console.log("count: ", count);
  console.log("activity available dates: ", enableDates);
  var diff = daysBetween(str_date, today);
  var diff_plus = daysBetween(str_date, enableDates[0]);
  var k = 0;
  for (var j = 0; j < enableDates.length; j++) {
      if (count > 0) {
        if (0 >= daysBetween(str_date, enableDates[j])) {
            if (diff <= daysBetween(str_date, enableDates[j])) {
              diff = daysBetween(str_date, enableDates[j]);
              k = j;
            }
        }
      } else {
          if (0 < daysBetween(str_date, enableDates[j])) {
              if (daysBetween(str_date, enableDates[j]) < diff_plus) {
                diff_plus = daysBetween(str_date, enableDates[j]);
                k = j;
              }
          }
      }
  }
  
  str_date = enableDates[k];
  //initialization of calendar
  $('.act_calender').pignoseCalendar({
    multiple: false,
    lang: 'en',
    date: moment(str_date),
    theme: 'light',
    format: 'YYYY-MM-DD',
    modal: false,
    initialize: false,
    enabledDates: enableDates,
    select: function (date, context) {
      /**
       * @params this Element
       * @params date moment[]
       * @params context PignoseCalendarContext
       * @returns void
       */

      // This is selected button Element.
      var $this = $(this);

      // You can get target element in `context` variable, This element is same `$(this)`.
      var $element = context.element;

      // You can also get calendar element, It is calendar view DOM.
      var $calendar = context.calendar;

      // Selected dates (start date, end date) is passed at first parameter, And this parameters are moment type.
      // If you unselected date, It will be `null`.      
      calendarActEvent(date[0]);
    }
  });
  $("#myModal1").modal('show');
});
$("#save_act").click(function () {
    console.log(count_c, sel_acts);
    if (count_c != sel_acts.length) {
    sel_acts.forEach(sel => {
      var x = document.getElementById(sel);
      var y = x.getElementsByTagName("div");       
      var z = y[5].getElementsByTagName("span");
      var res_ = y[5].getElementsByTagName("del");
      var res = z[1].getElementsByTagName("b");
      var date_ = $("#act_date" + sel).html().split('Activity on ');
      var str = date_[1].split("/");
      var date = str[2] + "-" + str[1] + "-" + str[0];
      var data = {
        'experience_id': exp_id,
        'type_id': $("#"+sel).data('id'),
        'check_in': date,
        'check_out': date,
        'd_a_price': res[0].innerHTML,
        'd_b_price': res_[0].innerHTML,
        'discount': z[2].innerHTML,
        'type': 'activity'
      };
      console.log(data);
      $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'create_act_info',
        data: data,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          count_c = sel_acts.length;
          $("#invite").removeClass('disabled');
        }
      });
    });
    $("#invite").trigger("click");
  } else {
      if(sel_acts.length != 0 || sel_accoms.length != 0){
        $("#invite").removeClass('disabled');
        $("#invite").trigger("click");
      }
  }
});
$("#remove_act").click(function () {
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'undo_act_info',
    data: { 'experience_id': exp_id },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      location.reload(true);
    }
  });
});
var calendarActEvent = function (first_d) {
  var start_d = first_d._i;
  act_selected_day = first_d._i;
  _prices.forEach(price => {
    if (price.check_in_date == start_d) {
      $("#act_discounted_price").html("$" + price.price_a_discount);
      $("#act_origin_price").html("$" + price.price_b_discount);
      $("#act_discont").html(Math.round(price.discount * 100, 2) + "%");
    }
  });
};

$(".add_trip_act_btn").click(function () {
  if (act_selected_day != "") {
    var content = create_selected_html_act();
    sel_acts.push(sel_a);
    content += "<script>$('.slide-like').click(function () {var id = $(this).attr('id');removeSelection(id, 'acts');});</script>";
    $(".selected_content_act").append(content);
    $('#' + sel_a + ' .gallery-slideshow').slideshow({interval: 5000,width: 205,height: 170}); 
    $("#myModal1").modal('hide');
  } else {
    alert("please select the date on the calendar.");
  }
});
var create_selected_html_act = function () {
  var str = act_selected_day.split("-");
  var day = str[2] + "/" + str[1] + "/" + str[0];
  sel_a++;
  var temp = "";
  temp = "<div class='single_content_act detail activity' data-id='" + act.id + "'" + "id='" + sel_a + "'><label id=act_date" + sel_a + ">Activity on " + day + "</label>";
  temp += "<ul class='gallery-slideshow'>";

  imgs_act.forEach(img => {
    if (img.act_id == act.id) {
      temp += "<li><img src='" + img.path + "' style='width: 205px; height: 170px;'/><i class='fas fa-heart slide-like' style='color:rgb(255, 51, 102) !important;' data-id='" + act.id + "'" + "id='" + sel_a + "'></i></li>";
    }
  });
  temp += "</ul>";
  temp += "<div class='detail-info'><div class='location_name'><p>" + act.category + "</p>" + "<p>" + act.name + "</p></div></div>";
  temp += "<div class='origin eUhMAS'><span>Total: </span><span class='gTJpzd'><b>" + $("#act_discounted_price").html() + "</b></span>" + "<del class='gNVZZi'>" + $("#act_origin_price").html() + "</del>" + "<span class='dHEojY'>" + $("#act_discont").html() + "</span></div></div>";
  return temp;
};
//----------------Map integration-------------------------------
var map;
var map1;
function setMap(_lat, _lng, type) {
  var uluru = { lat: parseFloat(_lat), lng: parseFloat(_lng) };
  var marker = new google.maps.Marker({
    position: uluru,
    title: "Hello World!"
  });

  if (type == "map") {
    map.panTo(uluru);
    marker.setMap(map);
  } else {
    map1.panTo(uluru);
    marker.setMap(map1);
  }
}
function initMap() {
  var uluru = { lat: -33.865143, lng: 151.209900 };
  var mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(uluru.lat, uluru.lng),
    styles: [{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{ "color": "#444444" }] }, { "featureType": "administrative.locality", "elementType": "labels.text.fill", "stylers": [{ "color": "#378b90" }] }, { "featureType": "administrative.neighborhood", "elementType": "labels.text.fill", "stylers": [{ "color": "#31b9c1" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "color": "#f2f2f2" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": -100 }, { "lightness": 45 }] }, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "color": "#46bcec" }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "color": "#31b9c1" }] }, { "featureType": "water", "elementType": "geometry.stroke", "stylers": [{ "color": "#31b9c1" }] }]
  };
  var mapOptions1 = {
    zoom: 14,
    center: new google.maps.LatLng(uluru.lat, uluru.lng)
  };

  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  map1 = new google.maps.Map(document.getElementById('location_map'), mapOptions1);
}

//Invite Section
var ms = $('#invite_email').magicSuggest({
  placeholder: "Input friend's address.",
  allowDuplicates: false,
  useTabKey: true
});

$("#send_invite").click(function () { 
  var data = {
    "emails": ms.getValue(),
    "message": $("#invite_message").val(),
    "content": invite_content,
    "exp_id": exp_id
  };  
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'send_invite_email',
    data: data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {      
      $("#review").trigger("click");
      $(".progress_bar").attr('style', 'width: 60%');
      $(".submit_count").html('3');
    }
  });
});
$("#skip_invite").click(function () {
    $("#review").trigger("click");
});
//Review and Submit
$("#submit_trip").click(function () {
  $("#payment").trigger("click");
});
//Payment Section
$("#promo_apply").click(function () {
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'validate_promo_code',
    data: {'code': $("#promo_code").val()},
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        console.log(e);
      if (e.result == "false") {      
        alert("wrong promotion code validation.");        
      } else if (e.result == "true"){
         $('#promo_apply').attr("disabled", true);
        var old_price = $(".payment_price").html();
        var str = old_price.split("Total: $");
        if (e.type == "dollar") {
            if (parseInt(e.value) > parseInt(str[1])) {
                alert("Your bill is less than voucher. You can to use it after.");
            } else {
                var new_price = parseInt(str[1]) - parseInt(e.value);
                $(".promotion_discount").html("$" + e.value);
                $("#voucher_nb").val($("#promo_code").val());
                $(".payment_price").html("Total: $" + new_price);
                $(".voucher_discount").attr('style', 'display:block');
                $(".new_price").html("<b>$" + new_price + "</b>");
            }
        } else {
            var new_price = Math.round(parseInt(str[1]) / 100 * parseInt(e.value), 2);
            $(".promotion_discount").html(e.value + "%");
            $("#voucher_nb").val($("#promo_code").val());
            $(".payment_price").html("Total: $" + new_price);
            $(".voucher_discount").attr('style', 'display:block');
            $(".new_price").html("<b>$" + new_price + "</b>");
        }
      }
    }
  });
});
$("input[type='radio']").click(function(){
  if ($("input[name='title']:checked").val()) { 
    $("#check_title").attr('style', 'border: none;padding: 5px;');
  } else {
    $("#check_title").attr('style', 'border: 1px solid red;padding: 5px;');
  }
});
var check_title = function () {
  if ($("input[name='title']:checked").val()) {
    $("#check_title").attr('style', 'border: none;padding: 5px;');
  } else {
    $("#check_title").attr('style', 'border: 1px solid red;padding: 5px;');
  }
};
$("#phone_number").change(function (){
  if ($("#phone_number").intlTelInput("isValidNumber") == "false") {
    $("#phone_number").attr('style', 'border: 1px solid red;');
  } else {
    $("#phone_number").attr('style', 'border: none;');
  }
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
     return false;
  }else{
     return true;
  }
}
$("#email").change(function() {  
  if (IsEmail($(this).val()) == "false") {
    $("#email").attr('style', 'border: 1px solid red;');
  } else {
    $("#email").attr('style', 'border: none;');
  }
});
$("#check").click(function (e) {
  e.preventDefault();
  check_title();
  if ($("input[name='title']:checked").val()) {
      console.log("title is valid");
    if ($("#phone_number").intlTelInput("isValidNumber")) {
        console.log("phone is valid");
      if (IsEmail($("#email").val())) {
          console.log("email is valid");
        if ($(".payment_form").valid()) {
          var date = $("#datepicker").val();
          var str = date.split('/');
          var data = {
            "title": $("input[name='title']:checked").val(),
            "last_name": $("#last_name").val(),
            "first_name": $("#first_name").val(),
            "phone": $("#phone_number").intlTelInput("getNumber"),
            "email": $("#email").val(),
            "day": str[1],
            "month": str[0],
            "year": str[2],
          };
          console.log(data);
          $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'save_payment_user',
            data: data,
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
              $("#payment-form").removeAttr('hidden');
              $(".progress_bar").attr('style', 'width: 90%');
              $(".submit_count").html('1');
            }
          });
        }
      }
    } else {
      $("#phone_number").attr('style', 'border: 1px solid red;');
    }
  }
});
//----------------Additional functions ---------------------------
$(document).ready(function(){
  var x = document.getElementsByClassName("selected_content");  
  for (i = 0; i < x[0].children.length; i ++) {
    var val = x[0].children[i].attributes.id.value;
    sel_accoms.push(parseInt(val));
  }
  var y = document.getElementsByClassName("selected_content_act");  
  for (j = 0; j < y[0].children.length; j ++) {
    var val = y[0].children[j].attributes.id.value;    
    sel_acts.push(parseInt(val));
  }
});
function makeTitle(str, type) {
  var d = new parseDate(str);
  var day = parseDay(d);
  var month = parseMonth(d);
  var part = str.match(/(\d+)/g);
  var title = "";
  if (type == "invite") {
    order_invite ++;
    title = "Day " + order_invite + " - " + day + " " + part[2] + " " + month + " " + part[0];
  } else {
    order_review ++;
    title = "Day " + order_review + " - " + day + " " + part[2] + " " + month + " " + part[0];
  }
  return title;
}
function makeSimpleTitle(str) {
  var d = new parseDate(str);
  var weekday = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  var day = weekday[d.getDay()];
  var month = parseMonth(d);
  var part = str.match(/(\d+)/g);
  var title = day + ", " + part[2] + " " + month + " " + part[0];
  return title;
}
function parseMonth(day) {
  const months = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];
  return months[day.getMonth()];
}
function parseDay(day) {
  var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  return weekday[day.getDay()];
}
function parseDate(input) {
  var parts = input.match(/(\d+)/g);
  // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
  return new Date(parts[0], parts[1] - 1, parts[2]); // months are 0-based
}
function daysBetween(date1, date2) {
  //Get 1 day in milliseconds
  var one_day = 1000 * 60 * 60 * 24;

  // Convert both dates to milliseconds
  var date1_ms = new Date(date1).getTime();
  var date2_ms = new Date(date2).getTime();
    
  // Calculate the difference in milliseconds
  var difference_ms = date2_ms - date1_ms;

  // Convert back to days and return
  return Math.round(difference_ms / one_day);
}
function min_date(all_dates) {
  var min_dt = all_dates[0],
    min_dtObj = new Date(all_dates[0]);
  all_dates.forEach(function (dt, index) {
    if (new Date(dt) < min_dtObj) {
      min_dt = dt;
      min_dtObj = new Date(dt);
    }
  });
  return min_dt;
}
function convertDate(date) {  
  var yyyy = date.getFullYear().toString();
  var mm = (date.getMonth()+1).toString();
  var dd  = date.getDate().toString();

  var mmChars = mm.split('');
  var ddChars = dd.split('');

  return yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
}