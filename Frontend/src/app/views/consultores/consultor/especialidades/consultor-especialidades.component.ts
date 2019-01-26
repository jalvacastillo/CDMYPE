import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-consultor-especialidades',
  templateUrl: './consultor-especialidades.component.html'
})
export class ConsultorEspecialidadesComponent implements OnInit {

	@Input() consultor:any = {};
    public especialidad:any = {};
    public loading:boolean = false;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {

	}

    public onSubmit(){
        if (this.especialidad.nombre) {
            this.loading = true;
            this.especialidad.consultor_id = this.consultor.id;
            this.apiService.store('consultor/especialidad', this.especialidad).subscribe(especialidad => {
                this.loading = false;
                if (!this.especialidad.id) { 
                    this.consultor.especialidads.push(especialidad);
                }
                this.especialidad = {};
            },error => {this.alertService.error(error); this.loading = false; });
        }
    }

    public selProducto(especialidad:any){
        this.especialidad = especialidad;
    }

    public delProducto(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('consultor/especialidad/', id) .subscribe(data => {
                for (let i = 0; i < this.consultor.especialidads.length; i++) { 
                    if (this.consultor.especialidads[i].id == data.id )
                        this.consultor.especialidads.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
