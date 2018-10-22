@extends('layout')

@section('title','Insider Suite |  Blogs')
@section('head')
@parent
<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);</style>
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/blog.css') }}">
@endsection

@section('content')
<div id="site-content">
  <div class="row content static-banner">
		<div class="head head--common">
			<div class="headBg lazyloaded" style="background-image: url(&quot;https://blog.atairbnb.com/wp-content/themes/blogs-atairbnb/images/BlogHeader.jpg&quot;);"></div>
		</div>
	</div>
  <div id="main" class="cb-home clearfix" role="main">
    @foreach($blogs as $blog)
    <article style="background-image:url({{$blog->banner_img}})" class="cb-row-article clearfix cb-blog-style cb-row-2 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-english category-hospitality tag-home tag-improvements" role="article">
      <div class="cb-article-area">
        <div class="cb-mask">
          <a class="rankings">
             <img src="{{$blog->banner_img}}" class="cb-square clearfix wp-post-image" alt=""></a>
        </div>
        <div class="cb-meta-data">
          <h2 class="cb-post-title"><a class="blog_detail" data-id="{{$blog->id}}">{{$blog->title}}</a></h2>
          <a class="blog_detail" data-id="{{$blog->id}}"><span class="cb-like-count"><i class="far fa-heart"></i>{{$blog->like_count}}</span></a>
        </div>
        <a class="cb-link-overlay blog_detail" data-id="{{$blog->id}}"></a>
      </div>
    </article>
    @endforeach
    <div class="blog-footer">
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
