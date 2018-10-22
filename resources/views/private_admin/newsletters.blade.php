@extends('private_admin.private')
@section('title','Insider Suite |  Admin Newsletters')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_newsletter.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><i class="fas fa-envelope-open"></i>Newsletters</h1>
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
						<div class="label-table id">Id</div>
						<div class="label-table author">Author</div>
						<div class="label-table date">Updated At</div>
						<div class="label-table status">Status</div>
						<div class="label-table action">Action</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="newsletter">There is no newsletter!</h4>
					@endif					
					@foreach($datas as $data)
					<div class="item">
						<div class="row">
							<div class="label-table id">{{$data->id}}<a class="edit" data-id="{{$data->id}}">Edit</a> <a class="delete" data-id="{{$data->id}}">Delete</a></div>
							<div class="label-table author">{{$data->author}}</div>
							<div class="label-table date">{{$data->created_at}}</div>
							<div class="label-table status">{{$data->status}}</div>
							<div class="label-table action">
								@if ($data->status == "saved")
								<a type="button" class="btn btn-normal" id="send">Send</a>
								@else
								<a type="button" class="btn btn-normal" id="send" disabled='disabled'>Send</a>
								@endif
							</div>
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
<script type="text/javascript" src="{{ url('js/customize/admin_newsletter.js') }}"></script>
@endsection 