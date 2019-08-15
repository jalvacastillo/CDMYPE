import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-usuario',
  templateUrl: './usuario.component.html',
  styleUrls: ['./usuario.component.css']
})
export class UsuarioComponent implements OnInit {

	public usuario: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.usuario.laboratorio_id = this.apiService.auth_user().laboratorio_id;

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al usuario
	    this.apiService.store('usuario', this.usuario).subscribe(usuario => {
	        this.usuario = usuario;
	        console.log(usuario);
	        this.alertService.success("Usuario guardado");
	        this.loading = false;
	        this.router.navigate(['/admin/usuarios']);
	    },error => {
	        this.alertService.error(error);
	        this.loading = false;
	    });
	}

}
