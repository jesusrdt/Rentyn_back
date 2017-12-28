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

<style type="text/css" media="screen">


datalist{
	border-color: black;
}





.form-row input{
	background-color: #ededed;
	width: 350px;
	height: 30px;
    border-style:none;
    margin-right: 20px;
  
}

label{

	color: #abacad;
	margin: 15px;
  text-align: left;
}



</style>



</head>
<body >
	
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

 <header class="header-co">
  
  <div class="container">
    <div class="col-sm-4 col-sm-offset-2">
    
    </div>
  </div>

 </header>

 <!-- ================================================================ -->

    
<div class="container">
  <div class="row centrado">
    <div class="col-lg-6 col-lg-offset-3">
	     <h2>4.- Déjanos tus datos </h2>
          <div class="col-md-3" >
             <div class="main-content">

               <form class="form-register" method="post" action="#">
                 <div class="form-row">
                        <label>
                            <span>Nombre</span><br>
                            <input type="text" id="txtName" name="name" required="">
                        </label>
                  </div>

                  <div class="form-row">
                        <label>
                            <span>Teléfono</span><br>
                            <input type="tel" id="txtTlf" name="telefono" required="">
                        </label>
                  </div>

                  <div class="form-row">
                        <label>
                            <span>Email</span><br>
                            <input type="email" id="txtEmail" name="email" required="">
                        </label>
                  </div>
              </form>
            </div>
          </div>  
          <div class="col-md-3" >
	         <input id="enviar" type="submit" value="Enviar">
          </div>
       </div>
    </div>
  </div>  
</body>
</html>