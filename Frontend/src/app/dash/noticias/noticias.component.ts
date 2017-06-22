import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';


@Component({
  selector: 'app-noticias',
  templateUrl: './noticias.component.html',
  styleUrls: ['./noticias.component.css']
})
export class NoticiasComponent implements OnInit {

    public noticias: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService) { }

    ngOnInit() {
        this.loadAll();
        console.log(this.noticias);
    }

    private loadAll() {
        this.apiService.getAll('noticias').subscribe(noticias => { 
            this.noticias = noticias;
            for (let i = 0; i < noticias.last_page; i++) {this.paginacion.push(i+1);
            }
        }, error => {this.alertService.error(error); });
    }

    private delete(noticia) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('noticia/', noticia) .subscribe(data => {
                for (let i in this.noticias['data']) {
                    if (this.noticias['data'][i].id == data.id )
                        this.noticias['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('noticias?page='+ page).subscribe(noticias => { this.noticias = noticias; });
    }

}

