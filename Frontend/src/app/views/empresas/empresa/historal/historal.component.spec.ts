import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HistoralComponent } from './historal.component';

describe('HistoralComponent', () => {
  let component: HistoralComponent;
  let fixture: ComponentFixture<HistoralComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HistoralComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HistoralComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
