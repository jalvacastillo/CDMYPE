import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../services/alert.service';
import { AuthService } from '../../services/auth.service';

declare let $;

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

 public user: any = {};
    public loading = false;
    public saludo:string;

    constructor( private authService: AuthService, private router: Router, private alertService: AlertService) { }

    ngOnInit() {
    }

    register() {
        this.loading = true;
        this.authService.register(this.user)
        .subscribe(
            data => {
                this.alertService.success("Gracias por registrarse.");
                this.router.navigate(['/']);
            },
            error => {
                $('.container').addClass("animated shake");
                this.alertService.error(error);
                this.loading = false;
            });
    }

}
