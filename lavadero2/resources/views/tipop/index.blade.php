@extends('layouts.app')

@section('content')
<div class="container">  
<h3>{{$data["titulo"]}}</h3>

<a href="/Tipop/create" class="btn btn-info">Crear</a>         
  <table class="table">
    <thead>
      <tr>
        <th>Descripcion</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data["datos"] as $tipop)
      <tr>
        <td>{{$tipop->descripcion}}</td>
        <td><a href="/Tipop/{{$tipop->id}}" class="btn btn-warning">Ver</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

@endsection