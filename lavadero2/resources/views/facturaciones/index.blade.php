@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Facturaciones/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Clientes_id</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $facturaciones)
      <tr>
        <td>{{$facturaciones->fecha}}</td>
        <td>{{$facturaciones->clientes_id}}</td>

        <td><a href="/Facturaciones/{{$facturaciones->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection