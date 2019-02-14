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
						<h1><svg style="width: 30px; margin-right: 10px;vertical-align: bottom;" aria-hidden="true" data-prefix="fab" data-icon="contao" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-contao fa-w-16 fa-2x"><path fill="currentColor" d="M45.4 305c14.4 67.1 26.4 129 68.2 175H34c-18.7 0-34-15.2-34-34V66c0-18.7 15.2-34 34-34h57.7C77.9 44.6 65.6 59.2 54.8 75.6c-45.4 70-27 146.8-9.4 229.4zM478 32h-90.2c21.4 21.4 39.2 49.5 52.7 84.1l-137.1 29.3c-14.9-29-37.8-53.3-82.6-43.9-24.6 5.3-41 19.3-48.3 34.6-8.8 18.7-13.2 39.8 8.2 140.3 21.1 100.2 33.7 117.7 49.5 131.2 12.9 11.1 33.4 17 58.3 11.7 44.5-9.4 55.7-40.7 57.4-73.2l137.4-29.6c3.2 71.5-18.7 125.2-57.4 163.6H478c18.7 0 34-15.2 34-34V66c0-18.8-15.2-34-34-34z" class=""></path></svg>Careers</h1>
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
