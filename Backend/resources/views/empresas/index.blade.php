@extends('layout')

@section('titulo')
  Catalogo de empresas
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Empresas</h2>
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

    <form action="{{ route('filtrarEmpresas') }}" method="POST">
    <div class="row panel-footer" style="display: flex; justify-content: center;">
      {{ csrf_field() }}
        <div class="form-group" style="margin: 0px 15px; width: 50%;">
            <input type="text" name="parametro" class="form-control form-control-sm" placeholder="Nombre, Sector, Municipio, etc...">
        </div>

      <div class="form-group" style="margin: 0px 15px; width: 10%">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        <button type="{{ route('empresas') }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
      </div>
    </div>
    </form>

    <div id="content">
        <div class="container">
            <div class="page-content">

                <div class="row">
                  
                @if ($empresas->count() > 0)
                
                @foreach($empresas as $empresa)
                  <a href="{{ url('empresa', [str_slug($empresa->nombre), encrypt($empresa->id) ]) }}">
                      <div class="panel panel-default col-sm-6 col-md-4 col-lg-3">
                        <div class="panel-body">
                          <div class="col-xs-12 text-center">
                            <img style="height: 150px;" src="{{ asset('/img/empresas/'. $empresa->logo) }}" alt="Logo {{ $empresa->nombre }}" />
                          </div>
                          <div class="col-xs-12">
                            <h3 class="text-center text-truncate">{{ $empresa->nombre}}</h3>
                            <p><i class="fa fa-building"></i> {{ $empresa->sector }}</p>
                            <p><i class="fa fa-briefcase"></i> {{ str_limit($empresa->actividad, 22,'...')}}</p>
                            <p><i class="fa fa-map"></i> {{ $empresa->municipio}}</p>
                          </div>
                        </div>
                        <div class="col-xs-12 panel-footer">
                            <a class="btn btn-block " href="{{ url('empresa', [str_slug($empresa->nombre), encrypt($empresa->id) ]) }}">Ver más <i class="fa fa-angle-right"></i></a>
                        </div>
                      </div>
                  </a>
                @endforeach
                @else
                  <div class="col-12 text-center">
                    <i class="fa fa-empty"></i>
                    <p class="text-muted">No hay empresas aún</p>
                    <br>
                  </div>
                @endif

                </div>
                
                <div class="text-center"> {{ $empresas->links() }} </div>

            </div>
        </div>
    </div>

    @include('home.accion')

@endsection