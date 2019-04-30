import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-noticias',
  templateUrl: './noticias.component.html',
})
export class NoticiasComponent implements OnInit {

    public noticias:Data;
	public noticia:any = {};
    public buscador:any = '';
    public loading = false;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.apiService.getAll('noticias').subscribe(noticias => { 
            this.noticias = noticias;
        }, error => {this.alertService.error(error); });
    }

    public search(){
        if(this.buscador && this.buscador.length > 2) {
            this.loading = true;
            this.apiService.read('noticias/buscar/', this.buscador).subscribe(noticias => { 
                this.noticias = noticias;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }

    public delete(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('paciente/', id) .subscribe(data => {
                 this.noticias.data.forEach( item => {
                    if (item.id == data.id )
                        item.pop();
                });
            }, error => {this.alertService.error(error); });
                   
        }

    }

    public activar(noticia:any){
        this.loading = true;
        this.noticia = noticia;
        this.noticia.activo = !this.noticia.activo;
        this.apiService.store('noticia', this.noticia).subscribe(noticia => {
            this.noticia = noticia;
            this.alertService.success("Producto guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error);
            this.loading = false;
        });
    }

    public setPagination(event):void{
        this.loading = true;
        this.apiService.paginate(this.noticias.path + '?page='+ event.page).subscribe(noticias => { 
            this.noticias = noticias;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = false;});
    }

}
