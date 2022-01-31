<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de etiqueta']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de etiqueta', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="">Color:</label>
    <select name="color" id="" class="form-control">
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azúl</option>
    </select> --}}

    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    @error('color')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
