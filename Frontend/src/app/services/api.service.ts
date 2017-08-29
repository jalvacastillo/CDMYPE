import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions, Response } from '@angular/http';

@Injectable()
export class ApiService {

    // public baseUrl: string = 'http://cri.catolica.edu.sv/cdmype/api/';
    public baseUrl: string = 'http://localhost:8000/api/';

    constructor(private http: Http) { }

    getAll(url:string) {
        return this.http.get(this.baseUrl + url, this.jwt()).map((response: Response) => response.json());
    }

    read(url:string, id: number) {
        return this.http.get(this.baseUrl + url + id, this.jwt()).map((response: Response) => response.json());
    }

    store(url:string, model:any) {
        return this.http.post(this.baseUrl + url, model, this.jwt()).map((response: Response) => response.json());
    }

    delete(url:string, id: number) {
        return this.http.delete(this.baseUrl + url + id, this.jwt()).map((response: Response) => response.json());
    }

    upload (url: string, consultor: any, oferta:any) {

            let formData:FormData = new FormData();
            formData.append('file', oferta, oferta.name);
            formData.append('consultor_id', consultor.id);
 
            let headers = new Headers();
            headers.append('Accept', 'application/json');
            headers.append('Authorization','Bearer ' + JSON.parse(sessionStorage.getItem('currentUser')).token );

            let options = new RequestOptions({ headers: headers });

            return this.http.post(this.baseUrl + url, formData, options).map(res => res.json());

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

    // private helper methods

    private jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(sessionStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new Headers({ 'Authorization': 'Bearer ' + currentUser.token });
            return new RequestOptions({ headers: headers });
        }
    }

}
