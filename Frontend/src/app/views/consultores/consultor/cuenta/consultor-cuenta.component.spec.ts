import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ConsultorCuentaComponent } from './consultor-cuenta.component';

describe('ConsultorCuentaComponent', () => {
  let component: ConsultorCuentaComponent;
  let fixture: ComponentFixture<ConsultorCuentaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ConsultorCuentaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ConsultorCuentaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
