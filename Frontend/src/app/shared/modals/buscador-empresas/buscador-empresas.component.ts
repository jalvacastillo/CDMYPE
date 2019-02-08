import { Component, OnInit, EventEmitter, Input, Output, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { ApiService } from '../../../services/api.service';
import { AlertService } from '../../../services/alert.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-buscador-empresas',
  templateUrl: './buscador-empresas.component.html'
})
export class BuscadorEmpresasComponent implements OnInit {

	@Input() empresa: any = {};
	@Output() empresaSelect = new EventEmitter();
	modalRef: BsModalRef;

	public empresas:Data;
	public loading:boolean;


	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private modalService: BsModalService
	) { }

	ngOnInit() {
	}

	openModal(template: TemplateRef<any>) {
        this.modalRef = this.modalService.show(template);
    }

	searchEmpresa(){
		this.loading = true;
		if(this.empresa.nombre && this.empresa.nombre.length > 1) {
			this.apiService.read('empresas/buscar/', this.empresa.nombre).subscribe(empresas => {
			   	this.empresas = empresas;
				this.loading = false;
			}, error => {this.alertService.error(error._body); this.loading = false;});
		}else if (!this.empresa.nombre  || this.empresa.nombre.length < 1){this.loading = false; this.empresa = {}; this.empresas.total = 0; }
	}

	selectProveedor(empresa){
		this.empresa = empresa;
		this.empresaSelect.emit({empresa: this.empresa});
		this.empresas.total = 0;
		this.modalRef.hide()
	}

}
