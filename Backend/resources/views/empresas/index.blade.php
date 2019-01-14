@extends('layout')

@section('titulo')
  Catalogo de clientes
@endsection

@section('content')

    @include('clientes.title')

    <div id="content">
        <div class="container">
            <div class="page-content">
                <div class="row">
                  
                @foreach($clientes as $cliente)
                  <a href="{{ url('cliente', $cliente->id) }}">
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                          <img src="{{ asset('/img/clientes/'. $cliente->logo) }}" alt="Logo {{ $cliente->empresa()->first()->nombre }}" />
                          <div class="caption">
                            <h3>{{ str_limit($cliente->empresa()->first()->nombre, 22,'...')}}</h3><br>
                            <p><i class="fa fa-building"></i> {{ $cliente->empresa()->first()->sector }}</p>
                            <p><i class="fa fa-briefcase"></i> {{ str_limit($cliente->empresa()->first()->actividad, 22,'...')}}</p>
                          </div>
                          <div class="panel-footer">
                            <a class="btn btn-block " href="{{ url('cliente', $cliente->id) }}">Ver más <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>
                      </div>
                  </a>
                @endforeach

                </div>
                
                <div class="text-center"> {{ $clientes->links() }} </div>

            </div>
        </div>
    </div>

@endsection