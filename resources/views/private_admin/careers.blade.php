@extends('private_admin.private')
@section('title','Insider Suite |  Admin Careers')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_career.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><i class="fas fa-user-circle"></i>Careers</h1>
						<a type="button" class="btn btn-normal" id="addNew">New Career</a>
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
						<div class="label-table department">Department</div>
						<div class="label-table last_audit">Last Audit</div>
						<div class="label-table positions">Positions</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="career">There is no career!</h4>
					@endif					
					@foreach($careers as $career)
					<div class="item">
						<div class="row">
							<div class="label-table department">{{$career->department}}<a class="edit" data-id="{{$career->id}}">Edit</a> <a class="delete" data-id="{{$career->id}}">Delete</a></div>
							<div class="label-table last_audit">{{$career->updated_at}}</div>
							<div class="label-table positions">{{$career->positions}}</div>
						</div>
					</div>
					@endforeach
					{{$careers->links()}}
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
<script type="text/javascript" src="{{ url('js/customize/admin_careers.js') }}"></script>
@endsection
