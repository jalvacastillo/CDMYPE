import { Component, OnInit } from '@angular/core';

import { AlertService } from '../../services/alert.service';
import { ApiService } from '../../services/api.service';


@Component({
  selector: 'app-contabilidad',
  templateUrl: './contabilidad.component.html',
})
export class ContabilidadComponent implements OnInit {


    constructor(private apiService: ApiService, private alertService: AlertService){ }

	ngOnInit() {
    }


}
