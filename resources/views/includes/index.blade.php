@extends('layouts.master')

@section('content')

	<div class="jumbotron">
        <h1>Laravix</h1>
        <p>Laravix is simple quick start Laravel 5 skeleton application</p>
        <p>
          <a class="btn btn-lg btn-primary" href="{{ URL::to('contact') }}" role="button">Contact us &raquo;</a>
        </p>
	</div>

@endsection