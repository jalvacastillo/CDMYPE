import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.component.html',
  styleUrls: ['./perfil.component.css']
})
export class PerfilComponent implements OnInit {

  	public usuario: any = {};
	  public loading = false;

  	constructor( 
  	    private apiService: ApiService, private alertService: AlertService,
  	    private route: ActivatedRoute, private router: Router
  	) { }

  	ngOnInit() {
  	    

        this.route.params.subscribe(params => {
            if(params['id']) {
              console.log('id');
                this.apiService.read('usuario/', params['id']).subscribe(usuario => {
                   this.usuario = usuario;
                });
            }else{
                this.usuario = this.apiService.auth_user();
            }

        });

  	}

  	public onSubmit() {
  	    this.loading = true;
  	    // Guardamos la empresa
  	    this.apiService.store('usuario', this.usuario).subscribe(usuario => {
  	        this.usuario = usuario;
  	        console.log(usuario);
  	        this.alertService.success("Usuario guardado");
  	        this.loading = false;
  	    },error => {
  	        this.alertService.error(error._body);
  	        this.loading = false;
  	    });
  	}

}
