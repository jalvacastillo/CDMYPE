import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-contrato',
  templateUrl: './at-contrato.component.html'
})
export class AtContratoComponent implements OnInit {

	@Input() at:any = {};
    public loading:boolean = false;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {

	}

    public onSubmit(){
        this.loading = true;
        this.apiService.store('at/contrato', this.at.contrato).subscribe(contrato => {
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }


}
