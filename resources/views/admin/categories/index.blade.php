@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@can('admin.categories.create')
<a href="{{route('admin.categories.create')}}" class="btn btn-secondary float-right">Agregar Categoría</a>
@endcan

    <h1>Lista de categorías</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong class="">{{session('info')}}</strong>
</div>
    
@endif
    <div class="card">

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
                            @can('admin.categories.edit')
                            <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a>
                            @endcan
                        </td>
                        <td class="" width='10px'>
                           @can('admin.categories.destroy')
                           <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                           @endcan
                        </td>
                        
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>




@stop
