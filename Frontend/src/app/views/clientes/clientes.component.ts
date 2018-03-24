import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
})
export class ClientesComponent implements OnInit {

	public clientes:Data;
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('clientes').subscribe(clientes => { 
            this.clientes = clientes;
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('clientes/buscar/', text).subscribe(clientes => { 
	    	    this.clientes = clientes;
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.clientes['data']) {
                //     if (this.clientes['data'][i].id == data.id )
                //         this.clientes['data'].splice(i, 1);
                // }
                 this.clientes.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('clientes?page='+ page).subscribe(clientes => { this.clientes = clientes; });
    }

}
