<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  	<title>{{ config('app.name', 'Laravel') }}</title>
  
   <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
​
	

</head>

<body >
	
 <!-- ==================== barra header ============================== -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container">
  				<div class="row">
  					<div class="col-xs-12 col-sm-5 col-sm-offset-1">
  						<img  class="img-logo" src="img/logo.png" alt="">
  					<button type="button" class="navbar-toggle" data-toggle="collapse"></button>
  					<a href="#" class="navbar-brand"></a>
  					</div>	
  				</div>
  		</div>
	</nav>
	 <header class="header-a">
 	
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2">
		  <img class="container-logo" src="{{ asset('img/logo.jpg') }}" alt="">
        <p><span style="color: #ffffff;">Alquila la maquinaria
        <br>cerca de ti al mejor precio</span></p>   

		</div>
	</div>

 </header>

 <!-- ================================================================ -->


<div class="container">
	<div class="row centrado">
		<div class="col-lg-6 col-lg-offset-3">

			<h2>1.- ¿Que necesitas alquilar?</h2>
				<div class="col-md-3">
  					<form role="search" >
    					<div class="input-group add-off" align="center">
      						<div class="input-group-btn">
        						<button class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
      						</div>
      
      						<datalist id="listas">
        					<option value="Martillos "/>
        					<option value="Martillos neúmatico"/>
        					<option value="Martillos (implemento) "/>
       					    <option value="Martillos (minimartillos)"/>
       
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
</body>
</html>