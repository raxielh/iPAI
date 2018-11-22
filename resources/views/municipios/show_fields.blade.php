<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $municipios->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $municipios->descripcion !!}</p>
</div>

<!-- Departamentos Id Field -->
<div class="form-group">
    {!! Form::label('departamentos_id', 'Departamentos Id:') !!}
    <p>{!! $municipios->departamentos_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $municipios->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $municipios->updated_at !!}</p>
</div>

