import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ConsultorHistorialComponent } from './consultor-historial.component';

describe('ConsultorHistorialComponent', () => {
  let component: ConsultorHistorialComponent;
  let fixture: ComponentFixture<ConsultorHistorialComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ConsultorHistorialComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ConsultorHistorialComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
