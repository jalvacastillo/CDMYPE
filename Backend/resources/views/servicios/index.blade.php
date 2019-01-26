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
                
                @if($diagnosticos->count() > 1)
                <div class="row">
                <h2 class="classic-title text-center"><span>Diagnósticos</span></h2>
                  
                 @foreach ($diagnosticos as $diagnostico)
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <h1>{{$diagnostico->nombre}}</h1>
                     <p>{{$diagnostico->descripcion}}</p>
                     <a href="{{ route('diagnostico', str_slug($diagnostico->nombre)) }}" class="btn btn-primary btn-block">Realizar</a>
                 </div>
                 @endforeach

                </div>
                @endif

            </div>
        </div>
    </div>
    
    @include('home.accion')

@endsection