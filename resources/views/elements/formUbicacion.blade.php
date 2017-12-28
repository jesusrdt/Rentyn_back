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
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 330px;
        width: 800%;
		display:inline-block; 
		overflow:hidden;
		position:relative; 
		 
		margin-left: -300px;
		border:none;
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

 <header class="header-u">
 	
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2">
		<div id="map"></div>
		</div>
	</div>

 </header>
 <!-- ==================================================================================== -->

<div class="container">
	<div class="row centrado">
		<div class="col-lg-6 col-lg-offset-3">

			<h2>2.- ¿Donde lo necesitas?</h2>
				<div class="col-md-3">
  					<form role="search" >
    					<div class="input-group add-off" align="center">
      						<div class="input-group-btn">
        						<button class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
      						</div>
      
      						<datalist id="listas">
        					<option value="Valencia "/>
        					<option value="Valladolid"/>
        					<option value="Valle del Loira "/>
       					    
       
    						</datalist>
 
   							 <!-- Asociamos al input la datalist 'listas' -->
   
      						<input id="search" class="form-control" list="listas" placeholder="Buscar" name="srch-term" id="srch-term" type="text">
      						
      					</div>
      							

					</form>
   				</div>
   			</div>
   				<div class="col-md.3">
      				<input id="siguiente" type="submit" value="Siguiente">
      			</div>
  		</div>
									
</div>
 <script>
      function initMap() {
        var uluru = {lat: 39.9929000, lng:  -0.0576800};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKA5z9mjBp51OKJ0Ub2rEZmOf2TDliAnk&callback=initMap"
    async defer></script>

</body>
</html>