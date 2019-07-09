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
                        <div class="form-group col-md-6 col-md-offset-3">
                            <label> Necesidad:</label>
                            <select class="form-control" ng-model="empresa.sector_economico" placeholder="Sector">
                              <option value="Artesanias">Incremento en ventas</option>
                              <option value="Agroindustrias Alimentaria">Uso de TICS</option>
                              <option value="Calzado">Financiamiento</option>
                            </select>
                        </div>
                        
                        <h3 class="col-md-6 col-md-offset-3">Realizar diagnosticos</h3>
                        <h3 class="col-md-6 col-md-offset-3">Generar resultado</h3>
                        <h3 class="col-md-6 col-md-offset-3">Mostrar acciones y servicios
                        <br>
                        <br>
                        <br>
                        </h3>
                        


                        <div class="col-md-6 col-md-offset-3">
                            <a href="javascript:window.history.back();" class="btn btn-default"> <i class="fa fa-angle-left"></i> Volver</a>

                            <a href="{{ url('/guia/registro') }}" class="btn btn-primary pull-right">
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