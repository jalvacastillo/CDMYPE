import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-empresa',
  templateUrl: './empresa.component.html',
  styleUrls: ['./empresa.component.css']
})
export class EmpresaComponent implements OnInit {

  public empresa: any = {};
  public datos: any = {};
	public lab_id: number;
	public loading = false;

  	constructor( 
  	    private apiService: ApiService, private alertService: AlertService,
  	    private route: ActivatedRoute, private router: Router
  	) { }

  	ngOnInit() {
  	    
        this.apiService.read('empresa/', 1).subscribe(empresa => {
            this.empresa = empresa;
        },error => {
            this.alertService.error(error);
        });

  	}

  	public onSubmit() {
  	    this.loading = true;
  	    // Guardamos la empresa
  	    this.apiService.store('empresa', this.empresa).subscribe(empresa => {
  	        this.empresa = empresa;
  	        this.alertService.success("Datos guardados");
  	        this.loading = false;
  	    },error => {
  	        this.alertService.error(error._body);
  	        this.loading = false;
  	    });
  	}

}
