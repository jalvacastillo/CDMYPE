import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EquipoCuentaComponent } from './equipo-cuenta.component';

describe('EquipoCuentaComponent', () => {
  let component: EquipoCuentaComponent;
  let fixture: ComponentFixture<EquipoCuentaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EquipoCuentaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EquipoCuentaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
