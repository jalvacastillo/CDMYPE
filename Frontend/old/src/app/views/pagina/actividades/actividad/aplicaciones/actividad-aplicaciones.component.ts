import { Component, OnInit, TemplateRef, Input } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-actividad-aplicaciones',
  templateUrl: './actividad-aplicaciones.component.html'
})
export class ActividadAplicacionesComponent implements OnInit {

    @Input() actividad:any = {};
	public aplicacion:any = {};

    public loading:boolean = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

	ngOnInit() {

	}

    public openModalAplicacion(template: TemplateRef<any>, aplicacion:any) {
        this.aplicacion = aplicacion;
        this.modalRef = this.modalService.show(template);
    }

    public onSubmit() {
        this.loading = true;
        // Guardamos al actividad
        this.apiService.store('aplicacion', this.aplicacion).subscribe(aplicacion => {
            this.aplicacion = aplicacion;
            this.loading = false; 
            this.modalRef.hide();
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(aplicacion:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('actividad/aplicacion/', aplicacion.id) .subscribe(data => {
                for (let i = 0; i < this.actividad.aplicacions.length; i++) { 
                    if (this.actividad.aplicacions[i].id == data.id )
                        this.actividad.aplicacions.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
