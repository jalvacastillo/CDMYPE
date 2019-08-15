import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpResponse, HttpErrorResponse } from '@angular/common/http';
import { map, catchError, retry } from 'rxjs/operators';
import { Observable, throwError } from 'rxjs';
import { AlertService } from '../services/alert.service';

@Injectable()

export class ApiService {

    public baseUrl: string = 'http://localhost:8000';
    // public baseUrl: string = 'https://cdmypeunicaesilobasco.com';
    public apiUrl: string = this.baseUrl + '/api/';

    constructor(private http: HttpClient, private alertService: AlertService) { }
   
    getAll(url:string) {return this.http.get<any>(this.apiUrl + url, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    read(url:string, id: number) {return this.http.get<any>(this.apiUrl + url + id, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    filter(url:string, filter: any) {return this.http.get<any>(this.apiUrl + url + filter, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    store(url:string, model:any) {return this.http.post<any>(this.apiUrl + url, model, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    delete(url:string, id: number) {return this.http.delete<any>(this.apiUrl + url + id, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    paginate(url:string) {return this.http.get<any>(url, this.jwt()).pipe(retry(3), catchError(this.handleError) )}

    upload (url: string, formData: any) {

        let headers = new HttpHeaders();
        headers.append('Accept', 'application/json');
        headers.append('Authorization','Bearer ' + JSON.parse(sessionStorage.getItem('token')) );
        let options = {headers};
        return this.http.post(this.apiUrl + url, formData, options).pipe(retry(3), catchError(this.handleError))

    }

    login(user:any) { return this.http.post(this.apiUrl + 'login', user).pipe(map((response: HttpResponse<any>) => {let data:any = response; if (data.token && data.user) {sessionStorage.setItem('token', JSON.stringify(data.token)); sessionStorage.setItem('auth_user', JSON.stringify(data.user)); } })); }

    register(user:any) { return this.http.post(this.apiUrl + 'register', user).pipe(map((response: HttpResponse<any>) => {let data:any = response; if (data.token && data.user) {sessionStorage.setItem('token', JSON.stringify(data.token)); sessionStorage.setItem('auth_user', JSON.stringify(data.user)); } })); }

    logout() { sessionStorage.removeItem('token'); sessionStorage.removeItem('auth_user'); }

    autenticated(){ let token = JSON.parse(sessionStorage.getItem('token')); if(token) { return true; } else {return false; } }
    
    auth_user(){ return JSON.parse(sessionStorage.getItem('auth_user')); }

    auth_token(){ return JSON.parse(sessionStorage.getItem('token')); }

    private jwt() {
        let token = JSON.parse(sessionStorage.getItem('token'));
        if (token) { return { headers: new HttpHeaders({'Content-Type':  'application/json', 'Authorization': 'Bearer ' + token }) } }
    }

    date():string{
        let today = new Date(); let dd = today.getDate(); let mm = today.getMonth()+1; let d; let m;
        var yyyy = today.getFullYear();

        if(dd<10){d='0'+dd;}else{d= dd;}
        if(mm<10){m='0'+mm;} else{m=mm;}

        let date:string = yyyy+'-'+m+'-'+d;

        return date;

    }

    datetime():string{
        let today = new Date(); let dd = today.getDate(); let mm = today.getMonth()+1; let hh = today.getHours(); let min = today.getMinutes(); let sec = today.getSeconds(); let d; let m; let h; let se;
        var yyyy = today.getFullYear();

        if(dd<10){d='0'+dd;}else{d= dd;}
        if(mm<10){m='0'+mm;} else{m=mm;}
        if(sec<10){se='0'+sec;} else{se=sec;}

        let datetime:string = yyyy+'-'+m+'-'+d + ' ' + hh + ':' + min + ':' + se;

        return datetime;

    }

    slug(str) {
        str = str.replace(/^\s+|\s+$/g, ''); str = str.toLowerCase();
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;"; var to   = "aaaaeeeeiiiioooouuuunc------";
        for (var i=0, l=from.length ; i<l ; i++) {str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i)); }
        str = str.replace(/[^a-z0-9 -]/g, '') .replace(/\s+/g, '-') .replace(/-+/g, '-');
        return str;
    }

    private handleError(error: HttpErrorResponse) {
      return throwError(error);
    };
}
