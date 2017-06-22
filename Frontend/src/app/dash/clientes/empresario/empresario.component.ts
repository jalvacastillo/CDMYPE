import { Component, OnInit, ViewChild } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

import { PasosComponent } from '../../../shared/pasos/pasos.component';

@Component({
  selector: 'app-empresario',
  templateUrl: './empresario.component.html',
  styleUrls: ['./empresario.component.css']
})
export class EmpresarioComponent implements OnInit {

    public cliente: any = {};
    public empresario: any = {};
    public loading = false;

    @ViewChild(PasosComponent) pasos: PasosComponent;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
        this.pasos.tab = 2;
        this.pasos.setPasos("cliente");
        
        this.route.params.subscribe(params => {
            
            if(isNaN(params['id'])){
                this.empresario = {};
            }
            else{
               this.apiService.read('cliente/', params['id']).subscribe(cliente => {
                   this.cliente = cliente;
                   this.pasos.entidad = cliente;
                   this.apiService.read('empresario/', cliente.empresario_id).subscribe(empresario => {
                       this.empresario = empresario; 
                   });
               });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.empresario);
        this.apiService.store('empresario', this.empresario).subscribe(empresario => {
            this.empresario = empresario;
            this.alertService.success("Guardado");
            // Si no esta agregado al cliente
            if(!this.cliente.empresario_id) {
                this.cliente.empresario_id = empresario.id;
                this.apiService.store('cliente', this.cliente).subscribe(cliente => {
                    this.cliente = cliente;
                    this.router.navigate(['/cliente/indicadores/', cliente.id]);
                });
            }
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }

}
