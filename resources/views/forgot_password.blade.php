@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/reset_password.css') }}">    
@endsection
@section('content')

<div class="row" id="site-content">
	<div class="col-md-12 home-header-background">
		<div class="col-md-offset-6">
			@if(!Auth::User())
				<div class="form-wrap">
					<div class="tabs">
						<h3 style="text-align: center;float: none;width: 100%;"><a href="#signup-tab-content" style="font-size: 22px;background-color: transparent;color: white;">Reset Your Password</a></h3>
					</div><!--.tabs-->
					<div class="tabs-content">
						<div id="signup-tab-content" class="active">
							@if(session('error'))
								<p class="alert alert-danger">{{session('error')}}</p>
							@endif						
							<form class="signup-form" action="{{ url('update_password') }}" method="post">
								{{ csrf_field() }}
	          		<input type="hidden" name="token" value="{{ $token }}">
								<input type="password" class="input" id="user_email" autocomplete="off" placeholder="Password" name="password" required="">
								<input type="password" class="input" id="user_name" autocomplete="off" placeholder="Confirm Password" name="confirm_password" required="">
								<input type="submit" class="button" value="Reset Password" style="margin-top: 10px;">
							</form>
						</div><!--.signup-tab-content-->
					</div><!--.tabs-content-->
				</div><!--.form-wrap-->
			@endif
		</div>
	</div>
</div>

@endsection