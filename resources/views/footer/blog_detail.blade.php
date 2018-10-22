@extends('layout')

@section('title','Insider Suite |  Admin Blog Detail')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/offer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/blog_detail.css') }}">
@endsection

@section('content')
<div id="site-content">
  <div class="row content static-banner">
		<div class="head head--common">
      <div class="headBg lazyloaded" style="background-image: url('{{$blog->banner_img}}');"></div>
      <span class="cb-link-overlay"></span>
      <div class="cb-meta-data">
        <h1 class="cb-post-title">{{$blog->title}}</h1>
        <span class="cb-like-count disable">
            <i class="fas fa-heart liked"></i>
            <span class="blog_count">{{$blog->like_count}}</span>
        </span>
        <span class="cb-like-count enable">
            <i class="far fa-heart"></i>
            <span class="blog_count">{{$blog->like_count}}</span>
        </span>
      </div>
      <a href="javascript:void(0);" role="button" class="cb-vertical-down"><i class="fas fa-chevron-down"></i></a>
      </div>
  </div>
  <div class="row content page-container">
		<div class="main">
      <article class="article_description">
        {!!$blog->content!!}
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
<script>var id={{$blog->id}}; var type={{$type}};</script>
<script type="text/javascript" src="{{ url('js/customize/blog_detail.js') }}"></script>
@endsection
