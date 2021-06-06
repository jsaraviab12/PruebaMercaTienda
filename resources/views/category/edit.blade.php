@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
<div class="container text-center">
  <h1 class="mb-0">MercaTienda</h1>
  <footer class="blockquote-footer">Editar Categoria {{$category->id}} </footer>
</div>
@stop

@section('content')
<div class="container" style="margin:0 auto; position:relative;">
<form action="/categories/{{$category->id}}" method="POST">
@method('PUT')
@csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" tabindex="1" value="{{$category->name}}">
    </div>
    <a href="/categories" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
