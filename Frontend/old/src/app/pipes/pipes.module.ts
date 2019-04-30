import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SumPipe } from './sum.pipe';
import { TruncatePipe } from './truncate.pipe';
import { FilterPipe } from './filter.pipe';

@NgModule({
  imports: [
    CommonModule,
  ],
  declarations: [
  	SumPipe,
    TruncatePipe,
    FilterPipe
  ],
  exports: [
  	SumPipe,
    TruncatePipe,
    FilterPipe
  ]
})
export class PipesModule { }
