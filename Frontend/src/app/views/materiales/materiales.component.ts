import { Component, OnInit, TemplateRef } from '@angular/core';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-materiales',
  templateUrl: './materiales.component.html',
})
export class MaterialesComponent implements OnInit {

	public materiales:any = [];
    public material:any = {};
    public buscador:any = '';
    public loading: boolean = false;

    constructor( 
        private apiService: ApiService, private alertService: AlertService
    ) { }
    
    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('materiales').subscribe(materiales => { 
            this.materiales = materiales;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }
    
    public search(text:any){
        if(text.length > 1) {
            this.apiService.read('materiales/buscar/', text).subscribe(materiales => { 
                this.materiales = materiales;
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                // for (let i in this.materiales['data']) {
                //     if (this.materiales['data'][i].id == data.id )
                //         this.materiales['data'].splice(i, 1);
                // }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.materiales.path + '?page='+ event.page).subscribe(materiales => { 
            this.materiales = materiales;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
