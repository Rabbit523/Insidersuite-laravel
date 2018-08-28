@extends('layout')

@section('title','Insider Suite |  The club that offers private sales on luxury hotels')

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
        @if ($type == "finance")
        <section class="image_security"></section>
        @elseif ($type == "engineering")
        <section class="image_engineering"></section>
         @elseif ($type == "security")
        <section class="image_security"></section>
         @elseif ($type == "marketing")
        <section class="image_security"></section>
        @endif
			</div>
			<div class="col-md-12">
				<div class="text-contrast">
				    @if ($type == "finance")
                    <h1 class="jobs-header-text"> Finance and Accounting</h1>
                    @elseif ($type == "engineering")
                    <h1 class="jobs-header-text"> Engineering</h1>
                     @elseif ($type == "security")
                    <h1 class="jobs-header-text"> Trust and security</h1>
                     @elseif ($type == "marketing")
                    <h1 class="jobs-header-text"> Marketing and communication</h1>
                    @endif
				</div>
			</div>
		</div>		
  </div>
  <div class="container">
		<div class="row">
			<div class="col-md-12 space-top-8 space-4">
        <div class="description">
          <p>{{$detail_info->description}}</p>
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
                  <tr>
                    <td>
                        <a id="info_link" class="text-normal">{{$detail_info->position_name}}</a>
                    </td>
                    <td><div class="flagcon"><img src="../imgs/flags/USA.png"></img></div><a href="/careers/locations/san-francisco-united-states" class="text-normal">{{$detail_info->office}} </a></td>
                  </tr>
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
        var id = {{$detail_info->id}};
    </script>
    <script type="text/javascript" src="{{ url('js/customize/career_detail.js') }}"></script>
@endsection