@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/blog_detail.css') }}">
@endsection 

@section('content')
<div id="site-content">
  <div class="row content static-banner">
		<div class="head head--common">      
      @if ($type == "1")
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/02/41111_062617_AIRBB_1876_3RD_BEDROOM_RGB.jpg?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/02/41111_062617_AIRBB_1876_3RD_BEDROOM_RGB.jpg?resize=800%2C550&quot;);"></div>
      @elseif ($type == "2")
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/01/SocialNetworkBanners_Blog_1600x900-02-800x550.png?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/01/SocialNetworkBanners_Blog_1600x900-02-800x550.png?resize=800%2C550&quot;);"></div>
      @elseif ($type == "3")      
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/06/GB_SE-187538_02_1.png?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/06/GB_SE-187538_02_1.png?resize=800%2C550&quot;);"></div>
      @elseif ($type == "4")      
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/06/HKG_SE-128416_01_2355_R1.png?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/06/HKG_SE-128416_01_2355_R1.png?resize=800%2C550&quot;);"></div>
      @elseif ($type == "5")      
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/07/kayak-photo.jpg?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/07/kayak-photo.jpg?resize=800%2C550&quot;);"></div>
      @elseif ($type == "6")      
      <div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/uploads/2018/07/Barcelona-fireside-chat-4_19_18.jpeg.jpg?resize=800%2C550" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/uploads/2018/07/Barcelona-fireside-chat-4_19_18.jpeg.jpg?resize=800%2C550&quot;);"></div>
      @endif
      <span class="cb-link-overlay"></span>
      <div class="cb-meta-data">
        <h1 class="cb-post-title">{{$blog->title}}</h1>
        @if($is_like)
        <span class="cb-like-count">
            <i class="fas fa-heart liked"></i>
            <span class="blog_count">{{$blog->like_count}}</span>
        </span>
        @else
        <span class="cb-like-count is_enable">
            <i class="far fa-heart"></i>
            <span class="blog_count">{{$blog->like_count}}</span>
        </span>
        @endif
      </div>
      <a href="javascript:void(0);" role="button" class="cb-vertical-down"><i class="fas fa-chevron-down"></i></a>
      </div>
  </div>
  <div class="row content page-container">		
		<div class="main">
      <article class="article_description">
        <div class="pre_description">
          <p>Airbnb hosts have a little more to think about when considering home improvement projects. Investing time and money into your space may increase your property value, and also better serve your guests—hopefully boosting your ratings too.</p>
          <p>So how do you plan home improvements with hosting in mind? We’ve gathered a few tips and stories from hosts about which projects they’re planning and why. </p>
        </div>
        <div class="personalized">
          <h3>Get personalized</h3>
          <p>Home improvement doesn’t always have to involve knocking down walls or tearing up flooring. Consider starting small with painting projects, reupholstering, or simple decor changes. Guests come to Airbnb looking for something unique and home-like, so don’t be afraid to add some personal flair to your space, such as displaying objects from your travels, stocking books you recommend, or painting an accent wall in your absolute favorite color.</p>
          <p>Adding personality to a space can be tricky, (What is my personality? Am I exciting enough?) so don’t overthink it. Go with what you like and incorporate elements from across your life, such as your work, hobbies, family history, or anything at all.  </p>
          <p>There is always painting to do (of furniture as well as walls) but I am also planning on going wallpaper crazy. I LOVE statement wallpapers and because of the set designing I do as part of my job, I have a stack of lovely ones sitting around.</p>
          <p><span class="poster_name">-Huma. </span><span class="poster_location">England</span>
        </div>
        <div class="last_description">
          <p>Aside from practical considerations of cost and time, any projects you take on should improve the way you feel about your own space. If it’s making your dreams come true, it’s probably worth it. If you do embark on a home improvement project, don’t forget to take pictures and update your listing!</p>
          <div class="cb-byline"><span class="cb-author">Written by <a href="https://blog.atairbnb.com/author/chip-conley/">Airbnb</a></span><span class="cb-separator"><i class="fa fa-times"></i></span><span class="cb-date"><time class="updated" datetime="2018-02-12">February 12, 2018</time></span></div>
        </div>
        <div id="cb-related-posts" class="clearfix">
				  <h3 class="cb-tags-title cb-body-font cb-footer-title">Related Articles</h3>
				</div>
      </article>
    </div>
  </div>
</div>
@endsection

@section ('scripts')
<script>
  $(".cb-vertical-down").click (function () {
    $('html, body').animate({
      scrollTop: 800
    }, 800);    
  });
</script>
<script>var id={{$blog->id}};</script>
<script type="text/javascript" src="{{ url('js/customize/blog_detail.js') }}"></script>
@endsection 