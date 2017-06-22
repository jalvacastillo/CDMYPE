@extends('layout')

@section('titulo')
  Contactos
@endsection

@section('content')

    @include('contactos.map')

    <div id="content">
        <div class="container">
            <div class="row">
                @include('contactos.contactos')
                @include('contactos.informacion')
            </div>
        </div>
    </div>


@endsection