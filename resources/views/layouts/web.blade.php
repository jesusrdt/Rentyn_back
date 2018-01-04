<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Rentyn</title>
        
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <!-- Fonts -->
        
        <!-- Font Awesome -->

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
       
        <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
 
        <style>
/*div principal del datepicker*/
.daterangepicker
{
width: auto;
background: black;
}

/*Tabla con los días del mes*/
.daterangepicker table
{
font-size: 14px;
}

/*La cabecera*/
.daterangepicker .daterangepicker-header
{

}

/*Para los días de la semana: Sa Mo ... */
.daterangepicker th
{

}

.daterangepicker td.active,
.daterangepicker td.active:focus,
.daterangepicker td.active:hover {
    background-color: #ffcc66;
}



/*Para items con los días del mes por defecto */
.daterangepicker .ui-state-default
{
background: red;
}

/*Para el item del día del mes seleccionado */
.daterangepicker .state-active
{
background: orange;
color: red;
}



.ranges button.applyBtn,
.ranges button.applyBtn:hover,
.ranges button.applyBtn:focus  {
       background-color: #ffcc66;
       border: 1px solid #ddd; 
      
}



.ranges .range_inputs button.applyBtn {
     background-color: #ffcc66;
      border: 1px solid #ddd; 
}

.ranges .range_inputs button.applyBtn:active {
   background-color: #ffcc66;
 border-color: #ddd;
-webkit-box-shadow: 1px 1px 1px 1px black !important;
-moz-box-shadow: 0px 0px 0px 0px black  !important;
box-shadow: 0px 0px 0px 0px black  !important;
}


</style>



               <!-- Custom styles -->
        @yield('styles')
    </head>
    <body>
        @yield('content')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/date.js')}}"></script>
   
        <!-- Custom scripts -->


        @yield('scripts') 
    </body>
</html>
