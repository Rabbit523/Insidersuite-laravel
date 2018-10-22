@extends('layout')

@section('title','Insider Suite |  Forgot password')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/forgot_password.css') }}">
@endsection

@section('content')

<div class="row" id="site-content">
	<div class="col-md-12 home-background">
		<div class="col-md-offset-6">
			<div class="form-wrap">
				<div class="tabs">
					<h3 style="text-align: center;float: none;width: 100%;"><a href="#signup-tab-content" style="font-size: 22px;background-color: transparent;color: white;">Reset Your Password</a></h3>
				</div>
				<div class="tabs-content">
					<div id="signup-tab-content" class="active">
						@if(session('error'))
							<p class="error_message">{{session('error')}}</p>
						@endif
						<form class="signup-form" action="{{ url('update_password') }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="token" value="{{ $token }}">
							<input type="password" class="input user_password" autocomplete="off" placeholder="Password" name="password" required="">
							<input type="password" class="input user_password" autocomplete="off" placeholder="Confirm Password" name="confirm_password" required="">
							<input type="submit" class="button" value="Reset Password" style="margin-top: 10px;">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
