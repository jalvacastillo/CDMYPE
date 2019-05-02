import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-equipo-empresas',
  templateUrl: './equipo-empresas.component.html'
})
export class EquipoEmpresasComponent implements OnInit {

	@Input() equipo:any = {};
    public empresas:any = [];
    public proyecto:any = {};
    public loading:boolean = false;

    modalRef: BsModalRef;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.proyecto = {};
            this.proyecto.asesor_id = this.apiService.auth_user().id;
        }
        else{
            this.apiService.read('asesor/empresas/', id).subscribe(empresas => {
               this.empresas = empresas;
            });
        }
	}

    public openModal(template: TemplateRef<any>, proyecto:any) {
        this.proyecto = proyecto;
        if(!this.proyecto.inicio) {
            this.proyecto.inicio = this.apiService.date();
        }
        if(!this.proyecto.fin) {
            this.proyecto.fin = this.apiService.date();
        }
        if(!this.proyecto.asesor) {
            this.proyecto.asesor = {};
        }
        this.modalRef = this.modalService.show(template);        
    }

    public onSubmit(){
        this.loading = true;
        this.proyecto.asesor_id = this.apiService.auth_user().id;
        this.apiService.store('empresa/proyecto', this.proyecto).subscribe(proyecto => {
            this.loading = false;
            this.proyecto.asesor = this.apiService.auth_user();
            if (!this.proyecto.id) {
                this.empresas.push(this.proyecto);
            }
            this.modalRef.hide();
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(proyecto:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/proyecto/', proyecto.id) .subscribe(data => {
                for (let i = 0; i < this.empresas.length; i++) { 
                    if (this.empresas[i].id == data.id )
                        this.empresas.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
