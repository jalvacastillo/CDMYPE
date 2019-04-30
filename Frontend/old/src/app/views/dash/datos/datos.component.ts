import { Component, OnInit, Input } from '@angular/core';

// import { AlertService } from '../../../services/alert.service';
// import { ApiService } from '../../../services/api.service';
export interface Data{
    productos:number;
    clientes:number;
    ventas:number;
    compras:number;
}

@Component({
  selector: 'app-datos',
  templateUrl: './datos.component.html',
  styleUrls: ['./datos.component.css']
})


export class DatosComponent implements OnInit {

	@Input() datos:Data;

	constructor( 
	) { }

	ngOnInit() {

	}

}
