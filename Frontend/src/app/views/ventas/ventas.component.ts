import { Component, OnInit, TemplateRef } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-ventas',
  templateUrl: './ventas.component.html'
})

export class VentasComponent implements OnInit {

	public ventas:Data;
    public paginacion = [];
    public buscador:string;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('ventas').subscribe(ventas => { 
            this.ventas = ventas;
            this.paginacion = [];
            for (let i = 0; i < ventas.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
        if(text.length > 1) {
            this.apiService.read('ventas/buscar/', text).subscribe(ventas => { 
                this.ventas = ventas;
                this.paginacion = [];
                for (let i = 0; i < ventas.last_page; i++) { this.paginacion.push(i+1); }
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('venta/', id) .subscribe(data => {

                for (let i = 0; i < this.ventas['data'].length; i++) { 
                    if (this.ventas['data'][i].id == data.id )
                        this.ventas['data'].splice(i, 1);
                }

            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('ventas?page='+ page).subscribe(ventas => { this.ventas = ventas; });
    }

}
