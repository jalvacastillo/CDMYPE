import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { TooltipModule } from 'ngx-bootstrap';

import { ComprasComponent } from './compras.component';
import { CompraComponent } from './compra/compra.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	ComprasComponent,
    CompraComponent
  ],
  exports: [
  	ComprasComponent,
    CompraComponent
  ]
})
export class ComprasModule { }
