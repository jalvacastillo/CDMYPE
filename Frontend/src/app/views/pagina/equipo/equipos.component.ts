import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-equipos',
  templateUrl: './equipos.component.html'
})

export class EquiposComponent implements OnInit {

		public equipos:any = [];
	    public buscador:any = '';
	    public loading:boolean = false;

	    constructor(public apiService: ApiService, private alertService: AlertService){ }

		ngOnInit() {
	        this.loadAll();
	    }

	    public loadAll() {
	        this.loading = true;
	        this.apiService.getAll('equipos').subscribe(equipos => { 
	            this.equipos = equipos;
	            this.loading = false;
	        }, error => {this.alertService.error(error); this.loading = false;});
	    }

	    public search(){
	        if(this.buscador && this.buscador.length > 2) {
	            this.loading = true;
	            this.apiService.read('equipos/buscar/', this.buscador).subscribe(equipos => { 
	                this.equipos = equipos;
	                this.loading = false;
	            }, error => {this.alertService.error(error); this.loading = false;});
	        }
	    }

	    public activar(equipo:any){
	        equipo.web = !equipo.web;
	        this.apiService.store('equipo', equipo).subscribe(equipo => {
	            this.alertService.success("Guardado");
	        },error => {this.alertService.error(error); this.loading = false; });
	    }

	    public delete(equipo) {
	        if (confirm('¿Desea eliminar el Registro?')) {
	            this.apiService.delete('equipo/', equipo) .subscribe(data => {
	                for (let i = 0; i < this.equipos['data'].length; i++) { 
	                    if (this.equipos['data'][i].id == data.id )
	                        this.equipos['data'].splice(i, 1);
	                }
	            }, error => {this.alertService.error(error); });
	                   
	        }

	    }

	    public setPagination(event):void{
	        this.loading = true;
	        this.apiService.paginate(this.equipos.path + '?page='+ event.page).subscribe(equipos => { 
	            this.equipos = equipos;
	            this.loading = false;
	        }, error => {this.alertService.error(error); this.loading = false;});
	    }

}

