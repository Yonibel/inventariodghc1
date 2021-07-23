@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Agregar al relevamiento</h1>
@stop

@section('content')
    <form action="/relevamientos" method="POST">
    @csrf
    <div class ="mb-3">
       <label for="" class="form-label">IP</label>
       <input  id="ip" name="ip" type="text" class="form-control" tabindex="1">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">SECTOR</label>
       <input  id="sector" name="sector" type="text" class="form-control" tabindex="2">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">USUARIO</label>
       <input  id="usuario" name="usuario" type="text" class="form-control" tabindex="3">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">PC</label>
       <input  id="pc" name="pc" type="text" class="form-control" tabindex="4">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">SERIAL</label>
       <input  id="serial" name="serial" type="text" class="form-control" tabindex="5">
    </div>
    <div class ="mb-3">
       <label for="" class="form-label">DISPONIBLE</label>
       <input  id="disponible" name="disponible" type="text" class="form-control" tabindex="6">
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