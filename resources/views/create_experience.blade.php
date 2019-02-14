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
<?php $current_date = date('Y-m-d');?>
<?php $min_price = "";?>
<div id="site-content">
	<div class="_66jk8g">
		<div class="_36rlri">
			<a class="_1pp5so" href="#">
				<img src="images/IS-black.png" style="height: 45px;"/>
			</a>
		</div>
		<div class="_36rlri">
			<div class="_141w4qb">
				<a href="/create_experience?id={{$offer->id}}" class="_1k01n3v1" aria-busy="false">Menu</a>
			</div>
		</div>
		<div class="_19m5nfy">
			<div class="_36rlri">
				<a  href="/create_experience?id={{$offer->id}}" class="_1k01n3v1" aria-busy="false">Exit</button>
			</div>
		</div>
	</div>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3>Create experience</h3>
        </div>
        <ul class="free-list">
            <li><a id="general" class="active">General informations</a></li>
        </ul>
        <ul class="key-list">
            <li><a id="accomodation" class="disabled"><img src="imgs/icon-lock.png">Accommodation</a></li>
            <li><a id="experience" class="disabled"><img src="imgs/icon-lock.png">Activity</a></li>
            <li><a id="invite" class="disabled" data-accoms="{{$accoms}}" data-acts="{{$activities}}" data-ac="{{$accom_images}}" data-at="{{$act_images}}" data-acprice="{{$prices_accom}}" data-atprice="{{$prices_act}}"><img src="imgs/icon-lock.png">Invite friends</a></li>
            <li><a id="review" class="disabled" data-accoms="{{$accoms}}" data-acts="{{$activities}}" data-ac="{{$accom_images}}" data-at="{{$act_images}}" data-acprice="{{$prices_accom}}" data-atprice="{{$prices_act}}"><img src="imgs/icon-lock.png">Review & Submit</a></li>
            <li><a id="payment" class="disabled"><img src="imgs/icon-lock.png">Payment</a></li>
        </ul>
       
	</div>
    <div class="experience-content" data-id="{{$exp_link_imgs}}">
	    <section id="general_info">
			<div class="header">
				<h2>Let's get started creating your experience</h2>
			</div>
			<div class="form-general">
				<form id="input_form" action="/save_general_info" method="post">
					<div class="form-content">
						<label>Which city would you like to visit?</label>
						<input type="text" class="form-control" id="city" value="{{$offer->location_place}}, {{$offer->location_country}}" disabled required>
					</div>
					<div class="form-content">
						<label>When do you expect to arrive?</label>
						<input type="text" class="form-control" id="arrival_date" @if($experience['arrival_date'] =='') placeholder="dd/mm/yyyy"@endif value="{{$experience['arrival_date']}}" required>
					</div>
					<div class="form-content">
						<label>Number of guests</label>
						<input type="text" id="guests" class="form-control" @if($experience['guests_nb'] =='') placeholder="E.g. 3 guests" @else value="{{$experience['guests_nb']}} guests" @endif required>
						<div class="guests_extend">
							<div class="hkJiNs"></div>
							<div style="position:relative;">								
								<div class="dsssji">
									<div class="TPxij">
										<label class="ijjuLW">Adults</label>
										<span class="egudlU select_option" min="1" max="15">
										<button type="button" class="fndzHx" id="adults_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
										<label for="adults"><input id="adults" name="adults" readonly="" tabindex="-1" value="1"></label>
										<button type="button" class="active fndzHx" id="adults_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button></span>
									</div>
									<div class="TPxij">
										<label class="ijjuLW">Children</label>
										<span class="egudlU select_option" min="1" max="15">
										<button type="button" class="fndzHx" id="children_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
										<label for="children"><input id="children" name="children" readonly="" tabindex="-1" value="0"></label>
										<button type="button" class="active fndzHx" id="children_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button></span>
									</div>
									<div class="TPxij">
										<label class="ijjuLW">Infants<span style="color: #8c8888;font-size: 10px;">(under 2)</span></label>
										<span class="egudlU select_option" min="1" max="15">
										<button type="button" class="fndzHx" id="infants_decrease"><svg viewBox="0 0 24 24" width="1em" height="1em"><rect fill="currentColor" fill-rule="nonzero" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></svg></button>
										<label for="infants"><input id="infants" name="infants" readonly="" tabindex="-1" value="0"></label>
										<button type="button" class="active fndzHx" id="infants_increase"><svg viewBox="0 0 24 24" width="1em" height="1em"><g fill="currentColor" fill-rule="nonzero"><rect x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect><rect transform="rotate(-90 12 12)" x="7.059" y="11.294" width="9.882" height="1.412" rx="0.706"></rect></g></svg></button></span>
									</div>
									<button type="button" class="iCflgr" id="guest_apply">Apply</button>
								</div>
							</div>							
						</div>
					</div>
					<div class="form-content">
						<label>What is the title of your experience?</label>
						<input type="text" class="form-control" id="experience_title" @if($experience['exp_name'] =='') placeholder="E.g. Dance your way through Rio's samba scene" @endif value="{{$experience['exp_name']}}" required>
					</div>
					<div class="form-content">
						<input type="submit" class="_d4g44p2" aria-busy="false" id="save_general" value="Save &amp; Continue">
					</div>
				</form>
			</div>
	    </section>
	    <section id="accommodation_info">
	        <div class="header">
	            <h2>Book the coolest affordable hotels in {{$offer->location_place}}.</h2>
	            <p>No addtionnal fee when booking multiple accommodation.</p>
	        </div>
	        <div id="form_accommodation">
				<?php $price_array=array();?>
				@foreach($accoms as $accom)
				@if($accom->status != "false")
				@foreach($prices_accom as $key=>$price)
				@if ($price['accomodation_id'] == $accom['id'])
				<?php array_push($price_array, $price['price_a_discount']);?>
				@endif
				@endforeach
				<?php for($i = 0; $i < count($price_array) - 1; $i ++)
				    $min_price = $price_array[0];
				    if ($price_array[$i] < $min_price) {
				        $min_price = $price[$i];
				    }
				?>
				<div class="detail accomodation" data-source="{{$accom}}" data-exp="{{$exp_accom}}" data-img="{{$accom_images}}" data-practical="{{$accom_practical}}" data-experience="{{$experience['arrival_date']}}">
					<ul class="gallery-slideshow">
						@foreach($accom_images as $accom_image)
						@if($accom_image->accom_id == $accom->id)
                        <li><img src="{{$accom_image->path}}" style="width: 262.5px; height: 200px"/></li>
						@endif
						@endforeach
					</ul>
					<div class="detail-info">
						<div class="location_name">
							<p>{{$accom->full_address}} - {{$accom->room_nb}} rooms</p>
							<p><b>{{$accom->name}}</b></p>
							@foreach($prices_accom as $price)
							@if ($price['accomodation_id'] == $accom['id'] && $min_price == $price['price_a_discount'])
							<?php $min_accom_b_price = $price->price_b_discount; $min_accom_discount = $price->discount; ?>
							@endif
							@endforeach
							<div class="origin eUhMAS"><span>From: </span><span class="gTJpzd"><b>${{$min_price}}</b></span><del class="gNVZZi">${{$min_accom_b_price}}</del><span class="dHEojY">{{($min_accom_discount)*100}}%</span></div>
							<p>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span style="text-transform: capitalize;">{{$accom->review}} reviews</span></p>
						</div>
					</div>
				</div>
				@endif
				@endforeach				
	        </div>
	        <div class="selection">
	            <div class="selected">
					<p>My selection<i class="fas fa-angle-down"></i></p>
					<div class="selected_content">
					<?php $sel_c = 0; $flags = [];?>
					@foreach($accoms_sel as $accom_sel)
					<?php $sel_c ++; ?>
					<div class='single_content detail accomodation' data-id='{{$accom_sel->type_id}}' id="{{$sel_c}}">
						@if($accom_sel->check_in == $accom_sel->check_out)
							<?php $str1 = explode("-", $accom_sel->check_in); $check_in = $str1[2]."/".$str1[1]."/".$str1[0]; $str2 = explode("-", $accom_sel->check_out); $day = (int)$str2[2] + 1; if ($day < 10) $day_ = "0".$day; else $day_ = $day; $check_out = $day_."/".$str2[1]."/".$str2[0]; ?>
							<label>From <span id='check_in{{$sel_c}}'>{{$check_in}}</span> to <span id='check_out{{$sel_c}}'>{{$check_out}}</span></label>
						@else
							<?php $str1 = explode("-", $accom_sel->check_in); $check_in = $str1[2]."/".$str1[1]."/".$str1[0]; $str2 = explode("-", $accom_sel->check_out); $check_out = $str2[2]."/".$str2[1]."/".$str2[0]; ?>
							<label>From <span id='check_in{{$sel_c}}'>{{$check_in}}</span> to <span id='check_out{{$sel_c}}'>{{$check_out}}</span></label>
						@endif
						<ul class="gallery-slideshow">
							@foreach($accom_images as $accom_image)
							@if($accom_image->accom_id == $accom_sel->type_id)
                            <li><img src="{{$accom_image->path}}" style="width: 262.5px; height: 200px"/><i class='fas fa-heart slide-like' style='color:rgb(255, 51, 102) !important;' data-id='{{$accom_sel->type_id}}' id='{{$sel_c}}'></i></li>
							@endif
							@endforeach
						</ul>
						@foreach($accoms as $accom)
						@if($accom->status != "false")
						<?php $type_id = $accom_sel->type_id;?>
						@if($accom->id == $type_id)
						<div class="detail-info">							
							<div class="location_name">								
								<p>{{$accom->full_address}} - {{$accom->room_nb}} beds</p>
								<p><b>{{$accom->name}}</b></p>
							</div>							
						</div>
						<div class="origin eUhMAS"><span>Total: </span><span class="gTJpzd"><b>{{$accom_sel->d_a_price}}</b></span><del class="gNVZZi">{{$accom_sel->d_b_price}}</del><span class="dHEojY">{{$accom_sel->discount}}</span></div>
						@endif
						@endif
						@endforeach
					</div>
					@endforeach
					</div>
	            </div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false" id="save_accom"><span class="_cgr7tc7">Save my selection</span></button>
	                <button type="button" class="_ky1ga6g" aria-busy="false" id="undo_accom"><span class="_cgr7tc7">Undo</span></button>
	            </div>
	        </div>
	    </section>
	    <section id="experience_info">
	        <div class="header">
	            <h2>It’s time for exciting activities in {{$offer->location_place}}.</h2>
	            <p>Bring fun to your everyday. Add activity to your trip if you think you deserve it.</p>
			</div>
			<div id="form_experience">
	        <?php $price_array_act=array();?>
				@foreach($activities as $act)
				@if($act->status != "false")
				@foreach($prices_act as $price)
				@if ($price['activity_id'] == $act['id'])
				<?php array_push($price_array_act, $price['price_a_discount']);?>
				@endif
				@endforeach
				<?php for($i = 0; $i < count($price_array_act) - 1; $i ++)
    			    $min_price_act = $price_array_act[0];
    			    if ($price_array_act[$i] < $min_price_act) {
    			        $min_price_act = $price_array_act[$i];
    			    }?>
				<div class="detail experience" data-source="{{$act}}" data-img="{{$act_images}}" data-practical="{{$act_practical}}" data-experience="{{$experience['arrival_date']}}">
					<ul class="gallery-slideshow">
						@foreach($act_images as $act_image)
						@if($act_image->act_id == $act->id)
                        <li><img src="{{$act_image->path}}" style="width: 262.5px; height: 200px;"/></li>
						@endif
						@endforeach
					</ul>
					<div class="detail-info">
						<div class="location_name">
							<p>{{$act->category}}</p>
							<p><b>{{$act->name}}</b></p>							
							@foreach($prices_act as $price)
							@if ($price['activity_id'] == $act['id'] && $min_price_act == $price['price_a_discount'])
							<?php $min_act_b_price = $price->price_b_discount; $min_act_discount = $price->discount; ?>
							@endif
							@endforeach
							<div class="origin eUhMAS"><span>From: </span><span class="gTJpzd"><b>${{$min_price_act}}</b></span><del class="gNVZZi">${{$min_act_b_price}}</del><span class="dHEojY">{{($min_act_discount)*100}}%</span></div>
							<p>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<span style="text-transform: capitalize;">{{$act->insider_rate}} - Superhost</span></p>
						</div>
					</div>
				</div>
				@endif
				@endforeach	
			</div>
	        <div class="selection">
				<div class="selected"><p>My selection<i class="fas fa-angle-down"></i></p></div>
				<div class="selected_content_act">
					<?php $sel_a = 100; ?>
					@foreach($acts_sel as $act_sel)
					<?php $sel_a ++; ?>
					<div class='single_content_act detail activity' data-id='{{$act_sel->type_id}}' id="{{$sel_a}}">
					<?php $str1 = explode("-", $act_sel->check_in); $check_in = $str1[2]."/".$str1[1]."/".$str1[0];?>
						<label id='act_date{{$sel_a}}'>Activity on {{$check_in}}</label>						
						<ul class="gallery-slideshow">
							@foreach($act_images as $act_image)
							@if($act_image->act_id == $act_sel->type_id)
                        <li><img src="{{$act_image->path}}" style="width: 262.5px; height: 200px;"/><i class='fas fa-heart slide-like' style='color:rgb(255, 51, 102) !important;' data-id='{{$act_sel->type_id}}' id='{{$sel_a}}'></i></li>
							@endif
							@endforeach
						</ul>
						<div class="detail-info">
							<div class="location_name">
							@foreach($activities as $act)
								@if($act->status != "false")
								<?php $type_id = $act_sel->type_id;?>
								@if($act->id == $type_id)
								<p>{{$act->category}}</p>
								<p><b>{{$act->name}}</b></p>															
								<div class="origin eUhMAS"><span>From: </span><span class="gTJpzd"><b>{{$act_sel->d_a_price}}</b></span><del class="gNVZZi">{{$act_sel->d_b_price}}</del><span class="dHEojY">{{$act_sel->discount}}</span></div>
								@endif
								@endif
							@endforeach
							</div>
						</div>
					</div>
					@endforeach
				</div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false" id="save_act"><span class="_cgr7tc7">Save my selection</span></button>
	                <button type="button" class="_ky1ga6g" aria-busy="false" id="remove_act"><span class="_cgr7tc7">Undo</span></button>
	            </div>
	        </div>
	    </section>
	    <section id="invite_info">
            <div class="header">
            <h2>Invite your friends to join your trip.</h2>
            </div>
	        <div class="form-general">
	            <div class="form-content">
					<label>Invite by email</label>
					<input id="invite_email">
	                <p>Enter email addresses seperated by commas.</p>
	            </div>
	            <div class="form-content">
	                <label>Include a message(optional)</label><br>
	                <textarea rows="3" name="content" id="invite_message" class="form-control"></textarea>
	            </div>
	            <div class="form-content">
	                <button type="button" class="_d4g44p2" aria-busy="false" id="send_invite"><span class="_cgr7tc7">Send invites</span></button>
	                <button type="button" class="_d4g44p1" aria-busy="false" id="skip_invite"><span class="_cgr7tc7">Skip</span></button>
	            </div>	           
	        </div>
	    </section>
	    <section id="review_info">
	        <div class="review_form">
	        </div>
	        <div class="submit_form">
	            <div class="form_border">
	                <div class="header_form">
						<h3>{{$offer->location_place}}-<span class="review_exp">Name of trip</span></h3>
						<p class="review_nb_guests">{{$experience['guests_nb']}} &nbsp;guests</p>
	                    <p class="review_period">Sun. 30 september, 16th - Mon. 1 october, 12th</p>
	                </div>
	                <div class="body_form">
						<h6><b>Your package</b></h6>
	                    <div class="body_money">
							<p>Accommodation: <span class="review_accom_ap"></span><span class="review_accom_bp"></span></p>
							<p>Activity: <span class="review_act_ap"></span><span class="review_act_bp"></span></p>
	                    </div>
	                </div>
	                <div class="footer_form">	                    
	                    <p><span id="title_total" >Total: </span><span class="new_price">200,90€</span><span class="old_price">277,90€</span></p>
	                    <button type="button" class="btn-submit" aria-busy="false" id="submit_trip"><span class="_cgr7tc7">Submit my trip</span></button>
	                    <p class="alert_text">Not cancellable, non-refundable</p>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section id="payment_info">
			<div class="payment_detail">
				<form class="payment_form" method="post" action="/save_payment_user">
					<h3>Contact Information</h3>
					<div class="row">
						<div class="col-md-12">
							<radiogroup id="check_title">
								<label class="radio-inline">
									<input type="radio" name="title" value="Mr" @if(Auth::User()->title == 'Mr') {{ 'checked' }} @endif><span>Mr</span>
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
							<input type="text" id="last_name" name="last_name" class="form-control" value="{{ Auth::User()->last_name }}" placeholder="Enter" required>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label for="first_name">First name*</label>
							<input type="text" id="first_name" name="first_name" class="form-control" value="{{ Auth::User()->first_name }}" placeholder="Enter" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Phone*</label>
							<input type="tel" id="phone_number" name="phone_number" class="form-control" value="{{ Auth::User()->phone_number }}" required>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Email*</label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Enter" value="{{ Auth::User()->email }}" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Date of birth*</label>
							<?php $y = Auth()->User()->year; $m = Auth()->User()->month; $d = Auth()->User()->day; $birth = $d."/".$m."/".$y;?>
							<input type="text" name="datepicker" id="datepicker" class="form-control" @if($birth=="") placeholder="dd/mm/yyyy" @else value="{{$birth}}" @endif required>
						</div>
					</div>					
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p style="margin:0px;" class="payment_price"><b>Total 207,90€</b></p>
							<label>Not cancellable, non-refundable</label>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<button id="check">Validate & Check</button>
						</div>
					</div>
				</form>				
				<form action="experience-payment" method="get" id="payment-form" hidden>					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h3>Additional Info</h3>
							<label>What is the reason for your staycation?</label><br>
							<textarea rows="5" id="additional_info" class="hm-form--control" name="additional_info" placeholder="promised, we will keep this for us."></textarea>
							<label><input type="checkbox" name="agree" id="agree">I have read and accept the <span style="color:rgb(255, 51, 102);">Terms and Conditions</span> of Staycation</label>
							<input type="hidden" name="voucher_nb" id="voucher_nb" value="nothing">
							<input type="hidden" name="accom_count" id="accom_count" value="accom_count">
							<input type="hidden" name="act_count" id="act_count" value="act_count">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Promo code or gift card</label>
							<input type="text" id="promo_code" class="form-control" placeholder="ABCD1234">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<a id="promo_apply">Apply</a>
						</div>
					</div>
					<div class="form-row" style="margin-bottom: 15px;">
						<label for="card-element">Credit or debit card</label>
						<div id="card-element">
						</div>
						<div id="card-errors" role="alert"></div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p style="margin:0px;" class="payment_price"><b>Total 0€</b></p>
							<label>Not cancellable, non-refundable</label>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<button id="pay">Submit Payment</button>
						</div>
					</div>
				</form>				
			</div>
			<div class="payment_inside">
				<div class="form_border">
	                <div class="header_form">
	                    <h3>{{$offer->location_place}}-<span class="review_exp">Name of trip</span></h3>	                    
	                    <p class="review_period">Sun. 30 september, 16th - Mon. 1 october, 12th</p>
	                </div>
	                <div class="body_form">
						<h6><b>Your package</b></h6>
	                    <div class="body_money">
							<p>Accommodation: <span class="review_accom_ap"></span><span class="review_accom_bp"></span></p>
							<p>Activity: <span class="review_act_ap"></span><span class="review_act_bp"></span></p>
							<p class="voucher_discount">Voucher discount: <span class="promotion_discount"></span></p>
	                    </div>
	                </div>
	                <div class="footer_form">	                    
	                    <p><span id="title_total" >Total: </span><span class="new_price">0€</span><span class="old_price">0€</span></p>	                    
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
	<div class="progress_bar"></div>
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
							<div class="headBg lazyloaded" data-bg="https://res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/h_620,q_auto:eco/v1497970672/common/static/home-logout/testimonials"></div>
						</div>
						<div class="modal-sub-header">
							<div class="modal-map-info map_info">
								<h3 class="country">{{$offer->location_place}}, {{$offer->location_country}}</h3>
								<a class="map_link"><img src="../imgs/map-location.png"/><span>Map</span></a>
								<a class="photo_link"><img src="../imgs/photo_logo.png"/><span>Photo</span></a>
							</div>							
						</div>
					</div>
					<div class="modal-body-contents">
						<div class="text-contents">
							<div class="part1-text">
								<div class="part1-header">
									<h3 class="modal2-place">The Barn ****</h3>
									<label class="modal2-address">Moulin de Bretigny, 78830 Commune de Bonnelles <svg aria-hidden="true" data-prefix="fal" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-2x"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 464c-119.1 0-216-96.9-216-216S128.9 40 248 40s216 96.9 216 216-96.9 216-216 216zm90.2-146.2C315.8 352.6 282.9 368 248 368s-67.8-15.4-90.2-42.2c-5.7-6.8-15.8-7.7-22.5-2-6.8 5.7-7.7 15.7-2 22.5C161.7 380.4 203.6 400 248 400s86.3-19.6 114.8-53.8c5.7-6.8 4.8-16.9-2-22.5-6.8-5.6-16.9-4.7-22.6 2.1zM168 240c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32z" class=""></path></svg><span>9.0</span>14 views</label>
								</div>
								<div class="part1-content"></div>
								<div class="part1-tabs">
									<div class="part1-tab-titles">
										<label id="experience_view">The experience</label>
										<label id="street_view">Street cred</label>
									</div>
									<div class="part1-tab">
										<div class="part1-tab-title">
											<h3>The experience</h3>
											<button class="modal-header-btn" id="discover_hotel"><svg aria-hidden="true" data-prefix="fal" data-icon="camera" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-camera fa-w-16 fa-2x"><path fill="currentColor" d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z" class=""></path></svg><span>Discover the hotel</span></button>
										</div>
										<div class="display: list-item;"></div>
										<div class="information_practice">
											<h3>Informations pratiques</h3>
											<div class="detail_practice">
												<div class="text_detail_practice">
													<div class="schedule">
														<label><b>Schedule</b></label>
														<div class="row_form spec_form">
															<div class="uni-form">
																<div>Check in</div>
																<input type="text" id="check_in" placeholder="From 15h" disabled>
															</div>
															<div class="uni-form">
																<div>Check out</div>
																<input type="text" id="check_out" placeholder="Untill 12h" disabled>
															</div>
														</div>
														<div class="row_form">
															<div class="uni-form">
																<div>Breakfast</div>
																<input type="text" id="breakfast_access" placeholder="6:30 - 10:30" disabled>
															</div>
														</div>
														<div class="row_form">
															<div class="uni-form">
																<div>Access Jacuzzi</div>
																<input type="text" id="jacuzzi_access" placeholder="10:00 - 19:00(closed on Mondays)" disabled>
															</div>
														</div>
														<div class="row_form">
															<div class="uni-form">
																<div>Access Gym</div>
																<input type="text" id="gym" placeholder="24/7" disabled>
															</div>
														</div>
													</div>
													<div class="get_there">
														<label><b>How to get there?</b></label>
														<div class="row_form">
															<div class="uni-form">
																<textarea class="accomodation_note" disabled></textarea>
															</div>
														</div>
													</div>
												</div>
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
									<span id="participants_adult">1</span><span>&nbsp; night(s) </span>
								</div>
								<span class="dBZAHA" id="down_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 8.83A.5.5 0 0 1 6.102 8h11.796a.5.5 0 0 1 .376.83l-5.898 6.74a.5.5 0 0 1-.752 0L5.726 8.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
								<span class="dBZAHA" id="up_caret" style="margin-right: 0px; margin-top: 2px;"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M5.726 15.17l5.898-6.74a.5.5 0 0 1 .752 0l5.898 6.74a.5.5 0 0 1-.376.83H6.102a.5.5 0 0 1-.376-.83z" fill="currentColor" fill-rule="evenodd"></path></svg></span>
								</button>								
							</div>
						</div>
						<div class="calender"></div>
						<div class="result-content">
							<div class="eUhMAS">
								<span class="gTJpzd"><b id="accom_discounted_price">230€</b></span>
								<del class="gNVZZi" id="accom_origin_price">230€</del>
								<span class="dHEojY" id="accom_discont">-43%</span>								
							</div>
							<button class="result-btn add_trip_btn">Add to your trip</button>
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
									<h3 id="name_activity"></h3>
									<p id="category_activity"></p>									
								</div>
								<div class="location-detail-info">
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu"><button type="button" class="_1k01n3v1" aria-busy="false" id="activity_address"></button></div></div></div></div>
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="far fa-calendar-alt"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu" id="activity_arrival_date"></div></div></div></div>
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="far fa-clock"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu" id="activity_activity_hours"></div></div></div></div>
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-home"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu" id="activity_parking"></div></div></div></div>
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-file-invoice"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu" id="activity_group"></div></div></div></div>
									<div style="margin-bottom: 8px;"><div class="_e296pg"><div class="_11d4lg6"><div class="_1bvsgufu"><span class="_8tbpu3" aria-hidden="true"><i class="fas fa-comments"></i></span></div></div><div class="_11vbjbm"><div class="_1bvsgufu" id="activity_lang">Offered in English</div></div></div></div>
								</div>
								<div class="part1-content">
									<div class="form-info">
										<p class="header-form"><b>Content</b></p>
										<div id="activity_content"></div>
									</div>									
								</div>
								<div class="information_practice">
									<h3>Informations pratiques</h3>
									<div class="detail_practice">
										<div class="text_detail_practice">
											<div class="schedule">
												<label><b>What will be provided ?</b></label>
												<div class="row_form">
													<div class="uni-form">
														<textarea id="cancellation" disabled></textarea>
													</div>
												</div>
											</div>
											<div class="get_there">
												<label><b>What to bring ? </b></label>
												<div class="row_form">
													<div class="uni-form">
														<textarea class="activity_note" disabled></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="map_detail_practice">
											<div class="map-image">
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
							<div class="slider-modal"></div>						
							<div class="act_calender"></div>
							<div class="result-content">
								<div class="eUhMAS">
									<span class="gTJpzd"><b id="act_discounted_price">230€</b></span>
									<del class="gNVZZi" id="act_origin_price">230€</del>
									<span class="dHEojY" id="act_discont">-43%</span>
								</div>
								<button class="result-btn add_trip_act_btn">Add to your trip</button>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-experience" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md modal-experience" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="experience-model-close close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>					
				</div>
				<div class="modal-body">
					<div class="row-modal">
						<div class="row">
							<div class="hBmdLj">
								<h2 class="jhDePP modal-experience-place" style="margin-top: 0px; padding-right: 45px;"></h2>
								<div class="basic_"></div>
								<div class="breakfast_"></div>
								<div class="jacuzzi_"></div>
								<div class="room_"></div>
								<div class="outdoor_"></div>
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
	<script type="text/javascript" src="{{ url('js/magicsuggest-min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
	<script>
		var sel_c = "{{$sel_c}}";
		var sel_a = "{{$sel_a}}";
		if ("{{$experience}}" == null) {
			var exp_id = 0;
		} else {
			var exp_id = "{{$experience['id']}}";
		}
		var origin_prices = "{{$prices_accom}}";
		var act_prices = "{{$prices_act}}";
		var count_a = "{{$count_a}}";
		var count_c = "{{$count_c}}";
		var type = "{{$type}}";		
		var _flags = "{{$_flags}}";
		var f_count = "{{$f_count}}";
	</script>
    <script type="text/javascript" src="{{ url('js/customize/create_experience.js') }}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPzXAXjAyEIcluDJSMgRRBffUCrbNq1Bc&callback=initMap"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script>
		$('.slide-like').click(function () {var id = $(this).attr('id'); if (id < 100) removeSelection(id, 'accoms'); else removeSelection(id, 'acts');});
		$('.gallery-slideshow').slideshow({
			interval: 5000,
			width: 262.5,
			height: 200
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
			var old_price = $(".payment_price").html();
        	var str = old_price.split("Total: $");
			hiddenInput1.setAttribute('value', parseInt(str[1]));
			form.appendChild(hiddenInput1);

			var hiddenInput2 = document.createElement('input');
			hiddenInput2.setAttribute('type', 'hidden');
			hiddenInput2.setAttribute('name', 'email');
			hiddenInput2.setAttribute('value', $("#email").val());
			form.appendChild(hiddenInput2);
			
			if ("{{$experience}}" == null) {
				var exp_id = 0;
			} else {
				var exp_id = "{{$experience['id']}}";
			}
			var hiddenInput3 = document.createElement('input');
			hiddenInput3.setAttribute('type', 'hidden');
			hiddenInput3.setAttribute('name', 'exp_id');
			hiddenInput3.setAttribute('value', exp_id);
			form.appendChild(hiddenInput3);			

			// Submit the form
			form.submit();
		}
	</script>
@endsection
