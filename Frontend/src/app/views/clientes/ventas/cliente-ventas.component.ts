import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

export interface Data{
    ventas:any[];
    nombre:string;
    registro:number; 
    municipio:string;
    num_ventas:number;
}

@Component({
  selector: 'app-cliente-ventas',
  templateUrl: './cliente-ventas.component.html'
})
export class ClienteVentasComponent implements OnInit {

		public cliente:Data;
		public token:string;

	    constructor(private apiService: ApiService, private alertService: AlertService,  private route: ActivatedRoute, private router: Router){ }

		ngOnInit() {
			this.token = this.apiService.auth_token();
	        this.loadAll();
	    }

	    public loadAll() {
	        this.route.params.subscribe(params => {
	                	        
       	        if(isNaN(params['id'])){
       	            this.router.navigate(['/dashboard']);
       	        }
       	        else{
       	            // Optenemos el cliente
       	            this.apiService.read('cliente/ventas/', params['id']).subscribe(cliente => {
       	               this.cliente = cliente;
       	            });
       	        }

       	    });
	    }

	    public search(text:any){
	    	if(text) {
		    	this.apiService.read('clientes/buscar/', text).subscribe(clientes => { 
		    	    this.cliente = clientes;
		    	}, error => {this.alertService.error(error); });
	    	}
	    }

	    // public delete($id) {
	    //     if (confirm('¿Desea eliminar el Registro?')) {
	    //         this.apiService.delete('cliente/', $id) .subscribe(data => {
	    //             for (let i in this.cliente.analisis['data']) {
	    //                 if (this.cliente.analisis['data'][i].id == data.id )
	    //                     this.cliente.analisis['data'].splice(i, 1);
	    //             }
	    //         }, error => {this.alertService.error(error); });
	                   
	    //     }

	    // }


}
