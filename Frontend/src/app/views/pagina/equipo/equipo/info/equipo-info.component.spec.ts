import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EquipoInfoComponent } from './equipo-info.component';

describe('EquipoInfoComponent', () => {
  let component: EquipoInfoComponent;
  let fixture: ComponentFixture<EquipoInfoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EquipoInfoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EquipoInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
