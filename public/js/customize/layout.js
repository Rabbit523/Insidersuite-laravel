var redirect_path = window.location.protocol + "//" + window.location.hostname;
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
	$(".alert").attr('style', 'display:none;');
	$(this).addClass('active');
	$("#login-tab").removeClass('active');
	$('.login-form').attr('style', 'display: none;');
	$('.signup-form').attr('style', 'display: block;');
	$(".facebook_button").html('Sign up via Facebook');
	$(".google_button").html('Sign up via Google');
});

$("#login-tab").click (function () {
	$(".alert").attr('style', 'display:none;');
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
        		setTimeout(function(){window.location = redirect_path + "/offers";}, 1000);
			}
		}
	});
});

$("#file_upload").on('change', function() {
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'message_img',
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

$('#login_password').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        $( ".login" ).trigger( "click" );
    }
});
$('#register_password').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        $( ".become_member" ).trigger( "click" );
    }
});

$(".alert").attr('style', 'display:none;');
$(".become_member").click(function () {
	$(".alert").attr('style', 'display:none;');
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: 'registration',
		data: {
			'referal_code': $(".referal_code").val(),
			'email': $("#register_email").val(),
			'firstname': $("#register_firstname").val(),
			'lastname': $("#register_lastname").val(),
			'password': $("#register_password").val()
		},
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "success") {
				setTimeout(function(){window.location = redirect_path + "/host_experiences";}, 1000);
			} else {
				$(".alert").attr('style', 'display:block;');
				$(".message").html(e);
			}
		}
	});
});

$(".login").click(function () {
	$(".alert").attr('style', 'display:none;');
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: 'authenticateUser',
		data: {
			'email': $("#login_email").val(),
			'password': $("#login_password").val()
		},
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		success: function (e) {
			if (e == "dashboard") {
				setTimeout(function(){window.location = redirect_path + "/dashboard";}, 1000);
			} else if (e == "offers") {				
				setTimeout(function(){window.location = redirect_path + "/offers";}, 1000);
			} else if (e == "host_experiences") {				
				setTimeout(function(){window.location = redirect_path + "/host_experiences";}, 1000);
			} else {
				$(".alert").attr('style', 'display:block;');
				$(".message").html(e);
			}
		}
	});
});

$('#authentication').on('hidden.bs.modal', function () {
	$("#register_email").val("");
	$("#register_firstname").val("");
	$("#register_lastname").val("");
	$("#login_email").val("");
	$("#login_password").val("");
})
