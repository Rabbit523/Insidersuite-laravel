var redirect_path = window.location.protocol + "//" + window.location.hostname;

$("#accomodation").click(function () { 
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

    if ($(window).width() <= 414) {
      $(".sidebar").attr('style', 'display: none;');
      $("._66jk8g").attr('style', 'display: block;');
      $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
    }  
});
$("#experience").click(function () {
  $("#experience_info").attr('style', 'display: block');
  $("#general_info").attr('style', 'display: none');
  $("#accommodation_info").attr('style', 'display: none');
  if (count != 0) {
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
  
  var height = $(".experience-content").height();
  $(".sidebar").height(height);  

  if ($(window).width() <= 414) {
    $(".sidebar").attr('style', 'display: none;');
    $("._66jk8g").attr('style', 'display: block;');
    $(".experience-content").attr('style', 'display: block; margin-left: 0px;padding-left: 15px; padding-right: 15px; margin-bottom: 0px;');
  }  
});

act_prices = act_prices.replace(/&quot;/g, '"');
var _prices = JSON.parse(act_prices);
var act_selected_day1 = "", act_selected_day2 = "";
var act = [];
$(".experience").click(function () {
  act_selected_day1 = "";
  act_selected_day2 = "";
  act = $(this).data('source');
  imgs_act = $(this).data('img');  
  var practicals = $(this).data('practical');

  //attach information about activity & practical
  $("#name_activity").html(act.name);
  $("#category_activity").html(act.category + " experience");
  $("#activity_lang").html(act.language);
  $("#activity_content").html(act.content);
  practicals.forEach(practical => {
    if (practical.act_id == act.id) {
      $("#activity_arrival_date").html(practical.arrival_date);
      $("#activity_activity_hours").html(practical.activity_hours + " hours total");
      if (practical.parking == "true") {
        $("#activity_parking").html("YES");
      } else {
        $("#activity_parking").html("NO");
      }
      $("#activity_group").html(practical.group_size);
      $("#activity_address").html(practical.address);
      $("#cancellation").val(practical.cancellation);
      $(".activity_note").val(practical.note);
    }
  });
  //attach slide shows
  var content = [];
  content += "<ul class='theTarget'>";
  imgs_act.forEach(img => {
    if (img.act_id == act.id) {
      var temp = "<li> <img src='" + img.path + "'style='width: 351px; height: 400px;'/><p class='slide-title'>7surfbali-Learn to surf in Bali</p></li>";
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
  var today = new Date();
  var enableDates = [];
  for (var i = 0; i < ndate.length; i++) {
    var date = ndate[i].split("-");
    var day = parseInt(date[2]) + 2;
    var _date = date[0] + "-" + date[1] + "-" + day;
    var date_ = new Date(_date);

    if (date_ >= today) {
      enableDates.push(ndate[i]);
    } else {
      enableDates.push("2300-01-01");
    }
  }

  //initialization of calendar
  $('.act_calender').pignoseCalendar({
    multiple: false,
    lang: 'en',
    date: moment(),
    theme: 'light',
    format: 'YYYY-MM-DD',
    modal: false,
    initialize: true,
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

$(".dropdown-toggle").click(function () {
  $(".dropdown").addClass('open');
});

var sel_acts = [];
$("#save_act").click(function () {  
  sel_acts.forEach(sel => {
    var x = document.getElementById(sel);
    var y = x.getElementsByTagName("div");    
    var z = y[5].getElementsByTagName("span");
    var res_ = y[5].getElementsByTagName("del");    
    var res = z[1].getElementsByTagName("b");    
    var date = $("#act_date" + sel).html();
    var date_ = date.split('Activity on ');
    var data = {
      'experience_id': exp_id,
      'type_id': act.id,
      'check_in': date_[1],
      'check_out': date_[1],
      'd_a_price': res[0].innerHTML,
      'd_b_price': res_[0].innerHTML,
      'discount': z[2].innerHTML,
      'type': 'activity'
    };    
    $.ajax({
      type: 'post',
      dataType: 'json',
      url: 'create_act_info',
      data: data,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (e) {
        $("#invite").removeClass('disabled');
        $("#invite").trigger("click");
      }
    });
  });  
});

$("#remove_act").click(function () {  
  var data = {
    'experience_id': exp_id,
    'type_id': act.id
  };
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'remove_act_info',
    data: data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      $(".single_content_act").remove();
      $(".sidebar").height($(".experience-content").height());
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

var _content = $(".selected_content_act").html();
$(".add_trip_act_btn").click(function () {
  if (act_selected_day != "") {
    _content += create_selected_html_act();
    _content += "<script>$('.gallery-slideshow').slideshow({interval: 5000,width: 205,height: 170});$('.slide-like').click(function () {var id = $(this).attr('id');removeSelectionAct(id);});</script>";
    sel_acts.push(sel_a);
    $(".selected_content_act").html(_content);
    $("#myModal1").modal('hide');
  } else {
    alert("please select the date on the calendar.");
  }
});

var create_selected_html_act = function () {
  sel_a ++;
  var temp = "";
  temp = "<div class='single_content_act detail activity' data-id='" + act.id + "'" + "id='" + sel_a + "'><label id=act_date" + sel_a + ">Activity on " + act_selected_day + "</label>";
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

var removeSelectionAct = function (id) {
  $("#" + id).remove();
  _content = "";
};

var map;
function setMap(_lat, _lng, type) {
    var uluru = { lat: parseFloat(_lat), lng: parseFloat(_lng) };
    var marker = new google.maps.Marker({
        position: uluru,
        title: "Hello World!"
    });
    map.panTo(uluru);
    marker.setMap(map);
}

function initMap() {
  var uluru = { lat: -33.865143, lng: 151.209900 };
  var mapOptions = {
    zoom: 14,
    center: new google.maps.LatLng(uluru.lat, uluru.lng)
  };

  map = new google.maps.Map(document.getElementById('location_map'), mapOptions);
}