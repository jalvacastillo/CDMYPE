import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { routing } from './app.routing';

import { AuthGuard } from './guards/auth.guard';
import { AdminGuard } from './guards/admin.guard';

import { AlertService } from './services/alert.service';
import { AuthService } from './services/auth.service';
import { ApiService } from './services/api.service';
import { SharedModule } from './shared/shared.module';

import { AuthModule } from './auth/auth.module';
import { DashModule } from './views/dash/dash.module';
import { AdminsModule } from './views/admin/admin.module';
import { EmpresasModule } from './views/empresas/empresas.module';
import { ConsultoresModule } from './views/consultores/consultores.module';
import { ComprasModule } from './views/compras/compras.module';
import { VentasModule } from './views/ventas/ventas.module';
import { PaginaModule } from './views/pagina/pagina.module';
import { ContabilidadModule } from './views/contabilidad/contabilidad.module';


@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    routing,
    AuthModule,
    AdminsModule,
    SharedModule,
    DashModule,
    EmpresasModule,
    ConsultoresModule,
    ComprasModule,
    VentasModule,
    PaginaModule,
    ContabilidadModule
  ],
  providers: [AuthGuard, AdminGuard, AlertService, AuthService, ApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }
