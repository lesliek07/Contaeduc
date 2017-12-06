@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="interest_tabs">
    <!--top level tabs-->
        <li><a href="#all" data-toggle="tab">Emisión de Documentos Electrónicos</a></li>
        <li><a href="#brands" data-toggle="tab">Consulta DTE</a></li>
    </ul>

<!--top level tab content-->
<div class="tab-content">
    <!--all tab menu-->
    <div id="all" class="tab-pane">
        <ul class="nav nav-tabs" id="all_tabs">
            <li><a href="#all_popular" data-toggle="tab">Factura Electrónica</a></li>
            <li><a href="#all_unique" data-toggle="tab">Factura no Afecta o Excenta Electrónica</a></li>
            <li><a href="#all_popular" data-toggle="tab">Nota Crédito Electrónica</a></li>
            <li><a href="#all_unique" data-toggle="tab">Nota Débito Electrónica</a></li>
            <li><a href="#all_popular" data-toggle="tab">Guía Despacho Electrónica</a></li>
            <li><a href="#all_unique" data-toggle="tab">Factura Compra Electrónica</a></li>
        </ul>
    </div>
    
    <!--brands tab menu-->
    <div id="brands" class="tab-pane">
        <ul class="nav nav-tabs" id="brands_tabs">
            <li><a href="#brands_popular" data-toggle="tab">Consulta DTE</a></li>
        </ul>
    </div>

 
 </div>
  
    <!--all tab content-->
    <div class="tab-content">
        <div id="all_popular" class="tab-pane">
            <i>Factura Electrónica</i>
        </div>
        <div id="all_unique" class="tab-pane">
            <i>Factura no Afecta o Excenta Electrónica</i>
        </div>
        <div id="all_popular" class="tab-pane">
            <i>Nota Crédito Electrónica</i>
        </div>
        <div id="all_unique" class="tab-pane">
            <i>Nota Débito Electrónica</i>
        </div>
        <div id="all_popular" class="tab-pane">
            <i>Guía Despacho Electrónica</i>
        </div>
        <div id="all_unique" class="tab-pane">
            <i>Factura Compra Electrónica</i>
        </div>
    </div>
    <!--brands tab content-->
    <div class="tab-content">
        <div id="brands_popular" class="tab-pane">
            <i>Consulta DTE</i>
        </div>
    </div>
           
</div>
@endsection