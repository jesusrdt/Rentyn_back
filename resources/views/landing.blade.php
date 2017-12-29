 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >  
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="{{asset('css/landing.css')}}" rel="stylesheet">
 

  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/redmond/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" href="{{asset('css/ui.daterangepicker.css')}}" type="text/css" />
  

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img   class="imglogo" src="img/logo1.png" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#alquila">Alquila tus productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ayuda">Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#registrate">Regístrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#login">Inicia sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-left text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <img class="logoheader" src="img/logo.png" alt="">
            <h2 >
              Alquila  maquinaria
             <br/>cerca de ti al mejor precio
            </h2>
         
          </div>
         
        </div>
      </div>
    </header>


    
    <div class="form1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             
              <h5 class="mb-3">Qué</h5>
                  <div class="input-group">
                    <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" data-original-title="" title=""><i class="fa fa-search"></i></button>
                </span>
                <input class="form-control" id="system-search" name="q" placeholder="Search for" required="">
                
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
        
              <h5 class="mb-3">Dónde</h5>
               <div class="input-group">
                    <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
                </span>
                <input class="form-control" id="system-search2" name="q" placeholder="Search for" required="">
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             
              <h5 class="mb-3">Cuándo</h5>
              <div class="input-group">
                    <span class="input-group-btn">
                  <button type="submit" class="btn btn-default" data-original-title="" title=""><i class="fa fa-search"></i></button>
                </span>
                 <input id="reportrange" type="date">
                  
                </input>
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
             
              <h5 class="mb-3">&nbsp;</h5>
                <div class="input-group">
                  <input  id="search" type="submit" value="Buscar" placeholder="Buscar">
                  </div>
            </div>
          </div>
        </div>
      </div>
   </div>

   </section>

  
   <div class="form1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="">
             
          <h5 align="center">Déjanos tus datos</h5>
          
             
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
          <div class="col-md-3" >
           <input id="enviar" type="submit" value="Enviar">
          </div>
       </div>
    </div>
  </div>  
  </div>


  <!-- ================================================================ -->



  <script src="{{ asset('js/daterangepicker.jQuery.js') }}"></script>
  

<script src="{{ asset('js/bootstrap.min.js') }}"></script>



    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
   <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
   

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/landing.min.js') }}"></script>
 
  </body>

</html>
