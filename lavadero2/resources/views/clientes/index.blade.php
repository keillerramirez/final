@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Clientes/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Direccion</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $clientes)
      <tr>
        <td>{{$clientes->nombre}}</td>
        <td>{{$clientes->telefono}}</td>
        <td>{{$clientes->direccion}}</td>
        <td><a href="/Clientes/{{$clientes->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection