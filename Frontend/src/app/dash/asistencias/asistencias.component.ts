import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-asistencias',
  templateUrl: './asistencias.component.html',
  styleUrls: ['./asistencias.component.css']
})
export class AsistenciasComponent implements OnInit {

    public asistencias: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    private loadAll() {
        this.apiService.getAll('atterminos').subscribe(asistencias => { 
            this.asistencias = asistencias;
            this.paginacion = [];
            for (let i = 0; i < asistencias.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    private delete($id) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('attermino/', $id) .subscribe(data => {
                for (let i in this.asistencias['data']) {
                    if (this.asistencias['data'][i].id == data.id )
                        this.asistencias['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('asistencias?page='+ page).subscribe(asistencias => { this.asistencias = asistencias; });
    }

}

