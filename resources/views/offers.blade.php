{{-- {{ dd($google_contacts) }} --}}
@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Bootstrap and default Style -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > --}}
<!-- Google Fonts -->
<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet' type='text/css'>
<!-- Animate CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer.css') }}">
@endsection

@section('content')
<div id="site-content">
	<div class="row content static-banner">
		<div class="head head--common">
			<div class="headBg lazyloaded" data-bg="https://images1.bovpg.net/vpi/fr/front/uploaded/showroom-header-pics/borabora_desktop.jpg" style="background-image: url(&quot;https://images1.bovpg.net/vpi/fr/front/uploaded/showroom-header-pics/borabora_desktop.jpg&quot;);"></div>
			<div class="messages show common">
				<div><span class="header_title">{{Auth::User()->username}},</span><span class="header_message">Where is your next crush?</span></div>
			</div>
		</div>
	</div>
	<div class="row content page-container">		
		<div class="body-title">
			<h2>Discov<u>er our fl</u>ash sales</h2>
		</div>
		<div class="body">
			@if($count == 0)
			<h4>There is nothing!</h4>
			@endif
			@foreach($offers as $offer)
			<div class="body-item" data-bg="{{$offer->img_path}}" style="background-image: url('{{$offer->img_path}}');" id="offer{{$offer->id}}">
				<div class="description">
					<div class="description_title">
						<h2>{{$offer->location_place}}</h2>
						<p>{{$offer->location_country}}</p>
					</div>
					<hr>
					<div class="description_body">
						<h1>{{$offer->offer_name}} ****</h1>
						<div class="sub_body_quote">
							<span class="quote">“</span>
						</div>
						<div class="sub_body_text">
							<h1>Punchline</span>
						</div>
					</div>
					<div class="description_footer">
						<a class="offer_detail btn btn-subscribe"><span class="button_text">Up to {{$offer->discount}}% OFF</span></a>
					</div>
				</div>
				<div class="props">
					<div class="prop_top">
						<img src="../imgs/white_heart.png" class="offer_heart">							
					</div>
					<div class="prop_bottom">
						<img src="../imgs/white_clock.png" class="offer_heart">
						<span class="time_left">{{$offer->time_duration}} hours left</span>
					</div>
				</div>
				<div class="responsive-props-heart">					
					<div class="responsive_prop">
						<img src="../imgs/white_heart.png" class="offer_heart">							
					</div>
				</div>
				<div class="responsive-props">
					<div class="responsive_prop">
						<img src="../imgs/white_clock.png" class="offer_heart">
						<span class="time_left">{{$offer->time_duration}} hours left</span>
					</div>			
				</div>					
				<div class="responsive-description">
					<div class="responsive-des-text">
						<h3>{{$offer->location_place}} / {{$offer->location_country}}</h3>
						<p>{{$offer->offer_name}} **** Punchline</p>
					</div>
					<a class="btn btn-detail"><span class="button_text">Up to {{$offer->discount}}% OFF</span></a>
				</div>
			</div>
			@endforeach
			{{$offers->links()}}
		</div>
	</div>
</div>

@endsection

@section('foot')
@parent
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://connect.facebook.net/en_US/sdk.js"></script> -->
<script type="text/javascript" src="{{ url('js/customize/offer.js') }}"></script>
@endsection