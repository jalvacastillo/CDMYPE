import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-salida',
  templateUrl: './salida.component.html'
})
export class SalidaComponent implements OnInit {

	public salida: any = {};
	public asesores: any = [];
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.salida = {};
                this.salida.fecha = this.apiService.date();
                this.salida.hora_salida = '08:30';
                this.salida.hora_regreso = '16:00';
	            this.salida.objetivo = 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico';
                this.salida.justificacion = 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos';
	        }
	        else{
	            // Optenemos el salida
	            this.apiService.read('salida/', params['id']).subscribe(salida => {
	               this.salida = salida;
	            });
	        }
            
            this.apiService.getAll('equipos/all').subscribe(asesores => {
               for (var i = 0; i < asesores.length; ++i) {
                   asesores[i].agregar = true;
               }
               this.asesores = asesores;
            });

	    });

	}


	public onSubmit() {
        this.loading = true;
        // Guardamos al at
        this.salida.estado = 'Creada';
        this.salida.asesores = this.asesores;
        this.apiService.store('salida', this.salida).subscribe(salida => {
            if(!this.salida.id) {
                this.router.navigate(['/salida/'+ salida.id]);
            }else{
                this.salida = salida;
            }
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

}
