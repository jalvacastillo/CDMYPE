import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-consultores',
  templateUrl: './consultores.component.html',
})
export class ConsultoresComponent implements OnInit {

	public consultores:any = [];
    public empresa:any = {};
    public buscador:any = '';
    public loading: boolean = false;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('consultores').subscribe(consultores => { 
            this.consultores = consultores;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }

    public search(text:any){
        if(text.length > 1) {
            this.apiService.read('consultores/buscar/', text).subscribe(consultores => { 
                this.consultores = consultores;
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.consultores['data']) {
                //     if (this.consultores['data'][i].id == data.id )
                //         this.consultores['data'].splice(i, 1);
                // }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public activar(empresa:any){
        this.loading = true;
        this.empresa = empresa;
        this.empresa.catalogo = !this.empresa.catalogo;
        this.apiService.store('empresa', this.empresa).subscribe(empresa => {
            this.empresa = empresa;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.consultores.path + '?page='+ event.page).subscribe(consultores => { 
            this.consultores = consultores;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
