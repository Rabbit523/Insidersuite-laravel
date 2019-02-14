@extends('private_admin.private')
@section('title','Insider Suite |  Admin Departments')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_departments.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="title-box">
						<h1 class="department_name" id="{{$department_id}}"><i class="fas fa-user-circle"></i>{{$department_name}}</h1>
						<a type="button" class="btn btn-normal" id="addNew">New Positions</a>
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
						<div class="label-table positions">Position Name</div>
						<div class="label-table office">Office</div>
						<div class="label-table last_audit">Last Audit</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="position">There is no position!</h4>
					@endif
					@foreach($departments as $department)
					<div class="item">
						<div class="row">
							<div class="label-table positions">{{$department->position_name}}<a class="edit" data-id="{{$department->id}}" data-parent="{{$department_id}}">Edit</a> <a class="delete" data-id="{{$department->id}}">Delete</a></div>
							<div class="label-table office">{{$department->office}}</div>
							<div class="label-table last_audit">{{$department->updated_at}}</div>
						</div>
					</div>
					@endforeach					
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
<script type="text/javascript" src="{{ url('js/customize/admin_departments.js') }}"></script>
@endsection
