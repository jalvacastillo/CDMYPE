import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-empresa',
  templateUrl: './at-empresa.component.html'
})
export class AtEmpresaComponent implements OnInit {

    public loading:boolean = false;
    public empresas:any = [];
    public empresa:any = {};

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.empresas = [];
            this.empresa = {};
        }
        else{
            this.apiService.read('at/empresa/', id).subscribe(empresas => {
               this.empresas = empresas;
            });
        }
	}

    public selectEmpresa(event){
        console.log(event);
        this.empresa.empresa_id = event.empresa.id;
        this.empresa.at_id = +this.route.snapshot.paramMap.get('id');
        this.apiService.store('at/empresa', this.empresa).subscribe(empresa => {
            if(!this.empresa.id) {
                this.empresas.push(empresa);
            }
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(empresa:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('at/empresa/', empresa.id) .subscribe(data => {
                for (let i = 0; i < this.empresas.length; i++) { 
                    if (this.empresas[i].id == data.id )
                        this.empresas.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }


}
