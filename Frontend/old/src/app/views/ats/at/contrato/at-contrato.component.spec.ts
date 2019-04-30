import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtContratoComponent } from './at-contrato.component';

describe('AtContratoComponent', () => {
  let component: AtContratoComponent;
  let fixture: ComponentFixture<AtContratoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtContratoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtContratoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
