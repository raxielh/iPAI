<div class="row">
    <div class="col-md-2">
        <!-- Id Field -->
        <div class="form-group">
            {!! Form::label('id', 'Id:') !!}
            <p>{!! $productos->id !!}</p>
        </div>

        <!-- Descripcion Field -->
        <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion:') !!}
            <p>{!! $productos->descripcion !!}</p>
        </div>

        <!-- Categorias Id Field -->
        <div class="form-group">
            {!! Form::label('categorias_id', 'Categorias Id:') !!}
            <p>{!! $productos->categorias_id !!}</p>
        </div>

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $productos->created_at !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $productos->updated_at !!}</p>
        </div>
    </div>
    <div class="col-md-5">
        <h5>Entradas</h5>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Cantidad</th>
                            <th>Lote</th>
                            <th>Cantidad dosis</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Vencimiento</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="col-md-5">
        <h5>Salidas</h5>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Cantidad</th>
                            <th>Lote</th>
                            <th>Cantidad dosis</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Vencimiento</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <div class="col-md-5">
        <h5>Traslados</h5>
    </div>
    <div class="col-md-5">
        <h5>Perdidas</h5>
    </div>
</div>

