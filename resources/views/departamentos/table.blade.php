<table class="table table-responsive" id="departamentos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($departamentos as $departamentos)
        <tr>
            <td>{!! $departamentos->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['departamentos.destroy', $departamentos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('departamentos.show', [$departamentos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('departamentos.edit', [$departamentos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>