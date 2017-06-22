import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-consultores',
  templateUrl: './consultores.component.html',
  styleUrls: ['./consultores.component.css']
})
export class AtConsultoresComponent implements OnInit {

    public termino: any = {};
    public consultores: any = [];
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 2;
        this.pasos.setPasos("asistencia");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.consultores = {};
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;
                    
                    this.apiService.read('consultor/byespecialidad/', termino.especialidad_id).subscribe(consultores => {
                        this.consultores = consultores; 
                    });
                });
            }

        });

    }

    onSubmit() {
        this.termino.consultores = this.consultores;
        this.loading = true;
        console.log(this.termino);
        this.apiService.store('atconsultores/enviartdr/', this.termino).subscribe(consultores => {
            console.log(this.consultores);
            this.alertService.success("Guardado");
            this.loading = false;
        }, error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

