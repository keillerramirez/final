@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Detalles/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Facturaciones_id</th>
        <th>Tipop_id</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $detalles)
      <tr>
        <td>{{$detalles->facturaciones_id}}</td>
        <td>{{$detalles->tipop_id}}</td>
        <td><a href="/Detalles/{{$detalles->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection