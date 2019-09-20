import { Component, OnInit, Input, TemplateRef } from '@angular/core';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';
 
declare var $: any;

@Component({
  selector: 'app-actividad-info',
  templateUrl: './actividad-info.component.html'
})
export class ActividadInfoComponent implements OnInit {

	@Input() actividad:any = {};
	public asesores:any[] = [];
    public asesor:any = {};
    public especialidades: any[];
	public loading = false;
	
    modalRef: BsModalRef;


	constructor( 
	    public apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router, private modalService: BsModalService
	) { }

	ngOnInit() {
		this.apiService.getAll('especialidades').subscribe(especialidades => {
			this.especialidades = especialidades;
		});
	}

	public onSubmit() {
		this.loading = true;
		
	    this.apiService.store('actividad', this.actividad).subscribe(actividad => {
	    	if(!this.actividad.id) {
	    		this.router.navigate(['actividad/' + actividad.id])
	    	}else{
				this.actividad = actividad;
			}
	        this.alertService.success("Guardado");
	        this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });

	}

	// Asesores

	    public openModalAsesores(template: TemplateRef<any>) {
	        
	        this.apiService.getAll('equipos').subscribe(asesores => { 
	            this.asesores = asesores.data;
	            for (var i = 0; i < this.asesores.length; ++i) {
	                this.asesores = this.asesores.filter(asesor => asesor.id != this.actividad.asesores[i].asesor_id)
	                console.log(this.actividad.asesores[i].asesor_id);
	            }
	        }, error => {this.alertService.error(error); this.loading = false;});

	        this.modalRef = this.modalService.show(template);
	    }

	    public quitarAsesor(asesor:any){
	        if (confirm('¿Desea eliminar el Registro?')) {
	            this.apiService.delete('actividad/asesor/', asesor.id) .subscribe(data => {
	                for (let i = 0; i < this.actividad.asesores.length; i++) { 
	                    if (this.actividad.asesores[i].id == data.id )
	                        this.actividad.asesores.splice(i, 1);
	                }
	            }, error => {this.alertService.error(error); });
	                   
	        }
	    }

	    public agregarAsesor(asesor:any){

	        this.loading = true;
	        this.asesor.actividad_id = this.actividad.id;
	        this.asesor.asesor_id = asesor.id;
	        this.apiService.store('actividad/asesor', this.asesor).subscribe(data => {
	            this.actividad.asesores.push(data);
	            for (let i = 0; i < this.asesores.length; i++) { 
	                if (this.asesores[i].id == data.asesor_id )
	                    this.asesores.splice(i, 1);
	            }
	            this.loading = false;
	        },error => {this.alertService.error(error._body); this.loading = false; });

	    }
		
	


}
