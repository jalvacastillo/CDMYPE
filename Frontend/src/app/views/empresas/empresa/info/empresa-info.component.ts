import { Component, OnInit, Input, Output } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-empresa-info',
  templateUrl: './empresa-info.component.html'
})
export class EmpresaInfoComponent implements OnInit {

	@Input() empresa:any = {};
	
	public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }
	ngOnInit() {
		
	}
	public onSubmit() {
		this.loading = true;
		console.log('si');
		
	    // Guardamos al empresa
	    this.apiService.store('empresa', this.empresa).subscribe(empresa => {
			this.loading = false;
			if(!this.empresa.id){
				this.router.navigate(['empresa/' + empresa.id]);
			}
			this.loading = false;			
		},error => {this.alertService.error(error); this.loading = false; });
		
	}

}
