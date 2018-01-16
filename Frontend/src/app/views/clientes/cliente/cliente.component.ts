import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-cliente',
  templateUrl: './cliente.component.html'
})
export class ClienteComponent implements OnInit {

	public cliente: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.cliente = {};
	            this.cliente.usuario_id = this.apiService.auth_user().id;
	            this.cliente.laboratorio_id = this.apiService.auth_user().laboratorio_id;
	        }
	        else{
	            // Optenemos el cliente
	            this.apiService.read('cliente/', params['id']).subscribe(cliente => {
	               this.cliente = cliente;
	            });
	        }

	    });

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al cliente
	    this.apiService.store('cliente', this.cliente).subscribe(cliente => {
	        this.cliente = cliente;
	        this.alertService.success("Cliente guardado");
	        this.loading = false;
	        this.router.navigate(['/cliente/'+ this.cliente.id]);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
