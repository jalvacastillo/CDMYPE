import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-consultor',
  templateUrl: './consultor.component.html'
})
export class ConsultorComponent implements OnInit {

	public consultor: any = {};
	public especialidades: any[] = [];
	public especialidad: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.consultor = {};
	            this.consultor.usuario_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el consultor
	            this.apiService.read('consultor/', params['id']).subscribe(consultor => {
	               this.consultor = consultor;
	               this.especialidades = consultor.especialidades;
	            });
	        }

	    });

	}

	public addEspecialidad(){
		if (this.especialidad.nombre) {
			this.especialidad.consultor_id = this.consultor.id;
			this.apiService.store('especialidad', this.especialidad).subscribe(especialidad => {
		        this.loading = false;
		        if (!this.especialidad.id) { 
					this.especialidades.push(this.especialidad);
		        }
				this.especialidad = {};
		    },error => {this.alertService.error(error); this.loading = false; });
		}
	}

	public delEspecialidad(id:number) {
	    if (confirm('¿Desea eliminar el Registro?')) {
	        this.apiService.delete('especialidad/', id) .subscribe(data => {
	            for (let i = 0; i < this.especialidades.length; i++) { 
	                if (this.especialidades[i].id == data.id )
	                    this.especialidades.splice(i, 1);
	            }
	        }, error => {this.alertService.error(error); });
	    }

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al consultor
	    this.apiService.store('consultor', this.consultor).subscribe(consultor => {
	        this.alertService.success("Consultor guardado");
	        this.loading = false;
	        this.router.navigate(['/consultor/'+ consultor.id]);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
