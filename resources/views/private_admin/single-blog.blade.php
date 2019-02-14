@extends('private_admin.private')
@section('title','Insider Suite |  Admin Blog Detail')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_blog_detail.css') }}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" />
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><i class="fab fa-blogger-b"></i>
						@if($type=="new")
						New Blog
						@else
						Edit Blog
						@endif</h1>
            <a type="button" class="btn btn-normal" id="save">Save</a>
            <a type="button" class="btn btn-normal" id="publish">Publish</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content" data-source="{{$blog}}">
		<div class="container-fluid">
			<div class="content-box">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="col-xs-12">
								<div class="module">
									<div class="title">
										<h6>TITLE</h6>
									</div>
									<div class="content type-default">
										<div class="form-group">
											<input type="text" name="title" id="title" class="form-control">
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
										<h6>BLOG IMAGE</h6>
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
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_blog_detail.js') }}"></script>
@endsection
