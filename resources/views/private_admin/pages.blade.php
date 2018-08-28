@extends('private_admin.private')
@section('title','Insider Suite |  Admin Pages')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_page.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
							<h1><i class="fas fa-paperclip"></i>Pages Content</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
@endsection
