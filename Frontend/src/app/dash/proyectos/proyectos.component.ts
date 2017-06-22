import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';


@Component({
  selector: 'app-proyectos',
  templateUrl: './proyectos.component.html',
  styleUrls: ['./proyectos.component.css']
})
export class ProyectosComponent implements OnInit {

    public proyectos: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.proyectos);
    }

    private loadAll() {
        this.apiService.getAll('proyectos').subscribe(proyectos => { 
            this.proyectos = proyectos;
            for (let i = 0; i < proyectos.last_page; i++) {this.paginacion.push(i+1);
            }
        }, error => {this.alertService.error(error); });
    }

    private delete(proyecto) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('proyecto/', proyecto) .subscribe(data => {
                for (let i in this.proyectos['data']) {
                    if (this.proyectos['data'][i].id == data.id )
                        this.proyectos['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('proyectos?page='+ page).subscribe(proyectos => { this.proyectos = proyectos; });
    }

}

