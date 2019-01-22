import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
import { Data } from '../../models/data';

@Component({
  selector: 'app-empresas',
  templateUrl: './empresas.component.html',
})
export class EmpresasComponent implements OnInit {

    public empresas:Data;
	public empresa:any = {};
    public buscador:string;
    public loading: boolean = false;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('empresas').subscribe(empresas => { 
            this.empresas = empresas;
        }, error => {this.alertService.error(error); });
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('empresas/buscar/', text).subscribe(empresas => { 
	    	    this.empresas = empresas;
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.empresas['data']) {
                //     if (this.empresas['data'][i].id == data.id )
                //         this.empresas['data'].splice(i, 1);
                // }
                 this.empresas.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public activar(empresa:any){
        this.loading = true;
        this.empresa = empresa;
        this.empresa.activo = !this.empresa.activo;
        this.apiService.store('empresa', this.empresa).subscribe(empresa => {
            this.empresa = empresa;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.empresas.path + '?page='+ event.page).subscribe(empresas => { 
            this.empresas = empresas;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
