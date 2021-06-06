@extends('layouts.based')

@section('content')
<h2>Crear Producto</h2>
<form action="/products" method="POST" enctype="multipart/form-data">
@csrf
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form.control" tabindex="1" required>
    </div>
    <div>
        <label for="id_cartegory" class="form-label">Categoria</label>
        <select class="form-control"name="category" id="category" >
                @foreach($categories as $category)
                <option values="{{$category->id}}">{{$category->name}}{{$category->id}}</option>
                @endforeach
        </select>
        
        
    </div>
    <div>
        <label for="" class="form-label">Precio</label>
        <input type="number" name="price" id="price" class="form.control" tabindex="1"  required>
    </div>
    <div>
        <label for="" class="form-label">Cantidad</label>
        <input type="number" name="count" id="count" class="form.control" tabindex="1"  required>
    </div>
    <div>
        <label for="" class="form-label">Imagen</label>
        <input type="file" id="image" name="image" class="form-control" placeholder="image"  required> 
    </div>
    <a href="/products" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection