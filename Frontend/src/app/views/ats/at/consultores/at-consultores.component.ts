import { Component, OnInit, TemplateRef, Input } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-at-consultores',
  templateUrl: './at-consultores.component.html'
})
export class AtConsultoresComponent implements OnInit {

    @Input() at:any = {};
	public consultor:any = {};
    public loading:boolean = false;
    modalRef: BsModalRef;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

	ngOnInit() {

	}

    public openModal(template: TemplateRef<any>, consultor:any) {
        this.consultor = consultor;
        this.modalRef = this.modalService.show(template);
    }

    public onSubmit() {
        this.loading = true;
        // Guardamos al at
        this.apiService.store('at/consultor', this.consultor).subscribe(consultor => {
            this.consultor = consultor;
            this.loading = false; 
            this.modalRef.hide();
        },error => {this.alertService.error(error); this.loading = false; });
    }

    public eliminar(consultor:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('at/consultor/', consultor.id) .subscribe(data => {
                for (let i = 0; i < this.at.consultores.length; i++) { 
                    if (this.at.consultores[i].id == data.id )
                        this.at.consultores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }

}
