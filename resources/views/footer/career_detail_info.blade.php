@extends('layout')

@section('title','Insider Suite |  Career')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career_detail.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career_detail_info.css') }}">
@endsection
@section('content')
<div id="site-content">
	<div id="content-slides">
		<div class="media-cover media-cover-dark">		    
			<section class="image" style="background: url('{{$detail_info->banner_img}}');"></section>			
		</div>
		<div class="col-md-12">
			<div class="text-contrast">
				<div class="description detail_info last">
					<h2>{!!$detail_info->position_name!!}</h2>
					<p>{{$detail_info->office}}</p>
				</div>   
			</div>
		</div>
	</div>
	<div class="page-container-responsive lower-content">
        <section class="space-4">
            <div class="row position space-6">
                <div class="col-12">
                    {!!$detail_info->content!!}
                    <!--<a href="/careers/apply2/1206346?gh_src=" id="applyButton" class="btn btn-large btn-primary" style="position: relative; margin-top: -21px;">Apply Now</a>-->
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
