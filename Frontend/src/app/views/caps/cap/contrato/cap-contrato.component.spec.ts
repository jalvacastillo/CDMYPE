import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapContratoComponent } from './cap-contrato.component';

describe('CapContratoComponent', () => {
  let component: CapContratoComponent;
  let fixture: ComponentFixture<CapContratoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapContratoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapContratoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
