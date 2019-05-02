import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EquipoMetasComponent } from './equipo-metas.component';

describe('EquipoMetasComponent', () => {
  let component: EquipoMetasComponent;
  let fixture: ComponentFixture<EquipoMetasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EquipoMetasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EquipoMetasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
