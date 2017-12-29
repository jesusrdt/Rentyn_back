<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración </title>
</head>
<body>


	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
		      	<h4 class="panel-title">@yield('panel_title', 'Default')</h4>
		    </div>
			<div class="panel-body">
				@include('back.template.partials.errors')
				@include('flash::message')
				@yield('content', 'Default')
			</div>
		</div>
	</div>

	@include('back.template.partials.footer')

</body>
</html>