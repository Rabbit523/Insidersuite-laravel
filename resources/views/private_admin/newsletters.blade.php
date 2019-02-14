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
						<h1><svg style="width: 30px; margin-right: 10px;vertical-align: bottom;" aria-hidden="true" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-2x"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path></svg>Newsletters</h1>
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
								<a type="button" class="btn btn-normal" id="send" data-id="{{$data->id}}">Send</a>
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