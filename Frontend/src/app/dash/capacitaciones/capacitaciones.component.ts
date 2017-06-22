import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-capacitaciones',
  templateUrl: './capacitaciones.component.html',
  styleUrls: ['./capacitaciones.component.css']
})
export class CapacitacionesComponent implements OnInit {

    public capacitaciones: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    private loadAll() {
        this.apiService.getAll('capterminos').subscribe(capacitaciones => { 
            this.capacitaciones = capacitaciones;
            this.paginacion = [];
            for (let i = 0; i < capacitaciones.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    private delete($id) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('captermino/', $id) .subscribe(data => {
                for (let i in this.capacitaciones['data']) {
                    if (this.capacitaciones['data'][i].id == data.id )
                        this.capacitaciones['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('capacitaciones?page='+ page).subscribe(capacitaciones => { this.capacitaciones = capacitaciones; });
    }

}

