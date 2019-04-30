import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { SharedModule } from '../../shared/shared.module';
import { FocusModule } from 'angular2-focus';
import { RatingModule } from 'ngx-bootstrap/rating';

import { EmpresasComponent } from './empresas.component';
import { EmpresaComponent } from './empresa/empresa.component';
import { EmpresaInfoComponent } from './empresa/info/empresa-info.component';
import { EmpresaEmpresariosComponent } from './empresa/empresarios/empresa-empresarios.component';
import { EmpresaIndicadoresComponent } from './empresa/indicadores/empresa-indicadores.component';
import { EmpresaProyectosComponent } from './empresa/proyectos/empresa-proyectos.component';
import { EmpresaProductosComponent } from './empresa/productos/empresa-productos.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    SharedModule,
    RatingModule.forRoot(),
    FocusModule.forRoot(),
    TooltipModule.forRoot()
  ],
  declarations: [
  	EmpresasComponent,
    EmpresaComponent,
    EmpresaInfoComponent,
    EmpresaEmpresariosComponent,
    EmpresaProductosComponent,
    EmpresaIndicadoresComponent,
    EmpresaProyectosComponent
  ],
  exports: [
  	EmpresasComponent,
    EmpresaComponent,
    EmpresaInfoComponent,
    EmpresaEmpresariosComponent,
    EmpresaProductosComponent,
    EmpresaIndicadoresComponent,
    EmpresaProyectosComponent
  ]
})
export class EmpresasModule { }
