import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-clientes',
  templateUrl: './clientes.component.html',
  styleUrls: ['./clientes.component.css']
})
export class ClientesComponent implements OnInit {

    public clientes: any[] = [];
    public paginacion = [];

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    private loadAll() {
        this.apiService.getAll('clientes').subscribe(clientes => { 
            this.clientes = clientes;
            this.paginacion = [];
            for (let i = 0; i < clientes.last_page; i++) { this.paginacion.push(i+1); }
        }, error => {this.alertService.error(error); });
    }

    private delete($id) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('cliente/', $id) .subscribe(data => {
                for (let i in this.clientes['data']) {
                    if (this.clientes['data'][i].id == data.id )
                        this.clientes['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
                   
        }

    }

    private setPaginacion(page:number) {
        this.apiService.getAll('clientes?page='+ page).subscribe(clientes => { this.clientes = clientes; });
    }

}
