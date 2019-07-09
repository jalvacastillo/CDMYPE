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
                this.actividad.img = 'default.jpg';
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

    public onSubmit() {

        if(this.file) {
            this.loading = true;
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('id', this.actividad.id);
            formData.append('nombre', this.actividad.nombre);
            let img = d.getTime() + ' - ' + this.file.name;
            formData.append('img', img);

            this.apiService.upload('actividad', formData).subscribe(data => {
                this.actividad.img = img;
                this.alertService.success('Guardado')
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    setFile(event:any) {
        this.file = event.target.files[0];
        this.onSubmit();
    }
    


}

