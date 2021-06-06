@extends('layouts.based')

@section('content')
<a href="products/create" class="btn btn-primary">Crear Producto</a>
<table class="table table-dark table-striped mt-4">
    <thead>    
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Imagen</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->category->name}}</td>
        <td>{{$product->precio}}</td>
        <td>{{$product->cantidad}}</td>
        <td><img src="/images/{{ $product->image }}" width="100px"></td>
        <form action="{{route ('products.destroy',$product->id)}}" method='POST'>
        @method('DELETE')
        @csrf
        <td><a class="btn btn-info" href="products/{{$product->id}}/edit">Editar</a></td>
        <td><button class="btn btn-danger">Eliminar</button></td>
        </form>
    </tr>

    @endforeach
    </tbody>
</table>
@endsection