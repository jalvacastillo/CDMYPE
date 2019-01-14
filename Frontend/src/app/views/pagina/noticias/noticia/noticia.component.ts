import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-noticia',
  templateUrl: './noticia.component.html'
})
export class NoticiaComponent implements OnInit {

	public noticia: any = {};
    public loading = false;

    // Img Upload
    public file:File;
    public preview = false;
    public url_img_preview:string;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
	    
	    this.route.params.subscribe(params => {
	        
	        if(isNaN(params['id'])){
	            this.noticia = {};
	            this.noticia.asesor_id = this.apiService.auth_user().id;
	        }
	        else{
	            // Optenemos el noticia
	            this.apiService.read('noticia/', params['id']).subscribe(noticia => {
	               this.noticia = noticia;
	            });
	        }

	    });

	}

	public onSubmit() {
	    this.loading = true;

	    let formData:FormData = new FormData();
	    formData.append('titulo', this.noticia.titulo);
	    formData.append('contenido', this.noticia.contenido);
        formData.append('categoria', this.noticia.categoria);
	    formData.append('descripcion', this.noticia.descripcion);
        formData.append('slug', this.apiService.slug(this.noticia.titulo));
	    if (this.noticia.id){
	        formData.append('id', this.noticia.id);
	        formData.append('img', this.noticia.img);
	    }

	    if(this.file) {
	        var d = new Date();
	        formData.append('file', this.file);
	        formData.append('img', d.getTime() + ' - ' + this.file.name);
	    }
       
        this.apiService.upload('noticia', formData).subscribe(data => {
            this.loading = false;
        },error => {this.alertService.error(error._body); this.loading = false;});
	}

}
