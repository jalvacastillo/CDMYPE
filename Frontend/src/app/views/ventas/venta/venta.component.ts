import { Component, OnInit, TemplateRef } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-venta',
  templateUrl: './venta.component.html'
})

export class VentaComponent implements OnInit {

	public venta: any= {};
	public detalles: any[] = [];
	public detalle: any = {};
	
	public cliente: any = {};
	public clientes:Data;

    public loading = false;
    modalRef: BsModalRef;
    
	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router,
	    private modalService: BsModalService
	) { }

	ngOnInit() {

		this.detalles = [
							{'id': 1, 'descripcion': 'Producto 1', 'cantidad': 1, 'medida': 'Gal', 'precio': 2}
						];
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.venta.fecha = this.apiService.fecha();
	            this.venta.usuario_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el venta
	            this.apiService.read('venta/', params['id']).subscribe(venta => {
	               this.venta = venta;
	            });
	        }

	    });

	}


    openModal(template: TemplateRef<any>) {
        this.modalRef = this.modalService.show(template);
    }

    searchCliente(txt){
    	if(txt) {
    		this.apiService.read('clientes/buscar/', txt).subscribe(clientes => {
    		   this.clientes = clientes;
    		});
    	}else{
    		this.clientes.data = [];
    		this.cliente = {};
    	}
    }

    selectCliente(cliente){
    	this.cliente = cliente;
    	this.clientes.data = [];
    }


	public onSubmit() {
	    this.loading = true;
	    // Guardamos al venta
	    this.apiService.store('venta', this.venta).subscribe(venta => {
	        this.venta = venta;
	        console.log(venta);
	        this.alertService.success("Venta guardada");
	        this.loading = false;
	        this.router.navigate(['/venta/'+ this.venta.id]);
	    },error => {
	        this.alertService.error(error._body);
	        this.loading = false;
	    });
	}

}
