import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-enviados',
  templateUrl: './enviados.component.html',
  styleUrls: ['./enviados.component.css']
})
export class AtEnviadosComponent implements OnInit {

    public termino: any = {};
    public consultores: any = [];
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 3;
        this.pasos.setPasos("asistencia");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.consultores = {};
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;

                    this.apiService.read('atconsultores/', termino.id).subscribe(consultores => {
                        this.consultores = consultores; 
                    });
                });
            }

        });

    }

    eliminarDoc(consultor){
        consultor.doc_oferta = "";
        this.apiService.store('atconsultor/', consultor).subscribe(data => {
            this.alertService.success("Guardado");
        },error => {
            this.alertService.error(error._body);
        });

    }

    uploadFile(consultor, event) {

        let fileList: FileList = event.target.files;
        let oferta: File = fileList[0];

        this.apiService.upload('atconsultor/oferta/', consultor, oferta).subscribe(oferta => {
            consultor.doc_oferta = oferta;
            this.alertService.success("Guardado");
        },error => {
            this.alertService.error(error._body);
        });

    }


}

