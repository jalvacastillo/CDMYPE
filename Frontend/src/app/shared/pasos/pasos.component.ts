import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-pasos',
  templateUrl: './pasos.component.html',
  styleUrls: ['./pasos.component.css']
})
export class PasosComponent implements OnInit {
    
    @Input() public entidad:any = {};
    @Input() public pasos:any = [];
    @Input() public componente = "";
    @Input() public tab = 0;

    constructor() { }

    ngOnInit() {

    }

    setPasos(componente:string){
        this.componente = componente;

        switch(componente){
            case "cliente" :
                this.pasos = [
                    {'id' : 1, 'titulo' : 'Empresa', 'rows' : 2, 'url': 'empresa'},
                    {'id' : 2, 'titulo' : 'Empresario', 'rows' : 3, 'url': 'empresario'},
                    {'id' : 3, 'titulo' : 'Indicadores', 'rows' : 3, 'url': 'indicadores'},
                    {'id' : 4, 'titulo' : 'Proyectos', 'rows' : 2, 'url': 'proyectos'},
                    {'id' : 5, 'titulo' : 'Historial', 'rows' : 2, 'url': 'historial'}
                ]
            break
            case "consultor":
            this.pasos = [
                {'id' : 1, 'titulo' : 'Consultor', 'rows' : 4, 'url': 'consultor'},
                {'id' : 2, 'titulo' : 'Especialidades', 'rows' : 4, 'url': 'especialidades'},
                {'id' : 3, 'titulo' : 'Historial', 'rows' : 4, 'url': 'historial'}
            ]
            break
            case "asistencia":
            this.pasos = [
                {'id' : 1, 'titulo' : 'Termino', 'rows' : 2, 'url': 'termino'},
                {'id' : 2, 'titulo' : 'Consultores', 'rows' : 2, 'url': 'consultores'},
                {'id' : 3, 'titulo' : 'Enviados', 'rows' : 2, 'url': 'enviados'},
                {'id' : 4, 'titulo' : 'Ofertas', 'rows' : 2, 'url': 'ofertas'},
                {'id' : 5, 'titulo' : 'Contrato', 'rows' : 2, 'url': 'contrato'},
                {'id' : 6, 'titulo' : 'Acta', 'rows' : 2, 'url': 'acta'}
            ]
        }
    }

}
