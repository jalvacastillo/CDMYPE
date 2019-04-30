import { Component, OnInit, TemplateRef } from '@angular/core';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-cap-contrato',
  templateUrl: './cap-contrato.component.html'
})
export class CapContratoComponent implements OnInit {

    public contrato:any = {};
    public loading:boolean = false;
    modalRef: BsModalRef;

	constructor( 
            public apiService: ApiService, private alertService: AlertService,
            private route: ActivatedRoute, private router: Router, private modalService: BsModalService
        ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
            
        if(isNaN(id)){
            this.contrato = {};
        }
        else{
            this.apiService.read('cap/contrato/', id).subscribe(contrato => {
               this.contrato = contrato;
            },error => {this.alertService.error(error); this.loading = false; });
        }
	}

    public onSubmit(){
        this.loading = true;
        this.apiService.store('cap/contrato', this.contrato).subscribe(contrato => {
            this.contrato = contrato;
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }



}
