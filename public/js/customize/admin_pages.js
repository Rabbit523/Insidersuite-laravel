var redirect_path = window.location.protocol + "//" + window.location.hostname;

$("#new_partner").attr('style', 'display:none');
$("#edit_partner").attr('style', 'display:none');
var id = "";
$("#addNew").click(function () {
  $("#save").attr("style", 'display:block');
  $("#update").attr("style", 'display:none');
  $("#new_partner").attr('style', 'display:block');
  $("#edit_partner").attr('style', 'display:none');
  $("#location_country").val("");
  $("#location_place").val("");  
  $("#modal-offers").modal('show');
});

$(".edit").click(function () {
  $("#new_partner").attr('style', 'display:none');
  $("#edit_partner").attr('style', 'display:block');
  $("#save").attr("style", 'display:none');
  $("#update").attr("style", 'display:block');
  $(".offer_detail").attr('style', 'display: block');
  id = $(this).data('id');
  $.ajax({
      type: 'get',
      dataType: 'json',
      url: 'get_offer',
      data: {'id': id},
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (e) {
          $("#location_country").val(e.location_country);
          $("#location_place").val(e.location_place);          
          if(e.status == "true") {
            $("#status").prop("checked", true);
          } else {
            $("#status").prop("checked", false);
          }
          $("#modal-offers").modal('show');
      }
  });
});

$("#accomodation").click(function () {
    window.location = redirect_path + "/admin/accomodations?id="+id
});

$("#activity").click(function () {
    window.location = redirect_path + "/admin/activities?id="+id
});

$(".delete").click(function () {
  id = $(this).data('id');
  alert("Are you sure to delete this partner?");
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'delete_offer',
    data: {'id': id},
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        location.reload(true);
    }
  });
});

$("#save").click(function () {
    $("#modal-offers").modal('hide');
    var status = "";
    if($("#status").is(":checked")) { status = "true"; } else { status = "false"; }
    var offer = {
        'location_country': $("#location_country").val(),
        'location_place': $("#location_place").val(),
        'img_path': $("#img_path").val(),
        'status': status,
        'accomodation': 0,
        'activity': 0,
        'review': 0
    };
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: '/admin/add_offer',
		data: offer,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "success") {				
                location.reload(true);  
			} else {
                alert("Location has already exist!");
      }
		}
	});
});

$("#update").click(function () {
    $("#modal-offers").modal('hide');
    var status = "";
    if($("#status").is(":checked")) { status = "true"; } else { status = "false"; }
    var offer = {
        'id': id,
        'location_country': $("#location_country").val(),
        'location_place': $("#location_place").val(),
        'img_path': $("#img_path").val(),
        'status': status
    };    
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/admin/update_offer',
        data: offer,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
            if (e == "success") {
                location.reload(true);
            } else {
                alert("Location has already exist!");
            }
        }
    });
});

$('#avatarInput').on('change',function(){
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'offer_image',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {        
        $("#img_path").val(e);
    }
  });
});