import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions, Response } from '@angular/http';
import 'rxjs/add/operator/retry';

@Injectable()
export class ApiService {

    // public baseUrl: string = 'http://cri.catolica.edu.sv/cdmype/';
    public baseUrl: string = 'http://localhost:8000/';

    constructor(private http: Http) { }

    getAll(url:string) {
        return this.http.get(this.baseUrl + 'api/' + url, this.jwt()).retry(3).map((response: Response) => response.json());
    }

    read(url:string, id: number) {
        return this.http.get(this.baseUrl + 'api/' + url + id, this.jwt()).retry(3).map((response: Response) => response.json());
    }

    store(url:string, model:any) {
        return this.http.post(this.baseUrl + 'api/' + url, model, this.jwt()).retry(3).map((response: Response) => response.json());
    }

    delete(url:string, id: number) {
        return this.http.delete(this.baseUrl + 'api/' + url + id, this.jwt()).retry(3).map((response: Response) => response.json());
    }

    upload (url: string, id: any, oferta:any) {

            let formData:FormData = new FormData();
            formData.append('file', oferta);
            formData.append('id', id);
 
            return this.http.post(this.baseUrl + 'api/' + url, formData, this.jwt()).retry(3).map(res => res.json());

    }

    fecha():string{
        let today = new Date();
        let dd = today.getDate();
        let mm = today.getMonth()+1;
        let d;
        let m;

        var yyyy = today.getFullYear();

        if(dd<10){d='0'+dd;}else{d= dd;}
        if(mm<10){m='0'+mm;} else{m=mm;}

        let date:string = yyyy+'-'+m+'-'+d;

        return date;

    }

    auth_user(){
        return JSON.parse(sessionStorage.getItem('auth_user'));
    }

    auth_token(){
        return JSON.parse(sessionStorage.getItem('token'));
    }

    // private helper methods

    private jwt() {
        // create authorization header with jwt token
        let token = JSON.parse(sessionStorage.getItem('token'));
        if (token) {
            let headers = new Headers({ 'Authorization': 'Bearer ' + token });
            return new RequestOptions({ headers: headers });
        }
    }

}
