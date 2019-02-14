@extends('private_admin.private')
@section('title','Insider Suite |  Admin Booking Requests')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_booking.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
							<h1><svg style="width: 30px; margin-right: 10px;vertical-align: bottom;" aria-hidden="true" data-prefix="far" data-icon="hotel" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-hotel fa-w-18 fa-2x"><path fill="currentColor" d="M560 48c8.84 0 16-7.16 16-16V16c0-8.84-7.16-16-16-16H16C7.16 0 0 7.16 0 16v16c0 8.84 7.16 16 16 16h15.98v416H16c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h544c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16h-16V48h16zm-64 416H320v-80h64c0-53.02-42.98-96-96-96s-96 42.98-96 96h64v80H79.98V48H496v416zM268.8 160h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8zm0 96h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8zm128 0h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8zm0-96h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8zm-256 96h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8zm0-96h38.4c6.4 0 12.8-6.4 12.8-12.8v-38.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v38.4c0 6.4 6.4 12.8 12.8 12.8z" class=""></path></svg>Booking Requests</h1>
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
						<div class="header-list">
							<div class="row">
								<div class="label-table location_country">Destination</div>
								<div class="label-table user_name">Username</div>
								<div class="label-table exp_name">Experience</div>
								<div class="label-table arrival_date">Arrival Date</div>
								<div class="label-table guest_nb">Guests Number</div>
							</div>
						</div>
						<div class="item-list">
							@if ($count == 0) 
							<h4 class="offer">There is no payment process!</h4>
							@endif
							@foreach($datas as $data)
							@foreach($users as $user)
							@if ($data->user_id == $user->user_id)
							@foreach($offers as $offer)
							@if ($data->city_id == $offer->id)
							<div class="item">
								<div class="row">
									<div class="label-table location_country">{{$offer->location_place}}, {{$offer->location_country}}</div>
									<div class="label-table user_name">{{$user->username}}</div>
									<div class="label-table exp_name">{{$data->exp_name}}</div>
									<div class="label-table arrival_date">{{$data->arrival_date}}</div>
									<div class="label-table guest_nb">{{$data->guests_nb}}</div>									
								</div>
							</div>
							@endif
							@endforeach
							@endif
							@endforeach
							@endforeach
							{{$datas->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
