import { Component, OnInit } from '@angular/core';
import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-diagnosticos',
  templateUrl: './diagnosticos.component.html'
})
export class DiagnosticosComponent implements OnInit {

    public diagnosticos:any = [];
    public buscador:any = '';
    public loading = false;

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('diagnosticos').subscribe(diagnosticos => { 
            this.diagnosticos = diagnosticos;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

    public delete(proyecto) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('proyecto/', proyecto) .subscribe(data => {
                for (let i = 0; i < this.diagnosticos['data'].length; i++) { 
                    if (this.diagnosticos['data'][i].id == data.id )
                        this.diagnosticos['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public agregarAccion() {
         
    }

    public search(){
        if(this.buscador && this.buscador.length > 2) {
            this.loading = true;
            this.apiService.read('diagnosticos/buscar/', this.buscador).subscribe(diagnosticos => { 
                this.diagnosticos = diagnosticos;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }

    public setEstado(proyecto:any, estado:string){
        proyecto.estado = estado;
        this.apiService.store('proyecto', proyecto).subscribe(proyecto => { 
            this.alertService.success('Actualizado');
        }, error => {this.alertService.error(error); });
    }

     public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.diagnosticos.path + '?page='+ event.page).subscribe(diagnosticos => { 
            this.diagnosticos = diagnosticos;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }


}

