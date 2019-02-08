import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EmpresaEmpresariosComponent } from './empresa-empresarios.component';

describe('EmpresaEmpresariosComponent', () => {
  let component: EmpresaEmpresariosComponent;
  let fixture: ComponentFixture<EmpresaEmpresariosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EmpresaEmpresariosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EmpresaEmpresariosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
