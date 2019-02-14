@extends('private_admin.private')
@section('title','Insider Suite |  Admin Dashboard')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/dashboard.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
							<h1><svg style="width: 30px; margin-right: 10px;vertical-align: sub;" aria-hidden="true" data-prefix="far" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-home fa-w-18 fa-2x"><path fill="currentColor" d="M557.1 240.7L512 203.8V104c0-4.4-3.6-8-8-8h-32c-4.4 0-8 3.6-8 8v60.5L313.4 41.1c-14.7-12.1-36-12.1-50.7 0L18.9 240.7c-3.4 2.8-3.9 7.8-1.1 11.3l20.3 24.8c2.8 3.4 7.8 3.9 11.3 1.1l14.7-12V464c0 8.8 7.2 16 16 16h168c4.4 0 8-3.6 8-8V344h64v128c0 4.4 3.6 8 8 8h168c8.8 0 16-7.2 16-16V265.8l14.7 12c3.4 2.8 8.5 2.3 11.3-1.1l20.3-24.8c2.6-3.4 2.1-8.4-1.3-11.2zM464 432h-96V304c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8v128h-96V226.5l170.9-140c2.9-2.4 7.2-2.4 10.1 0l170.9 140V432z" class=""></path></svg>Dashboard</h1>
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
						<div class="form-box">
							<div class="row">
								<div class='col-md-12 col-sm-4 col-md-3'>
									<input type="text" name="datepicker" id="datepicker" class="form-control date-input" placeholder="10/03/2018 - 10/03/2018">
								</div>
							</div>
						</div>
						<div class="boxes-list">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-pink hover-expand-effect">
										<div class="icon">
										<i class="fas fa-user-circle"></i>
										</div>
										<div class="content">
											<div class="text">Customers</div>
											<div class="number count-to">{{$user_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-cyan hover-expand-effect">
										<div class="icon">
										<i class="far fa-handshake"></i>
										</div>
										<div class="content">
											<div class="text">Sponsored People</div>
											<div class="number count-to">{{$sponsored_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-light-green hover-expand-effect">
										<div class="icon">											
											<i class="fas fa-user-friends"></i>
										</div>
										<div class="content">
											<div class="text">Partners</div>
											<div class="number count-to">{{$partner_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-purple hover-expand-effect">
										<div class="icon">
											<i class="fab fa-amazon-pay"></i>
										</div>
										<div class="content">
											<div class="text">Experienced Paid</div>
											<div class="number count-to">{{$paid_count}}</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-blue-grey hover-expand-effect">
										<div class="icon">
											<svg aria-hidden="true" style="width: 55px;margin-top: 25px;" data-prefix="fas" data-icon="parking-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-parking-slash fa-w-20 fa-2x"><path fill="currentColor" d="M288 368c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-64.86L96 204.21V432c0 26.5 21.5 48 48 48h308.83L288 352.6V368zm345.82 90.1L544 388.68V80c0-26.5-21.5-48-48-48H144c-15.31 0-28.79 7.31-37.58 18.48L45.47 3.37C38.49-2.05 28.43-.8 23.01 6.18L3.37 31.45C-2.05 38.42-.8 48.47 6.18 53.9l588.35 454.73c6.98 5.43 17.03 4.17 22.46-2.81l19.64-25.27c5.42-6.97 4.17-17.02-2.81-22.45zM409.69 284.87l-50.53-39.05c5.4-5.73 8.84-13.34 8.84-21.82 0-17.64-14.36-32-32-32h-46.48l-65.06-50.29C225.61 134 231.98 128 240 128h96c52.94 0 96 43.06 96 96 0 23.24-8.49 44.35-22.31 60.87z" class=""></path></svg>
										</div>
										<div class="content">
											<div class="long_text">Experienced Unpaid</div>
											<div class="number count-to">{{$unpaid_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-teal hover-expand-effect">
										<div class="icon">
											<svg aria-hidden="true" style="width: 55px;margin-top: 25px;" data-prefix="far" data-icon="city" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-city fa-w-20 fa-lg"><path fill="currentColor" d="M244 384h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0-192h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm-96 0h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0 192h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0-96h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm96 0h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm288 96h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0-96h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm84-96H512V24c0-13.26-10.74-24-24-24H280c-13.26 0-24 10.74-24 24v72h-32V16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v80h-64V16c0-8.84-7.16-16-16-16H80c-8.84 0-16 7.16-16 16v80H24c-13.26 0-24 10.74-24 24v376c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V144h256V48h160v192h128v256c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V216c0-13.26-10.75-24-24-24zM404 96h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0 192h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12zm0-96h-40c-6.63 0-12 5.37-12 12v40c0 6.63 5.37 12 12 12h40c6.63 0 12-5.37 12-12v-40c0-6.63-5.37-12-12-12z" class=""></path></svg>
										</div>
										<div class="content">
											<div class="text">Cities</div>
											<div class="number count-to">{{$city_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-indigo hover-expand-effect">
										<div class="icon">											
											<svg aria-hidden="true" style="width: 55px;margin-top: 25px;" data-prefix="fal" data-icon="snowboarding" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-snowboarding fa-w-16 fa-lg"><path fill="currentColor" d="M492.8 177.6L425.4 127c30.8-4.6 54.6-31 54.6-63 0-35.3-28.7-64-64-64s-64 28.7-64 64c0 6.6 1.3 12.9 3.2 19-1.8-.7-3.5-1.6-5.3-2.2l-47.6-15.4L283 26.5C274.8 10.2 258.3 0 240 0c-7.3 0-14.7 1.7-21.3 5-23.8 11.9-33.4 40.8-21.6 64.4l25.4 50.8c2.6 5.2 5.8 9.9 9.6 14.1l-11.8 5.9C193 153.8 176 181.3 176 211.8v41.6l-63.2 21.1c-25.1 8.3-38.7 35.5-30.4 60.7 4.3 12.9 13.9 22.5 25.7 28l-51.3-18.7c-11.7-4.3-21-12.8-26.3-24.1-3.8-8-13.3-11.4-21.3-7.7S-2.3 326 1.5 334c8.9 19 24.6 33.4 44.3 40.6l364.8 132.8c8.8 3.2 17.9 4.8 26.9 4.8 11.3 0 22.6-2.5 33.2-7.4 8-3.7 11.5-13.2 7.8-21.2s-13.3-11.4-21.3-7.7c-11.3 5.2-23.9 5.8-35.7 1.5l-84.6-30.8c18.4-3.7 33.8-17.4 37.9-36.3l21.9-102c5.2-24.4-4.4-49.8-24.5-64.9L341.1 221l30.7-14.2 63.4 47.6c8.4 6.3 18.3 9.6 28.8 9.6 15 0 29.4-7.2 38.4-19.2 15.9-21.2 11.6-51.4-9.6-67.2zM416 32c17.7 0 32 14.4 32 32s-14.3 32-32 32-32-14.4-32-32 14.4-32 32-32zM291.3 429.7l-174.7-63.6c2.6.6 12.5 4 26.6-.7l85.1-28.3c22.2-7.4 38.2-26 42.6-48.3l27.7 19.7-17.4 81.4c-5.2 23.7 7.5 36.6 10.1 39.8zm185.5-204.1c-5.3 7.1-15.3 8.5-22.4 3.2l-78.7-59-98.1 45.2 75.6 53.8c10.3 7.7 15 20.4 12.4 32.5l-21.8 102c-2 9.3-11.1 14-19 12.3-8.7-1.8-14.2-10.3-12.3-19l21.8-102-94.2-67v48.8c0 13.8-8.8 26-21.9 30.4-92 30.7-86.5 29.2-90.1 29.2-6.7 0-12.9-4.2-15.2-10.9-2.8-8.4 1.8-17.5 10.1-20.2l85.1-28.4v-64.7c0-18.3 10.2-34.7 26.5-42.9l71-35.5-37.1-12.4c-7.6-2.5-13.8-7.9-17.3-15.1l-25.4-50.8c-3.9-7.9-.8-17.5 7.2-21.5 9.4-4.7 18.3.8 21.5 7.2l25.4 50.8L340 111c13.1 4.3 25.3 10.7 36.3 19l97.5 73.1c6.9 5.4 8.3 15.4 3 22.5z" class=""></path></svg>
										</div>
										<div class="content">
											<div class="text">Activities</div>
											<div class="number count-to">{{$act_count}}</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-orange hover-expand-effect">
										<div class="icon">
											<svg aria-hidden="true" style="width: 55px;margin-top: 18px;" data-prefix="fal" data-icon="tasks" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tasks fa-w-16 fa-lg"><path fill="currentColor" d="M506 114H198c-3.3 0-6-2.7-6-6V84c0-3.3 2.7-6 6-6h308c3.3 0 6 2.7 6 6v24c0 3.3-2.7 6-6 6zm6 154v-24c0-3.3-2.7-6-6-6H198c-3.3 0-6 2.7-6 6v24c0 3.3 2.7 6 6 6h308c3.3 0 6-2.7 6-6zm0 160v-24c0-3.3-2.7-6-6-6H198c-3.3 0-6 2.7-6 6v24c0 3.3 2.7 6 6 6h308c3.3 0 6-2.7 6-6zM68.4 376c-19.9 0-36 16.1-36 36s16.1 36 36 36 35.6-16.1 35.6-36-15.7-36-35.6-36zM170.9 42.9l-7.4-7.4c-4.7-4.7-12.3-4.7-17 0l-78.8 79.2-38.4-38.4c-4.7-4.7-12.3-4.7-17 0l-8.9 8.9c-4.7 4.7-4.7 12.3 0 17l54.3 54.3c4.7 4.7 12.3 4.7 17 0l.2-.2L170.8 60c4.8-4.8 4.8-12.4.1-17.1zm.4 160l-7.4-7.4c-4.7-4.7-12.3-4.7-17 0l-78.8 79.2-38.4-38.4c-4.7-4.7-12.3-4.7-17 0L4 245.2c-4.7 4.7-4.7 12.3 0 17l54.3 54.3c4.7 4.7 12.3 4.7 17 0l-.2-.2 96.3-96.3c4.6-4.8 4.6-12.4-.1-17.1z" class=""></path></svg>
										</div>
										<div class="content">
											<div class="text">Accommodations</div>
											<div class="number count-to">{{$accom_count}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script type="text/javascript" src="{{ url('js/customize/admin_dashboard.js') }}"></script>
@endsection