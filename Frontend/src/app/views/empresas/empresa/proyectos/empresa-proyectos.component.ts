import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-empresa-proyectos',
  templateUrl: './empresa-proyectos.component.html'
})
export class EmpresaProyectosComponent implements OnInit {

	@Input() empresa:any = {};
    public proyecto:any = {};
    public loading:boolean = false;

    modalRef: BsModalRef;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {

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
        this.proyecto.empresa_id = this.empresa.id;
        this.proyecto.asesor_id = this.apiService.auth_user().id;
        this.apiService.store('empresa/proyecto', this.proyecto).subscribe(proyecto => {
            this.loading = false;
            this.proyecto.asesor = this.apiService.auth_user();
            if (!this.proyecto.id) {
                this.empresa.proyectos.push(this.proyecto);
            }
            this.modalRef.hide();
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(proyecto:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/proyecto/', proyecto.id) .subscribe(data => {
                for (let i = 0; i < this.empresa.proyectos.length; i++) { 
                    if (this.empresa.proyectos[i].id == data.id )
                        this.empresa.proyectos.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }
   

}
