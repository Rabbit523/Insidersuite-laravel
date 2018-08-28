@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')
@section('head')
@parent
<style type="text/css">
#site-content{
	background-color: #eeeeee;
	padding-top: 100px;
}
.favourites-heading{
	font-style: italic;
	font-size: 20pt;
	text-align: center;
}
.card{
	background-color: white;
	margin:auto;
}

.discount-section{
	border-top: 1px solid #eee;
	height: 40px;
}
.card-body{
	/*height: 70px;*/
	/*padding: 0px 10px;*/
}
.details-section{
	text-align: center;
	padding: 0px 10px;
}
a:hover{
	color: black;
	text-decoration: none;
}
.social{
	width: 50px;
}
.time-left{
	width: 70%;
	padding: 8px 15px;
	float: left;
}
.social{
	width: 30%;
	float: right;
}
.facebook-icon{
	text-align: center;
	border-left: 1px solid #eee;
	width: 50%;
	float: right;
	height: 100%;
	padding: 6px;
}
.facebook-icon > i{
	font-size: 25px;
}
.facebook-icon:hover{
	color: #3b5998;
}
.twitter-icon{
	text-align: center;
	border-left: 1px solid #eee;
	width: 50%;
	float: left;
	height: 100%;
	padding: 6px;
}
.twitter-icon > i{
	font-size: 25px;
}
.twitter-icon:hover{
	color: #00acee;
}
.remove-favorite{
	position: absolute;
	top: 9px;
	right: 27px;
	color: black;
	font-size: 20px;
}
</style>
@endsection
@section('content')
<div id="site-content">
	@if(count($favourites) > 0)
		<div class="container favourites-grid">
			<h2 class="favourites-heading heading-font-style">Favourites</h2>
			<div class="separator"></div>
			<div class="row">
				@foreach($favourites as $key => $value)

					<div class="col-xs-12 col-md-4 col-sm-6">
						<div class="card">
							@php
								$now = time(); // or your date as well
								$your_date = strtotime($value->hotel->time_remaining);
								$datediff = $now - $your_date;
								$datediff = round($datediff / (60 * 60 * 24));
								if ($datediff < 1) {
									$datediff = round($datediff / (60 * 60));
								}
							@endphp
							
							<a href="{{ url('hotel/details/'.$value->hotel->hotel_id) }}">
								<img class="card-img-top img-responsive" src="{{ url($value->hotel->banner_image) }}">
							</a>
							<a href="#" class="remove_favorite" data-id="{{ $value->hotel->hotel_id }}"><i class="fas fa-times remove-favorite"></i></a>
							<div class="card-body">
								<div class="details-section">
									<a href="{{ url('hotel/details/'.$value->hotel->hotel_id) }}">
										<div class="card-title">
											<h4 style="font-family:courier;"><i><strong>{{ $value->hotel->country }}/{{ $value->hotel->city }}</strong></i></h4>
										</div>
										<div class="card-text">
											<p>{{ $value->hotel->name }}</p>
										</div>
									</a>
								</div>
								<div class="discount-section">
									<div class="time-left">
										<i class="far fa-clock" aria-hidden="true"></i> {{ $datediff }}  Days Remaining
									</div>
									<div class="social">
										<div class="twitter-icon">
											<i class="fab fa-twitter"></i>
										</div>
										<div class="facebook-icon">													
											<i class="fab fa-facebook-f"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				@endforeach
			</div>
		</div>
	@endif
	<div class="container container2" @if(count($favourites) > 0) style="display: none" @endif>
		<div class="no-favourites">
			<i class="far fa-heart"></i>
			<h4 class="heading-font-style">You do not have any favourites yet </h4>
			<div class="separator"></div>
			<p class="para-font-style">Create your personalised wish list by adding offers to 'My Favourites'. Click on the heart to add a favourite. </p>
			<a href="{{ url('hotels/list') }}"><button class="btn btn-default btn-lg">See Flash Sales</button></a>
		</div>
	</div>
</div>
@endsection
@section('foot')
@parent
<script type="text/javascript">
	$('.remove_favorite').click(function(e){
		var id = $(this).data('id');
		var data = $(this);
		e.preventDefault();
		$.ajax({
			url: '{{ url('favourites/remove_favourite') }}/' + id,
			type: 'get',
			success:function(e){
				// data.closest('.col-md-4').fadeOut();
				data.closest('.col-md-4').remove();
				if ($('.favourites-grid').children('.row').children().length == 0) {
					$('.favourites-grid').fadeOut();
					$('.container2').fadeIn();
				}
			}
		});
	});
</script>
@endsection