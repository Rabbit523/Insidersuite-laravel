@extends('layout')

@section('title','Insider Suite |  Contact')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/contact.css') }}">
@endsection
@section('content')
<div id="site-content">
	<main role="main" id="MainContent" class="main anim-fade-in-up">
		<div class="hm-subheader">
			<div class="hm-container mod-tight">
				<h2 class="hm-subheader--title">Need help?</h2>
				<ul class="hm-subheader--navigation">
					<li class="hm-subheader--navigation-item">
            <a href="@if(Auth::User()) {{ url('write-to-us') }} @else {{ url('write_to_us') }} @endif">
							<img class="hm-subheader--navigation-item-icon" src="../imgs/faq.png">
							<span class="hm-subheader--navigation-item-text-faq">FAQ</span>
						</a>
					</li>
					<li class="hm-subheader--navigation-item mod-active">						
            <a href="@if(Auth::User()) {{ url('contact') }} @else {{ url('contacts') }} @endif">
							<img class="hm-subheader--navigation-item-icon" src="../imgs/email2.png">
							<span class="hm-subheader--navigation-item-text-contact">Contact</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="hm-container mod-tight hm-margin">		
			<form method="post" action="{{url('write_mail')}}" id="contact_form">
					{{ csrf_field() }}
        <div class="hm-form--group">          
          <input type="text" name="subject" id="ContactFormSubject" value="" spellcheck="false" autocomplete="off" autocapitalize="off" required class="hm-form--control">
          <label for="ContactFormSubject" class="hm-form--control-label subject">Subject</label> 
        </div>
        <div class="hm-form--group">          
           <input type="text" name="name" id="ContactFormName" value="" required class="hm-form--control"> 
           <label for="ContactFormName" class="hm-form--control-label name">Your name</label> 
				</div>
				<div class="hm-form--group">         
          <input type="email" name="email" id="ContactFormEmail" value="" spellcheck="false" autocomplete="off" autocapitalize="off" required class="hm-form--control">
          <label for="ContactFormEmail" class="hm-form--control-label email">Your email</label> 
        </div>
        <div class="hm-form--group">
           <textarea rows="10" name="content" id="ContactFormMessage" required class="hm-form--control"></textarea> 
           <label for="ContactFormMessage" class="hm-form--control-label message">Your message</label> 
        </div>
        <button type="submit" class="hm-contact--submit" value="Send">Contact</button>
      </form>
    </div>
  </main>
</div>

@endsection

@section('foot')
	@parent
    <script type="text/javascript" src="{{ url('js/customize/contact.js') }}"></script>
@endsection
