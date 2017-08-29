@extends('layout')

@section('titulo')
  Clientes
@endsection

@section('content')

    @include('clientes.title')


        <!-- Start Content -->
        <div id="content">
          <div class="container">
            <div class="page-content">


              <div class="row">

                  
                @foreach($clientes as $cliente)
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                          <img src="assets/images/clientes/{{ $cliente->imagen }}">
                          <div class="caption">
                            <h3>{{ $cliente->empresa()->first()->nombre }}</h3>
                            <p class="label label-primary">{{ $cliente->empresa()->first()->sector }}</p>
                          </div>
                          <div class="panel-footer">
                            <p><i class="fa fa-phone"></i> {{ $cliente->empresario()->first()->telefono }}</p>
                            <p><i class="fa fa-envelope"></i> {{ $cliente->empresario()->first()->correo }}</p>
                            <p><i class="fa fa-location-arrow"></i> {{ $cliente->empresario()->first()->municipio }}</p>
                            <a class="btn btn-block " href="{{ url('cliente', $cliente->id) }}">Detalles <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>
                      </div>
                  @endforeach
                </div>

                <div class="text-center">
                  {{ $clientes->links() }}
                </div>

                
              </div>
              

            </div>
          </div>
        </div>

@endsection