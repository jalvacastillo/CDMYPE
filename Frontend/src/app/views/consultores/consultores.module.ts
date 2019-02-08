import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { TypeaheadModule } from 'ngx-bootstrap/typeahead';

import { ConsultoresComponent } from './consultores.component';
import { ConsultorComponent } from './consultor/consultor.component';
import { ConsultorInfoComponent } from './consultor/info/consultor-info.component';
import { ConsultorEspecialidadesComponent } from './consultor/especialidades/consultor-especialidades.component';
import { ConsultorHistorialComponent } from './consultor/historial/consultor-historial.component';
import { ConsultorCuentaComponent } from './consultor/cuenta/consultor-cuenta.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,  
    RouterModule,
    TooltipModule.forRoot(),
    TypeaheadModule.forRoot()
  ],
  declarations: [
  	ConsultoresComponent,
    ConsultorComponent,
    ConsultorInfoComponent,
    ConsultorCuentaComponent,
    ConsultorHistorialComponent,
    ConsultorEspecialidadesComponent
  ],
  exports: [
  	ConsultoresComponent,
    ConsultorComponent,
    ConsultorInfoComponent,
    ConsultorCuentaComponent,
    ConsultorHistorialComponent,
    ConsultorEspecialidadesComponent
  ]
})
export class ConsultoresModule { }
