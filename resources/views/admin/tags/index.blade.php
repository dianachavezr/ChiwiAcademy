@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@can('admin.tags.create')
<a href="{{route('admin.tags.create')}}" class="btn btn-secondary float-right">Nueva Etiqueta</a>
@endcan

    <h1>Mostrar listado de la etiqueta</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>

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
                @foreach ($tags as$tag )
                <tr class="">
                    <td class="">{{$tag->id}}</td>
                    <td class="">{{$tag->name}}</td>
                    <td class="" width='10px'>
                       @can('admin.tags.edit')
                       <a href="{{route('admin.tags.edit', $tag)}}" class="btn btn-primary btn-sm">Editar</a>
                       @endcan
                    </td>
                    <td class="" width='10px'>
                       @can('admin.tags.destroy')
                       <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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
