@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong class="">{{session('info')}}</strong>
</div>
    
@endif
    <div class="card">

        <div class="card-header">
            <a href="{{route('admin.categories.create')}}" class="btn btn-info">Agregar Categoría</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                  <thead class="">
                    <th class="">ID</th>
                    <th class="">Name</th>
                    <th class="" colspan="2"></th>                  
                    </thead>  
                <tbody class="">
                    @foreach ($categories as$category )
                    <tr class="">
                        <td class="">{{$category->id}}</td>
                        <td class="">{{$category->name}}</td>
                        <td class="" width='10px'>
                            <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td class="" width='10px'>
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>




@stop
