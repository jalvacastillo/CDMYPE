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
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                          <img src="{{ asset('/img/clientes/'. $cliente->logo) }}" alt="Logo {{ $cliente->empresa()->first()->nombre }}" />
                          <div class="caption">
                            <h3>{{ $cliente->empresa()->first()->nombre }}</h3><br>
                            <h4 class="label label-primary">{{ $cliente->empresa()->first()->sector }}</h4> <br><br>
                            <h4 class="label label-success">{{ $cliente->empresa()->first()->actividad }}</h4>
                          </div>
                          <div class="panel-footer">
                            <a class="btn btn-block " href="{{ url('cliente', $cliente->id) }}">Detalles <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>
                      </div>
                @endforeach

                </div>
                
                <div class="text-center"> {{ $clientes->links() }} </div>

            </div>
        </div>
    </div>

@endsection