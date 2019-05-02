import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';

@Component({
  selector: 'app-equipo-metas',
  templateUrl: './equipo-metas.component.html'
})
export class EquipoMetasComponent implements OnInit {

    @Input() equipo:any = {};
    public asesor: any = {};
    public metas: any = {};
    public meta: any = {};
    public meses: any = {};
    public ano:any;
    public mes:any;
    public loading = false;

    constructor( 
        public apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.meses = [{mes:'01', active:true, nombre:'Enero'}, {mes:'02', active:true, nombre:'Febrero'}, {mes:'03', active:true, nombre:'Marzo'}, {mes:'04', active:true, nombre:'Abril'},
                      {mes:'05', active:true, nombre:'Mayo'}, {mes:'06', active:true, nombre:'Junio'}, {mes:'07', active:true, nombre:'Julio'}, {mes:'08', active:true, nombre:'Agosto'}, 
                      {mes:'09', active:true, nombre:'Septiembre'}, {mes:'10', active:true, nombre:'Octubre'}, {mes:'11', active:true, nombre:'Noviembre'}, {mes:'12', active:true, nombre:'Diciembre'}];

        this.loadAll();
    }

    loadAll(){
       this.loading = true;
       this.asesor = this.equipo;
       this.metas = this.equipo.metas;
       this.validarMetas();
       this.loading = false;
    }

    validarMetas(){
        let today = new Date();
        this.ano = today.getFullYear();
        this.mes = today.getMonth() + 1;

        for (var i = 0; i < this.meses.length; ++i) {

            for (var j = 0; j < this.metas.length; ++j) {
                if (this.metas[j].mes == this.meses[i].mes && this.metas[j].ano == this.ano) { 
                    this.meses[i].id = this.metas[j].id;
                    this.meses[i].active = false;
                    this.meses[i].meta = this.metas[j].meta;
                    this.meses[i].empresas = this.metas[j].empresas;
                }
            }
        }
    }

    public onSubmitMeta(meta:any) {
        this.loading = true;
        meta.asesor_id =  this.asesor.id;
        meta.ano        =  this.ano;
        // Guardamos la empresa
        this.apiService.store('asesor/meta', meta).subscribe(meta => {
            meta = {};
            this.alertService.success("Meta guardada");
            this.apiService.read('equipo/', this.asesor.id).subscribe(asesor => {
                this.asesor = asesor;
                this.metas = asesor.metas;
                this.validarMetas();
                this.loading = false;
            });
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });
    }

}
