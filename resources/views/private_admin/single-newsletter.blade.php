@extends('private_admin.private')
@section('title','Insider Suite |  Admin Newsletter Detail')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_newsletter_detail.css') }}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" />
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="title-box">
						<h1><i class="fas fa-envelope-open"></i>
						@if($type=="new")
                        New Newsletter
						@else
						Edit Newsletter
						@endif</h1>
						<a type="button" class="btn btn-normal" id="save">Save</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content" data-source="{{$newsletter}}">
		<div class="container-fluid">
			<div class="content-box">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="col-xs-12">
								<div class="module type-wysiwyg">
									<div class="title" id="new_id" data-source="{{$new_id}}">
										<h6>Content</h6>
									</div>
									<div class="content">
										<textarea id="content"></textarea>
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
										<h6>ATTATCH IMAGES</h6>
									</div>
									<div class="upload-btn-wrapper">
										<div class="btn" id="_img">Upload Image</div>
										<input id="file_upload" type="file" multiple accept="image/*">
									</div>
								</div>
							</div>
						</div>
          </div>
          <div class="col-xs-12 col-sm-4 images"></div>
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
<script type="text/javascript" src="{{ url('js/customize/admin_newsletter_detail.js') }}"></script>
@endsection
