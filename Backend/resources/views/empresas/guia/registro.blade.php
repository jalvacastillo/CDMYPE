@extends('layout')

@section('titulo')
  Empresas
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Guia : Necesidad</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Empresas</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content" ng-controller="RegistroCtrl">
      <div class="container">
        <div class="page-content">

          <div class="row">
                <form ng-submit="submit()" method="post">
                        
                        
                        <p class="col-md-6 col-md-offset-3">Registro</p>
                        <p class="col-md-6 col-md-offset-3">F1</p>
                        <p class="col-md-6 col-md-offset-3">Hacer cita</p>

                        <div class="col-md-6 col-md-offset-3">
                            <a href="javascript:window.history.back();" class="btn btn-default"> <i class="fa fa-angle-left"></i> Volver</a>

                            <a href="{{ url('/guia/necesidad') }}" class="btn btn-primary pull-right">
                                Siguiente
                            </a>
                        </div>

                    </div>
                </form>              
          </div>

        </div>
      </div>
    </div>

@endsection