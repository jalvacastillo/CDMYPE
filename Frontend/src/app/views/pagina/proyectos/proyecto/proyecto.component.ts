import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

declare var $: any;

@Component({
  selector: 'app-proyecto',
  templateUrl: './proyecto.component.html'
})
export class ProyectoComponent implements OnInit {

    public proyecto: any = {};
    public especialidades: any[] = [];
    
    public asesores:any[] = [];
    public asesor:any = {};
    public aplicacion:any = {};

    public loading = false;
    modalRef: BsModalRef;

    constructor( 
        public apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.proyecto.estado = 'Activo';
                this.proyecto.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('proyecto/', params['id']).subscribe(proyecto => {
                   this.proyecto = proyecto;
                   var editor = $("#compose-textarea").wysihtml5();
               });
            }

        });

        this.apiService.getAll('especialidades').subscribe(especialidades => {
           this.especialidades = especialidades;                   
       });

    }

    public setEstado(aplicacion:any, estado:string){
        aplicacion.estado = estado;
        this.apiService.store('proyecto/aplicacion', aplicacion).subscribe(aplicacion => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }

    public onSubmit() {
        this.loading = true;
        this.proyecto.contenido = $("#compose-textarea").val();

        this.apiService.store('proyecto', this.proyecto).subscribe(proyecto => {
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error._body); this.loading = false; });

    }

    // Asesores

        public openModalAsesores(template: TemplateRef<any>) {
            
            this.apiService.getAll('equipos').subscribe(asesores => { 
                this.asesores = asesores.data;
                for (var i = 0; i < this.asesores.length; ++i) {
                    this.asesores = this.asesores.filter(asesor => asesor.id != this.proyecto.asesores[i].asesor_id)
                    console.log(this.proyecto.asesores[i].asesor_id);
                }
            }, error => {this.alertService.error(error); this.loading = false;});

            this.modalRef = this.modalService.show(template);
        }

        public quitarAsesor(asesor:any){
            if (confirm('¿Desea eliminar el Registro?')) {
                this.apiService.delete('proyecto/asesor/', asesor.id) .subscribe(data => {
                    for (let i = 0; i < this.proyecto.asesores.length; i++) { 
                        if (this.proyecto.asesores[i].id == data.id )
                            this.proyecto.asesores.splice(i, 1);
                    }
                }, error => {this.alertService.error(error); });
                       
            }
        }

        public agregarAsesor(asesor:any){

            this.loading = true;
            this.asesor.proyecto_id = this.proyecto.id;
            this.asesor.asesor_id = asesor.id;
            this.apiService.store('proyecto/asesor', this.asesor).subscribe(data => {
                this.proyecto.asesores.push(data);
                for (let i = 0; i < this.asesores.length; i++) { 
                    if (this.asesores[i].id == data.asesor_id )
                        this.asesores.splice(i, 1);
                }
                this.loading = false;
            },error => {this.alertService.error(error._body); this.loading = false; });

        }

    // Empresas
        public openModalEmpresas(template: TemplateRef<any>) {
            this.modalRef = this.modalService.show(template);
        }

        public agregarAccion(template: TemplateRef<any>) {
            this.modalRef = this.modalService.show(template);
        }

        public quitarEmpresa(empresa:any){
            if (confirm('¿Desea eliminar el Registro?')) {
                this.apiService.delete('proyecto/empresa/', empresa.id) .subscribe(data => {
                    for (let i = 0; i < this.proyecto.empresas.length; i++) { 
                        if (this.proyecto.empresas[i].id == data.id )
                            this.proyecto.empresas.splice(i, 1);
                    }
                }, error => {this.alertService.error(error); });
                       
            }
        }

    // Aplicaciones
        public openModalAplicacion(template: TemplateRef<any>, aplicacion:any) {
            this.aplicacion = aplicacion;
            this.modalRef = this.modalService.show(template);
        }


}

