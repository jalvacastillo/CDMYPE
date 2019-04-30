import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-cap-empresarios',
  templateUrl: './cap-empresarios.component.html'
})
export class CapEmpresariosComponent implements OnInit {

    public loading:boolean = false;
    public empresarios:any = [];
    public empresario:any = {};

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.empresarios = [];
            this.empresario = {};
        }
        else{
            this.apiService.read('cap/empresario/', id).subscribe(empresarios => {
               this.empresarios = empresarios;
            },error => {this.alertService.error(error); this.loading = false; });
        }
	}

    public selectEmpresario(event){
        console.log(event);
        this.empresario.empresario_id = event.empresario.id;
        this.empresario.asistencia = true;
        this.empresario.cap_id = +this.route.snapshot.paramMap.get('id');
        this.apiService.store('cap/empresario', this.empresario).subscribe(empresario => {
            if(!this.empresario.id) {
                this.empresarios.push(empresario);
            }
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(empresario:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('cap/empresario/', empresario.id) .subscribe(data => {
                for (let i = 0; i < this.empresarios.length; i++) { 
                    if (this.empresarios[i].id == data.id )
                        this.empresarios.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }


}
