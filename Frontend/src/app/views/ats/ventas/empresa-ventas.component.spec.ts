import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EmpresaVentasComponent } from './empresa-ventas.component';

describe('EmpresaVentasComponent', () => {
  let component: EmpresaVentasComponent;
  let fixture: ComponentFixture<EmpresaVentasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EmpresaVentasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EmpresaVentasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
