@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('auth.login-form')
        </div>
    </div>
</div>

@endsection

