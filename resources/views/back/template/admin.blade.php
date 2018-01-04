<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rentyn | @yield('title')</title>
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    
    <!-- Font Awesome -->

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- Custom styles -->
    @yield('styles')
</head>
<body>
	@include('back.elements.nav')
	@yield('jumbotron', '')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
		      	<h4 class="panel-title">@yield('panel_title', 'Default')</h4>
		    </div>
			<div class="panel-body">
				@include('back.elements.errors')
				@include('flash::message')
				
				@yield('content', 'Default')
			</div>
		</div>
	</div>

	@include('back.elements.footer')

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="{{url('js/jquery-3.2.1.min.js')}}" ></script>
    <!-- Custom scripts -->
    @yield('scripts')
</body>
</html>