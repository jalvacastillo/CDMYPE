
<div class="row">
    
    <div class="col-md-6 mb-4" ng-repeat="tarjeta in usuario.tarjetaes">
        <div class="card">
            <div class="card-body text-left">

                <h5 class="card-title" ng-bind="tarjeta.nombre + ' ' + tarjeta.apellido"></h5>
                <p class="card-text" ng-bind="tarjeta.codigo"> </p>
                <p class="card-text" ng-bind="tarjeta.vencimiento"> </p>
                <p class="card-text" ng-bind="tarjeta.numero"> </p>
                
                <p><a href="" ng-click="editar(tarjeta)" class="btn btn-flat pull-right">Editar</a> </p>

                <p ng-if="!tarjeta.principal"><a href="" ng-click="doPrincipal(tarjeta)" class="btn btn-flat pull-right">Hacer principal</a> </p>
                <p ng-if="tarjeta.principal"><a  class="pull-right btn btn-flat font-weight-bold">Principal</a> </p>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="text-muted">Agregar tarjeta </h5>
                <p><a href="" ng-click="crear()" class="btn btn-flat">Agregar</a> </p>
            </div>
        </div>
    </div>
</div>