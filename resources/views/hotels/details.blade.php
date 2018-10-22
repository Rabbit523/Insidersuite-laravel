@extends('layout')

@section('title','Insider Suite |  Hotels')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
.carousel-inner{
	max-height: 500px;
}
.carousel-inner > .item{
	background-position: center center;
	height: 300px;
	background-size: cover;
}
.container{
	max-width: none;
}
.hotel-map{
	height: 100%;
	padding: 20px;
}
.hotel-map span{
	font-size: 13pt;
}
.our-promise-section{
	border-top: 3px solid #e6e6e6;
}
.our-promise-section img{
	margin: auto;
}
.our-promise-section ul{
	padding: 0px;
}
.show-more{
	text-decoration: underline;
	color: #bd1343;
	font-size: small;

}
.show-less{
	display: none;
	text-decoration: underline;
	color: #bd1343;
	font-size: small;

}
.show-more-details{
	display: none;
}
.show-more-details h3{
	font-size: 16px;
	font-weight: bolder;
}
ul.dashed{
	padding-left: 10px;
	list-style: none;
}
ul.dashed > li {
  text-indent: -5px;
  font-size: 12px;
}
ul.dashed > li::before{
	content: "-";
	text-indent: -5px;
}
span.time-remaining{
	bottom: 20px;
	left: 50px;
	color: black;
	font-size: 14px;
}
.discount{
	padding: 5px;
}
.discount > p{
	color: #e53366;
	font-size: 14pt !important;
}

@media (max-width: 992px){
	.discount{
		padding: 20px;
	}
	.discount > p{
		color: #e53366;
		font-size: 12pt !important;
	}
}
#remove_favourite{
	padding-top: 4px;
}
#add_favourite{
	color: black;
	padding-top: 4px;
}

#add_favourite:hover{
	color: black;
}
.loader{
	margin: 10px auto;
	display: none;
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
	<div style="margin-top: 50px" class="container">
		<div class="row">

			<div id="myCarousel" class="carousel slide" data-ride="carousel" interval="false" style="margin: 0 auto">
				<!-- Indicators -->

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active" style="background-image: url({{ url('imgs/background1.jpg') }});">

						<div class="carousel-caption">
							<p class="h3"><em>Welcome to ABC resort  ...</em></p>
						</div>
					</div>

					<div class="item" style="background-image: url({{ url('imgs/background2.jpg') }});">
						<div class="carousel-caption">
							<p class="h3"><em>A hotel located on...</em></p>
						</div>
					</div>

					<div class="item" style="background-image: url({{ url('imgs/background3.jpg') }});">
						<div class="carousel-caption">
							<p class="h3"><em>Let yourself immerse into...</em></p>
						</div>
					</div>

					<div class="item" style="background-image: url({{ url('imgs/background1.jpg') }});">
						<div class="carousel-caption">
							<p class="h3"><em>Relax in the chilling area</em></p>
						</div>
					</div>

					<div class="item" style="background-image: url({{ url('imgs/background2.jpg') }});">
						<div class="carousel-caption">
							<p class="h3"><em>Enjoy the View from the roof</em></p>_
						</div>
					</div>

					<div class="item" style="background-image: url({{ url('imgs/background3.jpg') }});">
						<div class="carousel-caption">
							<p class="h3"><em>At this Hotel</em></p>_
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12">

				<div style="background-color:white;height: 65px" class="row">
					<div style="line-height:1" class="col-md-8 col-sm-8 col-xs-8">
						<p style="margin-top: 5px"><font size="5" color="grey"><em>Canaries / Tenerife</em></font></p>
						<p><font size="4" color="black">Coral Ocean View</font></p>
					</div>
					<div style="text-align: right;" class="col-md-4 col-sm-4 col-xs-4 hotel-map">
						<p>
							<span class="glyphicon glyphicon-map-marker">Map</span>
						</p>
					</div>

				</div>


			</div>

			<div style="background-color:white; border-left: 1px solid #eee;height:65px;padding: 10px;" class="col-md-3 col-sm-4 col-xs-7	">
				<span class="glyphicon glyphicon-time pull-left" style="font-size: 30px;top: 6px;"></span>&nbsp <span class="time-remaining">3 Days Remaining </span>
				<a href="#" class="pull-right" id="add_favourite" @if($hotel->check_favourite($hotel->hotel_id) == true) style="display: none;" @endif><i class="fa fa-heart-o" style="font-size: 30px;padding: 5px;"  aria-hidden="true"></i></a>
				<a href="#" class="pull-right" id="remove_favourite" @if($hotel->check_favourite($hotel->hotel_id) == false) style="display: none;" @endif ><i class="fa fa-heart" style="font-size: 30px;padding: 5px; color: #bd1343;"  aria-hidden="true"></i></a>
				<div class="loader pull-right" style="height: 25px;width: 25px;"></div>
			</div>

			<div style="background-color:white; border-left: 1px solid #eee;height:65px; text-align: center;" class="col-md-1 col-sm-2 col-xs-5 discount">
				<p>Upto -70%</p>
			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<div class="row">
					<div class="panel with-nav-tabs panel-default" style="background-color:white">
						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1default" data-toggle="tab" style="color: black">THE BEST BITS</a></li>
								<li><a href="#tab2default" data-toggle="tab" style="color: black">DETAILS</a></li>
								<li><a href="#tab3default" data-toggle="tab" style="color: black">REVIEWS</a></li>

							</ul>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade" id="tab1default">

									<div class="row">
										<div class="col-md-7" style="margin-top: 10px">

											<p><font size="2" color="black"><span class="glyphicon glyphicon-chevron-right"></span> Coral Ocean View is an exclusive adults-only hotel located just a short walk from the golden sands of Troya Beach in Tenerife.</font></p>
											<p><font size="2" color="black"><span class="glyphicon glyphicon-chevron-right"></span> The town of Costa Adeje is brimming with exciting things to see and do including theme parks, water sports, and trendy bars.</font></p>
											<p><font size="2" color="black"><span class="glyphicon glyphicon-chevron-right"></span> Rest in a spacious Junior Suite and choose a board basis that best suits your needs, from bed and breakfast to all inclusive.</font></p>

										</div>

										<div class="col-md-5" style="background-color:#F0F0F0; margin-top: 20px; text-align: center">
											<div class="row">
												<h3 style="color: #800000"><em>Insider</em></h3>
												<p><font size="2" color="black"><span class="glyphicon glyphicon-chevron-right"></span> <em>Carefully selected by our experts especially for you</em></font></p>
												<br>             
											</div>
										</div>
									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>


									<div class="row" style="line-height: 1">

										<p><font size="4" color="black">&nbsp;Book Now, Pay Later</font></p>
										<p style="margin-left: 10px;"><font size="2" color="black"><em>&nbsp;Booking 35 days in advance and spending over £500 per person? No need to pay in full today! Just select the 30% deposit option on our payment page (terms & conditions apply) </em></font></p>


									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>

									<div class="row">

										<p><font size="4" color="black">&nbsp;Your Destination</font></p>
										<img src="https://images2.bovpg.net/r/back/uk/prestationHotelCommon/180112887b3efd6c0b6a5a8ec39acbe9.jpg" alt="" aria-hidden="true" width="40%" height="40%" ALIGN=”center”>
										<p style="margin: 10px;text-align: left"><font size="2" color="black"><em>&nbsp;Costa Adeje is a fun-filled destination situated in southern Tenerife. Set between lush green landscapes and turquoise waters, this town is abundant with luxury hotels and elegant places to wine and dine. Costa Adeje also boasts gorgeous beaches, an energetic nightlife, and that typical Spanish sunshine. Visitors can take leisurely boat trips along the coast to visit other towns and villages, or, embark on thrilling water slides at the notable Siam Park. </em></font></p>


									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>

									<div class="row">

										<p><font size="4" color="black">&nbsp;Your Destination</font></p>
										<img src="https://images2.bovpg.net/r/back/uk/prestationHotelCommon/180112887b3efd6c0b6a5a8ec39acbe9.jpg" alt="" aria-hidden="true" width="40%" height="40%" ALIGN=”center”>
										<p style="margin: 10px;text-align: left"><font size="2" color="black"><em>&nbsp;Costa Adeje is a fun-filled destination situated in southern Tenerife. Set between lush green landscapes and turquoise waters, this town is abundant with luxury hotels and elegant places to wine and dine. Costa Adeje also boasts gorgeous beaches, an energetic nightlife, and that typical Spanish sunshine. Visitors can take leisurely boat trips along the coast to visit other towns and villages, or, embark on thrilling water slides at the notable Siam Park. </em></font></p>


									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>

									<div class="row">

										<p><font size="4" color="black">&nbsp;Your Destination</font></p>
										<img src="https://images2.bovpg.net/r/back/uk/prestationHotelCommon/180112887b3efd6c0b6a5a8ec39acbe9.jpg" alt="" aria-hidden="true" width="40%" height="40%" ALIGN=”center”>
										<p style="margin: 10px;text-align: left"><font size="2" color="black"><em>&nbsp;Costa Adeje is a fun-filled destination situated in southern Tenerife. Set between lush green landscapes and turquoise waters, this town is abundant with luxury hotels and elegant places to wine and dine. Costa Adeje also boasts gorgeous beaches, an energetic nightlife, and that typical Spanish sunshine. Visitors can take leisurely boat trips along the coast to visit other towns and villages, or, embark on thrilling water slides at the notable Siam Park. </em></font></p>


									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>

									<div class="row">

										<p><font size="4" color="black">&nbsp;Your Destination</font></p>
										<img src="https://images2.bovpg.net/r/back/uk/prestationHotelCommon/180112887b3efd6c0b6a5a8ec39acbe9.jpg" alt="" aria-hidden="true" width="40%" height="40%" ALIGN=”center”>
										<p style="margin: 10px;text-align: left"><font size="2" color="black"><em>&nbsp;Costa Adeje is a fun-filled destination situated in southern Tenerife. Set between lush green landscapes and turquoise waters, this town is abundant with luxury hotels and elegant places to wine and dine. Costa Adeje also boasts gorgeous beaches, an energetic nightlife, and that typical Spanish sunshine. Visitors can take leisurely boat trips along the coast to visit other towns and villages, or, embark on thrilling water slides at the notable Siam Park. </em></font></p>


									</div>

									<div class="row">

										<p> -----------------------------------------------------------------------</p>


									</div>

								</div>

								<div class="tab-pane fade in active" id="tab2default">
									<div class="row">
										<div class="col-md-12">
											<hr style="border-top: dashed 1px;" />
											<h3>Travel Advice</h3>
											<br>
											<p>For the latest travel advice from the Foreign & Commonwealth Office including security and local laws, plus passport and visa information please click here.</p>
											<p>Please note that the advice can change and consumers should continue to check it until they travel.</p>

											<hr style="border-top: dashed 1px;"/>

											<h3>Car Hire</h3>
											<br>
											<p>Please note you cannot be guaranteed a specific make of car within a certain group.<br>The minimum age for driving a hire car in Greece is 21 and drivers must have held a full driving licence for a least 1 year. </p>
											<p>The lead name on the booking will be confirmed as the named driver.  The named driver must present a credit card in their name when collecting the car (credit cards in other names will not be accepted).</p>
											<p>The named driver must also present a full valid driving licence on collection of the vehicle and in some cases a credit card or cash deposit will be required.</p>
											<p>Please ensure that you check your car hire documents carefully once received as this will advise if there are any taxes/charges to be paid locally as well as potential mileage restrictions.</p>

											<hr style="border-top: dashed 1px;"/>

											<h3>Your Contract</h3>
											<br>
											<p>If you book a package which includes flights, your contract will be with Voyage Privé. The air holiday package(s) shown are ATOL protected by the Civil Aviation Authority. Our ATOL number is 10170.</p>
											<p>If you book a package which does not include flights, then ATOL protection does not apply. Your contract will be with the provider of the accommodation and not Voyage Privé. Voyage Privé acts only as agent for the accommodation provider. </p>
											<p>Please read our booking conditions before confirming your holiday. </p>

											<hr style="border-top: dashed 1px;"/>

											<h3>Travel Documents</h3>
											<h6><strong>Flight Inclusive Offers</strong></h6>
											<p>You will receive an email confirming your booking within the next 48 hours.</p>
											<p>Please check all details on this confirmation are correct. If there are any discrepancies, please notify us as soon as possible.</p>
											<p>The airline is ticketless and therefore, you will not receive any hard copy documents. You will however, receive an email from us detailing your flight information and reference number to enable you to manage your booking online via the airline website.</p>
											<p>You will also receive an accommodation voucher for presentation at the hotel reception at point of check-in.</p>
											<p>If you have booked transfers car hire or airport lounges, you will receive a separate voucher for each of these services. Please note that transfer vouchers are sent directly from the transfer supplier.</p>
											<p>Please do make sure that you either add Voyage Privé to your Safe Senders list or check your Junk mail regularly for your travel documents.</p>
											<p>We will send all documents out as early as possible (subject to full payment being received) but you should receive all your documentation at least 10 days prior to departure.</p>
											<p>If by any chance you have not received all the above by this time, please contact us at customer.relations@voyageprive.com</p>
											<h6><strong>Accommodation Only</strong></h6>
											<p>You will receive an email confirming your booking within the next 48 hours.</p>
											<p>Please check all details on this confirmation are correct. If there are any discrepancies, please notify us as soon as possible.</p>
											<p>You will also receive an accommodation voucher for presentation at the hotel reception at point of check-in. </p>

											<hr style="border-top: dashed 1px;"/>

											<h3>Important Information</h3>
											<p><strong> Our price does not include a city tax of 3 EUR per person per night payable locally upon arrival. (price subject to change without prior notification)</strong></p>
											<p>The location shown on our map is to be used as a guide only and the actual location of the property may differ</p>
											<p>Your contact details may be passed on to the hotel so that they can make contact with you to discuss your booking in advance of your arrival.</p>
											<p>You may be asked to provide a credit/debit card deposit on arrival to cover any purchases made in the hotel.</p>
											<p>Although we endeavour to provide up to date information we cannot guarantee that all hotel facilities and services will be available during your stay, especially when travelling out of the main holiday periods</p>
											<p>Star rating standards may differ to that of the UK, depending on the country of travel</p>
										</div>
									</div>
									<br>
									<div class="row our-promise-section">
										<div class="col-md-12">
											<h3>The Insider Suite Promise</h3>
											<div class="row">
												<div class="col-md-2">
													<img src="{{ url('imgs/our_promise.png') }}" class="img-responsive">
												</div>
												<div class="col-md-10">
													<ul style="font-size: 14px;">
														<li>A unique selection of high-end accommodation</li>
														<li>Exclusive perks and discounts of up to -70%</li>
														<li>Member services team available 7 days per week</li>
													</ul>
												</div>
											</div>
											<a href="#"><span class="pull-right show-more">Show more</span><span class="pull-right show-less">Show less</span></a>
											<div class="row show-more-details">
												<div class="col-md-12">
													<h3>Carefully selected holiday offers</h3>
													<p>We choose our partners for their quality and level of service.</p>
													<ul class="dashed">
														<li>An attractive portfolio, hand-picked by our 60+ global travel experts</li>
														<li>Exclusive gifts on arrival or special treatments throughout your stay</li>
														<li>A percentage discount calculated on the hotel's 'reference' price</li>
													</ul>
													<br>
													<h3>Quality service: informative, reliable & responsive</h3>
													<p>Our goal: provide an unforgettable travel experience...before, during & after your trip!</p>
													<ul class="dashed">
														<li>Member services team available 7 days per week</li>
														<li>Inspiring digital content and continuous innovation on our website & mobile apps</li>
														<li>A percentage discount calculated on the hotel's 'reference' price</li>
													</ul>
													<br>
													<h6>Discounts on holiday offers:</h6>
													<p><i>In order to show a percentage discount, we compare our offer price with a "reference" price (as shown against each offer). This reference price is provided to us by the hotel, tour operator or other partner and corresponds to the prices displayed in the hotel or partner brochure. We include the cost of additional services such as room upgrades, welcome drinks, treatments, etc. as negotiated by our team, when calculating the reference price.</i></p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="tab3default">

									<p><font size="4" color="black">&nbsp;Your Destination</font></p>
									<p style="margin: 10px;text-align: left"><font size="2" color="black"><em>&nbsp;Costa Adeje is a fun-filled destination situated in southern Tenerife. Set between lush green landscapes and turquoise waters, this town is abundant with luxury hotels and elegant places to wine and dine. Costa Adeje also boasts gorgeous beaches, an energetic nightlife, and that typical Spanish sunshine. Visitors can take leisurely boat trips along the coast to visit other towns and villages, or, embark on thrilling water slides at the notable Siam Park. </em></font></p>


								</div>
							</div>
						</div>

					</div>


				</div>
			</div>

			<div class="col-md-4" style="border-left: 3px solid #F0F0F0">

				<div class="row" style="background-color:black">
					<div style="text-align: left;margin-top: 10px;color:white">
						<div class="col-md-4">
							<p><font size="3" color="white">&nbsp;Our Offers</font></p>
						</div> 
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<p><font size="2" color="white">&nbsp;Upto -76%</font></p>
						</div>
					</div>


				</div>

				<div class="row"; style="background-color:white; margin-top: 3px; line-height:0.7;  border-bottom-style: dotted;border-width: 1px; ">

					<div class="col-md-6">
						<p><font size="3" color="black">&nbsp;Without Flight</font></p>
						<p><font size="2" color="black">&nbsp;From</font></p>
						<p><font size="3" color="maroon">&nbsp;$100/person</font></p>
						<p><font size="2" color="black">&nbsp;instead of <strike> $200</strike></font></p>
						<p><font size="2" color="black">&nbsp;for <strong>4 Nights </strong></font></p>
					</div>

					<div class="col-md-6" >
						<p><font size="3" color="black">&nbsp;With Flight <span class="glyphicon glyphicon-plane"> </span></font></p>
						<p><font size="2" color="black">&nbsp;From</font></p>
						<p><font size="3" color="maroon">&nbsp;$200/person</font></p>
						<p><font size="2" color="black">&nbsp;instead of <strike> $300</strike></font></p>
						<p><font size="2" color="black">&nbsp;for <strong>4 Nights </strong></font></p>
					</div>

				</div>

				<div class="row" style="background-color:white;text-align: center;border-bottom-style: dotted;border-width: 1px;">

					<p><font size="3" color="black">&nbsp;<span class="glyphicon glyphicon-calendar"></span>&nbsp;Duration Available: 4,5,7 and 10 Days</font></p>  

				</div>

				<div class="row" style="background-color:white;text-align: left;border-bottom-style: dotted;border-width: 1px;">

					<p><font size="4" color="black">&nbsp;Just for You!</font></p>  
					<ul style="color:black; line-height: 0.8; padding-right: 10px"> 
						<li><font size="3"> Junior Suite or Junior Suite with Pool View</font></li>
						<li><font size="3">Breakfast, Half Board, or All Inclusive</font></li>
						<li><font size="3">Bottle of wine upon arrival</font></li>
						<li><font size="3">1 mojito per person per stay</font></li>
						<li><font size="3">10% discount on treatments & products at the Beauty Centre</font></li>
					</ul>
				</div>


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
	<script type="text/javascript">
		$('.show-more').click(function(e){
			e.preventDefault();
			$(this).hide();
			$('.show-less').show();
			$('.show-more-details').fadeIn();
		});
		$('.show-less').click(function(e){
			e.preventDefault();
			$(this).hide();
			$('.show-more').show();
			$('.show-more-details').fadeOut();
		});
		$('#add_favourite').click(function(e){
			e.preventDefault();
			$(this).hide();
			$('.loader').show();
			$.ajax({
				type: 'get',
				url: '{{ url('favourites/add_to_favourite/'.$hotel->hotel_id) }}',
				success:function(){
					$('.loader').hide();
					$('#remove_favourite').show();
				}
			});
		});
		$('#remove_favourite').click(function(e){
			e.preventDefault();
			$(this).hide();
			$('.loader').show();
			$.ajax({
				type: 'get',
				url: '{{ url('favourites/remove_favourite/'.$hotel->hotel_id) }}',
				success:function(){
					$('.loader').hide();
					$('#add_favourite').show();
				}
			});
		});
	</script>
@endsection