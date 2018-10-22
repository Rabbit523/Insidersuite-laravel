@extends('layout')

@section('title','Insider Suite |  Orders')
@section('head')
@parent
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
	h5{
		color: black;
	}
</style>
@endsection
@section('content')
<div id="site-content">
	<div class="row">
		<div class="col-md-12">
			<img class="our-story-banner" src="{{ url('imgs/InsiderSuite_Our_Story.jpg') }}">
		</div>
	</div>
	<br>
	<div class="col-xs-12"></div>

	<div class="container">

		<div class="row">

			<div class="col-md-3">

			</div>

			<div style="text-align: center;line-height: 20px;" class="col-md-6">


				<p  class="a"><font size="6">This is where you'll find your future</font></p>
				<p  class="a"><font size="6">InsiderSuite bookings</font></p>


			</div>

			<div class="col-md-3">

			</div>

		</div>
	</div>

	<div class="col-xs-12" style="height:50px;"></div>


	<div style="margin-top: 15px" class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" style="text-align: center">
					<a href="#" class="btn btn-danger btn-lg">View Latest Offers</a>
				</div>
				<div class="col-md-2">
				</div>

			</div>
			<div class="col-md-4">
			</div>

			<div class="col-xs-12" style="height:100px;"></div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div style="text-align: center" class="col-md-4">
				<i class="material-icons"><font size="20">airplanemode_active</font></i><br>
				<h3>Inspirational Offers</h3>
				<h5>Hand picked luxury destinations</h5>
				<h5>and hotels</h5>
			</div>
			<div style="text-align: center" class="col-md-4">
				<i class="material-icons"><font size="20">attach_money</font></i><br>
				<h3>Great Discounts</h3>
				<h5>Exclusive prices and exceptional</h5>
				<h5> discounts of up to 70%</h5>
			</div>
			<div style="text-align: center" class="col-md-4">
				<i class="material-icons"><font size="20">help</font></i>
				<h3> Happy to Help</h3>
				<h5>A reliable and responsive customer service</h5>
			</div>
		</div>
	</div>
	<br>
</div>
@endsection
