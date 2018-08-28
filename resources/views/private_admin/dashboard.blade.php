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
							<h1><i class="fa fa-home"></i>Dashboard</h1>
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
									<input type="text" name="datepicker" id="datepicker" class="form-control date-input" placeholder="07/01/18  -  08/23/18">
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
											<div class="number count-to"></div>
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
									<div class="info-box bg-orange hover-expand-effect">
										<div class="icon">
										<i class="fas fa-hotel"></i>
										</div>
										<div class="content">
											<div class="text">Hotel Booking</div>
											<div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
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