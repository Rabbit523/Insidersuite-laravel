@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
	@parent
	<style type="text/css">
		#site-content{
			background-color: #e6e6e6;
		}
		.card-body{
			background-color: white;
			height: 84px;
			padding: 0px 10px;
		}
		.hotel-grid{
			margin: 20px auto;
		}
		.time-remaining{
			position: absolute;
			bottom: 95px;
			left: 30px;
			color: white;
			font-size: 10pt;
		}
		p{
			font-size: 10pt !important;
		}
		.banner-heading{
			display: flex;
			align-items: center;
			justify-content: center;
			top: 50%;
			font-size: 30pt;
		}
		.container{
			max-width: 1000px;
		}
		.card-title > h4{
			margin-bottom: 0px;
		}
		a:hover{
			color: black;
		}
		strong > span{
			font-size: 18pt;
		}
		.discount-section{
			float:right;
			border-left:1px solid grey;
			padding:1rem 1rem 0.7rem 1rem;
		}
		@media (max-width: 992px){
			.hotel-grid{
				margin: 20px auto auto;
			}
		}
	</style>

@endsection

@section('content')

<div class="row" id="site-content">
	<div class="row">
		<div class="col-md-12">
			<img class="our-story-banner" src="{{ url('imgs/InsiderSuite_How_It_Works.jpg') }}">
			<h1 class="banner-heading"><i>{{ Auth::User()->username }}</i>,</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			@if(count($hotels) > 0)
				@foreach($hotels as $key => $hotel)
					<a href="{{ url('hotel/details/'.$hotel->hotel_id) }}">
						<div class="col-xs-12 col-md-6 hotel-grid">
							<div class="card">
								<div class="time-remaining">
									@php
										$now = time(); // or your date as well
										$your_date = strtotime($hotel->time_remaining);
										$datediff = $now - $your_date;
										$datediff = round($datediff / (60 * 60 * 24));
									@endphp
									<i class="far fa-clock" aria-hidden="true"></i> {{ $datediff }}  Days Remaining
								</div>
								<img class="card-img-top img-responsive" src="{{ url($hotel->banner_image) }}">
								<div class="card-body">
									<div style="width:75%;float:left">
										<div class="card-title">
											<h4 style="font-family:courier;text-align:left"><i><strong>{{ $hotel->country }}/{{ $hotel->city }}</strong></i></h4>
										</div>
										<div class="card-text">
											<p style="text-align:left">{{ $hotel->list_quote }}
											<br>{{ $hotel->name }}</p>
										</div>
									</div>
									<div style="width: 25%;float:right">
										<p class="discount-section">
											upto <br>	
											<strong><span>{{ $hotel->discount }}%</span></strong>
										</p>
									</div>
								</div>
							</div>
						</div>
					</a>
				@endforeach
			@endif
		</div>
	</div>
</div>

@endsection