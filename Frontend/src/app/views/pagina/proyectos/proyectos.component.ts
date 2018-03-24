import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';


@Component({
  selector: 'app-proyectos',
  templateUrl: './proyectos.component.html'
})
export class ProyectosComponent implements OnInit {

    public proyectos:Data;
    public paginacion = [];
    public buscador:any = '';

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.proyectos);
    }

    public loadAll() {
        this.apiService.getAll('proyectos').subscribe(proyectos => { 
            this.proyectos = proyectos;
            for (let i = 0; i < proyectos.last_page; i++) {this.paginacion.push(i+1);
            }
        }, error => {this.alertService.error(error); });
    }

    public delete(proyecto) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('proyecto/', proyecto) .subscribe(data => {
                for (let i = 0; i < this.proyectos['data'].length; i++) { 
                    if (this.proyectos['data'][i].id == data.id )
                        this.proyectos['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public search(){
        if(this. buscador > 1) {
            this.apiService.read('proyectos/buscar/', this.buscador).subscribe(proyectos => { 
                this.proyectos = proyectos;
                this.paginacion = [];
                for (let i = 0; i < proyectos.last_page; i++) { this.paginacion.push(i+1); }
            }, error => {this.alertService.error(error); });
        }
    }

    private setPaginacion(page:number) {
        this.apiService.getAll('proyectos?page='+ page).subscribe(proyectos => { this.proyectos = proyectos; });
    }

}

