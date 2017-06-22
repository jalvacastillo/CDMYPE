import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-especialidades',
  templateUrl: './especialidades.component.html',
  styleUrls: ['./especialidades.component.css']
})
export class CEspecialidadesComponent implements OnInit {

    public consultor: any = {};
    public especialidades: any = [];
    public especialidad: any = {}
    public listaEsp: any = [];
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 2;
        this.pasos.setPasos("consultor");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.especialidades = {};
            }
            else{
               this.apiService.read('consultor/', params['id']).subscribe(consultor => {
                   this.consultor = consultor;
                   this.pasos.entidad = consultor;
                   this.apiService.read('consultor/especialidades/', consultor.id).subscribe(especialidades => {
                     this.especialidades = especialidades; 
                   });
               });
            }

            this.apiService.getAll('especialidades').subscribe(listaEsp => {
              this.listaEsp = listaEsp; 
            });

        });

    }

    onDelete(especialidad){
        if(confirm("Desea eliminar el Registro")) {
            this.apiService.delete('consultor/especialidad/', especialidad.id).subscribe(especialidad => {
                for (let i in this.especialidades) {
                    if (this.especialidades[i].id == especialidad.id )
                        this.especialidades.splice(i, 1);
                }
                this.alertService.success('Eliminado');
            });
        }
    }
    onSubmit(){
        this.especialidad.consultor_id = this.consultor.id;
        this.apiService.store('consultor/especialidad', this.especialidad).subscribe(especialidad => {
            this.especialidades.push(especialidad);
            this.especialidad = {};
            this.alertService.success('Guardado');
        }, error => {
            this.alertService.success(error._body);
        });
    }

}
