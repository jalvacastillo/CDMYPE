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
  selector: 'app-empresa-ventas',
  templateUrl: './empresa-ventas.component.html'
})
export class EmpresaVentasComponent implements OnInit {

		public empresa:Data;
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
       	            // Optenemos el empresa
       	            this.apiService.read('empresa/ventas/', params['id']).subscribe(empresa => {
       	               this.empresa = empresa;
       	            });
       	        }

       	    });
	    }

	    public search(text:any){
	    	if(text) {
		    	this.apiService.read('empresas/buscar/', text).subscribe(empresas => { 
		    	    this.empresa = empresas;
		    	}, error => {this.alertService.error(error); });
	    	}
	    }

	    // public delete($id) {
	    //     if (confirm('¿Desea eliminar el Registro?')) {
	    //         this.apiService.delete('empresa/', $id) .subscribe(data => {
	    //             for (let i in this.empresa.analisis['data']) {
	    //                 if (this.empresa.analisis['data'][i].id == data.id )
	    //                     this.empresa.analisis['data'].splice(i, 1);
	    //             }
	    //         }, error => {this.alertService.error(error); });
	                   
	    //     }

	    // }


}
