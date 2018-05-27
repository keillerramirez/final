@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Fecha {{$data["datos"]->fecha}}</h5>
   <h5>Clientes_id {{$data["datos"]->clientes_id}}</h5>

  <a href="/Facturaciones" class="btn btn-info">Volver</a>
</div>

@endsection