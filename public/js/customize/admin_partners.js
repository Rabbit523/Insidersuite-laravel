$("#phone").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});
$("#new_partner").attr('style', 'display:none');
$("#edit_partner").attr('style', 'display:none');
$("#partner_datepicker").datepicker({showOtherMonths: true,selectOtherMonths: true});
$("#date").datepicker({showOtherMonths: true,selectOtherMonths: true});

$("#addNew").click(function () {
  $("#save").attr("style", 'display:block');
  $("#update").attr("style", 'display:none');
  $("#new_partner").attr('style', 'display:block');
  $("#edit_partner").attr('style', 'display:none');
  $("#phone").intlTelInput("setNumber", "");
  $("#partner_name").val("");
  $("#contact_person").val("");
  $("#email").val("");  
  $("#partner_datepicker").val("");
  $("#date").val("");  
  $("#modal-partners").modal('show');
});

$(".edit").click(function () {
  $("#new_partner").attr('style', 'display:none');
  $("#edit_partner").attr('style', 'display:block');
  $("#save").attr("style", 'display:none');
  $("#update").attr("style", 'display:block');
  var id = $(this).data('id');
  $.ajax({
      type: 'get',
      dataType: 'json',
      url: 'get_partner',
      data: {'id': id},
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (e) {
          $("#partner_name").val(e.partner_name);
          $("#contact_person").val(e.contact_person);
          $("#phone").val(e.phone);
          $("#email").val(e.email);
          $("#partner_datepicker").val(e.updated_at);
          $("#date").val(e.last_audit);
          $("#modal-partners").modal('show');
      }
  });
});


$(".delete").click(function () {
  var id = $(this).data('id');
  alert("Are you sure to delete this partner?");
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'delete_partner',
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
  $("#modal-partners").modal('hide');
  var partner = {
    'partner_name': $("#partner_name").val(),
    'contact_person': $("#contact_person").val(),
    'email': $("#email").val(),
    'phone': $("#phone").intlTelInput('getNumber'),
    'last_audit': $("#partner_datepicker").val(),
    'date_': $("#date").val()    
  };
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: '/admin/add_partner',
		data: partner,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "success") {				
        location.reload(true);  
			} else {
        alert("Partner Email has already exist!");
      }
		}
	});
});

$("#update").click(function () {
  $("#modal-partners").modal('hide');
  var partner = {
    'partner_name': $("#partner_name").val(),
    'contact_person': $("#contact_person").val(),
    'email': $("#email").val(),
    'phone': $("#phone").intlTelInput('getNumber'),
    'last_audit': $("#partner_datepicker").val(),
    'date_': $("#date").val()
  };
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: '/admin/update_partner',
		data: partner,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "success") {
        location.reload(true);
			} else {
        alert("Partner Email has already exist!");
      }
		}
	});
});