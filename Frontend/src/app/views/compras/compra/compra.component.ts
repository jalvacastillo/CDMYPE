import { Component, OnInit, TemplateRef } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';


@Component({
  selector: 'app-compra',
  templateUrl: './compra.component.html'
})
export class CompraComponent implements OnInit {

	public compra:any = {};
    public loading = false;
    public detalles: any[] = [];
    public detalle: any = {};

    public proveedor:any = {};
	public proveedores:Data;

    modalRef: BsModalRef;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router,
	    private modalService: BsModalService
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.compra.fecha = this.apiService.fecha();
	            this.compra.usuario_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el compra
	            this.apiService.read('compra/', params['id']).subscribe(compra => {
	               this.compra = compra;
	            });
	        }

	    });

	}

	openModal(template: TemplateRef<any>) {
        this.modalRef = this.modalService.show(template);
    }

    searchProveedor(txt){
    	if(txt) {
    		this.apiService.read('proveedores/buscar/', txt).subscribe(proveedores => {
    		   this.proveedores = proveedores;
    		});
    	}else{
    		this.proveedores.data = [];
    		this.proveedor = {};
    	}
    }

    selectProveedor(proveedor){
    	this.proveedor = proveedor;
    	this.proveedores.data = [];
    }

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al compra
	    this.apiService.store('compra', this.compra).subscribe(compra => {
	        this.compra = compra;
	        console.log(compra);
	        this.alertService.success("Compra guardada");
	        this.loading = false;
	        this.router.navigate(['/compra/'+ this.compra.id]);
	    },error => {
	        this.alertService.error(error._body);
	        this.loading = false;
	    });
	}

}
