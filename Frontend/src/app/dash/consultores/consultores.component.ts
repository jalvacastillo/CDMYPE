import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-consultores',
  templateUrl: './consultores.component.html',
  styleUrls: ['./consultores.component.css']
})
export class ConsultoresComponent implements OnInit {

    currentUser: any;
    consultores: any[] = [];
    paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    private loadAll() {
        this.apiService.getAll('consultores').subscribe(consultores => { 
            this.consultores = consultores;
            for (let i = 0; i < consultores.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    private delete($id) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('cliente/', $id) .subscribe(data => {
                for (let i in this.consultores['data']) {
                    if (this.consultores['data'][i].id == data.id )
                        this.consultores['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('consultores?page='+ page).subscribe(consultores => { this.consultores = consultores; });
    }

}
