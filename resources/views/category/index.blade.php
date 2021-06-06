@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<div class="container text-center">
  <h1 class="mb-0">MercaTienda</h1>
  <footer class="blockquote-footer">Categorias </footer>
</div>
@stop

@section('content')
<a href="categories/create" class="btn btn-primary mb-3">Crear</a>


<table id="categories" class="table table-dark table-striped">
    <thead> 
    <tr>
        <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        
        <td>
        <form action="{{route ('categories.destroy', $category->id)}}" method="POST">
        <a href="categories/{{$category->id}}/edit" class="btn btn-warning">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
       
        
    </tr>
    @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#categories').DataTable({
        "lengthMenu": [[3,5,10,50,-1],[3,5,10,50,"All"]]
    }
    );
} );
</script>
@stop