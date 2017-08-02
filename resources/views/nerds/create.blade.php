<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Nerdo</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerdos.com</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('nerds') }}">Ver todos los Nerdos</a></li>
				<li><a href="{{ URL::to('nerds/create') }}">Crear un Nerdo</a></li>
			</ul>
		</nav>
		<h1>Crear un Nerdo</h1>
		{!! Html::ul($errors->all()) !!}
		{!! Form::open(array('url' => 'nerds')) !!}
			<div class="form-group"> 
				{{ Form::label('name', 'Nombre:') }}
				{{ Form::text('nombre', 'Ingrese nombre del Nerdo', array('class' => 'form-control'))}}
			</div>
			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email','Ingrese Email', array('class' => 'form-control'))}}
			</div>
			<div class="form-group">
				{{ Form::label('nerd_level', 'Nivel de Nerdo:')}}
				{{ Form::select('nerd_level', array('0' => 'Seleccione el nivel', '1' => 'Ve la luz del Sol', '2' => 'Fanatico de Foosball', '3' => 'Habitante del Sotano'), null,array('class' => 'form-control'))}}
			</div>
			{{Form::submit('Crear Nerdo', array('class' => 'btn btn-primary'))}}
		{!! Form::close() !!}
	</div>
</body>
</html>