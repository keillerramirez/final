@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>Crear Vehiculos</h3>
	<form action="/Vehiculos" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Placa" name="placa" class="form-control">
		<input type="s" placeholder="Clientes_id" name="clientes_id" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Vehiculos" class="btn btn-info">Volver</a>
</div>
@endsection