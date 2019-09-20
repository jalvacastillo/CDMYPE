import { Component, OnInit } from '@angular/core';
import { BsModalService } from 'ngx-bootstrap/modal';
import { BsModalRef } from 'ngx-bootstrap/modal/bs-modal-ref.service';

import { Router, ActivatedRoute } from '@angular/router';
import { AlertService } from '../../../../services/alert.service';
import { ApiService } from '../../../../services/api.service';

@Component({
  selector: 'app-historal',
  templateUrl: './historal.component.html',
  styleUrls: ['./historal.component.css']
})
export class HistoralComponent implements OnInit {

  public empresa: any = {};
  public loading: boolean;
  constructor() { }

  ngOnInit() {
  }

}
