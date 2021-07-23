@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar Contenido</h1>
@stop

@section('content')
    <form action="/relevamientos/{{$relevamiento->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class ="mb-3">
       <label for="" class="form-label">IP</label>
       <input  id="ip" name="ip" type="text" class="form-control" value="{{$relevamiento->ip}}">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">SECTOR</label>
       <input  id="sector" name="sector" type="text" class="form-control" value="{{$relevamiento->sector}}">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">USUARIO</label>
       <input  id="usuario" name="usuario" type="text" class="form-control" value="{{$relevamiento->usuario}}">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">PC</label>
       <input  id="pc" name="pc" type="text" class="form-control" value="{{$relevamiento->pc}}">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">SERIAL</label>
       <input  id="serial" name="serial" type="text" class="form-control" value="{{$relevamiento->serial}}">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">DISPONIBLE</label>
       <input  id="disponible" name="disponible" type="text" class="form-control" value="{{$relevamiento->disponible}}">
    </div>
    <a href="/relevamientos" class="btn btn-secondary" tabindex="7">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="8">GUARDAR</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop