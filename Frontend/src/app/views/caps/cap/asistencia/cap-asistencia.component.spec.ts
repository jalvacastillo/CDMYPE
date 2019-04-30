import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapAsistenciaComponent } from './cap-asistencia.component';

describe('CapAsistenciaComponent', () => {
  let component: CapAsistenciaComponent;
  let fixture: ComponentFixture<CapAsistenciaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapAsistenciaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapAsistenciaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
