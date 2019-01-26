import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';

import { ConsultoresComponent } from './consultores.component';
import { ConsultorComponent } from './consultor/consultor.component';
import { ConsultorInfoComponent } from './consultor/info/consultor-info.component';
import { ConsultorEspecialidadesComponent } from './consultor/especialidades/consultor-especialidades.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,  
    RouterModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	ConsultoresComponent,
    ConsultorComponent,
    ConsultorInfoComponent,
    ConsultorEspecialidadesComponent
  ],
  exports: [
  	ConsultoresComponent,
    ConsultorComponent,
    ConsultorInfoComponent,
    ConsultorEspecialidadesComponent
  ]
})
export class ConsultoresModule { }
