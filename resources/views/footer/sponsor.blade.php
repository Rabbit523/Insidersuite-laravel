@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/sponsor.css') }}">
@endsection
@section('content')

<div id="site-content">
    <div class="col-md-12">
        <img class="our-story-banner" src="{{ url('imgs/InsiderSuite_Our_Story.jpg') }}">
    </div>
    <h1 class="banner-heading">Sponsor</h1>
    <div class="container" >
        <div class="sponsorship">
            <div class="invitation">
                <div class="col-md-9 col-xs-9 col-lg-9" style="margin-top: 20px;">
                    <input type="text" id="invite_mail" placeholder="Enter e-mail addresses">
                </div>
                <div class="col-md-3 col-xs-3 col-lg-3">
                    <button class="btn" id="invite_button">Send invitations</button>
                </div>
            </div>
            <div class="or-separator col-sm-12 no-pad-xs">
                <span class="h6 or-separator--text">OR</span>
            </div>
            <div class="send_link">
                <div class="col-md-6 col-xs-8 col-lg-8 share_group">
                    <label class="col-md-3 col-xs-3 col-lg-3 input-large" for="share-link">Share your link :</label>
                    <div class="col-md-9 col-xs-9 col-lg-9 input-group">
                        <div class="col-md-8 col-xs-8 col-lg-8">
                            <input type="text" id="share_link" class="share_link input_large" value="{{ url('/signup?referal_code='.Auth::User()->referal_code) }}">
                        </div>
                        <div class="col-md-4 col-xs-4 col-lg-4">
                            <button class="btn btn_copy"><span class="button_text">Copy</span></button>
                        </div>                                
                    </div>
                </div>
                <div class="col-md-6 col-xs-4 col-lg-4 share_buttons">
                    <div class="col-md-6 col-xs-6 col-lg-6">
                        <a class="btn btn-large btn-block btn-facebook-messenger" data-network="messenger" data-referral-link="https://www.copinesdevoyage.com/parrainage/signup/c79144b4c6ce?utm_source=parrainage&amp;utm_medium=messenger+share&amp;code=Pa77a1n" rel="nofollow noopener noreferrer" id="messenger-share" href="https://www.facebook.com/dialog/send?app_id=441106345998340&amp;link=https%3A%2F%2Fwww.copinesdevoyage.com%2Fparrainage%2Fsignup%2Fc79144b4c6ce%3Futm_source%3Dparrainage%26utm_medium%3Dmessenger%2Bshare%26code%3DPa77a1n&amp;redirect_uri=https%3A%2F%2Fwww.copinesdevoyage.com%2Fparrainage%2Fsignup%2Fc79144b4c6ce%3Futm_source%3Dparrainage%26utm_medium%3Dmessenger%2Bshare%26code%3DPa77a1n" target="_blank">
                            <svg fill="currentcolor" class="st-icon st-icon-messenger " style="" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" role="img">
                                <title>Messenger</title>
                                <path d="M12,2.4c-5.3,0-9.5,4-9.5,8.9c0,2.8,1.4,5.3,3.5,6.9v3.4l3.2-1.8c0.9,0.2,1.8,0.4,2.7,0.4c5.3,0,9.5-4,9.5-8.9 S17.3,2.4,12,2.4z M12.9,14.4l-2.4-2.6l-4.7,2.6L11,8.8l2.5,2.6l4.7-2.6L12.9,14.4z"></path>
                                <path d="M0,0h24v24H0V0z" fill="none"></path>
                            </svg>
                            <span>Messenger</span>
                        </a>
                    </div> 
                    <div class="col-md-6 col-xs-6 col-lg-6">
                        <a class="btn btn-large btn-block btn-facebook" data-network="facebook" data-referral-link="https://www.copinesdevoyage.com/parrainage/signup/c79144b4c6ce?utm_source=parrainage&amp;utm_medium=facebook+share&amp;code=Pa77a1n" rel="nofollow noopener noreferrer" id="facebook-share" href="https://www.facebook.com/dialog/share?app_id=441106345998340&amp;href=https%3A%2F%2Fwww.copinesdevoyage.com%2Fparrainage%2Fsignup%2Fc79144b4c6ce%3Futm_source%3Dparrainage%26utm_medium%3Dfacebook%2Bshare%26code%3DPa77a1n&amp;redirect_uri=https%3A%2F%2Fwww.copinesdevoyage.com%2Fparrainage%2Fsignup%2Fc79144b4c6ce%3Futm_source%3Dparrainage%26utm_medium%3Dfacebook%2Bshare%26code%3DPa77a1n" target="_blank">
                            <svg fill="currentcolor" class="st-icon st-icon-facebook " style="" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" role="img">
                                <title>Facebook</title>
                                <path d="M9.9,22v-9.1H6.8V9.3h3.1V6.7c0-3,1.9-4.7,4.6-4.7c1.3,0,2.4,0.1,2.7,0.1v3.2l-1.9,0c-1.5,0-1.8,0.7-1.8,1.7 v2.3H17l-0.5,3.5h-3.1V22H9.9z"></path>
                                <path d="M0,0h24v24H0V0z" fill="none"></path>
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="title">
                    <div> 
                        <h1><span>Suggested referrals</span></h1>
                    </div>
                    <div> 
                        <button class="btn btn-large btn-block hidden-sm hidden-xs more_suggestions">Show more suggestions</button>
                    </div>                        
                </div>					
                <span>We think these friends would make great hosts.</span>                  
                <div class="_w9ro7h">                        
                    <div>
                        <div class="_2h22gn">
                            <div class="_1fylxegl">
                                <div class="_1jg2nxf">
                                    <div class="_1c2qaqv">
                                        <div class="_ncqy3bd">
                                            <div class="_e296pg" style="height:64px;width:64px;display:inline-block">
                                                <img class="_12r18es" src="https://a0.muscache.com/im/pictures/56779bd5-9d38-46e5-834e-bd29c93235c2.jpg?aki_policy=profile_medium" height="64" width="64" alt="Elsa Mothay" title="Elsa Mothay">
                                            </div>
                                        </div>
                                        <div class="_jnrahhr">
                                            <div class="_1iurgbx">Elsa Mothay</div>
                                        </div>
                                        <div class="_1n57hdr7">
                                            <div class="_1iurgbx">
                                                <button type="button" class="_n5wk6ic" aria-busy="false">
                                                    <span>Refer</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div> 
                            <div class="_1fylxegl">
                                <div class="_1jg2nxf">
                                    <div class="_1c2qaqv">
                                        <div class="_ncqy3bd">
                                            <div class="_e296pg" style="height:64px;width:64px;display:inline-block">
                                                <img class="_12r18es" src="https://a0.muscache.com/im/pictures/56779bd5-9d38-46e5-834e-bd29c93235c2.jpg?aki_policy=profile_medium" height="64" width="64" alt="Elsa Mothay" title="Elsa Mothay">
                                            </div>
                                        </div>
                                        <div class="_jnrahhr">
                                            <div class="_1iurgbx">Elsa Mothay</div>
                                        </div>
                                        <div class="_1n57hdr7">
                                            <div class="_1iurgbx">
                                                <button type="button" class="_n5wk6ic" aria-busy="false">
                                                    <span>Refer</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>  
                            <div class="_1fylxegl">
                                <div class="_1jg2nxf">
                                    <div class="_1c2qaqv">
                                        <div class="_ncqy3bd">
                                            <div class="_e296pg" style="height:64px;width:64px;display:inline-block">
                                                <img class="_12r18es" src="https://a0.muscache.com/im/pictures/56779bd5-9d38-46e5-834e-bd29c93235c2.jpg?aki_policy=profile_medium" height="64" width="64" alt="Elsa Mothay" title="Elsa Mothay">
                                            </div>
                                        </div>
                                        <div class="_jnrahhr">
                                            <div class="_1iurgbx">Elsa Mothay</div>
                                        </div>
                                        <div class="_1n57hdr7">
                                            <div class="_1iurgbx">
                                                <button type="button" class="_n5wk6ic" aria-busy="false">
                                                    <span>Refer</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>  
                            <div class="_1fylxegl">
                                <div class="_1jg2nxf">
                                    <div class="_1c2qaqv">
                                        <div class="_ncqy3bd">
                                            <div class="_e296pg" style="height:64px;width:64px;display:inline-block">
                                                <img class="_12r18es" src="https://a0.muscache.com/im/pictures/56779bd5-9d38-46e5-834e-bd29c93235c2.jpg?aki_policy=profile_medium" height="64" width="64" alt="Elsa Mothay" title="Elsa Mothay">
                                            </div>
                                        </div>
                                        <div class="_jnrahhr">
                                            <div class="_1iurgbx">Elsa Mothay</div>
                                        </div>
                                        <div class="_1n57hdr7">
                                            <div class="_1iurgbx">
                                                <button type="button" class="_n5wk6ic" aria-busy="false">
                                                    <span>Refer</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>                                
                        </div>
                    </div>
                </div>                                
            </div>				
            <div class="col-md-4 col-sm-12 col-xs-12" style="padding-right: 0px; padding-left: 0;">
                <div class="row referal-section">
                    <div class="col-md-12 col-sm-12 col-xs-12 referrals">
                        <h2>Referrals</h2>
                        <h4>Referrals Sent <span>0</span></h4><hr>
                        <h4>Potential bonus <span>$500</span></h4><hr>
                        <h4>You’ve earned <span>$0</span></h4>
                        <h4>20 bonused left</h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>			
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>How referrals works</h2>
            </div>
        </div>
        <div class="row how-works-steps refer_friends">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3><span>1</span></h3>
                <h4>Refer friends</h4>
                <h5>Send referrals to your friends.</h5>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3><span>2</span></h3>
                <h4>Follow along</h4>
                <h5>Follow your friend’s progress and send encouraging messages along the way.</h5>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <h3><span>3</span></h3>
                <h4>Get paid</h4>
                <h5>You’ll get paid after your friend subscribe.</h5>
            </div>
        </div>
        <div class="_fndw6ky">
            <div style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0">
                <div class="_16m94n6">
                    <div class="_2h22gn">
                        <div class="_1ehvxcwu">
                            <div>
                                <div class="_1jb82wo">
                                    <div class="_djxl322">
                                        <div class="_ni9axhe">
                                            <span class="_12ei9u44"><span>Tell your friends in Sydeny they could earn up to $800 AUD a week by hosting</span></span>
                                            <div class="_1c2cbn7k">
                                                <div class="_jx9fdbv" role="presentation">
                                                    <div role="button" tabindex="-1" aria-expanded="false">
                                                        <button type="button" class="_1rp5252" style="padding:0;margin:0" aria-busy="false">
                                                            <svg viewBox="0 0 24 24" role="img" aria-label="Learn more" focusable="false" style="height:20px;width:20px;display:block;fill:#484848"><path d="m12 0c-6.63 0-12 5.37-12 12s5.37 12 12 12 12-5.37 12-12-5.37-12-12-12zm0 23c-6.07 0-11-4.92-11-11s4.93-11 11-11 11 4.93 11 11-4.93 11-11 11zm4.75-14c0 1.8-.82 2.93-2.35 3.89-.23.14-1 .59-1.14.67-.4.25-.51.38-.51.44v2a .75.75 0 0 1 -1.5 0v-2c0-.74.42-1.22 1.22-1.72.17-.11.94-.55 1.14-.67 1.13-.71 1.64-1.41 1.64-2.61a3.25 3.25 0 0 0 -6.5 0 .75.75 0 0 1 -1.5 0 4.75 4.75 0 0 1 9.5 0zm-3.75 10a1 1 0 1 1 -2 0 1 1 0 0 1 2 0z" fill-rule="evenodd"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1gc9tcm">
                                    <div class="_xsoek6" style="background:radial-gradient(circle, #FFFFFF 50%, #EDEDED 100%)">
                                        <span><img src="https://a0.muscache.com/airbnb/static/host_referral/friend_could_earn-4ba970ab08ce1602733036c800a988b4.png" alt="" class=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_sub">
            <h1>Access the offers for this Sunday</h1>
            <a href="@if(Auth::User()) {{ url('offers') }} @else {{ url('/') }} @endif" class="btn btn-subscribe">Subscribe</a>
        </div>
    </div>
</div>

<div id="share_popup" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
			<div class="modal-header">
        <h4>Share With Friends</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
				<div class="modal-body" style="padding:50px;">
					<div class="row">
						<div class="col-md-12 form-wrap" style="background-color: transparent;margin: auto;position: relative;">
							<form id="refer-form">
								<input id="token" name="_token" type="text" value="{!! csrf_token() !!}" hidden>
								<input type="email" class="input" id="refer-email" autocomplete="off" placeholder="Email" name="email" required="">
								<input type="submit" id="refer-submit" class="button btn btn-default btn-lg" value="Refer" style="margin-top: 10px;">
							</form>
						</div>
					</div>
          <h4>Import Contact: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/New_Logo_Gmail.svg/2000px-New_Logo_Gmail.svg.png" width="20"> <a href="{{ url('sponsor/google') }}" id="google_contacts">Gmail</a> <a id="outlook_contacts" href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=f82e66d4-3f5f-497a-9b95-0fbc281739ed&redirect_uri=http://localhost:8000/outlook/get_access_token&response_type=code&scope=openid+Contacts.Read"><img src="{{ url('imgs/outlook-logo.png') }}" width="20">Outlook</a></h4>
          <br>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img class="img-responsive" src="{{ url('imgs/fb_logo.png') }}" width="40">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10" style="padding: 10px">
						<a href="#" id="facbook-share-post">Share on Facebook</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img class="img-responsive" src="{{ url('imgs/fb_messenger.png') }}" width="40">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10" style="padding: 10px">
						<a href="#" id="facbook-send-message">Messager</a>
					</div>
				</div>
			</div>
	    </div>
	</div>
</div>
@if(isset($google_contacts))

<button hidden id="google_contact_popup_toggle" data-toggle="modal" data-target="#google_contacts_popup" data-keyboard="false" data-backdrop="static"></button>
<div class="modal fade" id="google_contacts_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 620px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="invitation_modal_close">&times;</button>
                <h4 class="modal-title">Select Friends To Invite</h4>
            </div>
            <form id="invitation_form">
                <input type="hidden" name="_token" id="token" value="{!! csrf_token() !!}">
                <div class="modal-body" style="height: 500px;overflow: auto; ">
                    <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="myUL" style="list-style: none;">
                                @foreach($google_contacts as $key => $value)
                                    <li class="filter_list">
                                        <div class="row list_details">
                                            <div class="col-md-1 col-sm-1 col-xs-1"><input type="checkbox" name="email[]" value="{{ $value['email'] }}" checked></div>
                                            <div class="col-md-5 col-sm-5 col-xs-5" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <h5 style="margin:6px 0px;color: black;"><strong>@if($value['name'] == '') {{ $value['email'] }} @else {{ $value['name'] }} @endif</strong></h5></div>
                                            <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                            <div class="col-md-5 col-sm-5 col-xs-5" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                <h5 style="margin:6px 0px;color: black;">{{ $value['email'] }}</h5>
                                            </div>
                                        </div>  
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" id="invite_all" style="display: none;">Invite All</button>
                    <button type="button" class="btn btn-default pull-left" id="remove_all">Remove All</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel_invite_all">Cancel</button>
                    <button type="button" class="btn btn-default" id="send_invitations">Send Inviitaions</button>
                    <button class="buttonload btn btn-default" style="display: none" id="loading" disabled>
                        <i class="fa fa-spinner fa-spin"></i> Sending
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
@if(isset($outlook_contacts))

<button hidden id="google_contact_popup_toggle" data-toggle="modal" data-target="#google_contacts_popup" data-keyboard="false" data-backdrop="static"></button>
<div class="modal fade" id="google_contacts_popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 620px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="invitation_modal_close">&times;</button>
                <h4 class="modal-title">Select Friends To Invite</h4>
            </div>
            <form id="invitation_form">
                <input type="hidden" name="_token" id="token" value="{!! csrf_token() !!}">
                <div class="modal-body" style="height: 500px;overflow: auto; ">
                    <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @if(count($outlook_contacts) > 0)
                                <ul id="myUL" style="list-style: none;">
                                    @foreach($outlook_contacts as $key => $value)
                                        <li class="filter_list">
                                            <div class="row list_details">
                                                <div class="col-md-1 col-sm-1 col-xs-1"><input type="checkbox" name="email[]" value="{{ $value['email'] }}" checked></div>
                                                <div class="col-md-5 col-sm-5 col-xs-5" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                    <h5 style="margin:6px 0px;color: black;"><strong>@if($value['name'] == '') {{ $value['email'] }} @else {{ $value['name'] }} @endif</strong></h5></div>
                                                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                                <div class="col-md-5 col-sm-5 col-xs-5" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                    <h5 style="margin:6px 0px;color: black;">{{ $value['email'] }}</h5>
                                                </div>
                                            </div>  
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                              <h4>No Contacts Found</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" id="invite_all" style="display: none;">Invite All</button>
                    <button type="button" class="btn btn-default pull-left" id="remove_all">Remove All</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="cancel_invite_all">Cancel</button>
                    <button type="button" class="btn btn-default" id="send_invitations">Send Inviitaions</button>
                    <button class="buttonload btn btn-default" style="display: none" id="loading" disabled>
                        <i class="fa fa-spinner fa-spin"></i> Sending
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="_w9ro7h"><div><div class="_2h22gn"><div class="_1ws7wghf"><section><div class="_12ei9u44"><h1 tabindex="-1" class="_tpbrp"><span>Suggested referrals</span></h1></div></section></div><div class="_1xqr5e0e"><div class="_107ja4p"><div><button type="button" class="_1y9cyqxk" aria-busy="false"><span class="_cgr7tc7"><span>Show more suggestions</span></span></button></div></div></div></div><div class="_10ash0x" style="margin-top:8px;margin-bottom:8px"><div class="_2h22gn"><div class="_1rnz84d"><div class="_1n57hdr7"><span>We think these friends would make great hosts.</span></div></div></div></div></div><div><div class="_2h22gn"><div class="_1fylxegl"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/b054cd2f-6e1f-4212-b778-f3a1fa22f394.jpg?aki_policy=profile_medium" height="64" width="64" alt="Juliet Lobato De Faria" title="Juliet Lobato De Faria"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Juliet Lobato De Faria</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/user/6b1a95cf-1305-423f-850d-e8b844cb8433.jpg?aki_policy=profile_medium" height="64" width="64" alt="Marine Parker" title="Marine Parker"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Marine Parker</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/users/30655602/profile_pic/1428263735/original.jpg?aki_policy=profile_medium" height="64" width="64" alt="Térence Gil" title="Térence Gil"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Térence Gil</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/3ac4b5dd-c246-4685-95fd-6583ecf55d3b.jpg?aki_policy=profile_medium" height="64" width="64" alt="So Bel" title="So Bel"></div></div><div class="_jnrahhr"><div class="_1iurgbx">So Bel</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/users/19673238/profile_pic/1407497476/original.jpg?aki_policy=profile_medium" height="64" width="64" alt="Melissa Paglino" title="Melissa Paglino"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Melissa Paglino</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/d8199a01-2139-4e03-aeeb-6b4809f059d0.jpg?aki_policy=profile_medium" height="64" width="64" alt="Natacha Deneux" title="Natacha Deneux"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Natacha Deneux</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/defaults/user_pic-68x68.png?v=3" height="64" width="64" alt="Duncan Kennedy" title="Duncan Kennedy"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Duncan Kennedy</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/b60186d6-06e2-4a30-951b-0ca93601e729.jpg?aki_policy=profile_medium" height="64" width="64" alt="Bell Abdullahi" title="Bell Abdullahi"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Bell Abdullahi</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div><div class="_1fylxegl"><div class="_1jg2nxf"><div class="_1c2qaqv"><div class="_ncqy3bd"><div class="_e296pg" style="height:64px;width:64px;display:inline-block"><img class="_12r18es" src="https://a0.muscache.com/im/pictures/768d285c-b0a9-4519-a7ac-65215a31438d.jpg?aki_policy=profile_medium" height="64" width="64" alt="Marvyn Mdy" title="Marvyn Mdy"></div></div><div class="_jnrahhr"><div class="_1iurgbx">Marvyn Mdy</div></div><div class="_1n57hdr7"><div class="_1iurgbx"><button type="button" class="_n5wk6ic" aria-busy="false"><span>Refer</span></button></div></div></div></div></div></div></div></div> -->
@endif
@endsection

@section('foot')
	@parent
	<script type="text/javascript" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            @if(isset($google_contacts) || isset($outlook_contacts) )
                $('#google_contact_popup_toggle').trigger('click');
            @endif
           FB.init({
                appId      : '625441737790452',
                status     : true,
                xfbml      : true,
                version    : 'v2.7' // or v2.6, v2.5, v2.4, v2.3
            });
        });
        $('#facbook-share-post').click(function(){
            FB.ui({
                method: 'share',
                href: 'https://www.insidersuite.com/',
            }, function(response){});
        });
        $('#facbook-send-message').click(function(){
            FB.ui({
                method: 'send',
                link: 'https://www.insidersuite.com/',
            });
        });
        $('#refer-form').on('submit',function(e){
            e.preventDefault();
            $('#refer-submit').prop('disabled',true);
            $('#refer-submit').val('Sent!');
            $.ajax({
                type:'post',
                url: '{{ url('refer-mail') }}',
                data: $("#refer-form").serialize(),
                success: function(res) {
                    console.log(res);
                    $('#refer-submit').prop('disabled',false);
                    $('#refer-submit').val('Refer');
                    $('#refer-email').val('');
                },
                fail:function(res) {
                    console.log(res);
                }
            });
        });
        $('#send_invitations').on('click',function(){
            $(this).hide();
            $('#loading').show();
            $('#invite_all').prop('disabled',true);
            $('#remove_all').prop('disabled',true);
            $('#cancel_invite_all').prop('disabled',true);
            $.ajax({
                type:'post',
                url: '{{ url('refer-all') }}',
                data: $("#invitation_form").serialize(),
                success: function(res) {
                    console.log(res);
                    $('#invitation_modal_close').trigger('click');
                    $('#cancel_invite_all').trigger('click');
                },
                fail:function(res) {
                    console.log(res);
                }
            });
        });
        $('#invitation_form').change(function(){
                    console.log($("#invitation_form input:checkbox:checked").length);
            // if ($("#invitation_form").data("changed")) {
                if ($("#invitation_form input:checkbox:checked").length > 0)
                {
                    console.log($("#invitation_form input:checkbox:checked").length);
                    $('#send_invitations').prop('disabled',false);
                }
                else
                {
                   $('#send_invitations').prop('disabled',true);
                }
            // }
        });
        $('#invite_all').click(function(){
            $('#invitation_form input:checkbox').prop('checked',true);
            $(this).hide();
            $('#remove_all').show();
            $('#send_invitations').prop('disabled',false);
        });
        $('#remove_all').click(function(){
            $('#invitation_form input:checkbox').prop('checked',false);
            $(this).hide();
            $('#invite_all').show();
            $('#send_invitations').prop('disabled',true);
        });
    </script>
@endsection