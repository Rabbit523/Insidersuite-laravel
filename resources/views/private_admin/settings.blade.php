@extends('private_admin.private')
@section('title','Insider Suite |  Admin Settings')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/intlTelInput.css') }}">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_setting.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><i class="fas fa-cog"></i>Settings</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="content-box">
						<section class="profile">
							<div class="title">
								<h3>Profile Picture</h3>
								<p>Personalize your account by adding your own image</p>
							</div>							
							<div class="jZdnvR">
								<div class="elakDd">								
									@if(auth()->user()->profile_img != null)
									<img class="bbGlpa old_img" width="90" height="90" src="{{auth()->user()->profile_img}}">
									@else
									<img class="bbGlpa new_img" width="90" height="90" src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar">
									@endif
									<label for="avatarInput">
										<div class="jlUgds">
											<svg viewBox="0 0 24 24" width="16" height="16"><g fill="currentColor" fill-rule="nonzero"><path d="M8.401 2.75L6.624 5.416A.75.75 0 0 1 6 5.75H3c-.69 0-1.25.56-1.25 1.25v13c0 .69.56 1.25 1.25 1.25h18c.69 0 1.25-.56 1.25-1.25V7c0-.69-.56-1.25-1.25-1.25h-3a.75.75 0 0 1-.624-.334L15.599 2.75H8.4zm10 1.5H21A2.75 2.75 0 0 1 23.75 7v13A2.75 2.75 0 0 1 21 22.75H3A2.75 2.75 0 0 1 .25 20V7A2.75 2.75 0 0 1 3 4.25h2.599l1.777-2.666A.75.75 0 0 1 8 1.25h8a.75.75 0 0 1 .624.334l1.777 2.666z"></path><path d="M12 18.75a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 0 1 0 10.5zm0-1.5a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5zM18.125 8.99a.875.875 0 1 1 1.75 0V9a.875.875 0 1 1-1.75 0v-.01z"></path></g></svg>
										</div>
									</label>
								</div>
								<div class="gRyTDd">
									<label for="avatarInput">
										<div role="button" class="kGsBD add_phto">Add a photo</div>
									</label>										
									<input class="bJGPFf" id="avatarInput" type="file" accept="image/*">
								</div>
							</div>							
						</section>
						<section class="personal_info">
							<div class="title">
								<h3>Personal information</h3>
								<p>Change your information</p>
							</div>
							<div class="informations">
								<form id="personal_form">
								<div class="form-group">
									<label>FULL NAME</label>
									<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Alexander Aaland" required>
								</div>
								<div class="form-group">
									<label>PHONE</label>
									<input type="tel" class="form-control" id="phone" name="phone" required>
								</div>
								<div class="form-group">
									<label>E-EMAIL</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="aa@gmail.com" required>
								</div>
								</div>
							</form>
						</section>
						<section class="button_section">							
							<a id="save_profile" class="btn btn btn-normal">SAVE</a>							
						</section>
						<section class="personal_info">
							<div class="title">
								<h3>Password</h3>
								<p>Remember to use a strong password</p>
							</div>
							<div class="informations">
								<form id="password_form">
								<div class="form-group">
									<label>OLD PASSWORD</label>
									<input type="password" class="form-control" id="old_password" name="old_password" required>
								</div>
								<div class="form-group">
									<label>NEW PASSWORD</label>
									<input type="password" class="form-control" id="new_password" name="new_password" required>
								</div>
								<div class="form-group">
									<label>CONFIRM PASSWORD</label>
									<input type="password" class="form-control" id="confirm_password" name="confirm_password"  required>
								</div>
								</div>
							</form>
						</section>
						<section class="button_section">
							<div class="alert alert-danger alert-block">
								<strong class="message"></strong>
							</div>
							<a id="save" class="btn btn btn-normal">SAVE</a>							
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/utils.js') }}"></script>
<script type="text/javascript" src="{{ url('js/data.js') }}"></script>
<script type="text/javascript" src="{{ url('js/intlTelInput.js') }}"></script>
<script>var user = @json(auth()->user());</script> 
<script type="text/javascript" src="{{ url('js/customize/admin_setting.js') }}"></script>
@endsection