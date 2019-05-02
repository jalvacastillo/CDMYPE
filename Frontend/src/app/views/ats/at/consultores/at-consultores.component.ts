import { Component, OnInit, TemplateRef } from '@angular/core';
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

	public consultores:any = [];
    public consultoresList:any = [];
    public consultor:any = {};
    public tdr:any = {};
    public loading:boolean = false;
    modalRef: BsModalRef;
    public file:File;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

	ngOnInit() {
       const id = +this.route.snapshot.paramMap.get('id');
           
       if(isNaN(id)){
           this.consultores = {};
       }
       else{
           this.loading = true;
           this.apiService.read('at/consultor/', id).subscribe(consultores => {
              this.consultores = consultores;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});
       }
	}

    public openModal(template: TemplateRef<any>, consultor:any) {
        this.apiService.getAll('consultores/all').subscribe(consultores => {
          this.consultoresList = consultores;
        });
        this.consultor = consultor;
        this.modalRef = this.modalService.show(template);
    }

    public onSubmitFile(consultor:any) {

        if(this.file) {
            this.loading = true;
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('consultor_id', consultor.consultor_id);
            formData.append('doc_oferta', d.getTime() + ' - ' + this.file.name);
            formData.append('fecha_oferta', this.apiService.datetime());
            formData.append('at_id', this.route.snapshot.paramMap.get('id'));

            this.apiService.upload('at/consultor', formData).subscribe(data => {
                if(!consultor.id) {
                    this.consultores.push(data);
                }
                this.loading = false;
                this.modalRef.hide();
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    public onSubmit(consultor:any){
        this.loading = true;
        this.apiService.upload('at/consultor', consultor).subscribe(data => {
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false;});
    }

    setFile(event:any, imagen:any, orden:any) {
        this.file = event.target.files[0];
    }


    public seleccionar(consultor:any){
        for (let i = 0; i < this.consultores.length; i++) { 
            if (this.consultores[i].id == consultor.id ){
                this.consultores[i].seleccionado = true;
                this.consultores[i].fecha_seleccion = this.apiService.datetime();
                this.onSubmit(this.consultores[i]);
            }
            else{
                if(this.consultores[i].seleccionado == true && this.consultores[i].id != consultor.id) {
                    this.consultores[i].seleccionado = false;
                    this.onSubmit(this.consultores[i]);
                }
            }
        }
    }

    public eliminar(consultor:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('at/consultor/', consultor.id) .subscribe(data => {
                for (let i = 0; i < this.consultores.length; i++) { 
                    if (this.consultores[i].id == data.id )
                        this.consultores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }


    public openModalCorreos(template: TemplateRef<any>) {
        this.loading = true;
        this.apiService.read('at/', +this.route.snapshot.paramMap.get('id')).subscribe(tdr => {
            this.tdr = tdr;
            this.apiService.getAll('consultores/filtrar/especialidad_id/' + tdr.especialidad_id).subscribe(consultores => {
                  this.consultoresList = consultores;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }, error => {this.alertService.error(error); this.loading = false;});

        this.modalRef = this.modalService.show(template);
    }

    public onSubmitEnviar(){
        this.loading = true;
        let data:any = {};
        data.tdr = this.tdr;
        data.consultores = this.consultoresList;
        if (confirm('¿Desea enviar el TDR a todos los consultores seleccionados?')) {
            this.apiService.store('at/enviar-tdr/', data) .subscribe(data => {
                this.alertService.success('Enviado');
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }

}
