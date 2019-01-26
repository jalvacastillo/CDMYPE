@extends('layout')

@section('nombre')
  Cuenta
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Cuenta</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Cuenta</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

	@include('usuario.info')

@endsection