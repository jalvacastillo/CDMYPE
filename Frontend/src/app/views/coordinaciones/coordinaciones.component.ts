import { Component, OnInit } from '@angular/core';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';

@Component({
  selector: 'app-coordinaciones',
  templateUrl: './coordinaciones.component.html',
  styleUrls: ['./coordinaciones.component.css']
})
export class CoordinacionesComponent implements OnInit {

    public coordinaciones:any = []; 
    public buscador:any = '';
    public loading: boolean = false;

    constructor(private apiService: ApiService, private alertService: AlertService){ }

    ngOnInit() {
        this.loadAll();
    }

    public loadAll() {
        this.loading = true;
        this.apiService.getAll('coordinaciones').subscribe(coordinaciones => { 
            this.coordinaciones = coordinaciones;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }

    public search(text:any){
        if(text.length > 1) {
            this.apiService.read('coordinaciones/buscar/', text).subscribe(coordinaciones => { 
                this.coordinaciones = coordinaciones;
            }, error => {this.alertService.error(error); });
        }
    }

    public delete(coordinacion: any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('coordinacion/', coordinacion.id) .subscribe(data => {
                for (let i = 0; i < this.coordinaciones['data'].length; i++) { 
                    if (this.coordinaciones['data'][i].id == data.id )
                        this.coordinaciones['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });              
        }
    }
    }
