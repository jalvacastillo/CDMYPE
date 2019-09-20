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
    public file2:File;
    modalRef: BsModalRef;
    public url_img_preview: any;

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
        if(!this.producto.img){
            this.producto.img = 'empresa/productos/default.jpg'; 
        }
        
        this.modalRef = this.modalService.show(template);        
    }

    setFile2(event:any) {
        this.producto.file = event.target.files[0];
        console.log(this.producto.file);
        if (this.producto.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result;console.log(this.url_img_preview); };
            
            reader.readAsDataURL(this.producto.file);
        } 
    }

    public onSubmit(){
        this.loading = true;
        let formData:FormData = new FormData();

        this.producto.empresa_id = this.empresa.id;
        for (var key in this.producto) {
            formData.append(key, this.producto[key]);
        }
        this.apiService.upload('empresa/producto', formData).subscribe(producto => {
            this.loading = false;
            if (!this.producto.id) { 
                this.empresa.productos.push(producto);      
            }     
            this.modalRef.hide();
            this.url_img_preview = null;
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
