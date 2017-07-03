<!DOCTYPE html>
<html lang="es" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Oferta AT</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row text-center">
        <div class="col-xs-12">
            <br><br><br>
            <img src="{{ asset('assets/images/cdmype-logo.jpg') }}" class="img-responsive" style="margin: auto;" />
            <br><br>
            <div class="jumbotron">
                <h2>Hola: {{$atconsultor->consultor}}</h2>
                  @if ($atconsultor->doc_oferta)
                      <p>Su oferta ya esta en revisión.</p>
                  @else
                      <p>Suba su oferta.</p>
                      <form method="post">
                          {!! csrf_field() !!}
                          <input type="hidden" name="id" value="{{$atconsultor->id}}">
                          <input type="file" name="file" style="margin: auto;" >
                          <br>
                          <button class="btn btn-primary btn-lg">Subir</button>
                      </form>

                  @endif
            </div>
        </div>
    </div>
</div>
    
</body>
</html>