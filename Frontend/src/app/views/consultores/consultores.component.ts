import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-consultores',
  templateUrl: './consultores.component.html',
})
export class ConsultoresComponent implements OnInit {

	public consultores:Data;
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('consultores').subscribe(consultores => { 
            this.consultores = consultores;
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('consultores/buscar/', text).subscribe(consultores => { 
	    	    this.consultores = consultores;
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.consultores['data']) {
                //     if (this.consultores['data'][i].id == data.id )
                //         this.consultores['data'].splice(i, 1);
                // }
                 this.consultores.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('consultores?page='+ page).subscribe(consultores => { this.consultores = consultores; });
    }

}
