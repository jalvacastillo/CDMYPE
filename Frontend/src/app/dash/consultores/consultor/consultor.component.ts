import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-consultor',
  templateUrl: './consultor.component.html',
  styleUrls: ['./consultor.component.css']
})
export class ConsultorComponent implements OnInit {

    public consultor: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 1;
        this.pasos.setPasos("consultor");

        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.consultor = {};
            }
            else{
                this.apiService.read('consultor/', params['id']).subscribe(consultor => {
                    this.consultor = consultor;
                    this.pasos.entidad = consultor;
                });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.consultor);
        this.apiService.store('consultor', this.consultor)
        .subscribe(
            data => {
                this.alertService.success("Guardado");
                this.loading = false;
            },
            error => {
                this.alertService.error(error._body);
                this.loading = false;
            });

    }


}
