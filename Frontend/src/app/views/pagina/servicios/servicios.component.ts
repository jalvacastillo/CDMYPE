import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';


@Component({
  selector: 'app-servicios',
  templateUrl: './servicios.component.html'
})
export class ServiciosComponent implements OnInit {

    public servicios:Data;
    public buscador:any = '';
    public loading = false;

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.servicios);
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('servicios').subscribe(servicios => { 
            this.servicios = servicios;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false; });
    }

    public delete(servicio) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('servicio/', servicio) .subscribe(data => {
                for (let i = 0; i < this.servicios['data'].length; i++) { 
                    if (this.servicios['data'][i].id == data.id )
                        this.servicios['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public search(){
        if(this.buscador && this.buscador.length > 2) {
            this.loading = true;
            this.apiService.read('servicios/buscar/', this.buscador).subscribe(servicios => { 
                this.servicios = servicios;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.servicios.path + '?page='+ event.page).subscribe(servicios => { 
            this.servicios = servicios;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}

