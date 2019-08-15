import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-empresa-productos',
  templateUrl: './empresa-productos.component.html'
})
export class EmpresaProductosComponent implements OnInit {

	@Input() empresa:any = {};
    public producto:any = {};
    public loading:boolean = false;
    public file:File;
    modalRef: BsModalRef;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() { 
        this.router.routeReuseStrategy.shouldReuseRoute = function (){
        return false;
    };

	}

    public openModal(template: TemplateRef<any>, producto:any) {
        this.producto = producto;
        if(!this.producto.fecha) {
            this.producto.fecha = this.apiService.date();
        }
        this.modalRef = this.modalService.show(template);        
    }

    setPhotoP(event:any) {
        console.log('si');
        this.file = event.target.files[0];
        // this.onSubmit();
    }

    public onSubmit(){
        this.loading = true;
        this.producto.empresa_id = this.empresa.id;
        this.producto.img = 'default.jpg';

        this.apiService.store('empresa/producto', this.producto).subscribe(producto => {
            this.loading = false;
            if (!this.producto.id) { 
                this.empresa.productos.push(producto);
            }
           
            this.modalRef.hide();
            this.producto = {};
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(producto:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/producto/', producto.id) .subscribe(data => {
                for (let i = 0; i < this.empresa.productos.length; i++) { 
                    if (this.empresa.productos[i].id == data.id )
                        this.empresa.productos.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
