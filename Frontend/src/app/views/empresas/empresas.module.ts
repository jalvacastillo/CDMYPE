import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { SharedModule } from '../../shared/shared.module';

import { EmpresasComponent } from './empresas.component';
import { EmpresaComponent } from './empresa/empresa.component';
import { EmpresaInfoComponent } from './empresa/info/empresa-info.component';
import { EmpresaEmpresariosComponent } from './empresa/empresarios/empresa-empresarios.component';
import { EmpresaProductosComponent } from './empresa/productos/empresa-productos.component';
import { EmpresaVentasComponent } from './ventas/empresa-ventas.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    SharedModule,
    TooltipModule.forRoot()
  ],
  declarations: [
  	EmpresasComponent,
    EmpresaComponent,
    EmpresaInfoComponent,
    EmpresaEmpresariosComponent,
    EmpresaProductosComponent,
    EmpresaVentasComponent
  ],
  exports: [
  	EmpresasComponent,
    EmpresaComponent,
    EmpresaInfoComponent,
    EmpresaEmpresariosComponent,
    EmpresaProductosComponent,
    EmpresaVentasComponent
  ]
})
export class EmpresasModule { }
