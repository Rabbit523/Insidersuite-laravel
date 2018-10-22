@extends('layout')

@section('title','Insider Suite |  Partner')
@section('head')
@parent
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
body, html {
    height: 100% !important;
    margin: 0 !important;
}

.bg {
   
    background-image: url({{ url('imgs/background1.jpg') }});

   
    height: 100%; 

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

p.a {
    font-style: italic;
}
</style>
@endsection
@section('content')
<div id="site-content">
	<div class="bg" id="partner-banner">

		<div class="container" style="padding-top: 100px;">
			<div class="row">
				<div style="margin-top: 50px; margin-left: 20px"  class="col-md-8  col-sm-10">
					<p class="a"><font size="7" color=#fff>Lets Become Buisness Partners</font></p>
				</div>

			</div>
			<div class="row">
				<div style="margin-top: 10px; margin-left: 20px"  class="col-md-6  col-sm-10">
					<p class="a"><font size="5" color=#fff>Tour operator, you create off the beaten track travel experiences and want to share them with our Copines de Voyage members ?</font></p>
				</div>
			</div>
			<div class="row">
				<div style="margin-top: 10px; margin-left: 20px"  class="col-md-6  col-sm-10">
					<p class="a"><font size="6" color=#fff>Lets Become Partners</font></p>
				</div>
			</div>
		</div>

	</div>  

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-3">
			</div>

			<div style="margin-top: 20px" class="col-md-6">
				<p style="text-align: center"><font size="6">You are a tour operator/trip planner?</font></p>
			</div>

			<div class="col-md-3">
			</div>

		</div>

		<div class="row">

			<div class="col-md-3">
			</div>

			<div class="col-md-6">
				<p style="text-align: center"><font size="3" color="grey">Apply to have your tours listed on InsiderSuite</font></p>
			</div>

			<div class="col-md-3">
			</div>

		</div>

		<div class="row">

			<div class="col-md-3">
			</div>

			<div class="col-md-6">
				<p style="text-align: center"><font size="3" color="grey">We are looking for off the beaten track travel experiences, such as yours.</font></p>
			</div>

			<div class="col-md-3">
			</div>

		</div>

		<div class="row">

			<div class="col-md-3">
			</div>

			<div class="col-md-6">
				<p style="text-align: center"><font size="3" color="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum nisi sit amet lorem sagittis efficitur. Curabitur aliquet, sem vitae facilisis lobortis, enim erat hendrerit massa, eu convallis libero purus quis augue.</font></p>
			</div>

			<div class="col-md-3">
			</div>

		</div>


	</div>

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-3">
			</div>

			<div style="margin-left: 60px" class="col-md-6">
				<p style="text-align: left"><font size="5">Why partnering with us ?</font></p>
				<p style="text-align: left;><font size="4"><span class="glyphicon glyphicon-ok-circle"></span> An opportunity to be sold to thousands of members</font></p>
				<p style="text-align: left;"><font size="4"><span class="glyphicon glyphicon-ok-circle" ></span> A unique exposure among our community of passionate travel</font></p>
				<p style="text-align: left;"><font size="4"><span class="glyphicon glyphicon-ok-circle" ></span> An easy and smooth trip preparation as we do customer relation</font></p>
			</div>


			<div class="col-md-3">
			</div>

		</div>
	</div>

	<div style="margin-top: 15px;padding-bottom: 100px;" class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" style="text-align: center;">
					<a href="#" type="button" class="btn btn-danger btn-lg">REGISTER</a>
				</div>
				<div class="col-md-2">
				</div>

			</div>
			<div class="col-md-4">
			</div>

		</div>
	</div>

</div>
@endsection
