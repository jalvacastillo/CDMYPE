import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions, Response } from '@angular/http';
import 'rxjs/add/operator/retry';

@Injectable()
export class ApiService {

    // public baseUrl: string = 'http://cdmypeunicaesilobasco.com/';
    public baseUrl: string = 'http://localhost:8000/';

    constructor(private http: Http) { }

    getAll(url:string) {return this.http.get(this.baseUrl + 'api/' + url, this.jwt()).retry(3).map((response: Response) => response.json()); }

    read(url:string, id: number) {return this.http.get(this.baseUrl + 'api/' + url + id, this.jwt()).retry(3).map((response: Response) => response.json()); }

    store(url:string, model:any) {return this.http.post(this.baseUrl + 'api/' + url, model, this.jwt()).retry(3).map((response: Response) => response.json()); }

    delete(url:string, id: number) {return this.http.delete(this.baseUrl + 'api/' + url + id, this.jwt()).retry(3).map((response: Response) => response.json()); }

    paginate(url:string) {return this.http.get(url, this.jwt()).retry(3).map((response: Response) => response.json());}

    upload (url: string, formData: any) {

        let headers = new Headers();
        headers.append('Accept', 'application/json');
        headers.append('Authorization','Bearer ' + JSON.parse(sessionStorage.getItem('token')) );

        let options = new RequestOptions({ headers: headers });

        return this.http.post(this.baseUrl + 'api/' + url, formData, options).retry(3).map(res => res.json());

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

    slug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); str = str.toLowerCase();
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;"; var to   = "aaaaeeeeiiiioooouuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i)); }
        str = str.replace(/[^a-z0-9 -]/g, '') .replace(/\s+/g, '-') .replace(/-+/g, '-');
        return str;
    }

    auth_user(){ return JSON.parse(sessionStorage.getItem('auth_user')); }

    auth_token(){ return JSON.parse(sessionStorage.getItem('token')); }

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
