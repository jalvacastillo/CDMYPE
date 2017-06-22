import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';


@Component({
  selector: 'app-salidas',
  templateUrl: './salidas.component.html',
  styleUrls: ['./salidas.component.css']
})
export class SalidasComponent implements OnInit {

    public salidas: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.salidas);
    }

    private loadAll() {
        this.apiService.getAll('salidas').subscribe(salidas => { 
            this.salidas = salidas;
            for (let i = 0; i < salidas.last_page; i++) {this.paginacion.push(i+1);
            }
        }, error => {this.alertService.error(error); });
    }

    private delete(salida) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('salida/', salida) .subscribe(data => {
                for (let i in this.salidas['data']) {
                    if (this.salidas['data'][i].id == data.id )
                        this.salidas['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('salidas?page='+ page).subscribe(salidas => { this.salidas = salidas; });
    }

}
