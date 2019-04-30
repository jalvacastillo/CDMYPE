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
        .firmas {text-align: center; left: 40%}
         .titulo{background-color: #CCFAE0; border: 2px solid black; }
         .titulo p {text-align: center; padding: 0; margin: 2px}

       </style>

    <title>Término de referencia para Capacitación</title>
</head>
<body>

{{-- Logos --}}
    <header> <img src="img/cdmype-logo.jpg" width="150px"/> </header>

    <footer>
        <img src="img/conamype-logo.jpg" width="150px" id="conamype" />
        <img src="img/unicaes-logo.jpg" width="75px" id="cdmype" />
    </footer>
{{-- Contenido --}}

<div class="contenido">
 <div class="titulo">
    <p style="text-aling:center">TÉRMINOS DE REFERENCIA</p>
    <p> <strong> "{{$cap->tema}}" </strong> </p>
 </div>

 <div>
    <p>
        <strong>1. Presentación</strong>
    </p>
    <p style="margin-left:25px">
        NOMBRE DE LA EMPRESA/GRUPO: {{$cap->categoria}}.<br><br>
        DESCRIPCIÓN SUMARIA DEL GRUPO: La capacitación <strong>"{{$cap->tema}}"</strong>. {{$cap->descripcion}}
    </p>
 </div>
 <div>
    <p>
        <strong>2. Objetivos de la capacitación</strong>
    </p>
    <div style="margin-left:25px">
    <p> <strong>2.1 Objetivo General </strong></p>
    <ul>
        <li>{{$cap->obj_general}}</li>
    </ul>
    <p><strong>2.2 Objetivos Específicos</strong></p>
        <ul>
            @foreach($cap->especificos as $especifico)
                <li>
                    {{$especifico}}
                </li>
            @endforeach
        </ul>
    </div>
 </div>
 <div>
    <p><strong>3. Productos Esperados:</strong></p>
    <p>
        <ul>
            @foreach($cap->productos as $producto)
                <li>
                    {{$producto}}
                </li>
            @endforeach
        </ul>
    </p>
    <p>
        <ul>
            Otros productos solicitados:
            <br><br>
            <li>Diploma de participación.</li>
            <li>Almuerzo y 2 refrigerios.</li>
            <li>Material Didáctico para el desarrollo de actividades durante el evento.</li>
        </ul>
    </p>
 </div>

    <div>
        <p><strong>4. Oferta técnica y económica</strong></p>
        La propuesta técnica deberá ser presentada de acuerdo al siguiente contenido:
        <ul>
            <li>Descripción de la empresa(s).</li>
            <li>Objetivos.</li>
            <li>Metodología de trabajo.</li>
            <li>Plazo de ejecución.</li>
            <li>Carta didáctica de la capacitación.</li>
        </ul>
    </div>  <div>

        <?php
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $date = strtotime($cap->fecha);
            $date2 = strtotime($cap->fecha_lim)
        ?>
        <p><strong>5. Lugar y Fecha de ejecución de capacitación: </strong></p>
        <!-- <p> La capacitación se llevará a cabo en las instalaciones de Jovenesen, ubicada en Sensuntepeque los dias 12 y 19 de Noviembre de 1:00 pm a 5:00, cumpliendo con un total de 8 horas de capacitación.</p> -->
        <p> La capacitación se llevará a cabo en las instalaciones de {{$cap->lugar}}, el día


            {{date('d', $date)}} de {{$meses[date('m', $date) - 1]}} de {{date('Y', $date)}}
            de

            <?php $str = '2013-08-21 ' . $cap->hora_ini;
            // echo $str
            echo date('h:00', strtotime($str));
            ?>
            a
            <?php $str = '2013-08-21 ' . $cap->hora_fin;
            // echo $str
            echo date('h:00', strtotime($str));
            ?>, {{$cap->nota}}

        cumpliendo con un total de 8 horas de capacitación.</p>
    </div>
    <div>
        <p><strong>6. Plazo de presentación de ofertas:  </strong></p>
        <p>
            Fecha límite:
                {{date('d', $date2)}} de {{$meses[date('m', $date2) - 1]}} de {{date('Y', $date2)}}.


            <br><br>
            Forma de recepción: de forma electrónica (en formato pdf) al correo cmercado.unicaes@gmail.com  ó de forma física en las Instalaciones de la Universidad, no se tomarán en cuenta ofertas sin la firma del consultor. <br><br>
            Para cualquier información adicional contactarse al Tel. 2378-1500 Ext. 136.
        </p>
    </div>
    <div>
        <p><strong>7. Financiamiento:  </strong></p>
        <p>
            El valor máximo a financiar por el CDMYPE es de $ 430.00. No existe cofinanciamiento por parte del empresario. <br><br>

            La asistencia mínima es de 12 participantes y la máxima de 25. <!-- <br><br>

            La Universidad cuenta con servicio de cafetería, la cual puede ser una opción para proveer la alimentación, puede contactarse con Cafetería al Tel. 2378-1500, ext. 158, para pedir menús y cotizaciones. -->
        </p>
    </div>
</div>
</body>
</html>