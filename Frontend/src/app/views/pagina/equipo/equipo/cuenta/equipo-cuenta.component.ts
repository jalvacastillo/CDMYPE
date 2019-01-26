import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-equipo-cuenta',
  templateUrl: './equipo-cuenta.component.html'
})
export class EquipoCuentaComponent implements OnInit {

	@Input() equipo:any = {};
	public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al equipo
	    this.apiService.store('usuario', this.equipo.usuario).subscribe(equipo => {
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
