@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career.css') }}">
@endsection
@section('content')
<div id="site-content">	
	<div id="content-slides">
		<div class="media-cover media-cover-dark">
			<section class="image"></section>
		</div>
		<div class="col-md-12">
			<div class="text-contrast">
				<h1 class="jobs-header-text"> Small teams creating a platform used around the world</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12 space-top-8 space-4">
				<div class="col-md-6 carrer-style">
					<a class="jobs-card link-reset" id="finance">	
						<div class="panel-body">
							<h3>Finance & Accounting</h3>
							<p>We find solutions to all problems. We take our <br> responsibilities very...</p>				
							<p style="color:rgb(255, 51, 102);">{{$finance_count}} positions to be filled</p>
						</div>
					</a>	
				</div>
				<div class="col-md-6 carrer-style">
					<a class="jobs-card link-reset" id="community">
						<div class="panel-body">
							<h3>Engineering</h3>
							<p>Our team of engineers draws on a wide and varied choice of experiences and skills...</p>
							<p style="color:rgb(255, 51, 102);">{{$community_count}} positions to be filled</p>
						</div>
					</a>
				</div>
				<div class="col-md-6 carrer-style">
					<a class="jobs-card link-reset" id="production">					
						<div class="panel-body">
							<h3>Trust and security</h3>
							<p>The cornerstone of Insidersuite is trust. Our team intends to promote this feeling and...</p>					
							<p style="color:rgb(255, 51, 102);">{{$production_count}} positions to be filled</p>
						</div>
					</a>
				</div>
				<div class="col-md-6 carrer-style">
					<a class="jobs-card link-reset" id="developer">
						<div class="panel-body">					
							<h3>Marketing and coummunication</h3>
							<p>We are the ones who tell the Insider suite story. Our mission? Share the values of Insidersuite...</p>						
							<p style="color:rgb(255, 51, 102);">{{$developer_count}} positions to be filled</p>
						</div>
					</a>				
				</div>
			</div>
		<div class="col-md-12 subscribe-section">
		    <h1>Access the offers for this Sunday</h1>
		    <a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">Subscribe</a>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script>var user = @json(auth()->user());</script>
<script type="text/javascript" src="{{ url('js/customize/career.js') }}"></script>
@endsection