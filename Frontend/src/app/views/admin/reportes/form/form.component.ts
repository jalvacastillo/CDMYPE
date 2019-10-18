import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css']
})
export class FormComponent implements OnInit {

    public informe: any = {};
    public loading = false;

    constructor( 
        public apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router
    ) { }

    ngOnInit() {  
      
    }

    public onSubmit() {
        this.loading = true;
        
        this.apiService.store('informe', this.informe).subscribe(informe => {
            this.informe = informe;
            this.loading = false;
            this.alertService.success('Guardado');
            //this.router.navigate(['/admin/usuarios']);
        },error => {
            this.alertService.error(error);
            this.loading = false;
        });
    }

}
