@extends('layouts.app')

@section('content')
<div class="container">  
  <h3>{{$data["titulo"]}}</h3>
  <h5>Descripcion {{$data["datos"]->descripcion}}</h5>
  <a href="/Tipol" class="btn btn-info">Volver</a>
</div>

@endsection