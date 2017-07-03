import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-termino',
  templateUrl: './termino.component.html',
  styleUrls: ['./termino.component.css']
})
export class AtTerminoComponent implements OnInit {

    public termino: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 1;
        this.pasos.setPasos("asistencia");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.termino = {};
                this.termino.cliente_id = 1;
                this.termino.tema = "Hola";
                this.termino.obj_general = "Hola";
                this.termino.obj_especifico = "Hola";
                this.termino.productos = "Hola";
                this.termino.especialidad_id = 1;
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;
                });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.termino);
        this.termino.asesor_id = JSON.parse(localStorage.getItem('currentUser')).user.id;

        this.apiService.store('attermino', this.termino).subscribe(termino => {
            this.alertService.success("Guardado");
            if(!this.termino.id) {
                this.router.navigate(['/asistencia/consultores/', termino.id]);
            }
            this.termino = termino;
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

