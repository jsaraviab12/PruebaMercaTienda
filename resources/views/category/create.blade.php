@extends('layouts.based')

@section('content')
<h2>Crear Categoria</h2>
<form action="/categories" method="POST">
@csrf
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form.control" tabindex="1">
        @error('name')
        <br>
        <p>{{$message}}</p>
        <br>
        @enderror
    </div>
    <a href="/categories" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection