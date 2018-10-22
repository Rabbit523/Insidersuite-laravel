{{-- {{ dd($google_contacts) }} --}}
@extends('layout')

@section('title','Insider Suite |  Offers')
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
			<div class="headBg lazyloaded" style="background-image: url(&quot;https://images1.bovpg.net/vpi/fr/front/uploaded/showroom-header-pics/borabora_desktop.jpg&quot;);"></div>
			<div class="messages show common">
				<div><span class="header_title">{{Auth::User()->username}},</span><span class="header_message">Where is your next crush?</span></div>
			</div>
		</div>
	</div>
	<div class="row content page-container">
		<div class="body-title">
			<h3>Discov<u>er new </u>cities</h3>
		</div>
		<div class="body">
			@if($count == 0)
			<h4>There is nothing!</h4>
			@endif

			<div class="body-row">
				<div class="body-item body-type1 offer" style="background-image: url('{{$offers[2]->img_path}}');">
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[2]->location_place}}</h2>
							<p>{{$offers[2]->location_country}}</p>
						</div>
					</div>
				</div>
				<div class="body-item body-type2" style="background-image: url('{{$offers[1]->img_path}}');">
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[1]->location_place}}</h2>
							<p>{{$offers[1]->location_country}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="body-row">
				<div class="body-item body-type2" style="background-image: url('{{$offers[0]->img_path}}');">
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[0]->location_place}}</h2>
							<p>{{$offers[0]->location_country}}</p>
						</div>
					</div>
				</div>
				<div class="body-item body-type3" style="background-image: url('{{$offers[3]->img_path}}');">
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[3]->location_place}}</h2>
							<p>{{$offers[3]->location_country}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="body-row">
				<div class="body-item body-type2" style="background-image: url('{{$offers[4]->img_path}}');">
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[4]->location_place}}</h2>
							<p>{{$offers[4]->location_country}}</p>
						</div>
					</div>
				</div>
				<div class="body-item body-type4">
					<div class="request">
						<div class="world-conquest">
							<h3>World conquest plan</h3>
							<p class="world-conquest-phrase">
								So many new places to explore! Let us know which city
								the NightNight collective should investigate next for
								cool affordable hotels.
							</p>
							<p><a class="btn btn-info" href="mailto:contact@insidersuite.com">Suggest a city</a></p>
						</div>
					</div>
				</div>
			</div>
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
