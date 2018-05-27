@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Tipov" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Descripcion" name="descripcion" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Tipov" class="btn btn-info">Volver</a>
</div>
@endsection