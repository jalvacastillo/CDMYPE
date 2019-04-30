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
  	    public apiService: ApiService, private alertService: AlertService,
  	    private route: ActivatedRoute, private router: Router
  	) { }

  	ngOnInit() {
  	    

        this.route.params.subscribe(params => {
            if(params['id']) {
                this.apiService.read('usuario/', params['id']).subscribe(usuario => {
                   this.usuario = usuario;
                });
            }else{
                this.apiService.read('usuario/', this.apiService.auth_user().id).subscribe(usuario => {
                   this.usuario = usuario;
                });
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

    uploadFile(usuario, event) {

        let avatar: File = event.target.files[0];

        // this.apiService.upload('usuario-avatar', usuario.id, avatar).subscribe(usuario => {
        //     this.usuario.avatar = usuario.avatar;
        //     sessionStorage.setItem('auth_user', JSON.stringify(this.usuario));
        //     this.alertService.success("Guardado");
        // },error => {
        //     this.alertService.error(error._body);
        // });

    }

}
