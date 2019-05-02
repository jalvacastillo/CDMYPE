import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-salidas',
  templateUrl: './salidas.component.html',
})
export class SalidasComponent implements OnInit {

	public salidas:any = [];
    public salida:any = {};
    public buscador:any = '';
    public loading: boolean = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private modalService: BsModalService
    ) { }
    
    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('salidas').subscribe(salidas => { 
            this.salidas = salidas;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }
    
    public openModal(template: TemplateRef<any>) {
        var d = new Date();
        this.salida.firma = 'director';
        this.salida.ano = d.getFullYear();
        this.salida.mes = d.getMonth();
        this.modalRef = this.modalService.show(template);
    }

    public search(text:any){
        if(text.length > 1) {
            this.apiService.read('salidas/buscar/', text).subscribe(salidas => { 
                this.salidas = salidas;
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.salidas['data']) {
                //     if (this.salidas['data'][i].id == data.id )
                //         this.salidas['data'].splice(i, 1);
                // }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public activar(salida:any){
        this.loading = true;
        this.salida = salida;
        this.salida.catalogo = !this.salida.catalogo;
        this.apiService.store('salida', this.salida).subscribe(salida => {
            this.salida = salida;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.salidas.path + '?page='+ event.page).subscribe(salidas => { 
            this.salidas = salidas;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
