import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-consultor',
  templateUrl: './consultor.component.html'
})
export class ConsultorComponent implements OnInit {

	public consultor: any = {};
	public producto: any = {};
	public consultorrio: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.consultor = {};
	            this.consultor.logo = 'default.png';
	        }
	        else{
	            // Optenemos el consultor
	            this.apiService.read('consultor/', params['id']).subscribe(consultor => {
	               this.consultor = consultor;
	            });
	        }

	    });

	}


	uploadFile(consultor, event) {

        let fileList: FileList = event.target.files;
        let logo: File = fileList[0];

        // this.apiService.upload('consultor-logo', consultor.id, logo).subscribe(consultor => {
        //     this.consultor.logo = consultor.logo;
        //     this.alertService.success("Guardado");
        // },error => {
        //     this.alertService.error(error._body);
        // });

    }

}
