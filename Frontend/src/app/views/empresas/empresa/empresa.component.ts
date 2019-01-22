import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-empresa',
  templateUrl: './empresa.component.html'
})
export class EmpresaComponent implements OnInit {

	public empresa: any = {};
	public producto: any = {};
	public empresario: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.empresa = {};
	            this.empresa.logo = 'default.png';
	        }
	        else{
	            // Optenemos el empresa
	            this.apiService.read('empresa/', params['id']).subscribe(empresa => {
	               this.empresa = empresa;
	            });
	        }

	    });

	}


	uploadFile(empresa, event) {

        let fileList: FileList = event.target.files;
        let logo: File = fileList[0];

        // this.apiService.upload('empresa-logo', empresa.id, logo).subscribe(empresa => {
        //     this.empresa.logo = empresa.logo;
        //     this.alertService.success("Guardado");
        // },error => {
        //     this.alertService.error(error._body);
        // });

    }

}
