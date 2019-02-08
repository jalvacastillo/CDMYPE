@extends('layout')

@section('nombre')
  Actividades
@endsection

@section('header')
<link href='/js/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
<script src='/js/fullcalendar/lib/moment.min.js'></script>
<script src='/js/fullcalendar/fullcalendar.min.js'></script>
<script src='/js/fullcalendar/locale/es.js'></script>
<script>
    

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: '2019-01-12',
      header: {
          left: 'prev,next today',
          center: 'title',
          right: 'listDay,listWeek,month'
        },

    defaultView: 'month',
    eventClick:  function(event, jsEvent, view) {
                $('#modalTitle').html(event.title);
                $('#modalBody').html(event.description);
                $('#eventUrl').attr('href',event.view_url);
                $('#calendarModal').modal();
            },
    navLinks: true,
      editable: false,
      views: {
          listDay: { buttonText: 'Listado Dia' },
          listWeek: { buttonText: 'Listado Semana' }
        },
      locacale: 'es',
      eventLimit: true, // allow "more" link when too many events
       events: { // you can also specify a plain string like 'json/events.json'
        url: '/actividades/calendario',
        error: function(error) {
                console.log(error);
            }
        }
    });

  });

</script>
@endsection

@section('content')

    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Actividades</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ url('/') }}">Inicio</a></li>
              <li>Actividades</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <form action="{{ route('filtrarActividades') }}" method="POST">
    <div class="row panel-footer" style="display: flex; justify-content: center;">
      {{ csrf_field() }}

      <div class="input-group" style="width: 75%;">
        <input type="text" name="parametro" class="form-control" placeholder="Tipo, Nombre, etc...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Opciones <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="{{ route('actividades') }}">Todas las actividades</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Categorias</li>
              <li><a href="{{ route('actividadesCategoria', 'formacion') }}">Formación</a></li>
              <li><a href="{{ route('actividadesCategoria', 'comercializacion') }}">Comercialización</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Tipo</li>
              <li><a href="{{ route('actividadesTipo', 'capacitacion') }}">Capacitaciones</a></li>
              <li><a href="{{ route('actividadesTipo', 'taller') }}">Talleres</a></li>
              <li><a href="{{ route('actividadesTipo', 'webinar') }}">Webinars</a></li>
            </ul>
        </span>
      </div>
    </div>
    </form>


        {{-- <div id="content"> --}}
          <div class="container">
            <div class="row col-xs-12 text-center" style="margin: 15px 0px;">
              <div class="btn-group">
                <a href="{{ route('actividades') }}" class="btn btn-default {{ Route::is('actividades') ? 'active' : null }}">Listado</a>
                <a href="{{ route('actividadesCalendario') }}"class="btn btn-default {{ Route::is('actividadesCalendario') ? 'active' : null }}">Calendario</a>
              </div>
            </div>
            <div class="page-content" id="pasantias">


                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div id="calendar"></div>
                    </div>
                </div>

            </div>
          </div>
        {{-- </div> --}}

        @include('home.accion-proyectos')
    
    <div id="calendarModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                <h4 id="modalTitle" class="modal-title"></h4>
            </div>
            <div id="modalBody" class="modal-body"> </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a href="" id="eventUrl" class="btn btn-primary">Más información</a>
            </div>
        </div>
    </div>
    </div>

@endsection