import { Component, OnInit, EventEmitter, Output, Input } from '@angular/core';
import { Data } from '../../../models/data';

@Component({
  selector: 'app-pagination',
  templateUrl: './pagination.component.html'
})
export class PaginationComponent implements OnInit {

	@Output() setPagination = new EventEmitter();
	@Input() items:Data;

	constructor() { }

	ngOnInit() {}

    setPage(page:number){
		this.setPagination.emit({page: page});
	}

}
