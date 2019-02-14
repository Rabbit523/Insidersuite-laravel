@extends('layout')
@section('head')
@parent
<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);</style>
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/about.css') }}">
@endsection
@section('title','Insider Suite |  How it works')

@section('content')
<div id="site-content">
	<img class="our-story-banner1" src="{{ url('imgs/how_it_works.jpg') }}">
	<div class="container">
		<div id="shopify-section-1532006133324" class="shopify-section">
			<div class="hm-splash-page--benefits" id="jointhetribe">
				<h3>It is the best-kept travel secret...
</h3>
				<div class="hm-splash-page--benefit-container">
					<div class="hm-splash-page--benefit-item">
						<img src="../imgs/benefit-3_pink.png" alt="">
						<h4>First-come, first-served</h4>				
						<p>If our members enjoy <b>exclusive rates</b> it is because our offers are in <b>limited quantities</b>, so <b>be quick</b></p>
					</div>		
					<div class="hm-splash-page--benefit-item">				
						<img src="../imgs/benefit-2_pink.png" alt="">
						<h4>Personalize your Holiday</h4>				
					<p><b>A complete day-by-day itinerary</b> based on your <b>personal interests</b> and <b>preferences</b>. <b>New experiences, new surprises</b>. your Holiday will no longer be the same.</p>
					</div>		
					<div class="hm-splash-page--benefit-item">				
						<img src="../imgs/benefit-1_pink.png" alt="" style="height: 197px;margin-bottom: 31px;">
						<h4>Share with us your experience</h4>
                        <p>Help us shape the future of Insider Suite by <b>voting for new destinations</b> and <b>new activities</b>.</p>
					</div>
				</div>
			</div>
		</div>		
		<div class="_1x0jb4k">
			<div class="_1hcsc9i" style="margin-bottom: 24px;">
				<h1 class="_177p5wr"><span>The Much Better 'Why'</span></h1>
			</div>
			<div class="_2h22gn">
				<div class="_ns9mjq2">
					<div style="margin-bottom: 24px; margin-right: 8px;">
						<div>
							<div class="_qufr4s">
								<img src="https://a0.muscache.com/airbnb/static/homes/safety_icon1-4b62aad5145ca1aba99d913863ac4321.png" alt="$1,000,000 Host Guarantee" class="_1k5k1h2" role="presentation" aria-hidden="true" focusable="false">
							</div>
							<h2 class="_y93c7s">A service of confidence</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
								<span>Our Customer Service is standing by every day of the week to provide travel advice and answer any questions you may have. Our team are always happy to help, each step of the way!</span>
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
							<h2 class="_y93c7s">Oustanding style</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
                                   <span>We do not believe that a unique location can be reduced to fixed criteria. We are always on the lookout for outstanding places to enrich our collection.
                                </span>
							</div>
						</div>
					</div>
				</div>
				<div class="_ns9mjq2">
					<div style="margin-bottom: 24px; margin-right: 8px;">
						<div>
							<div class="_qufr4s">
								<img src="https://a0.muscache.com/airbnb/static/homes/safety_icon3-4c5a56e8703bf29db342bffa8d16f9b7.png" class="_1k5k1h2" role="presentation" aria-hidden="true" focusable="false">
							</div>
							<h2 class="_y93c7s">Travel freely</h2>
						</div>
						<div class="_1qtdxdb">
							<div class="_ncwphzu">
								<span>Financial peace of mind as standard. Prepare and pay all the step of your trip in advance so you do not have carry cash anymore.</span>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="section_sub">
			<h1>Design your next trip</h1>
			<a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">See all sales</a>
		</div>
	</div>
</div>
@endsection
