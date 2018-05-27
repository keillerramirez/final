@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Nombre {{$data["datos"]->nombre}}</h5>
  <p>Teléfono {{$data["datos"]->telefono}}</p>
  <p>Teléfono {{$data["datos"]->direccion}}</p>
  <a href="/Clientes" class="btn btn-info">Volver</a>
</div>

@endsection