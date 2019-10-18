import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { TypeaheadModule } from 'ngx-bootstrap/typeahead';
import { RatingModule } from 'ngx-bootstrap/rating';

import { VinculacionesComponent } from './vinculaciones.component';
import { VinculacionComponent } from './vinculacion/vinculacion.component';
import { SharedModule } from '../../shared/shared.module';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,  
    RouterModule,
    RatingModule.forRoot(),
    TooltipModule.forRoot(),
    TypeaheadModule.forRoot(),
     SharedModule
  ],
  declarations: [
    VinculacionesComponent,
    VinculacionComponent,

    
  ],
  exports: [
    VinculacionesComponent 
  ]
})
export class VinculacionesModule { }