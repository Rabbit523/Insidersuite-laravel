@extends('private_admin.private')
@section('title','Insider Suite |  Admin Accomodation Page')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_activity_page.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="title-box">
						<h1><svg style="width: 23px; margin-right: 10px; vertical-align: top;" aria-hidden="true" data-prefix="fal" data-icon="location-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-location-circle fa-w-16 fa-5x"><path fill="currentColor" d="M307.75 147l-181.94 84c-16.38 7.64-24.78 24.53-20.91 42.05 3.88 17.36 18.34 29.03 36.06 29.03h60.97v60.95c0 17.72 11.66 32.22 29.03 36.06 2.84.62 5.69.94 8.44.94 14.31 0 27.22-8.14 33.62-21.91L357 196.22l.25-.55c5.69-13.64 2.34-29.48-8.5-40.34-10.91-10.92-26.72-14.27-41-8.33zM244 364.67c-1.28 2.72-3.28 3.89-6.12 3.17-2.59-.58-3.94-2.2-3.94-4.81v-92.95h-92.97c-2.59 0-4.22-1.33-4.81-3.97-.62-2.78.44-4.84 3.12-6.08l181.31-83.72c.53-.22 1-.3 1.5-.3 1.91 0 3.47 1.39 4 1.92.62.62 2.56 2.83 1.69 5.25L244 364.67zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216z" class=""></path></svg>Activity Page</h1>
						<a type="button" class="btn btn-normal" id="addNew">New Activity</a>
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
                                <div class="label-table city">OfferID</div>
								<div class="label-table name">Name</div>
								<div class="label-table address">Address</div>
                                <div class="label-table review">Review</div>
                                <div class="label-table status">Status</div>
							</div>
						</div>
						<div class="item-list">
							@if ($count == 0)
							<h4 class="offer">There is no Activity!</h4>
							@endif
							@foreach($datas as $data)
							<div class="item">
								<div class="row">
                                    <div class="label-table city">{{$data->city_id}} <a class="edit" data-id="{{$data->id}}">Edit</a> <a class="delete" data-id="{{$data->id}}">Delete</a></div>
									<div class="label-table name">{{$data->name}}</div>
									<div class="label-table address">{{$data['address']}}</div>
                                    <div class="label-table review">{{$data->review}}</div>
                                    <div class="label-table status">{{$data->status}}</div>
								</div>
							</div>
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

@section ('scripts')
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_activity_page.js') }}"></script>
@endsection