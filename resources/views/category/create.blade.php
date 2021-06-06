@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
<div class="container text-center">
  <h1 class="mb-0">MercaTienda</h1>
  <footer class="blockquote-footer">Crear Categoria </footer>
</div>
@stop

@section('content')
<div class="container" style="margin:0 auto; position:relative;">
<form action="/categories" method="POST">
@csrf
    <div class="form-group mb-2">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" tabindex="1">
        @error('name')
        <br>
        <p>{{$message}}</p>
        <br>
        @enderror
    </div>
    <div class="form-group  mb-2">
    <a href="/categories" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
