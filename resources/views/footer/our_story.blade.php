@extends('layout')

@section('title','Insider Suite | Our story')
@section('content')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/our_story.css') }}">
@endsection

<div id="site-content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="normal-section" src="../imgs/Our_story_1.jpg" alt="">
			</div>
			<div class="col-md-6">
				<div class="normal-section">
					<b><h2>How we got started</h2></b><br>
					<p>Insider Suite started with a challenging question: What if the indulgence of luxury holiday travel could be opened to us? What if travel could be with less plans and more freedom ?</p>
					<p>At Insider Suite we know how frustrating it is to spend tons of time organising holiday and subsequently we’re working toward a common goal; finding new way to travel - free and authentic, in exceptional homes.</p>
					<p>Travel for us means giving yourself enough time to refresh your mind and body while building beautiful memories. It means fully living each moment, surrounded by your loves ones, without constraint.</p>
					<p>All journeys have secret destinations of which Insider Suite is aware of…</p>
				</div>
			</div>
		</div>		
		<div class="row">
			<div class="col-md-6">
				<div class="normal-section">
					<b><h2>We are Insider Suite</h2></b><br>
					<p>We believe in empowering creativity to redifine traveling.</p>
					<p>Our travel experts seek out the best spots around the world, sharing our insider tips and secrets to guarantee a unique experience. Insider Suite has built itself on its exigence for luxury and its ability to provide exclusive offers to get the best possible deal with discounts of up to 70% in some the finest hotels around the world. The entire Insider Suite team is engaged to make your trip a bespoke and unforgettable experience!</p>
					<p>By the way, we really hope to see you soon. We can't wait to show you the best of each destination we offer.</p>
				</div>
			</div>
			<div class="col-md-6">
				<img class="normal-section" src="../imgs/Our_story_2.jpg" alt="">
			</div>
		</div>
		
		<div class="section_sub">
			<h1>Design your next trip</h1>
			<a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">See all sales</a>
		</div>
	</div>
</div>


@endsection
