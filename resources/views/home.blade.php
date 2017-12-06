@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Seleccione el módulo con el que desea trabajar</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h1>
                                Módulos Disponibles
                            </h1>
                        </div>
                        <div class="modulos-flex">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <a href="{{ url('/contabilidad') }}">
                                    <div class="container">
                                        <i aria-hidden="true" class="fa fa-calculator fa-2x" title="Contabilidad">
                                        </i>
                                        <h3>
                                            CONTABILIDAD
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <a href="{{ url('/remuneraciones') }}">
                                    <div class="container">
                                        <i aria-hidden="true" class="fa fa-money fa-2x" title="Remuneraciones">
                                        </i>
                                        <h3>
                                            REMUNERACIONES
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <a href="{{ url('/facturacion') }}">
                                    <div class="container">
                                        <i aria-hidden="true" class="fa fa-file-text-o fa-2x" title="Facturación Electrónica">
                                        </i>
                                        <h3>
                                            FACTURACION ELECTRÓNICA
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
