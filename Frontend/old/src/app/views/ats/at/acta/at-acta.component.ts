import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-acta',
  templateUrl: './at-acta.component.html'
})
export class AtActaComponent implements OnInit {

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
        this.apiService.store('at/acta', this.at.acta).subscribe(acta => {
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }


}
