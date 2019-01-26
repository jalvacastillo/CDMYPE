import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-tdr',
  templateUrl: './at-tdr.component.html'
})
export class AtTdrComponent implements OnInit {

	@Input() at:any = {};
	public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {

	}

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al at
	    this.apiService.store('at', this.at).subscribe(at => {
	    	this.at = at;
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
