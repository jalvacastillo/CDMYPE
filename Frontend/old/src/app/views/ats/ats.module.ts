import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { SharedModule } from '../../shared/shared.module';
import { PipesModule } from '../../pipes/pipes.module';
import { PopoverModule } from 'ngx-bootstrap/popover';

import { AtsComponent } from './ats.component';
import { AtComponent } from './at/at.component';
import { AtTdrComponent } from './at/tdr/at-tdr.component';
import { AtEmpresaComponent } from './at/empresa/at-empresa.component';
import { AtConsultoresComponent } from './at/consultores/at-consultores.component';
import { AtContratoComponent } from './at/contrato/at-contrato.component';
import { AtActaComponent } from './at/acta/at-acta.component';

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
  	AtsComponent,
    AtComponent,
    AtEmpresaComponent,
    AtTdrComponent,
    AtConsultoresComponent,
    AtContratoComponent,
    AtActaComponent
  ],
  exports: [
  	AtsComponent,
    AtComponent,
    AtEmpresaComponent,
    AtTdrComponent,
    AtConsultoresComponent,
    AtContratoComponent,
    AtActaComponent
  ]
})
export class AtsModule { }
