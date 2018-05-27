@extends('layouts.app')

@section('content')
<div class="container">  
	<h3>{{$data["titulo"]}}</h3>
	<form action="/Inventarios" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" placeholder="Descripcion" name="descripcion" class="form-control">
		<input type="text" placeholder="Precio_compra" name="precio_compra" class="form-control">
		<input type="text" placeholder="Precio_venta" name="precio_venta" class="form-control">
		<input type="text" placeholder="Stock" name="stock" class="form-control">
		<input type="text" placeholder="Stock_min" name="stock_min" class="form-control">
		<input type="text" placeholder="Stock_max" name="stock_max" class="form-control">
		<input type="text" placeholder="Tipop_id" name="tipop_id" class="form-control">
		<input type="submit" name="Guardar" value="Guardar" class="btn btn-sucess">
	</form>
<a href="/Inventarios" class="btn btn-info">Volver</a>
</div>
@endsection