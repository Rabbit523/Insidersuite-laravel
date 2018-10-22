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
						<h1><i class="fas fa-user-friends"></i>Partners</h1>
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