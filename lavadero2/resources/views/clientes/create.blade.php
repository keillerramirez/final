@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Clientes" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Nombre" name="nombre" class="form-control">
		<input type="text" placeholder="Teléfono" name="telefono" class="form-control">
		<input type="text" placeholder="Dirección" name="direccion" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Clientes" class="btn btn-info">Volver</a>
</div>
@endsection