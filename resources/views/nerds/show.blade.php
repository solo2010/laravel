<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nerdo {{ $nerd->nombre }}</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('nerds')}}">Nerdos.com</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('nerds')}}">Ver todos los Nerdos</a></li>
				<li><a href="{{ URL::to('nerds/create')}}">Crear un Nerdo</a></li>
			</ul>
		</nav>
		<div class="jumbotron text-center">
			<h2>{{ $nerd->nombre }}</h2>
			<p>
				<strong>Email:</strong>{{ $nerd->email }}<br>
				<strong>Level:</strong> {{ $nerd->nerd_level}}
			</p>
		</div>
	</div>
</body>
</html>