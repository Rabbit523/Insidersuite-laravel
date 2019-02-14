@extends('layout')

@section('title','Insider Suite |  Write to us')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/faq.css') }}">
@endsection
@section('content')
<div id="site-content">
	<main role="main" id="MainContent" class="main anim-fade-in-up">
		<div class="hm-subheader">
			<div class="hm-container mod-tight">
				<h2 class="hm-subheader--title">Need help?</h2>
				<ul class="hm-subheader--navigation">
					<li class="hm-subheader--navigation-item mod-active">
						<a href="@if(Auth::User()) {{ url('write-to-us') }} @else {{ url('write_to_us') }} @endif">	
							<img class="hm-subheader--navigation-item-icon" src="../imgs/faq.png">
							<span class="hm-subheader--navigation-item-text-faq">FAQ</span>
						</a>
					</li>
					<li class="hm-subheader--navigation-item">
						<a href="@if(Auth::User()) {{ url('contact') }} @else {{ url('contacts') }} @endif">
							<img class="hm-subheader--navigation-item-icon" src="../imgs/email2.png">
							<span class="hm-subheader--navigation-item-text-contact">Contact</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="hm-container mod-tight hm-margin">
			<span class="hm-subheader--navigation-item-text-faq">FAQ</span>

			<div id="accordion">
				<div class="card">
					<div class="card-header" id="heading1">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
							<span class="icon-text">Billing</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>				
					<div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
						<div class="card-sub">
							<div class="card-header" id="sub_heading1">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse1" aria-expanded="true" aria-controls="sub_collapse1">
									<span class="icon-text">What payment methods does Insider Suite accept?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse1" class="collapse collapse_text" aria-labelledby="sub_heading1" data-parent="#accordion">
								<span>You can pay for your booking with the
									following payment methods:<br>
									• Debit Card<br>
									• Visa card<br>
									• Mastercard<br>
									• Visa electron<br>
									• One or more vouchers available on your account</span>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading2">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse2" aria-expanded="true" aria-controls="sub_collapse2">
									<span class="icon-text">When will my card be charged?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse2" class="collapse collapse_text" aria-labelledby="sub_heading2" data-parent="#accordion">
								As soon as you see the “Order is Complete” screen.
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading3">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse3" aria-expanded="true" aria-controls="sub_collapse3">
									<span class="icon-text">What if my card was declined?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse3" class="collapse collapse_text" aria-labelledby="sub_heading3" data-parent="#accordion">
								If your card is declined, first try again or try a different card. If it still doesn’t work, please contact your bank or card issuer.
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading4">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse4" aria-expanded="true" aria-controls="sub_collapse4">
									<span class="icon-text">How do I use my gift card / travel vouchers?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse4" class="collapse collapse_text" aria-labelledby="sub_heading4" data-parent="#accordion">
								Gift cards and travel vouchers can be used to cover all, or part, of the holiday
								  price. Any exceptions to this will be clearly shown at the time of
								  booking.<br><br><b><u>Travel vouchers:</u></b><br>For more information on how to earn travel vouchers please visit the Sponsor page at the bottom of our website page. The voucher, if valid on your account, can be selected and redeemed during the final stages of the booking process. Your debit or credit card will be charged the remainder of the balance.&nbsp;<span><br><br><b><u>Gift cards:</u></b><br></span>To redeem&nbsp;your gift card, you must first access your Online Member Account. Click on the gift card at the top right-hand corner. The gift card, if valid on your account, can be selected and redeemed during the final stages of the booking process. Your debit or credit card will be charged the remainder of the balance.&nbsp;<span><br><i><b>Important: gift cards are non-transferable, and are valid for 12 months from the date of purchase.</b></i></span>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading2">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
							<span class="icon-text">Miscellaneous</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
						<div class="card-sub">
							<div class="card-header" id="sub_heading5">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse5" aria-expanded="true" aria-controls="sub_collapse5">
									<span class="icon-text">I’m interested in working at Insider Suite. How do I get in touch?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse5" class="collapse collapse_text" aria-labelledby="sub_heading5" data-parent="#accordion">
								We’re always interested in adding talented, passionate people to our team. Email  contact@insidersuite.com and tell us about yourself.
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading6">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse6" aria-expanded="true" aria-controls="sub_collapse6">
									<span class="icon-text">What is Insider Suite?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse6" class="collapse collapse_text" aria-labelledby="sub_heading6" data-parent="#accordion">
								You’ll find more info our story 
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading7">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse7" aria-expanded="true" aria-controls="sub_collapse7">
									<span class="icon-text">How can I find out about new trip?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse7" class="collapse collapse_text" aria-labelledby="sub_heading7" data-parent="#accordion">
								Follow us on Instagram (@insidersuite) or sign up to our newsletter
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading3">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
							<span class="icon-text">Ordering</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
						<div class="card-sub">
							<div class="card-header" id="sub_heading8">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse8" aria-expanded="true" aria-controls="sub_collapse8">
									<span class="icon-text">Which currency will my purchase be in?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse8" class="collapse collapse_text" aria-labelledby="sub_heading8" data-parent="#accordion">
								AUD
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading9">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse9" aria-expanded="true" aria-controls="sub_collapse9">
									<span class="icon-text">Who can I contact about an existing order?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse9" class="collapse collapse_text" aria-labelledby="sub_heading9" data-parent="#accordion">
								Contact our customer support team at customerservice@insidersuite.com
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading4">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
							<span class="icon-text">My account</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
						<div class="card-sub">
							<div class="card-header" id="sub_heading11">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse11" aria-expanded="true" aria-controls="sub_collapse11">
									<span class="icon-text">How can I update my password?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse11" class="collapse collapse_text" aria-labelledby="sub_heading11" data-parent="#accordion">
								<p>To change your password, head to My Account. You should be able to update your password under the My details section.</p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading12">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse12" aria-expanded="true" aria-controls="sub_collapse12">
									<span class="icon-text">How can I manage my newsletter subscriptions or unsubscribe?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse12" class="collapse collapse_text" aria-labelledby="sub_heading12" data-parent="#accordion">								
								<p>To change the number of Newsletters you receive, go to your Account on the top right of the page, and click Subscriptions where you can use the slider to indicate how many newsletters you want to receive, or unsubscribe from them completely. The further you move the slider to the left the less newsletters you will receive. You can also manage further email options by clicking and selecting the relevant options below to remove them, and then pressing save.</p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading13">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse13" aria-expanded="true" aria-controls="sub_collapse13">
									<span class="icon-text">How can I update my personal details ?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse13" class="collapse collapse_text" aria-labelledby="sub_heading13" data-parent="#accordion">
								<p>You can amend your details at any time, simply go to your name on the top right of the page, and click My Account where you can save changes by clicking Submit. Please note that changes to your personal details will not affect any bookings that have already been made.</p>			
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading14">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse14" aria-expanded="true" aria-controls="sub_collapse14">
									<span class="icon-text">How can I refer a friend?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse14" class="collapse collapse_text" aria-labelledby="sub_heading14" data-parent="#accordion">
								<p>You can send a referral email to family and friends in the section Sponsor of your account. You can earn $75 in credit for referring your friends.</p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading15">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse15" aria-expanded="true" aria-controls="sub_collapse15">
									<span class="icon-text">How can I send a gift card to a friend?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse15" class="collapse collapse_text" aria-labelledby="sub_heading15" data-parent="#accordion">
								<p>To send a gift card to your friend or family, go to the gift card page. They will then be able to use the credit during check-out upon placing their booking.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading5">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
							<span class="icon-text">About Insider Suite</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
						<div class="card-body">
							<div class="card-sub">
								<div class="card-header" id="sub_heading15">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse15" aria-expanded="true" aria-controls="sub_collapse15">
										<span class="icon-text">How do I apply to work for Insider Suite?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse15" class="collapse collapse_text" aria-labelledby="sub_heading15" data-parent="#accordion">
									<p>Individuals who are passionate about travel and anything
										digital,&nbsp;who are ambitious and demanding, creative and
										innovative,&nbsp;flexible and proactive. &nbsp;To be part of the Insider Suite, any future team members should be strong team players, continuously
										strive to improve themselves and not only achieve, but beat their targets.</p>
								</div>
							</div>
							<div class="card-sub">
								<div class="card-header" id="sub_heading16">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse16" aria-expanded="true" aria-controls="sub_collapse16">
										<span class="icon-text">Who are Insider Suite ?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse16" class="collapse collapse_text" aria-labelledby="sub_heading16" data-parent="#accordion">
									.									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="social-logos">
				<a href="https://www.facebook.com/insidersuite/" target="_blank"><img src="../images/facebook.png" width="20"></a>
				<a href="https://www.instagram.com/insidersuite/" target="_blank"><img src="../images/instagram.png" width="20"></a>
			</div>
			<div class="subscribe-button">
				<a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">See all sales</a>
			</div>
		</div>		
	</main>
</div>
@endsection

@section('foot')
	@parent
		<script type="text/javascript" src="{{ url('js/a45672f-8dd6697.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/620b58e9a11c0f1cb230ea90bdbe0c25_1526456987.js') }}" charset="utf-8"></script>
		<script type="text/javascript" src="{{ url('js/a3bae557f258e5539c1c635b0ff48523_1526456986.js') }}" charset="utf-8"></script>
@endsection