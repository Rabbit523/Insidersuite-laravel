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
                      <input type="radio" name="title" required="" value="Mr" @if($count != 0) @if($traveler->title == 'Mr') {{ 'checked' }} @endif @endif>Mr
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Mr" @if($count != 0) @if($traveler->title == 'Mrs') {{ 'checked' }} @endif @endif>Mrs
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Ms" @if($count != 0) @if($traveler->title == 'Ms') {{ 'checked' }} @endif @endif>Ms
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="title" value="Dr" @if($count != 0) @if($traveler->title == 'Dr') {{ 'checked' }} @endif @endif>Dr
                    </label>
                  </radiogroup>
                </div>
              </div>
              <div class="row margin">
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label for="last_name">Surname</label>
                  <input type="text" name="last_name" class="form-control" value="@if($count != 0){{ $traveler->surname }}@endif" placeholder="Enter" required="">
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" class="form-control" value="@if($count != 0){{ $traveler->firstname }}@endif" placeholder="Enter" required="">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                  <label>Date of birth</label>
                  <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="number" name="day" class="form-control" @if($count==0) placeholder="Day" @endif min="1" max="31" required="" value="@if($count!=0){{$traveler->day}}@endif">
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-5">
                      <select name="month" class="form-control" required>
                        <option disabled selected value>Month</option>
                        <option value="January" @if($count != 0) @if($traveler->month == "January")selected='selected'@endif @endif>January</option>
                        <option value="February" @if($count != 0) @if($traveler->month == "February")selected='selected'@endif @endif>February</option>
                        <option value="March" @if($count != 0) @if($traveler->month == "March")selected='selected'@endif @endif>March</option>
                        <option value="April" @if($count != 0) @if($traveler->month == "April")selected='selected'@endif @endif>April</option>
                        <option value="May" @if($count != 0) @if($traveler->month == "May")selected='selected'@endif @endif>May</option>
                        <option value="June" @if($count != 0) @if($traveler->month == "June")selected='selected'@endif @endif>June</option>
                        <option value="July" @if($count != 0) @if($traveler->month == "July")selected='selected'@endif @endif>July</option>
                        <option value="August" @if($count != 0) @if($traveler->month == "August")selected='selected'@endif @endif>August</option>
                        <option value="September" @if($count != 0) @if($traveler->month == "September")selected='selected'@endif @endif>September</option>
                        <option value="October" @if($count != 0) @if($traveler->month == "October")selected='selected'@endif @endif>October</option>
                        <option value="November" @if($count != 0) @if($traveler->month == "November")selected='selected'@endif @endif>November</option>
                        <option value="December" @if($count != 0) @if($traveler->month == "December")selected='selected'@endif @endif>December</option>
                      </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <input type="number" name="year" class="form-control" @if($count == 0) placeholder="Year" @else placeholder="" @endif max="2018" min="1940" required="" value="@if($count != 0){{$traveler->year}}@endif">
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
