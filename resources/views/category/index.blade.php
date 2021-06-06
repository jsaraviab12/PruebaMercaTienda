@extends('layouts.based')

@section('content')
<a href="categories/create" class="btn btn-primary">Crear Categoria</a>
<table class="table table-dark table-striped mt-4">
    <thead>    
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <form action="{{route ('categories.destroy',$category->id)}}" method='POST'>
        @method('DELETE')
        @csrf
        <td><a class="btn btn-info" href="categories/{{$category->id}}/edit">Editar</a></td>
        <td><button class="btn btn-danger">Eliminar</button></td>
        </form>
    </tr>

    @endforeach
    </tbody>
</table>
@endsection