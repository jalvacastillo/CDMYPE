import { Injectable } from '@angular/core';
import { Http, Headers, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';


@Injectable()
export class AuthService {

  constructor(private http: Http) { }

    login(user : any) {
        // return this.http.post('http://cri.catolica.edu.sv/cdmype/api/login', user)
        return this.http.post('http://localhost:8000/api/login', user)
            .map((response: Response) => {
                // login successful if there's a jwt token in the response
                console.log(response);
                let user = response.json();
                if (user && user.token) {
                    // store user details and jwt token in local storage to keep user logged in between page refreshes
                    sessionStorage.setItem('currentUser', JSON.stringify(user));
                }
            });
    }

    logout() {
        // remove user from local storage to log user out
        sessionStorage.removeItem('currentUser');
    }

    autenticated(){
        let currentUser = JSON.parse(sessionStorage.getItem('currentUser'));
        if(currentUser) {
            return true;
        }else{
            return false;
        }
    }
}
