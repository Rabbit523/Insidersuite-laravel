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
						<h1><svg style="width: 30px; margin-right: 10px;vertical-align: sub;" aria-hidden="true" data-prefix="far" data-icon="cogs" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-cogs fa-w-20 fa-2x"><path fill="currentColor" d="M217.1 478.1c-23.8 0-41.6-3.5-57.5-7.5-10.6-2.7-18.1-12.3-18.1-23.3v-31.7c-9.4-4.4-18.4-9.6-26.9-15.6l-26.7 15.4c-9.6 5.6-21.9 3.8-29.5-4.3-35.4-37.6-44.2-58.6-57.2-98.5-3.6-10.9 1.1-22.7 11-28.4l26.8-15c-.9-10.3-.9-20.7 0-31.1L12.2 223c-10-5.6-14.6-17.5-11-28.4 13.1-40 21.9-60.9 57.2-98.5 7.6-8.1 19.8-9.9 29.5-4.3l26.7 15.4c8.5-6 17.5-11.2 26.9-15.6V61.4c0-11.1 7.6-20.8 18.4-23.3 44.2-10.5 70-10.5 114.3 0 10.8 2.6 18.4 12.2 18.4 23.3v30.4c9.4 4.4 18.4 9.6 26.9 15.6L346.2 92c9.7-5.6 21.9-3.7 29.6 4.4 26.1 27.9 48.4 58.5 56.8 100.3 2 9.8-2.4 19.8-10.9 25.1l-26.6 16.5c.9 10.3.9 20.7 0 31.1l26.6 16.5c8.4 5.2 12.9 15.2 10.9 24.9-8.1 40.5-29.6 71.3-56.9 100.6-7.6 8.1-19.8 9.9-29.5 4.3l-26.7-15.4c-8.5 6-17.5 11.2-26.9 15.6v31.7c0 11-7.4 20.6-18.1 23.3-15.8 3.8-33.6 7.2-57.4 7.2zm-27.6-50.7c18.3 2.9 36.9 2.9 55.1 0v-44.8l16-5.7c15.2-5.4 29.1-13.4 41.3-23.9l12.9-11 38.8 22.4c11.7-14.4 21-30.5 27.6-47.7l-38.8-22.4 3.1-16.7c2.9-15.9 2.9-32 0-47.9l-3.1-16.7 38.8-22.4c-6.6-17.2-15.9-33.3-27.6-47.7l-38.8 22.4-12.9-11c-12.3-10.5-26.2-18.6-41.3-23.9l-16-5.7V80c-18.3-2.9-36.9-2.9-55.1 0v44.8l-16 5.7c-15.2 5.4-29.1 13.4-41.3 23.9l-12.9 11L80.5 143c-11.7 14.4-21 30.5-27.6 47.7l38.8 22.4-3.1 16.7c-2.9 15.9-2.9 32 0 47.9l3.1 16.7-38.8 22.4c6.6 17.2 15.9 33.4 27.6 47.7l38.8-22.4 12.9 11c12.3 10.5 26.2 18.6 41.3 23.9l16 5.7v44.7zm27.1-85.1c-22.6 0-45.2-8.6-62.4-25.8-34.4-34.4-34.4-90.4 0-124.8 34.4-34.4 90.4-34.4 124.8 0 34.4 34.4 34.4 90.4 0 124.8-17.3 17.2-39.9 25.8-62.4 25.8zm0-128.4c-10.3 0-20.6 3.9-28.5 11.8-15.7 15.7-15.7 41.2 0 56.9 15.7 15.7 41.2 15.7 56.9 0 15.7-15.7 15.7-41.2 0-56.9-7.8-7.9-18.1-11.8-28.4-11.8zM638.5 85c-1-5.8-6-10-11.9-10h-16.1c-3.5-9.9-8.8-19-15.5-26.8l8-13.9c2.9-5.1 1.8-11.6-2.7-15.3C591 11.3 580.5 5.1 569 .8c-5.5-2.1-11.8.1-14.7 5.3l-8 13.9c-10.2-1.9-20.7-1.9-30.9 0l-8-13.9c-3-5.1-9.2-7.3-14.7-5.3-11.5 4.3-22.1 10.5-31.4 18.2-4.5 3.7-5.7 10.2-2.7 15.3l8 13.9c-6.7 7.8-12 16.9-15.5 26.8H435c-5.9 0-11 4.3-11.9 10.2-2 12.2-1.9 24.5 0 36.2 1 5.8 6 10 11.9 10h16.1c3.5 9.9 8.8 19 15.5 26.8l-8 13.9c-2.9 5.1-1.8 11.6 2.7 15.3 9.3 7.7 19.9 13.9 31.4 18.2 5.5 2.1 11.8-.1 14.7-5.3l8-13.9c10.2 1.9 20.7 1.9 30.9 0l8 13.9c3 5.1 9.2 7.3 14.7 5.3 11.5-4.3 22.1-10.5 31.4-18.2 4.5-3.7 5.7-10.2 2.7-15.3l-8-13.9c6.7-7.8 12-16.9 15.5-26.8h16.1c5.9 0 11-4.3 11.9-10.2 1.9-12.2 1.9-24.4-.1-36.2zm-107.8 50.2c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm107.8 255.4c-1-5.8-6-10-11.9-10h-16.1c-3.5-9.9-8.8-19-15.5-26.8l8-13.9c2.9-5.1 1.8-11.6-2.7-15.3-9.3-7.7-19.9-13.9-31.4-18.2-5.5-2.1-11.8.1-14.7 5.3l-8 13.9c-10.2-1.9-20.7-1.9-30.9 0l-8-13.9c-3-5.1-9.2-7.3-14.7-5.3-11.5 4.3-22.1 10.5-31.4 18.2-4.5 3.7-5.7 10.2-2.7 15.3l8 13.9c-6.7 7.8-12 16.9-15.5 26.8h-16.1c-5.9 0-11 4.3-11.9 10.2-2 12.2-1.9 24.5 0 36.2 1 5.8 6 10 11.9 10H451c3.5 9.9 8.8 19 15.5 26.8l-8 13.9c-2.9 5.1-1.8 11.6 2.7 15.3 9.3 7.7 19.9 13.9 31.4 18.2 5.5 2.1 11.8-.1 14.7-5.3l8-13.9c10.2 1.9 20.7 1.9 30.9 0l8 13.9c3 5.1 9.2 7.3 14.7 5.3 11.5-4.3 22.1-10.5 31.4-18.2 4.5-3.7 5.7-10.2 2.7-15.3l-8-13.9c6.7-7.8 12-16.9 15.5-26.8h16.1c5.9 0 11-4.3 11.9-10.2 2-12.1 2-24.4 0-36.2zm-107.8 50.2c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z" class=""></path></svg>Settings</h1>
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