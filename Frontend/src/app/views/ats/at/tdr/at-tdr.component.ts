import { Component, OnInit, Input } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

declare var $: any;

@Component({
  selector: 'app-at-tdr',
  templateUrl: './at-tdr.component.html'
})
export class AtTdrComponent implements OnInit {

	@Input() at:any = {};
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
		
		$('.previsualizar').click(function(e) {$("#texto").val($(this).val()); $("#myModalBandera").val($(this).attr("name")); var nombre = $('#myModalBandera').val(); $("#titulo").text($("label[for=" + nombre + "]").text()); $('#myModal').modal('show'); setTimeout(()=>{ $("#texto").focus(); }, 500) });

		this.apiService.getAll('especialidades').subscribe(especialidades => {
		    this.especialidades = especialidades;                   
		});

		this.apiService.getAll('empresarios/all').subscribe(empresarios => {
		    this.empresarios = empresarios;                   
		});
	}

	public ocultar(){var text = $("#texto").val(); var nombre = $('#myModalBandera').val(); this.at[nombre] = text; $('#myModal').modal('hide') }

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al at
	    this.at.asesor_id = this.apiService.auth_user().id;
	    this.apiService.store('at', this.at).subscribe(at => {
	    	if(!this.at.id) {
	    		this.router.navigate(['/at/'+ at.id]);
	    	}else{
	    		this.at = at;
	    	}
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
