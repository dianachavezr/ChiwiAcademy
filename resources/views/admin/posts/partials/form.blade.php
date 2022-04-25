<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese el nombre del post']) !!}

        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la categoría', 'readonly']) !!}


    @error('slug')
    <span class="text-danger">{{$message}}</span>
      @enderror

</div>


</div>
    <div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}

    @error('category_id')
    <small class="text-danger">{{$message}}</small>
@enderror
</div>

    <div class="form-group">
        <p class="font-weight-bold">Etiquetas</p>
        @foreach ($tags as $tag )
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>

        @endforeach



        @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Estado</p>

        <label class="">
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>

        <label class="">
            {!! Form::radio('status', 2) !!}
           Publicado
        </label>



        @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
    @enderror

    </div>

    <div class="row mb-3">
        <div class="col">
           <div class="image-wrapper ">
            @isset ($post->image)
            <img id='picture'src="{{Storage::url($post->image->url)}}" alt="" class="">
            @else
            <img id='picture'src="https://cdn.pixabay.com/photo/2017/02/19/15/28/winter-2080070_960_720.jpg" alt="" class="">
            @endisset
           </div>

        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen del evento') !!}
                {!! Form::file('file', ['class'=>'form-control-file', 'accept'=>'image/*']) !!}
                @error('file')
                <span class="text-danger">{{message}}</span>
             @enderror

            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eum cupiditate maxime sequi soluta. Animi suscipit dicta voluptatem, officia, ea pariatur laudantium libero eum inventore, optio nulla provident incidunt delectus.</p>
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('extract', 'Título del evento:') !!}
        {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

        @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Descripción del evento:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

        @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
    </div>
