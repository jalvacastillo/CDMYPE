@extends('layout')

@section('titulo')
  Servicios
@endsection

@section('content')
    
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Nuestros Servicios</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Servicios</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="page-content">

                @include('servicios.partials.asesorias')

                <hr class="hr1" style="margin:30px;" id="proceso"></hr>
                
                @include('servicios.partials.atencion')
                
                <hr class="hr1" style="margin:30px;" id="requisitos"></hr>

                @include('servicios.partials.requisitos')

            </div>
        </div>
    </div>
    
    @include('home.accion')

@endsection