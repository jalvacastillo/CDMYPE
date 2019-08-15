import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-noticias',
  templateUrl: './noticias.component.html',
})
export class NoticiasComponent implements OnInit {

    public noticias:any = [];
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
            this.apiService.delete('noticia/', id) .subscribe(data => {
                for (let i = 0; i < this.noticias.length; i++) { 
                    if (this.noticias[i].id == data.id )
                        this.noticias.splice(i, 1);
                }
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
