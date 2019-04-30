<!doctype html>
<html lang="es" ng-app="app">
<head>

  <!-- Basic -->
  <title>CDMYPE - @yield('titulo', 'Bienvenido')</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Somos un Centro de Desarrollo de la Micro y Pequeña Empresa que atiende cabañas y cuscatlán.">
  <meta name="author" content="Jesus Alvarado - Asesor TIC">

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="screen">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.css') }}" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/blue.css') }}" title="blue" media="screen" />

  <!-- Margo JS  -->
  <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.migrate.js') }}"></script> --}}
  <script type="text/javascript" src="{{ asset('js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/nivo-lightbox.min.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/count-to.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.textillate.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.lettering.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/mediaelement-and-player.js') }}"></script> --}}
  {{-- <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script> --}}
  
    @yield('header')

    {{-- <script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('/js/ui-bootstrap4.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('/app/controller.js') }}"></script> --}}

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
    <div class="container">

        <div class="hidden-header"></div>
        <header class="clearfix">

          <div class="top-bar">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <ul class="contact-details">
                    <li><a href="#"><i class="fa fa-map-marker"></i> Km. 51 1/2 Cantón Agua Zarca, Cabañas, El Salvador</a>
                    </li>
                    <li><a href="mailto:cdmype.unicaes@gmail.com"><i class="fa fa-envelope-o"></i> cdmype.unicaes@gmail.com</a>
                    </li>
                    <li><a href="tel:+5032378-1500"><i class="fa fa-phone"></i> 2378-1500 Ext: (136) </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="social-list">
                    <li>
                      <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/CDMYPEILOBASCO/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/CDMYPEUNICAES"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a class="youtube itl-tooltip" data-placement="bottom" title="youtube" href="https://www.youtube.com/channel/UCtsUESmY8YIGzecsaLZI28A"><i class="fa fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </header>

        <div class="container text-center" style="margin: 100px 0px 20px 0px">
            <a href="{{ route('inicio') }}" style="margin: auto;">
              <img alt="Logo CDMYPE" src="{{ asset('img/cdmype-logo.jpg') }}" style="margin: auto; width: 150px;">
            </a>
        </div>
        <hr>
        <div class="container">
            @if (Carbon\Carbon::parse($at->fecha)->format('d-m-Y') <= date('d-m-Y'))
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    @if ($oferta)
                        <h2 class="text-center">Hola, {{ $consultor->nombre }}!</h2>
                        <h3 class="text-center">Gracias por enviarnos tu oferta, te avisaremos si has sido seleccionado/a.</h3>
                    @else
                    <form method="POST" action="{{ route('guardarOferta') }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        {{-- <input type="hidden" name="id" value="{{ $oferta->id }}"> --}}
                        <input type="hidden" name="consultor_id" value="{{ $consultor->code }}">
                        <input type="hidden" name="at_id" value="{{ $at->code }}">
                        <h2>Hola, {{ $consultor->nombre }}!</h2>
                        <p>Aca puedes subir tu oferta para la Asistencia Técnica "{{ $at->tema }}".</p>
                        <br>
                        <p>Sube la oferta antes del {{ Carbon\Carbon::parse($at->fecha)->format('d-m-Y') }}.</p>
                        <br>
                        <p class="row text-center">
                            <div class="col-xs-12 form-group">
                                <input type="file" name="file" accept="application/pdf">
                            </div>
                            <button type="submit" class="btn btn-primary">Subir</button>
                        </p>
                    </form>        
                    @endif
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>Hola, {{ $consultor->nombre }}!</h2>
                    <p>Lamentamos que ya no puedas subir tu oferta, pero la fecha límite para hacerlo era el {{ Carbon\Carbon::parse($at->fecha)->format('d-m-Y') }}.</p>
                </div>
            </div>     
            @endif
        </div>


        {{-- @include('footer') --}}


  </div>


  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <script>
    {{-- angular.module("app").constant("CSRF_TOKEN", '{{ csrf_token() }}'); --}}
    // Page Loader
    $(window).load(function () {
        "use strict";    
        $('#loader').fadeOut();
    });
  </script>
  

  @yield('footer')

</body>

</html>