import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-cap',
  templateUrl: './cap.component.html'
})
export class CapComponent implements OnInit {

	public cap: any = {};
	public producto: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    const id = +this.route.snapshot.paramMap.get('id');
	        
        if(isNaN(id)){
            this.cap = {};
            this.cap.fecha_limite = this.apiService.date();
            this.cap.fecha_ini = this.apiService.datetime();
            this.cap.fecha_fin = this.apiService.datetime();
        }
        else{
            this.apiService.read('cap/', id).subscribe(cap => {
               this.cap = cap;
            });
        }

	}


	uploadFile(at, event) {

        let fileList: FileList = event.target.files;
        let logo: File = fileList[0];

        // this.apiService.upload('at-logo', at.id, logo).subscribe(at => {
        //     this.at.logo = at.logo;
        //     this.alertService.success("Guardado");
        // },error => {
        //     this.alertService.error(error._body);
        // });

    }

}
