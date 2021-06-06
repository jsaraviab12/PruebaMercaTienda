@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
<div class="container text-center">
  <h1 class="mb-0">MercaTienda</h1>
  <footer class="blockquote-footer">Productos </footer>
</div>
@stop

@section('content')
<a href="products/create" class="btn btn-primary mb-3">Crear Producto</a>


<div style="padding-top: 50ox;">
<table id="products" class="table table-dark table-striped mt-4" style="width:100%">
    <thead>    
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Imagen</th>
            <th scope="col">Opciones</th>
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
        <td>
        <form action="{{route ('products.destroy', $product->id)}}" method="POST">
        <a href="products/{{$product->id}}/edit" class="btn btn-warning">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
    </tr>

    @endforeach
    </tbody>
</table>
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#products').DataTable({
        "lengthMenu": [[3,5,10,50,-1],[3,5,10,50,"All"]]
    });
} );
</script>  
@stop