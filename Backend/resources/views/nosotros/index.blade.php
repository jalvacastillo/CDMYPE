@extends('layout')

@section('titulo')
  Sobre Nosotros
@endsection

@section('content')

    @include('nosotros.title')

    <div id="content">
        <div class="container">
            <div class="page-content">


            @include('nosotros.intro')

            <div class="hr1" style="margin-bottom:50px;"></div>

            @include('nosotros.misionvision')

            <div class="hr1" style="margin-bottom:50px;"></div>

            @include('nosotros.equipo')
         
            {{-- <div class="hr1" style="margin-bottom:50px;"></div> --}}


            </div>
        </div>
    </div>

@endsection