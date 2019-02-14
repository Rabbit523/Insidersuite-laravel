@extends('private_admin.private')
@section('title','Insider Suite |  Admin Create Accomodation')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_create_activity_page.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{url('css/wickedpicker.min.css')}}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><svg style="width: 23px; margin-right: 10px; vertical-align: top;" aria-hidden="true" data-prefix="fal" data-icon="location-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-location-circle fa-w-16 fa-5x"><path fill="currentColor" d="M307.75 147l-181.94 84c-16.38 7.64-24.78 24.53-20.91 42.05 3.88 17.36 18.34 29.03 36.06 29.03h60.97v60.95c0 17.72 11.66 32.22 29.03 36.06 2.84.62 5.69.94 8.44.94 14.31 0 27.22-8.14 33.62-21.91L357 196.22l.25-.55c5.69-13.64 2.34-29.48-8.5-40.34-10.91-10.92-26.72-14.27-41-8.33zM244 364.67c-1.28 2.72-3.28 3.89-6.12 3.17-2.59-.58-3.94-2.2-3.94-4.81v-92.95h-92.97c-2.59 0-4.22-1.33-4.81-3.97-.62-2.78.44-4.84 3.12-6.08l181.31-83.72c.53-.22 1-.3 1.5-.3 1.91 0 3.47 1.39 4 1.92.62.62 2.56 2.83 1.69 5.25L244 364.67zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216z" class=""></path></svg>
						@if($type=="new")
					    New Activity
					    @else
					    Edit Activity
					    @endif
						</h1>
					</div>
					@if($type=="new")
					<a type="button" class="btn btn-normal" id="save">Save</a>
					@else
					<a type="button" class="btn btn-normal" id="update">Update</a>  
					@endif
				</div>
			</div>
		</div>
	</header>
	<div class="page-content" data-activity="{{$activity}}" data-practical="{{$practical}}">
		<div class="container-fluid">
			<div class="content-box">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<form id="main-form">
							<div class="row">
								<div class="col-xs-12">
									<div class="module">
										<div class="title">
											<h6>MAIN INFORMATIONS</h6>
										</div>
										<div class="content type-default">
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Name of Activity</label>
														<input type="text" name="name" id="name" class="form-control" @if($activity['name'] ==null) placeholder="Name"@endif value="{{$activity['name']}}" required>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Address</label>
														<input type="text" name="address" id="address" class="form-control" @if($activity['address'] ==null) placeholder="Address"@endif value="{{$activity['address']}}" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Longitude</label>
														<input type="text" name="longitude" id="longitude" class="form-control" @if($activity['location_longitude'] ==null) placeholder="Longitude"@endif value="{{$activity['location_longitude']}}" required>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Latitude</label>
														<input type="text" name="latitude" id="latitude" class="form-control" @if($activity['location_latitude'] ==null) placeholder="Latitude"@endif value="{{$activity['location_latitude']}}" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Category</label>
														<input type="text" name="category" id="category" class="form-control" @if($activity['category'] ==null) placeholder="Category"@endif value="{{$activity['category']}}" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Language</label>
														<input type="text" name="language" id="language" class="form-control" @if($activity['language'] ==null) placeholder="Language"@endif value="{{$activity['language']}}" required>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Status</label>
														<label class="switch">
															<input type="checkbox" id="status" name="status">
															<span class="slider"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Insider Rate</label>
														<input type="text" name="insider_rate" id="insider_rate" class="form-control" @if($activity['insider_rate'] ==null) placeholder="Insider Rate"@endif value="{{$activity['insider_rate']}}" required>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="module">
										<div class="title">
											<h6>PRACTICAL INFORMATIONS</h6>
										</div>
										<div class="content type-default">
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Group size</label>
														<input type="text" id="group_size" class="form-control" @if($practical['group_size'] ==null) placeholder="Group Size"@endif value="{{$practical['group_size']}}" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Total Hours</label>
														<input type="text" id="total_hours" class="form-control" @if($practical['total_hours'] ==null) placeholder="How many hours the activity will be for?"@endif value="{{$practical['total_hours']}}" required>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">													
														<div class="form-group">
															<label for="">Meal Provided</label>
															<label class="switch">
																<input type="checkbox" id="parking" name="parking">
																<span class="slider"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6">
													<div class="form-group">
														<label for="">Start Time</label>
                                                        <input type="text" name="start_time" id="start_time" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-12">
													<div class="form-group">
														<label for="">What to bring</label>
														<textarea class="form-control" name="bring" id="bring" required></textarea>
													</div>
												</div>                                            
											</div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">What is provided ?</label>
                                                        <textarea class="form-control" name="provided" id="provided" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="module type-wysiwyg">
										<div class="title">
											<h6>CONTENT</h6>
										</div>
										<div class="content">
											<textarea id="content"></textarea>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>					
					<div class="col-xs-12 col-sm-4">
						<div class="row section_post">
							<div class="col-xs-12">
								<div class="module type-upload-image">
									<div class="title">
										<h6>SLIDER IMAGES</h6>
									</div>
									<div class="upload-btn-wrapper">
										<div class="btn" id="banner_img">Upload Slider Image</div>
										<input id="file_upload" type="file" accept="image/*">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="row section_post">
							<div class="col-xs-12">
								<div class="module type-upload-image">
									<div class="title">
										<h6>Import CSV Price</h6>
									</div>
									<div class="upload-btn-wrapper">
										<div class="btn" id="csv">Import CSV Price</div>
										<input id="csv_upload" type="file" accept=".csv, .xlsx, text/csv">
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
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
<script src="/js/wickedpicker.js"></script>
<script>
    var offer_id = "{{$offer_id}}";
    var type = "{{$type}}";
</script>
<script type="text/javascript" src="{{ url('js/shim.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/xlsx.core.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_create_activity_page.js') }}"></script>
@endsection
