@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="interest_tabs">
    <!--top level tabs-->
  <li><a href="#maestro" data-toggle="tab">Maestro</a></li>
  <li><a href="#movimientos" data-toggle="tab">Movimientos</a></li>
  <li><a href="#media" data-toggle="tab">Reportes</a></li>
</ul>

<!--top level tab content-->
<div class="tab-content">
    <!--maestro tab menu-->
    <div id="maestro" class="tab-pane">
        <ul class="nav nav-tabs" id="trabajadores_tabs">
            <li><a href="#empresas" data-toggle="tab">Ingreso Empresas</a></li>
            <li><a href="#cuentas" data-toggle="tab">Plan de Cuentas</a></li>
            <li><a href="#clientes" data-toggle="tab">Información Clientes</a></li>
            <li><a href="#proveedores_acreedores" data-toggle="tab">Información Proveedores y Acreedores</a></li>
        </ul>
    </div>
    
    <!--movimientos tab menu-->
    <div id="movimientos" class="tab-pane">
        <ul class="nav nav-tabs" id="brands_tabs">
            <li><a href="#traspaso" data-toggle="tab">Traspaso</a></li>
            <li><a href="#ventas" data-toggle="tab">Ventas</a></li>
            <li><a href="#compras" data-toggle="tab">Compras</a></li>
            <li><a href="#prod_serv" data-toggle="tab">Productos y/o Servicios</a></li>
        </ul>
        </ul>
    </div>
  
    <!--media tab menu-->
    <div id="media" class="tab-pane">
        <ul class="nav nav-tabs" id="media_tabs">
            <li><a href="#media_popular" data-toggle="tab">Descuentos Legales</a></li>
            <li><a href="#media_unique" data-toggle="tab">Descuentos Judiciales</a></li>
            <li><a href="#media_popular" data-toggle="tab">Descuentos Voluntarios</a></li>
        </ul>
    </div>
  
  
 </div>
  
    <!--maestro tab content-->
    <div class="tab-content">
        <div id="empresas" class="tab-pane">
            @include('contabilidad.agregar_empresa')
        </div>
        <div id="cuentas" class="tab-pane">
    
           @include('contabilidad.agregar_cuentas')
        </div>
        <div id="clientes" class="tab-pane">

            @include('contabilidad.agregar_cliente')
        </div>
        <div id="proveedores_acreedores" class="tab-pane">

            @include('contabilidad.agregar_proveedores')
        </div>

    </div>

    <!--movimientos tab content-->
    <div class="tab-content">
        <div id="traspaso" class="tab-pane">
            @include('contabilidad.traspaso')
        </div>
        <div id="ventas" class="tab-pane">
            <i>brands_unique interests go here</i>
        </div>
        <div id="compras" class="tab-pane">
            <i>brands_popular interests go here</i>
        </div>
        <div id="prod_serv" class="tab-pane">
            @include('contabilidad.prod_serv')
        </div>
    </div>

    <!--media tab content-->
    <div class="tab-content">
        <div id="media_popular" class="tab-pane">
            <i>media_popular interests go here</i>
        </div>
        <div id="media_unique" class="tab-pane">
            <i>media_unique interests go here</i>
        </div>
    </div>

    <!--music tab content-->
    <div class="tab-content">
        <div id="music_popular" class="tab-pane">
            <i>music_popular interests go here</i>
        </div>
        <div id="music_unique" class="tab-pane">
            <i>music_unique interests go here</i>
        </div>
    </div>

    <!--public_figures tab content-->
    <div class="tab-content">
        <div id="public_figures_popular" class="tab-pane">
            <i>public_figures_popular interests go here</i>
        </div>
        <div id="public_figures_unique" class="tab-pane">
            <i>public_figures_unique interests go here</i>
        </div>
    </div>

    <!--sports tab content-->
    <div class="tab-content">
        <div id="sports_popular" class="tab-pane">
            <i>sports_popular interests go here</i>
        </div>
        <div id="sports_unique" class="tab-pane">
            <i>sports_unique interests go here</i>
        </div>
    </div>

    <!--tv_movies tab content-->
    <div class="tab-content">
        <div id="tv_movies_popular" class="tab-pane">
            <i>tv_movies_popular interests go here</i>
        </div>
        <div id="tv_movies_unique" class="tab-pane">
            <i>tv_movies_unique interests go here</i>
        </div>
    </div>

</div>
</div>

        
@endsection
