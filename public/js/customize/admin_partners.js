var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#phone").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});
$("#partner_datepicker").datepicker({showOtherMonths: true,selectOtherMonths: true});
$("#date").datepicker({showOtherMonths: true,selectOtherMonths: true});

$("#addNew").click(function () {  
  $("#phone").intlTelInput("setNumber", "");
  $("#partner_name").val("");
  $("#contact_person").val("");
  $("#email").val("");  
  $("#partner_datepicker").val("");
  $("#date").val("");
  $("#n_booking").val("");
  $("#modal-partners").modal('show');
});

$("#save").click(function () {
  $("#modal-partners").modal('hide');
  var partner = {
    'partner_name': $("#partner_name").val(),
    'contact_person': $("#contact_person").val(),
    'email': $("#email").val(),
    'phone': $("#phone").val(),
    'last_audit': $("#partner_datepicker").val(),
    'date_': $("#date").val(),
    'booking_count': $("#n_booking").val()
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
      console.log(e);
			if (e == "success") {
				alert("success!");
        setTimeout(function(){window.location = redirect_path + "/admin/partners";}, 1000);  
			} else {
        alert("Partner Email has already exist!");
      }
		}
	});
});