import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-cap-asistencia',
  templateUrl: './cap-asistencia.component.html'
})
export class CapAsistenciaComponent implements OnInit {

    public loading:boolean = false;
    public cap_id:number;
    public empresarios:any = [];
    public empresario:any = {};

    constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

    ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
        this.cap_id = id; 
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

    public update(empresario){
        this.empresario = empresario;
        this.empresario.asistencia = !empresario.asistencia;
        this.apiService.store('cap/empresario', this.empresario).subscribe(empresario => {
            this.empresario = empresario
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
