@extends('layout')

@section('titulo')
  Servicios
@endsection

@section('content')
    
    @include('servicios.title')

    <div id="content">
        <div class="container">
            <div class="page-content">

                <div class="row text-center">
                    @include('servicios.asesorias')
                    @include('servicios.otros')
                </div>

                <hr class="hr1" style="margin:30px;"></hr>
                
                @include('servicios.atencion')
                
                <hr class="hr1" style="margin:30px;"></hr>

                @include('servicios.requisitos')

            </div>
        </div>
    </div>

@endsection