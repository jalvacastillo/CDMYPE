import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-indicadores',
  templateUrl: './indicadores.component.html',
  styleUrls: ['./indicadores.component.css']
})
export class IndicadoresComponent implements OnInit {

    public cliente: any = [];
    public indicadores: any = [];
    public indicador: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 3;
        this.pasos.setPasos("cliente");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.indicadores = {};
            }
            else{
               this.apiService.read('cliente/', params['id']).subscribe(cliente => {
                   this.cliente = cliente;
                   this.pasos.entidad = cliente;
                   this.apiService.read('indicadores/', cliente.id).subscribe(indicadores => {
                       this.indicadores = indicadores;
                       if(indicadores.total > 0) {
                         this.indicador = indicadores['data'][0];
                       }
                       else{
                         this.indicador = {};
                       }
                   });
               });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        // Si el indicador no existe
        if(!this.indicador.id) {
            this.indicador.cliente_id = this.cliente.id;
            this.indicador.asesor_id = JSON.parse(sessionStorage.getItem('currentUser')).user.id;
        }

        this.apiService.store('indicador', this.indicador).subscribe(indicador => {
            this.alertService.success("Guardado");
            if(!this.indicador.id) {
                this.router.navigate(['/cliente/proyectos/', this.cliente.id]);
            }
            this.indicador = indicador;
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }

    onSelect(indicador:any){
        this.indicador = indicador;
    }

}
