import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { ModalModule } from 'ngx-bootstrap';

import { NoticiasComponent } from './noticias/noticias.component';
import { NoticiaComponent } from './noticias/noticia/noticia.component';
import { ProyectosComponent } from './proyectos/proyectos.component';
import { ProyectoComponent } from './proyectos/proyecto/proyecto.component';
import { ResultadosComponent } from './resultados/resultados.component';
import { TestimoniosComponent } from './testimonios/testimonios.component';
import { TestimonioComponent } from './testimonios/testimonio/testimonio.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    ModalModule.forRoot(),
    TooltipModule.forRoot()
  ],
  declarations: [
    NoticiasComponent,
    NoticiaComponent,
    ProyectosComponent,
  	ProyectoComponent,
    ResultadosComponent,
    TestimoniosComponent,
    TestimonioComponent
  ],
  exports: [
    NoticiasComponent,
    NoticiaComponent,
    ProyectosComponent,
  	ProyectoComponent,
    ResultadosComponent,
    TestimoniosComponent,
    TestimonioComponent
  ]
})
export class PaginaModule { }
