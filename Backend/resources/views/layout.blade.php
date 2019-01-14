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
  <script type="text/javascript" src="{{ asset('js/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/nivo-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/count-to.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/mediaelement-and-player.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.slicknav.js') }}"></script>
  
    @yield('header')

    <script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ui-bootstrap4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/app/controller.js') }}"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
    <div id="container">

        @include('header')
        {{-- <div class="alert alert-warning" style="position: absolute; right: 0; left: 0; width: 210px; margin: 10px auto; z-index: 999999999;">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          Página en <strong>construcción.</strong>
        </div> --}}
        
        @yield('content')

        @include('footer')


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
    angular.module("app").constant("CSRF_TOKEN", '{{ csrf_token() }}');
  </script>

  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>

</html>