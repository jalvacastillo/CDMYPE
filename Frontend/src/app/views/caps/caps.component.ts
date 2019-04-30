import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-caps',
  templateUrl: './caps.component.html',
})
export class CapsComponent implements OnInit {

    public caps:any = [];
	public empresa:any = {};
    public buscador:any = '';
    public loading: boolean = false;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('caps').subscribe(caps => { 
            this.caps = caps;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }

    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('caps/buscar/', text).subscribe(caps => { 
	    	    this.caps = caps;
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                 this.caps.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
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
        this.apiService.paginate(this.caps.path + '?page='+ event.page).subscribe(caps => { 
            this.caps = caps;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
