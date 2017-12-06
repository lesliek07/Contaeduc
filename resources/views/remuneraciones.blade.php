@extends('layouts.app')
@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="interest_tabs">
    <!--top level tabs-->
  <li><a href="#trabajadores" data-toggle="tab">Datos de trabajadores</a></li>
  <li><a href="#brands" data-toggle="tab">Haberes</a></li>
  <li><a href="#media" data-toggle="tab">Descuentos</a></li>
  <li><a href="#music" data-toggle="tab">Reportes</a></li>

</ul>

<!--top level tab content-->
<div class="tab-content">
    <!--datos trabajadores tab menu-->
    <div id="trabajadores" class="tab-pane">
        <ul class="nav nav-tabs" id="trabajadores_tabs">
            <li><a href="#form_personales" data-toggle="tab">Datos Personales</a></li>
            <li><a href="#form_contractuales" data-toggle="tab">Datos Contractuales</a></li>
            <li><a href="#form_previsionales" data-toggle="tab">Datos Previsionales</a></li>
        </ul>
    </div>
    
    <!--brands tab menu-->
    <div id="brands" class="tab-pane">
        <ul class="nav nav-tabs" id="brands_tabs">
            <li><a href="#brands_popular" data-toggle="tab">Haberes Habituales o Fijos</a></li>
            <li><a href="#brands_unique" data-toggle="tab">Haberes Ocasionales o Variables</a></li>
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
  
    <!--music tab menu-->
    <div id="music" class="tab-pane">
        <ul class="nav nav-tabs" id="music_tabs">
            <li><a href="#music_popular" data-toggle="tab">Libro de Remuneraciones</a></li>
            <li><a href="#music_unique" data-toggle="tab">Liquidaciones de Sueldos</a></li>
            <li><a href="#music_unique" data-toggle="tab">Planilla de Imposiciones</a></li>
        </ul>
    </div>
  
    <!--public_figures tab menu-->
    <div id="public_figures" class="tab-pane">
        <ul class="nav nav-tabs" id="public_figures_tabs">
            <li><a href="#public_figures_popular" data-toggle="tab">Popular</a></li>
            <li><a href="#public_figures_unique" data-toggle="tab">Unique</a></li>
        </ul>
    </div>
  
    <!--sports tab menu-->
    <div id="sports" class="tab-pane">
        <ul class="nav nav-tabs" id="sports_tabs">
            <li><a href="#sports_popular" data-toggle="tab">Popular</a></li>
            <li><a href="#sports_unique" data-toggle="tab">Unique</a></li>
        </ul>
    </div>
  
  <!--tv/movies tab menu-->
    <div id="tv_movies" class="tab-pane">
        <ul class="nav nav-tabs" id="tv_movies_tabs">
            <li><a href="#tv_movies_popular" data-toggle="tab">Popular</a></li>
            <li><a href="#tv_movies_unique" data-toggle="tab">Unique</a></li>
        </ul>
    </div>
  
  
  
 </div>
  
    <!--datos trabajadores tab content-->
    <div class="tab-content">
        <div id="form_personales" class="tab-pane">
            <i></i>
            @include('contabilidad.agregar_empresa')
           
        </div>
        <div id="form_contractuales" class="tab-pane">
            <i>Formulario datos contractuales</i>
            @include('contabilidad.agregar_cuentas')
            
        </div>
        <div id="form_previsionales" class="tab-pane">
            <i>Formulario datos previsionales</i>
            @include('contabilidad.agregar_cliente')
            
        </div>
    </div>

    <!--brands tab content-->
    <div class="tab-content">
        <div id="brands_popular" class="tab-pane">
            <i>brands_popular interests go here</i>
        </div>
        <div id="brands_unique" class="tab-pane">
            <i>brands_unique interests go here</i>
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
