import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

import { LoginComponent } from './../auth/login/login.component';
import { RegisterComponent } from './../auth/register/register.component';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    RouterModule
  ],
  declarations: [
  	LoginComponent,
    RegisterComponent
  ],
  exports: [
  	LoginComponent,
    RegisterComponent
  ]
})
export class AuthModule { }
