@extends('layout')

@section('title','Insider Suite |  Travel Companion')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('css/customize/travel-companion.css') }}">
@endsection
@section('content')

<div id="site-content">
	
	<div class="container">
		<div class="row">	
			<div class="col-md-12 col-sm-12">
        <h3 class="page-main-title">Travel companion</h3><br>
        <div class="passenger-form">
          <form id="profile_details_form" method="post" action="{{ url('travel_companion') }}">
            {{ csrf_field() }}
            <div class="profile-section">
              <div class="row">
                <div class="col-md-12">
                  <h4>Add a traveller</h4>
                  <br>
                  <label>Title</label>
                  <br>
                  <radiogroup>
                    <label class="radio-inline">
                      <input type="radio" name="title" required="" value="Mr" @if(Auth::User()->title == 'Mr') {{ 'checked' }} @endif>Mr
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Mr" @if(Auth::User()->title == 'Mrs') {{ 'checked' }} @endif>Mrs
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Ms" @if(Auth::User()->title == 'Ms') {{ 'checked' }} @endif>Ms
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Dr" @if(Auth::User()->title == 'Dr') {{ 'checked' }} @endif>Dr
                    </label>
                  </radiogroup>
                </div>
              </div>
              <div class="row margin">
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label for="last_name">Surname</label>
                  <input type="text" name="last_name" class="form-control" value="{{ Auth::User()->last_name }}" placeholder="Enter" required="">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" class="form-control" value="{{ Auth::User()->first_name }}" placeholder="Enter" required="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label>Date of birth</label>
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="number" name="day" class="form-control" placeholder="Day" max="31" min="1" required="" value="{{ Auth::User()->day }}">
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-5">
                      <select name="month" class="form-control" required>
                        <option disabled selected value>Month</option>
                        <option value="January" @if(Auth::User()->month == "January") {{ 'selected' }} @endif>January</option>
                        <option value="February" @if(Auth::User()->month == "February") {{ 'selected' }} @endif>February</option>
                        <option value="March" @if(Auth::User()->month == "March") {{ 'selected' }} @endif>March</option>
                        <option value="April" @if(Auth::User()->month == "April") {{ 'selected' }} @endif>April</option>
                        <option value="May" @if(Auth::User()->month == "May") {{ 'selected' }} @endif>May</option>
                        <option value="June" @if(Auth::User()->month == "June") {{ 'selected' }} @endif>June</option>
                        <option value="July" @if(Auth::User()->month == "July") {{ 'selected' }} @endif>July</option>
                        <option value="August" @if(Auth::User()->month == "August") {{ 'selected' }} @endif>August</option>
                        <option value="September" @if(Auth::User()->month == "September") {{ 'selected' }} @endif>September</option>
                        <option value="October" @if(Auth::User()->month == "October") {{ 'selected' }} @endif>October</option>
                        <option value="November" @if(Auth::User()->month == "November") {{ 'selected' }} @endif>November</option>
                        <option value="December" @if(Auth::User()->month == "December") {{ 'selected' }} @endif>December</option>
                      </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="number" name="year" class="form-control" placeholder="Year" max="2018" min="1940" required="" value="{{ Auth::User()->year }}">
                    </div>
                  </div>
                </div>               
              </div>
              <br>                     
              <div class="row">
                <div class="col-md-10">
                  <div class="responsable col-100"><p><span>You are responsible for the accuracy of the information you provide to us. You must also ensure that you comply with the entry requirements of the country you are travelling to.</span><span></span></p></div>
                </div>
              </div>              
              <div class="row">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-default pull-left" id="save" value="Save">
                </div>
              </div>
            </div>
          </form>
        </div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('foot')
	@parent
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
@endsection