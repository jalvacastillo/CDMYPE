import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-servicio',
  templateUrl: './servicio.component.html'
})
export class ServicioComponent implements OnInit {

    public servicio: any = {};
    public accion: any = {};
    public indicador: any = {};
    public asesor: any = {};
    public especialidades: any[] = [];
    public asesores: any[] = [];
    public loading = false;
    modalRef: BsModalRef;
    
    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.servicio.estado = 'Activo';
                this.servicio.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('servicio/', params['id']).subscribe(servicio => {
                   this.servicio = servicio;                   
               });
            }

        });

        this.apiService.getAll('especialidades').subscribe(especialidades => {
           this.especialidades = especialidades;                   
       });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.servicio);
        this.apiService.store('servicio', this.servicio).subscribe(servicio => {
           this.servicio = servicio;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }

    // Asesores

        public openModalAsesores(template: TemplateRef<any>) {
            
            this.apiService.getAll('equipos').subscribe(asesores => { 
                this.asesores = asesores.data;
                for (var i = 0; i < this.asesores.length; ++i) {
                    this.asesores = this.asesores.filter(asesor => asesor.id != this.servicio.asesores[i].asesor_id)
                    console.log(this.servicio.asesores[i].asesor_id);
                }
            }, error => {this.alertService.error(error); this.loading = false;});

            this.modalRef = this.modalService.show(template);
        }

        public quitarAsesor(asesor:any){
            if (confirm('¿Desea eliminar el Registro?')) {
                this.apiService.delete('servicio/asesor/', asesor.id) .subscribe(data => {
                    for (let i = 0; i < this.servicio.asesores.length; i++) { 
                        if (this.servicio.asesores[i].id == data.id )
                            this.servicio.asesores.splice(i, 1);
                    }
                }, error => {this.alertService.error(error); });
                       
            }
        }

        public agregarAsesor(asesor:any){

            this.loading = true;
            this.asesor.servicio_id = this.servicio.id;
            this.asesor.asesor_id = asesor.id;
            this.apiService.store('servicio/asesor', this.asesor).subscribe(data => {
                this.servicio.asesores.push(data);
                for (let i = 0; i < this.asesores.length; i++) { 
                    if (this.asesores[i].id == data.asesor_id )
                        this.asesores.splice(i, 1);
                }
                this.loading = false;
            },error => {this.alertService.error(error._body); this.loading = false; });

        }


    // Acciones

    public openModalAccion(template: TemplateRef<any>, accion:any) {
        this.accion = accion;
        // this.apiService.getAll('equipos').subscribe(asesores => { 
        //     this.asesores = asesores.data;
        //     for (var i = 0; i < this.asesores.length; ++i) {
        //         this.asesores = this.asesores.filter(asesor => asesor.id != this.servicio.asesores[i].asesor_id)
        //         console.log(this.servicio.asesores[i].asesor_id);
        //     }
        // }, error => {this.alertService.error(error); this.loading = false;});

        this.modalRef = this.modalService.show(template);
    }

    public agregarAccion() {
        this.loading = true;
        this.accion.servicio_id = this.servicio.id;
        this.apiService.store('servicio/accion', this.accion).subscribe(accion => {
            this.accion = {};
            if(!this.accion.id) {
                this.servicio.acciones.push(accion);
            }
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });

    }

    public eliminarAccion(accion:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('servicio/accion/', accion.id) .subscribe(data => {
                for (let i = 0; i < this.servicio.acciones.length; i++) { 
                    if (this.servicio.acciones[i].id == data.id )
                        this.servicio.acciones.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public agregarIndicador() {
        if(this.indicador.indicador.length > 1) {
            this.loading = true;
            this.indicador.accion_id = this.accion.id;
            this.apiService.store('servicio/accion/indicador', this.indicador).subscribe(indicador => {
                this.indicador = {};
                if(!this.indicador.id) {
                    this.accion.indicadores.push(indicador);
                }
                this.alertService.success("Guardado");
                this.loading = false;
            },error => {this.alertService.error(error); this.loading = false; });
        }

    }

    public eliminarIndicador(indicador:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('servicio/accion/indicador/', indicador.id) .subscribe(data => {
                for (let i = 0; i < this.accion.indicadores.length; i++) { 
                    if (this.accion.indicadores[i].id == data.id )
                        this.accion.indicadores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }


}

