
<div ng-if="usuario.favoritos.length > 0" id="favoritos">

<ul class="list-group mb-1 mb-sm-3" ng-repeat="favorito in usuario.favoritos">
  <li class="list-group-item p-3">
    <div class="row">
        <div class="col-3 d-flex">
            <img ng-src="{{ asset('imgs/productos/imagenes') }}@{{ '/'+ favorito.producto.img }}" alt="@{{ favorito.nombre.producto }}" height="100">
        </div>
        <div class="col-9 col-md-6">
            <h4 class="font-weight-bold mt-2">@{{ favorito.producto.precio | currency : '$' : 2 }}</h4>
            <h5 class="my-0">@{{ favorito.producto.nombre }}</h5>
            <small class="text-muted">@{{ favorito.producto.descripcion }}</small>
            <p><p class="mt-3">@{{ favorito.fecha }} | @{{ favorito.hora }}</p></p>
        </div>
        <span class="col-12 col-md-3 text-muted text-right my-3">
            <a href="{{ url('tienda/producto') }}/@{{ favorito.producto.slug }}" class="btn" data-toggle="tooltip" title="Comprar"><i class="fa fa-shopping-cart"></i></a>
            <a href="" ng-click="quitarFavorito(favorito)" class="btn" data-toggle="tooltip" title="Quitar de favoritos"><i class="fa fa-heart text-danger" id="favorito@{{favorito.id}}"></i></a>
        </span>
    </div>
  </li>
</ul>

<h3><a href="{{ route('proyectos') }}"> <i class="fa fa-angle-left"></i> Ir a la tienda</a></i></h3>
</div>

<div ng-if="usuario.favoritos.length < 1">
    <div class="label text-muted text-center my-5">
        No tiene productos agregados a favoritos.
    </div>
    <div class="my-5 text-muted text-center">
        <i class="fa fa-heart fa-3x"></i>                    
    </div>
    <div class="my-5 text-muted text-center">
        <h3><a href="{{ route('proyectos') }}" class="text-danger"> <i class="fa fa-angle-left"></i> Ir a la tienda</a></i></h3>
    </div>
</div>