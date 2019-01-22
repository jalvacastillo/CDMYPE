import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { PerfilComponent } from './views/admin/perfil/perfil.component';

// Admin
// import { EmpresaComponent } from './views/admin/empresa/empresa.component';
import { UsuariosComponent } from './views/admin/usuarios/usuarios.component';
import { UsuarioComponent } from './views/admin/usuarios/usuario/usuario.component';
import { ReportesComponent } from './views/admin/reportes/reportes.component';

import { DashComponent } from './views/dash/dash.component';

import { EmpresasComponent } from './views/empresas/empresas.component';
import { EmpresaComponent } from './views/empresas/empresa/empresa.component';
import { EmpresaVentasComponent } from './views/empresas/ventas/empresa-ventas.component';

import { ConsultoresComponent } from './views/consultores/consultores.component';
import { ConsultorComponent } from './views/consultores/consultor/consultor.component';

import { ComprasComponent } from './views/compras/compras.component';
import { CompraComponent } from './views/compras/compra/compra.component';
import { VentasComponent } from './views/ventas/ventas.component';
import { VentaComponent } from './views/ventas/venta/venta.component';


import { ServiciosComponent } from './views/pagina/servicios/servicios.component';
import { ServicioComponent } from './views/pagina/servicios/servicio/servicio.component';
import { NoticiasComponent } from './views/pagina/noticias/noticias.component';
import { NoticiaComponent } from './views/pagina/noticias/noticia/noticia.component';
import { ProyectosComponent } from './views/pagina/proyectos/proyectos.component';
import { ProyectoComponent } from './views/pagina/proyectos/proyecto/proyecto.component';
import { ResultadosComponent } from './views/pagina/resultados/resultados.component';
import { TestimoniosComponent } from './views/pagina/testimonios/testimonios.component';
import { TestimonioComponent } from './views/pagina/testimonios/testimonio/testimonio.component';

import { DiagnosticosComponent } from './views/pagina/diagnosticos/diagnosticos.component';
import { DiagnosticoComponent } from './views/pagina/diagnosticos/diagnostico/diagnostico.component';

import { AuthGuard } from './guards/auth.guard';
import { AdminGuard } from './guards/admin.guard';

const appRoutes: Routes = [
    { path: 'login', component: LoginComponent },
    { path: 'registro', component: RegisterComponent },
    
    { path: 'admin/perfil', component: PerfilComponent, canActivate: [AuthGuard] },
    { path: 'admin/empresa', component: EmpresaComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/reportes', component: ReportesComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuarios', component: UsuariosComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuario/nuevo', component: UsuarioComponent, canActivate: [AuthGuard, AdminGuard] },
    { path: 'admin/usuario/:id', component: PerfilComponent, canActivate: [AuthGuard, AdminGuard] },

    { path: '', component: DashComponent, canActivate: [AuthGuard] },
    
    { path: 'empresas', component: EmpresasComponent, canActivate: [AuthGuard] },
    { path: 'empresa/ventas/:id', component: EmpresaVentasComponent, canActivate: [AuthGuard] },
    { path: 'empresa/:id', component: EmpresaComponent, canActivate: [AuthGuard] },
    
    { path: 'consultores', component: ConsultoresComponent, canActivate: [AuthGuard] },
    { path: 'consultor/:id', component: ConsultorComponent, canActivate: [AuthGuard] },

    { path: 'servicios', component: ServiciosComponent, canActivate: [AuthGuard] },
    { path: 'servicio/:id', component: ServicioComponent, canActivate: [AuthGuard] },
    { path: 'noticias', component: NoticiasComponent, canActivate: [AuthGuard] },
    { path: 'noticia/:id', component: NoticiaComponent, canActivate: [AuthGuard] },
    { path: 'proyectos', component: ProyectosComponent, canActivate: [AuthGuard] },
    { path: 'proyecto/:id', component: ProyectoComponent, canActivate: [AuthGuard] },
    { path: 'resultados', component: ResultadosComponent, canActivate: [AuthGuard] },
    { path: 'testimonios', component: TestimoniosComponent, canActivate: [AuthGuard] },
    { path: 'testimonio/:id', component: TestimonioComponent, canActivate: [AuthGuard] },
    { path: 'diagnosticos', component: DiagnosticosComponent, canActivate: [AuthGuard] },
    { path: 'diagnostico/:id', component: DiagnosticoComponent, canActivate: [AuthGuard] },

    { path: 'ventas', component: VentasComponent, canActivate: [AuthGuard] },
    { path: 'venta/:id', component: VentaComponent, canActivate: [AuthGuard] },
    { path: 'compras', component: ComprasComponent, canActivate: [AuthGuard] },
    { path: 'compra/:id', component: CompraComponent, canActivate: [AuthGuard] },


    // otherwise redirect to home
    { path: '**', redirectTo: '', pathMatch: 'full' }
];

export const routing = RouterModule.forRoot(appRoutes);