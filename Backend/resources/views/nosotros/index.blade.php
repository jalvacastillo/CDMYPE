@extends('layout')

@section('titulo')
  Sobre Nosotros
@endsection

@section('content')

    @include('nosotros.title')

    <div id="content">
        <div class="container">
            <div class="page-content" id="somos">


            @include('nosotros.intro')

            <div class="hr5" style="margin:50px 0px;" id="naturaleza"></div>

            @include('nosotros.misionvision')

            <div class="hr5" style="margin:50px 0px;" id="equipo"></div>

            @include('nosotros.equipo')
         
            <div class="hr1" style="margin-bottom:50px;"></div>

            @include('home.testimonios')

            </div>
        </div>
    </div>

    @include('home.accion')

@endsection