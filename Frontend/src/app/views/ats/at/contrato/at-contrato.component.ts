import { Component, OnInit, TemplateRef } from '@angular/core';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-contrato',
  templateUrl: './at-contrato.component.html'
})
export class AtContratoComponent implements OnInit {

    public contrato:any = {};
    public ampliacion:any = {};
    public loading:boolean = false;
    modalRef: BsModalRef;

	constructor( 
            public apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.contrato = {};
            this.ampliacion = {};
        }
        else{
            this.apiService.read('at/contrato/', id).subscribe(contrato => {
               this.contrato = contrato;
            },error => {this.alertService.error(error); this.loading = false; });

            this.apiService.read('at/ampliacion/', id).subscribe(ampliacion => {
               this.ampliacion = ampliacion;
            },error => {this.alertService.error(error); this.loading = false; });
        }
	}

    public onSubmit(){
        this.loading = true;
        this.contrato.at_id = this.route.snapshot.paramMap.get('id');
        this.apiService.store('at/contrato', this.contrato).subscribe(contrato => {
            this.contrato = contrato;
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public openModal(template: TemplateRef<any>) {
        if(!this.ampliacion.id) {
            this.ampliacion.fecha = this.apiService.date();
            this.ampliacion.solicitante = 'Consultor';
            this.ampliacion.periodo = 'Semanas';
            this.ampliacion.tiempo_ampliacion = 1;
        }
        this.modalRef = this.modalService.show(template);
    }

    public onSubmitAmpliacion(){
        this.loading = true;
        this.ampliacion.at_id = +this.route.snapshot.paramMap.get('id');
        this.apiService.store('at/ampliacion', this.ampliacion).subscribe(ampliacion => {
            this.ampliacion = ampliacion;
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }


}
