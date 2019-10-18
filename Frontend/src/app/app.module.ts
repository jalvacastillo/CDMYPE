import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './app.routing.module';

import { AuthGuard } from './guards/auth.guard';
import { AdminGuard } from './guards/admin.guard';

import { SharedModule } from './shared/shared.module';
import { PipesModule } from './pipes/pipes.module';

import { NotifierModule } from 'angular-notifier';
import { AlertService } from './services/alert.service';
import { ApiService } from './services/api.service';
import { QuillModule } from 'ngx-quill';


import { AuthModule } from './auth/auth.module';
import { DashModule } from './views/dash/dash.module';
import { AdminModule } from './views/admin/admin.module';
import { EmpresasModule } from './views/empresas/empresas.module';
import { ConsultoresModule } from './views/consultores/consultores.module';
import { AtsModule } from './views/ats/ats.module';
import { CapsModule } from './views/caps/caps.module';
import { SalidasModule } from './views/salidas/salidas.module';
import { PaginaModule } from './views/pagina/pagina.module';
import { MaterialesModule } from './views/materiales/materiales.module';
import { CoordinacionesModule } from './views/coordinaciones/coordinaciones.module';
import { VinculacionesModule } from './views/vinculaciones/vinculaciones.module';



@NgModule({
  declarations: [
    AppComponent
   
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule,
    NotifierModule.withConfig({position: {horizontal:{ position:'middle' } }}),
    AuthModule,
    SharedModule,
    PipesModule,
    AdminModule,
    SharedModule,
    DashModule,
    EmpresasModule,
    ConsultoresModule,
    AtsModule,
    CapsModule,
    SalidasModule,
    PaginaModule,
    MaterialesModule,
    CoordinacionesModule,
    VinculacionesModule,
    QuillModule
  ],
  providers: [AuthGuard, AdminGuard, AlertService, ApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }
