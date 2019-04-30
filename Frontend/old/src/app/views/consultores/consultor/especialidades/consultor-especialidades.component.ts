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
    public especialidades:any[] = [];
    public especialidad:any = {};
    public loading:boolean = false;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {
        this.apiService.getAll('subespecialidades').subscribe(especialidades => {
            this.loading = false;
            this.especialidades = especialidades;
        },error => {this.alertService.error(error); this.loading = false; });
	}

    public onSubmit(){
        this.loading = true;
        this.especialidad.consultor_id = this.consultor.id;
        this.apiService.store('consultor/especialidad', this.especialidad).subscribe(especialidad => {
            this.loading = false;
            if (!this.especialidad.id && especialidad.id) { 
                this.consultor.especialidades.push(especialidad);
            }
            this.especialidad = {};
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public onSelect(item:any){

        this.especialidad.especialidad_id = item.item.id;

        this.onSubmit();
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('consultor/especialidad/', id) .subscribe(data => {
                for (let i = 0; i < this.consultor.especialidades.length; i++) { 
                    if (this.consultor.especialidades[i].id == data.id )
                        this.consultor.especialidades.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
