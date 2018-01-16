import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { TooltipModule } from 'ngx-bootstrap';
import { ModalModule } from 'ngx-bootstrap';

import { VentasComponent } from './ventas.component';
import { VentaComponent } from './venta/venta.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot(),
    ModalModule.forRoot()
  ],
  declarations: [
  	VentasComponent,
    VentaComponent
  ],
  exports: [
  	VentasComponent,
    VentaComponent
  ]
})
export class VentasModule { }
