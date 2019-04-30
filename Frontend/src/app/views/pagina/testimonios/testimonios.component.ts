import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-testimonios',
  templateUrl: './testimonios.component.html',
})
export class TestimoniosComponent implements OnInit {

	public testimonios:any = [];
    public paginacion = [];
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('testimonios').subscribe(testimonios => { 
            this.testimonios = testimonios;
            this.paginacion = [];
            for (let i = 0; i < testimonios.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('testimonios/buscar/', text).subscribe(testimonios => { 
	    	    this.testimonios = testimonios;
	    	    this.paginacion = [];
	    	    for (let i = 0; i < testimonios.last_page; i++) { this.paginacion.push(i+1); }
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.testimonios['data']) {
                //     if (this.testimonios['data'][i].id == data.id )
                //         this.testimonios['data'].splice(i, 1);
                // }
                 this.testimonios.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('testimonios?page='+ page).subscribe(testimonios => { this.testimonios = testimonios; });
    }

}
