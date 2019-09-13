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
    public file:File;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.empresa = {};
        }
        else{
            // Optenemos el empresa
            this.apiService.read('empresa/', id).subscribe(empresa => {
               this.empresa = empresa;
            });
        }

	}

	public onSubmit() {

        if(this.file) {
            this.loading = true;
            
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('id', this.empresa.id);
            formData.append('nombre', this.empresa.nombre);
            let logo = d.getTime() + ' - ' + this.file.name;
            formData.append('logo', logo);

            this.apiService.upload('empresa', formData).subscribe(data => {
                this.empresa.logo = logo;
                this.alertService.success('Guardado')
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    setFile(event:any) {
        this.file = event.target.files[0];
        this.onSubmit();
    }

}
