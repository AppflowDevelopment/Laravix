@extends('layouts.master')

@section('content')

	<div class="jumbotron">
        <h1>{{ trans('messages.sitename') }}</h1>
        <p>{{ trans('messages.description') }}</p>
        <p>
          <a class="btn btn-lg btn-primary" href="{{ URL::to('contact') }}" role="button">{{ trans('messages.contact') }} &raquo;</a>
        </p>
	</div>

@endsection