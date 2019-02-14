@extends('layout')

@section('title','Insider Suite |  Career Detail')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/career_detail.css') }}">
@endsection
@section('content')
<div id="site-content">	
	<div class="header_img">
		<div id="content-slides">
			<div class="media-cover media-cover-dark">
        <section class="image" style="background: url('{{$career->banner_img}}');"></section>       
			</div>
			<div class="col-md-12">
				<div class="text-contrast">				    
          <h1 class="jobs-header-text">{{$career->department}}</h1>
				</div>
			</div>
		</div>		
  </div>
  <div class="container">
		<div class="row">
			<div class="col-md-12 space-top-8 space-4">
        <div class="description">
        {!!$career->description!!}
        </div>
        <div class="job_list space-6 space-top-8">
          <header>
            <h2>Vacancies</h2>
          </header>
          <div class="col-sm-12">
              <table class="table table-striped jobs">
                <thead>
                  <tr>
                    <th class="header headerSortDown">
                      <button class="sort-button" aria-label="Sort by post">
                        Post<i class="sort-direction fa fa-caret-down"></i>
                      </button>
                    </th>
                    <th class="header headerSortDown">
                      <button class="sort-button" aria-label="Sort by location">
                      Office<i class="sort-direction fa fa-caret-down"></i>
                      </button>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($details as $detail)
                  <tr>
                    <td>
                        <a class="text-normal info_link" data-id="{{$detail->id}}">{{$detail->position_name}}</a>
                    </td>
                    <!-- href="/careers/locations/san-francisco-united-states" -->
                    <td><a class="text-normal">{{$detail->office}} </a></td>                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section ('scripts')
    <script>
        var user = @json(auth()->user());      
    </script>
    <script type="text/javascript" src="{{ url('js/customize/career_detail.js') }}"></script>
@endsection