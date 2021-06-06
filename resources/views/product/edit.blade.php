@extends('layouts.based')

@section('content')
<h2>Crear Producto</h2>
<form action="/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form.control" tabindex="1" value="{{$product->name}}">
    </div>
    <div>
        <label for="id_cartegory" class="form-label">Categoria</label>
        <select class="form-control"name="category" id="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->id}}</option>
                @endforeach
        </select>
        
        
    </div>
    <div>
        <label for="" class="form-label">Precio</label>
        <input type="text" name="price" id="price" class="form.control" tabindex="1" value="{{$product->precio}}">
    </div>
    <div>
        <label for="" class="form-label">Cantidad</label>
        <input type="text" name="count" id="count" class="form.control" tabindex="1"value="{{$product->cantidad}}">
    </div>
    <div>
        <label for="" class="form-label">Imagen</label>
        <input type="file" id="image" name="image" class="form-control" placeholder="image" value="{{$product->image}}">
    </div>
    <a href="/products" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection