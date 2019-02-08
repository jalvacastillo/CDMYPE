@extends('layout')

@section('titulo')
  Contactos
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Contactanos</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Contactos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div id="content">
        <div class="container" ng-controller="ContactosCtrl">
            <div class="row">
                @include('contactos.contactos')
                @include('contactos.informacion')
            </div>
        </div>
    </div>

    {{-- @include('contactos.map') --}}
    <div class="container-fluid">
        <a target="_blank" href="https://www.google.com/maps/place/CDMYPE+UNICAES/@13.8158314,-88.8631017,15.69z/data=!4m5!3m4!1s0x8f635955b0a7bc4b:0x27c3000f0bd8a794!8m2!3d13.8150563!4d-88.862856"><div class="map"> </div></a>
    </div>

@endsection