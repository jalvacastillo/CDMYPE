import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-empresa',
  templateUrl: './empresa.component.html',
  styleUrls: ['./empresa.component.css']
})
export class EmpresaComponent implements OnInit {

    public cliente: any = {};
    public empresa: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 1;
        this.pasos.setPasos("cliente");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.empresa = {};
                this.cliente = {};
            }
            else{
                // Optenemos el cliente
                this.apiService.read('cliente/', params['id']).subscribe(cliente => {
                   this.cliente = cliente;
                   this.pasos.entidad = cliente;
                    // Optenemos la empresa
                    this.apiService.read('empresa/', this.cliente.empresa_id).subscribe(empresa => {
                        this.empresa = empresa;
                        console.log(this.empresa);
                    });
                });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        // Guardamos la empresa
        this.apiService.store('empresa', this.empresa).subscribe(empresa => {
            this.empresa = empresa;
            console.log(empresa);
            this.alertService.success("Empresa guardada");
            // Si no existe el cliente lo creamos
            if(!this.cliente.id) {
                this.cliente.empresa_id = this.empresa.id;
                console.log(this.cliente);
                this.apiService.store('cliente', this.cliente).subscribe(cliente => {
                    this.router.navigate(['/cliente/empresario/', cliente.id]);
                });
            }
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });
        

    }

}
