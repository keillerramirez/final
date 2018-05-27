@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Tipol/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Descripcion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $tipol)
      <tr>
        <td>{{$tipol->descripcion}}</td>
        <td><a href="/Tipol/{{$tipol->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection