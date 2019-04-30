<<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <style>
         @page { margin: 100px 90px; }
        header {margin: 0px; position: fixed; left: 0px; top: -86px; right: 0px;  text-align: center; }
        #titulo{text-align: center;}
        section {font-family: "arial black" ; margin: 0px; padding: 0px; font-size: 14px; line-height: 20px; text-align: left;}
        footer { position: fixed; left: 0px; bottom: -150px; right: 0px; height: 150px;  }
        footer .page:after { content: counter(page, upper-roman); }
        footer #conamype {position: absolute; left: 10px;}
        footer #cdmype {position: absolute; right: 10px;}
         .titulo{text-align:center; margin-bottom:0px; font-size: 16px}
        table { border-collapse: collapse; }
        table th {border: 1px solid black; margin: 0px; padding: 5px; font-size: 14px;}
        table td {border: 1px solid black; margin: 0px; padding: 5px; font-size: 13px;}
       </style>

    <title>Convocatoria</title>
</head>
<body>

{{-- Logos --}}
        <header> <img src="img/cdmype-logo.jpg" width="150px"/> </header>

        <footer>
            <img src="img/conamype-logo.jpg" width="150px" id="conamype" />
            <img src="img/unicaes-logo.jpg" width="75px" id="cdmype" />
        </footer>
    {{-- Contenido --}}

<h4 class="titulo">
        LISTA DE ASISTENCIA
</h4>

<div id="contenido">
    <div class="datos">

        <p><strong>Nombre de la Capacitación: </strong>{{$cap->tema}}</p>
        <p>
            <strong>Fecha de Ejecución: </strong>{{ $cap->fecha_ini }} - {{ $cap->fecha_fin }}
            <strong> Lugar: </strong>{{$cap->lugar}}
        </p>
        <p><strong>Nombre del Capacitador/a: </strong>{{$cap->consultor->nombre}}</p>
    </div>
    <div class="empresario">

        <table class="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre del Participante</th>
                    <th>Empresa</th>
                    <th style="text-align:center; width:70px">Teléfono</th>
                    <th style="text-align:center; width:70px">DUI</th>
                    <th style="text-align:center; width:110">NIT</th>
                    <th>Firma</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresarios as $key=>$empresario)
                <tr>
                        <td style="text-align:center; width:20px">{{ ++$key }}</td>
                        <td style="width:200px">{{ $empresario->nombre }}</td>
                        <td style="width:200px">
                            {{ $empresario->empresa }}
                        </td>
                        <td style="text-align:center; width:70px">{{ $empresario->empresario->celular}}</td>
                        <td style="text-align:center; width:70px">{{ $empresario->empresario->dui }}</td>
                        <td style="text-align:center; width:110px">{{ $empresario->empresario->nit }}</td>
                        <td style="text-align:center; width:100px; color:white;">.</td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</div>
</body>
</html>