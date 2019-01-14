@extends('layout')

@section('titulo')
  Clientes
@endsection

@section('content')

    @include('clientes.title')

    <div id="content">
      <div class="container">
        <div class="page-content">

          <div class="row">
              @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
              @else
                <form name="form" method="post">
                    {!! csrf_field() !!}
                    <div class="col-xs-12">
                        <div class="page-header"> <h1>Empresa</h1> </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label for="nombre"> * Nombre:</label>
                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label for="nombre"> NIT:</label>
                                            <input type="text" class="form-control" name="nit" placeholder="Nit"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="form-group">
                                            <label for="nombre"> IVA:</label>
                                            <input type="text" class="form-control" name="registro_iva" placeholder="Registro de iva" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label> Sector Economico:</label>
                                            <select class="form-control" name="sector_economico" placeholder="Sector">
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
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label for="actividad"> Actividad Economica:</label>
                                            <input type="text" class="form-control" name="actividad" placeholder="A que se dedica su empresa"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label for="municipio"> Municipio:</label>
                                            <input type="text" class="form-control" name="municipio" placeholder="Municipio" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label for="departamento"> Departamento:</label>
                                            <input type="text" class="form-control" name="departamento" placeholder="Municipio" />
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="page-header"> <h1>Empresario</h1> </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                   <div class="col-xs-12 col-sm-4">
                                       <div class="form-group">
                                           <label for="nombre"> * Nombre:</label>
                                           <div class="controls">
                                               <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus />
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xs-12 col-sm-4">
                                       <div class="form-group">
                                           <label for="apellido"> * Apellido:</label>
                                           <div class="controls">
                                               <input type="text" class="form-control" name="apellido" placeholder="Nombre" required/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xs-12 col-sm-4">
                                       <div class="form-group">
                                           <label for="nombre"> DUI:</label>
                                           <div class="controls">
                                               <input type="text" class="form-control" name="dui" placeholder="XXXXXXX-X" />
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xs-12 col-sm-2">
                                       <div class="form-group">
                                           <label for="telefono"> Edad:</label>
                                           <div class="controls">
                                               <input type="number" class="form-control" name="edad" placeholder="edad"/>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xs-12 col-sm-2">
                                       <div class="form-group">
                                           <label for="telefono"> Sexo:</label>
                                           <div class="controls">
                                               <label class="radio-inline"><input type="radio" name="sexo" value="Hombre">Hombre</label>
                                               <label class="radio-inline"><input type="radio" name="sexo" value="Mujer">Mujer</label>
                                           </div>
                                       </div>
                                   </div>                   
                                   <div class="col-xs-12 col-sm-4">
                                       <div class="form-group">
                                           <label for="telefono"> Teléfono:</label>
                                           <div class="controls">
                                               <input type="tel" class="form-control" name="telefono" placeholder="XXXX-XXXX" />
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xs-12 col-sm-4">
                                       <div class="form-group">
                                           <label for="correo"> Correo:</label>
                                           <div class="controls">
                                               <input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com" />
                                           </div>
                                       </div>
                                   </div>
                            </div>
                        </div>
                                              <div class="page-header"> <h1>Indicadores</h1> </div>
                        <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="col-xs-12">
                                  <div class="form-group">
                                      <label for="venta_nacional"> Venta Nacional:</label>
                                      <div class="controls">
                                          <input type="number" class="form-control" name="venta_nacional" placeholder="0.0" />
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xs-6 text-center">
                                   <div class="form-group">
                                       <label for="nombre"> Empleados Hombres</label>
                                   </div>
                              </div>
                              <div class="col-xs-6 text-center">
                                   <div class="form-group">
                                       <label for="nombre"> Empleados Mujeres</label>
                                   </div>
                              </div>
                             <div class="col-xs-12 col-sm-3">
                                  <div class="form-group">
                                      <label for="empleados_hf"> Fijos:</label>
                                      <div class="controls">
                                          <input type="number" class="form-control" name="empleados_hf" placeholder="0.0" />
                                      </div>
                                  </div>
                              </div>
                             <div class="col-xs-12 col-sm-3">
                                  <div class="form-group">
                                      <label for="empleo_ht"> Temporales:</label>
                                      <div class="controls">
                                          <input type="number" class="form-control" name="empleo_ht" placeholder="0.0" />
                                      </div>
                                  </div>
                              </div>
                             <div class="col-xs-12 col-sm-3">
                                  <div class="form-group">
                                      <label for="empleo_mf"> Fijos:</label>
                                      <div class="controls">
                                          <input type="number" class="form-control" name="empleo_mf" placeholder="0.0" />
                                      </div>
                                  </div>
                              </div>
                             <div class="col-xs-12 col-sm-3">
                                  <div class="form-group">
                                      <label for="empleo_mt"> Temporales:</label>
                                      <div class="controls">
                                          <input type="number" class="form-control" name="empleo_mt" placeholder="0.0" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>

                        <div class="panel-footer">
                            <a href="javascript:window.history.back();" class="btn btn-default"> <i class="fa fa-angle-left"></i> Volver</a>

                            <button class="btn btn-primary pull-right">
                                Guardar
                            </button>
                        </div>

                    </div>
                </form>
              @endif
              
          </div>

        </div>
      </div>
    </div>

@endsection