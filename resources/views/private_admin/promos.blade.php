@extends('private_admin.private')
@section('title','Insider Suite |  Admin Promotion')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_promos.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><svg style="width: 30px; margin-right: 10px; vertical-align: sub;" aria-hidden="true" data-prefix="fal" data-icon="code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-code fa-w-18 fa-lg"><path fill="currentColor" d="M228.5 511.8l-25-7.1c-3.2-.9-5-4.2-4.1-7.4L340.1 4.4c.9-3.2 4.2-5 7.4-4.1l25 7.1c3.2.9 5 4.2 4.1 7.4L235.9 507.6c-.9 3.2-4.3 5.1-7.4 4.2zm-75.6-125.3l18.5-20.9c1.9-2.1 1.6-5.3-.5-7.1L49.9 256l121-102.5c2.1-1.8 2.4-5 .5-7.1l-18.5-20.9c-1.8-2.1-5-2.3-7.1-.4L1.7 252.3c-2.3 2-2.3 5.5 0 7.5L145.8 387c2.1 1.8 5.3 1.6 7.1-.5zm277.3.4l144.1-127.2c2.3-2 2.3-5.5 0-7.5L430.2 125.1c-2.1-1.8-5.2-1.6-7.1.4l-18.5 20.9c-1.9 2.1-1.6 5.3.5 7.1l121 102.5-121 102.5c-2.1 1.8-2.4 5-.5 7.1l18.5 20.9c1.8 2.1 5 2.3 7.1.4z" class=""></path></svg>Promotion</h1>
						<a type="button" class="btn btn-normal" id="addNew">New</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
		<div class="container-fluid">
			<div class="content-box">
				<div class="header-list">
					<div class="row">
						<div class="label-table name">Name</div>
						<div class="label-table type">Type</div>
						<div class="label-table value">Value</div>
						<div class="label-table start_date">StartDate</div>
						<div class="label-table end_date">EndDate</div>
						<div class="label-table status">Status</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="newsletter">There is no promotion!</h4>
					@endif
					@foreach($datas as $data)
					<div class="item">
						<div class="row">
							<div class="label-table name">{{$data->name}}<a class="edit" data-id="{{$data->id}}">Edit</a> <a class="delete" data-id="{{$data->id}}">Delete</a></div>
							<div class="label-table type">{{$data->type}}</div>
							<div class="label-table value">{{$data->_value}}</div>
							<div class="label-table start_date">{{$data->start_date}}</div>
							<div class="label-table end_date">@if(!$data['end_date']) None @else {{$data['end_date']}} @endif</div>
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
@endsection

@section ('scripts') 
<script type="text/javascript" src="{{ url('js/customize/admin_promos.js') }}"></script>
@endsection 