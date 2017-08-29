import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-noticia',
  templateUrl: './noticia.component.html',
  styleUrls: ['./noticia.component.css']
})
export class NoticiaComponent implements OnInit {

    public noticia: any = {};
    public loading = false;
    
    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {

        this.route.params.subscribe(params => {

            if(isNaN(params['id'])){

            }
            else{
               this.apiService.read('noticia/', params['id']).subscribe(noticia => {
                   this.noticia = noticia;                   
               });
            }

        });

    }

    onSubmit() {
        this.loading = true;
        console.log(this.noticia);
        this.noticia.asesor_id = JSON.parse(sessionStorage.getItem('currentUser')).user.id;
        this.apiService.store('noticia', this.noticia).subscribe(noticia => {
           this.noticia = noticia;
            this.alertService.success("Guardado");
            this.loading = false;
        },error => {
            this.alertService.error(error._body);
            this.loading = false;
        });

    }


}

