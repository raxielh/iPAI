@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Municipios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('municipios.show_fields')
                    <a href="{!! route('municipios.index') !!}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
