$(".rating").starRating({ starSize: 30, starShape: 'rounded', ratedFill: "#f1c40f"});
var rate = "";
$('#sponsor').click(function(){		
	$('.sponsor-page-alert').show();
	window.setTimeout(function() {
			$(".sponsor-page-alert").fadeTo(500, 0).slideUp(500, function(){
					$(this).hide(); 
			});
	}, 4000);
});

$("#home_register").click (function () {
	$("#signup-tab").addClass('active');
	$("#login-tab").removeClass('active');
	$('.login-form').attr('style', 'display: none;');
	$('.signup-form').attr('style', 'display: block;');
	$(".facebook_button").html('Sign up via Facebook');
	$(".google_button").html('Sign up via Google');
});

$("#home_login").click (function () {
	$("#signup-tab").removeClass('active');
	$("#login-tab").addClass('active');
	$('.signup-form').attr('style', 'display: none;');
	$('.login-form').attr('style', 'display: block;');
	$(".facebook_button").html('Login with Facebook');
	$(".google_button").html('Login with Google');
});

$("#signup-tab").click (function () {
	$(this).addClass('active');
	$("#login-tab").removeClass('active');
	$('.login-form').attr('style', 'display: none;');
	$('.signup-form').attr('style', 'display: block;');
	$(".facebook_button").html('Sign up via Facebook');
	$(".google_button").html('Sign up via Google');
});

$("#login-tab").click (function () {
	$("#signup-tab").removeClass('active');
	$(this).addClass('active');
	$('.signup-form').attr('style', 'display: none;');
	$('.login-form').attr('style', 'display: block;');
	$(".facebook_button").html('Login with Facebook');
	$(".google_button").html('Login with Google');
});

$(".message-close").click (function () {
	$("#message_panel").attr('style', 'display: none;');
	$("#message_panel").removeClass('active');
});

$(".cancel").click (function () {
	$("#message_panel").attr('style', 'display: none;');
	$("#message_panel").removeClass('active');
});
$("#attach_file").click(function () {
	$("#file_upload").trigger('click');
});

$("#file_upload").on('change', function () {
	var formdata = new FormData();
	formdata.append('file', this.files[0]);
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: 'attach_file',
		data: formdata,
		processData: false,
		contentType: false,
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			$("#attached_file").val(e);
		}
	});
});

$(".add_note").click(function () {
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: 'feedback_rate',
		data: {'rate': $(".rating").starRating('getRating')},
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "success") {
				alert("success!");
        setTimeout(function(){window.location = redirect_path + "/offers";}, 1000);  
			}
		}
	});
});