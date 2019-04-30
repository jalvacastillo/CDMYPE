import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ConsultorEspecialidadesComponent } from './consultor-especialidades.component';

describe('ConsultorEspecialidadesComponent', () => {
  let component: ConsultorEspecialidadesComponent;
  let fixture: ComponentFixture<ConsultorEspecialidadesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ConsultorEspecialidadesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ConsultorEspecialidadesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
