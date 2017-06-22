import { FroalaEditorModule, FroalaViewModule } from 'angular2-froala-wysiwyg';

import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { routing } from './app.routing';

import { AlertComponent } from './shared/alert/alert.component';
import { AuthGuard } from './auth.guard';
import { AlertService } from './services/alert.service';
import { AuthService } from './services/auth.service';
import { ApiService } from './services/api.service';

import { LoginComponent } from './login/login.component';
import { DashComponent } from './dash/dash.component';

import { NavbarComponent } from './shared/navbar/navbar.component';
import { FooterComponent } from './shared/footer/footer.component';
import { PasosComponent } from './shared/pasos/pasos.component';

import { SalidasComponent } from './dash/salidas/salidas.component';
import { SalidaComponent } from './dash/salidas/form/salida.component';

import { ClientesComponent } from './dash/clientes/clientes.component';
import { EmpresaComponent } from './dash/clientes/empresa/empresa.component';
import { EmpresarioComponent } from './dash/clientes/empresario/empresario.component';
import { IndicadoresComponent } from './dash/clientes/indicadores/indicadores.component';
import { CProyectosComponent } from './dash/clientes/proyectos/proyectos.component';
import { HistorialComponent } from './dash/clientes/historial/historial.component';

import { ConsultoresComponent } from './dash/consultores/consultores.component';
import { ConsultorComponent } from './dash/consultores/consultor/consultor.component';
import { CEspecialidadesComponent } from './dash/consultores/especialidades/especialidades.component';
import { CHistorialComponent } from './dash/consultores/historial/historial.component';

import { AsistenciasComponent } from './dash/asistencias/asistencias.component';
import { AtTerminoComponent } from './dash/asistencias/termino/termino.component';
import { AtConsultoresComponent } from './dash/asistencias/consultores/consultores.component';
import { AtOfertasComponent } from './dash/asistencias/ofertas/ofertas.component';
import { AtEnviadosComponent } from './dash/asistencias/enviados/enviados.component';
import { AtContratoComponent } from './dash/asistencias/contrato/contrato.component';
import { AtActaComponent } from './dash/asistencias/acta/acta.component';

import { CapacitacionesComponent } from './dash/capacitaciones/capacitaciones.component';
import { NoticiasComponent } from './dash/noticias/noticias.component';
import { ProyectosComponent } from './dash/proyectos/proyectos.component';
import { ProyectoComponent } from './dash/proyectos/proyecto/proyecto.component';
import { NoticiaComponent } from './dash/noticias/noticia/noticia.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    AlertComponent,
    PasosComponent,
    FooterComponent,
    LoginComponent,
    DashComponent,
    SalidasComponent,
    SalidaComponent,
    ClientesComponent,
        EmpresaComponent,
        EmpresarioComponent,
        IndicadoresComponent,
        CProyectosComponent,
        HistorialComponent,
    ConsultoresComponent,
        ConsultorComponent,
        CEspecialidadesComponent,
        CHistorialComponent,
     AsistenciasComponent,
        AtTerminoComponent,
        AtConsultoresComponent,
        AtContratoComponent,
        AtActaComponent,
        AtEnviadosComponent,
        AtOfertasComponent,
    CapacitacionesComponent,
    NoticiasComponent,
    ProyectosComponent,
    ProyectoComponent,
    NoticiaComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    routing,
    FroalaEditorModule.forRoot(), FroalaViewModule.forRoot()
  ],
  providers: [AuthGuard, AlertService, AuthService, ApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }
