import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { PerfilComponent } from './views/admin/perfil/perfil.component';

// Admin
import { EmpresaComponent } from './views/admin/empresa/empresa.component';
import { UsuariosComponent } from './views/admin/usuarios/usuarios.component';
import { UsuarioComponent } from './views/admin/usuarios/usuario/usuario.component';
import { ReportesComponent } from './views/admin/reportes/reportes.component';

import { DashComponent } from './views/dash/dash.component';

import { ClientesComponent } from './views/clientes/clientes.component';
import { ClienteComponent } from './views/clientes/cliente/cliente.component';
import { ClienteVentasComponent } from './views/clientes/ventas/cliente-ventas.component';

import { ConsultoresComponent } from './views/consultores/consultores.component';
import { ConsultorComponent } from './views/consultores/consultor/consultor.component';

import { ComprasComponent } from './views/compras/compras.component';
import { CompraComponent } from './views/compras/compra/compra.component';
import { VentasComponent } from './views/ventas/ventas.component';
import { VentaComponent } from './views/ventas/venta/venta.component';
import { NoticiasComponent } from './views/noticias/noticias.component';
import { NoticiaComponent } from './views/noticias/noticia/noticia.component';

import { ContabilidadComponent } from './views/contabilidad/contabilidad.component';

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
    
    { path: 'clientes', component: ClientesComponent, canActivate: [AuthGuard] },
    { path: 'cliente/ventas/:id', component: ClienteVentasComponent, canActivate: [AuthGuard] },
    { path: 'cliente/:id', component: ClienteComponent, canActivate: [AuthGuard] },
    
    { path: 'consultores', component: ConsultoresComponent, canActivate: [AuthGuard] },
    { path: 'consultor/:id', component: ConsultorComponent, canActivate: [AuthGuard] },

    { path: 'noticias', component: NoticiasComponent, canActivate: [AuthGuard] },
    { path: 'noticia/:id', component: NoticiaComponent, canActivate: [AuthGuard] },

    { path: 'ventas', component: VentasComponent, canActivate: [AuthGuard] },
    { path: 'venta/:id', component: VentaComponent, canActivate: [AuthGuard] },
    { path: 'compras', component: ComprasComponent, canActivate: [AuthGuard] },
    { path: 'compra/:id', component: CompraComponent, canActivate: [AuthGuard] },

    { path: 'contabilidad', component: ContabilidadComponent, canActivate: [AuthGuard] },

    // otherwise redirect to home
    { path: '**', redirectTo: '', pathMatch: 'full' }
];

export const routing = RouterModule.forRoot(appRoutes);