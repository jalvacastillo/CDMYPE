import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html',
  styleUrls: ['./usuarios.component.css']
})

export class UsuariosComponent implements OnInit {

		public usuarios:Data
	    public paginacion = [];
	    public buscador:string;

	    constructor(private apiService: ApiService, private alertService: AlertService){ }

		ngOnInit() {
	        this.loadAll();
	    }

	    public loadAll() {
	        this.apiService.getAll('usuarios').subscribe(usuarios => { 
	            this.usuarios = usuarios;
	            this.paginacion = [];
	            for (let i = 0; i < usuarios.last_page; i++) { this.paginacion.push(i+1); }
	        }, error => {this.alertService.error(error); });
	    }

	    public search(text:any){
	    	if(text) {
		    	this.apiService.read('usuarios/buscar/', text).subscribe(usuarios => { 
		    	    this.usuarios = usuarios;
		    	    this.paginacion = [];
		    	    for (let i = 0; i < usuarios.last_page; i++) { this.paginacion.push(i+1); }
		    	}, error => {this.alertService.error(error); });
	    	}
	    }

	    public delete(id:number) {
	        if (confirm('¿Desea eliminar el Registro?')) {
	            this.apiService.delete('usuario/', id) .subscribe(data => {
	                // for (let i in this.usuarios['data']) {
	                //     if (this.usuarios['data'][i].id == data.id )
	                //         this.usuarios['data'].splice(i, 1);
	                // }
	                this.usuarios.data.forEach( item => {
	                    if (item.id == data.id )
	                        item.pop();
	                });
	            }, error => {this.alertService.error(error); });
	                   
	        }

	    }

	    public setPaginacion(page:number) {
	        this.apiService.getAll('usuarios?page='+ page).subscribe(usuarios => { this.usuarios = usuarios; });
	    }

}

