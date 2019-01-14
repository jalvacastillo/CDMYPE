import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-servicio',
  templateUrl: './servicio.component.html'
})
export class ServicioComponent implements OnInit {

    public servicio: any = {};
    public accion: any = {};
    public asesor: any = {};
    public especialidades: any[] = [];
    public loading = false;
    
    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.servicio.estado = 'Activo';
                this.servicio.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('servicio/', params['id']).subscribe(servicio => {
                   this.servicio = servicio;                   
               });
            }

        });

        this.apiService.getAll('especialidades').subscribe(especialidades => {
           this.especialidades = especialidades;                   
       });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.servicio);
        this.apiService.store('servicio', this.servicio).subscribe(servicio => {
           this.servicio = servicio;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


    // Acciones

    public seleccionarAccion(accion:any){
        this.accion = accion;
    }

    public agregarAccion() {
        this.loading = true;
        this.accion.servicio_id = this.servicio.id;
        this.apiService.store('servicio/accion', this.accion).subscribe(accion => {
            this.accion = {};
            if(!this.accion.id) {
                this.servicio.acciones.push(accion);
            }
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error);
            this.loading = false;
        });

    }

    public eliminarAccion(accion:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('servicio/accion/', accion.id) .subscribe(data => {
                for (let i = 0; i < this.servicio.acciones.length; i++) { 
                    if (this.servicio.acciones[i].id == data.id )
                        this.servicio.acciones.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }


}

