@extends('layouts.based')

@section('content')
<h2>Editar Categoria</h2>
<form action="/categories/{{$category->id}}" method="POST">
@method('PUT')
@csrf
    <div>
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form.control" tabindex="1" value="{{$category->name}}">
    </div>
    <a href="/categories" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection