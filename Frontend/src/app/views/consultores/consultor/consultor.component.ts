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
	            });
	        }

	    });

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al consultor
	    this.apiService.store('consultor', this.consultor).subscribe(consultor => {
	        this.consultor = consultor;
	        this.alertService.success("Consultor guardado");
	        this.loading = false;
	        this.router.navigate(['/consultor/'+ this.consultor.id]);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
