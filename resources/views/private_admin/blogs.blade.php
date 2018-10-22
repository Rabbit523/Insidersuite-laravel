@extends('private_admin.private')
@section('title','Insider Suite |  Admin Blogs')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_blogs.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><i class="fab fa-blogger-b"></i>Blogs</h1>
						<a type="button" class="btn btn-normal" id="addNew">New Blog</a>
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
						<div class="label-table title">Title</div>
						<div class="label-table author">Author</div>
						<div class="label-table published">Status</div>
						<div class="label-table last_audit">Last Audit</div>
						<div class="label-table like_count">Likes</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="blog">There is no blog!</h4>
					@endif					
					@foreach($blogs as $blog)
					<div class="item">
						<div class="row">							 
							<div class="label-table title">{{$blog->title}}<a class="edit" data-id="{{$blog->id}}">Edit</a> <a class="delete" data-id="{{$blog->id}}">Delete</a> </div>
							<div class="label-table author">{{$blog->author}}</div>
							<div class="label-table published">{{$blog->status}}</div>
							<div class="label-table last_audit">{{$blog->updated_at}}</div>
							<div class="label-table like_count">{{$blog->like_count}}</div>							
						</div>
					</div>
					@endforeach
					{{$blogs->links()}}
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
<script type="text/javascript" src="{{ url('js/customize/admin_blogs.js') }}"></script>
@endsection