<div class="nav-tabs-custom" style="cursor: move;margin: 0.5em">
    <!-- Tabs within a box -->
    <ul class="nav nav-tabs pull-right ui-sortable-handle">
        <li class="active"><a href="#Entradas" data-toggle="tab" aria-expanded="true">Entradas</a></li>
        <li class=""><a href="#Salidas" data-toggle="tab" aria-expanded="true">Salidas</a></li>
        <li class=""><a href="#Traslados" data-toggle="tab" aria-expanded="true">Traslados</a></li>
        <li class=""><a href="#Perdidas" data-toggle="tab" aria-expanded="true">Perdidas</a></li>
        <li class="pull-left header"><i class="fa fa-inbox"></i> {!! $productos->descripcion !!}</li>
    </ul>
    <div class="tab-content no-padding">
        <div class="chart tab-pane active" style="background: #fff" id="Entradas">
           <div class="box-body no-padding">
                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#m_entrada">Registrar</a>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Cantidad</th>
                            <th>Lote</th>
                            <th>Factura</th>
                            <th>Cantidad dosis</th>
                            <th>Fecha Ingreso</th>
                            <th>Fecha Vencimiento</th>
                        </tr>
                        @foreach($entradas as $entrada)
                        <tr>
                            <td>{!! $entrada->cantidad !!}</td>
                            <td>{!! $entrada->lote !!}</td>
                            <td>{!! $entrada->factura !!}</td>
                            <td>{!! $entrada->cantidad_dosis !!}</td>
                            <td>{!! $entrada->fecha_ingreso !!}</td>
                            <td>{!! $entrada->fecha_vencimiento !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="chart tab-pane"  style="background: #fff" id="Salidas">
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
        <div class="chart tab-pane" style="background: #fff" id="Traslados">
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
        <div class="chart tab-pane"  style="background: #fff" id="Perdidas">
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
    </div>
</div>

<!-- Modal -->
<div id="m_entrada" class="modal fade" role="dialog" >
  <div class="modal-dialog" style="z-index: 99999">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registrar entrada</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            {!! Form::open(['route' => 'entrada']) !!}

            <div class="col-sm-6">
                {!! Form::label('cantidad', 'Cantidad:') !!}
                {!! Form::number('cantidad', null, ['class' => 'form-control','required' => 'true']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('lote', 'lote:') !!}
                {!! Form::text('lote', null, ['class' => 'form-control','required' => 'true']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('cantidad_dosis', 'Cantidad dosis:') !!}
                {!! Form::number('cantidad_dosis', null, ['class' => 'form-control','required' => 'true']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
                {!! Form::date('fecha_ingreso', null, ['class' => 'form-control','required' => 'true']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('factura', 'Factura:') !!}
                {!! Form::text('factura', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('fecha_vencimiento', 'Fecha vencimiento:') !!}
                {!! Form::date('fecha_vencimiento', null, ['class' => 'form-control','required' => 'true']) !!}
            </div>

            <input type="hidden" value="{!! $productos->id !!}" name="productos_id">

            <div class="col-sm-12" style="margin-top: 25px;text-align: right;">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
    </div>

  </div>
</div>

