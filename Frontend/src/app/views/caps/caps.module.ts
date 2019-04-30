import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { SharedModule } from '../../shared/shared.module';
import { PipesModule } from '../../pipes/pipes.module';
import { PopoverModule } from 'ngx-bootstrap/popover';

import { CapsComponent } from './caps.component';
import { CapComponent } from './cap/cap.component';
import { CapTdrComponent } from './cap/tdr/cap-tdr.component';
import { CapEmpresariosComponent } from './cap/empresarios/cap-empresarios.component';
import { CapConsultoresComponent } from './cap/consultores/cap-consultores.component';
import { CapContratoComponent } from './cap/contrato/cap-contrato.component';
import { CapAsistenciaComponent } from './cap/asistencia/cap-asistencia.component';
import { CapInformeComponent } from './cap/informe/cap-informe.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    SharedModule,
    PipesModule,
    PopoverModule.forRoot(),
    TooltipModule.forRoot()
  ],
  declarations: [
  	CapsComponent,
    CapComponent,
    CapEmpresariosComponent,
    CapTdrComponent,
    CapConsultoresComponent,
    CapContratoComponent,
    CapAsistenciaComponent,
    CapInformeComponent
  ],
  exports: [
  	CapsComponent,
    CapComponent,
    CapEmpresariosComponent,
    CapTdrComponent,
    CapConsultoresComponent,
    CapContratoComponent,
    CapAsistenciaComponent,
    CapInformeComponent
  ]
})
export class CapsModule { }
