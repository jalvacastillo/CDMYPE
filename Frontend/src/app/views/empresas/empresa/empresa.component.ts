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
    setFile(event:any) {
        this.empresa.file = event.target.files[0];
        if (this.empresa.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result;console.log(this.url_img_preview); };
            
            reader.readAsDataURL(this.empresa.file);
        }
        this.onSubmit();
    }
	public onSubmit() {
        console.log('si');
        this.file = this.empresa.file;
        this.loading = true;
        this.empresa.img = this.file.name;
        let formData:FormData = new FormData();
        if (this.empresa.id){
            this.empresa.img = this.empresa.file.name;
            formData.append('img', this.empresa.img);     
	    }
        for (var key in this.empresa) {
            formData.append(key, this.empresa[key]);
        }
            this.apiService.upload('empresa', formData).subscribe(data => {
                this.empresa = data;
                this.loading = false;
            },error => {this.alertService.error(error); this.loading = false; });

            if(!this.empresa.id)
				this.router.navigate(['empresa' + this.empresa.id]);
    }

}
