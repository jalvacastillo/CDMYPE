import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ActividadInfoComponent } from './actividad-info.component';

describe('ActividadInfoComponent', () => {
  let component: ActividadInfoComponent;
  let fixture: ComponentFixture<ActividadInfoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActividadInfoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ActividadInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
