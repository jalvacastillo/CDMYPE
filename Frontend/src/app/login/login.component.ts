import { Component, OnInit } from '@angular/core';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../services/alert.service';
import { AuthService } from '../services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

    public user: any = {};
    public loading = false;

  constructor( private authService: AuthService, private router: Router, private alertService: AlertService) { }

    ngOnInit() {
        this.authService.logout();
    }

    login() {
        this.loading = true;
        this.authService.login(this.user)
            .subscribe(
                data => {
                    this.router.navigate(['/dashboard']);
                    this.alertService.success("Bienvenido");
                },
                error => {
                    this.alertService.error(error);
                    this.loading = false;
                });
    }

}
