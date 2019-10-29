import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-vinculacion',
  templateUrl: './vinculacion.component.html',
  styleUrls: ['./vinculacion.component.css']
})
export class VinculacionComponent implements OnInit {

    public vinculacion: any = {};
    public loading = false;
    public url_img_preview:any; 


  constructor(private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router) { }

  ngOnInit() {
    this.vinculacion.img = ('default.jpg');
    this.loading = false;
  }
   public onSubmit() {
        this.loading = true; 
        this.vinculacion.asesor_id = this.apiService.auth_user().id;

        if(this.url_img_preview){

        }else{this.vinculacion.img = null;}

        let formData:FormData = new FormData();
        for (var key in this.vinculacion) {
            formData.append(key, this.vinculacion[key]);
        } 

        this.apiService.upload('vinculacion', formData).subscribe(vinculacion => {
            this.vinculacion = vinculacion;
            this.loading = false;
            this.alertService.success("Guardado");
        },error => {
            this.alertService.error(error);
            this.loading = false;
        });
    }
    public selectEmpresa(event){
        console.log(event);
        this.vinculacion.empresa = event.empresa;
        this.vinculacion.empresa_id = event.empresa.id;
    }

    setFile(event:any) {
        this.vinculacion.file = event.target.files[0]; 
        if (this.vinculacion.file) {
            var reader = new FileReader();
            
            reader.onload = () => { this.url_img_preview = reader.result;};
            
            reader.readAsDataURL(this.vinculacion.file);
        } 
    }
}
