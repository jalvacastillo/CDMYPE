import { Component, OnInit, Input, TemplateRef } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { BsModalService } from 'ngx-bootstrap/modal';
import { AlertService } from '../../../../../services/alert.service';
import { ApiService } from '../../../../../services/api.service';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

@Component({
  selector: 'app-acciones',
  templateUrl: './acciones.component.html'
})
export class AccionesComponent implements OnInit {
  [x: string]: any;

    @Input() equipo:any = {};
	  public loading = false;
    public proyectos:any = [];
    public accion:any = {};
    public asesoria:any = {};
   
    modalRef: BsModalRef;

  constructor( private apiService: ApiService, private alertService: AlertService,
    private route: ActivatedRoute, private router: Router, private modalService: BsModalService) { }

  ngOnInit() {

    const id = +this.route.snapshot.paramMap.get('id');
            
        this.apiService.read('proyectos/accion/', id).subscribe(proyectos => {
           this.proyectos = proyectos;
        });
  }

  public openModal(template: TemplateRef<any>, accion:any) {
    this.accion = accion;
    this.modalRef = this.modalService.show(template);        
}

public eliminar(accion:any) {
  if (confirm('¿Desea eliminar el Registro?')) {
      this.apiService.delete('accion/', accion.id) .subscribe(data => {
          for (let i = 0; i < this.proyectos.length; i++) { 
              if (this.proyectos[i].id == data.id )
                  this.proyectos.splice(i, 1);
          }
      }, error => {this.alertService.error(error); });
  }
}


//Asesorias *****************************************************************


public saveAsesoria(asesoria:any){
  asesoria.accion_id = this.accion.id;
  this.loading = true;
  console.log(asesoria);
  this.apiService.store('asesoria', asesoria).subscribe(data => {
      if(!this.asesoria.id)
      this.accion.asesorias.push(data);
      this.asesoria = {};
      this.loading = false;
  }, error => {this.alertService.error(error); this.loading = false;});
}

public deleteAsesoria(asesoria:any){
  if (confirm('¿Desea eliminar el Registro?')) {
      this.apiService.delete('asesoria/', asesoria.id) .subscribe(asesoria => {
          for (let i = 0; i < this.accion.asesorias.length; i++) { 
              if (this.accion.asesoria[i].id == asesoria.id ){
                  this.accion.asesoria.splice(i, 1);
                 
              }
          }
      }, error => {this.alertService.error(error); });
             
  }
}

public editAsesoria(asesoria:any){
  this.asesoria = asesoria;
}

}
