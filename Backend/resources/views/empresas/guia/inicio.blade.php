@extends('layout')

@section('titulo')
  Empresas
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Guia</h2>
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
                            <label for="nombre"> * Nombre:</label>
                            <input type="text" class="form-control" ng-model="empresa.nombre" placeholder="Nombre"  autofocus />
                        </div>
                        <div class="form-group col-md-6 col-md-offset-3">
                            <label> Sector Economico:</label>
                            <select class="form-control" ng-model="empresa.sector_economico" placeholder="Sector">
                              <option value="Artesanias">Artesanias</option>
                              <option value="Agroindustrias Alimentaria">Agroindustrias Alimentaria</option>
                              <option value="Calzado">Calzado</option>
                              <option value="Comercio">Comercio</option>
                              <option value="Construcción">Construcción</option>
                              <option value="Química Farmaceutica">Química Farmaceutica</option>
                              <option value="Tecnología de Información y Comunicación">Tecnología</option>
                              <option value="Textiles y Confección">Textiles y Confección</option>
                              <option value="Turismo">Turismo</option>
                              <option value="Otros">Otros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-md-offset-3">
                            <label for="municipio"> Municipio:</label>
                            <input type="text" class="form-control" ng-model="empresa.municipio" placeholder="Municipio" />
                        </div>
                        <div class="form-group col-md-6 col-md-offset-3">
                            <label for="venta_nacional"> Total de Ventas:</label>
                            <input type="number" class="form-control" name="venta_nacional" placeholder="0.0" />
                        </div>

                       <div class="form-group col-md-6 col-md-offset-3">
                            <label for="nombre"> Empleados Hombres</label>
                            <input type="number" class="form-control" name="empleados_hf" placeholder="Fijos" />
                            <input type="number" class="form-control" name="empleo_ht" placeholder="Temporales" />
                       </div>
                       <div class="form-group col-md-6 col-md-offset-3">
                            <label for="nombre"> Empleados Mujeres</label>
                            <input type="number" class="form-control" name="empleo_mf" placeholder="Fijos" />
                            <input type="number" class="form-control" name="empleo_mt" placeholder="Temporales" />
                       </div>

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