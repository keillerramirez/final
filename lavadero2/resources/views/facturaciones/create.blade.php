@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Facturaciones" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Fecha" name="fecha" class="form-control">
		<input type="text" placeholder="Clientes_id" name="clientes_id" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Facturaciones" class="btn btn-info">Volver</a>
</div>
@endsection