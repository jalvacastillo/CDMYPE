import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-testimonio',
  templateUrl: './testimonio.component.html'
})
export class TestimonioComponent implements OnInit {

	public testimonio: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.testimonio = {};
	            this.testimonio.asesor_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el testimonio
	            this.apiService.read('testimonio/', params['id']).subscribe(testimonio => {
	               this.testimonio = testimonio;
	            });
	        }

	    });

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al testimonio
	    this.apiService.store('testimonio', this.testimonio).subscribe(testimonio => {
	        this.testimonio = testimonio;
	        this.alertService.success("Producto guardado");
	        this.loading = false;
	        this.router.navigate(['/testimonio/'+ this.testimonio.id]);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
