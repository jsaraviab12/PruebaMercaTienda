@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
<div class="container text-center">
    <h1 class="mb-0">MercaTienda</h1>
    <footer class="blockquote-footer">Crear Producto </footer>
</div>
@stop

@section('content')
<div class="container" style="margin:0 auto; position:relative;">
    <div>
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" tabindex="1" required>
            </div>
            <div>
                <label for="id_cartegory" class="form-label">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>


            </div>
            <div>
                <label for="" class="form-label">Precio</label>
                <input type="number" name="price" id="price" class="form-control" tabindex="1" required>
            </div>
            <div>
                <label for="" class="form-label">Cantidad</label>
                <input type="number" name="count" id="count" class="form-control" tabindex="1" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Imagen</label>
                <input type="file" id="image" name="image" class="form-control " placeholder="image" required>
            </div>
            <a href="/products" class="btn btn-danger" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>
    @endsection

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @endsection