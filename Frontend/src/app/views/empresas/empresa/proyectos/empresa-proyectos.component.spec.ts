import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EmpresaProyectosComponent } from './empresa-proyectos.component';

describe('EmpresaProyectosComponent', () => {
  let component: EmpresaProyectosComponent;
  let fixture: ComponentFixture<EmpresaProyectosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EmpresaProyectosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EmpresaProyectosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
