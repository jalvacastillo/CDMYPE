import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-compras',
  templateUrl: './compras.component.html'
})

export class ComprasComponent implements OnInit {

	public compras:Data;
    
    public paginacion = [];
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('compras').subscribe(compras => { 
            this.compras = compras;
            this.paginacion = [];
            for (let i = 0; i < compras.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('compras/buscar/', text).subscribe(compras => { 
	    	    this.compras = compras;
	    	    this.paginacion = [];
	    	    for (let i = 0; i < compras.last_page; i++) { this.paginacion.push(i+1); }
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('compra/', id) .subscribe(data => {

                this.compras.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });

                // for (let i: string in this.compras['data']) {
                //     if (this.compras['data'][i].id == data.id )
                //         this.compras['data'].splice(i, 1);
                // }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('compras?page='+ page).subscribe(compras => { this.compras = compras; });
    }

}
