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
                    sessionStorage.setItem('token_cdmype', JSON.stringify(data.token));
                    sessionStorage.setItem('auth_user_cdmype', JSON.stringify(data.user));
                }
            });
        
    }

    register(user : any) {
        return this.http.post(this.apiService.baseUrl + 'api/register', user)
            .map((response: Response) => {
                let data = response.json();
                if (data.token && data.user) {
                    sessionStorage.setItem('token_cdmype', JSON.stringify(data.token));
                    sessionStorage.setItem('auth_user_cdmype', JSON.stringify(data.user));
                }
            });
        
    }

    logout() {
        sessionStorage.removeItem('token_cdmype');
        sessionStorage.removeItem('auth_user_cdmype');
    }

    autenticated(){
        let token = this.apiService.auth_token();
        if(token) {
            return true;
        }else{
            return false;
        }
    }

    
}
