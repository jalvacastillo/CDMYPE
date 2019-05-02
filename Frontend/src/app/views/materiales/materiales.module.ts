import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { SharedModule } from '../../shared/shared.module';
import { TooltipModule } from 'ngx-bootstrap';
import { TypeaheadModule } from 'ngx-bootstrap/typeahead';
import { RatingModule } from 'ngx-bootstrap/rating';

import { MaterialesComponent } from './materiales.component';
import { MaterialComponent } from './material/material.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,  
    RouterModule,
    SharedModule,
    RatingModule.forRoot(),
    TooltipModule.forRoot(),
    TypeaheadModule.forRoot()
  ],
  declarations: [
  	MaterialesComponent,
    MaterialComponent,
  ],
  exports: [
  	MaterialesComponent,
    MaterialComponent,
  ]
})
export class MaterialesModule { }
