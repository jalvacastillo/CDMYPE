import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-equipo',
  templateUrl: './equipo.component.html'
})
export class EquipoComponent implements OnInit {

	public equipo: any = {};
	public producto: any = {};
	public equiporio: any = {};
    public loading = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.equipo = {};
	            this.equipo.logo = 'default.png';
	        }
	        else{
	            // Optenemos el equipo
	            this.apiService.read('equipo/', params['id']).subscribe(equipo => {
	               this.equipo = equipo;
	            });
	        }

	    });

	}


	uploadFile(equipo, event) {

        let fileList: FileList = event.target.files;
        let logo: File = fileList[0];

        // this.apiService.upload('equipo-logo', equipo.id, logo).subscribe(equipo => {
        //     this.equipo.logo = equipo.logo;
        //     this.alertService.success("Guardado");
        // },error => {
        //     this.alertService.error(error._body);
        // });

    }

}
