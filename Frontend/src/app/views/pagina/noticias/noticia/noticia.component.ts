import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';
import { HtmlParser } from '@angular/compiler';



declare var $: any;

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
                this.apiService.read('noticia/', params['id']).subscribe(data => {
                   this.noticia = data;  
	            });
            }

        });     
        this.noticia.img = ('default.jpg');
        this.loading = false;
	}
	public onSubmit() {
	    this.loading = true;
        
        let formData:FormData = new FormData();
        for (var key in this.noticia) {
            formData.append(key, this.noticia[key]);
        }
        
	    if (this.noticia.id){
            formData.append('id', this.noticia.id);
            formData.append('img', this.noticia.img);     
	    }
	    if(this.file) {
	        var d = new Date();
	        formData.append('file', this.file);
	        formData.append('img', d.getTime() + ' - ' + this.file.name);
	    }
        this.apiService.upload('noticia', formData).subscribe(noticia => {
            this.noticia = noticia;
            this.loading = false;
            this.alertService.success('Guardado');

        },error => {this.alertService.error(error); this.loading = false;});
	}
    setFile(event:any) {
        this.file = event.target.files[0];
    }
    
}
