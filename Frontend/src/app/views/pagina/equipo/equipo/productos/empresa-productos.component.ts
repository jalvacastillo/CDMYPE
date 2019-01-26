import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-empresa-productos',
  templateUrl: './empresa-productos.component.html'
})
export class EmpresaProductosComponent implements OnInit {

	@Input() empresa:any = {};
    public producto:any = {};
    public loading:boolean = false;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {

	}

    public onSubmit(){
        if (this.producto.nombre) {
            this.loading = true;
            this.producto.empresa_id = this.empresa.id;
            this.apiService.store('empresa/producto', this.producto).subscribe(producto => {
                this.loading = false;
                if (!this.producto.id) { 
                    this.empresa.productos.push(producto);
                }
                this.producto = {};
            },error => {this.alertService.error(error); this.loading = false; });
        }
    }

    public selProducto(producto:any){
        this.producto = producto;
    }

    public delProducto(id:number) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('empresa/producto/', id) .subscribe(data => {
                for (let i = 0; i < this.empresa.productos.length; i++) { 
                    if (this.empresa.productos[i].id == data.id )
                        this.empresa.productos.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
