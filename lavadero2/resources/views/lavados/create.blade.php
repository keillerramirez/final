@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Lavados" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Tipol_id" name="tipol_id" class="form-control">
		<input type="text" placeholder="Tipov_id" name="tipov_id" class="form-control">
		<input type="text" placeholder="Costo" name="costo" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Lavados" class="btn btn-info">Volver</a>
</div>
@endsection