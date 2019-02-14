@extends('private_admin.private')
@section('title','Insider Suite |  Admin Messages')
@section('head')
	@parent
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/customize/admin_messages.css') }}">
@endsection
@section('content')
<div class="page-container">
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="title-box">
                        <h1><svg style="width: 30px; margin-right: 10px;vertical-align: sub;" aria-hidden="true" data-prefix="far" data-icon="inbox-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-inbox-in fa-w-18 fa-2x"><path fill="currentColor" d="M395.5 185.5l-99 99c-4.7 4.7-12.3 4.7-17 0l-99-99c-7.6-7.6-2.2-20.5 8.5-20.5h67V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v153h67c10.7 0 16.1 12.9 8.5 20.5zM528 352H408l-32 64H200l-32-64H48v112h480V352zm48 2.2V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V354.2c0-11.8 4.3-23.1 12.1-31.9l101.6-114.2c2.3-2.6 4.9-4.9 7.7-7 2.4-1.7 5.6-1.4 7.7.7l24.8 24.9c2.2 2.2 2.3 5.9.2 8.2L92.7 304h105l32 64h116.7l32-64h105L422 234.9c-2.1-2.4-2-5.9.2-8.2l24.6-25c2-2.1 5.3-2.4 7.7-.7 2.9 2.1 5.5 4.4 7.9 7.1L564 322.3c7.7 8.8 12 20.2 12 31.9z" class=""></path></svg>Messages</h1>
					</div>
				</div>
			</div>
		</div>
    </header>
    <div class="page-content">
		<div class="container-fluid">
			<div class="content-box">
				<div class="header-list">
					<div class="row">
						<div class="label-table id">Sender ID</div>
						<div class="label-table name">Sender Name</div>
                        <div class="label-table email">Sender Email</div>
                        <div class="label-table status">Status</div>
                        <div class="label-table date">Received Date</div>
                        <div class="label-table view">View</div>
					</div>
				</div>
				<div class="item-list">
					@if ($count == 0) 
					<h4 class="message">There is no message!</h4>
					@endif					
					@foreach($messages as $message)
					<div class="item">
						<div class="row">
                            <div class="label-table id">{{$message->user_id}}</div>
                            <div class="label-table name">{{$message->name}}</div>
                            <div class="label-table email">{{$message->email}}</div>
                            <div class="label-table status">{{$message->_status}}</div>
                            <div class="label-table date">{{$message->created_at}}</div>
                            <div class="label-table view"><a class="check" data-id="{{$message->id}}">View</a></div>					
						</div>
					</div>
					@endforeach
					{{$messages->links()}}
				</div>
			</div>
		</div>
    </div>
    <div class="modal fade" id="modal-message" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md modal-partners" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>					
					<h4>View Message</h4>
				</div>
				<div class="modal-body">
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">SENDER ID</label>
									<input type="text" name="sender_id" id="sender_id" class="form-control" readonly>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">SENDER NAME</label>
									<input type="text" name="contact_person" id="sender_name" class="form-control" readonly>
								</div>
							</div>
						</div>
					</div>
					<div class="row-modal">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">SENDER EMAIL</label>
									<input type="text" name="email" id="sender_email" class="form-control" readonly>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">RECEIVED DATE</label>
									<input type="text" name="date" id="date" class="form-control" readonly>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row-modal">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <textarea id="content" readonly></textarea>
                            </div>
                        </div>
                    </div>
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
<script type="text/javascript" src="{{ url('js/customize/admin_message.js') }}"></script>
@endsection 