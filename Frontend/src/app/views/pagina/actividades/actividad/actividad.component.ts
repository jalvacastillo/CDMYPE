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
    public url_img_preview:any;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.actividad.estado = 'Activo';
                this.actividad.asesor_id = this.apiService.auth_user().id;
                this.actividad.fecha_inicio = this.apiService.date();
                this.actividad.fecha_fin = this.apiService.date();
                this.actividad.hora_inicio = '08:00';
                this.actividad.hora_fin = '14:00';
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

    setFile(event:any) {
        this.actividad.file = event.target.files[0];
        
        if (this.actividad.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result; };
            
            reader.readAsDataURL(this.actividad.file);
            
        }
        this.onSubmit();
    }
    public onSubmit() {

        let formData:FormData = new FormData();
        
        for (var key in this.actividad) {
            formData.append(key, this.actividad[key]);
        } 
        this.apiService.upload('actividad', formData).subscribe(actividad => {
            this.loading = false;
            this.alertService.success('Guardado');

        },error => {this.alertService.error(error); this.loading = false;});

    }
}

