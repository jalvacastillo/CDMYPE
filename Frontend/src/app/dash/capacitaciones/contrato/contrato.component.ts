import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-contrato',
  templateUrl: './contrato.component.html',
  styleUrls: ['./contrato.component.css']
})
export class AtContratoComponent implements OnInit {

    public termino: any = {};
    public contrato: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 5;
        this.pasos.setPasos("asistencia");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.contrato = {};
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;
                    this.apiService.read('atcontrato/', termino.id).subscribe(contrato => {
                        this.contrato = contrato;
                    });
                });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.contrato);
        this.apiService.store('atcontrato', this.contrato).subscribe(data => {
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

