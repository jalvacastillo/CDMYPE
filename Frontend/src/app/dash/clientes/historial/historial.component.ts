import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-historial',
  templateUrl: './historial.component.html',
  styleUrls: ['./historial.component.css']
})
export class HistorialComponent implements OnInit {

    public historial: any = [];
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 5;
        this.pasos.setPasos("cliente");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.historial = {};
            }
            else{
               this.apiService.read('cliente/', params['id']).subscribe(cliente => {
                   this.pasos.entidad = cliente;
                   this.apiService.read('cliente/historial/', cliente.id).subscribe(historial => {
                     this.historial = historial; 
                   });
               });
            }

        });

    }


}
