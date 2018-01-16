import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { FroalaEditorModule, FroalaViewModule } from 'angular-froala-wysiwyg';

import { NoticiasComponent } from './noticias.component';
import { NoticiaComponent } from './noticia/noticia.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    TooltipModule.forRoot(),
    FroalaEditorModule.forRoot(), FroalaViewModule.forRoot()
  ],
  declarations: [
  	NoticiasComponent,
    NoticiaComponent
  ],
  exports: [
  	NoticiasComponent,
    NoticiaComponent
  ]
})
export class NoticiasModule { }
