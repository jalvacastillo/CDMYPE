import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { TooltipModule } from 'ngx-bootstrap';
import { TypeaheadModule } from 'ngx-bootstrap/typeahead';
import { RatingModule } from 'ngx-bootstrap/rating';

import { SalidasComponent } from './salidas.component';
import { SalidaComponent } from './salida/salida.component';

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
  	SalidasComponent,
    SalidaComponent,
  ],
  exports: [
  	SalidasComponent,
    SalidaComponent,
  ]
})
export class SalidasModule { }
