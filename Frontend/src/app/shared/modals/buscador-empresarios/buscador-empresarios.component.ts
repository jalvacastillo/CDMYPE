import { Component, OnInit, EventEmitter, Input, Output } from '@angular/core';

import { debounceTime, distinctUntilChanged, map } from 'rxjs/operators';
import { fromEvent, timer } from 'rxjs';

import { ApiService } from '../../../services/api.service';
import { AlertService } from '../../../services/alert.service';

@Component({
  selector: 'app-buscador-empresarios',
  templateUrl: './buscador-empresarios.component.html'
})
export class BuscadorEmpresariosComponent implements OnInit {

	@Input() empresario: any = {};
	@Output() empresarioSelect = new EventEmitter();
    public empresarios: any = [];
    public searching = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService 
	) { }

    ngOnInit() {
        const input = document.getElementById('example');
        const example = fromEvent(input, 'keyup').pipe(map(i => (<HTMLTextAreaElement>i.currentTarget).value));
        const debouncedInput = example.pipe(debounceTime(500));
        const subscribe = debouncedInput.subscribe(val => { this.searchEmpresario(); });
    }

    searchEmpresario(){
        if(this.empresario.nombre && this.empresario.nombre.length > 1) {
            this.searching = true;
            this.apiService.read('empresarios/buscar/', this.empresario.nombre).subscribe(empresarios => {
               this.empresarios = empresarios;
               this.searching = false;
            }, error => {this.alertService.error(error);this.searching = false;});
        }else if (!this.empresario.nombre  || this.empresario.nombre.length < 1 ){ this.searching = false; this.empresario = {}; this.empresarios.total = 0; }
    }

	public selectEmpresario(empresario:any){
        this.empresarios = [];
        this.empresario = {};
	    this.empresarioSelect.emit({empresario: empresario});
	}

}
