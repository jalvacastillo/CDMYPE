@extends('layout')

@section('titulo')
  {{ $diagnostico->nombre }}
@endsection

@section('content')
    
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Diagnosticos</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Diagnosticos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="page-content">
              
              <div class="row">
              
              <div class="col-xs-12 text-center">
                <h1>{{ $diagnostico->nombre }}</h1>
                <p>{{ $diagnostico->descripcion }}</p>
              </div>
            
            <form action="{{ route('diagnostico', str_slug($diagnostico->nombre)) }}" method="POST">
                {{ csrf_field() }}
                <div class="col-xs-12 text-center">
                @foreach ($categorias as $categoria)
                  <h2>{{ $categoria->nombre }}</h2>
                    @foreach ($categoria->subcategorias as $subcategoria)
                        <h3>{{$subcategoria->nombre}}</h3>

                        @foreach ($subcategoria->preguntas as $pregunta)
                          <p>{{ $pregunta->nombre }}</p>
                          @foreach ($pregunta->valores as $valor)
                            <div class="radio-inline">
                              <label>
                                <input type="radio" name="{{$pregunta->id}}" value="{{$valor->nombre}}">
                                {{$valor->nombre}}
                              </label>
                            </div>
                          @endforeach

                        @endforeach

                    @endforeach

                @endforeach
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>

            </form>

            </div>

            </div>
        </div>
    </div>
    
    @include('home.accion')

@endsection