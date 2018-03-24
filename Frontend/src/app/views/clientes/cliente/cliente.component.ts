import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-cliente',
  templateUrl: './cliente.component.html'
})
export class ClienteComponent implements OnInit {

	public cliente: any = {};
	public empresa: any = {};
	public empresario: any = {};
	public productos: any[] = [];
	public producto: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.cliente = {};
	            this.cliente.logo = 'default.png';
	            this.cliente.usuario_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el cliente
	            this.apiService.read('cliente/', params['id']).subscribe(cliente => {
	               this.cliente = cliente;
	               this.productos = cliente.productos;
	               this.empresa = cliente.empresa;
	               this.empresario = cliente.empresario;
	            });
	        }

	    });

	}

	public addProducto(){
		if (this.producto.nombre) {
			this.producto.cliente_id = this.cliente.id;
			this.apiService.store('producto', this.producto).subscribe(producto => {
		        this.loading = false;
		        if (!this.producto.id) { 
					this.productos.push(this.producto);
		        }
				this.producto = {};
		    },error => {this.alertService.error(error); this.loading = false; });
		}
	}

	public selProducto(producto:any){
		this.producto = producto;
	}

	public delProducto(id:number) {
	    if (confirm('¿Desea eliminar el Registro?')) {
	        this.apiService.delete('producto/', id) .subscribe(data => {
	            for (let i = 0; i < this.productos.length; i++) { 
	                if (this.productos[i].id == data.id )
	                    this.productos.splice(i, 1);
	            }
	        }, error => {this.alertService.error(error); });
	    }

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al cliente
	    this.apiService.store('empresa', this.empresa).subscribe(empresa => {
	    	this.empresa = empresa;
	    	this.apiService.store('empresario', this.empresario).subscribe(empresario => {
	    		this.empresario = empresario;

	    		this.cliente.empresa_id = this.empresa.id;
	    		this.cliente.empresario_id = this.empresario.id;
	    		
	    		this.apiService.store('cliente', this.cliente).subscribe(cliente => {
			        this.alertService.success("Guardado");
			        this.loading = false;
				    this.router.navigate(['/cliente/'+ cliente.id]);
			        
			    },error => {this.alertService.error(error); this.loading = false; });
		    },error => {this.alertService.error(error); this.loading = false; });

	    },error => {this.alertService.error(error); this.loading = false; });
	}

	uploadFile(cliente, event) {

        let fileList: FileList = event.target.files;
        let logo: File = fileList[0];

        this.apiService.upload('cliente-logo', cliente.id, logo).subscribe(cliente => {
            this.cliente.logo = cliente.logo;
            this.alertService.success("Guardado");
        },error => {
            this.alertService.error(error._body);
        });

    }

}
