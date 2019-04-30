import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-usuarios',
  templateUrl: './usuarios.component.html'
})

export class UsuariosComponent implements OnInit {

		public usuarios:any = [];
	    public buscador:any = '';
	    public loading:boolean = false;

	    constructor(public apiService: ApiService, private alertService: AlertService){ }

		ngOnInit() {
	        this.loadAll();
	    }

	    public loadAll() {
	        this.loading = true;
	        this.apiService.getAll('usuarios').subscribe(usuarios => { 
	            this.usuarios = usuarios;
	            this.loading = false;
	        }, error => {this.alertService.error(error); this.loading = false;});
	    }

	    public search(){
	        if(this.buscador && this.buscador.length > 2) {
	            this.loading = true;
	            this.apiService.read('usuarios/buscar/', this.buscador).subscribe(usuarios => { 
	                this.usuarios = usuarios;
	                this.loading = false;
	            }, error => {this.alertService.error(error); this.loading = false;});
	        }
	    }

	    public activar(usuario:any){
	        this.loading = true;
	        usuario.activo = !usuario.activo;
	        this.apiService.store('usuario', usuario).subscribe(usuario => {
	            this.alertService.success("Guardado");
	            this.loading = false;
	        },error => {this.alertService.error(error); this.loading = false; });
	    }

	    public delete(usuario) {
	        if (confirm('¿Desea eliminar el Registro?')) {
	            this.apiService.delete('usuario/', usuario) .subscribe(data => {
	                for (let i = 0; i < this.usuarios['data'].length; i++) { 
	                    if (this.usuarios['data'][i].id == data.id )
	                        this.usuarios['data'].splice(i, 1);
	                }
	            }, error => {this.alertService.error(error); });
	                   
	        }

	    }

	    public setPagination(event):void{
	        this.loading = true;
	        this.apiService.paginate(this.usuarios.path + '?page='+ event.page).subscribe(usuarios => { 
	            this.usuarios = usuarios;
	            this.loading = false;
	        }, error => {this.alertService.error(error); this.loading = false;});
	    }

}

