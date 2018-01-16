import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
// import { Observable } from 'rxjs';
// import { Subject } from 'rxjs/Subject';

declare var $: any;

@Injectable()
export class AlertService {

    constructor(private router: Router) {}

    success(message: any) {
        console.log(message);
        $.notify({icon: "fa fa-check-circle fa-2x", message: message },{
            type: 'success',
            timer: 1000,
            placement: {from: 'top', align: 'center'}
        });

    }

    info(message: any) {
        console.log(message);
        $.notify({icon: "fa fa-info-circle fa-2x", message: message },{
            type: 'info',
            timer: 1000,
            placement: {from: 'top', align: 'center'}
        });

    }

    error(message: any) {
        // Sin coneccion al servidor
        if(message.type == 3) {
            console.log(message);
            $.notify({icon: "fa fa-exclamation-circle fa-2x", title: 'Woops!', message: '<p>No hay conección al servidor</p>' },{
               type: 'danger',
               timer: 1000,
               placement: {from: 'top', align: 'center'}
            });

        }else if (message._body){
            let msj = JSON.parse(message._body);
            console.log(msj);

            $.notify({icon: "fa fa-exclamation-circle fa-2x", title: 'Woops!', message: '<p>' + msj.error + '</p>' },{
               type: 'warning',
               timer: 1000,
               placement: {from: 'top', align: 'center'}
            });
            if(msj.code == 401) {
                this.router.navigate(['/login']);
            }
        }else{
            let msj = JSON.parse(message);
            console.log(msj);

            $.notify({icon: "fa fa-exclamation-circle fa-2x", title: 'Woops!', message: '<p>'+ msj.error +'</p>' },{
               type: 'warning',
               timer: 1000,
               placement: {from: 'top', align: 'center'}
            });
        }
    }

}