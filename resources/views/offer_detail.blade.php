@extends('layout')

@section('title','Insider Suite |  Offer Detail')
@section('head')
@parent
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Bootstrap and default Style -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > --}}
<!-- Google Fonts -->
<link class="gf-headline" href='https://fonts.googleapis.com/css?family=Pacifico:400&subset=' rel='stylesheet' type='text/css'>
<!-- Animate CSS -->
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer_detail.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/slider.css') }}">
@endsection

@section('content')
<div id="site-content">
	<div class="row content static-banner">
    <div class="slider" id="slider">
		  <div class="slItems">
		    @if ($id == "1")
        <div class="slItem headBg lazyloaded" style="background-image: url('../imgs/background3.jpg');"></div>
        @elseif ($id == "2")
        <div class="slItem headBg lazyloaded" style="background-image: url('../images/temp/5b5ae0b5167d7o.jpg');"></div>
        @elseif ($id == "3")
        <div class="slItem headBg lazyloaded" style="background-image: url('../images/temp/5b56e2fd5914do.jpg');"></div>
        @endif
        <div class="slItem headBg lazyloaded" style="background-image: url(&quot;https://images1.bovpg.net/vpi/fr/front/uploaded/showroom-header-pics/borabora_desktop.jpg&quot;);"></div>
		  </div>
    </div>
		<div class="head head--common">
      <div class="header-info">
        <div class="quote">
          <span class="quote_icon">“</span>
          <span class="pool">The pool</span>
        </div>
        <a class="btn btn-subscribe"><span class="button_text">Up to 70% OFF</span></a>
      </div>
    </div>
    <div id="map"></div>
  </div>
  <div class="row content page-container">
    <div class="col-md-12 col-xs-12 col-lg-12 detail_info">
      <div class="col-md-10 col-xs-10 col-lg-10 info1">
        <div class="col-md-10 col-xs-10 col-lg-10 place_info">
          <img src="../imgs/black_heart.png" class="offer_heart">
          <h3 class="country">BALI Indonesia</h3><br>
          <h3 class="place">Grand hotel Hyatt ****</h3>
        </div>
        <div class="col-md-2 col-xs-2 col-lg-2 map_info">
          <a class="map_link"><i class="far fa-map"></i><span>Map</span></a>
        </div>
      </div>
      <div class="col-md-2 col-xs-2 col-xs-2 info2">
        <img src="../imgs/black_clock.png" class="offer_heart">
        <h4>11 days left</h4>
      </div>
    </div>
    <div class="col-md-8 col-xs-12 col-lg-10 page-body">
      <div class="col-md-8 col-xs-8 col-lg-8">
        <div class="tabs">
          <div class="col-md-12 col-xs-12 col-lg-12">
            <div class="col-md-4 col-xs-4 col-lg-4 tab-sections section1 active">
              <a class="tab normal_tab" id="tab1">the best bits</a>
              <a class="tab menu vpTrackClick open" id="tab1_">
                <span>the best bits</span>
                <i class="bottom-arrow shadow"></i>
                <i class="fas fa-caret-down bottom-arrow gray big"></i>
              </a>
            </div>
            <div class="col-md-4 col-xs-4 col-lg-4 tab-sections section2">
              <a class="tab normal_tab" id="tab2">details</a>
              <a class="tab menu vpTrackClick open" id="tab2_">
                <span>details</span>
                <i class="bottom-arrow shadow"></i>
                <i class="fas fa-caret-down bottom-arrow gray big"></i>
              </a>
            </div>
            <div class="col-md-4 col-xs-4 col-lg-4 tab-sections section3">
              <a class="tab normal_tab" id="tab3">reviews</a>
              <a class="tab menu vpTrackClick open" id="tab3_">
                <span>reviews</span>
                <i class="bottom-arrow shadow"></i>
                <i class="fas fa-caret-down bottom-arrow gray big"></i>
              </a>
            </div>
          </div>
          <div class="col-md-12 col-xs-12 col-lg-12"></div>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12 best_bits">
          <div class="section1_header">
            <h3>domes miramare corfu</h3>
            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <h3>adults only</h3>
            <p>A premium couples escape in devine Corfu</p>
            <a class="section1_link1">By Rebecca Moore, Insidersuite correspondent</a>
            <p class="text_content">The story goes that when Poseidon, God of the Sea. fell in love, he wanted to find somewhere beautiful and private to be with his sweetheart.
              He found them an island, a sun-soaked haven rising from the glittering aquamarine waters, and named it after the sea nymph heloved - Lorkyra. This is the legend of Corfu, an island so lovely that even the gods themselves considered it a romantic gateaway. At Domes Miramare Corfu ***** Adult that enraptured Poseidon and Korkyra is still entrancing couples today.
            </p>
            <a class="section1_link2" id="read_more">Read more</a>
          </div>
          <div class="section1_body">
            <h3>WE LIKE</h3>
            <div class="section_list">
              <div><i class="fas fa-glass-martini"></i></div>
              <div>Starting off right: that is. with a glass of wine in hand and a fresh platter of fruit, courtesy of Insidersite.</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-star"></i></div>
              <div>The newness of the property: Fully renovated and just reopened, every inch is impeccable clean, modern and bright.</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-umbrella-beach"></i></div>
              <div>The peacefulness and serenity of an adults-only environment, with far less to disturb your relaxation.</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-coffee"></i></div>
              <div>Fresh juices, Greek yoghurt and honey, and a plethora of fresh, local produce each morning spread across the breakfast buffet.</div>
            </div>
            <div class="section_list">
              <h4>be smart, don't miss...</h4>
              <ul>
                <li>
                  <p>Spending a day in Corfu's Old Town, a UNESCO World Heritage site, followed by dinner at the Venetian Well, a historic retaurant. Platia Kremastis, Kerkyra Town, Corfu, +30 26615 50955.<br><a href="www.venetianwell.gr">www.venetianwell.gr</a></p>
                </li>
                <li>
                  <p>Looking out from Mount Pantokrator: The hike up the mountain is well worth the incredible views from the top.<br><a href="www.dangerousroads.org/europe/greece/2754-mount-">www.dangerousroads.org/europe/ greece/2754-mount-</a></p>
                </li>
                <li>
                  <p>The incredible Achilleion Palace, built by an Austrian Empress to honour Achilles. Achillion Palace, Achillion, Gastouri, Corfu. +30 2661 056210<br><a href="www.in-corfu.com/historic/achillion.html">www.in-corfu.com/historic/achillion.html</a></p>
                </li>
                <li>
                  <p>Getting to know Greek wines with a winery tour. Ambelonas, a famil-run winery, will introduce you to Corfu grapes. Eparhiaki Peleka Karoumpatika, Corfu. +30 693 215 8888<br><a href="www.ambelonas-corfu.gr">www.ambelonas-corfu.gr</a></p>
                </li>
              </ul>
              <div class="button-links">
                <a href="{{ url('offers')}}"><i class="fas fa-caret-left"></i><span>Back to our offers</span></a>
                <a><i class="far fa-envelope"></i><span>Share by email</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12 details">
          <div class="section1_body">
            <h3>SERVICES</h3>
            <div class="section_list">
              <div><i class="fas fa-glass-martini"></i></div>
              <div>24-hour reception</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-bed"></i></div>
              <div>133 rooms(non-smoking)</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-wifi"></i></div>
              <div>Wi-Fi available for free in the rooms and common areas of the hotel.</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-beer"></i></div>
              <div>Makris Mediterranean Restaurant Restaurant - local Venetian and Greek cuisine.</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-glass-martini"></i><span>3 bars:</span></div>
              <div class="sub_div">
                <p>-Blue Bar - Custom-made cocktails - open 10am-midnight</p>
                <p>-Raw Bar - Sushi and cocktail bar - open from 6pm onwards</p>
                <p>-Pool Bar - snacks, sandwiches, salads - open from 10am-6pm</p>
              </div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-hot-tub"></i><span>Spa:</span></div>
              <div class="sub_div">
                <p>Free access: sauna and hot tub</p>
                <p>For a surcharge: beauty centre and massages</p>
              </div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-dumbbell"></i></div><div>Gym - open everyday</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-swimming-pool"></i></div><div>Swimming Pool</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-umbrella-beach"></i></div><div>Hotel private Beach(grass and gravel) - sunbeds and parasols available</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-basketball-ball"></i></div><div>Activities for a surcharge: glof, horse riding, scuba diving, mountain biking, yoga, aquatic yoga, tennis, sailing, sppeed boats, pedalos, canoeing, waterskiing, wakeboarding</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-parking"></i></div><div>Private parking available for free</div>
            </div>
            <div class="section_list">
              <div><i class="fab fa-accessible-icon"></i></div><div>The establishment does not provide disabled and limited mobility access</div>
            </div>
            <div class="section_list">
              <div><i class="fas fa-swimming-pool"></i></div><div>Pets are not permitted in the establishment</div>
            </div>
            <div class="section_list">
              <h4>conditions</h4>
              <ul>
                <li>
                  <p>Access reserved for guests aged 16 years*</p>
                </li>
                <li>
                  <p>Special conditions: 3 night minimum stay</p>
                </li>
                <li>
                  <p>Local tourist taxes are not included in the Insidersuite price: 4€ per room, per night, to be paid directly to the hotel</p>
                </li>
                <li>
                  <p>Menus adapted for special dietary requirements are available on request and with confirmation from the hotel</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-lg-12 reviews">
          <div class="section1_body">
            <h3>Customer reviews<em>—</em></h3>
            <div class="display_reviews_tripadvisor">
              <div class="hotel-name">Grand hotel Hyatt</div>
              <div class="hotel-address">Khaleed Al Arabi (30th Street), Abu Dhabi 94943 United Arab Emirates</div>
              <div class="hotel-global-reviews">
                <figure class="score-visual">
                    <img src="https://www.tripadvisor.co.uk/img/cdsi/img2/ratings/traveler/4.0-36728-5.svg">
                    <span>1103 reviews</span>
                </figure>
                <div class="ranking">#63 of 130 hotels in Abu Dhabi</div>
                <div class="award">
                  <div>
                      <img class="award-image" src="&#10;https://www.tripadvisor.co.uk/img/cdsi/img2/awards/CERTIFICATE_OF_EXCELLENCE_v2_small-36728-5.jpg&#10;" alt="Trip Advisor Award">
                      <span class="award-name">Certificate of Excellence 2018</span>
                  </div>
                </div>
                <div class="score-details">
                  <div class="ta-section-title">TripAdvisor score :</div>
                  <div class="subratings">
                      <ul>
                            <li>
                                <span>Sleep Quality</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.5.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.5.png';" alt="Sleep Quality: 4.5/5">
                            </li>
                            <li>
                                <span>Location</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.0.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.0.png';" alt="Location: 4.0/5">
                            </li>
                            <li>
                                <span>Rooms</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.5.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.5.png';" alt="Rooms: 4.5/5">
                            </li>
                            <li>
                                <span>Service</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.0.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.0.png';" alt="Service: 4.0/5">
                            </li>
                            <li>
                                <span>Value</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.0.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.0.png';" alt="Value: 4.0/5">
                            </li>
                            <li>
                                <span>Cleanliness</span>
                                <img src="//www.tripadvisor.com/img2/ratings/traveler/s4.5.svg" onerror="this.onerror=null;this.src='//www.tripadvisor.com/img2/ratings/traveler/s4.5.png';" alt="Cleanliness: 4.5/5">
                            </li>
                      </ul>
                  </div>
                  <div class="rating-count">
                      <ul>
                          <li class="grade-5"><span>Excellent</span>
                              <div class="opinion-score-bar">
                                  <div class="value" style="width: 42.3391%;"></div>
                              </div>
                              <div class="opinion-score">467</div>
                          </li>
                          <li class="grade-4"><span>Very good</span>
                              <div class="opinion-score-bar">
                                  <div class="value" style="width: 40.7072%;"></div>
                              </div>
                              <div class="opinion-score">449</div>
                          </li>
                          <li class="grade-3"><span>Average</span>
                              <div class="opinion-score-bar">
                                  <div class="value" style="width: 11.4234%;"></div>
                              </div>
                              <div class="opinion-score">126</div>
                          </li>
                          <li class="grade-2"><span>Poor</span>
                              <div class="opinion-score-bar">
                                  <div class="value" style="width: 3.26383%;"></div>
                              </div>
                              <div class="opinion-score">36</div>
                          </li>
                          <li class="grade-1"><span>Horrible</span>
                              <div class="opinion-score-bar">
                                  <div class="value" style="width: 2.35721%;"></div>
                              </div>
                              <div class="opinion-score">26</div>
                          </li>
                      </ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="last-reviews">
                <div class="ta-section-title">The 5 most recent reviews :</div>
                <div class="review">
                  <div class="presentation">
                    <div class="author-info">
                      <div class="author-name bold">Noor S</div>
                      <div class="author-location"></div>
                    </div>
                    <div class="trip-type">
                      <div class="trip-type-title bold">Traveller type</div>
                      <div class="trip-type-txt"></div>
                    </div>
                  </div>
                  <div class="author-review">
                    <div class="review-title">Weekend getaway</div>
                    <div class="review-score">
                        <img src="https://www.tripadvisor.co.uk/img/cdsi/img2/ratings/traveler/s5.0-36728-5.svg">
                        <div class="review-date">03 Aug 2018</div>
                    </div>
                    <div class="review-txt">
                      <div class="shortcontent">
                        My stay at aloft was short but sweet. The rooms are spacious and i love how they play with the colors. It was also very clean and the staff are friendly. I would highly recommend the ...</div><div class="allcontent" style="display: none;">
                        My stay at aloft was short but sweet. The rooms are spacious and i love how they play with the colors. It was also very clean and the staff are friendly. I would highly recommend the ladies salon at the hotel. It is AMAZING and the staff are very friendly. I would definitely just go back there to get my hair and nails done at La Dolce Vita! I highly recommend it.
                      </div>
                      <span><a href="javascript://nop/" class="morelink"> Know more »</a></span>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-4 col-lg-4 side-bar">
        <div class="tabs">
          <a class="tab menu vpTrackClick open" id="tab1_">
            <span>Book new</span>
            <i class="bottom-arrow shadow"></i>
            <i class="fas fa-caret-down bottom-arrow pink big"></i>
          </a>
        </div>
        <div class="section_body">
          <div class="price_detail">
            <div class="price_from">
              <h4>FROM</h4>
              <h2>£150</h2>
              <p>per room</p>
            </div>
            <div class="price_to">
              <h4>UP TO</h4>
              <h2>42%</h2>
              <p><del>£442</del></p>
            </div>
          </div>
          <div class="offer_detail_block">
            <div class="blank"></div>
            <div class="block-durations-container"><i class="fa fa-calendar"></i>Durations available:<span> 3 to 6 nights</span></div>
            <div class="offer_detail">
              <h4 class="list-title">Just for you!</h4>
              <ul class="offer-block-list">
                <li class="offer-block-list-item">Complimentary Upgrade to Splash Room
                </li><li class="offer-block-list-item">Half Board
                </li><li class="offer-block-list-item">25% discount on F&amp;B (except in-room dining and Refuel Grab &amp; Go)
                </li><li class="offer-block-list-item">Kids under 12 eat for free until September 30th
                </li><li class="offer-block-list-item">Kids below 5 years old eat and sleep for free on same parents’s meal plan
                </li><li class="offer-block-list-item">Ticket for Le Louvre Abu Dhabi (1 per person per stay)
                </li><li class="offer-block-list-item">Taxes
                </li><li class="offer-block-list-item">Economy, Premium or Business Class flights on sectors they operate</li>
              </ul>
              <div class="last-places ">Last few places</div>
            </div>
            <div class="offer_sections block-visible">
              <div class="box-section">
                <div class="head">
                  <div class="heading-bar">
                    <div class="etape-option">
                      <div class="etape"><i class="fas fa-chevron-right"></i></div>
                      <div class="etape-text">
                        <h5 class="heading-bar-head">Transport</h5>
                        <p>Without transport</p>
                      </div>
                    </div>
                    <div class="etape-option">
                      <div class="etape" id="duration"><i class="fas fa-chevron-right fa-right"></i><i class="fas fa-chevron-down fa-down"></i></div>
                      <div class="etape-text">
                        <h5 class="heading-bar-head">Duration and departure date</h5>
                        <p>From Sun 5 August to Wed 8 August<br>3 nights / 4 days</p>
                      </div>
                    </div>
                    <hr>
                  </div>
                  <div class="active-heading-bar">
                    <div class="etape-option">
                        <div class="etape"><i class="fas fa-chevron-down"></i></div>
                        <div class="etape-text">
                          <h5 class="heading-bar-head">participants</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form name="packageBookingForm">
                    <div class="participants">
                      <div class="select_part">
                        <div class="hkJiNs"></div>
                        <div style="position:relative;">
                          <button type="button" class="ParticipantsFunnelButton sui-button sui-button-sm sui-button-light dvuQnw juOFEj">
                            <div class="jMOJev">
                              <span class="dBZAHA">
                                <svg viewBox="0 0 24 24" width="18" height="18" color="white"><g fill="currentColor" fill-rule="nonzero"><path d="M23.75 22a.75.75 0 1 1-1.5 0v-1.625c0-2.235-2.23-4.204-5.28-4.562a.75.75 0 0 1 .175-1.49c3.742.439 6.605 2.969 6.605 6.052V22zM15.75 22a.75.75 0 1 1-1.5 0v-1.625c0-2.5-2.767-4.625-6.25-4.625s-6.25 2.125-6.25 4.625V22a.75.75 0 1 1-1.5 0v-1.625c0-3.428 3.513-6.125 7.75-6.125s7.75 2.697 7.75 6.125V22zM15.119 11.662a.75.75 0 0 1 .252-1.478c.268.045.453.066.629.066a3.755 3.755 0 0 0 3.75-3.75A3.755 3.755 0 0 0 16 2.75c-.18 0-.369.02-.627.066a.75.75 0 1 1-.258-1.478c.337-.058.605-.088.885-.088a5.255 5.255 0 0 1 5.25 5.25A5.255 5.255 0 0 1 16 11.75a5.03 5.03 0 0 1-.881-.088zM8 11.75a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 0 1 0 10.5zm0-1.5a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5z"></path></g></svg>
                              </span>
                              <span id="participants_adult">1 Adult </span>
                              <span id="participants_child"></span>
                              <span id="participants_baby"></span>
                            </div>
                            <span class="dBZAHA" id="down_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 8.83A.5.5 0 0 1 6.102 8h11.796a.5.5 0 0 1 .376.83l-5.898 6.74a.5.5 0 0 1-.752 0L5.726 8.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
                            <span class="dBZAHA" id="up_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 15.17l5.898-6.74a.5.5 0 0 1 .752 0l5.898 6.74a.5.5 0 0 1-.376.83H6.102a.5.5 0 0 1-.376-.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
                          </button>
                          <div class="dsssji">
                            <div class="TPxij">
                              <label class="ijjuLW">Adults</label>
                              <span class="egudlU select_option" min="1" max="3">
                                <button type="button" class="fndzHx" id="adults_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
                                <label for="adults"><input id="adults" name="adults" readonly="" tabindex="-1" value="1"></label>
                                <button type="button" class="active fndzHx" id="adults_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button>
                            </div>
                            <div class="TPxij">
                              <div><label class="ijjuLW">Children</label><div class="gcwOyL">2 to 12 years</div></div>
                              <span class="egudlU select_option" min="1" max="3">
                                <button type="button" class="fndzHx" id="child_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
                                <label for="children"><input id="children" name="children" readonly="" tabindex="-1" value="0"></label>
                                <button type="button" class="active fndzHx" id="child_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button>
                            </div>
                            <div class="TPxij">
                              <div><label class="ijjuLW">Babies</label><div class="gcwOyL"> -2 years</div></div>
                              <span class="egudlU select_option" min="1" max="3">
                                <button type="button" class="fndzHx" id="baby_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
                                <label for="babies"><input id="babies" name="babies" readonly="" tabindex="-1" value="0"></label>
                                <button type="button" class="active fndzHx" id="baby_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button>
                            </div>
                            <button class="iCflgr">Apply</button>
                          </div>
                        </div>
                      </div>
                      <div class="detail_filter_part">
                        <label class="hRIBlt">
                          <div class="jRMrrU">
                            <div class="dGfYUy">
                              <div class="sui-radio sui-radio-lg eYfoUq">
                                <div class="sui-inner-switch kqsmbV">
                                  <input type="radio" name="availability" value="2018-08-12" checked="checked">
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="empDKo">Sunday, August 12</div>
                              <div class="eUhMAS">
                                <span class="gTJpzd">230€</span>
                                <del class="gNVZZi">230€</del>
                                <span class="dHEojY">-43%</span>
                              </div>
                              <div class="hNHXjW" style="display: inline-block;">More than 2 </div>
                            </div>
                          </div>
                        </label>
                        <label class="hRIBlt">
                          <div class="jRMrrU">
                            <div class="dGfYUy">
                              <div class="sui-radio sui-radio-lg eYfoUq">
                                <div class="sui-inner-switch kqsmbV">
                                  <input type="radio" name="availability" value="2018-08-12">
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="empDKo">Tuesday, August 14<sup class="gZTFnY">SPÉCIAL PONT</sup></div>
                              <div class="eUhMAS">
                                <span class="gTJpzd">230€</span>
                                <del class="gNVZZi">230€</del>
                                <span class="dHEojY">-43%</span>
                              </div>
                            </div>
                          </div>
                        </label>
                        <label class="hRIBlt">
                          <div class="jRMrrU">
                            <div class="dGfYUy">
                              <div class="sui-radio sui-radio-lg eYfoUq">
                                <div class="sui-inner-switch kqsmbV">
                                  <input type="radio" name="availability" value="2018-08-12">
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="empDKo">Wednesday August 15th<sup class="gZTFnY">SPÉCIAL PONT</sup></div>
                              <div class="eUhMAS">
                                <span class="gTJpzd">230€</span>
                                <del class="gNVZZi">230€</del>
                                <span class="dHEojY">-43%</span>
                              </div>
                              <div class="hNHXjW" style="display: inline-block;">More than 2 </div>
                            </div>
                          </div>
                        </label>
                      </div>
                      <div class="footer_part">
                        <a class="btn btn-participants"><span>Continue</span></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="box-call">
                <h4>Book online or call us on</h4>
                <h4 class="phone-number"><i class="fas fa-phone"></i> <b>+442033265476</b></h4>
                <p>Monday to Friday from 9am to 8pm<br> and on Saturday and Sunday from 10am to 6pm.<br> Local call charges may apply</p>
              </div>
              <div class="invite-friends">
                <div>
                  <h3>invite friends</h3>
                  <p>Share this offer with a friend!</p>
                  <input type="email" class="invite_email" placeholder="email@example.com">
                  <a class="btn btn-continue"><span class="button_text">OK</span></a>
                </div>
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
<script type="text/javascript" src="{{ url('js/customize/offer_detail.js') }}"></script>
<script>
  function initMap() {
    var uluru = {lat: -33.865143, lng: 151.209900};
    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(uluru.lat,uluru.lng),
        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#378b90"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#31b9c1"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#31b9c1"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#31b9c1"}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        title: 'Snazzy!'
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPzXAXjAyEIcluDJSMgRRBffUCrbNq1Bc&callback=initMap">
</script>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="{{ url('js/slider/slider.js') }}"></script>
<script>
	$('#slider').rbtSlider({
		height:'400px',
    'arrows': true
	});
</script>
@endsection
