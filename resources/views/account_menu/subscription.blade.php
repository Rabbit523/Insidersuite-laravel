@extends('layout')

@section('title','Insider Suite |  Subscription')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('css/customize/subscription.css') }}">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')

<div id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
        <h3 class="page-main-title">Subscriptions</h3><br>
        <section class="card clearfix">
          <header>
            <h2 class="card__title">Newsletter frequency</h2>
          </header>
          <main>
            <h3 class="card__subtitle">How many newsletters would you like to receive each week from us?</h3>
            <div id="abonnement-rangeslider">
              <div class="abonnement-range">
                <div class="abonnement-range__heading">
                  <div class="abonnement-range__heading__label">Unsubscribe<br><span>from our Newsletters</span></div>
                  <div class="abonnement-range__heading__label">1 Newsletter<br><span>/ week</span></div>
                  <div class="abonnement-range__heading__label">2 Newsletters<br><span>/ week</span></div>
                  <div class="abonnement-range__heading__label abonnement-range__heading__label--show">All<br><span>Newsletters</span></div>
                </div>
                <div class="range-slider">
                  <div id="my_slider"></div>
                </div>
              </div>
            </div>
          </main>
          <card-footer>
            <input type="submit" id="save" value="Save" class="button button--secondary" title="Save">
          </card-footer>
        </section>
			</div>
		</div>
	</div>
</div>
@endsection

@section('foot')
	@parent
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="{{ url('js/customize/subscription.js') }}"></script>
@endsection
