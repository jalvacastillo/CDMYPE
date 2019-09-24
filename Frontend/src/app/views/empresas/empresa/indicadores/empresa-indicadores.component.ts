import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-empresa-indicadores',
  templateUrl: './empresa-indicadores.component.html'
})
export class EmpresaIndicadoresComponent implements OnInit {

	@Input() empresa:any = {};
    public indicador:any = {};
    public loading:boolean = false;

    modalRef: BsModalRef;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {

	}

    public openModal(template: TemplateRef<any>, indicador:any) {
        this.indicador = indicador;
        if(!this.indicador.id) {
            this.indicador.fecha = this.apiService.date();
            this.indicador.venta_nacional = 0;
            this.indicador.venta_expo = 0;
        }
        this.modalRef = this.modalService.show(template);        
    }

    public onSubmit(){
        this.loading = true;
        this.indicador.empresa_id = this.empresa.id;
        this.indicador.usuario_id = this.apiService.auth_user().id;
        this.apiService.store('empresa/indicador', this.indicador).subscribe(indicador => {
            this.loading = false;
            indicador.usuario = this.apiService.auth_user().name;
            if (!this.indicador.id) {
                this.empresa.indicadores.push(indicador);
            }
            this.indicador = {};
            this.modalRef.hide();
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(indicador:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/indicador/', indicador.id) .subscribe(data => {
                for (let i = 0; i < this.empresa.indicadores.length; i++) { 
                    if (this.empresa.indicadores[i].id == data.id )
                        this.empresa.indicadores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
