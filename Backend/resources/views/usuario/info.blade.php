<section style="margin: 50px 0px;">
  <div class="container" ng-controller="UsuarioCtrl" ng-init="load()">

    <div class="row">
      <div class="col-12 text-center">
        @if (Auth::user()->tipo_registro == 'Manual')
          <img src="{{ asset('img/usuarios/'. Auth::user()->avatar) }}" style="border-radius: 50%; height: 100px;">
        @else
          <img ng-src="@{{usuario.avatar}}" style="border-radius: 50%; height: 70px;">
        @endif
          <p ng-bind="usuario.name"></p>
          <p> <span ng-bind="usuario.tipo"></span> | {{ Auth::user()->created_at->diffforhumans() }}</p>
      </div>
      <br>
      <div class="col-12 mt-3">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a data-toggle="tab" href="#Info">Información</a></li>
          <li><a data-toggle="tab" href="#cuenta">Cuenta</a></li>
          <li><a data-toggle="tab" href="#historial">Historial</a></li>
        </ul>

        <div class="tab-content">
          <div id="Info" class="tab-pane fade in active">
            @include('usuario.partials.datos')
          </div>
          <div id="cuenta" class="tab-pane fade">
            @include('usuario.partials.cuenta')
          </div>
          <div id="historial" class="tab-pane fade">
            @include('usuario.partials.historial')
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
