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
	public especialidades:any[] = [];
	public loading:boolean = false;

	constructor( 
	    private apiService: ApiService, private alertService: AlertService,
	    private route: ActivatedRoute, private router: Router
	) { }

	ngOnInit() {
		
		$('.previsualizar').click(function(e) {$("#texto").val($(this).val()); $("#myModalBandera").val($(this).attr("name")); var nombre = $('#myModalBandera').val(); $("#titulo").text($("label[for=" + nombre + "]").text()); $('#myModal').modal('show'); });

		this.apiService.getAll('especialidades').subscribe(especialidades => {
		    this.especialidades = especialidades;                   
		});
	}

	public ocultar(){var text = $("#texto").val(); var nombre = $('#myModalBandera').val(); $("textarea[name=" + nombre + "]").val(text); $('#myModal').modal('hide') }

	public onSubmit() {
	    this.loading = true;
	    // Guardamos al at
	    this.apiService.store('at', this.at).subscribe(at => {
	    	this.at = at;
	    	this.loading = false;
	    },error => {this.alertService.error(error); this.loading = false; });
	}

}
