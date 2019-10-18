import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { TypeaheadModule } from 'ngx-bootstrap/typeahead';
import { RatingModule } from 'ngx-bootstrap/rating';

import { CoordinacionesComponent } from './coordinaciones.component';
import { InfoComponent } from './info/info.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,  
    RouterModule,
    RatingModule.forRoot(),
    TooltipModule.forRoot(),
    TypeaheadModule.forRoot()
  ],
  declarations: [
    CoordinacionesComponent,
    InfoComponent
    
  ],
  exports: [
    CoordinacionesComponent 
  ]
})
export class CoordinacionesModule { }
