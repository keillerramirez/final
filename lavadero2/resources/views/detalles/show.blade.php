@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Facturaciones_id {{$data["datos"]->facturaciones_id}}</h5>
  <p>Tipop_id {{$data["datos"]->tipop_id}}</p>
  <a href="/Detalles" class="btn btn-info">Volver</a>
</div>

@endsection