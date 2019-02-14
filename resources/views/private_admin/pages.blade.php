@extends('private_admin.private')
@section('title','Insider Suite |  Admin Pages')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_page.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><svg style="width: 30px; margin-right: 10px;vertical-align: bottom;" aria-hidden="true" data-prefix="fab" data-icon="page4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-page4 fa-w-16 fa-2x"><path fill="currentColor" d="M248 504C111 504 0 393 0 256S111 8 248 8c20.9 0 41.3 2.6 60.7 7.5L42.3 392H248v112zm0-143.6V146.8L98.6 360.4H248zm96 31.6v92.7c45.7-19.2 84.5-51.7 111.4-92.7H344zm57.4-138.2l-21.2 8.4 21.2 8.3v-16.7zm-20.3 54.5c-6.7 0-8 6.3-8 12.9v7.7h16.2v-10c0-5.9-2.3-10.6-8.2-10.6zM496 256c0 37.3-8.2 72.7-23 104.4H344V27.3C433.3 64.8 496 153.1 496 256zM360.4 143.6h68.2V96h-13.9v32.6h-13.9V99h-13.9v29.6h-12.7V96h-13.9v47.6zm68.1 185.3H402v-11c0-15.4-5.6-25.2-20.9-25.2-15.4 0-20.7 10.6-20.7 25.9v25.3h68.2v-15zm0-103l-68.2 29.7V268l68.2 29.5v-16.6l-14.4-5.7v-26.5l14.4-5.9v-16.9zm-4.8-68.5h-35.6V184H402v-12.2h11c8.6 15.8 1.3 35.3-18.6 35.3-22.5 0-28.3-25.3-15.5-37.7l-11.6-10.6c-16.2 17.5-12.2 63.9 27.1 63.9 34 0 44.7-35.9 29.3-65.3z" class=""></path></svg>Pages Content</h1>
						<a type="button" class="btn btn-normal" id="addNew">New</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="content-box">						
						<div class="header-list">
							<div class="row">
								<div class="label-table location_country">Location Country</div>
								<div class="label-table location_place">Location Place</div>
								<div class="label-table accom">Number of Accomodation</div>
								<div class="label-table act">Number of Activity</div>
								<div class="label-table status">Status</div>
								<div class="label-table last-audit">Review</div>
							</div>
						</div>
						<div class="item-list">
							@if ($count == 0) 
							<h4 class="offer">There is no offer!</h4>
							@endif
							@foreach($offers as $offer)
							<div class="item">
								<div class="row">
									<div class="label-table location_country">{{$offer->location_country}} <a class="edit" data-id="{{$offer->id}}">Edit</a> <a class="delete" data-id="{{$offer->id}}">Delete</a></div>
									<div class="label-table location_place">{{$offer->location_place}}</div>
									<div class="label-table accom">{{$offer->accomodation}}</div>
									<div class="label-table act">{{$offer->activity}}</div>
									<div class="label-table status">{{$offer->status}}</div>
									<div class="label-table last-audit">{{$offer->like_count}}</div>									
								</div>
							</div>
							@endforeach
							{{$offers->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-offers" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md modal-partners" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 id="new_partner">New Offer</h4>
					<h4 id="edit_partner">Edit Offer</h4>
				</div>
				<div class="modal-body">
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Location Country</label>
									<input type="text" name="location_country" id="location_country" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Location Place</label>
									<input type="text" name="location_place" id="location_place" class="form-control">
								</div>
							</div>
						</div>
					</div>					
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Banner Image</label>
									<input id="avatarInput" type="file" accept="image/*">
									<input id="img_path" type="hidden">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Status</label>
									<label class="switch">
										<input type="checkbox" id="status" name="status">
										<span class="slider"></span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">									
									<button id="accomodation" class="form-control">Accommodation
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<button id="activity" class="form-control">Activity
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a id="save" class="btn btn-normal">SAVE OFFER</a>
					<a id="update" class="btn btn-normal">UPDATE OFFER</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_pages.js') }}"></script>
@endsection 