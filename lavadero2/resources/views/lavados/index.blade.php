@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Lavados/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Tipol_id</th>
        <th>Tipov_id</th>
        <th>Costo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $lavados)
      <tr>
        <td>{{$lavados->tipol_id}}</td>
        <td>{{$lavados->tipot_id}}</td>
        <td>{{$lavados->costo}}</td>
        <td><a href="/Lavados/{{$lavados->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection