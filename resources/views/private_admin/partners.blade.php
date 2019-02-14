@extends('private_admin.private')
@section('title','Insider Suite |  Admin Partners')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ url('css/intlTelInput.css') }}">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_partner.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
						<h1><svg style="width: 30px; margin-right: 10px;vertical-align: bottom;" aria-hidden="true" data-prefix="far" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users fa-w-20 fa-2x"><path fill="currentColor" d="M544 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zM96 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zm396.4 210.9c-27.5-40.8-80.7-56-127.8-41.7-14.2 4.3-29.1 6.7-44.7 6.7s-30.5-2.4-44.7-6.7c-47.1-14.3-100.3.8-127.8 41.7-12.4 18.4-19.6 40.5-19.6 64.3V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-44.8c.2-23.8-7-45.9-19.4-64.3zM464 432H176v-44.8c0-36.4 29.2-66.2 65.4-67.2 25.5 10.6 51.9 16 78.6 16 26.7 0 53.1-5.4 78.6-16 36.2 1 65.4 30.7 65.4 67.2V432zm92-176h-24c-17.3 0-33.4 5.3-46.8 14.3 13.4 10.1 25.2 22.2 34.4 36.2 3.9-1.4 8-2.5 12.3-2.5h24c19.8 0 36 16.2 36 36 0 13.2 10.8 24 24 24s24-10.8 24-24c.1-46.3-37.6-84-83.9-84zm-236 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm0-176c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM154.8 270.3c-13.4-9-29.5-14.3-46.8-14.3H84c-46.3 0-84 37.7-84 84 0 13.2 10.8 24 24 24s24-10.8 24-24c0-19.8 16.2-36 36-36h24c4.4 0 8.5 1.1 12.3 2.5 9.3-14 21.1-26.1 34.5-36.2z" class=""></path></svg>Partners</h1>
						<a type="button" class="btn btn-normal" id="addNew">New Partner</a>
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
						<div class="form-box">
							<div class="row">
								<div class='col-md-12 col-sm-4 col-md-3'>
									<input type="text" name="search" id="search" class="form-control search-form" placeholder="Search by Contact Person">
								</div>
							</div>
						</div>
						<div class="header-list">
							<div class="row">
								<div class="label-table partner-name">Partner name</div>
								<div class="label-table contact">Contact person</div>
								<div class="label-table phone">Phone</div>
								<div class="label-table email">Email</div>
								<div class="label-table date">Date</div>
								<div class="label-table last-audit">Last Audit</div>
								<div class="label-table n_booking">Number of Booking</div>
							</div>
						</div>
						<div class="item-list">
							@if ($count == 0) 
							<h4 class="partner">There is no partner!</h4>
							@endif
							@foreach($partners as $partner)
							<div class="item">
								<div class="row">
									<div class="label-table partner-name">{{$partner->partner_name}} <a class="edit" data-id="{{$partner->id}}">Edit</a> <a class="delete" data-id="{{$partner->id}}">Delete</a></div>
									<div class="label-table contact">{{$partner->contact_person}}</div>
									<div class="label-table phone">{{$partner->phone}}</div>
									<div class="label-table email">{{$partner->email}}</div>
									<div class="label-table date">{{$partner->date_}}</div>
									<div class="label-table last-audit">{{$partner->last_audit}}</div>
									<div class="label-table n_booking">{{$partner->booking_count}}</div>
								</div>
							</div>
							@endforeach
							{{$partners->links()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-partners" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md modal-partners" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 id="new_partner">New Partner</h4>
					<h4 id="edit_partner">Edit Partner</h4>
				</div>
				<div class="modal-body">
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">PARTNER NAME</label>
									<input type="text" name="partner_name" id="partner_name" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">CONTACT PERSON</label>
									<input type="text" name="contact_person" id="contact_person" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="row-modal">                    
							<div class="row">
									<div class="col-xs-12 col-sm-6">
											<div class="form-group">
													<label for="">PHONE</label>
													<input type="tel" name="phone" id="phone" class="form-control">
											</div>
									</div>
									<div class="col-xs-12 col-sm-6">
											<div class="form-group">
													<form name = "myForm">
															<label for="">EMAIL</label>
															<input type="email" name="email" id="email" class="form-control">													
													</form>
											</div>
									</div>
							</div>
					</div>				
					<div class="row-modal">                    
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">LAST AUDIT</label>
									<input type="text" name="date" id="partner_datepicker" class="form-control">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">DATE</label>
									<input type="text" name="last_audit" id="date" class="form-control">
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="modal-footer">
					<a id="save" class="btn btn-normal">SAVE PARTNER</a>
					<a id="update" class="btn btn-normal">SAVE PARTNER</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section ('scripts')
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/utils.js') }}"></script>
<script type="text/javascript" src="{{ url('js/data.js') }}"></script>
<script type="text/javascript" src="{{ url('js/intlTelInput.js') }}"></script>
<script type="text/javascript" src="{{ url('js/customize/admin_partners.js') }}"></script>
@endsection