<<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <style>
        @page { margin: 100px 90px; }
        header {margin: 0px; position: fixed; left: 0px; top: -86px; right: 0px;  text-align: center; }
        #titulo{text-align: center;}
        section {font-family: "Times New Roman" ; margin: 0px; padding: 0px; font-size: 12px; line-height: 20px; text-align: justify;}

        .saltoDePagina{display:block; page-break-before:always;}
        h2 { font-weight: 100;} p {font-size: 14px; line-height: 1.7;}

       </style>

    <title> INFORME MENSUAL DE OPERACIÓN</title>
</head>
<body>  

 @include('pdf.informes.secciones.portada')

    <section class="saltoDePagina">
     @include('pdf.informes.secciones.contenido')
    </section>

    <section class="saltoDePagina">
        <h2>INTRODUCCIÓN</h2>
        <p>{{ $informe->introduccion }}</p>
    </section>

    <section class="saltoDePagina">
        <h2>OBJETIVO DEL PERIODO</h2>
        <P>{{ $informe->objetivo }}</P>
    </section>
    
    <section>
        <h2>PERIODO DEL INFORME</h2>
        <P>El informe y los datos que se presentan a continuación, corresponden al mes {{ $informe->mes }}</P>
    </section>
    <section>
        <h2>RESUMEN EJECUTIVO DE ACTIVIDADES</h2>
        
    </section>
    
    @include('pdf.informes.secciones.coordinaciones')

    @include('pdf.informes.secciones.actividades')
    
    @include('pdf.informes.secciones.noticias')
    
    <section class="saltoDePagina">   
    @include('pdf.informes.secciones.asesorias')
    </section>

    @include('pdf.informes.secciones.vinculaciones')

    <section class="saltoDePagina">   
    @include('pdf.informes.secciones.ats')
    </section>
    
    <section class="saltoDePagina">   
    @include('pdf.informes.secciones.resultados')
    </section>


</body>
</html>