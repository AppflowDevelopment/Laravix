@extends('layouts.master')

@section('content')

<form class="form-horizontal" role="form" method="post" action="{{ url('contact') }}">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">{{ trans('messages.name') }}</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="{{ trans('messages.name') }}" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">{{ trans('messages.email') }}</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="{{ trans('messages.email') }}" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">{{ trans('messages.message') }}</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" id="message" name="message" placeholder="{{ trans('messages.message') }}"></textarea>
		</div>
	</div>
	<!--<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		</div>
	</div>-->
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="{{ trans('messages.send') }}" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			@if(Session::has('message'))
				<div class="alert alert-info">
				  {{Session::get('message')}}
				</div>
			@endif
		</div>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@endsection