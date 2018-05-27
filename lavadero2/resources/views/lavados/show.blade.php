@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Tipol_id {{$data["datos"]->tipol_id}}</h5>
  <p>Tipov_id {{$data["datos"]->tipov_id}}</p>
  <p>Costo {{$data["datos"]->costo}}</p>
  <a href="/Lavados" class="btn btn-info">Volver</a>
</div>

@endsection