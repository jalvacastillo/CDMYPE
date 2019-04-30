import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BuscadorEmpresariosComponent } from './buscador-empresarios.component';

describe('BuscadorEmpresariosComponent', () => {
  let component: BuscadorEmpresariosComponent;
  let fixture: ComponentFixture<BuscadorEmpresariosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BuscadorEmpresariosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BuscadorEmpresariosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
