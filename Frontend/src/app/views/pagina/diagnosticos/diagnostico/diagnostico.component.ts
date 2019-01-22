import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-diagnostico',
  templateUrl: './diagnostico.component.html'
})
export class DiagnosticoComponent implements OnInit {

    public diagnostico: any = {};
    public especialidades: any[] = [];
    
    public pregunta:any = {};
    public valor:any = {};
    public categorias: any[] = [];

    public loading = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){
                this.diagnostico.estado = 'Activo';
                this.diagnostico.asesor_id = this.apiService.auth_user().id;
            }
            else{
               this.apiService.read('diagnostico/', params['id']).subscribe(diagnostico => {
                   this.diagnostico = diagnostico;                   
               });
            }

        });

    }

    public setEstado(pregunta:any, estado:string){
        pregunta.estado = estado;
        this.apiService.store('diagnostico/pregunta', pregunta).subscribe(pregunta => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }

    public onSubmit() {
        this.loading = true;
        console.log(this.diagnostico);
        this.apiService.store('diagnostico', this.diagnostico).subscribe(diagnostico => {
           this.diagnostico = diagnostico;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error._body); this.loading = false; });

    }


    // Pregunta
        public openModalPregunta(template: TemplateRef<any>, pregunta:any) {
            this.pregunta = pregunta;
            this.apiService.getAll('diagnostico/' + this.diagnostico.id + '/categorias').subscribe(categorias => {
               this.categorias = categorias;
                this.alertService.success("Guardado");
                this.loading = false;
            },error => {this.alertService.error(error._body); this.loading = false; });

            this.modalRef = this.modalService.show(template);
        }

    public agregarValor() {
        if(this.valor.nombre.length > 1) {
            this.loading = true;
            this.valor.pregunta_id = this.pregunta.id;
            this.apiService.store('diagnostico/pregunta/valor', this.valor).subscribe(valor => {
                this.valor = {};
                if(!this.valor.id) {
                    this.pregunta.valores.push(valor);
                }
                this.alertService.success("Guardado");
                this.loading = false;
            },error => {this.alertService.error(error); this.loading = false; });
        }

    }

    public eliminarValor(indicador:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('diagnostico/pregunta/indicador/', indicador.id) .subscribe(data => {
                for (let i = 0; i < this.pregunta.valores.length; i++) { 
                    if (this.pregunta.valores[i].id == data.id )
                        this.pregunta.valores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

}

