@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Detalles" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Facturaciones_id" name="facturaciones_id" class="form-control">
		<input type="text" placeholder="Tipop_id" name="tipop_id" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Detalles" class="btn btn-info">Volver</a>
</div>
@endsection