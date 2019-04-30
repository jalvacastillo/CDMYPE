import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { ChartsModule } from 'ng2-charts';
import { TooltipModule } from 'ngx-bootstrap';

import { DashComponent } from './dash.component';
import { DatosComponent } from './datos/datos.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule,
    ChartsModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	DashComponent,
    DatosComponent
  ],
  exports: [
  	DashComponent,
    DatosComponent
  ]
})
export class DashModule { }
