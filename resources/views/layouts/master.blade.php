<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
        <title>{{$title or 'Laravix Skeleton'}}</title>
		<meta name="description" content="Laravix is simple quick start Laravel 5 skeleton application">
		<meta name="author" content="{{ settings('credits') }}">
        <link href="{{ URL::asset('//code.rifix.net/bootstrap/3.3.6/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/laravix.css') }}" rel="stylesheet" type="text/css">
		
		<script type="text/javascript" src="{{ URL::asset('//code.rifix.net/jquery/2.2.3/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('//code.rifix.net/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/laravix.js') }}"></script>
    </head>
    <body>
	<div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">Laravix</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			  <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
              <li><a href="{{ URL::to('/about') }}">About</a></li>
              <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
            </ul>
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
		
		<div class="container centered">
		&copy; {{ date('Y') . ' ' . settings('sitename') }}
		</div>
    </body>
</html>
