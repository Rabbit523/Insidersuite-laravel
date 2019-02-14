<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@section('head')
	<link rel="stylesheet" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/style.css">
	@include('includes.head')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<script src="{{ url('clock_animation/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ url('css/star-rating-svg.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/layout.css') }}">
	@show
</head>
<body style="overflow-x: hidden;">
	<a id="message_btn"><img class="pstQOpimage" src="https://image.providesupport.com/ps/round/chat-icon-online.png" border="0"></a>
	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>
	@include('includes.header')
	@yield('content')
	@include('includes.footer')
	<div id="website_feedback" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-feedback">
			<div class="modal-content">
				<div class="modal-header header-feedback">
					<a class="feedback-close" data-dismiss="modal">&times;</a>
					<h2 class="modal-title">Share your feedback or<br> ideas with us!</h2>
					<br>
				</div>
				<div class="modal-body feedback-body">
					<p>Rate your overall experience.</p>
					<div class="rating" name="rating"></div>
				</div>
				<div class="modal-footer feedback-footer">
					<input type="submit" class="btn btn-default add_note" value="Add note" data-dismiss="modal" data-toggle="modal">
				</div>
			</div>
	  </div>
	</div>
	<div id="authentication" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-authentication">
			<div class="modal-content" style="border-radius: 0px;">
				<div class="modal-header authentication-header">
					<div class="authentication-close">
						<a data-dismiss="modal">&times;</a>
					</div>
					<div class="authentication-title">
						<h2 class="modal-title">Join the Community</h2>
					</div>
					<div class="autentication-text">
						<p>Join insider suite community for exclusive offers and inspiring travels</p>
					</div>
				</div>
				<div class="modal-body authentication-body">
					<div class="alert alert-danger alert-block">
						<strong class="message"></strong>
					</div>
					<div class="authentication-tabs">
						<a id="signup-tab">Become member</a>
						<a id="login-tab" class="active">Log in</a>
					</div>
					<div class="signup-form">
						<div id="signup_form">
							<input type="email" id="register_email" placeholder="Email address" required>
							<input type="text" id="register_firstname" placeholder="First name" required>
							<input type="text" id="register_lastname" placeholder="Last name" required>
							<input type="password" id="register_password" placeholder="Create your password" required>
							<input type="button" class="btn become_member" value="Become member">
						</div>
					</div>
					<div class="login-form">
						<input type="email" id="login_email" placeholder="Email" required>
						<input type="password" id="login_password" placeholder="Password" required>
						<input type="button" class="btn login" value="Login">
						<div class="help-text">
							<p><a id="forgot" data-dismiss="modal" data-toggle="modal" data-target="#forget_password">Forget your password?</a></p>
						</div>
					</div>
				</div>
				<div class="modal-footer authentication-footer">
					<div class="or-separator">
						<span class="or-separator--text">OR</span>
					</div>
					<a href="{{ url('facebook/login') }}"><button class="loginBtn loginBtn--facebook facebook"><i class="fab fa-facebook-square social-icon"></i><span class="facebook_button">Login with Facebook</span></button></a>
					<a href="{{ url('google/login') }}"><button class="loginBtn loginBtn--google google"><img src="{{ url('imgs/chrome.png') }}" class="fab fa-google-plus-square social-icon chrome"><span class="google_button">Login with Google</span></button></a>
				</div>
			</div>
	  </div>
	</div>
	<div id="forget_password" class="modal fade" role="dialog">
		<div class="modal-dialog modal-authentication">
			<form method="post" action="{{ url('forget_password_mail') }}">
				{{ csrf_field() }}
				<div class="modal-content">
					<div class="modal-header forgot_header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="authentication-close">
							<a data-dismiss="modal">&times;</a>
						</div>
						<div class="authentication-title">
							<h2 class="modal-title">Reset password</h2>
						</div>
						<div class="autentication-text forgot-text">
							<p>Enter the email associated with your account, and we will email you a link to reset your password.</p>
						</div>
					</div>
					<div class="modal-body forgot-body">
						<input type="email" id="forgot_email" name="email" placeholder="Email" required>
					</div>
					<div class="modal-footer forgot-footer">
						<input type="submit" class="btn btn-default login forgot_send" value="Send">
						<a data-dismiss="modal" data-toggle="modal" data-target="#authentication"><i class="fas fa-chevron-left forgot-icon"></i><span class="back_to_login">Back to Login<span></a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="message_panel">
		<div class="message_pane">
			<form method="post" @if(Auth::User()) action="{{ url('live_message') }} @else action="{{ url('live-message') }} @endif">
				{{ csrf_field() }}
				<div class="message-content">
					<div class="message-header">
						<div class="message-title">
							<h2>Leave us a message</h2>
						</div>
						<div class="message-close">
							<a>-</a>
						</div>
					</div>
					<div class="message-body">
						<div class="form-group">
							<label for="">Your name</label>
							<input type="text" id="self_name" class="form-control" name="name" required>
						</div>
						<div class="form-group">
							<label for="">Email address*</label>
							<input type="email" id="self_email" class="form-control" name="email" required>
						</div>
						<div class="form-group">
							<label for="">How can we help you?*</label>
							<textarea rows="10" id="self_text" class="hm-form--control" name="content" required></textarea>
						</div>
						<div class="form-group attach">
							<label for="">Attachments</label>
							<a id="attach_file"><img src="../imgs/attach.png"><span>Add file or drop here</span></a>
							<input class="input_file" id="file_upload" type="file" accept="image/*">
							<input class="input_file" id="attached_file" type="hidden" name="attached_file">
						</div>
					</div>
					<div class="message-footer">
						<input class="btn btn-default cancel" value="Cancel" readonly>
						<input type="submit" class="btn btn-default send" value="Send">
					</div>
				</div>
			</form>
		</div>
	</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
@section('foot')
@include('includes.foot')
@show
<!-- Modernizr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="{{ url('js/jquery.star-rating-svg.js') }}"></script>
<script type="text/javascript" src="{{ url('js/modal-loading.js') }}"></script>
<script> var user = @json(auth()->user());</script>
<script type="text/javascript" src="{{ url('js/customize/layout.js') }}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68970184-5', 'auto');
  ga('send', 'pageview');
  ga('require', 'linkid');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33300115 = new Ya.Metrika({
                    id:33300115,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33300115" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
@yield('scripts')
</body>
</html>
