@extends('layout')

@section('titulo')
  Servicios
@endsection

@section('content')
    
    @include('servicios.title')

    <div id="content">
        <div class="container">
            <div class="page-content">

                @include('servicios.servicios')

                <div class="hr1" style="margin-bottom:45px;"></div>
                
                <div class="row">
                    {{-- @include('servicios.ventajas') --}}
                    @include('servicios.caracteristicas')

                </div>

            </div>
        </div>
    </div>

@endsection