@extends('master')

@section('contenido')
	</hr>

	<div class="container">
	<h1>Crear Articulo</h1>
		{!! Form::model($articulo, ['method' => 'PATCH', 'action' => ['ArticulosController@update', $articulo->id] ]) !!}

			<div class="form-group">
				{!! Form::label('titulo' , 'Titulo: ') !!}
				{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('descripcion' , 'Descripcion: ') !!}
				{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('autor' , 'Autor: ') !!}
				{!! Form::text('autor', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::submit('Modificar Articulo', ['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}

		{!! Form::open( ['method' => 'DELETE', 'route' => ['articulos.destroy', $articulo->id] ] ) !!}
			
			<div class="form-group">
				{!! Form::submit('Eliminar Articulo', ['class' => 'btn btn-danger form-control']) !!}
			</div>			

		{!! Form::close() !!}

		@if($errors->any())
			<ul class="alert-damage">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
</div>
@stop