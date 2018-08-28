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
</div>
@endsection
