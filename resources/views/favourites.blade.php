@extends('layout')

@section('title','Insider Suite |  Favourites')
@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/favourites_list.css') }}">
@endsection
@section('content')
<div id="site-content">
	<div class="container header-content">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<div class="col-md-6 col-xs-6 col-sm-12">
					<h2>Pimp your trip</h2>
				</div>
				<div class="col-md-6 col-xs-6 col-sm-12" style="margin-top: 20px;">
					<button type="button" class="_ky1ga6g" aria-busy="false"><span class="_cgr7tc7">Create a trip</span></button>
				</div>
			</div>
		</div>
	</div>
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
	@else
	<div class="container container2">
		<div class="no-favourites">
			<i class="far fa-heart"></i>
			<h4 class="heading-font-style">You do not have any favourites yet </h4>
			<div class="separator"></div>
			<p class="para-font-style">Create your personalised wish list by adding offers to 'My Favourites'. Click on the heart to add a favourite. </p>		
		</div>
	</div>
	@endif	
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