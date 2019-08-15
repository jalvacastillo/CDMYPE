import { Component, OnInit, EventEmitter, Input, Output } from '@angular/core';

import { debounceTime, distinctUntilChanged, map } from 'rxjs/operators';
import { fromEvent, timer } from 'rxjs';

import { ApiService } from '../../../services/api.service';
import { AlertService } from '../../../services/alert.service';

@Component({
  selector: 'app-buscador-empresas',
  templateUrl: './buscador-empresas.component.html'
})
export class BuscadorEmpresasComponent implements OnInit {

	@Input() empresa: any = {};
	@Output() empresaSelect = new EventEmitter();
    public empresas: any = [];
    public searching = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService 
	) { }

    ngOnInit() {
        const input = document.getElementById('example');
        const example = fromEvent(input, 'keyup').pipe(map(i => (<HTMLTextAreaElement>i.currentTarget).value));
        const debouncedInput = example.pipe(debounceTime(500));
        const subscribe = debouncedInput.subscribe(val => { this.searchEmpresa(); });
    }

    searchEmpresa(){
        if(this.empresa.nombre && this.empresa.nombre.length > 1) {
            this.searching = true;
            this.apiService.read('empresas/buscar/', this.empresa.nombre).subscribe(empresas => {
               this.empresas = empresas;
               this.searching = false;
            }, error => {this.alertService.error(error);this.searching = false;});
        }else if (!this.empresa.nombre  || this.empresa.nombre.length < 1 ){ this.searching = false; this.empresa = {}; this.empresas.total = 0; }
    }

	public selectEmpresa(empresa:any){
        this.empresa.nombre = empresa.nombre;
        this.empresas = [];
        // this.empresa = {};
	    this.empresaSelect.emit({empresa: empresa});
	}

}
