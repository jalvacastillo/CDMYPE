import { Component, OnInit, ViewChild  } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-ofertas',
  templateUrl: './ofertas.component.html',
  styleUrls: ['./ofertas.component.css']
})
export class AtOfertasComponent implements OnInit {

    public termino: any = {};
    public consultores: any = [];
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 4;
        this.pasos.setPasos("asistencia");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.consultores = {};
            }
            else{
                this.apiService.read('attermino/', params['id']).subscribe(termino => {
                    this.termino = termino;
                    this.pasos.entidad = termino;

                    // Verificamos si ya hay consultores sino los buscamos
                    this.apiService.read('atconsultores/ofertantes/', termino.id).subscribe(consultores => {
                        this.consultores = consultores; 
                    });
                });
            }

        });

    }

    onSelect(consultor) {
        this.loading = true;
        this.termino.consultor_id = consultor.id;

        this.apiService.store('atconsultor/seleccionar', this.termino).subscribe(data => {
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

