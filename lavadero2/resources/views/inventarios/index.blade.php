@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Inventarios/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Descripcion</th>
        <th>Precio_compra</th>
        <th>Precio_venta</th>
        <th>Stock</th>
        <th>Stock_min</th>
        <th>Stock_max</th>
        <th>Tipop_id</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $inventarios)
      <tr>
        <td>{{$inventarios->descripcion }}</td>
        <td>{{$inventarios->precio_compra}}</td>
        <td>{{$inventarios->precio_venta}}</td>
        <td>{{$inventarios->stock}}</td>
        <td>{{$inventarios->stock_min}}</td>
        <td>{{$inventarios->stock_max}}</td>
        <td>{{$inventarios->tipop_id}}</td>
        <td><a href="/Inventarios/{{$inventarios->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection