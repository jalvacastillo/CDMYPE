import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-proyecto',
  templateUrl: './proyecto.component.html'
})
export class ProyectoComponent implements OnInit {

    public proyecto: any = {};
    public especialidades: any[] = [];
    public loading = false;
    
    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.proyecto.estado = 'Activo';
                this.proyecto.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('proyecto/', params['id']).subscribe(proyecto => {
                   this.proyecto = proyecto;                   
               });
            }

        });

        this.apiService.getAll('especialidades').subscribe(especialidades => {
           this.especialidades = especialidades;                   
       });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.proyecto);
        this.apiService.store('proyecto', this.proyecto).subscribe(proyecto => {
           this.proyecto = proyecto;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

