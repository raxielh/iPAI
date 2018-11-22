<table class="table table-responsive" id="categorias-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categorias)
        <tr>
            <td>{!! $categorias->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['categorias.destroy', $categorias->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categorias.show', [$categorias->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categorias.edit', [$categorias->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>