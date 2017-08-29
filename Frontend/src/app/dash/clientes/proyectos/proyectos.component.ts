import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-proyectos',
  templateUrl: './proyectos.component.html',
  styleUrls: ['./proyectos.component.css']
})
export class CProyectosComponent implements OnInit {

    public cliente: any = {};
    public proyectos: any = {};
    public proyecto: any = {};
    public acciones: any = [];
    public accion: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 4;
        this.pasos.setPasos("cliente");
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.proyecto = {};
                this.acciones = [];
                this.accion = {};
            }
            else{
               this.apiService.read('cliente/', params['id']).subscribe(cliente => {
                    this.cliente = cliente;
                    this.pasos.entidad = cliente;
                    this.apiService.read('proyecto/', cliente.id).subscribe(proyecto => {
                       this.proyecto = proyecto;
                       this.acciones = proyecto.acciones;
                    });
               });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        if(!this.proyecto.id) {
            this.proyecto.asesor_id = JSON.parse(sessionStorage.getItem('currentUser')).user.id;
            this.proyecto.cliente_id = this.cliente.id;
        }
        this.apiService.store('proyecto', this.proyecto).subscribe(proyecto => {
            this.proyecto = proyecto;
            for (let accion of this.acciones){
                accion.proyecto_id = this.proyecto.id;
                this.apiService.store('accion/', accion).subscribe(accion => {
                    this.alertService.success("Guardado");
                    this.loading = false;
                });
            }
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }

    addAccion(accion){
        if(accion.actividad && accion.responsable && accion.inicio && accion.fin) {
            if(!accion.id) {
                this.acciones.push(accion); this.accion = {};
            }
            this.accion = {};
        }
    }

    onSelect(accion){
        this.accion = accion;
    }

    onDelete(accion){
        for (let i in this.acciones) {
            if (this.acciones[i].id == accion.id )
                this.acciones.splice(i, 1);
        }
    }


}
