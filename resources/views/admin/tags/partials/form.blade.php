<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la etiqueta']) !!}
</div>

@error('name')
    <small class="text-dange">{{$message}}</small>
@enderror


<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el slug de la etiqueta', 'readonly']) !!}
</div>

@error('slug')
    <small class="text-dange">{{$message}}</small>
@enderror

{{--      
    <label for="" class="">Color:</label>
    <select name="color" id="" class="form-control">
        <option value="red" class="">Color rojo</option>
        <option value="green" class="">Color verde</option>
        <option value="blue" class="" selected>Color azul</option>
    </select>
--}}
 <div class="form-group">
 {!! Form::label('color', 'Color:') !!}

    {!! Form::select('color', [$colors], null, ['class'=>'form-control']) !!}

    @error('color')
    <small class="text-dange">{{$message}}</small>
@enderror
</div> 