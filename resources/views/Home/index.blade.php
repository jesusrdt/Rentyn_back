@extends('Home.web')
@section('content')
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
<div class="container">
<a class="navbar-brand js-scroll-trigger" href="#page-top"><img   class="imglogo" src="{{asset('asset/images/logo1.png')}}" alt=""></a>
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
<form class="form1">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm text-center"><h5 class="mb-3">Qué</h5>
<div class="col-xs-4" > 
<div class="input-group" >
<span class="input-group-addon" width="50px"><i class="fa fa-search"></i></span>
<input class="form-control"   name="q" placeholder="Search for" required="">
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm text-center"><h5 class="mb-3">Dónde</h5>
<div class="col-xs-4"> 
<div class="input-group" >
<span class="input-group-addon"><i class="fa fa-search"></i></span>
<input class="form-control"  name="q" placeholder="Search for" required="">
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm text-center"><h5 class="mb-3">Cuándo</h5>
<div class="col-xs-4"> 
<div class="input-group" >
<span class="input-group-addon"><i class="fa fa-search"></i></span>
<input class="form-control"  name="q" type="date" required="">
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm text-center"><h5 class="mb-3">&nbsp;</h5>
<div class="col-lg-3 col-md-6 col-sm text-center">
<div class="input-group">
<input id="search" type="submit" value="Siguiente">
</div>
</div> 
</div> 
</div>
</div>
</form>
<!-- <div class="form1">
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
</div>
</div>
</div> 
<div class="row">
<div class="col-lg-3 col-md-6 text-center">
<div class="col-lg-3 col-md-6 text-center" >
<input id="enviar" type="submit" value="Enviar">
</div> 
</div>
</div>
</div> -->
@endsection