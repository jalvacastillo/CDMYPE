import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-consultor-cuenta',
  templateUrl: './consultor-cuenta.component.html'
})
export class ConsultorCuentaComponent implements OnInit {

	@Input() consultor:any = {};
	public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al consultor
	    this.apiService.store('usuario', this.consultor.usuario).subscribe(consultor => {
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
