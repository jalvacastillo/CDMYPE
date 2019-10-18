import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';
@Component({
  selector: 'app-info',
  templateUrl: './info.component.html',
  styleUrls: ['./info.component.css']
})
export class InfoComponent implements OnInit {

    public coordinacion: any = {};
    public loading = false;
    public url_img_preview:any;

  constructor( private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
        ) { }

  ngOnInit() {
      this.coordinacion.institucion = 'CONAMYPE';
      this.coordinacion.tipo = 'Asesor';
      this.coordinacion.img = ('default.jpg');
      this.loading = false;
  }

public onSubmit() {
        this.loading = true;
        let formData:FormData = new FormData();
        if(this.url_img_preview){

        }else{this.coordinacion.img = null;}
        
        for (var key in this.coordinacion) {
            formData.append(key, this.coordinacion[key]);
        } 

        this.apiService.upload('coordinacion', formData).subscribe(coordinacion => {
            this.coordinacion = coordinacion;
            this.loading = false;
            //this.router.navigate(['/admin/usuarios']);
            this.alertService.success('Guardado');
        },error => {
            this.alertService.error(error);
            this.loading = false;
        });
    }

setFile(event:any) {
        this.coordinacion.file = event.target.files[0]; 
        if (this.coordinacion.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result;};
            
            reader.readAsDataURL(this.coordinacion.file);
        } 
    }

}
