import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-empresas',
  templateUrl: './empresas.component.html',
})
export class EmpresasComponent implements OnInit {

    public empresas:any = [];
	public empresa:any = {};
    public buscador:any = '';
    public loading: boolean = false;

    constructor(private apiService: ApiService, private router: Router, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }
 public loadAll() {
        this.loading = true;
        this.apiService.getAll('empresas').subscribe(empresas => { 
            this.empresas = empresas;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }
    public search(text:any){
    	if(text.length > 1) {
	    	this.apiService.read('empresas/buscar/', text).subscribe(empresas => { 
	    	    this.empresas = empresas;
	    	}, error => {this.alertService.error(error); });
    	}
    }

    public eliminar(empresa:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/', empresa.id) .subscribe(data => {
                for (let i = 0; i < this.empresa.empresas.length; i++) { 
                    if (this.empresa.empresas[i].id == data.id )
                        this.empresa.empresas.splice(i, 1);
                }
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
        this.apiService.paginate(this.empresas.path + '?page='+ event.page).subscribe(empresas => { 
            this.empresas = empresas;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
