import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { FocusModule } from 'angular2-focus';
import { NgxMaskModule } from 'ngx-mask';

import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { PaginationComponent } from './parts/pagination/pagination.component';
import { DescargarExcelComponent } from './parts/descargar-excel/descargar-excel.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule,
    NgxMaskModule.forRoot(),
    FocusModule.forRoot()
  ],
  declarations: [
  	FooterComponent,
    HeaderComponent,
    PaginationComponent,
    DescargarExcelComponent
  ],
  exports: [
  	FooterComponent,
    HeaderComponent,
    PaginationComponent,
    DescargarExcelComponent
  ]
})
export class SharedModule { }
