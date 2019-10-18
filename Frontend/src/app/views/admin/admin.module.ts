import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { TooltipModule } from 'ngx-bootstrap';
import { ProgressbarModule } from 'ngx-bootstrap';
import { SharedModule } from '../../shared/shared.module';

import { PerfilComponent } from './perfil/perfil.component';
import { EmpresaComponent } from './empresa/empresa.component';
import { UsuariosComponent } from './usuarios/usuarios.component';
import { UsuarioComponent } from './usuarios/usuario/usuario.component';
import { ReportesComponent } from './reportes/reportes.component';
import { FormComponent } from './reportes/form/form.component';
import { QuillModule } from 'ngx-quill';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    SharedModule,
    TooltipModule.forRoot(),
    ProgressbarModule.forRoot(),
    QuillModule.forRoot()
  ],
  declarations: [
    PerfilComponent,
    EmpresaComponent,
    UsuariosComponent,
    UsuarioComponent,
    ReportesComponent,
    FormComponent
  ],
  exports: [
    PerfilComponent,
    EmpresaComponent,
    UsuariosComponent,
    UsuarioComponent
  ]
})
export class AdminModule { }
