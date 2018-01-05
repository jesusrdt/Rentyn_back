<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style>
	.header-back-img{
	z-index: -999;
	position: absolute;
	top:-150px;
	width: 100%;
	height: 225px;
	margin:0 auto;
	}
	.header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 25%
	}
	
	@media (min-width:320px)  {
	 /* smartphones, iPhone, portrait 480x320 phones */ 
	.header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 25%;
	}
	}
	@media (min-width:481px)  { 
	/* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
	 .header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 35%;
	}
	}
	@media (min-width:641px)  { 
	/* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
	.header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 40%;
	}
	 }
	@media (min-width:961px)  { 
	/* tablet, landscape iPad, lo-res laptops ands desktops */
	.header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 15%;
	}
	 }
	@media (min-width:1025px) { 
	/* big landscape tablets, laptops, and desktops */
	 .header .logo-header{
	margin: 0 auto;
	position: absolute;
	margin:0 auto;
	top: -35px;
	left: 45%;
	}
	}
	@media (min-width:1281px) { 
	/* hi-res laptops and desktops */ 
	
	}
	
	
	.header{
	width: 100%;
	background-color:#eee;
	z-index: 999;
	position: relative;
	}
	.logo{
	z-index: 999;
	}
	.form-layouts .header .logo{
	
	}
	.form-layouts{
	background:#fff;
	height: 900px;
	width:550px;
	margin:0 auto;
	z-index:999;
	padding: 0px;
	margin-top:150px;
	}
	.form-input{
	padding-top:30px;
	margin-top:0px;
	color:#333;
	background-color:#fff;
	transition: all 1s ease-in-out;
	font-style: 
	}
	.form-input:hover{
	
	}
	.form-input:focus{
	cursor: pointer;
	width:90%;
	}
	.overborder{
	border-top:0;
	border-right:0;
	border-left:0;
	border-color:#000;
	width: 75%;
	margin:2%;
	}
	.footer img{
	}
	.footer{ 
	width: 100%;/* 
	background-image: url(https://www.rentyn.com/temas/base/images/footer_img_1.jpg); */
	background-color:#000;
	bottom:-120px;

	}
	.social-bar{
	color:#000;
	}
	.social-bar li:hover{
	background-color: yellow;
	transition: all 1s ease-in-out;
	}
	.social-bar ul {
	text-decoration: none;
	}
	.social-bar ul li{
	border-radius: 100%;
	display: inline-block;
	padding-left:15px;
	background-color:#fff;
	box-sizing: border-box;
	font-weight: 500;
	text-align:center;
	}
	
	.social-bar ul li span {
	margin:0 auto;
	}
	.list-links ul {
	}

	ul li a{
	text-decoration: none;
	color:#fff;
	}
	.copyright{
	padding:25px;
	font-size:5px;
	background-color:#fff;
	}
</style>
<div class="conatainer-fluid">
	<div class="row-fluid">
		<div class="col-xs-12">
		<div class="header">
		<img src="{{asset('assets/images/img_principal.jpg')}}" class="header-back-img" alt="">
		<img src="{{asset('assets/images/logo.png')}}" class="logo-header" alt="">
		<div class="form-layouts">
			{!! Form::open(['url' => '/']) !!}
			{{ Form::text('que', null,(['class' => 'form-input overborder', 'placeholder'=> '¿Qué?'])) }}
			{{ Form::text('donde', null,(['class' => 'form-input overborder', 'placeholder'=> '¿Dónde?'])) }}
			{{ Form::text('telefono', null,(['class' => 'form-input overborder', 'placeholder'=> 'Nombre'])) }}
			{{ Form::text('correo', null,(['class' => 'form-input overborder', 'placeholder'=> 'Teléfono'])) }}
			{!! Form::close() !!}
		</div>
		</div>
	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>