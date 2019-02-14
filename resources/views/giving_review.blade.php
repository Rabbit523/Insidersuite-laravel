@extends('layout')
@section('head')
@parent
<style type="text/css">@import url(https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/customize/review_page.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/jquery-gallery.css') }}">
@endsection
@section('title','Insider Suite |  Review Experience')

@section('content')
<div id="site-content">
	<div class="_5m2ieb" style="background-image:url(../images/pool-ranieri.jpg)">
        <div class="_314ao4">
            <div style="margin-bottom:24px">
                <div>
                    <section>
                        <div class="_1hargc54">
                            <h1 tabindex="-1" class="_tpbrp">{{$review->location}} - {{$review->experience_name}}</h1>
                        </div>
                        <div class="_byeukid">
                            <?php $first_day_stamp = strtotime($review->first_day); $last_day_stamp = strtotime($review->last_day); 
                                $first_dmy = date("j F Y", $first_day_stamp); $last_dmy = date("j F Y", $last_day_stamp); 
                            ?>
                            <h3 class="_tph2">{{$first_dmy}} - {{$last_dmy}}</h3>
                            <h3 class="_tph2">{{$review->act_count}} activities - {{$review->accom_count}} accommodations</h3>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
	<div class="container">
		<div class="section_sub">
		    <div class="detail_sub">
		        <label>1. Purpose of your trip?</label>
		        <div class="radio_group">
    		        <radiogroup>
    		            <label>
    						<input type="radio" name="purpose" required="" value="business" checked=""><span>Business</span>
    					</label>
    					<label>
    						<input type="radio" name="purpose" required="" value="leisure"><span>Leisure</span>
    					</label>
    					<label>
    						<input type="radio" name="purpose" required="" value="other"><span>Other</span>
    					</label>
    		        </radiogroup>
		        </div>
		    </div>
		    <div class="detail_sub">
		        <label>2. Who did you travel with?</label>
		        <div class="radio_group">
    		        <radiogroup>
    		            <label>
    						<input type="radio" name="friends" required="" value="alone" checked=""><span>Alone</span>
    					</label>
    					<label>
    						<input type="radio" name="friends" required="" value="friends"><span>Friends</span>
    					</label>
    					<label>
    						<input type="radio" name="friends" required="" value="family"><span>Family</span>
    					</label>
    					<label>
    						<input type="radio" name="friends" required="" value="colleague"><span>Colleague(s)</span>
    					</label>
    					<label>
    						<input type="radio" name="friends" required="" value="partner"><span>Partner</span>
    					</label>
    		        </radiogroup>
		        </div>
		    </div>
		    <div class="detail_sub">
		        <label>3. Rates your accommodation</label>
		        @if ($accom_count != 0)
		        <div class="accom_parts">
		        @for ($i = 0; $i < $accom_count; $i ++)
		        <div class="accom_part1">
		            <div class="accom_img_part">
    		            <h3>Accommodation {{$i + 1}}</h3>
    		            <ul class="gallery-slideshow">
    						@foreach($accom_imgs as $accom_imgs)
    						@foreach($accom_imgs as $img)
    						@if($img->accom_id == $accoms[$i]['id'])
                            <li><img src="{{$img->path}}" style="width: 262.5px; height: 200px"/></li>
    						@endif
    						@endforeach
    						@endforeach
    					</ul>
					</div>
					<div class="accom_description_part">
					    <p><b>{{$accoms[$i]->name}}</b></p>
					    <p>{{$accoms[$i]->full_address}} - {{$accoms[$i]->room_nb}} rooms</p>
						<p>{{$accoms[$i]->category}}</p>
					</div>
		        </div>
		        <div class="accom_part2">
		            <h3>Could you please provide your review?</h3>
		            <textarea class="accom_review_text"></textarea>
		        </div>
		        @endfor
		        </div>
		        <div class="accom_action">
		            <p><svg aria-hidden="true" data-prefix="fal" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16 fa-lg"><path fill="currentColor" d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z" class=""></path></svg>Your ratings will impact the review score</p>
		            <div class="accom_action_row">
		                <div class="accom_action_category">
		                    <p>Location</p>
		                    <div class="category_group">
    		                    <a class="click_location_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		                <div class="accom_action_category">
		                    <p>Staff</p>
		                    <div class="category_group">
    		                    <a class="click_staff_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		            </div>
		            <div class="accom_action_row">
		                <div class="accom_action_category">
		                    <p>Facilities</p>
		                    <div class="category_group">
    		                    <a class="click_facilities_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		                <div class="accom_action_category">
		                    <p>Cleanliness</p>
		                    <div class="category_group">
    		                    <a class="click_cleanliness_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_cleanliness_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_cleanliness_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_cleanliness_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		            </div>
		            <div class="accom_action_row">
		                <div class="accom_action_category">
		                    <p>Comfort</p>
		                    <div class="category_group">
    		                    <a class="click_comfort_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_comfort_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_comfort_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_comfort_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		                <div class="accom_action_category">
		                    <p>Value for money</p>
		                    <div class="category_group">
    		                    <a class="click_cost_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        @endif
		    </div>
		    <div class="detail_sub">
		        <label>4. Rates your activities</label>
		        @if ($act_count != 0)
		        <div class="act_parts">
		        @for ($i = 0; $i < $act_count; $i ++)
		        <div class="act_part1">
		            <div class="act_img_part">
    		            <h3>Activity {{$i + 1}}</h3>
    		            <ul class="gallery-slideshow">
    						@foreach($act_imgs as $act_imgs)
    						@foreach($act_imgs as $img)
    						@if($img->act_id == $acts[$i]['id'])
                            <li><img src="{{$img->path}}" style="width: 262.5px; height: 200px"/></li>
    						@endif
    						@endforeach
    						@endforeach
    					</ul>
					</div>
					<div class="act_description_part">
					    <p><b>{{$acts[$i]->name}}</b></p>
						<p>{{$acts[$i]->category}}</p>
					</div>
		        </div>
		        <div class="act_part2">
		            <h3>Could you please provide your review?</h3>
		            <textarea class="act_review_text"></textarea>
		        </div>
		        @endfor
		        </div>
		        <div class="act_action">
		            <p><svg aria-hidden="true" data-prefix="fal" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16 fa-lg"><path fill="currentColor" d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z" class=""></path></svg>Your ratings will impact the review score</p>
		            <div class="act_action_row">
		                <div class="act_action_category">
		                    <p>Location</p>
		                    <div class="category_group">
    		                    <a class="click_location_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_location_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		                <div class="act_action_category">
		                    <p>Staff</p>
		                    <div class="category_group">
    		                    <a class="click_staff_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_staff_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		            </div>
		            <div class="act_action_row">
		                <div class="act_action_category">
		                    <p>Facilities</p>
		                    <div class="category_group">
    		                    <a class="click_facilities_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_facilities_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		                <div class="act_action_category">
		                    <p>Value for money</p>
		                    <div class="category_group">
    		                    <a class="click_cost_rate"><img src="../imgs/sad.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/affect.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/smiling-face.png"></a>
    		                    <a class="click_cost_rate"><img src="../imgs/smiling-happy.png"></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        @endif
		    </div>
			<a class="btn btn-subscribe">Submit</a>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script type="text/javascript" src="{{ url('js/jquery-gallery.js') }}"></script>
<script>
    $('.gallery-slideshow').slideshow({
		interval: 5000,
		width: 262.5,
		height: 200
	});
</script>
<script type="text/javascript" src="{{ url('js/customize/review_page.js') }}"></script>
@endsection
