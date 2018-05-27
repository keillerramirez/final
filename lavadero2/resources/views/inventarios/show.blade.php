@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Descripcion {{$data["datos"]->descripcion}}</h5>
  <p>Precio_compra {{$data["datos"]->precio_compra}}</p>
  <p>Precio_venta {{$data["datos"]->precio_venta}}</p>
  <p>Stock {{$data["datos"]->stock}}</p>
  <p>Stock_min {{$data["datos"]->stock_min}}</p>
  <p>Stock_max {{$data["datos"]->stock_max}}</p>
  <p>Tipop_id {{$data["datos"]->tipop_id}}</p>
  <a href="/Inventarios" class="btn btn-info">Volver</a>
</div>

@endsection