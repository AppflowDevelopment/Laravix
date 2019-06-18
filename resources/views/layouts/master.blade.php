<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
        <title>Laravix - Laravel Skeleton</title>
		<meta name="description" content="Laravix is simple quick start Laravel 5 skeleton application">
		<meta name="author" content="{{ settings('credits') }}">
        <!--<link href="{{ URL::asset('//code.rifix.net/bootstrap/3.3.7/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('//code.rifix.net/fontawesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ URL::asset('css/laravix.css') }}" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="{{ URL::asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
		<!--<script type="text/javascript" src="{{ URL::asset('//code.rifix.net/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{ URL::asset('js/laravix.js') }}"></script>
    </head>
    <body>
	<div class="container">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="{{ URL::to('/') }}">{{ trans('messages.sitename') }}</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
			<a class="nav-link" href="{{ URL::to('/') }}">{{ trans('messages.home') }} <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item {{ Request::is('about') ? 'active' : ''}}"><a class="nav-link" href="{{ URL::to('/about') }}">{{ trans('messages.about') }}</a></li>
		  <li class="nav-item {{ Request::is('links') ? 'active' : ''}}"><a class="nav-link" href="{{ URL::to('/links') }}">{{ trans('messages.links') }}</a></li>
		  <li class="nav-item {{ Request::is('contact') ? 'active' : ''}}"><a class="nav-link" href="{{ URL::to('/contact') }}">{{ trans('messages.contact') }}</a></li>

		</ul>
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="https://www.facebook.com/Laravel-Bulgaria-1737706883116214/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a class="nav-item nav-link" href="https://github.com/AppflowDevelopment" target="_blank"><i class="fa fa-github-square" aria-hidden="true"></i></a>
		</div>
	  </div>
	</nav>
    </div>
		
        <div class="container">
			<div class="row">
				<div class="col-md-9">
				@yield('content')
				</div>
				<div class="col-md-3">
				@include('includes.sidebar')
				</div>
			</div>
        </div>
		
		@include('includes.subfooter')
		
		<div class="container centered">
		<p>&copy; {{ date('Y') . ' ' . settings('sitename') }}. {{ trans('messages.version') }}: {{ App::VERSION() }}</p>
		</div>
    </body>
</html>
