import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-resultados',
  templateUrl: './resultados.component.html'
})
export class ResultadosComponent implements OnInit {

    public resultados:Data;
    public resultado: any = {};
    public paginacion = [];
    public loading:boolean = false;
    public buscador:any = '';

    modalRef: BsModalRef;

    constructor(private apiService: ApiService, private alertService: AlertService, private modalService: BsModalService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.resultados);
    }

    public loadAll() {
        this.apiService.getAll('resultados').subscribe(resultados => { 
            this.resultados = resultados;
            for (let i = 0; i < resultados.last_page; i++) {this.paginacion.push(i+1);
            }
        }, error => {this.alertService.error(error); });
    }

    openModal(template: TemplateRef<any>, resultado:any) {
        this.resultado = resultado;
        this.modalRef = this.modalService.show(template);
    }

    onSubmit() {
        this.loading = true;
        console.log(this.resultado);
        this.apiService.store('resultado', this.resultado).subscribe(resultado => {
           this.resultado = {};
           this.modalRef.hide();
           this.alertService.success("Guardado");
           this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }

    public search(){
        if(this. buscador > 1) {
            this.apiService.read('resultados/buscar/', this.buscador).subscribe(resultados => { 
                this.resultados = resultados;
                this.paginacion = [];
                for (let i = 0; i < resultados.last_page; i++) { this.paginacion.push(i+1); }
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('resultado/', id) .subscribe(data => {
                for (let i = 0; i < this.resultados['data'].length; i++) { 
                    if (this.resultados['data'][i].id == data.id )
                        this.resultados['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPaginacion(page:number) {
        this.apiService.getAll('resultados?page='+ page).subscribe(resultados => { this.resultados = resultados; });
    }

}

