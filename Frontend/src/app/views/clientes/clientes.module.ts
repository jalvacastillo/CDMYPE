import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';

import { ClientesComponent } from './clientes.component';
import { ClienteComponent } from './cliente/cliente.component';
import { ClienteVentasComponent } from './ventas/cliente-ventas.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	ClientesComponent,
    ClienteComponent,
    ClienteVentasComponent
  ],
  exports: [
  	ClientesComponent,
    ClienteComponent,
    ClienteVentasComponent
  ]
})
export class ClientesModule { }
