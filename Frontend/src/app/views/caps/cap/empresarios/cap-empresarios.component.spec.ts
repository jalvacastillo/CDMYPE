import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapEmpresariosComponent } from './cap-empresarios.component';

describe('CapEmpresariosComponent', () => {
  let component: CapEmpresariosComponent;
  let fixture: ComponentFixture<CapEmpresariosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapEmpresariosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapEmpresariosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
