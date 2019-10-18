import { Component, OnInit } from '@angular/core';
import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';
@Component({
  selector: 'app-vinculaciones',
  templateUrl: './vinculaciones.component.html',
  styleUrls: ['./vinculaciones.component.css']
})
export class VinculacionesComponent implements OnInit {

   public vinculaciones:any = [];
    
    public buscador:any = '';
    public loading: boolean = false;

  constructor(private apiService: ApiService, private alertService: AlertService) { }

  ngOnInit() {
    this.loadAll();
      
  }
 public loadAll() {
        this.loading = true;
        this.apiService.getAll('vinculaciones').subscribe(vinculaciones => { 
            this.vinculaciones = vinculaciones;
            this.loading = false;
        }, error => {this.alertService.error(error); this.loading = true;});
    }

     public search(text:any){
        if(text.length > 1) {
            this.apiService.read('vinculaciones/buscar/', text).subscribe(vinculaciones => { 
                this.vinculaciones = vinculaciones;
            }, error => {this.alertService.error(error); });
        }
    }
     public delete(vinculacion: any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('vinculacion/', vinculacion.id) .subscribe(data => {
                for (let i = 0; i < this.vinculaciones['data'].length; i++) { 
                    if (this.vinculaciones['data'][i].id == data.id )
                        this.vinculaciones['data'].splice(i, 1);
                }
            }, error => {this.alertService.error(error); });              
        }
    }
}
