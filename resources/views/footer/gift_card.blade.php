@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/simple_gift.css') }}">
@endsection
@section('content')
	<div id="site-content">
		<div class="gift_page">
			<div class="col-md-12 col-xs-12">
				<img class="our-story-banner" src="{{ url('imgs/background2.jpg') }}">
			</div>
			<h4 class="banner-heading heading-font-style">GIFT CARD</h4>
			<h4 class="banner-sub-heading heading-font-style">THAT ALWAYS WORK</h4>
			<h4 class="occasion-text para-font-style" style="color: white !important;">Occasion Text Occasion Text Occasion Text Occasion Text Occasion Text Occasion Text</h4>
		</div>
		<div class="gift_page">
			<div class="container" style="text-align: center;">
				<div class="gift_page">
					<div class="col-md-6 col-xs-12">
						<h1 class="gift_title">Insider Suite GiftCard</h1>
						<p class="gift_text">We believe in empowering creativity to redifine traveling.
							Our travel experts seek out the best spots around the world, sharing our insider tips and secrets to guarantee a unique experience. Insider Suite has built itself on its exigence for luxury and its ability to provide exclusive offers to get the best possible deal with discounts of up to 70% in some the finest hotels around the world. The entire Insider Suite team is engaged to make your trip a bespoke and unforgettable experience!
							By the way, we really hope to see you soon. We can't wait to show you the best of each destination we offer.</p>
						<a href="{{ url('mail_gift_card') }}" class="btn btn-mail-gift">Gift Mail</a>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="giftCardPicture GiftCardCard__GiftCardPicture-s1roh816-3 bylcQc"></div>
					</div>
				</div>
				<div class="gift_page">
					<div class="GiftCard__FeedbacksWrapper-nrsuvj-8 iMbfUf">
						<div class="s4xyhxd-0-BaseTitle-fPbdYi geSRhb">The gift that works every time</div>
						<div class="GiftCard__GiftCardFeedbacksSlider-nrsuvj-10 cDIIyG">
							<div class="Wrapper-s4d32pm-0 jhAoWd">
								<div class="FeedbacksSlider__FeedbacksWrapper-s1vcsq3l-5 hGboIR">
									<div class="feedbacks-quotes FeedbacksSlider__Quotes-s1vcsq3l-4 eKgvGv">“</div>
									<ul class="rslides">
										<li>
											<div aria-hidden="true" data-swipeable="true" style="width: 100%; flex-shrink: 0; overflow: auto; display: flex; flex-direction: column; justify-content: space-between;">
												<div class="FeedbacksSlider__FeedbackEvent-s1vcsq3l-6 iPmhZV">Perfect for <span class="FeedbacksSlider__Event-s1vcsq3l-7 gNldto">a birthday</span></div>
												<div class="v7j7y7-0-Paragraph-cbzGIL iuGtqq" color="white">« I wanted to make a mark for my sister's 30 years, I think I could not offer her a better experience. »</div>
												<div class="FeedbacksSlider__FeedbackAuthorBlock-s1vcsq3l-1 dMMFtK">
													<div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white" style="font-weight: 500;">Guillaume E.</div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white">Nell Hotel *****</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div aria-hidden="true" data-swipeable="true" style="width: 100%; flex-shrink: 0; overflow: auto; display: flex; flex-direction: column; justify-content: space-between;">
												<div class="FeedbacksSlider__FeedbackEvent-s1vcsq3l-6 iPmhZV">Perfect for <span class="FeedbacksSlider__Event-s1vcsq3l-7 gNldto">a wedding gift</span></div>
												<div class="v7j7y7-0-Paragraph-cbzGIL iuGtqq" color="white">« A great moment that gave us the feeling of going back on a wedding night! »</div>
												<div class="FeedbacksSlider__FeedbackAuthorBlock-s1vcsq3l-1 dMMFtK">
													<div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white" style="font-weight: 500;">Marc G.</div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white">Burgundy *****</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div aria-hidden="true" data-swipeable="true" style="width: 100%; flex-shrink: 0; overflow: auto; display: flex; flex-direction: column; justify-content: space-between;">
												<div class="FeedbacksSlider__FeedbackEvent-s1vcsq3l-6 iPmhZV">Perfect for <span class="FeedbacksSlider__Event-s1vcsq3l-7 gNldto">a pot of depart</span></div>
												<div class="v7j7y7-0-Paragraph-cbzGIL iuGtqq" color="white">« I dreamed of spending a night in one of the hotels of your selection ... and it was offered to me for my starting pot. I love my colleagues! »</div>
												<div class="FeedbacksSlider__FeedbackAuthorBlock-s1vcsq3l-1 dMMFtK">
													<div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white" style="font-weight: 500;">Melissa A.E</div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white"></div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div aria-hidden="false" data-swipeable="true" style="width: 100%; flex-shrink: 0; overflow: auto; display: flex; flex-direction: column; justify-content: space-between;">
												<div class="FeedbacksSlider__FeedbackEvent-s1vcsq3l-6 iPmhZV">Perfect for <span class="FeedbacksSlider__Event-s1vcsq3l-7 gNldto">a weekend mother / daughter</span></div>
												<div class="v7j7y7-0-Paragraph-cbzGIL iuGtqq" color="white">« A great moment mother-daughter to enjoy the pool and the spa, to redo very quickly! »</div>
												<div class="FeedbacksSlider__FeedbackAuthorBlock-s1vcsq3l-1 dMMFtK">
													<div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white" style="font-weight: 500;">Claire Z.</div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white">Boutet Bastille *****</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div aria-hidden="true" data-swipeable="true" style="width: 100%; flex-shrink: 0; overflow: auto; display: flex; flex-direction: column; justify-content: space-between;">
												<div class="FeedbacksSlider__FeedbackEvent-s1vcsq3l-6 iPmhZV">Perfect for <span class="FeedbacksSlider__Event-s1vcsq3l-7 gNldto">a baby moon</span></div>
												<div class="v7j7y7-0-Paragraph-cbzGIL iuGtqq" color="white">« First weekend in love for young parents who have not had a moment together since the arrival of their little baby! »</div>
												<div class="FeedbacksSlider__FeedbackAuthorBlock-s1vcsq3l-1 dMMFtK">
													<div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white" style="font-weight: 500;">Julie D.</div>
														<div class="Paragraph-v7j7y7-0 korWbn" color="white">Molitor *****</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="FeedbacksSlider__FeedbackSwipeables-s1vcsq3l-3 hcNjYu">
										<div style="overflow-x: hidden;">
											<div class="react-swipeable-view-container" style="flex-direction: row; transition: transform 0.35s cubic-bezier(0.15, 0.3, 0.25, 1) 0s; direction: ltr; display: flex; will-change: transform; transform: translate(-300%, 0px);">							
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<div class="GiftCard__FeedbacksImage-nrsuvj-9 eUnazV"></div>
					</div>	
				</div>
				<div class="gift_page">
					<div class="subsection">
						<h1>Access the offers for this Sunday</h1>
						<a href="@if(Auth::User()) {{ url('offers') }} @else {{ url('/') }} @endif" class="btn btn-subscribe">Subscribe</a>
					</div>
				</div>
			</div>			
		</div>
	</div>
@endsection
@section('foot')
	@parent
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{ url('js/responsiveslides.min.js') }}"></script>
	<script>
		$(function() {
			$(".rslides").responsiveSlides();
		});
	</script>
@endsection