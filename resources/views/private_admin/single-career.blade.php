@extends('private_admin.private')
@section('title','Insider Suite |  Admin Career Detail')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_career_detail.css') }}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" />
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="title-box">
						<h1><i class="fas fa-user-circle"></i>
						@if($type=="new")
						New Department 
						@else
						Edit Department 
						@endif</h1>
						<a type="button" class="btn btn-normal" id="save">Save</a>
						@if($type=="old")
						<a type="button" class="btn btn-normal" id="view">View Positions</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content" data-source="{{$career}}">
		<div class="container-fluid">
			<div class="content-box">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="col-xs-12">
								<div class="module">
									<div class="title">
										<h6>Department</h6>
									</div>
									<div class="content type-default">
										<div class="form-group">
											<input type="text" id="department" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="module type-wysiwyg">
									<div class="title">
										<h6>DESCRIPTION</h6>
									</div>
									<div class="content">
										<textarea id="description"></textarea>
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
										<h6>CAREER DEPARTMENT IMAGE</h6>
									</div>									
									<div class="upload-btn-wrapper">
										<div class="btn" id="banner_img">Upload Banner Image</div>
										<input id="file_upload" type="file" accept="image/*">
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
<script>
	var type = "{{$type}}";			
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_career_detail.js') }}"></script>
@endsection 