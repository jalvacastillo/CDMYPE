import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EmpresaIndicadoresComponent } from './empresa-indicadores.component';

describe('EmpresaIndicadoresComponent', () => {
  let component: EmpresaIndicadoresComponent;
  let fixture: ComponentFixture<EmpresaIndicadoresComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EmpresaIndicadoresComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EmpresaIndicadoresComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
