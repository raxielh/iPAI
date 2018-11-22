<table class="table table-responsive" id="municipios-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Departamentos</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($municipios as $municipios)
        <tr>
            <td>{!! $municipios->descripcion !!}</td>
            <td>{!! $municipios->departamento !!}</td>
            <td>
                {!! Form::open(['route' => ['municipios.destroy', $municipios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('municipios.show', [$municipios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('municipios.edit', [$municipios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>