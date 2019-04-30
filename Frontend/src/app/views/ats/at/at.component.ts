import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-at',
  templateUrl: './at.component.html'
})
export class AtComponent implements OnInit {

	public at: any = {};
	public producto: any = {};
	public atrio: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    const id = +this.route.snapshot.paramMap.get('id');
	        
        if(isNaN(id)){
            this.at = {};
            this.at.trabajo_local = "70";
            this.at.aporte = "5.5";
            this.at.tiempo_ejecucion = "4";
            this.at.fecha = this.apiService.date();
            this.at.financiamiento = 800;
        }
        else{
            this.apiService.read('at/', id).subscribe(at => {
               this.at = at;
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
