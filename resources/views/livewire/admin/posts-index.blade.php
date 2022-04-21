<div class="card">

    <div class="card-header">
        <input wire:model='search' class='form-control'type="text" placeholder="Ingrese el nombre de un post">
    </div>

@if ($posts->count())
    


   <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="">ID</th>
                <th class="">Name</th>
                <th class=""colspan='2'></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr class="">
                    <td class="">{{$post->id}}</td>
                    <td class="">{{$post->name}}</td>

                    <td width='10px'>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}" >Editar</a>
                    </td>
                    <td width='10px'>
                        <form class="" action="{{route('admin.posts.destroy', $post)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        
                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        
                        </form>
                        
                        </td>    

                </tr>
            @endforeach
        </tbody>
    </table>

   </div>

   <div class="card-footer">
    {{$posts->links()}}

   </div>
   @else
   <div class="card-body">
   <strong>No hay registros...</strong>
</div>
   @endif

</div>
