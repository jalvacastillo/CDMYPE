import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EquipoEmpresasComponent } from './equipo-empresas.component';

describe('EquipoEmpresasComponent', () => {
  let component: EquipoEmpresasComponent;
  let fixture: ComponentFixture<EquipoEmpresasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EquipoEmpresasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EquipoEmpresasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
