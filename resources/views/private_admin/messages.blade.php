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
                        <h1><img src="/imgs/E-Mail.png" class="message-icon">Messages</h1>
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