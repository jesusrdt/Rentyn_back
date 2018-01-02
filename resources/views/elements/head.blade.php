<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">


 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/00-bootstrap.css" rel="stylesheet">
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/01-et-lineicons-style.css" rel="stylesheet">
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/02-linea-font.css" rel="stylesheet">
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/03-font-awesome.min.css" rel="stylesheet">
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/04-slick.css" rel="stylesheet">
    <link href="https://www.rentyn.com/temas/base/assets/minify/css/05-magnific-popup.css" rel="stylesheet">
   
     <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body id="page-top" >
<nav class="header navbar navbar-default navbar-fixed-top mega navbar-trans"> 
            <div class="container">
              <!-- Logo -->
                <div class="header-logo">
                    <a class="brand-link navbar-brand" href="#" title="Rentyn"><img src='https://www.rentyn.com/uploads/usuarios/1/Logo_blanco.png' alt ='' /></a>
                </div>
              <!-- /Logo -->

                <div class="datos-menu">
                    <div class="buscador-datos">
                        <div class="buscador-rentyn">
                            <form method="POST" action="#" target="_blank">
                            <input type="text" name="busqueda" placeholder="Buscar..." class="input-buscador-top"><button class="boton-buscar"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <div class="dropdown login-usuario">
                            <a href="#" id="user" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="menu-spans">
                                    <span class="datos-text">Usuario</span>
                                                                        <span class="datos-info">Identificate</span>                                    
                                    <i class="fa fa-caret-down"></i>
                                                                    </div>
                            </a>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="user">
                                  @if (Auth::guest())                           
                                <li><a href="{{ route('login') }}" class="inline-popups" id="loguear">@lang('layouts.register')</a></li>
                                <li><a href="{{ route('register') }}" class="inline-popups" id="registrar">@lang('layouts.register')</a></li> 

                                @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>         

                                 @endif
                            </ul>
                                                    </div>
                      
                        <div class="carrito">
                            <a href="/es/pedido" class="link-carrito">
                                <div class="menu-spans">
                                    <span class="datos-text">Carrito de</span>
                                    <span class="datos-info">Alquiler</span>
                                    <i class="fa fa-caret-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                
                <button type="button" id="trigger-menu-principal" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                
                <i class="fa fa-angle-down" onclick="$('.parte-menu').toggle();"></i>
                
            </div>
                
                
            <div class="container-fluid parte-menu">

                <div class="container">
                    <div class="navbar-header">
                     
                    </div>
                 <!-- Navbar Links -->
                    <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav pull-left">
                                <li id="menu-item-2" class=" nivel-0 active">
                <a class="active "   href="#">
                    Home                                    </a>
                            </li>
                                <li id="menu-item-20" class="dropdown nivel-0 ">
                <a class=" dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false" target="_blank" href="/es/maquinaria">
                    Maquinaria                  <span class="caret"></span>             </a>
                    <ul class="dropdown-menu">
                                <li id="menu-item-22" class=" nivel-1 ">
                <a class=" "   href="#">
                    Construcción                                    </a>
                            </li>
                                <li id="menu-item-23" class=" nivel-1 ">
                <a class=" "   href="#">
                    Pavimentacion                                   </a>
                            </li>
                                <li id="menu-item-26" class=" nivel-1 ">
                <a class=" "   href="#">
                    Carretillas elevadoras                                  </a>
                            </li>
                                <li id="menu-item-25" class=" nivel-1 ">
                <a class=" "   href="#">
                    Mineria                                 </a>
                            </li>
                                <li id="menu-item-21" class=" nivel-1 ">
                <a class=" "   href="#">
                    Plataformas Elevadoras                                  </a>
                            </li>
                                <li id="menu-item-24" class=" nivel-1 ">
                <a class=" "   href="#">
                    Maquinaria forestal                                 </a>
                            </li>
            </ul>
                </li>
                                <li id="menu-item-11" class=" nivel-0 ">
                <a class=" "   href="#">
                    ¿Cómo funciona?                                 </a>
                            </li>
                                <li id="menu-item-12" class=" nivel-0 ">
                <a class=" "   href="#">
                    Conócenos                                   </a>
                            </li>
                                <li id="menu-item-16" class=" nivel-0 ">
                <a class=" "   href="#">
                    FAQ's                                   </a>
                            </li>
                                <li id="menu-item-14" class=" nivel-0 ">
                <a class=" "   href="#">
                    Blog                                    </a>
                            </li>
                                <li id="menu-item-15" class=" nivel-0 ">
                <a class=" "   href="#">
                    Contacto                                    </a>
                            </li>
            </ul>
                                                    <a href="/es/comparador" class="link-comparador"><span class="comparador-icono"></span> Comparador</a>
                    </div>

                </div>
            
            </div>      
    </nav>

    @yield('content')


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>