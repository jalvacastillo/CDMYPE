import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})

export class NavbarComponent implements OnInit {

    public name = 'CDMYPE';
    public routes:any;

    constructor() { }

    ngOnInit() {


    this.routes = [
        // { path: 'dashboard', title: 'CDMYPE',  icon: 'dashboard' },
        { path: 'clientes', title: 'Clientes',  icon:'users' },
        { path: 'consultores', title: 'Consultores',  icon:'users' },
        { path: 'asistencias', title: 'AT',  icon:'book' },
        { path: 'capacitaciones', title: 'Cap',  icon:'list' },
        { path: 'salidas', title: 'Salidas',  icon:'map' },
        { path: '', title: 'Página',  icon:'columns', parts:
            [
              { path:'noticias', title: 'Noticias', icon:'archive' },
              { path:'proyectos', title: 'Proyectos', icon:'briefcase' }
            ]
        },
        // { path: 'login', title: 'Login',  icon: 'star' },
    ];

  }

}
