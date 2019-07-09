import { Component, OnInit, TemplateRef } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { AlertService } from '../../../services/alert.service';
import { ApiService } from '../../../services/api.service';

@Component({
  selector: 'app-material',
  templateUrl: './material.component.html'
})
export class MaterialComponent implements OnInit {

	public material: any = {};
	public recurso: any = [];
    public especialidades: any = [];
    public loading = false;

    modalRef: BsModalRef;
    public file:File;

    constructor( 
        private apiService: ApiService, private alertService: AlertService,
        private route: ActivatedRoute, private router: Router, private modalService: BsModalService
    ) { }

	ngOnInit() {
        const id = +this.route.snapshot.paramMap.get('id');
           
        if(isNaN(id)){
            this.material = {};
            this.material.asesor_id = this.apiService.auth_user().id;
        }
        else{
           this.loading = true;
           this.apiService.read('material/', id).subscribe(material => {
              this.material = material;
               this.loading = false;
           },error => {this.alertService.error(error); this.loading = false;});
        }
	    
        this.apiService.getAll('especialidades').subscribe(especialidades => {
          this.especialidades = especialidades;                   
        });

	}


	public onSubmit() {
        this.loading = true;
        // Guardamos al at
        this.material.estado = 'Creada';
        this.apiService.store('material', this.material).subscribe(material => {
            if(!this.material.id) {
                this.router.navigate(['/material/'+ material.id]);
            }else{
                this.material = material;
            }
            this.loading = false;
        },error => {this.alertService.error(error); this.loading = false; });
    }

    // Recurso

    public openModal(template: TemplateRef<any>) {
        this.modalRef = this.modalService.show(template);
    }

    public onSubmitFile(consultor:any) {

        if(this.file) {
            this.loading = true;
            let formData:FormData = new FormData();
            formData.append('file', this.file);
            var d = new Date();
            formData.append('material_id', this.material.id);
            formData.append('nombre', this.recurso.nombre);
            formData.append('archivo', d.getTime() + ' - ' + this.file.name);

            this.apiService.upload('material/recurso', formData).subscribe(data => {
                if(!consultor.id) {
                    this.material.recursos.push(data);
                }
                this.loading = false;
                this.modalRef.hide();
            },error => {this.alertService.error(error); this.loading = false;});
        }

    }

    setFile(event:any) {
        this.file = event.target.files[0];
    }


    public eliminar(recurso:any) {
        if (confirm('¿Desea eliminar el Registro?')) {
            this.apiService.delete('material/recurso/', recurso.id) .subscribe(data => {
                for (let i = 0; i < this.material.recursos.length; i++) { 
                    if (this.material.recursos[i].id == data.id )
                        this.material.recursos.splice(i, 1);
                }
            }, error => {this.alertService.error(error); });
        }

    }


   

}
