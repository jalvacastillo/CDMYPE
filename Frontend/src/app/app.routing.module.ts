import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { PerfilComponent } from './views/admin/perfil/perfil.component';

// Admin
// import { EmpresaComponent } from './views/admin/empresa/empresa.component';
import { UsuariosComponent } from './views/admin/usuarios/usuarios.component';
import { UsuarioComponent } from './views/admin/usuarios/usuario/usuario.component';
import { ReportesComponent } from './views/admin/reportes/reportes.component';
import { FormComponent } from './views/admin/reportes/form/form.component';

import { DashComponent } from './views/dash/dash.component';
import { CoordinacionesComponent } from './views/coordinaciones/coordinaciones.component';
import { InfoComponent } from './views/coordinaciones/info/info.component';
import { VinculacionesComponent } from './views/vinculaciones/vinculaciones.component';
import { VinculacionComponent } from './views/vinculaciones/vinculacion/vinculacion.component';
 



import { EmpresasComponent } from './views/empresas/empresas.component';
import { EmpresaComponent } from './views/empresas/empresa/empresa.component';
import { EmpresaInfoComponent } from './views/empresas/empresa/info/empresa-info.component';

import { ConsultoresComponent } from './views/consultores/consultores.component';
import { ConsultorComponent } from './views/consultores/consultor/consultor.component';
import { ConsultorInfoComponent } from './views/consultores/consultor/info/consultor-info.component';

import { EquiposComponent } from './views/pagina/equipo/equipos.component';
import { EquipoComponent } from './views/pagina/equipo/equipo/equipo.component';
import { ServiciosComponent } from './views/pagina/servicios/servicios.component';
import { ServicioComponent } from './views/pagina/servicios/servicio/servicio.component';
import { NoticiasComponent } from './views/pagina/noticias/noticias.component';
import { NoticiaComponent } from './views/pagina/noticias/noticia/noticia.component';

import { ProyectosComponent } from './views/pagina/proyectos/proyectos.component';
import { ProyectoComponent } from './views/pagina/proyectos/proyecto/proyecto.component';

import { ActividadesComponent } from './views/pagina/actividades/actividades.component';
import { ActividadComponent } from './views/pagina/actividades/actividad/actividad.component';

import { ResultadosComponent } from './views/pagina/resultados/resultados.component';
import { TestimoniosComponent } from './views/pagina/testimonios/testimonios.component';
import { TestimonioComponent } from './views/pagina/testimonios/testimonio/testimonio.component';

import { DiagnosticosComponent } from './views/pagina/diagnosticos/diagnosticos.component';
import { DiagnosticoComponent } from './views/pagina/diagnosticos/diagnostico/diagnostico.component';

import { AtsComponent } from './views/ats/ats.component';
import { AtComponent } from './views/ats/at/at.component';

import { CapsComponent } from './views/caps/caps.component';
import { CapComponent } from './views/caps/cap/cap.component';

import { SalidasComponent } from './views/salidas/salidas.component';
import { SalidaComponent } from './views/salidas/salida/salida.component';

import { MaterialesComponent } from './views/materiales/materiales.component';
import { MaterialComponent } from './views/materiales/material/material.component';

import { AuthGuard } from './guards/auth.guard';
import { AdminGuard } from './guards/admin.guard';

const routes: Routes = [
    { path: 'login', component: LoginComponent },
    { path: 'registro', component: RegisterComponent },
    
    { path: 'admin/perfil', component: PerfilComponent, canActivate: [AuthGuard] },
    { path: 'admin/empresa', component: EmpresaComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/reportes', component: ReportesComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/reporte/nuevo', component: FormComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuarios', component: UsuariosComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuario/nuevo', component: UsuarioComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuario/:id', component: PerfilComponent, canActivate: [AuthGuard, AdminGuard] },

    { path: '', component: DashComponent, canActivate: [AuthGuard] },
    
    { path: 'empresas', component: EmpresasComponent, canActivate: [AuthGuard] },
    { path: 'empresa/:id', component: EmpresaComponent, canActivate: [AuthGuard] },
    { path: 'coordinaciones', component: CoordinacionesComponent, canActivate: [AuthGuard] },
    { path: 'coordinaciones/info', component: InfoComponent, canActivate: [AuthGuard] },
    { path: 'vinculaciones', component: VinculacionesComponent, canActivate: [AuthGuard] },
    { path: 'vinculacion', component: VinculacionComponent, canActivate: [AuthGuard] },
    
    { path: 'consultores', component: ConsultoresComponent, canActivate: [AuthGuard] },
    { path: 'consultor/:id', component: ConsultorComponent, canActivate: [AuthGuard] },
    { path: 'consultor/nuevo', component: ConsultorInfoComponent, canActivate: [AuthGuard] },

    { path: 'equipos', component: EquiposComponent, canActivate: [AuthGuard] },
    { path: 'equipo/:id', component: EquipoComponent, canActivate: [AuthGuard] },
    { path: 'servicios', component: ServiciosComponent, canActivate: [AuthGuard] },
    { path: 'servicio/:id', component: ServicioComponent, canActivate: [AuthGuard] },
    { path: 'noticias', component: NoticiasComponent, canActivate: [AuthGuard] },
    { path: 'noticia/:id', component: NoticiaComponent, canActivate: [AuthGuard] },
    
    { path: 'proyectos', component: ProyectosComponent, canActivate: [AuthGuard] },
    { path: 'proyecto/:id', component: ProyectoComponent, canActivate: [AuthGuard] },

    { path: 'actividades', component: ActividadesComponent, canActivate: [AuthGuard] },
    { path: 'actividad/:id', component: ActividadComponent, canActivate: [AuthGuard] },

    { path: 'resultados', component: ResultadosComponent, canActivate: [AuthGuard] },
    { path: 'testimonios', component: TestimoniosComponent, canActivate: [AuthGuard] },
    { path: 'testimonio/:id', component: TestimonioComponent, canActivate: [AuthGuard] },
    { path: 'diagnosticos', component: DiagnosticosComponent, canActivate: [AuthGuard] },
    { path: 'diagnostico/:id', component: DiagnosticoComponent, canActivate: [AuthGuard] },

    
    // Salidas
    { path: 'salidas', component: SalidasComponent, canActivate: [AuthGuard] },
    { path: 'salida/:id', component: SalidaComponent, canActivate: [AuthGuard] },

    // Materiales
    { path: 'materiales', component: MaterialesComponent, canActivate: [AuthGuard] },
    { path: 'material/:id', component: MaterialComponent, canActivate: [AuthGuard] },

    // Ats
    { path: 'ats', component: AtsComponent, canActivate: [AuthGuard] },
    { path: 'at/:id', component: AtComponent, canActivate: [AuthGuard] },

    // Ats
    { path: 'caps', component: CapsComponent, canActivate: [AuthGuard] },
    { path: 'cap/:id', component: CapComponent, canActivate: [AuthGuard] },


    // otherwise redirect to home
    { path: '**', redirectTo: '', pathMatch: 'full' }
];

@NgModule({
  imports: [
    RouterModule.forRoot(
      routes,
      // { enableTracing: true }
    )
  ],
  exports: [
    RouterModule
  ]
})

export class AppRoutingModule { }