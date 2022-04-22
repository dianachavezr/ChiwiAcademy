@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="{{route('admin.roles.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class=" table table-striped">
            <thead class="">
                <tr class="">
                    <th class="">ID</th>
                    <th class="">Rol</th>
                    <th class=""colspan='2'></th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($roles as $role )
                       <tr class="">
                        <td class="">{{$role->id}}</td>
                        <td class="">{{$role->name}}</td>
                        <td width='10px' class="">
                            <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td width='10px' class="">
                            <form action="{{route('admin.roles.destroy', $role)}}" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>

                            </form>
                            
                        </td>       
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop