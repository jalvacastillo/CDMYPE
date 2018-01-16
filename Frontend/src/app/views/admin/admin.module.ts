import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { TooltipModule } from 'ngx-bootstrap';
import { ProgressbarModule } from 'ngx-bootstrap';

import { PerfilComponent } from './perfil/perfil.component';
import { EmpresaComponent } from './empresa/empresa.component';
import { UsuariosComponent } from './usuarios/usuarios.component';
import { UsuarioComponent } from './usuarios/usuario/usuario.component';
import { ReportesComponent } from './reportes/reportes.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot(),
    ProgressbarModule.forRoot()
  ],
  declarations: [
    PerfilComponent,
    EmpresaComponent,
    UsuariosComponent,
    UsuarioComponent,
    ReportesComponent
  ],
  exports: [
    PerfilComponent,
    EmpresaComponent,
    UsuariosComponent,
    UsuarioComponent
  ]
})
export class AdminsModule { }
