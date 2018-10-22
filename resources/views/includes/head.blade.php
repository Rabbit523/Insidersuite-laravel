<!-- Latest compiled and minified CSS -->
<meta property="fb:app_id" content="625441737790452" />
<meta property="og:url" content="https://www.insidersuite.com" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Get $50 Get off your first trip!" />
<meta property="og:description" content="Join insider suite to access private sales on a selection of charming 4 and 5-star boutique hotels around the world." />
<meta property="og:image" content="{{ url('http://insidersuite.com/images/Luxury-Travel.png') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Upgrade your experience & plan every second of your trip to get the most out of pleasures and indulgences of holiday at the best rate." />

<meta name="keywords" content="INSIDER SUITE, Insider suite, Insider Suite, insider suite, quality holidays, luxury trips, private sale online, flash sales, short breaks, weekend breaks, cruises, skiing, hotels, insider, suite, luxury, hotels, sales, exclusive, holiday, experience, trip, gateway, boutique, suite, dream, travel , travel, club, hotels, unique experience, destination, discounts, best spot, " />
{{-- <link rel="stylesheet" type="text/css" href="{{ url('css/bulma.min.css') }}"> --}}
<link rel="shortcut icon" href="{{ url('imgs/favicon.ico') }}" />
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
<link rel="stylesheet" href="{{ url('css/modal-loading-animate.css') }}">
<link rel="stylesheet" href="{{ url('css/modal-loading.css') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/fontawesome.css" integrity="sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
{{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> --}}
<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>var user = @json(auth()->user());</script>
<style type="text/css">
	.loader {
	  border: 2px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 2px solid black;
	  width: 120px;
	  height: 120px;
	  -webkit-animation: spin 2s linear infinite; /* Safari */
	  animation: spin 2s linear infinite;
	}

	/* Safari */
	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg); }
	  100% { transform: rotate(360deg); }
	}
</style>
