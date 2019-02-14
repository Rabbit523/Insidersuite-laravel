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
			<div class="headBg lazyloaded" style="background-image: url(&quot;https://www.insidersuite.com/imgs/offer.jpg&quot;);"></div>
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
			@for($i = 0; $i < $count; $i ++)
				@if($i % 4 == 0)
				<div class="body-row">
				<div class="body-item offer body-type1" style="background-image: url('{{$offers[$i]['img_path']}}');" data-source="{{$offers[$i]->id}}" data-status="{{$offers[$i]->status}}">
					@if ($offers[$i]->status == "false")
					<div class="unactive-type1"><svg aria-hidden="true" data-prefix="fal" data-icon="lock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-lock-alt fa-w-14 fa-2x"><path fill="currentColor" d="M224 420c-11 0-20-9-20-20v-64c0-11 9-20 20-20s20 9 20 20v64c0 11-9 20-20 20zm224-148v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48h16v-64C64 71.6 136-.3 224.5 0 312.9.3 384 73.1 384 161.5V224h16c26.5 0 48 21.5 48 48zM96 224h256v-64c0-70.6-57.4-128-128-128S96 89.4 96 160v64zm320 240V272c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v192c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16z" class=""></path></svg><p>Locked</p></div>
					@endif
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[$i]['location_place']}}</h2>
							<p>{{$offers[$i]['location_country']}}</p>
						</div>
					</div>
				</div>
				@if($i >= $count - 1)</div>@endif
				@endif
				@if($i % 4 == 1)
				<div class="body-item offer body-type2" style="background-image: url('{{$offers[$i]['img_path']}}');" data-source="{{$offers[$i]->id}}" data-status="{{$offers[$i]->status}}">
					@if ($offers[$i]->status == "false")
					<div class="unactive-type2"><svg aria-hidden="true" data-prefix="fal" data-icon="lock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-lock-alt fa-w-14 fa-2x"><path fill="currentColor" d="M224 420c-11 0-20-9-20-20v-64c0-11 9-20 20-20s20 9 20 20v64c0 11-9 20-20 20zm224-148v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48h16v-64C64 71.6 136-.3 224.5 0 312.9.3 384 73.1 384 161.5V224h16c26.5 0 48 21.5 48 48zM96 224h256v-64c0-70.6-57.4-128-128-128S96 89.4 96 160v64zm320 240V272c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v192c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16z" class=""></path></svg><p>Locked</p></div>
					@endif
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[$i]['location_place']}}</h2>
							<p>{{$offers[$i]['location_country']}}</p>
						</div>
					</div>
				</div>
				</div>
				@endif			
				@if($i % 4 == 2)
				<div class="body-row">
					<div class="body-item offer body-type2" style="background-image: url('{{$offers[$i]['img_path']}}');" data-source="{{$offers[$i]->id}}" data-status="{{$offers[$i]->status}}">
						@if ($offers[$i]->status == "false")
						<div class="unactive-type2"><svg aria-hidden="true" data-prefix="fal" data-icon="lock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-lock-alt fa-w-14 fa-2x"><path fill="currentColor" d="M224 420c-11 0-20-9-20-20v-64c0-11 9-20 20-20s20 9 20 20v64c0 11-9 20-20 20zm224-148v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48h16v-64C64 71.6 136-.3 224.5 0 312.9.3 384 73.1 384 161.5V224h16c26.5 0 48 21.5 48 48zM96 224h256v-64c0-70.6-57.4-128-128-128S96 89.4 96 160v64zm320 240V272c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v192c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16z" class=""></path></svg><p>Locked</p></div>
						@endif
						<div class="description">
							<div class="description_title">
								<h2>{{$offers[$i]['location_place']}}</h2>
								<p>{{$offers[$i]['location_country']}}</p>
							</div>
						</div>
					</div>
					@if($i >= $count - 1)
					<div class="body-item body-type4">
						<div class="request">
							<div class="world-conquest">
								<h3>World conquest plan</h3>
								<p class="world-conquest-phrase">
									So many new places to explore! Let us know which city
									the Insider Suite collective should investigate next for
									cool experience.
								</p>
								<p><a class="btn btn-info" href="mailto:contact@insidersuite.com">Suggest a city</a></p>
							</div>
						</div>
					</div>
				</div>@endif				
				@endif
				@if($i % 4 == 3)
				<div class="body-item offer body-type3" style="background-image: url('{{$offers[$i]['img_path']}}');" data-source="{{$offers[$i]->id}}" data-status="{{$offers[$i]->status}}">
					@if ($offers[$i]->status == "false")
					<div class="unactive-type1"><svg aria-hidden="true" data-prefix="fal" data-icon="lock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-lock-alt fa-w-14 fa-2x"><path fill="currentColor" d="M224 420c-11 0-20-9-20-20v-64c0-11 9-20 20-20s20 9 20 20v64c0 11-9 20-20 20zm224-148v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48h16v-64C64 71.6 136-.3 224.5 0 312.9.3 384 73.1 384 161.5V224h16c26.5 0 48 21.5 48 48zM96 224h256v-64c0-70.6-57.4-128-128-128S96 89.4 96 160v64zm320 240V272c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v192c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16z" class=""></path></svg><p>Locked</p></div>
					@endif
					<div class="description">
						<div class="description_title">
							<h2>{{$offers[$i]['location_place']}}</h2>
							<p>{{$offers[$i]['location_country']}}</p>
						</div>
					</div>
				</div>
				</div>
				@endif
			@endfor
			@if($count % 2 == 0)
			<div class="body-item body-type5">
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
			@endif
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
