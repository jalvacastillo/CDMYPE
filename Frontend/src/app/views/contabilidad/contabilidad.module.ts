import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';

import { ContabilidadComponent } from './contabilidad.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	ContabilidadComponent
  ],
  exports: [
  	ContabilidadComponent
  ]
})
export class ContabilidadModule { }
