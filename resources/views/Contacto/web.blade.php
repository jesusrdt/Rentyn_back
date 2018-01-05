<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ui.daterangepicker.css')}}">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/redmond/jquery-ui.css" type="text/css" />
<title>@yield('title') | Rentyn</title>
</head>
@yield('styles')

@yield('content')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
<script src="{{ asset('assets/js/daterangepicker.jQuery.js') }}"></script>
<script type="text/javascript">
    $(function(){
    $('#rangeA').daterangepicker();          
    });
</script>
<script src="{{asset('assets/js/date.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('assets/js/scrollreveal.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/landing.js')}}"></script>
@yield('scripts')
</body>
</html>