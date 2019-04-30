import { Component, OnInit, Input } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-consultor-historial',
  templateUrl: './consultor-historial.component.html'
})
export class ConsultorHistorialComponent implements OnInit {

    @Input() consultor:any = {};

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

	ngOnInit() {

	}

}
