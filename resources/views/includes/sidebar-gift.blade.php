<h3>Account</h3>
<br>
<ul class="account-sidebar">
	<li class="@if(Request::segment(1) == 'profile') active-sidebar-item @endif">Profile</li>
	<li class="@if(Request::segment(1) == 'travel') @endif">Travel Companion</li>
	<li class="@if(Request::segment(1) == 'alerts') active-sidebar-item @endif">Alerts</li>
	<li class="@if(Request::segment(1) == 'subscription') @endif">Subscriptions</li>
	<li class="@if(Request::segment(1) == 'mail_gift_card') @endif">Gift card</li>
</ul>