<style>
        footer { position: fixed; left: -150px; bottom: -150px; right: 0px; height: 150px;  }
        footer #conamype {position: absolute; left: 10px;}
        body #cdmype {position: absolute; left:120px; }
        footer #foot {position: absolute; left:350px; width: 70%;  }
        header #year {position: absolute; left:-89px; top:-20px; width: 70%;}
        body #body {position: absolute; top: 250px; text-align: center;}
        body #body2 {position: absolute; top: 750px; left: 160px;}
</style>
<section>
    {{-- Logos --}}
    <header>  
        <img src="img/header.png" id="year"/>
    </header>
    <body>  
        <div>
    <img src="img/cdmype-logo.jpg" width="350px" id="cdmype"/>
    </div> 
        <div id="body">
            <h1>CDMYPE - UNICAES ILOBASCO</h1>
            <h2>INFORME MENSUAL DE OPERACIÓN</h2><br><br>
            <h2>Periodo informado: {{$informe->mes}}</h2>
            <h2>Elaborado por: Equipo CDMYPE</h2>
        </div>
        <div id="body2">
           <img src="img/conamype-logo.jpg" height="90px"; width="180px"/>&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="img/unicaes-logo.jpg" width="90px"; height="90px" /> 
        </div>
    </body>
        
    <footer>
        
       <img src="img/footer.png" id="foot"/>
    </footer>
    
</section>