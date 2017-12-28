<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
  	<title>{{ config('app.name', 'Laravel') }}</title>
  
   <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
​

	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/redmond/jquery-ui.css" type="text/css" />
	<link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
	<style type="text/css" media="screen">
		.input-group{
			width: 300px;
		}

       #siguiente{
       	margin-left: 110px;
       }

	</style>

</head>

<body>

	<!-- ==================== barra header ============================== -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container">
  				<div class="row">
  					<div class="col-xs-12 col-sm-5 col-sm-offset-1">
  						<img  class="img-logo" src="{{ asset('img/logo.jpg') }}"  alt="">
  					<button type="button" class="navbar-toggle" data-toggle="collapse"></button>
  					<a href="#" class="navbar-brand"></a>
  					</div>	
  				</div>
  		</div>
	</nav>

 <header class="header-ca">
 	
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2">
		
		</div>
	</div>

 </header>

 <!-- ================================================================ -->


<div class="container">
	<div class="row centrado">
		<div class="col-lg-6 col-lg-offset-3">
			<h2>3.- ¿Cuándo lo necesitas? </h2>
				<div class="col-md-3">
					
				 	<div class="input-group">
        				<div class="input-group-addon">
         				<i class="fa fa-calendar"></i>
        				</div>
        				<input class="form-control" id="rangeA" name="date" placeholder="MM/DD/YYYY" type="date"/>
       				</div>
       			</div>	
      	</div>	
      	<div class="col-md-3" ><input id="siguiente" type="submit" value="Siguiente"> </div>
		</div>
	</div>
</div>


 <!-- ================================================================ -->


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/date.js"></script>
	<script type="text/javascript" src="js/daterangepicker.jQuery.js"></script>
	<script type="text/javascript">
			$(function(){
					$('#rangeA').daterangepicker();
					
			 });
	</script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>