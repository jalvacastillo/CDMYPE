@extends('layout')

@section('titulo')
  No encontrado
@endsection

@section('content')


<div class="container">
<div class="page-content">
<div class="error-page">
<h1>404</h1>
<h3>Archivo no encontrado</h3>
<p>Lo sentimos, pero la página que buscas no exite.</p>
<div class="text-center"><a href="{{ url('/') }}" class="btn-system btn-small">Ir al inicio</a></div>
</div>
</div>
</div>

@endsection
