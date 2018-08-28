<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@section('head')
	<link rel="stylesheet" href="https://static.comingsoonpage.com/cspio-assets/1.0.0/style.css">
	@include('includes.head')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
	<script src="{{ url('clock_animation/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	@show
</head>

<body style="overflow-x: hidden;">
	<div class="general-wrapper">
	@include('includes.sidebar')
	@yield('content')
	</div>

<script type="text/javascript" src="{{ url('js/moment.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="{{ url('js/modal-loading.js') }}"></script>
@yield('scripts')
</body>
</html>