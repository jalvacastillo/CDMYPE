import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-acta',
  templateUrl: './at-acta.component.html'
})
export class AtActaComponent implements OnInit {

    public acta:any = {};
    public loading:boolean = false;

	constructor( 
            private apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.acta = {};
        }
        else{
            this.loading = true;
            this.apiService.read('at/acta/', id).subscribe(acta => {
               this.acta = acta;
                this.loading = false;
            },error => {this.alertService.error(error); this.loading = false; });
        }
	}

    public onSubmit(){
        this.loading = true;
        this.acta.at_id = this.route.snapshot.paramMap.get('id');
        this.apiService.store('at/acta', this.acta).subscribe(acta => {
            this.acta = acta;
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }


}
