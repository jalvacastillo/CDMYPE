import { Component, OnInit, EventEmitter, Input, Output, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { ApiService } from '../../../services/api.service';
import { AlertService } from '../../../services/alert.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-venta-producto',
  templateUrl: './venta-producto.component.html'
})
export class VentaProductoComponent implements OnInit {

	@Output() productoSelect = new EventEmitter();
	modalRef: BsModalRef;

	public productos:Data;
	public producto: any = {};
    public loading:boolean;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private modalService: BsModalService
	) { }

	ngOnInit() {
        this.producto = {};
	}

	openModal(template: TemplateRef<any>) {
        this.modalRef = this.modalService.show(template);
    }

	searchProducto(){
        if(this.producto.nombre && this.producto.nombre.length > 1) {
            this.loading = true;
            this.apiService.read('productos/buscar/', this.producto.nombre).subscribe(productos => {
               this.productos = productos;
               this.loading = false;
    		}, error => {this.alertService.error(error._body);this.loading = false;});
		}else if (!this.producto.nombre  || this.producto.nombre.length < 1 ){ this.loading = false; this.producto = {}; this.productos.total = 0; }
    }

    selectProducto(producto){
    	this.producto = producto;
    	this.productos.total = 0;
    	document.getElementById('cantidad').focus();
    	this.producto.cantidad = 1;
    }

    agregarDetalle(){
    	this.producto.producto_id = this.producto.id;
        this.producto.producto = this.producto.nombre;

        // Impuestos
        this.producto.iva = 0.13;
        this.producto.fovial = 0;
        this.producto.contrans = 0;

		this.productoSelect.emit({producto: this.producto});
        this.producto = {};
		this.modalRef.hide();
	}

}
