@extends('layout')
@section('head')
@parent
<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);</style>
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/about.css') }}">
@endsection
@section('title','Insider Suite |  The club that offers private sales on luxury hotels')

@section('content')
<div id="site-content">
	<div class="row">
		<div class="col-md-12">
			<img class="our-story-banner" src="{{ url('images/Background/background1.jpg') }}">
		</div>
	</div>
	<div class="container">
		<div id="shopify-section-1532006133324" class="shopify-section">
			<div class="hm-splash-page--benefits" id="jointhetribe">
				<h3>Tribe benefits</h3>
				<div class="hm-splash-page--benefit-container">
					<div class="hm-splash-page--benefit-item">
						<img src="//cdn.shopify.com/s/files/1/2785/2466/files/benefit-3_230x.png?v=1530203215" alt="">				
						<h4>Premium offers</h4>				
						<p>Early members gain access<br>to limited member offers.</p>
					</div>		
					<div class="hm-splash-page--benefit-item">				
						<img src="//cdn.shopify.com/s/files/1/2785/2466/files/benefit-2_230x.png?v=1530203241" alt="">				
						<h4>Exclusive access</h4>				
						<p>Get exclusive pre-access to our latest fashion drops.</p>
					</div>		
					<div class="hm-splash-page--benefit-item">				
						<img src="../images/benefit-1_230x5d5f.png" alt="" style="height: 197px;margin-bottom: 31px;">				
						<h4>Have your say</h4>				
						<p id="text-hide">Help us shape the future<br>of Nyden by voting for<br>designs and suggesting<br>сollaborations.</p>
						<p id="text-show">Help us shape the future of Nyden by voting for designs and suggesting сollaborations.</p>
					</div>
				</div>
			</div>
		</div>		
		<div class="_1x0jb4k">
			<div class="_1hcsc9i" style="margin-bottom: 24px;">
				<h1 class="_177p5wr"><span>Safety on Insidersuite</span></h1>
			</div>
			<div class="_2h22gn">
				<div class="_ns9mjq2">
					<div style="margin-bottom: 24px; margin-right: 8px;">
						<div>
							<div class="_qufr4s">
								<img src="https://a0.muscache.com/airbnb/static/homes/safety_icon1-4b62aad5145ca1aba99d913863ac4321.png" alt="$1,000,000 Host Guarantee" class="_1k5k1h2" role="presentation" aria-hidden="true" focusable="false">
							</div>
							<h2 class="_y93c7s">$1,000,000 Host Guarantee</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
								<span>In the rare event of accidental damage, the property of every Airbnb host is covered up to a million dollars. It’s peace of mind at no extra charge.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="_ns9mjq2">
					<div style="margin-bottom: 24px; margin-right: 8px;">
						<div>
							<div class="_qufr4s">
								<img src="https://a0.muscache.com/airbnb/static/homes/safety_icon2-e907598e4aff7bd16dae1e40d32f24da.png" alt="Host Protection Insurance" class="_1k5k1h2" role="presentation" aria-hidden="true" focusable="false">
							</div>
							<h2 class="_y93c7s">Host Protection Insurance</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
								<span>If your guests get hurt or cause property damage, our Host Protection Insurance protects you from liability claims up to a million dollars, included free for every Airbnb host.</span>
							</div>
						</div>
					</div>
				</div>
				<div class="_ns9mjq2">
					<div style="margin-bottom: 24px; margin-right: 8px;">
						<div>
							<div class="_qufr4s">
								<img src="https://a0.muscache.com/airbnb/static/homes/safety_icon3-4c5a56e8703bf29db342bffa8d16f9b7.png" alt="Airbnb is built on trust" class="_1k5k1h2" role="presentation" aria-hidden="true" focusable="false">
							</div>
							<h2 class="_y93c7s">Airbnb is built on trust</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
								<span>All Airbnb travelers must submit a profile photo and verify their phone &amp; email. Hosts can also require a government ID. Guests and hosts each publish reviews after check out keeping everyone accountable and respectful.</span>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="section_sub">
			<h1>Access the offers for this Sunday</h1>
			<a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">Subscribe</a>
		</div>
	</div>
</div>
@endsection