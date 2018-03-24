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
                <div class="hr1" style="margin-bottom:45px;"></div>
                
                <div class="row">
                    <div class="col-sm-6">
                        @include('servicios.atencion')
                    </div>
                    <div class="col-sm-6">
                        @include('servicios.requisitos')
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection