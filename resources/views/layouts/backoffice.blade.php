<!DOCTYPE html>
<html lang="{{ backoffice()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
	<!--header-->
	@include('header')
	<!--end header-->
	<!--navbar-->
	@include('navbar')
	<!--end navbar-->
	@yield('content')
	<!--footer-->
	@include('footer')kfkfkfkf
	<!-- end footer-->
</body>
</html>