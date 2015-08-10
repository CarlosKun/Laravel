@extends('master')

@section('contenido')

<h1>Titulo de pagina</h1>

	@if (count($apoyo))
		<h1>Peronas que contribuyen a laravel.com.mx</h1>
		<ul>
			@foreach ($apoyo as $persona)
			<li>{{$persona}}</li>
			@endforeach
		</ul>
	@endif
@stop