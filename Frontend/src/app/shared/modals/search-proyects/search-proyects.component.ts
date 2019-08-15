import { Component, OnInit, EventEmitter, Input, Output } from '@angular/core';

import { debounceTime, distinctUntilChanged, map } from 'rxjs/operators';
import { fromEvent, timer } from 'rxjs';

import { ApiService } from '../../../services/api.service';
import { AlertService } from '../../../services/alert.service';

@Component({
  selector: 'app-search-proyects',
  templateUrl: './search-proyects.component.html'
})
export class SearchProyectsComponent implements OnInit {

  @Input() proyecto: any = {};
	@Output() proyectSelected = new EventEmitter();
    public proyectos: any = [];
    public searching = false;

  constructor(private apiService: ApiService, private alertService: AlertService) { }

  ngOnInit() {
    const input = document.getElementById('example');
    const example = fromEvent(input, 'keyup').pipe(map(i => (<HTMLTextAreaElement>i.currentTarget).value));
    const debouncedInput = example.pipe(debounceTime(500));
    const subscribe = debouncedInput.subscribe(val => { this.SearchProyect(); });
  }

  SearchProyect(){
    if(this.proyecto.nombre && this.proyecto.nombre.length > 1) {
        this.searching = true;
        this.apiService.read('proyecto/search/', this.proyecto.nombre).subscribe(proyectos => {
           this.proyectos = proyectos;
           this.searching = false;
        }, error => {this.alertService.error(error);this.searching = false;});
    }else if (!this.proyecto.nombre  || this.proyecto.nombre.length < 1 ){ this.searching = false; this.proyecto = {}; this.proyectos.total = 0; }
}

public selectProyecto(proyecto:any){
    this.proyecto.nombre = proyecto.nombre;
    this.proyectos = [];
    
  this.proyectSelected.emit({proyecto: proyecto});
}

}
