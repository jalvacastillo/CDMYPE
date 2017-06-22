import { Routes, RouterModule } from '@angular/router';

import { LoginComponent } from './login/login.component';
import { DashComponent } from './dash/dash.component';

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
import { AtEnviadosComponent } from './dash/asistencias/enviados/enviados.component';
import { AtOfertasComponent } from './dash/asistencias/ofertas/ofertas.component';
import { AtContratoComponent } from './dash/asistencias/contrato/contrato.component';
import { AtActaComponent } from './dash/asistencias/acta/acta.component';

import { CapacitacionesComponent } from './dash/capacitaciones/capacitaciones.component';


import { SalidasComponent } from './dash/salidas/salidas.component';
import { SalidaComponent } from './dash/salidas/form/salida.component';

import { NoticiasComponent } from './dash/noticias/noticias.component';
import { NoticiaComponent } from './dash/noticias/noticia/noticia.component';
import { ProyectosComponent } from './dash/proyectos/proyectos.component';
import { ProyectoComponent } from './dash/proyectos/proyecto/proyecto.component';

import { AuthGuard } from './auth.guard';

const appRoutes: Routes = [
    { path: 'login', component: LoginComponent },
    { path: 'dashboard', component: DashComponent, canActivate: [AuthGuard] },

    { path: 'clientes', component: ClientesComponent, canActivate: [AuthGuard] },
    { path: 'cliente/empresa/:id', component: EmpresaComponent, canActivate: [AuthGuard] },
    { path: 'cliente/empresario/:id', component: EmpresarioComponent, canActivate: [AuthGuard] },
    { path: 'cliente/indicadores/:id', component: IndicadoresComponent, canActivate: [AuthGuard] },
    { path: 'cliente/proyectos/:id', component: CProyectosComponent, canActivate: [AuthGuard] },
    { path: 'cliente/historial/:id', component: HistorialComponent, canActivate: [AuthGuard] },

    { path: 'consultores', component: ConsultoresComponent, canActivate: [AuthGuard] },
    { path: 'consultor/:id', component: ConsultorComponent, canActivate: [AuthGuard] },
    { path: 'consultor/especialidades/:id', component: CEspecialidadesComponent, canActivate: [AuthGuard] },
    { path: 'consultor/historial/:id', component: CHistorialComponent, canActivate: [AuthGuard] },
    
    { path: 'asistencias', component: AsistenciasComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/termino/:id', component: AtTerminoComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/consultores/:id', component: AtConsultoresComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/enviados/:id', component: AtEnviadosComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/ofertas/:id', component: AtOfertasComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/contrato/:id', component: AtContratoComponent, canActivate: [AuthGuard] },
    { path: 'asistencia/acta/:id', component: AtActaComponent, canActivate: [AuthGuard] },

    { path: 'capacitaciones', component: CapacitacionesComponent, canActivate: [AuthGuard] },

    { path: 'salidas', component: SalidasComponent, canActivate: [AuthGuard] },
    { path: 'salida/:id', component: SalidaComponent, canActivate: [AuthGuard] },

    { path: 'noticias', component: NoticiasComponent, canActivate: [AuthGuard] },
    { path: 'noticia/:id', component: NoticiaComponent, canActivate: [AuthGuard] },
    { path: 'proyectos', component: ProyectosComponent, canActivate: [AuthGuard] },

    // otherwise redirect to home
    { path: '**', redirectTo: 'dashboard' }
];

export const routing = RouterModule.forRoot(appRoutes);