<nav class="sidebar">
	<div class="brand">
		<a href="{{url('/')}}">
				<img src="{{url('imgs/logo_black.png')}}" alt="" class="img-responsive center-block">
		</a>
	</div>
	<ul class="navbar">
		<li class="{{$title=='dashboard'?'active':''}}"><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i>Dashboard</a></li>
		<li class="{{$title =='booking'?'active':''}}"><a href="{{url('/admin/booking')}}"><i class="fas fa-atlas"></i>BOOKING REQUESTS</a></li>
		<li class="{{$title =='partners'?'active':''}}"><a href="{{url('/admin/partners')}}"><i class="fas fa-user-friends"></i>PARTNERS</a></li>
		<li class="{{$title =='newsletters'?'active':''}}"><a href="{{url('/admin/newsletters')}}"><i class="fas fa-envelope-open"></i>NEWSLETTERS</a></li>
		<li class="{{$title =='blog_articles'?'active':''}}"><a href="{{url('/admin/blogs')}}"><i class="fab fa-blogger-b"></i>BLOG Articles</a></li>
		<li class="{{$title =='career_articles'?'active':''}}"><a href="{{url('/admin/careers')}}"><i class="fas fa-user-circle"></i>CAREER ArticleS</a></li>
		<li class="{{$title =='pages'?'active':''}}"><a href="{{url('/admin/pages')}}"><i class="fas fa-paperclip"></i>Pages Content</a></li>
		<li class="{{$title =='messages'?'active':''}}">
			<a href="{{url('/admin/messages')}}">
				@if($title == 'messages')
				<img src="/imgs/E-Mail-red.png" style="width: 23px;margin-right: 10px;">
				@else
				<img src="/imgs/E-Mail.png" style="width: 23px;margin-right: 10px;">
				@endif
				Messeages
			</a>
		</li>
		<li class="{{$title =='settings'?'active':''}}"><a href="{{url('/admin/settings')}}"><i class="fas fa-cog"></i>SETTINGS</a></li>
		<li class="{{$title =='logout'?'active':''}}"><a href="{{url('/admin/logout')}}"><i class="fas fa-sign-out-alt"></i>LOG OUT</a></li>
	</ul>
	<div class="copyright">
		<p>© 2018. INSIDERSUITE. <br> WEB DEVELOPMENT: YURI IVANOV</p>
	</div>
</nav>
