import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-noticias',
  templateUrl: './noticias.component.html',
})
export class NoticiasComponent implements OnInit {

	public noticias:Data;
    public paginacion = [];
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('noticias').subscribe(noticias => { 
            this.noticias = noticias;
            this.paginacion = [];
            for (let i = 0; i < noticias.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('noticias/buscar/', text).subscribe(noticias => { 
	    	    this.noticias = noticias;
	    	    this.paginacion = [];
	    	    for (let i = 0; i < noticias.last_page; i++) { this.paginacion.push(i+1); }
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.noticias['data']) {
                //     if (this.noticias['data'][i].id == data.id )
                //         this.noticias['data'].splice(i, 1);
                // }
                 this.noticias.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('noticias?page='+ page).subscribe(noticias => { this.noticias = noticias; });
    }

}
