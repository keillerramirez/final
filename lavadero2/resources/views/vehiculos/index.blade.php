@extends('layouts.app')

@section('content')
<div class="container">  
<h3>Vehiculos</h3>

<a href="/Vehiculos/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Placa</th>
        <th>Clientes_id</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($datos as $vehiculos)
      <tr>
        <td>{{$vehiculos->placa}}</td>
        <td>{{$vehiculos->clientes_id}}</td>

        <td><a href="/Vehiculos/{{$vehiculos->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection