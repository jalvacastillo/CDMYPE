import { Injectable } from '@angular/core';
import { Http, Headers, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';

import { ApiService } from '../services/api.service';

@Injectable()
export class AuthService {


    constructor(private http: Http, private apiService: ApiService) { }

    login(user : any) {
        return this.http.post(this.apiService.baseUrl + 'api/login', user)
            .map((response: Response) => {
                let data = response.json();
                if (data.token && data.user) {
                    sessionStorage.setItem('token', JSON.stringify(data.token));
                    sessionStorage.setItem('auth_user', JSON.stringify(data.user));
                }
            });
        
    }

    register(user : any) {
        return this.http.post(this.apiService.baseUrl + 'register', user)
            .map((response: Response) => {
                let data = response.json();
                if (data.token && data.user) {
                    sessionStorage.setItem('token', JSON.stringify(data.token));
                    sessionStorage.setItem('auth_user', JSON.stringify(data.user));
                }
            });
        
    }

    logout() {
        sessionStorage.removeItem('token');
    }

    autenticated(){
        let token = JSON.parse(sessionStorage.getItem('token'));
        if(token) {
            return true;
        }else{
            return false;
        }
    }

    
}
