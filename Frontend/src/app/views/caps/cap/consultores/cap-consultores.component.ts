import { Component, OnInit, TemplateRef } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-cap-consultores',
  templateUrl: './cap-consultores.component.html'
})
export class CapConsultoresComponent implements OnInit {

	public consultores:any = [];
    public consultoresList:any = [];
    public consultor:any = {};
    public cap:any = {};
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
           this.apiService.read('cap/consultor/', id).subscribe(consultores => {
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
            formData.append('cap_id', this.route.snapshot.paramMap.get('id'));

            this.apiService.upload('cap/consultor', formData).subscribe(data => {
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
        this.apiService.upload('cap/consultor', consultor).subscribe(data => {
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
            this.apiService.delete('cap/consultor/', consultor.id) .subscribe(data => {
                for (let i = 0; i < this.consultores.length; i++) { 
                    if (this.consultores[i].id == data.id )
                        this.consultores.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }


    public openModalCorreos(template: TemplateRef<any>) {
        this.loading = true;
        this.apiService.read('cap/', +this.route.snapshot.paramMap.get('id')).subscribe(cap => {
            this.cap = cap;
            this.apiService.getAll('consultores/filtrar/especialidad_id/' + cap.especialidad_id).subscribe(consultores => {
                  this.consultoresList = consultores;
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }, error => {this.alertService.error(error); this.loading = false;});

        this.modalRef = this.modalService.show(template);
    }

    public onSubmitEnviar(){
        this.loading = true;
        let data:any = {};
        data.tdr = this.cap;
        data.consultores = this.consultoresList;
        if (confirm('¿Desea enviar el TDR a todos los consultores seleccionados?')) {
            this.apiService.store('cap/enviar-tdr/', data) .subscribe(data => {
                this.alertService.success('Enviado');
                this.loading = false;
            }, error => {this.alertService.error(error); this.loading = false;});
        }
    }

}
