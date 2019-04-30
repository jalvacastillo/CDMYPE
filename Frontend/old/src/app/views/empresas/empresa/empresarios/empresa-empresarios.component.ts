import { Component, OnInit, TemplateRef, Input } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-empresa-empresarios',
  templateUrl: './empresa-empresarios.component.html'
})
export class EmpresaEmpresariosComponent implements OnInit {

    @Input() empresa:any = {};
	public empresario:any = {};
    public loading:boolean = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

	ngOnInit() {

	}

    public openModal(template: TemplateRef<any>, empresario:any) {
        if(!empresario.empresario) {
            empresario.empresario = {};
        }
        this.empresario = empresario;
        if(!this.empresario.tipo) {
            this.empresario.tipo = 'Propietario';
        }
        this.modalRef = this.modalService.show(template);
    }

    public onSubmit() {
        this.loading = true;
        // Guardamos al empresa
        this.apiService.store('empresario', this.empresario.empresario).subscribe(empresario => {
            this.empresario.empresario = empresario;

            this.empresario.empresa_id = this.empresa.id;
            this.empresario.empresario_id = empresario.id;
            
            this.apiService.store('empresa/empresario/', this.empresario).subscribe(empresario => {
                this.loading = false;
                if (!this.empresario.id) {
                    this.empresario.id = empresario.id;
                    this.empresa.empresarios.push(this.empresario);
                }
                this.empresario = {};
                this.empresario.empresario = {};
                this.modalRef.hide();
            },error => {this.alertService.error(error); this.loading = false; });

        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(empresario:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/empresario/', empresario.id) .subscribe(data => {
                for (let i = 0; i < this.empresa.empresarios.length; i++) { 
                    if (this.empresa.empresarios[i].id == data.id )
                        this.empresa.empresarios.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
