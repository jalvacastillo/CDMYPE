import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-cap-informe',
  templateUrl: './cap-informe.component.html'
})
export class CapInformeComponent implements OnInit {

    public cap:any = {};
    public contrato:any = {};
    public acta:any = {};
    public loading:boolean = false;
    public file:File;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {
       const id = +this.route.snapshot.paramMap.get('id');
           
       if(isNaN(id)){
           this.cap = {};
       }
       else{
           this.loading = true;
           this.apiService.read('cap/', id).subscribe(at => {
              this.cap = at;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});

           this.apiService.read('cap/contrato/', id).subscribe(contrato => {
              this.contrato = contrato;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});

       }
    }

    public onSubmit() {
        this.loading = true;

        if(this.file) {
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('id', this.cap.id);
            formData.append('empresario_id', this.cap.empresario_id);
            formData.append('asesor_id', this.cap.asesor_id);
            formData.append('informe', d.getTime() + ' - ' + this.file.name);

            this.apiService.upload('cap', formData).subscribe(data => {
                this.cap = data;
                this.alertService.success('Guardado')
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    setFile(event:any, imagen:any, orden:any) {
        this.file = event.target.files[0];
        this.onSubmit();
    }

}
