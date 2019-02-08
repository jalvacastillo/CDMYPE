import { Component, OnInit, TemplateRef } from '@angular/core';


import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-actividad',
  templateUrl: './actividad.component.html'
})
export class ActividadComponent implements OnInit {

    public actividad: any = {};
    
    public loading = false;

    // Img Upload
    public file:File;
    public preview:any;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.actividad.estado = 'Activo';
                this.actividad.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('actividad/', params['id']).subscribe(actividad => {
                   this.actividad = actividad;
               });
            }

        });


    }

    public setEstado(aplicacion:any, estado:string){
        aplicacion.estado = estado;
        this.apiService.store('actividad/aplicacion', aplicacion).subscribe(aplicacion => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }

    public setFile(event:any){
        this.file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = ()=> {
            this.preview = reader.result;
        };
        reader.readAsDataURL(this.file);

    }
    


}

