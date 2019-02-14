@extends('private_admin.private')
@section('title','Insider Suite |  Admin Single promo')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_promo.css') }}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{url('css/wickedpicker.min.css')}}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="title-box">
						@if($type == "new")
						<h1 class="new_title"><svg style="width: 30px; margin-right: 10px; vertical-align: sub;" aria-hidden="true" data-prefix="fal" data-icon="code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-code fa-w-18 fa-lg"><path fill="currentColor" d="M228.5 511.8l-25-7.1c-3.2-.9-5-4.2-4.1-7.4L340.1 4.4c.9-3.2 4.2-5 7.4-4.1l25 7.1c3.2.9 5 4.2 4.1 7.4L235.9 507.6c-.9 3.2-4.3 5.1-7.4 4.2zm-75.6-125.3l18.5-20.9c1.9-2.1 1.6-5.3-.5-7.1L49.9 256l121-102.5c2.1-1.8 2.4-5 .5-7.1l-18.5-20.9c-1.8-2.1-5-2.3-7.1-.4L1.7 252.3c-2.3 2-2.3 5.5 0 7.5L145.8 387c2.1 1.8 5.3 1.6 7.1-.5zm277.3.4l144.1-127.2c2.3-2 2.3-5.5 0-7.5L430.2 125.1c-2.1-1.8-5.2-1.6-7.1.4l-18.5 20.9c-1.9 2.1-1.6 5.3.5 7.1l121 102.5-121 102.5c-2.1 1.8-2.4 5-.5 7.1l18.5 20.9c1.8 2.1 5 2.3 7.1.4z" class=""></path></svg>NEW PROMOTION</h1>
						<a type="button" class="btn btn-normal" id="save">Save</a>
						@else
						<h1 class="edit_title"><svg style="width: 30px; margin-right: 10px; vertical-align: sub;" aria-hidden="true" data-prefix="fal" data-icon="code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-code fa-w-18 fa-lg"><path fill="currentColor" d="M228.5 511.8l-25-7.1c-3.2-.9-5-4.2-4.1-7.4L340.1 4.4c.9-3.2 4.2-5 7.4-4.1l25 7.1c3.2.9 5 4.2 4.1 7.4L235.9 507.6c-.9 3.2-4.3 5.1-7.4 4.2zm-75.6-125.3l18.5-20.9c1.9-2.1 1.6-5.3-.5-7.1L49.9 256l121-102.5c2.1-1.8 2.4-5 .5-7.1l-18.5-20.9c-1.8-2.1-5-2.3-7.1-.4L1.7 252.3c-2.3 2-2.3 5.5 0 7.5L145.8 387c2.1 1.8 5.3 1.6 7.1-.5zm277.3.4l144.1-127.2c2.3-2 2.3-5.5 0-7.5L430.2 125.1c-2.1-1.8-5.2-1.6-7.1.4l-18.5 20.9c-1.9 2.1-1.6 5.3.5 7.1l121 102.5-121 102.5c-2.1 1.8-2.4 5-.5 7.1l18.5 20.9c1.8 2.1 5 2.3 7.1.4z" class=""></path></svg>EDIT PROMOTION</h1>
						<a type="button" class="btn btn-normal" id="update">Update</a>
						@endif												
					</div>
				</div>				
			</div>
		</div>
	</header>
	<div class="page-content">
		<div class="container-fluid">
			<div class="content-box">
				<section class="promotion">
					<div class="title">
						<h3>Promotional code</h3>
						<a id="generate">Generate the code</a>
					</div>
					<div class="code">						
						<input type="text" class="form-control" id="promotional_code" @if(!$data)placeholder="par ex. SOLDESPRINTEMPS" @else value="{{$data->name}}" @endif required>
						<p>Customers will enter this promotional code when they checkout.</p>
					</div>
				</section>
				<section class="options">
					<div class="title">
						<h3>Options</h3>
					</div>
					<div class="informations">						
						<div class="form-group">
							<label>Type of reduction</label>
							<select name="reduction" id="type_reduction" class="form-control" required>
								<option disabled selected value>Reduction Type</option>								
								<option value="percentage" @if($data['type'] == "percentage") {{'selected'}} @endif >Percentage</option>
								<option value="dollar" @if($data['type'] == "dollar") {{'selected'}} @endif>Dollar</option>								                                                   
							</select>
						</div>
						<div class="form-group">
							<label>Value of the reduction</label>
							<input type="text" class="form-control" id="reduction" @if($data) value="{{$data->_value}}" @endif required><span class="percentage">%</span>
						</div>
					</div>					
				</section>
				<section class="options">
					<div class="title">
						<h3>Activity dates</h3>
					</div>
					<div class="informations">
						<div class="form-group">
							<label>Start date</label>
							<input type="text" name="datepicker" id="datepicker" class="form-control date" @if(!$data) placeholder="(dd/mm/yyyy)" @else value="{{$data->start_date}}" @endif required>
						</div>
						<div class="form-group">
							<label>Start time(CET)</label>
							<input type="text" class="form-control" id="timepicker" @if($data) value="{{$data->time}}" @endif required>
						</div>
					</div>
					<div class="informations">
						<div class="form-group">
							<input type="checkbox" id="check_end_date">Set the end date
						</div>
					</div>
					<div class="informations">
						<div class="form-group end_date_form">
							<label>End date</label>
							<input type="text" name="end_datepicker" id="e_datepicker" class="form-control date" @if(!$data['end_date']) placeholder="(dd/mm/yyyy)" @else value="{{$data->end_date}}" @endif required>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('scripts') 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<script src="/js/wickedpicker.js"></script>
<script>
	var type= "{{$type}}";
	var id = "{{$data['id']}}";
</script>
<script type="text/javascript" src="{{ url('js/customize/admin_promo.js') }}"></script>
@endsection 