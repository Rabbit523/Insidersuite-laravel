@extends('layout')

@section('title','Insider Suite |  Create Experience')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('css/customize/create_experience.css') }}">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="{{ url('css/intlTelInput.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-gallery.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/pignose.calendar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/skippr.css') }}">
@endsection
@section('content')

<div id="site-content">
		<div class="_66jk8g">
			<div class="_36rlri">
				<a class="_1pp5so" href="#">
					<img src="images/IS-black.png" style="height: 45px;"/>
				</a>
			</div>
			<div class="_36rlri">
				<div class="_141w4qb">
					<a href="/create_experiences" class="_1k01n3v1" aria-busy="false">Menu</a>
				</div>
			</div>
			<div class="_19m5nfy">
				<div class="_36rlri">
					<a  href="/create_experiences" class="_1k01n3v1" aria-busy="false">Exit</button>
				</div>
			</div>
		</div>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3>Create<br>experience</h3>
            <p>BASICS</p>
        </div>
        <ul class="free-list">
            <li><a id="general" class="active">General informations</a></li>
            <li><a id="accomodation"> Accommodation</a></li>
            <li><a id="experience">Experience</a></li>
        </ul>
        <ul class="key-list">
            <li><a id="invite" class="disabled"><img src="imgs/icon-lock.png">Invite friends</a></li>
            <li><a id="review" class="disabled"><img src="imgs/icon-lock.png">Review & Submit</a></li>
            <li><a id="payment" class="disabled"><img src="imgs/icon-lock.png">Payment</a></li>
        </ul>
        <div class="sidebar-footer">
            <p class="_n5wk6ic">17items to submit</p>
        </div>
    </div>
    <div class="experience-content">
	    <section id="general_info">
	          <div class="header">
	              <h2>Let's get started creating your experience</h2>
	          </div>
	          <div class="form-general">
	              <div class="form-content">
	                  <label>Which city would you like to visit?</label>
	                  <input type="text" class="form-control" id="city" placeholder="Bali, Indonesia">
	              </div>
	              <div class="form-content">
	                  <label>When do you expect to arrive?</label>
	                  <input type="text" class="form-control" id="check" placeholder="Check-in">
	              </div>
	              <div class="form-content">
	                  <label>How many guests are with you?</label>
	                  <select id="guests" class="form-control">
	                      <option disabled selected value>for under 5 guests</option>
	                      <option value="5">for 5 guests</option>
	                      <option value="10">for 10 guests</option>
	                      <option value="15">for 15 guests</option>
	                      <option value="20">for 20 guests</option>
	                      <option value="20+">for over 20 guests</option>
	                  </select>
	              </div>
	              <div class="form-content">
	                  <label>What is the title of your experience?</label>
	                  <input type="text" class="form-control" id="experience_title" placeholder="E.g. Dance your way through Rio's smaba scene">
	              </div>
	              <div class="form-content">
	                  <button type="button" class="_d4g44p2" aria-busy="false"><span class="_cgr7tc7">Save &amp; Continue</span></button>
	              </div>
	          </div>
	    </section>
	    <section id="accommodation_info">
	        <div class="header">
	            <h2>Book the coolest affordable hotels in Bali.</h2>
	            <p>A selection of hotles verified for quality and comfort.</p>
	        </div>
	        <div id="form_accommodation">
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background7.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Entire villa - 4 beds</p>
										<p><b>180°C view, private pool villa...</b></p>
										<p style="text-transform: capitalize;">$231 AUD per night-Free Cancellation</p>
										<p>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">149 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/How_it_works.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/lover_cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Home1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Home_Cover3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Experience2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Entire cabin - 2 beds</p>
										<p><b>hideout bali - eco bamboo home</b></p>
										<p style="text-transform: capitalize;">$240 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">290 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/InsiderSuite_Experience.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_ex2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/Home_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>hut - 1 bed</p>
										<p><b>balian treehouse w beautiful pool</b></p>
										<p style="text-transform: capitalize;">$122 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">129 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background5.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Tree house - 2 beds</p>
										<p><b>Magical Treehouse *totally unique* Live the dream!</b></p>
										<p style="text-transform: capitalize;">$212 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">306 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background7.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Entire villa - 4 beds</p>
										<p><b>180°C view, private pool villa...</b></p>
										<p style="text-transform: capitalize;">$231 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">149 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/How_it_works.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/lover_cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Home1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Home_Cover3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Experience2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Entire cabin - 2 beds</p>
										<p><b>hideout bali - eco bamboo home</b></p>
										<p style="text-transform: capitalize;">$240 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">290 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/InsiderSuite_Experience.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_ex2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/InsiderSuite_Cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/Home_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>hut - 1 bed</p>
										<p><b>balian treehouse w beautiful pool</b></p>
										<p style="text-transform: capitalize;">$122 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">129 - Superhost</span></p>
									</div>
								</div>
							</div>
							<div class="detail accomodation">
								<ul class="gallery-slideshow">
									<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
									<li><img src="images/Background/background5.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								</ul>
								<div class="detail-info">
									<div class="location_name">
										<p>Tree house - 2 beds</p>
										<p><b>Magical Treehouse *totally unique* Live the dream!</b></p>
										<p style="text-transform: capitalize;">$212 AUD per night-Free Cancellation</p>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">306 - Superhost</span></p>
									</div>
								</div>
							</div>
	        </div>
	        <div class="selection">
	            <div class="selected">
	                <p>My selection<i class="fas fa-angle-down"></i></p>
	            </div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false"><span class="_cgr7tc7">Save my selection</span></button>
	                <button type="button" class="_ky1ga6g" aria-busy="false"><span class="_cgr7tc7">Undo</span></button>
	            </div>
	        </div>
	    </section>
	    <section id="experience_info">
	        <div class="header">
	            <h2>Enjoy exciting activities in Bali.</h2>
	            <p>Choose the category that best describes your experience. Add a second, if you think it fits into another category.</p>
	        </div>
	        <div id="form_experience">
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background7.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Entire villa - 4 beds</p>
									<p><b>180°C view, private pool villa...</b></p>
									<p style="text-transform: capitalize;">$231 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">149 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/How_it_works.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/lover_cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Home1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Home_Cover3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Experience2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Entire cabin - 2 beds</p>
									<p><b>hideout bali - eco bamboo home</b></p>
									<p style="text-transform: capitalize;">$240 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">290 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/InsiderSuite_Experience.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_ex2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/Home_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>hut - 1 bed</p>
									<p><b>balian treehouse w beautiful pool</b></p>
									<p style="text-transform: capitalize;">$122 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">129 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background5.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Tree house - 2 beds</p>
									<p><b>Magical Treehouse *totally unique* Live the dream!</b></p>
									<p style="text-transform: capitalize;">$212 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">306 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background7.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Entire villa - 4 beds</p>
									<p><b>180°C view, private pool villa...</b></p>
									<p style="text-transform: capitalize;">$231 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">149 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/How_it_works.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/lover_cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Home1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Home_Cover3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Experience2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Entire cabin - 2 beds</p>
									<p><b>hideout bali - eco bamboo home</b></p>
									<p style="text-transform: capitalize;">$240 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">290 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/InsiderSuite_Experience.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_ex2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/InsiderSuite_Cover.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/Home_Cover2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>hut - 1 bed</p>
									<p><b>balian treehouse w beautiful pool</b></p>
									<p style="text-transform: capitalize;">$122 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">129 - Superhost</span></p>
								</div>
							</div>
						</div>
						<div class="detail experience">
							<ul class="gallery-slideshow">
								<li><img src="images/Background/background2.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background3.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background1.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background4.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
								<li><img src="images/Background/background5.jpg" style="width: 205px; height: 170px;"/><i class="far fa-heart slide-like"></i></li>
							</ul>
							<div class="detail-info">
								<div class="location_name">
									<p>Tree house - 2 beds</p>
									<p><b>Magical Treehouse *totally unique* Live the dream!</b></p>
									<p style="text-transform: capitalize;">$212 AUD per night-Free Cancellation</p>
									<p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span style="text-transform: capitalize;">306 - Superhost</span></p>
								</div>
							</div>
						</div>
	        </div>
	        <div class="selection">
	            <div class="selected">
	                <p>My selection<i class="fas fa-angle-down"></i></p>
	            </div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false"><span class="_cgr7tc7">Save my selection</span></button>
	                <button type="button" class="_ky1ga6g" aria-busy="false"><span class="_cgr7tc7">Undo</span></button>
	            </div>
	        </div>
	    </section>
	    <section id="invite_info">
	        <div class="form-general">
	            <div class="form-content">
	                <label>Invite by email</label>
	                <input type="text" class="form-control" id="invite_email" placeholder="example@insidersuite.com">
	                <p>Enter email addresses seperated by commas.</p>
	            </div>
	            <div class="form-content">
	                <label>Include a message(optional)</label><br>
	                <textarea rows="3" name="content" id="invite_message" class="form-control"></textarea>
	            </div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false"><span class="_cgr7tc7">Send invites</span></button>
	            </div>
	            <div class="form-content">
	                <label>Invite with link</label><br>
	                <input type="text" id="share_link" class="form-control" value="{{ url('/signup?referal_code='.Auth::User()->referal_code) }}">
	                <p>Copy and message this link on any social network. Your friends can join the list from there.</p>
	            </div>
	        </div>
	    </section>
	    <section id="review_info">
	        <div class="review_form">
	        </div>
	        <div class="submit_form">
	            <div class="form_border">
	                <div class="header_form">
	                    <h3>Bali-Name of trip</h3>
	                    <p>2 adults</p>
	                    <p>Sun. 30 september, 16th - Mon. 1 october, 12th</p>
	                </div>
	                <div class="body_form">
	                    <div>
	                        <h6><b>Your package</b></h6>
	                        <span>Traditional Double Room * Breakfast * Access to the indoor pool & jacuzzi * Sauna & steam room access * Cups of ... </span><span>View more</span>
	                    </div>
	                    <div class="body_money">
	                        <h6>199€</h6>
	                        <p>276€</p>
	                    </div>
	                </div>
	                <div class="footer_form">
	                    <p><span id="title_stay">Your Staycation</span><span id="price_stay">1,90€</span></p>
	                    <p><span id="title_total" >Total</span><span id="new_price">200,90€</span><span id="old_price">277,90€</span></p>
	                    <button type="button" class="btn-submit" aria-busy="false"><span class="_cgr7tc7">Submit my trip</span></button>
	                    <p class="alert_text">Not cancellable, non-refundable</p>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section id="payment_info">
                  <div class="payment_form">
                      <h3>Contact Information</h3>
                      <div class="row">
                          <div class="col-md-12">
                              <radiogroup>
                                  <label class="radio-inline">
                                      <input type="radio" name="title" required="" value="Mr" @if(Auth::User()->title == 'Mr') {{ 'checked' }} @endif><span>Mr</span>
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="title" value="Mr" @if(Auth::User()->title == 'Mrs') {{ 'checked' }} @endif><span>Mrs</span>
                                  </label>
                                  <label class="radio-inline">
                                      <input type="radio" name="title" value="Ms" @if(Auth::User()->title == 'Ms') {{ 'checked' }} @endif><span>Ms</span>
                                  </label>
                              </radiogroup>
                          </div>
                      </div>
                      <div class="row margin">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label for="last_name">Surname*</label>
                              <input type="text" name="last_name" class="form-control" value="{{ Auth::User()->last_name }}" placeholder="Enter" required="">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label for="first_name">First name*</label>
                              <input type="text" name="first_name" class="form-control" value="{{ Auth::User()->first_name }}" placeholder="Enter" required="">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Phone*</label>
                              <input type="tel" id="phone_number" name="phone_number" class="form-control" value="{{ Auth::User()->phone_number }}">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Email*</label>
                              <input type="email" name="email" class="form-control" placeholder="Enter" value="{{ Auth::User()->email }}" required="">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Date of birth*</label>
                              <input type="text" name="datepicker" id="datepicker" class="form-control" placeholder="dd/mm/yyyy" required>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <form action="api/gift-payment" method="post" id="payment-form">
																<div class="form-row">
																	<label for="card-element">Credit or debit card</label>
																	<div id="card-element">
																	</div>
																	<div id="card-errors" role="alert"></div>
																</div>
																<button hidden>Submit Payment</button>
															</form>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <label>Promo code or gift card</label>
                              <input type="text" class="form-control" required placeholder="ABCD1234">
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <button id="apply">Apply</button>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <h3>Additional Info</h3>
                              <label>What is the reason for your staycation?</label><br>
                              <textarea rows="5" id="additional_info" required class="hm-form--control" placeholder="promised, we will keep this for us."></textarea>
                              <label><input type="checkbox" name="agree" id="agree">I have read and accept the <span style="color:rgb(255, 51, 102);">Terms and Conditions</span> of Staycation</label>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-6">
                              <p style="margin:0px;"><b>Total 207,90€</b></p>
                              <label>Not cancellable, non-refundable</label>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6">
                              <button id="pay">Validate and pay</button>
                          </div>
                      </div>
                  </div>
                  <div class="payment_inside">
                      <div class="form_border">
                          <div class="header_form">
                              <h3>Augerville Castle Golf & Spa</h3>
                              <p>2 adults</p>
                              <p>Sun. 30 september, 16th - Mon. 1 october, 12th</p>
                          </div>
                          <div class="body_form">
                              <div>
                                  <h6><b>Your package</b></h6>
                                  <span>Traditional Double Room * Breakfast * Access to the indoor pool & jacuzzi * Sauna & steam room access * Cups of ... </span><span>View more</span>
                              </div>
                              <div class="body_money">
                                  <h6>199€</h6>
                                  <p>276€</p>
                              </div>
                          </div>
                          <div class="footer_form">
                              <p><span id="title_stay">Your Staycation</span><span id="price_stay">1,90€</span></p>
                              <p><span id="title_total" >Total</span><span id="new_price">200,90€</span><span id="old_price">277,90€</span></p>
                              <p class="alert_text">Not cancellable, non-refundable</p>
                              <div class="methods">
                                  <p>Your payment is secure</p>
                                  <div class="advertise_imgs">
                                      <div class="visa"><img src="imgs/visa_master.jpg"/></div>
                                      <div class="nortorn"><img src="imgs/nortorn_https.png"/></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
    </div>
		<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-body-headers">
							<div class="modal-body-header">
								<div id="map"></div>
								<div class="headBg lazyloaded" data-bg="https://res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/h_620,q_auto:eco/v1497970672/common/static/home-logout/testimonials">
									<div class="modal-header-info">
										<button class="modal-header-btn"><i class="far fa-heart"></i><span>Add to my trip</span></button>
										<button class="modal-header-btn"><svg aria-hidden="true" data-prefix="fal" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-camera fa-w-16 fa-2x"><path fill="currentColor" d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z" class=""></path></svg><span>Discover the experience</span></button>
									</div>
								</div>
							</div>
							<div class="modal-sub-header">
							<div class="modal-map-info map_info">
				      	<h3 class="country">BALI Indonesia*****</h3>
			          <a class="map_link"><i class="far fa-map"></i><span>Map</span></a>
							</div>
				      <div class="modal-hotel-info">
				        <button class="modal-header-btn"><svg aria-hidden="true" data-prefix="fal" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-camera fa-w-16 fa-2x"><path fill="currentColor" d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z" class=""></path></svg><span>Discover the hotel</span></button>
				      </div>
						</div>
						</div>
						<div class="modal-body-contents">
							<div class="text-contents">
								<div class="part1-text">
									<div class="part1-header">
										<h3>The Barn ****</h3>
										<label>Moulin de Bretigny, 78830 Commune de Bonnelles <svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span>9.0</span>14 views</label>
									</div>
									<div class="part1-content">
										<p>Cape on the counterparts of the great west of Paris! Rogue your lassos and enjoy a few hours of airpur and wild life in the heart of the forest of Rambouillet, in a field and spaces of breathtaking beauty.</p>
										<p>3 good reasons to go:</p>
										<ul>
											<li>The rooms are set in large red barns with views of the pond or the surrounding meadows. A few meters below, an old mill houses a combo sauna-steam room inside and Nordic baths outdoors.</li>
											<li>Horses are never very far and promenades are proposed for budding or confirmed riders. You can choose to explore the surroundings on foot or by bike, we will be waiting in any case for a game of petanque or fly fishing.</li>
											<li>It is your ear that we murmur to advise you to dine on the spot: the card is short and the products fresh and seasonal. We include the excellent breakfast served under the beautiful verriere of the restaurant.</li>
										</ul>
									</div>
									<div class="part1-tabs">
										<div class="part1-tab-titles">
											<label id="experience">The experience</label>
											<label id="street">Street cred</label>
										</div>
										<div class="part1-tab">
											<div class="part1-tab-title">
												<h3>The experience</h3>
												<button class="modal-header-btn"><svg aria-hidden="true" data-prefix="fal" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-camera fa-w-16 fa-2x"><path fill="currentColor" d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z" class=""></path></svg><span>Discover the hotel</span></button>
											</div>
											<div class="part1-tab-content">
												<div class="part1-tab-content-detail">
													<img src="images/Background/background2.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background3.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background1.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background4.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background6.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background7.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background2.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
												<div class="part1-tab-content-detail">
													<img src="images/Background/background2.jpg" style="width: 110px; height: 70px;"/>
													<p>Included Superior<br>Double Room</p>
												</div>
											</div>
											<div class="part1-reviews">
												<div class="part1-tab-title">
													<h3>Street Cred</h3>
													<label><svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span>9.0</span>39 views</label>
												</div>
												<div class="part1-review">
													<div class="detail-review">
														<div class="review-avatar">
															<img src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar" width="50" height="50" style="margin-top: 16px;"/>
														</div>
														<div class="review-content">
															<p>Yann<span class="review-date">07 July 2018</span> - 1 staycation<span class="review-pattern"><svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span class="review-score">9.0</span></span></p>
															<p class="review-message">Depaysement total only with the sight. Breakfast very very rich ?????</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="setting-content">
								<div class="select_part">
                    <div class="hkJiNs"></div>
                    <div style="position:relative;">
                      <button type="button" class="ParticipantsFunnelButton dvuQnw juOFEj">
                        <div class="jMOJev">
                          <span class="dBZAHA">
                            <svg viewBox="0 0 24 24" width="18" height="18" color="white"><g fill="currentColor" fill-rule="nonzero"><path d="M23.75 22a.75.75 0 1 1-1.5 0v-1.625c0-2.235-2.23-4.204-5.28-4.562a.75.75 0 0 1 .175-1.49c3.742.439 6.605 2.969 6.605 6.052V22zM15.75 22a.75.75 0 1 1-1.5 0v-1.625c0-2.5-2.767-4.625-6.25-4.625s-6.25 2.125-6.25 4.625V22a.75.75 0 1 1-1.5 0v-1.625c0-3.428 3.513-6.125 7.75-6.125s7.75 2.697 7.75 6.125V22zM15.119 11.662a.75.75 0 0 1 .252-1.478c.268.045.453.066.629.066a3.755 3.755 0 0 0 3.75-3.75A3.755 3.755 0 0 0 16 2.75c-.18 0-.369.02-.627.066a.75.75 0 1 1-.258-1.478c.337-.058.605-.088.885-.088a5.255 5.255 0 0 1 5.25 5.25A5.255 5.255 0 0 1 16 11.75a5.03 5.03 0 0 1-.881-.088zM8 11.75a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 0 1 0 10.5zm0-1.5a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5z"></path></g></svg>
                          </span>
                          <span id="participants_adult">2 nights </span>
                        </div>
                        <span class="dBZAHA" id="down_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 8.83A.5.5 0 0 1 6.102 8h11.796a.5.5 0 0 1 .376.83l-5.898 6.74a.5.5 0 0 1-.752 0L5.726 8.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
                        <span class="dBZAHA" id="up_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 15.17l5.898-6.74a.5.5 0 0 1 .752 0l5.898 6.74a.5.5 0 0 1-.376.83H6.102a.5.5 0 0 1-.376-.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
                      </button>
                      <div class="dsssji">
                        <div class="TPxij">
                          <label class="ijjuLW">Night</label>
                          <span class="egudlU select_option" min="1" max="15">
                            <button type="button" class="fndzHx" id="adults_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
                            <label for="adults"><input id="adults" name="adults" readonly="" tabindex="-1" value="1"></label>
                            <button type="button" class="active fndzHx" id="adults_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button>
                        </div>
                        <button class="iCflgr">Apply</button>
                      </div>
                    </div>
                  </div>
								<div class="calender"></div>
								<div class="result-content">
									<div class="eUhMAS">
                    <span class="gTJpzd"><b>230€</b></span>
                    <del class="gNVZZi">230€</del>
                    <span class="dHEojY">-43%</span>
										<span class="dEIsw">More than 3</span>
                  </div>
									<button class="result-btn">Add to your trip</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal right fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-body-contents">
							<div class="text-contents">
								<div class="part1-text">
									<div class="part1-header">
										<h3>7surf Bali - Learn to surf!</h3>
										<p>Sports experience</p>
										<p>Hosted by Adam</p>
									</div>
									<div class="location-detail-info">
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu"><button type="button" class="_1k01n3v1" aria-busy="false">Las Vegas</button></div></div></div></div>
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="far fa-calendar-alt"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu">8 experiences over 4 days</div></div></div></div>
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="far fa-clock"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu">20 hours total</div></div></div></div>
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-home"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu">4 nights accommodation</div></div></div></div>
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-file-invoice"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu">6 meals, 4 tickets and Transportation</div></div></div></div>
										<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-comments"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu">Offered in English</div></div></div></div>
									</div>
									<div class="part1-content">
										<div class="form-info">
											<p class="header-form"><b>About your host, Adam</b></p>
											<p>Hello, I am Adam. I am from Great Britainm and I live in London. I have been surfing since I moved to Bali(2010), and I have worked in some big surf school companies in Bali. After many years working, I decided to start my own surf school(7surf). And I love my job. I would love to teach you surfing in Bali, and make your holiday experience one to remember.</p>
										</div>
										<div class="form-info">
											<p class="header-form"><b>What we'll do</b></p>
											<p>Come join us, and let us show you how to surf in Bali. We will teach you from the very basic 'till you become expert. We will not only push your suf board and tell you stand up. We will teach you how to catch the waves by your self and also how to control your surf board when you ride the waves. We are looking forward to meeting you and can not wait to take you to surf in Bali.</p>
											<p>Our lessons go for 2.5 hours:<br>&nbsp;&nbsp;-Practicals of beach and safety<br>&nbsp;&nbsp;-Instruction about paddling and standing up on the surf board<br>&nbsp;&nbsp;-Go surfing for 55 minutes<br>&nbsp;&nbsp;-Break time for 10 minutes, and<br>&nbsp;&nbsp;-Go surfing for another 55 minutes</p>
										</div>
										<div class="form-info">
											<p class="header-form"><b>What I'll provide</b></p>
											<p>Cold Water<i class="fas fa-beer"></i></p>
											<p>Pick up and return<i class="fas fa-car"></i></p>
											<p>We provide free pick up and return via scooter around Kuta, Legian and Seminyak.</p>
										</div>
									</div>
									<div class="information_practice">
										<h3>Informations pratiques</h3>
										<div class="detail_practice">
											<div class="text_detail_practice">
												<div class="schedule">
													<label><b>Schedule</b></label>
													<div class="row_form spec_form">
														<div class="uni-form">
															<div>Check in</div>
															<input type="text" placeholder="From 15h">
														</div>
														<div class="uni-form">
															<div>Check out</div>
															<input type="text" placeholder="Untill 12h">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Breakfast</div>
															<input type="text" placeholder="6:30 - 10:30">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Access Jacuzzi</div>
															<input type="text" placeholder="10:00 - 19:00(closed on Mondays)">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Access to sauna & steam room</div>
															<input type="text" placeholder="10:00 - 19:00(closed on Mondays)">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Access Gym</div>
															<input type="text" placeholder="24/7">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Price of velos</div>
															<input type="text" placeholder="07:00 - 23:00">
														</div>
													</div>
												</div>
												<div class="access">
													<label><b>Accessibility</b></label>
													<div class="row_form">
														<div class="uni-form">
															<div>Number of rooms</div>
															<input type="text" placeholder="121 rooms">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>PMR access</div>
															<input type="text" placeholder="yes">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Animoux</div>
															<input type="text" placeholder="no">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Baby sitter</div>
															<input type="text" placeholder="no">
														</div>
													</div>
												</div>
												<div class="get_there">
													<label><b>How to get there?</b></label>
													<div class="row_form">
														<div class="uni-form">
															<div>Address</div>
															<input type="text" placeholder="40 rue Rene Boulanger, 75010 Paris">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Metro</div>
															<input type="text" placeholder="Republic (lines 3, 5, 8, 9 and 11)">
														</div>
													</div>
													<div class="row_form">
														<div class="uni-form">
															<div>Car park</div>
															<input type="text" placeholder="Private parking with valet parking included">
														</div>
													</div>
												</div>
											</div>
											<div class="map_detail_practice">
												<div class="map-image">
													<img  src="images/temp/sydney.jpg" class="rISBZc M4dUYb" height="160" style="width: 100%;" title="https://www.telegraph.co.uk/travel/destinations/europe/france/paris/" alt="Image result for paris" data-atf="3"/>
													<div id="location_map"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="part1-tabs">
										<div class="part1-tab">
											<div class="part1-reviews">
												<div class="part1-tab-title">
													<h3>Street Cred</h3>
													<label><svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span>9.0</span>39 views</label>
												</div>
												<div class="part1-review">
													<div class="detail-review">
														<div class="review-avatar">
															<img src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar" width="50" height="50" style="margin-top: 16px;"/>
														</div>
														<div class="review-content">
															<p>Yann<span class="review-date">07 July 2018</span> - 1 staycation<span class="review-pattern"><svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span class="review-score">9.0</span></span></p>
															<p class="review-message">Depaysement total only with the sight. Breakfast very very rich ?????</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="setting-content">
								<ul class="theTarget">
	              	<li> <img src="https://a0.muscache.com/im/pictures/cf95ed8b-683a-4ccb-ac3e-0573729d59c3.jpg?aki_policy=poster" style="width: 351px; height: 400px;"/><p class="slide-title">7surfbali-Learn to surf in Bali</p></li>
	                <li> <img src="https://a0.muscache.com/im/pictures/9ca1a9e2-c5e0-4143-bbc5-b50bdeb29a1a.jpg?aki_policy=poster" style="width: 351px; height: 400px;"/><p class="slide-title">7surfbali-Learn to surf in Bali</p></li>
	                <li> <img src="https://a0.muscache.com/im/pictures/0f3099e8-46ed-4c99-a40c-8c5ba48ebd77.jpg?aki_policy=poster" style="width: 351px; height: 400px;"/><p class="slide-title">7surfbali-Learn to surf in Bali</p></li>
	                <li> <img src="https://a0.muscache.com/im/pictures/994c576d-e0a8-4068-a886-feb19697ee83.jpg?aki_policy=poster" style="width: 351px; height: 400px;"/><p class="slide-title">7surfbali-Learn to surf in Bali</p></li>
	                <li> <img src="https://a0.muscache.com/im/pictures/d0692f22-602f-4957-a749-fa2aefe65a89.jpg?aki_policy=poster" style="width: 351px; height: 400px;"/><p class="slide-title">7surfbali-Learn to surf in Bali</p></li>
		            </ul>
								<div class="social-links">
									<div class="social-icons">
										<i class="fab fa-facebook-f"></i>
										<i class="fab fa-twitter"></i>
										<i class="fas fa-envelope"></i>
										<img src="imgs/code_circle.png" width="15" height="15" style="margin-top:-5px;"/>
										<i class="fas fa-ellipsis-h" style="padding-left: 15px;"></i>
										<span>Save to list <i class="far fa-heart" style="padding-right:0px;"></i></span>
									</div>
								</div>
								<div class="price-info">
									<div class="eUhMAS">
                    <span class="gTJpzd"><b>249€</b></span>
                    <del class="gNVZZi">344€</del>
                    <span class="dHEojY">-28%</span>
										<span class="dEIsw">More than 2</span>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<span style="text-transform: capitalize;">39 reviews</span></p>
                  </div>
									<div class="_53ak5m">
										<section>
											<div class="_12ei9u44">
												<h2 tabindex="-1" class="_tpbrp">When do you want to go?</h2>
											</div>
										</section>
										<div style="margin-top: 16px;margin-bottom: 16px;">
											<div class="_1bvsgufu">If you don’t find the dates you want, you can always <button type="button" class="_1k01n3v1" aria-busy="false">ask Adam</button> to see if they can make room.</div>
										</div>
									</div>
								</div>
								<div class="calender"></div>
								<div class="result-content">
									<button class="result-btn">Add to your trip</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection

@section ('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ url('js/utils.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/data.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/intlTelInput.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery-gallery.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/moment.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/pignose.calendar.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/skippr.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/customize/create_experience.js') }}"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPzXAXjAyEIcluDJSMgRRBffUCrbNq1Bc&callback=initMap"></script>
		<script>
		  function initMap() {
		    var uluru = {lat: -33.865143, lng: 151.209900};
		    var mapOptions = {
		        zoom: 14,
		        center: new google.maps.LatLng(uluru.lat,uluru.lng),
		        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#378b90"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#31b9c1"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#31b9c1"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#31b9c1"}]}]
		    };
				var mapOptions1 = {
		        zoom: 14,
		        center: new google.maps.LatLng(uluru.lat,uluru.lng)
		    };
		    var mapElement = document.getElementById('map');
				var mapElement1 = document.getElementById('location_map');
		    var map = new google.maps.Map(mapElement, mapOptions);
				var map1 = new google.maps.Map(mapElement1, mapOptions1);

		    var marker = new google.maps.Marker({
		        position: uluru,
		        map: map,
		        title: 'Snazzy!'
		    });
				var marker1 = new google.maps.Marker({
		        position: uluru,
		        map: map1,
		        title: 'Snazzy!'
		    });
		  }
		</script>
    <script src="https://js.stripe.com/v3/"></script>
		<script>
			$('.gallery-slideshow').slideshow({
		    interval: 5000,
		    width: 205,
		    height: 170
		  });
			$('.theTarget').slideshow({
		    interval: 8000,
		    width: 351,
		    height: 400
		  });
			var stripe = Stripe('pk_test_vHzm4MRyBzIThy8sQxLNI81z');
			var elements = stripe.elements();
			var style = {
				base: {
					color: '#32325d',
					lineHeight: '18px',
					fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
					fontSmoothing: 'antialiased',
					fontSize: '16px',
					'::placeholder': {
					color: '#aab7c4'
					}
				},
				invalid: {
					color: '#fa755a',
					iconColor: '#fa755a'
				}
			};
			var card = elements.create('card', {style: style});
			card.mount("#card-element");

			// Handle real-time validation errors from the card Element.
			card.addEventListener('change', function(event) {
				var displayError = document.getElementById('card-errors');
				if (event.error) {
					displayError.textContent = event.error.message;
				} else {
					displayError.textContent = '';
				}
			});

			// Handle form submission.
			var form = document.getElementById('payment-form');
			form.addEventListener('submit', function(event) {
				event.preventDefault();

				stripe.createToken(card).then(function(result) {
					if (result.error) {
						// Inform the user if there was an error.
						var errorElement = document.getElementById('card-errors');
						errorElement.textContent = result.error.message;
					} else {
						// Send the token to your server.
						stripeTokenHandler(result.token);
					}
				});
			});

			function stripeTokenHandler(token) {
				// Insert the token ID into the form so it gets submitted to the server
				var form = document.getElementById('payment-form');
				var hiddenInput = document.createElement('input');
				hiddenInput.setAttribute('type', 'hidden');
				hiddenInput.setAttribute('name', 'stripeToken');
				hiddenInput.setAttribute('value', token.id);
				form.appendChild(hiddenInput);

				var hiddenInput1 = document.createElement('input');
				hiddenInput1.setAttribute('type', 'hidden');
				hiddenInput1.setAttribute('name', 'amount');
				hiddenInput1.setAttribute('value', $("#amount").val());
				form.appendChild(hiddenInput1);

				var hiddenInput2 = document.createElement('input');
				hiddenInput2.setAttribute('type', 'hidden');
				hiddenInput2.setAttribute('name', 'email');
				hiddenInput2.setAttribute('value', $("#customer_email").val());
				form.appendChild(hiddenInput2);

				// Submit the form
				form.submit();
			}
		</script>
@endsection
