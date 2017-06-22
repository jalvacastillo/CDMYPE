import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-salida',
  templateUrl: './salida.component.html',
  styleUrls: ['./salida.component.css']
})
export class SalidaComponent implements OnInit {

    public salida: any = {};
    public loading = false;
    public asesores = [
                {id: 1, name:'Aminta', estado: false},
                {id: 2, name:'Jesus', estado: false},
                {id: 3, name:'Ingrid', estado: false},
                {id: 4, name:'Natalia', estado: false},
                {id: 5, name:'Walter', estado: false},
                {id: 6, name:'Gustavo', estado: false},
                {id: 7, name:'Rhina', estado: false}
              ]
 
    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.salida.fecha        = this.apiService.fecha();
                console.log(this.salida.fecha);
                this.salida.hora_salida = '09:00';
                this.salida.hora_regreso = '16:00';
                this.salida.objetivo = 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.';
                this.salida.justificacion = 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos.';
                this.salida.encargado_id = 5;
                for (let i in this.asesores) {
                    this.asesores[i].estado = true;
                }
            }
            else{
               this.apiService.read('salida/', params['id']).subscribe(salida => {
                   this.salida = salida;

                    for (let i in this.asesores) {
                       for(let j in this.salida['asesores']){
                           if(this.salida['asesores'][j].asesor_id === this.asesores[i].id) {
                               this.asesores[i].estado = true;
                           }
                       }
                    }
                   
               });
            }

        });

    }

    onChange(p){
        p.estado = !p.estado;
        console.log(this.asesores);
    }

    onSubmit() {
        this.loading = true;
        console.log(this.salida);
        this.apiService.store('salida', this.salida).subscribe(salida => {
            this.salida = salida;
            this.salida.asesores = this.asesores;
            this.apiService.store('salida/asesores', this.salida) .subscribe(asesor => {
                this.alertService.success("Guardado");
                this.loading = false;
            },error => {this.alertService.error(error); });
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}
