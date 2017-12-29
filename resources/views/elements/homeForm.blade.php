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

 <style type="text/css" media="screen">
     .header-a{
    background: url("{{ asset('img/img_principal.jpg') }}" ) no-repeat center;
    background-size: cover;
    width: 100%;
    min-height: 300px;

}

.imglogo{
 
  height: 10px;
  margin: 5px;  

}

#buscar{
    background: black;
    color:white;
    width: 130px;
    height: 34px;
}

#que, #donde, #cuando{
    width:225px;
    height: 34px;
}


 </style>
    

</head>

<body >
    
 <!-- ==================== barra header ============================== -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        

     <div class="container-fluid">
    <div class="navbar-header">
         <img   class="imglogo" src="img/logo1.png" alt=""> 
        <button type="button" class="navbar-toggle" data-toggle="collapse"></button>
         <a href="#" class="navbar-brand"></a>

    </div>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="#">Alquila tus productos</a></li>
      <li><a href="#">Ayuda</a></li> 
   
    </ul>
  </div>


    </nav>
     <header class="header-a">
    
    <div class="container">
        <div class="col-sm-4 col-sm-offset-2">
          <img class="container-logo" src="img/logo.png" alt="">
        <p><span style="color: #ffffff;">Alquila  maquinaria
        <br/>cerca de ti al mejor precio</span></p>   

        </div>
    </div>
    

 </header>

 <!-- ================================================================ -->

      <div class="container-fluid">
   
   <div class="row centrado">
    <div class="col-sm-3" > Qué</div>
    <div class="col-sm-3" >Dondé</div>
    <div class="col-sm-3" >Cuando</div>
  
  </div>

</div>
  <div class="row centrado2">
    <div class="col-sm-3" >
        <form role="search" >
                        <div class="input-group add-off" align="center">
                            <div class="input-group-btn">
                                <button class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
                            </div>

                            <input   id="que" class="form-control"  placeholder="Buscar" name="srch-term" id="srch-term" type="text">
                            
                        </div>

        </form>
    </div>
    <div class="col-sm-3" >
        <form role="search" >
                        <div class="input-group add-off" align="center">
                            <div class="input-group-btn">
                                <button class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
                            </div>

                            <input   id="donde" class="form-control"  placeholder="Buscar" name="srch-term" id="srch-term" type="text">
                            
                        </div>

       </form>
    </div>
    <div class="col-sm-3" >
        <form role="search" >
                        <div class="input-group add-off" align="center">
                            <div class="input-group-btn">
                                <button class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
                            </div>

                            <input  id="cuando" class="form-control"  placeholder="Buscar" name="srch-term" id="srch-term" type="text">
                            
                        </div>

                    </form>
    </div>
    <div class="col-sm-3" ><input  id="buscar" type="submit" value="Buscar"></div>
  </div>
</div>
                                                  
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>