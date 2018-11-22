<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamentos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamentos_id', 'Departamentos:') !!}
    {!! Form::select('departamentos_id',$Departamentos, null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('municipios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
