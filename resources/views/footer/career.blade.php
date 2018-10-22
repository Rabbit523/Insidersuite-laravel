@extends('layout')

@section('title','Insider Suite |  Career')

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
			@foreach($careers as $career)
			<div class="col-md-6 carrer-style">				
				<a class="jobs-card link-reset">					
					<div class="panel-body">
						<h3>{{$career->department}}</h3>							
						<p><?php echo substr($career->description, 0, 90);?>...</p>
						<p class="career" data-id="{{$career->id}}" style="color:rgb(255, 51, 102);">{{$career->positions}} positions to be filled</p>
					</div>					
				</a>			
			</div>
			@endforeach
		</div>		
		<div class="col-md-12 subscribe-section">
		    <h1 style="font-style:italic;">Access the offers for this Sunday</h1>
		    <a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">Subscribe</a>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script>var user = @json(auth()->user());</script>
<script type="text/javascript" src="{{ url('js/customize/career.js') }}"></script>
@endsection