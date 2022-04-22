<div>
<div class="card">

    <div class="card-header">
        <input wire:model='search' type="text" class="form-control" placeholder="Ingrese el nombre ó correo de un usuario">
    </div>

        @if ($users->count())
    

    <div class="card-body">
        <table class="table table-striped">
            <thead class="">
                <tr class="">
                    <th class="">ID</th>
                    <th class="">Nombre</th>
                    <th class="">Email</th>
                    <th class=""></th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($users as $user )
                    <tr class="">
                        <td class="">{{$user->id}}</td>
                        <td class="">{{$user->name}}</td>
                        <td class="">{{$user->email}}</td>
                        <td width='10px'class="">
                            <a class="btn btn-primary "href="{{route('admin.users.edit', $user)}}" >Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$users->links()}}
    </div>
    @else
        <div class="card-body">
            <strong>No hay registros...</strong>
        </div>
    @endif
</div>
</div>
