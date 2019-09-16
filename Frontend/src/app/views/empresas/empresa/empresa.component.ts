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
    public url_img_preview: any;

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
        console.log('si');
        
        this.loading = true;
        let formData:FormData = new FormData();

        for (var key in this.empresa) {
            formData.append(key, this.empresa[key] );
        }
        console.log(formData);
        
            this.apiService.upload('empresa', formData).subscribe(data => {
                this.loading = false;
            },error => {this.alertService.error(error); this.loading = false; });

            if(!this.empresa.id)
				this.router.navigate(['empresa' + this.empresa.id]);
    }

    setFile(event:any) {
        this.empresa.file = event.target.files[0];
        if (this.empresa.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result;console.log(this.url_img_preview); };
            
            reader.readAsDataURL(this.empresa.file);
            this.onSubmit();
        } 
    }

}
