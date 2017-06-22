import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-acta',
  templateUrl: './acta.component.html',
  styleUrls: ['./acta.component.css']
})
export class AtActaComponent implements OnInit {

    public termino: any = {};
    public acta: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 6;
        this.pasos.setPasos("asistencia");
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.acta = {};
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;
                    this.apiService.read('atacta/', termino.id).subscribe(acta => {
                        this.acta = acta;
                    });
                });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.acta);
        this.apiService.store('atacta', this.acta).subscribe(data => {
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

