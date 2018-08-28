@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
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
			<h3 class="hm-page--title">FAQ</h3>
			<div class="hm-collapse--filter hm-margin">
				<input id="collapseFilter" type="text" class="hm-collapse--filter-input" placeholder="Search">
			</div>
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
									<span class="icon-text">What payment methods does Nyden accept?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse1" class="collapse collapse_text" aria-labelledby="sub_heading1" data-parent="#accordion">
								All major credit and debit cards as well as PayPal.
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
							<div class="card-header" id="sub_heading4">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse4" aria-expanded="true" aria-controls="sub_collapse4">
									<span class="icon-text">If the products have different fulfilment dates, when will I receive my order?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse4" class="collapse collapse_text" aria-labelledby="sub_heading4" data-parent="#accordion">
								We send everything we have available at our warehouse once you place your order and send any items that are missing once they become available at the warehouse, so you might receive two shipments. 
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading5">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse5" aria-expanded="true" aria-controls="sub_collapse5">
									<span class="icon-text">I’m interested in working at Nyden. How do I get in touch?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse5" class="collapse collapse_text" aria-labelledby="sub_heading5" data-parent="#accordion">
								We’re always interested in adding talented, passionate people to our team. Email  hello@nyden.com and tell us about yourself.
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading6">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse6" aria-expanded="true" aria-controls="sub_collapse6">
									<span class="icon-text">What is Nyden?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse6" class="collapse collapse_text" aria-labelledby="sub_heading6" data-parent="#accordion">
								You’ll find more info about us 
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading7">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse7" aria-expanded="true" aria-controls="sub_collapse7">
									<span class="icon-text">How can I find out about new products?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse7" class="collapse collapse_text" aria-labelledby="sub_heading7" data-parent="#accordion">
								Follow us on Instagram (@wearenyden) or sign up to our newsletter
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
								EUR
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
								Contact our customer support team at customerservice@nyden.com
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading10">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse10" aria-expanded="true" aria-controls="sub_collapse10">
									<span class="icon-text">How do I check the status of my order?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse10" class="collapse collapse_text" aria-labelledby="sub_heading10" data-parent="#accordion">
								Contact our customer support team at customerservice@nyden.com
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading4">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
							<span class="icon-text">Production &amp; Sustainability</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
						<div class="card-sub">
							<div class="card-header" id="sub_heading11">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse11" aria-expanded="true" aria-controls="sub_collapse11">
									<span class="icon-text">What does Nyden do to ensure their suppliers are complying to the Sustainability Commitment?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse11" class="collapse collapse_text" aria-labelledby="sub_heading11" data-parent="#accordion">
								<p>There are continuous requests for sustainability performance data and unannounced visits to our suppliers. The /Nyden production teams from Stockholm and LA have many years of experience in the fashion industry and visit suppliers on a regular basis, as well. We also work with our production teams in Turkey, China, Bangladesh and Portugal, who maintain close relationships and visits with suppliers.</p>
								<p>&nbsp;</p>
								<p>Read more about H&M’s<span style="text-decoration: underline;"><a href="http://sustainability.hm.com/en/sustainability/downloads-resources/resources/supplier-compliance.html#cm-menu">Supplier Compliance</a></span>" and "<span style="text-decoration: underline;"><a href="http://sustainability.hm.com/content/dam/hm/about/documents/masterlanguage/CSR/2017%20Sustainability%20report/HM_group_SustainabilityReport_2017_CH07_HowWeReport.pdf">how they report</a></span></p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading12">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse12" aria-expanded="true" aria-controls="sub_collapse12">
									<span class="icon-text">What about environmental issues?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse12" class="collapse collapse_text" aria-labelledby="sub_heading12" data-parent="#accordion">								
								<p>We all know that healthy ecosystems are necessary to provide the planet with natural resources, such as clean air and water, which are essential to people, communities and businesses. To meet the needs of this generation and generations to come, the long-term health of the ecosystems must be protected by preventing harm to the environment and using natural resources responsibly. When it comes to animal welfare, we believe animals are entitled to humane treatment. This must be respected through the adoption of good animal husbandry and non-animal test methods.</p>
								<p>&nbsp;</p>
								<p>Read more about H&M’s<span style="text-decoration: underline;"><a href="http://sustainability.hm.com/content/dam/hm/about/documents/masterlanguage/CSR/2017%20Sustainability%20report/HM_group_SustainabilityReport_2017_CH04_CircularAndRenewable.pdf">Sustainability Strategies</a></span>" and their "<span style="text-decoration: underline;"><a href="http://sustainability.hm.com/content/dam/hm/about/documents/masterlanguage/CSR/Policies/HM%20Chemical%20Restrictions%20Chemical%20Products%202018.pdf">full chemical restrictions</a></span></p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading13">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse13" aria-expanded="true" aria-controls="sub_collapse13">
									<span class="icon-text">What does the Sustainability Commitment include?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse13" class="collapse collapse_text" aria-labelledby="sub_heading13" data-parent="#accordion">
								<p>Nyden ensures that suppliers have a healthy and safe workplace, guarantee rights at work, pay a fair living wage that meets workers’ basic needs and promote social dialogue. The Sustainability Commitment also addresses discrimination, diversity, equality, child and forced labour.</p>
								<p>&nbsp;</p>
								<p>Read H&M’s full <span style="text-decoration: underline;"><a href="http://sustainability.hm.com/en/sustainability/downloads-resources/policies/policies.html#cm-menu">Standard and Policies</a></span>" and their "<span style="text-decoration: underline;"><a href="http://sustainability.hm.com/content/dam/hm/about/documents/masterlanguage/CSR/2017%20Sustainability%20report/HM_GROUP_Modern_Slavery_Statement_2017.pdf">statement on modern slavery</a></span></p>
							</div>
						</div>
						<div class="card-sub">
							<div class="card-header" id="sub_heading14">
								<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse14" aria-expanded="true" aria-controls="sub_collapse14">
									<span class="icon-text">What kind of suppliers does Nyden work with to produce their garments?</span>							
									<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
								</div>
							</div>				
							<div id="sub_collapse14" class="collapse collapse_text" aria-labelledby="sub_heading14" data-parent="#accordion">
								<p>Nyden works with around 25 handpicked suppliers from the H&M Group’s supplier base, chosen because they match our high and exacting standards of quality and speed. The suppliers have different levels – silver, gold and platinum – which means they not only perform with on-time deliveries, consistency and strategic capacity, but also believe and live up to the
								<span><a href="http://sustainability.hm.com/en/sustainability/downloads-resources/policies/sustainability-commitment.html#cm-menu" style="color: #000000; text-decoration: underline;">Sustainability Commitment</a></span>
								" and "
								<span><a href="http://sustainability.hm.com/en/sustainability/commitments/be-ethical/anti-corruption.html#cm-menu" style="color: #000000; text-decoration: underline;">Code of Ethics</a></span>
								" they have signed." </p>
								<p>&nbsp;</p>
								<p>See more on H&M’s <span><a href="http://sustainability.hm.com/en/sustainability/downloads-resources/resources/supplier-list.html#cm-menu" style="color: #000000; text-decoration: underline;">Supplier Map</a></span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading5">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
							<span class="icon-text">Products</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
						<div class="card-body">
							<div class="card-sub">
								<div class="card-header" id="sub_heading15">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse15" aria-expanded="true" aria-controls="sub_collapse15">
										<span class="icon-text">What type of leather are Nyden’s products made of?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse15" class="collapse collapse_text" aria-labelledby="sub_heading15" data-parent="#accordion">
									Both leather pants and jackets are made out of lamb leather.
								</div>
							</div>
							<div class="card-sub">
								<div class="card-header" id="sub_heading16">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse16" aria-expanded="true" aria-controls="sub_collapse16">
										<span class="icon-text">Does Nyden typically run large or small?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse16" class="collapse collapse_text" aria-labelledby="sub_heading16" data-parent="#accordion">
									Check out our <span style="text-decoration: underline;"><a href="https://eu.nyden.com/pages/size-guide" title="Size Guide">Size Guide</a></span> for more information.									
								</div>
							</div>
							<div class="card-sub">
								<div class="card-header" id="sub_heading17">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse17" aria-expanded="true" aria-controls="sub_collapse17">
										<span class="icon-text">I saw a great Nyden item on Instagram. How do I find it?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse17" class="collapse collapse_text" aria-labelledby="sub_heading17" data-parent="#accordion">
									Our customer support team can help you identify it. Email us at customerservice@nyden.com and attach the image you are interested in.
								</div>
							</div>
							<div class="card-sub">
								<div class="card-header" id="sub_heading18">
									<div class="mb-0" data-toggle="collapse" data-target="#sub_collapse18" aria-expanded="true" aria-controls="sub_collapse18">
										<span class="icon-text">Can I sell your clothes on my own site?</span>							
										<span class="sub-icon-down"><i class="fa fa-plus"></i></span>
									</div>
								</div>				
								<div id="sub_collapse18" class="collapse collapse_text" aria-labelledby="sub_heading18" data-parent="#accordion">
									No. Please read our <span style="text-decoration: underline;"><a href="https://eu.nyden.com/pages/terms-and-conditions" title="Terms and Conditions">Terms and Conditions</a>.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading6">
						<div class="mb-0" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
							<span class="icon-text">Returns &amp; Exchanges</span>							
							<span class="icon-down"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
						<div class="card-body">
							asdsadsa
						</div>
					</div>
				</div>
				<div class="card card7">
					<div class="card-header" id="heading7">
						<div class="mb-0">
							<span class="icon-text">Returns &amp; Exchanges</span>							
							<span class="icon-down" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7"><i class="fa fa-chevron-down"></i></span>
						</div>
					</div>
					<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
						<div class="card-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
			</div>
			<div class="social-logos">
				<a href="https://www.facebook.com/insidersuite/" target="_blank"><img src="../images/facebook.png" width="20"></a>
				<a href="https://www.instagram.com/insidersuite/" target="_blank"><img src="../images/instagram.png" width="20"></a>
			</div>
			<div class="subscribe-button">
				<a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">Subscribe</a>
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