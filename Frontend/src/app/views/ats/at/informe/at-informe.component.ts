import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-informe',
  templateUrl: './at-informe.component.html'
})
export class AtInformeComponent implements OnInit {

    public at:any = {};
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
           this.at = {};
       }
       else{
           this.loading = true;
           this.apiService.read('at/', id).subscribe(at => {
              this.at = at;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});

           this.apiService.read('at/contrato/', id).subscribe(contrato => {
              this.contrato = contrato;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});

           this.apiService.read('at/acta/', id).subscribe(acta => {
              this.acta = acta;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});
       }
    }

    public onSubmit() {

        if(this.file) {
            this.loading = true;
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('id', this.at.id);
            formData.append('empresario_id', this.at.empresario_id);
            formData.append('asesor_id', this.at.asesor_id);
            formData.append('informe', d.getTime() + ' - ' + this.file.name);

            this.apiService.upload('at', formData).subscribe(data => {
                this.at = data;
                this.alertService.success('Guardado')
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    setFile(event:any) {
        this.file = event.target.files[0];
        this.onSubmit();
    }

}
