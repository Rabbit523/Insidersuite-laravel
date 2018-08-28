@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/blog.css') }}">
@endsection 

@section('content')
<div id="site-content">
  <div class="row content static-banner">
		<div class="head head--common">
			<div class="headBg lazyloaded" data-bg="https://blog.atairbnb.com/wp-content/themes/blogs-atairbnb/images/BlogHeader.jpg" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/themes/blogs-atairbnb/images/BlogHeader.jpg&quot;);"></div>
		</div>
	</div>
  <div id="main" class="cb-home clearfix" role="main">
    <article id="post1" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="home-improvements"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/02/41111_062617_AIRBB_1876_3RD_BEDROOM_RGB.jpg?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="home-improvements">Guest-friendly home improvements for your space</a></h2>
          <a class="home-improvements"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay home-improvements"></a>
      </div>
    </article>
    <article id="post2" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="community"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/01/SocialNetworkBanners_Blog_1600x900-02-800x550.png?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="community">Building a 21st Century Company</a></h2>
          <a class="community"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay community"></a>
      </div>
    </article>
    <article id="post3" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="experience"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/06/GB_SE-187538_02_1.png?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="experience">8 experience host tips and tricks you didn’t know existed</a></h2>
          <a class="experience"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay experience"></a>
      </div>
    </article>
    <article id="post4" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="rankings"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/06/HKG_SE-128416_01_2355_R1.png?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="rankings">Update: An inside look at experience search rankings</a></h2>
          <a class="rankings"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay rankings"></a>
      </div>
    </article>
    <article id="post5" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="guest"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/07/kayak-photo.jpg?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="guest">Coming Soon: Guest photos on your experience pages</a></h2>
          <a class="guest"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay guest"></a>
      </div>
    </article>
    <article id="post6" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="inside_experience"><img width="800" height="550" src="https://blog.atairbnb.com/wp-content/uploads/2018/07/Barcelona-fireside-chat-4_19_18.jpeg.jpg?resize=800%2C550" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="inside_experience">Inside Insidersuite Experiences: Your top six questions answered</a></h2>
          <a class="inside_experience"><span class="cb-like-count"><i class="far fa-heart"></i>0</span></a>
        </div>
        <a class="cb-link-overlay inside_experience"></a>
      </div>
    </article>
    <div class="blog-footer">
        <a class="read_more">Load more</a>
        <a href="@if(Auth::User()) {{ url('offers') }} @else href="#" data-toggle="modal" data-target="#authentication" @endif" class="btn btn-subscribe">Subscribe</a>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  @parent
    <script type="text/javascript" src="{{ url('js/customize/blog.js') }}"></script>
    <script>var user = @json(auth()->user());</script>
@endsection
