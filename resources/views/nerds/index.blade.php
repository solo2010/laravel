<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD de Nerdos</title>
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{URL::to('nerds')}}">Nerdos.com</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{URL::to('nerds')}}">Ver todos los Nerdos</a></li>
				<li><a href="{{URL::to('nerds/create')}}">Crear un Nerdo</a></li>
			</ul>
		</nav>
		<h1>Todos los Nerds</h1>
		@if(Session::has('message'))
			<div class="alert alert-info">{{Session::get('message')}}</div>
		@endif
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Mail</td>
					<td>Nerd Leve</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($nerds as $key => $value)
					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->nombre }}</td>
						<td>{{ $value->email }}</td>
						<td>{{ $value->nerd_level }}</td>
						<td>
							<div class="row">
								<div class="col-md-3"><a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id )}}">Mostrar Nerd</a></div>
								<div class="col-md-3"><a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Editar Nerd</a></div>
								<div class="col-md-3">
									{!! Form::open(array('url'=>'nerds/' . $value->id, 'class'=>'pull-right')) !!}
										{!! Form::hidden('_method', 'DELETE') !!}
										{!! Form::submit('Eliminar Nerdo', array('class' => 'btn btn-small btn-warning'))!!}
									{!! Form::close() !!}
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>