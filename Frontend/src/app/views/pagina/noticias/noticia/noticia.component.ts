import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-noticia',
  templateUrl: './noticia.component.html'
})
export class NoticiaComponent implements OnInit {

	public noticia: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.noticia = {};
	            this.noticia.asesor_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el noticia
	            this.apiService.read('noticia/', params['id']).subscribe(noticia => {
	               this.noticia = noticia;
	            });
	        }

	    });

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al noticia
	    this.apiService.store('noticia', this.noticia).subscribe(noticia => {
	        this.noticia = noticia;
	        this.alertService.success("Producto guardado");
	        this.loading = false;
	        this.router.navigate(['/noticia/'+ this.noticia.id]);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
