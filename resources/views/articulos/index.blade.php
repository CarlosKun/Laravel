@extends ('master')
<br>
@section ('contenido')
<div class="container">
	<div class="panel-default">
		<div class="panel-heading">
			Lista de articuos
		</div>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th>Articulo</th>
					<th>Autor</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($articulos as $articulo)
					<tr>
						<td>{{$articulo->titulo}}</td>
						<td>{{$articulo->autor}}</td>
						<td>
							<a href="/articulos/{{$articulo->id}}/edit" class="btn btn-warning btn-xs">Editar</a>
							<a href="/articulos/{{$articulo->id}}" class="btn btn-success btn-xs">Detalles</a>
							{!! Form::open( ['method' => 'DELETE', 'route' => ['articulos.destroy', $articulo->id] ] ) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger form-control']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop