import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

declare var $: any;

@Component({
  selector: 'app-cap-tdr',
  templateUrl: './cap-tdr.component.html'
})
export class CapTdrComponent implements OnInit {

	@Input() cap:any = {};
	public especialidades:any = [];
	public empresarios:any = [];
	public loading:boolean = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) {
		this.router.routeReuseStrategy.shouldReuseRoute = function() {return false; };
	}

	ngOnInit() {
		
		$('.previsualizar').click(function(e) {$("#texto").val($(this).val()); $("#myModalBandera").val($(this).attr("name")); var nombre = $('#myModalBandera').val(); $("#titulo").text($("label[for=" + nombre + "]").text()); $('#myModal').modal('show'); });

		this.apiService.getAll('especialidades').subscribe(especialidades => {
		    this.especialidades = especialidades;                   
		});

		this.apiService.getAll('empresarios/all').subscribe(empresarios => {
		    this.empresarios = empresarios;                   
		});
	}

	public ocultar(){var text = $("#texto").val(); var nombre = $('#myModalBandera').val(); $("textarea[name=" + nombre + "]").val(text); $('#myModal').modal('hide') }

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al at
	    this.cap.asesor_id = this.apiService.auth_user().id;
	    this.cap.estado = 'Creada';
	    this.apiService.store('cap', this.cap).subscribe(cap => {
	    	if(!this.cap.id) {
	    		this.router.navigate(['/cap/'+ cap.id]);
	    	}else{
	    		this.cap = cap;
	    	}
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
