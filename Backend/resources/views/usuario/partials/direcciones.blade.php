<div class="row">
    
    <div class="col-md-6 mb-4" ng-repeat="direccion in usuario.direcciones">
        <div class="card">
            <div class="card-body text-left">

                <h5 class="card-title" ng-bind="direccion.nombre + ' ' + direccion.apellido"></h5>
                <p class="card-text" ng-bind="direccion.ciudad"> </p>
                <p class="card-text" ng-bind="direccion.estado"> </p>
                <p class="card-text" ng-bind="direccion.pais"> </p>
                <p class="card-text" ng-bind="direccion.telefono"> </p>
                
                <p><a href="" ng-click="editar(direccion)" class="btn btn-flat pull-right">Editar</a> </p>

                <p ng-if="!direccion.principal"><a href="" ng-click="doPrincipal(direccion)" class="btn btn-flat pull-right">Hacer principal</a> </p>
                <p ng-if="direccion.principal"><a  class="pull-right btn btn-flat font-weight-bold">Principal</a> </p>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="text-muted">Agregar dirección </h5>
                <p><a href="" ng-click="crear()" class="btn btn-flat">Agregar</a> </p>
            </div>
        </div>
    </div>
</div>